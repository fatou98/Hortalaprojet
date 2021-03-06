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
    use HTL\ImmobilierBundle\Entity\Paiement;
    use HTL\ImmobilierBundle\Entity\Contrat;
    use HTL\ImmobilierBundle\Entity\Reservation;
    use HTL\ImmobilierBundle\Entity\Localite;
    use Symfony\Component\HttpFoundation\Response;
    use Knp\Bundle\PaginatorBundle\Pagination\SlidingPagination;
    use Knp\Bundle\PaginatorBundle\Helper\Processeur;
            class FrontController extends Controller
            {
                public function listelocaliteAction(){
                $em = $this->getDoctrine()->getManager();
                $localite= $em->getRepository(Localite::class)->FindAll();
                  return $this->render('HTLImmobilierBundle:Front:localite.html.twig', array(
                          'localites' => $localite,
                    ));
                    }
             public function listTypebienAction()
                    {
                $repository= $this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:Typebien');
                $localite=$repository->findAll();
                return $this->render('HTLImmobilierBundle:Front:listetypebien.html.twig', array(
                     'localites' => $localite,
                ));
                    }
            public function accueilAction(){    
                        return $this->render('HTLImmobilierBundle:Front:accueil.html.twig', array());
               }
            public function listeAdminAction(Request $request){
                     $em = $this->getDoctrine()->getManager();
                     $reservation= $em->getRepository(Bien::class)->FindAllBienlocalitetype();
                      $bien= $this->get('knp_paginator')->paginate(
                            $reservation,
                            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                              6/*nbre d'éléments par page*/
                                 );
                        return $this->render('HTLImmobilierBundle:Front:listeadmin.html.twig', array(
                          'biens' => $bien,
                                    ));
                    }
             public function listeReservationAction(Request $request){
                     $em = $this->getDoctrine()->getManager();
                     $bien= $em->getRepository(Reservation::class)->FindBy(array('etat' => 0 ));
                       $reservation= $this->get('knp_paginator')->paginate(
                            $bien,
                            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                              6/*nbre d'éléments par page*/
                                 );
                        return $this->render('HTLImmobilierBundle:Front:listereservation.html.twig', array(
                        'reservations' => $reservation,
                                    ));
                }
            public function detailsReservationAction(Request $request){
                 if ($request->isMethod('GET')) {
                    extract($_GET);
                     $em = $this->getDoctrine()->getManager();
                     $reservation= $em->getRepository(Reservation::class)->FindBy(array('id' => $id ));
                      
                }
                  return $this->render('HTLImmobilierBundle:Front:details.html.twig', array(
                                                  'reservations' => $reservation,

                    ));
                           
            }
            public function contratReservationAction(Request $request){
                $reservation=new Reservation();
    
                $em = $this->getDoctrine()->getManager();
                if($request->isMethod('POST')) {
                   // if(isset($_POST['save'])){
                    extract($_POST);
                   $bien= $em->getRepository(Bien::class)->find($idbien);
                    //$client= $em->getRepository(Client::class)->FindClientByid($idclient);
                    //$clientreserve=$em->getRepository(Client::class)->find($client->getId());
                    $contrat = new Contrat();
                    $contrat->setDateContrat(new \DateTime('now'));
                    $contrat->setCaution($caution);
                    $contrat->setDuree("1ans");
                    $contrat->setBien($bien);
                    //$contrat->setClient($client);
                    $em->persist($contrat);
                    $em->flush();
                    $paiement = new Paiement();
                    $paiement->setMontant($montant);
                    $paiement->setDatepaiement(new \DateTime('now'));
                    $paiement->setPeriode(new \DateTime('now'));
                    $em->persist($paiement);
                    $em->flush();
                   
                    //}
              }
              if ($request->isMethod('GET')) {
                extract($_GET);
                 $reservation= $em->getRepository(Reservation::class)->FindBy(array('id' => $id,'etat'=>0 ));
                 $reservation[0]->setEtat(true);
                 $em->persist($reservation[0]);
                 $em->flush();
             }
    
                   return $this->render('HTLImmobilierBundle:Front:contrat.html.twig', array(
                                                   'reservations' => $reservation,
                     ));
                            
             }


            /**
             * @Route("/front/bien/reserver")
             */
            public function reserverBienAction(Request $request)
            {
                $em = $this->getDoctrine()->getManager();
            if($request->isMethod('POST')) {
                if($_POST['form']='connexion'){
                    extract($_POST);
                    $client= $em->getRepository(Client::class)->FindClient($email,$password);
                    $clientreserve=$em->getRepository(Client::class)->find($client[0]->getId());
                    $bien= $em->getRepository(Bien::class)->find($idBien);
                    $reservation = new Reservation();
                    $reservation->setDatereservation(new \DateTime('now'));
                    $reservation->setEtat(false);
                    $reservation->setBien($bien);
                    $reservation->setClient($clientreserve);
                    $em->persist($reservation);
                    $em->flush();
                    $bien = $this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:Bien')
                    ->FindAllBienlocalitetypeid($idBien);
                      return $this->render('HTLImmobilierBundle:Front:formsearch.html.twig', array(
                        'biens' => $bien
                    ));
                        }
              else if ($_POST['form']='inscription'){
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
                    $bien = $this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:Bien')
                    ->FindAllBienlocalitetypeid($idBien);
                    return $this->render('HTLImmobilierBundle:Front:formsearch.html.twig', array(
                                'biens' => $bien
                    ));
                      }
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
                    if ($request->isMethod('GET')) {
                    extract($_GET);
               $bien = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('HTLImmobilierBundle:Bien')
                    ->FindAllBientypebyid($libelletype);
                    //var_dump($bien);die();
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
                                 );
                                    }
                            else if(empty($prixlocation) and empty($libelletype) and empty($libellelocalite)){
                             $reservations = $this->getDoctrine()->getManager()->getRepository(Bien::class)
                             ->FindAllBiensansdescription($prixlocation,$libellelocalite,$libelletype);
                            $bien= $this->get('knp_paginator')->paginate(
                            $reservations,
                            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                              6/*nbre d'éléments par page*/
                                );
                                }
                            else if( empty($libelletype) and empty($description) and empty($libellelocalite)){
                            $reservations = $this->getDoctrine()->getManager()->getRepository(Bien::class)
                            ->FindAllBienprixlocation($prixlocation);
                            $bien= $this->get('knp_paginator')->paginate(
                            $reservations,
                            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                              6/*nbre d'éléments par page*/
                                );
                                }
                            else if(empty($prixlocation) and empty($libelletype) and empty($description)){
                            $reservations = $this->getDoctrine()->getManager()->getRepository(Localite::class)
                            ->FindAllLocalite($libellelocalite);
                            $bien= $this->get('knp_paginator')->paginate(
                            $reservations,
                            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                              6/*nbre d'éléments par page*/
                            );

                            }
                            else  if(empty($prixlocation) and empty($description) and empty($libellelocalite)){
                            $reservations = $this->getDoctrine()->getManager()->getRepository(Typebien::class)
                            ->FindAllBientypebien($libelletype);
                            $bien= $this->get('knp_paginator')->paginate(
                            $reservations,
                            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                              6/*nbre d'éléments par page*/
                                );
                                }
                            else if(empty($prixlocation) and empty($libelletype) and empty($libellelocalite)){
                            $reservations = $this->getDoctrine()->getManager()->getRepository(Bien::class)
                            ->FindAllBiendescription($description);
                            $bien= $this->get('knp_paginator')->paginate(
                            $reservations,
                            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                              6/*nbre d'éléments par page*/
                                     );
                                }
                            else{
                            $reservations = $this->getDoctrine()->getManager()->getRepository(Bien::class)
                            ->FindAllBienprix($prixlocation,$libellelocalite,$libelletype,$description);
                            $bien= $this->get('knp_paginator')->paginate(
                            $reservations,
                            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                           6/*nbre d'éléments par page*/
                             );}
                            }
                            else{
                            $reservations= $this->getDoctrine()->getManager()->getRepository(Bien::class)
                          ->FindAllBienlocalitetype();
                            $bien= $this->get('knp_paginator')->paginate(
                            $reservations,
                            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                              6/*nbre d'éléments par page*/
                            );
                        }
                            $typebien = $this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:Typebien')->findAll();
                            $localite = $this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:Localite')
                                ->findAll();
                             return $this->render('HTLImmobilierBundle:Front:listebien.html.twig', array(
                                    'biens' => $bien ,'localites'=>$localite, 'typebiens'=>$typebien
                                     ));
                                }
}