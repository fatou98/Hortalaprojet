<?php
namespace HTL\ImmobilierBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use HTL\ImmobilierBundle\Entity\Bien;
use HTL\ImmobilierBundle\Entity\Client;
use HTL\ImmobilierBundle\Form\ClientType;
use HTL\ImmobilierBundle\Entity\Typebien;
use HTL\ImmobilierBundle\Entity\Reservation;
use HTL\ImmobilierBundle\Entity\Localite;
use Symfony\Component\HttpFoundation\Response;
use Knp\Bundle\PaginatorBundle\Pagination\SlidingPagination;
use Knp\Bundle\PaginatorBundle\Helper\Processeur;
class FrontController extends Controller
{
    /**
     * @Route("/front/bien/search")
     */
    public function searchBienAction(Request $request)
    {
      /*if ($request->isMethod('POST')) {
            extract($_POST);
            $client = new Client();
            $client->setNumpiece($numpiece);
            $client->setNomComplet($nomComplet);
            $client->setTel($tel);
            $client->setAdresse($adresse);
            $client->setEmail($email);
            $client->setPassword($password);
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();
                    return $this->redirectToRoute('reserver');


      }*/
    // afin qu'elle puisse afficher le formulaire toute seule

        return $this->render('HTLImmobilierBundle:Front:search_bien.html.twig', array(
        ));
    }
    /**
     * @Route("/front/bien/reserver")
     */
    public function reserverBienAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST') && $_POST['form']="connexion") {
            extract($_POST);
           //$client = new Client();
                        $client= $em->getRepository(Client::class)->FindClient($email,$password);

            //->getRepository('HTLImmobilierBundle:Client')
            $bien= $em->getRepository(Bien::class)->find($idBien);

