<?php

namespace EcoleBundle\Controller;

use EcoleBundle\Entity\Intervenant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Intervenant controller.
 *
 */
class IntervenantController extends Controller
{
    /**
     * Lists all intervenant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $intervenants = $em->getRepository('EcoleBundle:Intervenant')->findAll();

        return $this->render('intervenant/index.html.twig', array(
            'intervenants' => $intervenants,
        ));
    }

    /**
     * Creates a new intervenant entity.
     *
     */
    public function newAction(Request $request)
    {
        $intervenant = new Intervenant();
        $form = $this->createForm('EcoleBundle\Form\IntervenantType', $intervenant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($intervenant);
            $em->flush();

            return $this->redirectToRoute('intervenant_show', array('id' => $intervenant->getId()));
        }

        return $this->render('intervenant/new.html.twig', array(
            'intervenant' => $intervenant,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a intervenant entity.
     *
     */
    public function showAction(Intervenant $intervenant)
    {
        $deleteForm = $this->createDeleteForm($intervenant);

        return $this->render('intervenant/show.html.twig', array(
            'intervenant' => $intervenant,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing intervenant entity.
     *
     */
    public function editAction(Request $request, Intervenant $intervenant)
    {
        $deleteForm = $this->createDeleteForm($intervenant);
        $editForm = $this->createForm('EcoleBundle\Form\IntervenantType', $intervenant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('intervenant_edit', array('id' => $intervenant->getId()));
        }

        return $this->render('intervenant/edit.html.twig', array(
            'intervenant' => $intervenant,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a intervenant entity.
     *
     */
    public function deleteAction(Request $request, Intervenant $intervenant)
    {
        $form = $this->createDeleteForm($intervenant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($intervenant);
            $em->flush();
        }

        return $this->redirectToRoute('intervenant_index');
    }

    /**
     * Creates a form to delete a intervenant entity.
     *
     * @param Intervenant $intervenant The intervenant entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Intervenant $intervenant)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('intervenant_delete', array('id' => $intervenant->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
