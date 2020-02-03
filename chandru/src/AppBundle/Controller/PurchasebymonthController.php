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

class PurchasebymonthController extends Controller
{
    /**
     * @Route("/admin/purchasebymonth", name="purchasebymonth")
     */
    public function purchasebymonthAction(Request $request)
    {



        $month = date('m');
        $year = date('Y');

        $mysearch = new MySearch();
        $form = $this->createForm(MySearchType::class, $mysearch);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {

        $month = $mysearch->getMonth('m');
        $year = $mysearch->getYear('Y');

        }

        $repo2 = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('AppBundle:Pinvoice');
        $qb2 = $repo2->createQueryBuilder('a');
        $qb2->where('MONTH(a.invoicedate) = :month');
        $qb2->andWhere('YEAR(a.invoicedate) = :year');
        $qb2->setParameters(array('year' =>$year, 'month' =>$month));
        $purchase = $qb2->getQuery()->getResult();



        $monthyear = '01-'.$month.'-'.$year;
        $monthyear = date('M-Y', strtotime($monthyear));
            
               

            
        return $this->render('purchasebymonth/purchasebymonth.html.twig', 
        array('form' => $form->createView(), 'purchase'=>$purchase, 'monthyear' => $monthyear)); 
    }



}