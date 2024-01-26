<?php

namespace App\Controller;

use App\Form\ChercheurType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChercheurController extends AbstractController
{
    #[Route('/chercheur', name: 'app_chercheur')]
    public function index(): Response
    {
        $form=$this->createForm(ChercheurType::class);
        return $this->render('chercheur/index.html.twig', [
            'controller_name' => 'ChercheurController',
            'formulaire' =>'ChercheurType.php'
        ]);
    }
} 

