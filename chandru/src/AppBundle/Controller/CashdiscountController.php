<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cashdiscount;
use AppBundle\Form\CashdiscountType;
use AppBundle\Entity\Invoice;
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

class CashdiscountController extends Controller
{
    
    /**
     * @Route("/admin/cashdiscount", name="cashdiscount")
     */
    public function cashdiscountAction(Request $request)
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
        else if($invoice->getGrandtotal()!=$invoice->getBalance())
        {
            
            $this->addFlash('fail', ' Sorry! you can not add Cash discount');           
            return $this->redirectToRoute('invoice');
        }
        else if($invoice->getCashdiscount()>0)
        {
            
            $this->addFlash('fail', ' Sorry! you already added Cash discount');           
            return $this->redirectToRoute('invoice');
        }
        else
        {
                    
        $cashdiscount = new Cashdiscount();
        $cashdiscount->setCashdiscount($invoice->getCashdiscount());
        $cashdiscount->setPercentage('0');
        $form = $this->createForm(CashdiscountType::class, $cashdiscount);
        $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) 
         {
             if($cashdiscount->getPercentage()>0)
             {

             $discountamount=round((($invoice->getGrandtotal() * $cashdiscount->getPercentage())/100) + $cashdiscount->getCashdiscount(),2);
             }

             else{
                 $discountamount=$cashdiscount->getCashdiscount();
             }

             $invoice->setCashdiscount($discountamount);
             $mytotal=$invoice->getGrandtotal()-$discountamount;
             $invoice->setGrandtotal($mytotal);
             $invoice->setBalance($mytotal);

           
            $em->flush();
            $this->addFlash('success', 'Cash discount added successfully');           
            return $this->redirectToRoute('invoice');
                
         }


        return $this->render('cashdiscount/index.html.twig', array(
            'form' => $form->createView(),
        )); 
    }

    }
    

}