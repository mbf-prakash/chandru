<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customer;
use AppBundle\Form\CustomerType;

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


class CustomerController extends Controller

{

     //Customer
    /**
     * @Route("/admin/customer", name="customer")
     */

    public function customerAction()
    { 
        $source = new Entity('AppBundle:Customer');
        $tableAlias = $source->getTableAlias();
        // Get a grid instance
        $grid = $this->get('grid');
        // Attach the source to the grid
         $source->manipulateRow(
            function ($row)
            {
                $mycountry=Intl::getRegionBundle()->getCountryName($row->getField('country'));
                $row->setField('country', $mycountry);
                return $row;
            }
        );
        $grid->setSource($source); 
        $grid->hideColumns('id'); 
        $grid->setDefaultOrder('id', 'desc');   
        $grid->addColumn(new RankColumn(array('title'=>'S.No')), 1); 
        $grid->setActionsColumnSize(100);
        $grid->setActionsColumnTitle('');
     
        
        $myRowAction = new RowAction('', 'editcustomer', false, '_self',array('class'=>'editicon', 'title'=>'Edit Customer', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);   

        $grid->setLimits(array(50, 100, 150));

        return $grid->getGridResponse('customer/index.html.twig');
         }

   /**
     * @Route("/admin/addcustomer", name="addcustomer")
     */
    public function addcustomerAction(Request $request)
    { 
        $customer = new Customer();
        $em1 = $this->getDoctrine()->getManager();
        $state = $em1->getRepository('AppBundle:State')->findOneBy(array('state' => 'Tamil Nadu'));
        $customer->setState($state);
        $form = $this->createForm(CustomerType::class, $customer);
        $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) 
         {
           
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();
            $this->addFlash('success', 'Customer added successfully');
            return $this->redirectToRoute('customer');
         }

        return $this->render('customer/addcustomer.html.twig', array(
            'form' => $form->createView(),
        )); 

    }
    

    /**
     * @Route("/admin/editcustomer", name="editcustomer")
     */
    public function editcustomerAction(Request $request)
    { 

        $params=$request->query->all();
        $id=$params['id'];
        $em = $this->getDoctrine()->getManager();
        $customer = $em->getRepository('AppBundle:Customer')->find($id);
        if (!$customer) {
        throw $this->createNotFoundException(
            'No customer found for id '.$id
                                      );
                    }
        else
        {
         $form = $this->createForm(CustomerType::class, $customer);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) 
         {
            $em->flush();
            $this->addFlash('success', 'Customer updated successfully');
            return $this->redirectToRoute('customer');
         }
        return $this->render('customer/editcustomer.html.twig', array(
            'form' => $form->createView(),
        )); 
       }
    }
}