            $reservation = new Reservation();
            $reservation->setDatereservation(new \DateTime('now'));
            $reservation->setEtat(false);
            $reservation->setBien($bien);
            $reservation->setClient($client);
            $em->persist($reservation);
            $em->flush();
            $bien = $this->getDoctrine()
            ->getManager()
            ->getRepository('HTLImmobilierBundle:Bien')
            ->FindAllBienlocalitetypeid($idBien);
              return $this->render('HTLImmobilierBundle:Front:formsearch.html.twig', array(
                'biens' => $bien
            ));
                }
        if ($request->isMethod('POST') && $_POST['form']="inscription") {
            extract($_POST);
            $client = new Client();
            $client->setNumpiece($numpiece);
            $client->setNomComplet($nomComplet);
            $client->setTel($tel);
            $client->setAdresse($adresse);
            $client->setEmail($email);
            $client->setPassword($password);
            $em->persist($client);
            $em->flush();

            $bien= $em->getRepository(Bien::class)->find($idBien);

            $reservation = new Reservation();
            $reservation->setDatereservation(new \DateTime('now'));
            $reservation->setEtat(false);
            $reservation->setBien($bien);
            $reservation->setClient($client);
            $em->persist($reservation);
            $em->flush();

            $bien = $this->getDoctrine()
            ->getManager()
            ->getRepository('HTLImmobilierBundle:Bien')
            ->FindAllBienlocalitetypeid($idBien);
            return $this->render('HTLImmobilierBundle:Front:formsearch.html.twig', array(
                'biens' => $bien
            ));
        }


        if ($request->isMethod('GET')) {
            extract($_GET);
            $bien = $this->getDoctrine()
            ->getManager()
            ->getRepository('HTLImmobilierBundle:Bien')
            ->FindAllBienlocalitetypeid($id);
            return $this->render('HTLImmobilierBundle:Front:formsearch.html.twig', array(
                'biens' => $bien
            ));
        }
    }
     public function listeBienAction(){

                            $em = $this->getDoctrine()->getManager();
         $bien= $em->getRepository(Bien::class)
            ->FindAllBienlocalitetype();


                          return $this->render('HTLImmobilierBundle:Front:listebien.html.twig', array(
                                  'biens' => $bien,
                        ));
    }
                public function searchPrixAction(Request $request){

               $bien = new Bien();
                    if($request->isMethod('POST')){

                        $prixlocation = $_POST["prixlocation"];
                        $libellelocalite = $_POST["libellelocalite"];
                        $libelletype = $_POST["libelletype"];
                        $description = $_POST["description"];

                         if(empty($prixlocation) and empty($libelletype) and empty($description) and empty($libellelocalite)){
                                 $reservations = $this->getDoctrine()->getManager()
                        ->getRepository(Bien::class)
                                   ->FindAllBienlocalitetype();
                        $bien= $this->get('knp_paginator')->paginate(
                        $reservations,
                        $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                          6/*nbre d'éléments par page*/
    );}
                                    else  if(empty($prixlocation) and empty($libelletype) and empty($libellelocalite)){
                                 $reservations = $this->getDoctrine()->getManager()
                        ->getRepository(Bien::class)
                                   ->FindAllBiensansdescription($prixlocation,$libellelocalite,$libelletype);
                        $bien= $this->get('knp_paginator')->paginate(
                        $reservations,
                        $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                          6/*nbre d'éléments par page*/
    );

                            }

                        else if( empty($libelletype) and empty($description) and empty($libellelocalite)){
                                 $reservations = $this->getDoctrine()->getManager()
                        ->getRepository(Bien::class)
                                   ->FindAllBienprixlocation($prixlocation);
                        $bien= $this->get('knp_paginator')->paginate(
                        $reservations,
                        $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                          6/*nbre d'éléments par page*/
    );

                            }

                      else if(empty($prixlocation) and empty($libelletype) and empty($description)){
                                 $reservations = $this->getDoctrine()->getManager()
                        ->getRepository(Localite::class)
                                   ->FindAllLocalite($libellelocalite);
                        $bien= $this->get('knp_paginator')->paginate(
                        $reservations,
                        $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                          6/*nbre d'éléments par page*/
    );

                            }
                       else  if(empty($prixlocation) and empty($description) and empty($libellelocalite)){
                                 $reservations = $this->getDoctrine()->getManager()
                        ->getRepository(Typebien::class)
                                   ->FindAllBientypebien($libelletype);
                        $bien= $this->get('knp_paginator')->paginate(
                        $reservations,
                        $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                          6/*nbre d'éléments par page*/
    );

                            }
                        else if(empty($prixlocation) and empty($libelletype) and empty($libellelocalite)){
                                 $reservations = $this->getDoctrine()->getManager()
                        ->getRepository(Bien::class)
                                   ->FindAllBiendescription($description);
                        $bien= $this->get('knp_paginator')->paginate(
                        $reservations,
                        $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                          6/*nbre d'éléments par page*/
    );

                            }


                                            else{
                                                 $reservations = $this->getDoctrine()->getManager()
                        ->getRepository(Bien::class)
                        ->FindAllBienprix($prixlocation,$libellelocalite,$libelletype,$description);
                        $bien= $this->get('knp_paginator')->paginate(
                        $reservations,
                        $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                       6/*nbre d'éléments par page*/
                  );    }

                    }
                    else{
                          $reservations= $this->getDoctrine()->getManager()
                        ->getRepository(Bien::class)
                      ->FindAllBienlocalitetype();
                        $bien= $this->get('knp_paginator')->paginate(
                        $reservations,
                        $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                          6/*nbre d'éléments par page*/
    );
                    }
                         return $this->render('HTLImmobilierBundle:Front:listebien.html.twig', array(
                                'biens' => $bien ,
                                 ));

                }
   /* public function searchLocaliteAction(Request $request){
                     $em = $this->getDoctrine()->getManager();
                        $bien = $em->getRepository(Localite::class);
                        if($request->isMethod('post')){
                                    $libellelocalite = $_POST["libellelocalite"];

                           $bien->FindAllLocalite($libellelocalite);
                        }

                             return $this->render('HTLImmobilierBundle:Front:listebien.html.twig', array(
                                   'biens' => $bien,

                ));
    }*/
}