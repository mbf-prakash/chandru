<?php

namespace AppBundle\Controller;


use AppBundle\Entity\User;
use AppBundle\Entity\MySearch;
use AppBundle\Form\MySearchType;

use AppBundle\Entity\MySearchyear;
use AppBundle\Form\MySearchyearType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

class SalebyyearController extends Controller
{
    /**
     * @Route("/admin/salebyyear", name="salebyyear")
     */
    public function salebyyearAction(Request $request)
    {


        $year = date('Y');

        $mysearchyear = new MySearchyear();
        $form = $this->createForm(MySearchyearType::class, $mysearchyear);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {

        $year = $mysearchyear->getYear('Y');

        }

        $repo = $this->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:Invoice');
        $qb = $repo->createQueryBuilder('a');
        $qb->andWhere('YEAR(a.invoicedate) = :year');
        $qb->andwhere('a.cancel=0');
        $qb->setParameters(array('year' =>$year));
        $sales = $qb->getQuery()->getResult();

            
        return $this->render('salebyyear/salebyyear.html.twig', 
        array('form' => $form->createView(), 'sales'=>$sales, 'year' => $year)); 
    }


}