<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InnovatieController extends AbstractController
{
    /**
     * @Route("/innovatie", name="innovatie")
     */
    public function index()
    {
        return $this->render('innovatie/index.html.twig', [
            'controller_name' => 'InnovatieController',
        ]);
    }
}
