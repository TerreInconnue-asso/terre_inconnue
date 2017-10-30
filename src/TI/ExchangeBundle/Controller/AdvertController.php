<?php


// src/OC/PlatformBundle/Controller/AdvertController.php


namespace TI\ExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class AdvertController extends Controller

{

    public function indexAction()

    {
        /*
        $content = $this->get('templating')->render('TIExchangeBundle:Advert:index.html.twig');
        return new Response($content);
        */
        //return new Response("Notre propre Hello World !");
        $content = $this->get('templating')->render('TIExchangeBundle:Advert:index.html.twig');
    
        return new Response($content);
  
    }

}