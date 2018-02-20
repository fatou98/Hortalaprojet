<?php

namespace HTL\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


use Symfony\Component\HttpFoundation\Request;

class FrontController extends Controller
{
    /**
     * @Route("/front/bien/search")
     */
    public function searchBienAction(Request $request)
    {
        $repositorylocalite = $this->getDoctrine()->getManager()
        ->getRepository('HTLImmobilierBundle:Localite');
        $localite = $repositorylocalite->findAll();

        $repositorytypebien = $this->getDoctrine()->getManager()
        ->getRepository('HTLImmobilierBundle:Typebien');
        $type = $repositorytypebien->findAll();

        $selectypebien = 0;
        $selectlocalite = 0;
        $prix = "";
        if ($request->isMethod('POST')) {
            $selectlocalite = $request->get('locaselect');
            $selecttypebien = $request->get('typeselect');
            $prix = $request->get('prix');
        }
        
   
        return $this->render('HTLImmobilierBundle:Front:search_bien.html.twig', array(
            'localites'=>$localite ,
            'types'=>$type,
            'loca'=>$selectlocalite,
            'typeBien'=>$selecttypebien,
            'prix'=>$prix
        ));
    }

    /**
     * @Route("/front/bien/reserver")
     */
    public function reserverBienAction()
    {
        return $this->render('HTLImmobilierBundle:Front:reserver_bien.html.twig', array(
            // ...
        ));
    }

}
