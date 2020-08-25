<?php

namespace App\Controller;
use App\Repository\IndividuRepository;
use App\Repository\VehiculeRepository;
use App\Entity\PropertySearch;
use App\Entity\Individu;
use App\Entity\Vehicule;
use App\Form\PropertySearchType;
use App\Form\IndividuType;
use App\Form\VehiculeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/individu")
 */
class IndividuController extends AbstractController
{
    /**
     * @Route("/", name="individu_index", methods={"GET"})
     */
    public function index(): Response
    {
        $individus = $this->getDoctrine()
            ->getRepository(Individu::class)
            ->findAll();

        return $this->render('individu/index.html.twig', [
            'individus' => $individus,
        ]);
    }

    /**
     * @Route("/new", name="individu_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $individu = new Individu();
        $form = $this->createForm(IndividuType::class, $individu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($individu);
            $entityManager->flush();

            return $this->redirectToRoute('individu_index');
        }

        return $this->render('individu/new.html.twig', [
            'individu' => $individu,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idindividu}", name="individu_show", methods={"GET"})
     */
    public function show(Individu $individu): Response
    {
        return $this->render('individu/show.html.twig', [
            'individu' => $individu,
        ]);
    }

    /**
     * @Route("/{idindividu}/edit", name="individu_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Individu $individu): Response
    {
        $form = $this->createForm(IndividuType::class, $individu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('individu_index');
        }

        return $this->render('individu/edit.html.twig', [
            'individu' => $individu,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idindividu}", name="individu_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Individu $individu): Response
    {
        if ($this->isCsrfTokenValid('delete'.$individu->getIdindividu(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($individu);
            $entityManager->flush();
        }

        return $this->redirectToRoute('individu_index');
    }

            /**
            *@Route("PropertySearch",name="Property_Search")
            */
        public function search(Request $request, IndividuRepository $individuRepository, VehiculeRepository $vehiculeRepository )
        {
                    $propertySearch = new PropertySearch();
                    $form = $this->createForm(PropertySearchType::class,$propertySearch);
                    $form->handleRequest($request);
                
                //initialement le tableau des articles est vide, je l'ai retiré et jai ajouté ligne 111
                //c.a.d on affiche les utilisateurs que lorsqu'on clique sur le bouton recherche
                $individus=$individuRepository-> findAll();
                if($form->isSubmitted() && $form->isValid()) {
                //on récupère le nom d'utilisateur tapé dans le formulaire
                    $nom = $propertySearch->getNom(); 
                    $prenom = $propertySearch->getPrenom();  
                    if ($nom!="") {

                        //si on a fourni un nom d'utilisateur' on affiche tous les articles ayant ce nom
                        $individus=$individuRepository->findByName($nom, $prenom);

                    }    
               };
                    return  $this->render('PropertySearch/index.html.twig',[ 'form' =>$form->createView(), 'individus' => $individus ]); 
                    
        }
    
}
