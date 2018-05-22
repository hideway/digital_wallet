<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {

    }

    /**
     * @Route("/coins")
     */
    public function indexcoins()
    {

    }

    /**
     * @Route("/coins/{slug}")
     */
    public function showcoins($slug)
    {
        $amount = 15;

        return $this->render('coins/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'amount' => $amount,
        ]);
    }

}