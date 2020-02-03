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

class DashboardController extends Controller
{
    /**
     * @Route("/admin/dashboard", name="dashboard")
     */
    public function dashboardAction(Request $request)
    {
        $month = date('m');
        $year = date('Y');

        $repo = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('AppBundle:Invoice');
        $qb = $repo->createQueryBuilder('a');
        $qb->where('MONTH(a.invoicedate) = :month');
        $qb->andWhere('YEAR(a.invoicedate) = :year');
        $qb->andWhere('a.cancel = 0');
        $qb->setParameters(array('year' =>$year, 'month' =>$month));
        $sales = $qb->getQuery()->getResult();

        $repo2 = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('AppBundle:Pinvoice');
        $qb2 = $repo2->createQueryBuilder('a');
        $qb2->where('MONTH(a.invoicedate) = :month');
        $qb2->andWhere('YEAR(a.invoicedate) = :year');
        $qb->andWhere('a.cancel = 0');
        $qb2->setParameters(array('year' =>$year, 'month' =>$month));
        $purchase = $qb2->getQuery()->getResult();


        $repo4 = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('AppBundle:Invoice');
        $qb4 = $repo4->createQueryBuilder('a');
        $qb4->select('SUM(a.balance)');
        $qb4->where('MONTH(a.invoicedate) = :month');
        $qb4->andWhere('YEAR(a.invoicedate) = :year');
        $qb4->andWhere('a.status = 0');
        $qb4->andWhere('a.cancel = 0');
        $qb4->setParameters(array('year' =>$year, 'month' =>$month));
        $upamount = $qb4->getQuery()->getSingleScalarResult();



        $repo5 = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('AppBundle:Pinvoice');
        $qb5 = $repo5->createQueryBuilder('a');
        $qb5->select('SUM(a.balance)');
        $qb5->where('MONTH(a.invoicedate) = :month');
        $qb5->andWhere('YEAR(a.invoicedate) = :year');
        $qb5->andWhere('a.status = 0');
        $qb5->setParameters(array('year' =>$year, 'month' =>$month));
        $pupamount = $qb5->getQuery()->getSingleScalarResult();


        $repo6 = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('AppBundle:Expanses');
        $qb6 = $repo6->createQueryBuilder('a');
        $qb6->where('MONTH(a.invoicedate) = :month');
        $qb6->andWhere('YEAR(a.invoicedate) = :year');
        $qb6->setParameters(array('year' =>$year, 'month' =>$month));
        $expanses = $qb6->getQuery()->getResult();

            
        return $this->render('dashboard/index.html.twig', 
        array('sales'=>$sales, 'purchase'=>$purchase, 'pupamount'=>$pupamount, 
        'upamount'=>$upamount, 'expanses'=>$expanses, 'monthyear'=>date('M-Y'))); 
    }



    public function spchartAction()
    {
        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $data = array();
        $data[] = array('Month', 'Sales', 'Purchase', 'Profit');

        for($i=1; $i<=12; $i++)
        {
            $month = $i;
            $year = date('Y');

            $repo = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('AppBundle:Invoice');
            $qb = $repo->createQueryBuilder('a');
            $qb->select('SUM(a.grandtotal)');
            $qb->where('MONTH(a.invoicedate) = :month');
            $qb->andWhere('YEAR(a.invoicedate) = :year');
            $qb->andWhere('a.cancel = 0');
            $qb->setParameters(array('year' =>$year, 'month' =>$month));
            $sales = $qb->getQuery()->getSingleScalarResult();

            $repo2 = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('AppBundle:Pinvoice');
            $qb2 = $repo2->createQueryBuilder('a');
            $qb2->select('SUM(a.grandtotal)');
            $qb2->where('MONTH(a.invoicedate) = :month');
            $qb2->andWhere('YEAR(a.invoicedate) = :year');
            $qb2->setParameters(array('year' =>$year, 'month' =>$month));
            $qb->andWhere('a.cancel = 0');
            $purchase = $qb2->getQuery()->getSingleScalarResult();

            $profit = $sales-$purchase;
            if($profit<0)
            {
                $profit = 0;
            }

            $monthName = date('M', mktime(0, 0, 0, $i, 10));

            $data[] = array($monthName, (int) $sales, (int) $purchase, (int) $profit);
        }

        $data = $serializer->serialize($data, 'json');

        return $this->render('dashboard/_spchart.html.twig', array('datas'=>$data, 'year'=>$year)); 
    }


    public function usernameAction(Request $request)
   {
       $userId = $this->getUser()->getId();

       //getting settings
       $em = $this->getDoctrine()->getManager();
       $user = $em->getRepository('AppBundle:User')->find($userId);


       return $this->render('dashboard/_username.html.twig', array('user'=>$user));
   }


}