<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use AppBundle\Form\ProductType;

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


class ProductController extends Controller

{
    
    //Product
    /**
     * @Route("/admin/product", name="product")
     */

    public function productAction()
    { 
        $source = new Entity('AppBundle:Product');
        $tableAlias = $source->getTableAlias();
        // Get a grid instance
        $grid = $this->get('grid');
        // Attach the source to the grid
        $grid->setSource($source); 
        $grid->hideColumns('id'); 
        $grid->setDefaultOrder('product', 'asc');   
        $grid->addColumn(new RankColumn(array('title'=>'S.No')), 1); 
        $grid->setActionsColumnSize(100);
        $grid->setActionsColumnTitle('');
        $myRowAction = new RowAction('', 'editproduct', false, '_self',array('class'=>'editicon', 'title'=>'Edit Product', 'data-toggle'=>'tooltip'));
        $grid->addRowAction($myRowAction);
       
        
        $grid->setLimits(array(50, 100, 150));
        return $grid->getGridResponse('product/index.html.twig');  
         }

   /**
     * @Route("/admin/addproduct", name="addproduct")
     */
    public function addproductAction(Request $request)
    { 
        $product = new Product();
        $product->setDiscount(0);
        $product->setGst(0);
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) 
         {
           
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();
            $this->addFlash('success', 'Product added successfully');
            return $this->redirectToRoute('product');
         }

        return $this->render('product/addproduct.html.twig', array(
            'form' => $form->createView(),
        )); 

    }
    

    /**
     * @Route("/admin/editproduct", name="editproduct")
     */
    public function editproductAction(Request $request)
    { 

        $params=$request->query->all();
        $id=$params['id'];
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AppBundle:Product')->find($id);
        if (!$product) {
        throw $this->createNotFoundException(
            'No product found for id '.$id
                                      );
                    }
        else
        {
         $form = $this->createForm(ProductType::class, $product);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) 
         {
            $em->flush();
            $this->addFlash('success', 'Product name updated successfully');
            return $this->redirectToRoute('product');
         }
        return $this->render('product/editproduct.html.twig', array(
            'form' => $form->createView(),
        )); 
       }
    }

}