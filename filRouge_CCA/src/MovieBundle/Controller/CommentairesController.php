<?php

namespace MovieBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MovieBundle\Entity\Commentaires;
use MovieBundle\Form\CommentairesType;

/**
 * Commentaires controller.
 *
 * @Route("/commentaires")
 */
class CommentairesController extends Controller
{
    /**
     * Lists all Commentaires entities.
     *
     * @Route("/", name="commentaires_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $commentaires = $em->getRepository('MovieBundle:Commentaires')->findAll();

        return $this->render('commentaires/index.html.twig', array(
            'commentaires' => $commentaires,
        ));
    }

    /**
     * Creates a new Commentaires entity.
     *
     * @Route("/new", name="commentaires_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $commentaire = new Commentaires();
        $form = $this->createForm('MovieBundle\Form\CommentairesType', $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();

            return $this->redirectToRoute('commentaires_show', array('id' => $commentaire->getId()));
        }

        return $this->render('commentaires/new.html.twig', array(
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Commentaires entity.
     *
     * @Route("/{id}", name="commentaires_show")
     * @Method("GET")
     */
    public function showAction(Commentaires $commentaire)
    {
        $deleteForm = $this->createDeleteForm($commentaire);

        return $this->render('commentaires/show.html.twig', array(
            'commentaire' => $commentaire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Commentaires entity.
     *
     * @Route("/{id}/edit", name="commentaires_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Commentaires $commentaire)
    {
        $deleteForm = $this->createDeleteForm($commentaire);
        $editForm = $this->createForm('MovieBundle\Form\CommentairesType', $commentaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();

            return $this->redirectToRoute('commentaires_edit', array('id' => $commentaire->getId()));
        }

        return $this->render('commentaires/edit.html.twig', array(
            'commentaire' => $commentaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Commentaires entity.
     *
     * @Route("/{id}", name="commentaires_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Commentaires $commentaire)
    {
        $form = $this->createDeleteForm($commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($commentaire);
            $em->flush();
        }

        return $this->redirectToRoute('commentaires_index');
    }

    /**
     * Creates a form to delete a Commentaires entity.
     *
     * @param Commentaires $commentaire The Commentaires entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Commentaires $commentaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commentaires_delete', array('id' => $commentaire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
