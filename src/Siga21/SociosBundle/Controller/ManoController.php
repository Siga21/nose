<?php

namespace Siga21\SociosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Siga21\SociosBundle\Entity\Mano;
use Siga21\SociosBundle\Form\ManoType;

/**
 * Mano controller.
 *
 */
class ManoController extends Controller
{
    /**
     * Lists all Mano entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('Siga21SociosBundle:Mano')->findAll();

        return $this->render('Siga21SociosBundle:Mano:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Mano entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Siga21SociosBundle:Mano')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mano entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('Siga21SociosBundle:Mano:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }
    /**
     * Displays a form to create a new Mano entity.
     *
     */
    public function newAction()
    {
        $entity = new Mano();
        $form   = $this->createForm(new ManoType(), $entity);

        return $this->render('Siga21SociosBundle:Mano:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Mano entity.
     *
     */
    public function createAction()
    {
        $entity  = new Mano();
        $request = $this->getRequest();
        $form    = $this->createForm(new ManoType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mano_show', array('id' => $entity->getId())));
            
        }

        return $this->render('Siga21SociosBundle:Mano:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Mano entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Siga21SociosBundle:Mano')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mano entity.');
        }

        $editForm = $this->createForm(new ManoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('Siga21SociosBundle:Mano:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Mano entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Siga21SociosBundle:Mano')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mano entity.');
        }

        $editForm   = $this->createForm(new ManoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mano_edit', array('id' => $id)));
        }

        return $this->render('Siga21SociosBundle:Mano:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Mano entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('Siga21SociosBundle:Mano')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Mano entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('mano'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    /**
     * Busqueda por id
     *
     */
    public function buscaAction()
    {
        return $this->render('Siga21SociosBundle:Mano:busca.html.twig');
    }
    /**
     * Muestra el registro buscado por id 
     *
     */
    public function buscashowAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $peticion = $this->getRequest();
        $id = $peticion->request->get('fid');       
        $entity = $em->getRepository('Siga21SociosBundle:Mano')->find($id);

        if (!$entity) {
           return $this->render('Siga21SociosBundle:Mano:error.html.twig');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('Siga21SociosBundle:Mano:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }
     /**
     * Busqueda por nombre
     *
     */
    public function buscanAction()
    {
        return $this->render('Siga21SociosBundle:Mano:buscan.html.twig');
    }
    /**
     * Muestra el registro buscado por id 
     *
     */

    public function buscanshowAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $peticion = $this->getRequest();
        $nome = $peticion->request->get('fnombre');   
        $entities = $em->getRepository('Siga21SociosBundle:Mano')->findByNombre($nome);
        return $this->render('Siga21SociosBundle:Mano:index.html.twig', array(
            'entities' => $entities
        ));
    }



}
