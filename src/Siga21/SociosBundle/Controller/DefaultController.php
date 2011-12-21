<?php

namespace Siga21\SociosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('Siga21SociosBundle:Default:index.html.twig', array('name' => $name));
    }
}
