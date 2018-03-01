<?php

namespace HTL\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use HTL\ImmobilierBundle\Entity\Bien;
    use HTL\ImmobilierBundle\Entity\Client;
    use HTL\ImmobilierBundle\Form\ClientType;
    use HTL\ImmobilierBundle\Entity\Typebien;
    use HTL\ImmobilierBundle\Entity\Reservation;
    use HTL\ImmobilierBundle\Entity\Localite;
    use Symfony\Component\HttpFoundation\Response;
    use Knp\Bundle\PaginatorBundle\Pagination\SlidingPagination;
    use Knp\Bundle\PaginatorBundle\Helper\Processeur;
    use HTL\ImmobilierBundle\Form\BienType;



class AdminController extends Controller
{
    /**
     * @Route("/listbien")
     */
    public function listBienAction()
    {
        $em = $this->getDoctrine()->getManager();
        $bien= $em->getRepository(Bien::class)->FindAll();
        
        return $this->render('HTLImmobilierBundle:Admin:list_bien.html.twig', array(
            'biens' => $bien,

            // ...
        ));
    }
    public function editAction(Request $request, $id){
        $bien=$this->getDoctrine()
        ->getManager()
        ->getRepository('HTLImmobilierBundle:Bien')
        ->find($id);
        $formBien= $this->createForm(BienType::class,$bien);
        if ($request->isMethod('POST')) {
            $formBien->HandleRequest($request);
            if ($formBien->isValid()) {
                $this->getDoctrine()
                     ->getManager()
                     ->flush();

            }
        }
        return $this->render('HTLImmobilierBundle:Admin:edit.html.twig',
         array("formulaire"=>$formBien->createView())
        );

    }
    public function supprimerAction(Bien $bien){
        $em=$this->getDoctrine()->getManager();
        $em->remove($bien);
//        $em->persist($bien);
        $em->flush();
        return $this->redirectToRoute('list');
    }
  
    public function adminAction(){
        return $this->render('HTLImmobilierBundle:Admin:admin.html.twig');
 
    }
}
