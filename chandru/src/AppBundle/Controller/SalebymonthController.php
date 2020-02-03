<?php

namespace AppBundle\Controller;


use AppBundle\Entity\User;
use AppBundle\Entity\MySearch;
use AppBundle\Form\MySearchType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

class SalebymonthController extends Controller
{
    /**
     * @Route("/admin/salebymonth", name="salebymonth")
     */
    public function salebymonthAction(Request $request)
    {


        $month = date('m');
        $year = date('Y');

        $mysearch = new MySearch();
        $form = $this->createForm(MySearchType::class, $mysearch);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {

        $month = $mysearch->getMonth();
        $year = $mysearch->getYear();
        

        }

        $repo = $this->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:Invoice');
        $qb = $repo->createQueryBuilder('a');
        $qb->where('MONTH(a.invoicedate) = :month');
        $qb->andWhere('YEAR(a.invoicedate) = :year');
        $qb->andwhere('a.cancel=0');
        $qb->setParameters(array('year' =>$year, 'month' =>$month));
        $sales = $qb->getQuery()->getResult();

        $monthyear = '01-'.$month.'-'.$year;
        $monthyear = date('M-Y', strtotime($monthyear));

        $mysearch->setMonth($month);
        $mysearch->setYear($year);
            
        return $this->render('salebymonth/salebymonth.html.twig', 
        array('form' => $form->createView(), 'sales'=>$sales, 'monthyear' => $monthyear)); 
    }



}