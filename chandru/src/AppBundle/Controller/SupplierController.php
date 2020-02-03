<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Supplier;
use AppBundle\Form\SupplierType;

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


class SupplierController extends Controller

{

    //Supplier
    /**
     * @Route("/admin/supplier", name="supplier")
     */

    public function supplierAction()
    { 
        $source = new Entity('AppBundle:Supplier');
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
     
        
        $myRowAction = new RowAction('', 'editsupplier', false, '_self',array('class'=>'editicon', 'title'=>'Edit Supplier', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);   

        $grid->setLimits(array(50, 100, 150));

        return $grid->getGridResponse('supplier/index.html.twig');
         }

   /**
     * @Route("/admin/addsupplier", name="addsupplier")
     */
    public function addsupplierAction(Request $request)
    { 
        $supplier = new Supplier();
        $em1 = $this->getDoctrine()->getManager();
        $state = $em1->getRepository('AppBundle:State')->findOneBy(array('state' => 'Tamil Nadu'));
        $supplier->setState($state);
        $form = $this->createForm(SupplierType::class, $supplier);
        $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) 
         {
         
            $em = $this->getDoctrine()->getManager();
            $em->persist($supplier);
            $em->flush();
            $this->addFlash('success', 'Supplier added successfully');
            return $this->redirectToRoute('supplier');
         }

        return $this->render('supplier/addsupplier.html.twig', array(
            'form' => $form->createView(),
        )); 

    }
    

    /**
     * @Route("/admin/editsupplier", name="editsupplier")
     */
    public function editsupplierAction(Request $request)
    { 

        $params=$request->query->all();
        $id=$params['id'];
        $em = $this->getDoctrine()->getManager();
        $supplier = $em->getRepository('AppBundle:Supplier')->find($id);
        if (!$supplier) {
        throw $this->createNotFoundException(
            'No supplier found for id '.$id
                                      );
                    }
        else
        {
         $form = $this->createForm(SupplierType::class, $supplier);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) 
         {
            $em->flush();
            $this->addFlash('success', 'Supplier updated successfully');
            return $this->redirectToRoute('supplier');
         }
        return $this->render('supplier/editsupplier.html.twig', array(
            'form' => $form->createView(),
        )); 
       }
    }
}