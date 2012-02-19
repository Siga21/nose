<?php

namespace Siga21\FamiliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('Siga21FamiliaBundle:Default:index.html.twig', array('name' => $name));
    }
}
