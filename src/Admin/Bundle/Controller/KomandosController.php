<?php

namespace Admin\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Duomenys\CoreBundle\Entity\Komandos;
use Duomenys\CoreBundle\Form\KomandosType;

/**
 * Komandos controller.
 *
 */
class KomandosController extends Controller
{

    /**
     * Lists all Komandos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DuomenysCoreBundle:Komandos')->findAll();

        return $this->render('DuomenysCoreBundle:Komandos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Komandos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Komandos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('komandos_show', array('id' => $entity->getId())));
        }

        return $this->render('DuomenysCoreBundle:Komandos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Komandos entity.
    *
    * @param Komandos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Komandos $entity)
    {
        $form = $this->createForm(new KomandosType(), $entity, array(
            'action' => $this->generateUrl('komandos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Komandos entity.
     *
     */
    public function newAction()
    {
        $entity = new Komandos();
        $form   = $this->createCreateForm($entity);

        return $this->render('DuomenysCoreBundle:Komandos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Komandos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DuomenysCoreBundle:Komandos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Komandos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DuomenysCoreBundle:Komandos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Komandos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DuomenysCoreBundle:Komandos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Komandos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DuomenysCoreBundle:Komandos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Komandos entity.
    *
    * @param Komandos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Komandos $entity)
    {
        $form = $this->createForm(new KomandosType(), $entity, array(
            'action' => $this->generateUrl('komandos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Komandos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DuomenysCoreBundle:Komandos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Komandos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('komandos_edit', array('id' => $id)));
        }

        return $this->render('DuomenysCoreBundle:Komandos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Komandos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DuomenysCoreBundle:Komandos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Komandos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('komandos'));
    }

    /**
     * Creates a form to delete a Komandos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('komandos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
