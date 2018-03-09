<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/localites")
 */
class LocaliteController extends Controller
{
    /**
     * @Route("/", name="localite_index")
     */
    public function indexAction()
    {
        $typebiens = $this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:Typebien')->findAll();
        $localites = $this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:Localite')->findAll();

        return $this->render('AppBundle:Localite:index.html.twig', array(
            'localites' => $localites, 'typebiens' => $typebiens,
        ));
    }

    /**
     * @Route("/delete/{id_localite}", name="localite_delete")
     */
    public function deleteAction($id_localite)
    {
        $em = $this->getDoctrine()->getManager();
        $typebiens = $this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:Typebien')->findAll();
        $localites = $this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:Localite')->findAll();

        $localite = $em->getRepository('HTLImmobilierBundle:Localite')->find($id_localite);
        if(!$localite)
            return $this->render('AppBundle:Localite:index.html.twig', array(
                'localites' => $localites, 'typebiens' => $typebiens, 'notfound'=>true
            ));
        $em->remove($localite);
        $em->flush();
        $localites = $this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:Localite')->findAll();
        return $this->render('AppBundle:Localite:index.html.twig', array(
            'localites' => $localites, 'typebiens' => $typebiens, 'deleted'=>true
        ));
    }



    /**
     * @Route("/update", name="localite_update")
     */
    public function updateAction()
    {
        //print_r($_POST);
        $em = $this->getDoctrine()->getManager();
        $typebiens = $this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:Typebien')->findAll();
        $localites = $this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:Localite')->findAll();

        $localite = $em->getRepository('HTLImmobilierBundle:Localite')->find($_POST['id_localite']);
        if(!$localite)
            return $this->render('AppBundle:Localite:index.html.twig', array(
                'localites' => $localites, 'typebiens' => $typebiens, 'notfound'=>true
            ));
        $localite->setLibellelocalite($_POST['libelle_localite']);
        $em->persist($localite);
        $em->flush();
        $localites = $this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:Localite')->findAll();
        return $this->render('AppBundle:Localite:index.html.twig', array(
            'localites' => $localites, 'typebiens' => $typebiens, 'modified'=>true
        ));
    }

    /**
     * @Route("/edit/{id_localite}", name="localite_edit")
     */
    public function editAction($id_localite)
    {
        $em = $this->getDoctrine()->getManager();
        $typebiens = $this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:Typebien')->findAll();
        $localites = $this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:Localite')->findAll();

        $localite = $em->getRepository('HTLImmobilierBundle:Localite')->find($id_localite);
        if(!$localite)
            return $this->render('AppBundle:Localite:index.html.twig', array(
                'localites' => $localites, 'typebiens' => $typebiens, 'notfound'=>true
            ));
        $localites = $this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:Localite')->findAll();
        return $this->render('AppBundle:Localite:modif.html.twig', array(
            'localites' => $localites, 'typebiens' => $typebiens, 'localite'=>$localite
        ));
    }
}
