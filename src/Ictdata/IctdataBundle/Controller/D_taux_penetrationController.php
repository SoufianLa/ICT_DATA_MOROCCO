<?php

namespace Ictdata\IctdataBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ictdata\IctdataBundle\Entity\D_taux_penetration;
use Ictdata\IctdataBundle\Form\D_taux_penetrationType;

/**
 * D_taux_penetration controller.
 *
 */
class D_taux_penetrationController extends Controller
{

    /**
     * Lists all D_taux_penetration entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('IctdataBundle:D_taux_penetration')->findAll();

        return $this->render('IctdataBundle:D_taux_penetration:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new D_taux_penetration entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new D_taux_penetration();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('d_taux_penetration_show', array('id' => $entity->getId())));
        }

        return $this->render('IctdataBundle:D_taux_penetration:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a D_taux_penetration entity.
     *
     * @param D_taux_penetration $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(D_taux_penetration $entity)
    {
        $form = $this->createForm(new D_taux_penetrationType(), $entity, array(
            'action' => $this->generateUrl('d_taux_penetration_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new D_taux_penetration entity.
     *
     */
    public function newAction()
    {
        $entity = new D_taux_penetration();
        $form   = $this->createCreateForm($entity);

        return $this->render('IctdataBundle:D_taux_penetration:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a D_taux_penetration entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IctdataBundle:D_taux_penetration')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find D_taux_penetration entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IctdataBundle:D_taux_penetration:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing D_taux_penetration entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IctdataBundle:D_taux_penetration')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find D_taux_penetration entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IctdataBundle:D_taux_penetration:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a D_taux_penetration entity.
    *
    * @param D_taux_penetration $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(D_taux_penetration $entity)
    {
        $form = $this->createForm(new D_taux_penetrationType(), $entity, array(
            'action' => $this->generateUrl('d_taux_penetration_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing D_taux_penetration entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IctdataBundle:D_taux_penetration')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find D_taux_penetration entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('d_taux_penetration_edit', array('id' => $id)));
        }

        return $this->render('IctdataBundle:D_taux_penetration:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a D_taux_penetration entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('IctdataBundle:D_taux_penetration')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find D_taux_penetration entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('d_taux_penetration'));
    }

    /**
     * Creates a form to delete a D_taux_penetration entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('d_taux_penetration_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
