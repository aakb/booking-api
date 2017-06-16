<?php

namespace ITK\ExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ITKExchangeBundle:Default:index.html.twig');
    }
}
