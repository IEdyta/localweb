<?php

namespace Admin\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Duomenys\CoreBundle\Entity\Varzybos;
use Duomenys\CoreBundle\Form\VarzybosType;

/**
 * Varzybos controller.
 *
 */
class VarzybosController extends Controller
{

    /**
     * Lists all Varzybos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DuomenysCoreBundle:Varzybos')->findAll();

        return $this->render('DuomenysCoreBundle:Varzybos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Varzybos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Varzybos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('varzybos_show', array('id' => $entity->getId())));
        }

        return $this->render('DuomenysCoreBundle:Varzybos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Varzybos entity.
    *
    * @param Varzybos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Varzybos $entity)
    {
        $form = $this->createForm(new VarzybosType(), $entity, array(
            'action' => $this->generateUrl('varzybos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Varzybos entity.
     *
     */
    public function newAction()
    {
        $entity = new Varzybos();
        $form   = $this->createCreateForm($entity);

        return $this->render('DuomenysCoreBundle:Varzybos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Varzybos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DuomenysCoreBundle:Varzybos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Varzybos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DuomenysCoreBundle:Varzybos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Varzybos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DuomenysCoreBundle:Varzybos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Varzybos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DuomenysCoreBundle:Varzybos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Varzybos entity.
    *
    * @param Varzybos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Varzybos $entity)
    {
        $form = $this->createForm(new VarzybosType(), $entity, array(
            'action' => $this->generateUrl('varzybos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Varzybos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DuomenysCoreBundle:Varzybos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Varzybos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('varzybos_edit', array('id' => $id)));
        }

        return $this->render('DuomenysCoreBundle:Varzybos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Varzybos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DuomenysCoreBundle:Varzybos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Varzybos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('varzybos'));
    }

    /**
     * Creates a form to delete a Varzybos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('varzybos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
