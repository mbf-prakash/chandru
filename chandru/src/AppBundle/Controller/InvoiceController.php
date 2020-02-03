<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Wordconvert;
use AppBundle\Entity\Invoice;
use AppBundle\Entity\Invoiceamount;
use AppBundle\Form\InvoiceamountType;
use AppBundle\Entity\Createinvoice;
use AppBundle\Form\CreateinvoiceType;

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


class InvoiceController extends Controller

{

     //Invoice
    /**
     * @Route("/admin/invoice", name="invoice")
     */

    public function invoiceAction()
    { 
        $source = new Entity('AppBundle:Invoice');
        $tableAlias = $source->getTableAlias();
        $source->manipulateRow(
            function ($row)
            {
               
                if($row->getField('subtotal')==0)
                {
                   $row->setField('subtotal', ''); 
                }
                if($row->getField('cgst')==0)
                {
                   $row->setField('cgst', ''); 
                }
                if($row->getField('sgst')==0)
                {
                   $row->setField('sgst', ''); 
                }
                if($row->getField('igst')==0)
                {
                   $row->setField('igst', ''); 
                }
                if($row->getField('grandtotal')==0)
                {
                   $row->setField('grandtotal', ''); 
                }
                
                return $row;
            }
        );
        // Get a grid instance
        $grid = $this->get('grid');
        // Attach the source to the grid
        $grid->setSource($source); 
        $grid->hideColumns('id');
        $grid->hideColumns('gstin');
        $grid->setDefaultOrder('id', 'desc');   
        $grid->addColumn(new RankColumn(array('title'=>'S.No')), 1); 
        $grid->setActionsColumnSize(450);
        $grid->setActionsColumnTitle('');
        $myRowAction = new RowAction('', 'invoiceview', false, '_blank',array('class'=>'viewicon', 'title'=>'View Invoice', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);
        $myRowAction = new RowAction('', 'invoiceitem', false, '_self',array('class'=>'addicon', 'title'=>'Add items', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);
        $myRowAction = new RowAction('', 'invoiceamount', false, '_self',array('class'=>'changeicon', 'title'=>'invoice amount', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);
        $myRowAction = new RowAction('', 'deleteinvoice', true, '_self',array('class'=>'deleteicon', 'title'=>'Delete Invoice', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);
        $myRowAction = new RowAction('', 'cancelinvoice', true, '_self',array('class'=>'cancelicon', 'title'=>'Cancel Invoice', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);
        $myRowAction = new RowAction('', 'cashdiscount', false, '_self',array('class'=>'discounticon', 'title'=>'Cash Discount', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);
  
  

  
       $exporter = new DSVExport('csv');
        $exporter->setDelimiter(',');
        $exporter->setWithBOM(false);
        $exporter->setFileName('invoice');
        $exporter->setFileExtension('csv');
        $exporter->setMimeType('text/comma-separated-values');
        $grid->addExport($exporter);
        
        $grid->setLimits(array(50, 100, 150));
         $queryBuilder = null;
    $source->manipulateQuery(function ($qb) use (&$queryBuilder) {
           $queryBuilder = clone $qb;
    });

    if($grid->isReadyForRedirect()) 
    {
        $result = NULL;
    } 
    else 
    {
        $queryBuilder->select('SUM(_a.subtotal) AS totalsubtotal', 'SUM(_a.cgst) AS totalcgst', 'SUM(_a.sgst) AS totalsgst', 'SUM(_a.igst) AS totaligst', 'SUM(_a.cashdiscount) AS totalcashdiscount', 'SUM(_a.grandtotal) AS totalgrandtotal');
        $queryBuilder->where('_a.cancel=0');
        $queryBuilder->setMaxResults(NULL);
$result = current($queryBuilder->getQuery()->execute());
        
    }
    
      
        return $grid->getGridResponse('invoice/invoice.html.twig', array('totalsum'=>$result));  
     }
   
   /**
     * @Route("/admin/addinvoice", name="addinvoice")
     */
    public function addinvoiceAction(Request $request)
    {
      
        $createinvoice = new Createinvoice();
        $createinvoice->setInvoicedate(new \DateTime("now"));
        $form = $this->createForm(CreateinvoiceType::class, $createinvoice);
        $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) 
         {
            $em = $this->getDoctrine()->getManager();
            $customer = $em->getRepository('AppBundle:Customer')->find($createinvoice->getCustomer());

            $invoice = new Invoice();
             // Get count
                 $repo = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('AppBundle:Invoice');
                 $qb = $repo->createQueryBuilder('a');
                 $qb->select('COUNT(a)');               
                 $count = $qb->getQuery()->getSingleScalarResult();
                 if($count==0)
                 {
                    $invoice->setInvoicenumber('1');
                 }
                 else
                 {
                    $em1 = $this->getDoctrine()->getManager();
                    $invoice1 = $em1->getRepository('AppBundle:Invoice')->findOneBy(array(),array('id' => 'desc'));
                    $invoice->setInvoicenumber($invoice1->getInvoicenumber()+1);

                 }
                 $invoice->setInvoicedate($createinvoice->getInvoicedate());
                 $invoice->setCompany($customer->getCompany());
                 $invoice->setAddress1($customer->getAddress1());
                 $invoice->setAddress2($customer->getAddress2());
                 $invoice->setCity($customer->getCity());
                 $invoice->setPincode($customer->getPincode());
                 $invoice->setState($customer->getState()->getState());
                 $invoice->setStatecode($customer->getState()->getStatecode());
                 $invoice->setMobile($customer->getMobile());
                 $invoice->setGstin($customer->getGstin());
                 $invoice->setSubtotal('0');
                 $invoice->setCgst('0');
                 $invoice->setSgst('0');
                 $invoice->setIgst('0');
                 $invoice->setCashdiscount('0');
                 $invoice->setGrandtotal('0');
                 $invoice->setBalance('0');
                 $invoice->setStatus(false);
                 $invoice->setCancel(false);
                 $invoice->setCustomer($customer);


            $em3 = $this->getDoctrine()->getManager();
            $em3->persist($invoice);
            $em3->flush();
           
            return $this->redirectToRoute('invoiceitem', array('id'=>$invoice->getId()));
         }

        return $this->render('invoice/addinvoice.html.twig', array('form' => $form->createView(),
        )); 

    }

    /**
     * @Route("/admin/invoiceamount/{id}", name="invoiceamount")
     */
    public function invoiceamountAction(Request $request, $id)
    { 
        
        $em = $this->getDoctrine()->getManager();
        $invoice = $em->getRepository('AppBundle:Invoice')->find($id);
        

        $em4 = $this->getDoctrine()->getManager();
        $paidamount = $em4->getRepository('AppBundle:Invoiceamount')->findBy(array('invoice'=>$invoice), array('id'=>'ASC'));


        if (!$invoice) {
        throw $this->createNotFoundException(
            'No invoice found for id '.$id
                                      );
                    }
        else
        {
            $invoiceamount = new Invoiceamount();
            $form = $this->createForm(InvoiceamountType::class, $invoiceamount);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) 
            {
            
                $em1 = $this->getDoctrine()->getManager();
                $inamount = $em1->getRepository('AppBundle:Invoiceamount')->findOneBy(array('invoice' => $invoice), array('id' => 'desc'));
                if($inamount)
                {

                    $gtotal = $inamount->getBalance();
                }
                else
                {
                    $gtotal = $invoice->getGrandtotal();

                }

                $invoiceamount->setInvoice($invoice);
                $balance = $gtotal - $form->get('amount')->getData();
                $invoiceamount->setBalance($balance);

                if ($balance<=0)
                {
                    $invoice->setBalance($balance);
                    $invoice->setPaiddate($form->get('paiddate')->getData());  
                    $invoice->setStatus(true);  
                    $em->flush();  
                }
                else
                {
                    $invoice->setBalance($balance);  
                    $em->flush();
                }

                $em = $this->getDoctrine()->getManager();
                $em->persist($invoiceamount);
                $em->flush();

                $this->addFlash('success', 'Invoiceamount added successfully');
                return $this->redirectToRoute('invoice');
            }

        $this->updatebalance();

            
        return $this->render('invoice/invoiceamount.html.twig', array(
            'form' => $form->createView(), 'paidamount' => $paidamount, 'invoiceamt'=>$invoice->getGrandtotal()
        ));
        }
    }


     /**
     * @Route("/admin/deleteinvoice", name="deleteinvoice")
     */
    public function deleteinvoiceAction(Request $request)
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
               
               // set stock
               $em2 = $this->getDoctrine()->getManager();
               $invoiceitem = $em->getRepository('AppBundle:Invoiceitem')->findBy(array('invoice'=>$invoice));
               foreach($invoiceitem as $item)

               {
                $em1 = $this->getDoctrine()->getManager();
                $product = $em1->getRepository('AppBundle:Product')->findOneBy(array('product'=>$item->getProduct()));
                // set stock
             $product->setStock($product->getStock() + $item->getQuantity());  
             $em1->flush(); 
               }
               //
               $em->remove($invoice);
               $em->flush(); 
               $this->addFlash('success', 'invoice deleted successfully');           
               return $this->redirectToRoute('invoice');            
        } 
    }




     /**
     * @Route("/admin/cancelinvoice", name="cancelinvoice")
     */
    public function cancelinvoiceAction(Request $request)
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
              if($invoice->getCancel() == 0)
              {
                $invoice->setCancel(true);  
                $this->addFlash('success', 'invoice canceled successfully'); 
              }
              else{
               $invoice->setCancel(false); 
               $this->addFlash('success', 'invoice activated successfully');  
              }
               $em->flush(); 
              
                         
               return $this->redirectToRoute('invoice');            
        } 
    }
  





