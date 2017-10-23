<?php

namespace TI\ExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TIExchangeBundle:Default:index.html.twig');
    }
}
