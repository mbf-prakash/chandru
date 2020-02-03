<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Pinvoiceitem;
use AppBundle\Entity\Pinvoice;
use AppBundle\Entity\Purchaselog;
use AppBundle\Entity\Mypinvoiceitem;
use AppBundle\Form\MypinvoiceitemType;

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


class PinvoiceitemController extends Controller

{
   //Purchase Invoice Items
    /**
     * @Route("/admin/pinvoiceitem", name="pinvoiceitem")
     */

    public function pinvoiceitemAction(Request $request)
    { 
        $params=$request->query->all();
        $id=$params['id'];
        $em = $this->getDoctrine()->getManager();
        $pinvoice = $em->getRepository('AppBundle:Pinvoice')->find($id);
        

        if (!$pinvoice) {
        throw $this->createNotFoundException(
            'No invoice found for id '.$id
                                      );
                    }
        else
        { 
            
            
        
       $mypinvoiceitem = new Mypinvoiceitem();
       $mypinvoiceitem->setQuantity('1');
       $mypinvoiceitem->setDiscount('0');
        $form = $this->createForm(MypinvoiceitemType::class, $mypinvoiceitem);
        $form->handleRequest($request);
  
         if ($form->isSubmitted() && $form->isValid()) 
         {
            $pinvoiceitem = new Pinvoiceitem();
        
          

         
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
            $product = $em1->getRepository('AppBundle:Product')->find($mypinvoiceitem->getProduct());
            $pinvoiceitem->setPinvoice($pinvoice);
            $pinvoiceitem->setProduct($product->getProduct());
            $pinvoiceitem->setHssncode($product->getHssncode());  
            $pinvoiceitem->setGst($product->getGst());          
            $pinvoiceitem->setMrp($product->getMrp());
            $pinvoiceitem->setQuantity($mypinvoiceitem->getQuantity()); 
            $pinvoiceitem->setUnit($product->getUnit());
            $pinvoiceitem->setRate($mypinvoiceitem->getRate());
            $pinvoiceitem->setDiscount($mypinvoiceitem->getDiscount());
            $pinvoiceitem->setAmount($mypinvoiceitem->getAmount());
            

            $em2 = $this->getDoctrine()->getManager();
            $em2->persist($pinvoiceitem);
            $em2->flush();   
            // set stock
            $product->setStock($product->getStock() + $mypinvoiceitem->getQuantity());  
            $em1->flush();  
            //   
            //set product log
            $purchaselog = new Purchaselog();  
            $purchaselog->setProduct($product);
            $purchaselog->setSupplier($pinvoice->getSupplier());   
            $purchaselog->setPinvoice($pinvoice);
            $purchaselog->setQuantity($mypinvoiceitem->getQuantity());
            $em9 = $this->getDoctrine()->getManager();
            $em9->persist($purchaselog);
            $em9->flush(); 
            return $this->redirectToRoute('pinvoiceitem', array('id'=>$id));

         }
         
  
        $source = new Entity('AppBundle:Pinvoiceitem');
        $tableAlias = $source->getTableAlias();
        $source->manipulateQuery(
            function ($query) use ($tableAlias,$id)
            {
                $query->andWhere($tableAlias . '.pinvoice ='. $id);
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
     
     

        $myRowAction = new RowAction('', 'deletepinvoiceitem', true, '_self',array('class'=>'deleteicon', 'title'=>'Delete', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);
        
        
        $grid->setLimits(array(50, 100, 150));

      


        return $grid->getGridResponse('pinvoiceitem/pinvoiceitem.html.twig', array('form' => $form->createView()));
       
         }
     }

     /**
     * @Route("/admin/deletepinvoiceitem", name="deletepinvoiceitem")
     */
    public function deletepinvoiceitemAction(Request $request)
    { 
        $params=$request->query->all();
        $id=$params['id'];       
        $em = $this->getDoctrine()->getManager();
        $pinvoiceitem = $em->getRepository('AppBundle:Pinvoiceitem')->find($id);
        if (!$pinvoiceitem) {
        throw $this->createNotFoundException(
            'No purchase invoiceitem found for id '.$id
                                      );
                    }
        else
        {
               $em->remove($pinvoiceitem);
               $em->flush(); 
               $em1 = $this->getDoctrine()->getManager();
               $product = $em1->getRepository('AppBundle:Product')->findOneBy(array('product'=>$pinvoiceitem->getProduct()));
               // set stock
            $product->setStock($product->getStock() - $pinvoiceitem->getQuantity());  
            $em1->flush();  
            //  
            //remove purchase log
            $em2 = $this->getDoctrine()->getManager();
            $purchaselog = $em2->getRepository('AppBundle:Purchaselog')->findOneBy(array('product'=>$product, 'pinvoice'=>$pinvoiceitem->getPinvoice()));
               // set stock
            $em2->remove($purchaselog);
            $em2->flush(); 
            //  
               $this->addFlash('success', 'purchase invoiceitem deleted successfully');           
               return $this->redirectToRoute('pinvoiceitem', array('id'=>$pinvoiceitem->getPinvoice()->getId()));            
        } 
    }

    

}