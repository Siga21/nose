<?php

namespace Siga21\TareasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('Siga21TareasBundle:Default:index.html.twig', array('name' => $name));
    }
}
