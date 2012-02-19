<?php

namespace Siga21\FamiliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Siga21\FamiliaBundle\Entity\Familia;
use Siga21\FamiliaBundle\Form\FamiliaType;

/**
 * Familia controller.
 *
 */
class FamiliaController extends Controller
{
    /**
     * Lists all Familia entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('Siga21FamiliaBundle:Familia')->findAll();

        return $this->render('Siga21FamiliaBundle:Familia:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Familia entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Siga21FamiliaBundle:Familia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Familia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('Siga21FamiliaBundle:Familia:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Familia entity.
     *
     */
    public function newAction()
    {
        $entity = new Familia();
        $form   = $this->createForm(new FamiliaType(), $entity);

        return $this->render('Siga21FamiliaBundle:Familia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Familia entity.
     *
     */
    public function createAction()
    {
        $entity  = new Familia();
        $request = $this->getRequest();
        $form    = $this->createForm(new FamiliaType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('familia_show', array('id' => $entity->getId())));
            
        }

        return $this->render('Siga21FamiliaBundle:Familia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Familia entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Siga21FamiliaBundle:Familia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Familia entity.');
        }

        $editForm = $this->createForm(new FamiliaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('Siga21FamiliaBundle:Familia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Familia entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Siga21FamiliaBundle:Familia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Familia entity.');
        }

        $editForm   = $this->createForm(new FamiliaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('familia_edit', array('id' => $id)));
        }

        return $this->render('Siga21FamiliaBundle:Familia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Familia entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('Siga21FamiliaBundle:Familia')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Familia entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('familia'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
