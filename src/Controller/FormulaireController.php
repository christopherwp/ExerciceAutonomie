<?php

namespace App\Controller;

use App\Form\FormulaireType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FormulaireController extends AbstractController
{
    #[Route('/formulaire', name: 'app_formulaire')]
    public function index(Request $request): Response
    {
        $form=$this->createForm(FormulaireType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $number = $form->getData();
            $number['alea'] = rand(1,100);
            $number['result']= $number['alea'] == $number['nombre'] ? "tu as gagné":"tu as perdu";
                

            


            return $this->render('formulaire/reponse.html.twig', [
            'form' => $number,
        ]);
        }

        return $this->renderForm('formulaire/index.html.twig', [
            'form' => $form,
        ]);
    }
}
