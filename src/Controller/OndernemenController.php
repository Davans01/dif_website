<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OndernemenController extends AbstractController
{
    /**
     * @Route("/ondernemen", name="ondernemen")
     */
    public function index()
    {
        return $this->render('ondernemen/index.html.twig', [
            'controller_name' => 'OndernemenController',
        ]);
    }
}
