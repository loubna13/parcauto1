<?php

namespace App\Controller;

use App\Entity\Vehicule;
use App\Form\VehiculeType;
use App\Repository\VehiculeRepository;
use App\Entity\PropertySearch;
use App\Entity\Individu;
use App\Form\PropertySearchType;
use App\Form\IndividuType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/vehicule")
 */
class VehiculeController extends AbstractController
{
    /**
     * @Route("/", name="vehicule_index", methods={"GET"})
     */
    public function index(VehiculeRepository $vehiculeRepository): Response
    {
        return $this->render('vehicule/index.html.twig', [
            'vehicules' => $vehiculeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="vehicule_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $vehicule = new Vehicule();
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($vehicule);
            $entityManager->flush();

            return $this->redirectToRoute('vehicule_index');
        }

        return $this->render('vehicule/new.html.twig', [
            'vehicule' => $vehicule,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idvehicule}", name="vehicule_show", methods={"GET"})
     */
    public function show(Vehicule $vehicule): Response
    {
        return $this->render('vehicule/show.html.twig', [
            'vehicule' => $vehicule,
        ]);
    }

    /**
     * @Route("/{idvehicule}/edit", name="vehicule_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Vehicule $vehicule): Response
    {
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('vehicule_index');
        }

        return $this->render('vehicule/edit.html.twig', [
            'vehicule' => $vehicule,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idvehicule}", name="vehicule_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Vehicule $vehicule): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vehicule->getIdvehicule(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($vehicule);
            $entityManager->flush();
        }

        return $this->redirectToRoute('vehicule_index');
    }

    /**
            *@Route("PropertySearch",name="Property_Search")
            */
            public function search(Request $request,VehiculeRepository $vehiculeRepository )
            {
                        $propertySearch = new PropertySearch();
                        $form = $this->createForm(PropertySearchType::class,$propertySearch);
                        $form->handleRequest($request);
    
                    $immatriculationvehicule=$vehiculeRepository-> findAll();
                    if($form->isSubmitted() && $form->isValid()) {
                    //on récupère le nom du matricule tapé dans le formulaire
                        $immatriculationvehicule = $propertySearch->getImmatriculationvehicule(); 
            
                        if ($immatriculationvehicule!="") {

                        //si on a fourni un nom d'utilisateur' on affiche tous les articles ayant ce nom
                        $immatriculationvehicule=$vehiculeRepository->findByField($immatriculationvehicule);
                        }
        
                   }


                   return  $this->render('PropertySearch/index.html.twig',[ 'form' =>$form->createView(), 'immatriculationvehicule' =>  $immatriculationvehicule ]); 
            }
        
}
