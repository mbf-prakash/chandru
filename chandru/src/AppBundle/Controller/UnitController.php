<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Unit;
use AppBundle\Entity\Invoiceitem;
use AppBundle\Form\UnitType;
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

class UnitController extends Controller
{
    /**
     * @Route("/admin/unit", name="unit")
     */
    public function unitAction(Request $request)
    { 
       $source = new Entity('AppBundle:Unit');
        $tableAlias = $source->getTableAlias();
        // Get a grid instance
        $grid = $this->get('grid');
        // Attach the source to the grid
        $grid->setSource($source); 
        $grid->hideColumns('id'); 
        $grid->setDefaultOrder('unit', 'asc');   
        $grid->addColumn(new RankColumn(array('title'=>'S.No')), 1); 
        $grid->setActionsColumnSize(150);
        $grid->setActionsColumnTitle('');
       // Add row actions in the default row actions column
        $myRowAction = new RowAction('', 'editunit',false, '_self',array('class'=>'editicon', 'title'=>'Edit', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);
      

       
        $grid->setLimits(array(10, 20, 30));
        return $grid->getGridResponse('unit/index.html.twig');  
        // return $this->render('dashboard/index.html.twig'); 
    } 

    /**
     * @Route("/admin/addunit", name="addunit")
     */
    public function addunitAction(Request $request)
    { 
        $unit = new Unit();
        $form = $this->createForm(UnitType::class, $unit);
        $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) 
         {
           
            $em = $this->getDoctrine()->getManager();
            $em->persist($unit);
            $em->flush();
            $this->addFlash('success', 'Unit added successfully');           
            return $this->redirectToRoute('unit');
                
         }

        return $this->render('unit/addunit.html.twig', array(
            'form' => $form->createView(),
        )); 

    }
    /**
     * @Route("/admin/editunit", name="editunit")
     */
    public function editunitAction(Request $request)
    { 

        $params=$request->query->all();
        $id=$params['id'];
        $em = $this->getDoctrine()->getManager();
        $unit = $em->getRepository('AppBundle:Unit')->find($id);
        if (!$unit) {
        throw $this->createNotFoundException(
            'No unit found for id '.$id
                                      );
                    }
        else
        {
         $form = $this->createForm(UnitType::class, $unit);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) 
         {
            $em->flush();
            $this->addFlash('success', 'Changes saved successfully');
            return $this->redirectToRoute('unit');
         }
        return $this->render('unit/editunit.html.twig', array(
            'form' => $form->createView(),
        )); 
       }
    }





    /**
     * @Route("/admin/changedb", name="changedb")
     */
    public function changedbAction(Request $request)
    { 

        $em = $this->getDoctrine()->getManager();
        $invoiceitem = $em->getRepository('AppBundle:Invoiceitem')->findAll();


        $em1 = $this->getDoctrine()->getManager();
        $unit = $em1->getRepository('AppBundle:Unit')->find(1);

        foreach($invoiceitem as $item)
        {
            $item->setUnit($unit);
            $em->flush();
         }

        return $this->render('unit/changedb.html.twig'); 

    }
    
}