<?php

namespace MovieBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MovieBundle\Entity\Acteurs;
use MovieBundle\Form\ActeursType;

/**
 * Acteurs controller.
 *
 * @Route("/acteurs")
 */
class ActeursController extends Controller
{
    /**
     * Lists all Acteurs entities.
     *
     * @Route("/", name="acteurs_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $acteurs = $em->getRepository('MovieBundle:Acteurs')->findAll();

        return $this->render('acteurs/index.html.twig', array(
            'acteurs' => $acteurs,
        ));
    }

    /**
     * Creates a new Acteurs entity.
     *
     * @Route("/new", name="acteurs_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $acteur = new Acteurs();
        $form = $this->createForm('MovieBundle\Form\ActeursType', $acteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acteur);
            $em->flush();

            return $this->redirectToRoute('acteurs_show', array('id' => $acteur->getId()));
        }

        return $this->render('acteurs/new.html.twig', array(
            'acteur' => $acteur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Acteurs entity.
     *
     * @Route("/{id}", name="acteurs_show")
     * @Method("GET")
     */
    public function showAction(Acteurs $acteur)
    {
        $deleteForm = $this->createDeleteForm($acteur);

        return $this->render('acteurs/show.html.twig', array(
            'acteur' => $acteur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Acteurs entity.
     *
     * @Route("/{id}/edit", name="acteurs_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Acteurs $acteur)
    {
        $deleteForm = $this->createDeleteForm($acteur);
        $editForm = $this->createForm('MovieBundle\Form\ActeursType', $acteur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acteur);
            $em->flush();

            return $this->redirectToRoute('acteurs_edit', array('id' => $acteur->getId()));
        }

        return $this->render('acteurs/edit.html.twig', array(
            'acteur' => $acteur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Acteurs entity.
     *
     * @Route("/{id}", name="acteurs_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Acteurs $acteur)
    {
        $form = $this->createDeleteForm($acteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($acteur);
            $em->flush();
        }

        return $this->redirectToRoute('acteurs_index');
    }

    /**
     * Creates a form to delete a Acteurs entity.
     *
     * @param Acteurs $acteur The Acteurs entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Acteurs $acteur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('acteurs_delete', array('id' => $acteur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
