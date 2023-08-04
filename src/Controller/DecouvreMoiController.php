<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DecouvreMoiController extends AbstractController
{
    #[Route('/tresor', name: 'app_decouvre_moi')]
    public function index(): Response
    {
        return $this->render('decouvre_moi/index.html.twig', [
            'controller_name' => 'DecouvreMoiController',
        ]);
    }
}
