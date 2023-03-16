<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PresentationController extends AbstractController
{
    #[Route('/presentation', name: 'app_presentation')]
    public function index(): Response
    {   
        $personnage = [];
        $personnage['nom'] = "wingpiou";
        $personnage['prenom'] = "christopher";
        $personnage['age'] = 36;
        return $this->render('presentation/index.html.twig', [
            'moi' => $personnage,
        ]);
    }
}
