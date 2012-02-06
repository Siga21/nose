<?php

namespace Siga21\TareasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Siga21\TareasBundle\Entity\Tareas;
use Siga21\TareasBundle\Form\TareasType;

/**
 * Tareas controller.
 *
 * @Route("/tareas")
 */
class TareasController extends Controller
{

    /**
    
     *
     * @Route("/unosolo", name="tareas_unosolo")
     * @Template()
     */
    public function unosoloAction()
    {
       /* $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery('SELECT p, c FROM Siga21TareasBundle:Tareas p JOIN p.socios c ');
        $query->setMaxResults(1);  
        $entities = $query->getSingleResult();
        return $this->render('Siga21TareasBundle:Tareas:index2.html.twig', array('etareas' => $entities));*/
        $em = $this->getDoctrine()->getEntityManager();
        $etareas = $em->getRepository('Siga21TareasBundle:Tareas')->findbyTareasMas();
        return $this->render('Siga21TareasBundle:Tareas:index2.html.twig', array('etareas' => $etareas));
    }   
    /**
     * Lists all Tareas entities.
     *
     * @Route("/", name="tareas")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
         $query = $em->createQuery('SELECT p, c FROM Siga21TareasBundle:Tareas p JOIN p.socios c ');
        $entities = $query->getResult(); 
   
        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Tareas entity.
     *
     * @Route("/{id}/show", name="tareas_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Siga21TareasBundle:Tareas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tareas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Tareas entity.
     *
     * @Route("/new", name="tareas_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Tareas();
        $form   = $this->createForm(new TareasType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Tareas entity.
     *
     * @Route("/create", name="tareas_create")
     * @Method("post")
     * @Template("Siga21TareasBundle:Tareas:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Tareas();
        $request = $this->getRequest();
        $form    = $this->createForm(new TareasType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tareas_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Tareas entity.
     *
     * @Route("/{id}/edit", name="tareas_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Siga21TareasBundle:Tareas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tareas entity.');
        }

        $editForm = $this->createForm(new TareasType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Tareas entity.
     *
     * @Route("/{id}/update", name="tareas_update")
     * @Method("post")
     * @Template("Siga21TareasBundle:Tareas:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Siga21TareasBundle:Tareas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tareas entity.');
        }

        $editForm   = $this->createForm(new TareasType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tareas_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Tareas entity.
     *
     * @Route("/{id}/delete", name="tareas_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('Siga21TareasBundle:Tareas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tareas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tareas'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
