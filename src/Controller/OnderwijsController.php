<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OnderwijsController extends AbstractController
{
    /**
     * @Route("/onderwijs", name="onderwijs")
     */
    public function index()
    {
        return $this->render('onderwijs/index.html.twig', [
            'controller_name' => 'OnderwijsController',
        ]);
    }
}
