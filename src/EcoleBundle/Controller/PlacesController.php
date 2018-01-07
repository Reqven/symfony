<?php

namespace EcoleBundle\Controller;

use EcoleBundle\Entity\Places;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Place controller.
 *
 */
class PlacesController extends Controller
{
    /**
     * Lists all place entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $places = $em->getRepository('EcoleBundle:Places')->findAll();

        return $this->render('places/index.html.twig', array(
            'places' => $places,
        ));
    }

    /**
     * Creates a new place entity.
     *
     */
    public function newAction(Request $request)
    {
        $place = new Places();
        $form = $this->createForm('EcoleBundle\Form\PlacesType', $place);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($place);
            $em->flush();

            return $this->redirectToRoute('places_show', array('id' => $place->getId()));
        }

        return $this->render('places/new.html.twig', array(
            'place' => $place,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a place entity.
     *
     */
    public function showAction(Places $place)
    {
        $deleteForm = $this->createDeleteForm($place);

        return $this->render('places/show.html.twig', array(
            'place' => $place,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing place entity.
     *
     */
    public function editAction(Request $request, Places $place)
    {
        $deleteForm = $this->createDeleteForm($place);
        $editForm = $this->createForm('EcoleBundle\Form\PlacesType', $place);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('places_edit', array('id' => $place->getId()));
        }

        return $this->render('places/edit.html.twig', array(
            'place' => $place,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a place entity.
     *
     */
    public function deleteAction(Request $request, Places $place)
    {
        $form = $this->createDeleteForm($place);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($place);
            $em->flush();
        }

        return $this->redirectToRoute('places_index');
    }

    /**
     * Creates a form to delete a place entity.
     *
     * @param Places $place The place entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Places $place)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('places_delete', array('id' => $place->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
