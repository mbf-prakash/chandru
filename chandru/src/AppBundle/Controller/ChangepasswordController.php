<?php

namespace AppBundle\Controller;


use AppBundle\Entity\User;
use AppBundle\Entity\Changepassword;
use AppBundle\Form\ChangepasswordType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ChangepasswordController extends Controller
{
    /**
     * @Route("/admin/changepassword", name="changepassword")
     */
    public function changepasswordAction(Request $request)
    {        
        $changepassword = new Changepassword();
        $form = $this->createForm(ChangepasswordType::class, $changepassword);
        $form->handleRequest($request);

         if($form->isSubmitted() && $form->isValid()) 
         {  
               $em1=$this->getDoctrine()->getManager();
               $user=$em1->getRepository('AppBundle:User')->find($this->getUser());
               $user->setPlainPassword($changepassword->getPlainPassword()); 
               $userManager = $this->container->get('fos_user.user_manager');
               $userManager->updatePassword($user); 
               $em1->flush();
 

            $this->addFlash('success', 'Password changed successfully'); 
            return $this->redirectToRoute('changepassword');  
         }
        return $this->render('changepassword/index.html.twig', array(
            'form' => $form->createView(),
        ));  
      
    }
}