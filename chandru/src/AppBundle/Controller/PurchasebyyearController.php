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

class PurchasebyyearController extends Controller
{
    /**
     * @Route("/admin/purchasebyyear", name="purchasebyyear")
     */
    public function purchasebyyearAction(Request $request)
    {
       
        $year = date('Y');

        $mysearchyear = new MySearchyear();
        $form = $this->createForm(MySearchyearType::class, $mysearchyear);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {

        $year = $mysearchyear->getYear('Y');

        }

        $repo2 = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('AppBundle:Pinvoice');
        $qb2 = $repo2->createQueryBuilder('a');
        $qb2->andWhere('YEAR(a.invoicedate) = :year');
        $qb2->setParameters(array('year' =>$year));
        $purchase = $qb2->getQuery()->getResult();


               
        return $this->render('purchasebyyear/purchasebyyear.html.twig', 
        array('form' => $form->createView(), 'purchase'=>$purchase, 'year' => $year));  
    }



}