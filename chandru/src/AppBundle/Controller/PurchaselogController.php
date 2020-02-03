<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Purchaselog;
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

class PurchaselogController extends Controller
{
    /**
     * @Route("/admin/purchaselog", name="purchaselog")
     */
    public function purchaselogAction(Request $request)
    { 
       $source = new Entity('AppBundle:Purchaselog');
        $tableAlias = $source->getTableAlias();
        // Get a grid instance
        $grid = $this->get('grid');
        // Attach the source to the grid
        $grid->setSource($source);  
        $grid->hideColumns('id');
        $grid->setDefaultOrder('id', 'desc');   
        $grid->addColumn(new RankColumn(array('title'=>'S.No')), 1);  
        $grid->setActionsColumnSize(100);
        $grid->setActionsColumnTitle('');
        $exporter = new DSVExport('csv');
        $exporter->setDelimiter(',');
        $exporter->setWithBOM(false);
        $exporter->setFileName('Purchaselog');
        $exporter->setFileExtension('csv');
        $exporter->setMimeType('text/comma-separated-values');
        $grid->addExport($exporter);
        
        $grid->setLimits(array(50, 100, 150));

        return $grid->getGridResponse('purchaselog/index.html.twig');  
    } 

    

}