<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="root_page")
     */
    public function index()
    {
        return $this->render('home_page/home.html.twig', []);
    }
}
