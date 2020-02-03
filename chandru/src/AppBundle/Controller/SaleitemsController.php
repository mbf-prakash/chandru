<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Invoiceitem;
use AppBundle\Form\InvoiceitemType;
use AppBundle\Entity\Invoice;
use AppBundle\Entity\Myinvoiceitem;
use AppBundle\Form\MyinvoiceitemType;

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


class SaleitemsController extends Controller

{
   //Invoice Items
    /**
     * @Route("/admin/saleitems", name="saleitems")
     */

    public function saleitemsAction(Request $request)
    { 
       
       $em = $this->getDoctrine()->getManager();
        $invoiceitem = $em->getRepository('AppBundle:Invoiceitem')->findAll();

        $source = new Entity('AppBundle:Invoiceitem');
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
        $dql = "SELECT a FROM AppBundle:Invoiceitem a ORDER BY a.id DESC";
        $query = $em3->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $query, /* query NOT result */
        $request->query->getInt('page', 1)/*page number*/,
        10/*limit per page*/
        );



        return $grid->getGridResponse('saleitems/saleitems.html.twig', array('invoiceitem' => $pagination));
       
         }
}