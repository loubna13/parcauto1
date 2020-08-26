<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GestionDesUtilisateursController extends AbstractController
{
    /**
     * @Route("/gestion_des_utilisateurs", name="gestion_des_utilisateurs")
     */
    public function index()
    {
        return $this->render('gestion_des_utilisateurs/index.html.twig', [
            'controller_name' => 'GestionDesUtilisateursController',
        ]);
    }
}
