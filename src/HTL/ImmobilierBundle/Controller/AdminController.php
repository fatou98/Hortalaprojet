<?php

namespace HTL\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HTL\ImmobilierBundle\Entity\Bien;
use HTL\ImmobilierBundle\bien\BienType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class AdminController extends Controller
{
    public function adminAction(Request $request)

    {
    
            $bien = new Bien();
            if ($request->isMethod('POST')) {
            $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bien);
            $em->flush();

            return new Response('Bien ajouté !');
        }
    }
        return $this->render('HTLImmobilierBundle:Front:admin.html.twig', array(
           ));
        
    }
    //$repository=$this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:Client');
           //if($request->isMethod('post')){
              
            //$client=$repository->findBy(["email"=>$_POST['login'],"password"=>$_POST['passord']]);
            //return $this->redirectToRoute('searchprix');

        
        //}
        //return $this->render('HTLImmobilierBundle:user:index
        
}
