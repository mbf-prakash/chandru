<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Invoiceitem;
use AppBundle\Form\InvoiceitemType;
use AppBundle\Entity\Invoice;
use AppBundle\Entity\Myinvoiceitem;
use AppBundle\Form\MyinvoiceitemType;

use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Column\TextColumn;
use APY\DataGridBundle\Grid\Column\ActionsColumn;
use APY\DataGridBundle\Grid\Action\MassAction;
use APY\DataGridBundle\Grid\Action\DeleteMassAction;
use APY\DataGridBundle\Grid\Action\RowAction;
use APY\DataGridBundle\Grid\Export\DSVExport;
use APY\DataGridBundle\Grid\Column\BlankColumn;
use APY\DataGridBundle\Grid\Column\DateColumn;
use APY\DataGridBundle\Grid\Column\RankColumn;
use Symfony\Component\Intl\Intl;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;


class InvoiceitemController extends Controller

{
   //Invoice Items
    /**
     * @Route("/admin/invoiceitem", name="invoiceitem")
     */

    public function invoiceitemAction(Request $request)
    { 
        $params=$request->query->all();
        $id=$params['id'];
        $em = $this->getDoctrine()->getManager();
        $invoice = $em->getRepository('AppBundle:Invoice')->find($id);
        

        if (!$invoice) {
        throw $this->createNotFoundException(
            'No invoice found for id '.$id
                                      );
                    }
        else
        { 
            
             // Get subtotal
             $repo = $this->getDoctrine()
             ->getManager()
             ->getRepository('AppBundle:Invoiceitem');
      $qb = $repo->createQueryBuilder('a');
      $qb->select('SUM(a.amount)');
      $qb->where('a.invoice = :invoice');
      $qb->setParameter('invoice', $invoice->getId());
      $subtotal = $qb->getQuery()->getSingleScalarResult();
      if($subtotal==null)
      {
         $subtotal=0;
      }
      // Get cgst
      $repo = $this->getDoctrine()
      ->getManager()
      ->getRepository('AppBundle:Invoiceitem');
        $qb = $repo->createQueryBuilder('a');
        $qb->select('SUM(a.cgst)');
        $qb->where('a.invoice = :invoice');
        $qb->setParameter('invoice', $invoice->getId());
        $totalcgst = $qb->getQuery()->getSingleScalarResult();
        if($totalcgst==null)
        {
        $totalcgst=0;
        }

        // Get sgst
        $repo = $this->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:Invoiceitem');
        $qb = $repo->createQueryBuilder('a');
        $qb->select('SUM(a.sgst)');
        $qb->where('a.invoice = :invoice');
        $qb->setParameter('invoice', $invoice->getId());
        $totalsgst = $qb->getQuery()->getSingleScalarResult();
        if($totalsgst==null)
        {
        $totalsgst=0;
        }

        // Get igst
        $repo = $this->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:Invoiceitem');
        $qb = $repo->createQueryBuilder('a');
        $qb->select('SUM(a.igst)');
        $qb->where('a.invoice = :invoice');
        $qb->setParameter('invoice', $invoice->getId());
        $totaligst = $qb->getQuery()->getSingleScalarResult();
        if($totaligst==null)
        {
        $totaligst=0;
        }
        $total=round($subtotal+$totalcgst+$totalsgst+$totaligst);
        if($total>0)
        {
            $total=number_format((float)$total, 2, '.', '');

        }
        
       $myinvoiceitem = new Myinvoiceitem();
       $myinvoiceitem->setQuantity('1');
       $myinvoiceitem->setDiscount('0');
        $form = $this->createForm(MyinvoiceitemType::class, $myinvoiceitem);
        $form->handleRequest($request);
  
         if ($form->isSubmitted() && $form->isValid()) 
         {
            $invoiceitem = new Invoiceitem();
        
           $cgst=0;
           $sgst=0;
           $igst=0;

         
            // Get Customer State
            // $stateid=$invoice->getCustomer()->getState()->getId(); 
            // //  GST INFO
            // $em1 = $this->getDoctrine()->getManager();
            // $gst = $em1->getRepository('AppBundle:Gst')->find('1');
            //tax calculation
           
            // if($stateid==25)
            // {
            //     $cgst=round($subtotal*($gst->getCgst()/100),2);
            //     $sgst=round($subtotal*($gst->getSgst()/100),2);
            // }
            // else
            // {
            //   $igst=round($subtotal*($gst->getIgst()/100),2);  
            // }
            
             $em1 = $this->getDoctrine()->getManager();
            $product = $em1->getRepository('AppBundle:Product')->find($myinvoiceitem->getProduct());
            if($product->getStock()>=$myinvoiceitem->getQuantity()){
            $invoiceitem->setInvoice($invoice);
            $invoiceitem->setProduct($product->getProduct());
            $invoiceitem->setHssncode($product->getHssncode());  
            $invoiceitem->setGst($product->getGst());          
            $invoiceitem->setMrp($product->getMrp());
            $invoiceitem->setQuantity($myinvoiceitem->getQuantity()); 
            $invoiceitem->setUnit($product->getUnit());
            //get Product Rate
             $discount=0;
            if($myinvoiceitem->getDiscount()>0)
                {
                $discount = round(($product->getMrp() * $myinvoiceitem->getDiscount())/100,2);
            }
            $withtax = $product->getMrp() - $discount;
            $rate = $withtax / ((100+$product->getGst())/100);
            $roundrate = round($rate,2);
            $invoiceitem->setRate($roundrate);
            $invoiceitem->setDiscount(0);
            // calculating discount
           
           
            //calculating amount
            $amount = round($roundrate * $myinvoiceitem->getQuantity(),2);

            //calculating tax
            //get state code
            $statecode = $invoice->getCustomer()->getState()->getStatecode();
            if($statecode==33)
            {
                $cgst =  round($amount * ($product->getGst() / 200),2);
                $sgst = round($amount * ($product->getGst() / 200),2);

            }
            else
            {
                $igst = round($amount * ($product->getGst() / 100),2);
            }
           
    
            $invoiceitem->setCgst($cgst);
            $invoiceitem->setSgst($sgst);
            $invoiceitem->setIgst($igst);

            $invoiceitem->setAmount($amount);
           

            $em2 = $this->getDoctrine()->getManager();
            $em2->persist($invoiceitem);
            $em2->flush(); 
            // set stock
            $product->setStock($product->getStock() - $myinvoiceitem->getQuantity());  
            $em1->flush();

            
            }
              else{
                $this->addFlash('success', 'Stock not available'); 
              }
            //  
            return $this->redirectToRoute('invoiceitem', array('id'=>$id));

         }
          //update invoice
          $invoice->setSubtotal($subtotal);
          $invoice->setCgst($totalcgst);
          $invoice->setSgst($totalsgst);
          $invoice->setIgst($totaligst);
          $invoice->setGrandtotal($total);
          $invoice->setBalance($total);
          $em->flush();
  
        $source = new Entity('AppBundle:Invoiceitem');
        $tableAlias = $source->getTableAlias();
        $source->manipulateQuery(
            function ($query) use ($tableAlias,$id)
            {
                $query->andWhere($tableAlias . '.invoice ='. $id);
            }
        );
        // Get a grid instance
        $grid = $this->get('grid');
        // Attach the source to the grid
        $grid->setSource($source); 
        $grid->hideColumns('id'); 
        $grid->setDefaultOrder('id', 'asc'); 
        $grid->addColumn(new RankColumn(array('title'=>'S.No')), 1); 
        $grid->setActionsColumnSize(100);
        $grid->setActionsColumnTitle('');
     
     

        $myRowAction = new RowAction('', 'deleteinvoiceitem', true, '_self',array('class'=>'deleteicon', 'title'=>'Delete', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);
        
        
        $grid->setLimits(array(50, 100, 150));

      


        return $grid->getGridResponse('invoiceitem/invoiceitem.html.twig', array('form' => $form->createView(), 'subtotal'=>$subtotal, 'cgst'=>$totalcgst, 'sgst' => $totalsgst, 'igst'=>$totaligst, 'total' => $total));
       
         }
     }

     /**
     * @Route("/admin/deleteinvoiceitem", name="deleteinvoiceitem")
     */
    public function deleteinvoiceitemAction(Request $request)
    { 
        $params=$request->query->all();
        $id=$params['id'];       
        $em = $this->getDoctrine()->getManager();
        $invoiceitem = $em->getRepository('AppBundle:Invoiceitem')->find($id);
        if (!$invoiceitem) {
        throw $this->createNotFoundException(
            'No invoiceitem found for id '.$id
                                      );
                    }
        else
        {
               $em->remove($invoiceitem);
               $em->flush(); 
               $em1 = $this->getDoctrine()->getManager();
               $product = $em1->getRepository('AppBundle:Product')->findOneBy(array('product'=>$invoiceitem->getProduct()));
               // set stock
            $product->setStock($product->getStock() + $invoiceitem->getQuantity());  
            $em1->flush(); 
               $this->addFlash('success', 'invoiceitem deleted successfully');           
               return $this->redirectToRoute('invoiceitem', array('id'=>$invoiceitem->getInvoice()->getId()));            
        } 
    }

    

}