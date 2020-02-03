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


class PurchaseitemsController extends Controller

{
   //Purchase Invoice Items
    /**
     * @Route("/admin/purchaseitems", name="purchaseitems")
     */

    public function purchaseitemsAction(Request $request)
    { 
        
        //   $em = $this->getDoctrine()->getManager();
        // $pinvoiceitem = $em->getRepository('AppBundle:Pinvoiceitem')->findAll();
  
        $source = new Entity('AppBundle:Pinvoiceitem');
        $tableAlias = $source->getTableAlias();
       
        // Get a grid instance
        $grid = $this->get('grid');
        // Attach the source to the grid
        $grid->setSource($source); 
        $grid->hideColumns('id'); 
        $grid->setDefaultOrder('id', 'asc'); 
        $grid->addColumn(new RankColumn(array('title'=>'S.No')), 1); 
        $grid->setActionsColumnSize(100);
        $grid->setActionsColumnTitle('');
     
     
        $grid->setLimits(array(50, 100, 150));

  


        $em3 = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM AppBundle:Pinvoiceitem a ORDER BY a.id DESC";
        $query = $em3->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $query, /* query NOT result */
        $request->query->getInt('page', 1)/*page number*/,
        10/*limit per page*/
        );


        return $grid->getGridResponse('purchaseitems/purchaseitems.html.twig', array('pinvoiceitem' => $pagination));
       
      
    
    }
}