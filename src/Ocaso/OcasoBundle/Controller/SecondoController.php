<?php

namespace Ocaso\OcasoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class SecondoController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('OcasoOcasoBundle:Secondo:secondo.html.twig');
    }

    public function aconaAction()
    {
        $request = $this->get('request');
        if ($request->isXmlHttpRequest()) {
                return $this->render('OcasoOcasoBundle::trozo.html.twig',array('ponencia' => 'Roca'));
            }else{
                $session = $this->get('request')->getSession();
                $session->setFlash('notice', sprintf("Te has apuntado a quimica"));
                return $this->redirect($this->generateUrl('Ocaso_principal', array('name' => 'Xabier')));
            }
    }
}
