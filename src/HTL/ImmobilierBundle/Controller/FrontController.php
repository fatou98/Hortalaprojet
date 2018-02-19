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
        // On crée un objet Utilisateur

    $client = new Client();

    $formclient=$this-> createForm(ClientType::class,$client);


      if ($request->isMethod('POST')) {
      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $user contient les valeurs entrées dans le formulaire par l'utilisateur
      $formclient->handleRequest($request);
         if ($formclient->isValid()) {
        // On enregistre notre objet $user dans la base de données, par exemple
        $entitymaneger = $this->getDoctrine()->getManager();
//$user->setPassword('coding');
        $entitymaneger->persist($client);

        $entitymaneger->flush();

       // return $this->redirectToRoute('list');

    }
      }

    // afin qu'elle puisse afficher le formulaire toute seule

        return $this->render('HTLImmobilierBundle:Front:search_bien.html.twig', array(
             'form' => $formclient->createView()
        ));
    }
    /**
     * @Route("/front/bien/reserver")
     */
    public function reserverBienAction($id)
    {
         $bien = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('HTLImmobilierBundle:Bien')
                ->FindAllBienlocalitetypeid($id);
                        return $this->render('HTLImmobilierBundle:Front:formsearch.html.twig', array(
                                'biens' => $bien
    ));
                    
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