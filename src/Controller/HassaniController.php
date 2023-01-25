<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HassaniController extends AbstractController
{
    #[Route('/hassani', name: 'app_hassani')]
    public function index(): Response
    {
        return $this->render('hassani/index.html.twig', [
            'controller_name' => 'HassaniController',
        ]);
    }

#[Route('/hassani/portfolio', name: 'app_hassani_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('hassani/portfolio.html.twig', [
            'controller_name' => 'AssaniController',
        ]);
    }
    #[Route('/hassani/formulaire', name: 'app_hassani_formulaire')]
    public function formulaire(): Response
    {
        return $this->render('hassani/formulaire.html.twig', [
            'controller_name' => 'AssaniController',
        ]);
    }

    #[Route('/hassani/loisirs', name: 'app_hassani_loisirs')]
    public function loisirs(): Response
    {
        return $this->render('hassani/loisirs.html.twig', [
            'controller_name' => 'AssaniController',
        ]);
    }
    #[Route('/hassani/cv', name: 'app_hassani_cv')]
    public function cv(): Response
    {
        return $this->render('hassani/cv.html.twig', [
            'controller_name' => 'AssaniController',
        ]);
    }

}
