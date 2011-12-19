<?php

namespace Ocaso\OcasoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('OcasoOcasoBundle:Default:index.html.twig', array('name' => $name));
    }

    public function ciaoAction($name)
    {
        return $this->render('OcasoOcasoBundle:Default:ciao.html.twig', array('name' => $name));
    }
}
