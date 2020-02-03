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

class ExpensesbymonthController extends Controller
{
    /**
     * @Route("/admin/expensesbymonth", name="expensesbymonth")
     */
    public function expensesbymonthAction(Request $request)
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

        $repo = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('AppBundle:Expanses');
        $qb = $repo->createQueryBuilder('a');
        $qb->where('MONTH(a.invoicedate) = :month');
        $qb->andWhere('YEAR(a.invoicedate) = :year');
        $qb->setParameters(array('year' =>$year, 'month' =>$month));
        $expenses = $qb->getQuery()->getResult();

        
        $monthyear = '01-'.$month.'-'.$year;
        $monthyear = date('M-Y', strtotime($monthyear));
            
               
    
        return $this->render('expensesbymonth/expensesbymonth.html.twig', 
        array('form' => $form->createView(), 'expenses'=>$expenses, 'monthyear' => $monthyear)); 
    }



}