    /**
     * @Route("/admin/invoiceview", name="invoiceview")
     */
    public function invoiceviewAction(Request $request)
    { 
        $params=$request->query->all();
        $id=$params['id'];
        $em = $this->getDoctrine()->getManager();
        $invoice = $em->getRepository('AppBundle:Invoice')->find($id); 
        $wordconvert= New Wordconvert();
        $inwords=$wordconvert->convert_number($invoice->getGrandtotal());    
        $em1 = $this->getDoctrine()->getManager();
        $customer = $em1->getRepository('AppBundle:Customer')->find($invoice->getCustomer()->getId());
        $em2 = $this->getDoctrine()->getManager();
        $item = $em2->getRepository('AppBundle:Invoiceitem')->findBy(array('invoice'=>$invoice));

        $url = "/opt/bitnami/apache2/htdocs/chandru/pdf/".$id.".pdf";
        if(file_exists($url))
                {
                   unlink($url); 
                } 
        $this->get('knp_snappy.pdf')->generateFromHtml(
        $this->renderView('invoice/invoiceview.html.twig', array('customer'=>$customer, 
                    'invoice'=>$invoice, 'item'=>$item, 'inwords'=>$inwords)), $url); 
       
        return $this->redirectToRoute('invoicepdf',array('id' => $id));
    }

    /**
     * @Route("/admin/invoicepdf/", name="invoicepdf")
     */
    public function  invoicepdfAction(Request $request)
    { 
        $params=$request->query->all();
        $id=$params['id'];
        $url = "/opt/bitnami/apache2/htdocs/chandru/pdf/".$id.".pdf";
        return new BinaryFileResponse($url);
       
    } 


    public function updatebalance()
    {
        $em = $this->getDoctrine()->getManager();
        $sales = $em->getRepository('AppBundle:Invoice')->findBy(array('status'=>false));

        foreach($sales as $row)
        {
            $em = $this->getDoctrine()->getManager();
            $invoice = $em->getRepository('AppBundle:Invoice')->find($row);

            $repo = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('AppBundle:Invoiceamount');
            $qb = $repo->createQueryBuilder('a');
            $qb->select('SUM(a.amount)');
            $qb->where('a.invoice = :invoice');
            $qb->setParameter(':invoice', $invoice);
            $paidamt = $qb->getQuery()->getSingleScalarResult();

            $balance = $invoice->getGrandtotal()-$paidamt;

            $invoice->setBalance($balance);
            $em->flush(); 
        }
    }

}
