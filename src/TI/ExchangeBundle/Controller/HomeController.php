<?php

namespace TI\ExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class HomeController extends Controller

{

    public function indexAction()

    {
        $response = new Response();
        
        $response->setContent("Ceci est une page d'erreur 404 (il faudra penser à faire une page référençant les liens du site pour pouvoir tester)");

        $response->setStatusCode(Response::HTTP_NOT_FOUND);


    return $response;
  
    }

}