<?php

namespace Ictdata\IctdataBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ictdata\IctdataBundle\Entity\E_enquete;
use Ictdata\IctdataBundle\Form\E_enqueteType;

/**
 * E_enquete controller.
 *
 */
class E_enqueteController extends Controller
{

    /**
     * Lists all E_enquete entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('IctdataBundle:E_enquete')->findAll();

        return $this->render('IctdataBundle:E_enquete:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new E_enquete entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new E_enquete();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('e_enquete_show', array('id' => $entity->getId())));
        }

        return $this->render('IctdataBundle:E_enquete:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a E_enquete entity.
     *
     * @param E_enquete $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(E_enquete $entity)
    {
        $form = $this->createForm(new E_enqueteType(), $entity, array(
            'action' => $this->generateUrl('e_enquete_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new E_enquete entity.
     *
     */
    public function newAction()
    {
        $entity = new E_enquete();
        $form   = $this->createCreateForm($entity);

        return $this->render('IctdataBundle:E_enquete:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a E_enquete entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IctdataBundle:E_enquete')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find E_enquete entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IctdataBundle:E_enquete:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing E_enquete entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IctdataBundle:E_enquete')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find E_enquete entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IctdataBundle:E_enquete:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a E_enquete entity.
    *
    * @param E_enquete $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(E_enquete $entity)
    {
        $form = $this->createForm(new E_enqueteType(), $entity, array(
            'action' => $this->generateUrl('e_enquete_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing E_enquete entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IctdataBundle:E_enquete')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find E_enquete entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('e_enquete_edit', array('id' => $id)));
        }

        return $this->render('IctdataBundle:E_enquete:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a E_enquete entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('IctdataBundle:E_enquete')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find E_enquete entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('e_enquete'));
    }

    /**
     * Creates a form to delete a E_enquete entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('e_enquete_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
