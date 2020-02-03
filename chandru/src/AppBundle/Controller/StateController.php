<?php

namespace AppBundle\Controller;

use AppBundle\Entity\State;
use AppBundle\Form\StateType;

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


class StateController extends Controller

{

     //State
    /**
     * @Route("/admin/state", name="state")
     */

    public function stateAction()
    { 
        $source = new Entity('AppBundle:State');
        $tableAlias = $source->getTableAlias();
        $source->manipulateQuery(
            function ($query) use ($tableAlias)
            {
                $query->andWhere($tableAlias . '.id >=1');
            }
        );
        
        // Get a grid instance
        $grid = $this->get('grid');
        // Attach the source to the grid
        $grid->setSource($source); 
       
        $grid->setDefaultOrder('state', 'asc');           
        $grid->setActionsColumnSize(150);
        $grid->setActionsColumnTitle('');
        $myRowAction = new RowAction('', 'editstate', false, '_self',array('class'=>'editicon', 'title'=>'Edit State', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);
       
        
        $grid->setLimits(array(50, 100, 150));
        return $grid->getGridResponse('state/index.html.twig');  
         }

   /**
     * @Route("/admin/addstate", name="addstate")
     */
    public function addstateAction(Request $request)
    { 
        $state = new State();
        $form = $this->createForm(StateType::class, $state);
        $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) 
         {
           
            $em = $this->getDoctrine()->getManager();
            $em->persist($state);
            $em->flush();
            $this->addFlash('success', 'State added successfully');
            return $this->redirectToRoute('state');
         }

        return $this->render('state/addstate.html.twig', array(
            'form' => $form->createView(),
        )); 

    }
    

    /**
     * @Route("/admin/editstate", name="editstate")
     */
    public function editstateAction(Request $request)
    { 

        $params=$request->query->all();
        $id=$params['id'];
        $em = $this->getDoctrine()->getManager();
        $state = $em->getRepository('AppBundle:State')->find($id);
        if (!$state) {
        throw $this->createNotFoundException(
            'No State found for id '.$id
                                      );
                    }
        else
        {
         $form = $this->createForm(StateType::class, $state);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) 
         {
            $em->flush();
            $this->addFlash('success', 'State name updated successfully');
            return $this->redirectToRoute('state');
         }
        return $this->render('state/editstate.html.twig', array(
            'form' => $form->createView(),
        )); 
       }
    }
}