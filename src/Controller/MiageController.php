<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MiageController extends AbstractController
{
    #[Route('/miage', name: 'app_miage')]
    public function index(): Response
    {
        return $this->render('miage/index.html.twig', [
            'controller_name' => 'MiageController',
        ]);
    }
}
