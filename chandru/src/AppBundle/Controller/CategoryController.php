<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Form\CategoryType;
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

class CategoryController extends Controller
{
    /**
     * @Route("/admin/category", name="category")
     */
    public function categoryAction(Request $request)
    { 
       $source = new Entity('AppBundle:Category');
        $tableAlias = $source->getTableAlias();
        // Get a grid instance
        $grid = $this->get('grid');
        // Attach the source to the grid
        $grid->setSource($source); 
        $grid->hideColumns('id'); 
        $grid->setDefaultOrder('category', 'asc');   
        $grid->addColumn(new RankColumn(array('title'=>'S.No')), 1); 
        $grid->setActionsColumnSize(150);
        $grid->setActionsColumnTitle('');
       // Add row actions in the default row actions column
        $myRowAction = new RowAction('', 'editcategory',false, '_self',array('class'=>'editicon', 'title'=>'Edit', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);
       

       
        $grid->setLimits(array(10, 20, 30));
        return $grid->getGridResponse('category/index.html.twig');  
        // return $this->render('dashboard/index.html.twig'); 
    } 

    /**
     * @Route("/admin/addcategory", name="addcategory")
     */
    public function addcategoryAction(Request $request)
    { 
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) 
         {
           
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
            $this->addFlash('success', 'Category added successfully');           
            return $this->redirectToRoute('category');
                
         }

        return $this->render('category/addcategory.html.twig', array(
            'form' => $form->createView(),
        )); 

    }
    /**
     * @Route("/admin/editcategory", name="editcategory")
     */
    public function editcategoryAction(Request $request)
    { 

        $params=$request->query->all();
        $id=$params['id'];
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('AppBundle:Category')->find($id);
        if (!$category) {
        throw $this->createNotFoundException(
            'No category found for id '.$id
                                      );
                    }
        else
        {
         $form = $this->createForm(CategoryType::class, $category);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) 
         {
            $em->flush();
            $this->addFlash('success', 'Changes saved successfully');
            return $this->redirectToRoute('category');
         }
        return $this->render('category/editcategory.html.twig', array(
            'form' => $form->createView(),
        )); 
       }
    }
    

}