<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DutchInnovationFactoryController extends AbstractController
{
    /**
     * @Route("/dutch/innovation/factory", name="dutch_innovation_factory")
     */
    public function index()
    {
        return $this->render('dutch_innovation_factory/index.html.twig', [
            'controller_name' => 'DutchInnovationFactoryController',
        ]);
    }
}
