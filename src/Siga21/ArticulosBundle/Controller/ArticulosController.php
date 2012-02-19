<?php

namespace Siga21\ArticulosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Siga21\ArticulosBundle\Entity\Articulos;
use Siga21\ArticulosBundle\Form\ArticulosType;

/**
 * Articulos controller.
 *
 * @Route("/articulos")
 */
class ArticulosController extends Controller
{
    /**
     * Lists all Articulos entities.
     *
     * @Route("/", name="articulos")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('Siga21ArticulosBundle:Articulos')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Articulos entity.
     *
     * @Route("/{id}/show", name="articulos_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Siga21ArticulosBundle:Articulos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Articulos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Articulos entity.
     *
     * @Route("/new", name="articulos_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Articulos();
        $form   = $this->createForm(new ArticulosType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Articulos entity.
     *
     * @Route("/create", name="articulos_create")
     * @Method("post")
     * @Template("Siga21ArticulosBundle:Articulos:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Articulos();
        $request = $this->getRequest();
        $form    = $this->createForm(new ArticulosType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('articulos_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Articulos entity.
     *
     * @Route("/{id}/edit", name="articulos_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Siga21ArticulosBundle:Articulos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Articulos entity.');
        }

        $editForm = $this->createForm(new ArticulosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Articulos entity.
     *
     * @Route("/{id}/update", name="articulos_update")
     * @Method("post")
     * @Template("Siga21ArticulosBundle:Articulos:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Siga21ArticulosBundle:Articulos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Articulos entity.');
        }

        $editForm   = $this->createForm(new ArticulosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('articulos_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Articulos entity.
     *
     * @Route("/{id}/delete", name="articulos_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('Siga21ArticulosBundle:Articulos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Articulos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('articulos'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
