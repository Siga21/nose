<?php

namespace Siga21\AsociadosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Siga21\AsociadosBundle\Entity\Asociados;
use Siga21\AsociadosBundle\Form\AsociadosType;
use Symfony\Component\HttpFoundation\Request;


/**
 * Asociados controller.
 *
 * @Route("/asociados")
 */
class AsociadosController extends Controller
{
    /**
     * Lists all Asociados entities.
     *
     * @Route("/", name="asociados")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('Siga21AsociadosBundle:Asociados')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Asociados entity.
     *
     * @Route("/{id}/show", name="asociados_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Siga21AsociadosBundle:Asociados')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Asociados entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Asociados entity.
     *
     * @Route("/new", name="asociados_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Asociados();
        $form   = $this->createForm(new AsociadosType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Asociados entity.
     *
     * @Route("/create", name="asociados_create")
     * @Method("post")
     * @Template("Siga21AsociadosBundle:Asociados:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Asociados();
        $request = $this->getRequest();
        $form    = $this->createForm(new AsociadosType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('asociados_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Asociados entity.
     *
     * @Route("/{id}/edit", name="asociados_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Siga21AsociadosBundle:Asociados')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Asociados entity.');
        }

        $editForm = $this->createForm(new AsociadosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Asociados entity.
     *
     * @Route("/{id}/update", name="asociados_update")
     * @Method("post")
     * @Template("Siga21AsociadosBundle:Asociados:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Siga21AsociadosBundle:Asociados')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Asociados entity.');
        }

        $editForm   = $this->createForm(new AsociadosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('asociados_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Asociados entity.
     *
     * @Route("/{id}/delete", name="asociados_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('Siga21AsociadosBundle:Asociados')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Asociados entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('asociados'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }

    public function dniAction(Request $request)
    {
       $form = $this->createFormBuilder()
          ->add('numero','integer')
          ->getForm();
       if ($request->getMethod() == 'POST')
       {
           $form->bindRequest($request);
           if($form->isValid())
           {
               $numero_dni = $form->getData();
               $numerito = $numero_dni['numero'];
               return $this->render('Siga21AsociadosBundle:Asociados:dni_dos.html.twig', array('numerito'=> $numerito)); 
             
           }
       }
       return $this->render('Siga21AsociadosBundle:Asociados:dni.html.twig', array('formulario' => $form->createView(),));
    } 
    
   
    


}
