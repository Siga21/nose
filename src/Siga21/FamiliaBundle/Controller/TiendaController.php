<?php

namespace Siga21\FamiliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Siga21\FamiliaBundle\Entity\Tienda;
use Siga21\FamiliaBundle\Form\TiendaType;

/**
 * Tienda controller.
 *
 */
class TiendaController extends Controller
{
    /**
     * Lists all Tienda entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('Siga21FamiliaBundle:Tienda')->findAll();

        return $this->render('Siga21FamiliaBundle:Tienda:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Tienda entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Siga21FamiliaBundle:Tienda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tienda entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('Siga21FamiliaBundle:Tienda:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Tienda entity.
     *
     */
    public function newAction()
    {
        $entity = new Tienda();
        $form   = $this->createForm(new TiendaType(), $entity);

        return $this->render('Siga21FamiliaBundle:Tienda:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Tienda entity.
     *
     */
    public function createAction()
    {
        $entity  = new Tienda();
        $request = $this->getRequest();
        $form    = $this->createForm(new TiendaType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tienda_show', array('id' => $entity->getId())));
            
        }

        return $this->render('Siga21FamiliaBundle:Tienda:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Tienda entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Siga21FamiliaBundle:Tienda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tienda entity.');
        }

        $editForm = $this->createForm(new TiendaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('Siga21FamiliaBundle:Tienda:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Tienda entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Siga21FamiliaBundle:Tienda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tienda entity.');
        }

        $editForm   = $this->createForm(new TiendaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tienda_edit', array('id' => $id)));
        }

        return $this->render('Siga21FamiliaBundle:Tienda:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tienda entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('Siga21FamiliaBundle:Tienda')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tienda entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tienda'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
