<?php

namespace Siga21\ArticulosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('Siga21ArticulosBundle:Default:index.html.twig', array('name' => $name));
    }
}
