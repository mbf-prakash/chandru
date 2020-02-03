<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Imagebrowser;
use AppBundle\Form\ImagebrowserType;
use Symfony\Component\Intl\Intl;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class ImagebrowserController extends Controller
{
     /**
     * @Route("/admin/imagebrowser", name="imagebrowser")
     */
    public function imagebrowserAction(Request $request)
    {
        $imagebrowser = new Imagebrowser();
        $form = $this->createForm(ImagebrowserType::class, $imagebrowser);
        $form->handleRequest($request); 
        if ($form->isSubmitted() && $form->isValid()) 
        { 
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($imagebrowser);
            $em->flush();
            $em2 = $this->getDoctrine()->getManager();
            $userimage = $em2->getRepository('AppBundle:Imagebrowser')->findAll();
            return $this->render('imagebrowser/index.html.twig', array(
            'form' => $form->createView(), 'userimage'=>$userimage,
            ));
        } 
        else
        {
        $em2 = $this->getDoctrine()->getManager();
        $userimage = $em2->getRepository('AppBundle:Imagebrowser')->findAll();
        return $this->render('imagebrowser/index.html.twig', array(
            'form' => $form->createView(), 'userimage'=>$userimage,
        )); 
        } 
    } 

}