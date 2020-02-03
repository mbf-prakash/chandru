<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Pinvoice;
use AppBundle\Form\PinvoiceType;
use AppBundle\Entity\Changepstatus;
use AppBundle\Form\ChangepstatusType;
use AppBundle\Entity\Pinvoiceamount;
use AppBundle\Form\PinvoiceamountType;

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


class PinvoiceController extends Controller

{

     //Pinvoice
    /**
     * @Route("/admin/pinvoice", name="pinvoice")
     */

    public function pinvoiceAction()
    { 
        $source = new Entity('AppBundle:Pinvoice');
        $tableAlias = $source->getTableAlias();
        $source->manipulateRow(
            function ($row)
            {
                if($row->getField('subtotal')==0)
                {
                   $row->setField('subtotal', '0'); 
                }
                if($row->getField('cgst')==0)
                {
                   $row->setField('cgst', '0'); 
                }
                if($row->getField('sgst')==0)
                {
                   $row->setField('sgst', '0'); 
                }
                if($row->getField('igst')==0)
                {
                   $row->setField('igst', '0'); 
                }
                if($row->getField('grandtotal')==0)
                {
                   $row->setField('grandtotal', '0'); 
                }
                
                return $row;
            }
        );
        // Get a grid instance
        $grid = $this->get('grid');
        // Attach the source to the grid
        $grid->setSource($source); 
        $grid->hideColumns('id');
        $grid->setDefaultOrder('id', 'desc');   
        $grid->addColumn(new RankColumn(array('title'=>'S.No')), 1); 
        $grid->setActionsColumnSize(200);
        $grid->setActionsColumnTitle('');
        $myRowAction = new RowAction('', 'pinvoiceitem', false, '_self',array('class'=>'addicon', 'title'=>'Add items', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);
        $myRowAction = new RowAction('', 'pinvoiceamount', false, '_self',array('class'=>'changeicon', 'title'=>'pinvoiceamount', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);
        $myRowAction = new RowAction('', 'deletepinvoice', true, '_self',array('class'=>'deleteicon', 'title'=>'Delete Invoice', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);
       $exporter = new DSVExport('csv');
        $exporter->setDelimiter(',');
        $exporter->setWithBOM(false);
        $exporter->setFileName('pinvoice');
        $exporter->setFileExtension('csv');
        $exporter->setMimeType('text/comma-separated-values');
        $grid->addExport($exporter);
        
        $grid->setLimits(array(50, 100, 150));
         $queryBuilder = null;
    $source->manipulateQuery(function ($qb) use (&$queryBuilder) {
           $queryBuilder = clone $qb;
    });

    // $myinvoiceitem->setQuantity('1');



    if($grid->isReadyForRedirect()) 
    {
        $result = NULL;
    } 
    else 
    {
        $queryBuilder->select('SUM(_a.subtotal) AS totalsubtotal', 'SUM(_a.cgst) AS totalcgst', 'SUM(_a.sgst) AS totalsgst', 'SUM(_a.igst) AS totaligst', 'SUM(_a.grandtotal) AS totalgrandtotal');
        $queryBuilder->setMaxResults(NULL);
        $result = current($queryBuilder->getQuery()->execute());
    }

      
        return $grid->getGridResponse('pinvoice/index.html.twig', array('totalsum'=>$result));  
     }
   
   /**
     * @Route("/admin/addpinvoice", name="addpinvoice")
     */
    public function addpinvoiceAction(Request $request)
    {
      
        
        $pinvoice = new Pinvoice();


    
    $pinvoice->setSubtotal('0');
    $pinvoice->setCgst('0');
    $pinvoice->setSgst('0');
    $pinvoice->setIgst('0');
    $pinvoice->setGrandtotal('0');
    $pinvoice->setBalance('0');


        $form = $this->createForm(PinvoiceType::class, $pinvoice);
        $form->handleRequest($request);


         if ($form->isSubmitted() && $form->isValid()) 
         {
           
            $pinvoice->setStatus(false);
            $pinvoice->setBalance($pinvoice->getGrandtotal());
            $em = $this->getDoctrine()->getManager();
            $em->persist($pinvoice);
            $em->flush();
            $this->addFlash('success', 'Pinvoice added successfully');
            return $this->redirectToRoute('pinvoice');
         }


       

        return $this->render('pinvoice/addpinvoice.html.twig', array(
            'form' => $form->createView(),
        )); 


    }

     /**
     * @Route("/admin/deletepinvoice", name="deletepinvoice")
     */
    public function deletepinvoiceAction(Request $request)
    { 
        $params=$request->query->all();
        $id=$params['id'];       
        $em = $this->getDoctrine()->getManager();
        $pinvoice = $em->getRepository('AppBundle:Pinvoice')->find($id);
        if (!$pinvoice) {
        throw $this->createNotFoundException(
            'No purchase invoice found for id '.$id
                                      );
                    }
        else
        {
              
                // set stock
                $em2 = $this->getDoctrine()->getManager();
                $pinvoiceitem = $em->getRepository('AppBundle:Pinvoiceitem')->findBy(array('pinvoice'=>$pinvoice));
                foreach($pinvoiceitem as $item)
 
                {
                 $em1 = $this->getDoctrine()->getManager();
                 $product = $em1->getRepository('AppBundle:Product')->findOneBy(array('product'=>$item->getProduct()));
                 // set stock
              $product->setStock($product->getStock() - $item->getQuantity());  
              $em1->flush(); 
                }
                $em->remove($pinvoice);
                $em->flush(); 
                // purchase log delete
                $em8 = $this->getDoctrine()->getManager();
                $purchaselog = $em8->getRepository('AppBundle:Purchaselog')->findBy(array('pinvoice'=>$pinvoice));
                foreach($purchaselog as $item)
                {
                    $em9 = $this->getDoctrine()->getManager();
                $mylog = $em9->getRepository('AppBundle:Purchaselog')->find($item-getId());
                $em9->remove($mylog);
                $em9->flush();
                }
                 
               $this->addFlash('success', 'Purchase invoice deleted successfully');           
               return $this->redirectToRoute('pinvoice');            
        } 
    }

    /**
     * @Route("/admin/pinvoiceamount/{id}", name="pinvoiceamount")
     */
    public function pinvoiceamountAction(Request $request, $id)
    { 
        
        $em = $this->getDoctrine()->getManager();
        $pinvoice = $em->getRepository('AppBundle:Pinvoice')->find($id);
        

        $em4 = $this->getDoctrine()->getManager();
        $paidamount = $em4->getRepository('AppBundle:Pinvoiceamount')->findBy(array('pinvoice'=>$pinvoice), array('id'=>'ASC'));


        if (!$pinvoice) {
        throw $this->createNotFoundException(
            'No pinvoice found for id '.$id
                                      );
                    }
        else
        { 
            $pinvoiceamount = new Pinvoiceamount();
            $form = $this->createForm(PinvoiceamountType::class, $pinvoiceamount);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) 
            {
            
                $em1 = $this->getDoctrine()->getManager();
                $inamount = $em1->getRepository('AppBundle:Pinvoiceamount')->findOneBy(array('pinvoice' => $pinvoice), array('id' => 'desc'));
                if($inamount)
                {

                    $gtotal = $inamount->getBalance();
                }
                else
                {
                    $gtotal = $pinvoice->getGrandtotal();

                }

                $pinvoiceamount->setPinvoice($pinvoice);
                $balance = $gtotal - $form->get('amount')->getData();
                $pinvoiceamount->setBalance($balance);

                if ($balance<=0)
                {
                    $pinvoice->setBalance($balance);
                    $pinvoice->setPaiddate($form->get('paiddate')->getData());  
                    $pinvoice->setStatus(true);  
                    $em->flush();  
                }
                else
                {
                    $pinvoice->setBalance($balance);  
                    $em->flush();
                }

                $em = $this->getDoctrine()->getManager();
                $em->persist($pinvoiceamount);
                $em->flush();
                $this->addFlash('success', 'Pinvoiceamount added successfully');
                return $this->redirectToRoute('pinvoice');
            }

        $this->updatebalance();

            
        return $this->render('pinvoice/pinvoiceamount.html.twig', array(
            'form' => $form->createView(), 'paidamount' => $paidamount, 'pinvoiceamt'=>$pinvoice->getGrandtotal()
        ));
        }
    } 


    public function updatebalance()
    {
        $em = $this->getDoctrine()->getManager();
        $sales = $em->getRepository('AppBundle:Pinvoice')->findBy(array('status'=>false));

        foreach($sales as $row)
        {
            $em = $this->getDoctrine()->getManager();
            $invoice = $em->getRepository('AppBundle:Pinvoice')->find($row);

            $repo = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('AppBundle:Pinvoiceamount');
            $qb = $repo->createQueryBuilder('a');
            $qb->select('SUM(a.amount)');
            $qb->where('a.pinvoice = :invoice');
            $qb->setParameter(':invoice', $invoice);
            $paidamt = $qb->getQuery()->getSingleScalarResult();

            $balance = $invoice->getGrandtotal()-$paidamt;

            $invoice->setBalance($balance);
            $em->flush(); 
        }
    }



}