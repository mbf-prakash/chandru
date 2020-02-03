<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Expanses;
use AppBundle\Form\ExpansesType;
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

class ExpansesController extends Controller
{
    /**
     * @Route("/admin/expanses", name="expanses")
     */
    public function expansesAction(Request $request)
    { 
        
       $source = new Entity('AppBundle:Expanses');
        $tableAlias = $source->getTableAlias();
        // Get a grid instance
        $grid = $this->get('grid');
        // Attach the source to the grid
        $grid->setSource($source); 
        $grid->hideColumns('id'); 
        $grid->setDefaultOrder('id', 'desc');   
        $grid->addColumn(new RankColumn(array('title'=>'S.No')), 1);
        $grid->setActionsColumnSize(150);
        $grid->setActionsColumnTitle('');
       // Add row actions in the default row actions column
        $myRowAction = new RowAction('', 'editexpanses',false, '_self',array('class'=>'editicon', 'title'=>'Edit', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);
         $myRowAction = new RowAction('', 'deleteexpanses', true, '_self',array('class'=>'deleteicon', 'title'=>'Delete', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);

       
        $grid->setLimits(array(10, 20, 30));
        return $grid->getGridResponse('expanses/index.html.twig');  
    } 

    /**
     * @Route("/admin/addexpanses", name="addexpanses")
     */
    public function addexpansesAction(Request $request)
    { 
        $expanses = new Expanses();
        $form = $this->createForm(ExpansesType::class, $expanses);
        $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) 
         {
           
            $em = $this->getDoctrine()->getManager();
            $em->persist($expanses);
            $em->flush();
            $this->addFlash('success', 'Expanses added successfully');           
            return $this->redirectToRoute('expanses');
                
         }

        return $this->render('expanses/addexpanses.html.twig', array(
            'form' => $form->createView(),
        )); 

    }
    /**
     * @Route("/admin/editexpanses", name="editexpanses")
     */
    public function editexpansesAction(Request $request)
    { 

        $params=$request->query->all();
        $id=$params['id'];
        $em = $this->getDoctrine()->getManager();
        $expanses = $em->getRepository('AppBundle:Expanses')->find($id);
        if (!$expanses) {
        throw $this->createNotFoundException(
            'No expanses found for id '.$id
                                      );
                    }
        else
        {
         $form = $this->createForm(ExpansesType::class, $expanses);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) 
         {
            $em->flush();
            $this->addFlash('success', 'Changes saved successfully');
            return $this->redirectToRoute('expanses');
         }
        return $this->render('expanses/editexpanses.html.twig', array(
            'form' => $form->createView(),
        )); 
       }
    }
    /**
     * @Route("/admin/deleteexpanses", name="deleteexpanses")
     */
    public function deleteexpansesAction(Request $request)
    { 
        $params=$request->query->all();
        $id=$params['id'];
        $em = $this->getDoctrine()->getManager();
        $expanses = $em->getRepository('AppBundle:Expanses')->find($id);

        if (!$expanses) {
        throw $this->createNotFoundException(
            'No expanses found for id '.$id
                                      );
                    }
        else
        {
               $em->remove($expanses);
               $em->flush(); 
               $this->addFlash('success', 'Expanses deleted successfully');           
               return $this->redirectToRoute('expanses');            
        } 
    }

}