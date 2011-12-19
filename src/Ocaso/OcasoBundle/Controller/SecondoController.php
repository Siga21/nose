<?php

namespace Ocaso\OcasoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SecondoController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('OcasoOcasoBundle:Secondo:secondo.html.twig');
    }

}
