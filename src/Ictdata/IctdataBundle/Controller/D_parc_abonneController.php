<?php

namespace Ictdata\IctdataBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ictdata\IctdataBundle\Entity\D_parc_abonne;
use Ictdata\IctdataBundle\Form\D_parc_abonneType;

/**
 * D_parc_abonne controller.
 *
 */
class D_parc_abonneController extends Controller
{

    /**
     * Lists all D_parc_abonne entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('IctdataBundle:D_parc_abonne')->findAll();

        return $this->render('IctdataBundle:D_parc_abonne:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new D_parc_abonne entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new D_parc_abonne();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('d_parc_abonne_show', array('id' => $entity->getId())));
        }

        return $this->render('IctdataBundle:D_parc_abonne:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a D_parc_abonne entity.
     *
     * @param D_parc_abonne $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(D_parc_abonne $entity)
    {
        $form = $this->createForm(new D_parc_abonneType(), $entity, array(
            'action' => $this->generateUrl('d_parc_abonne_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new D_parc_abonne entity.
     *
     */
    public function newAction()
    {
        $entity = new D_parc_abonne();
        $form   = $this->createCreateForm($entity);

        return $this->render('IctdataBundle:D_parc_abonne:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a D_parc_abonne entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IctdataBundle:D_parc_abonne')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find D_parc_abonne entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IctdataBundle:D_parc_abonne:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing D_parc_abonne entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IctdataBundle:D_parc_abonne')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find D_parc_abonne entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IctdataBundle:D_parc_abonne:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a D_parc_abonne entity.
    *
    * @param D_parc_abonne $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(D_parc_abonne $entity)
    {
        $form = $this->createForm(new D_parc_abonneType(), $entity, array(
            'action' => $this->generateUrl('d_parc_abonne_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing D_parc_abonne entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IctdataBundle:D_parc_abonne')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find D_parc_abonne entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('d_parc_abonne_edit', array('id' => $id)));
        }

        return $this->render('IctdataBundle:D_parc_abonne:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a D_parc_abonne entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('IctdataBundle:D_parc_abonne')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find D_parc_abonne entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('d_parc_abonne'));
    }

    /**
     * Creates a form to delete a D_parc_abonne entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('d_parc_abonne_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
