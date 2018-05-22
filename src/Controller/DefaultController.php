<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return new Response('<h1>HOMEPAGE</h1>');
    }

    /**
     * @Route("/coins")
     */
    public function currencies()
    {
        return new Response('<h1>Coins</h1>');
    }

    /**
     * @Route("/coins/{currencies}")
     */
    public function bitcoin($coins)
    {
        return new Response(sprintf('<h1>%s</h1>', $coins));
    }

}