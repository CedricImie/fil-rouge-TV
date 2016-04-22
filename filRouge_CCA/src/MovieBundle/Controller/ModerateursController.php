<?php

namespace MovieBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MovieBundle\Entity\Moderateurs;
use MovieBundle\Form\ModerateursType;

/**
 * Moderateurs controller.
 *
 * @Route("/moderateurs")
 */
class ModerateursController extends Controller
{
    /**
     * Lists all Moderateurs entities.
     *
     * @Route("/", name="moderateurs_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $moderateurs = $em->getRepository('MovieBundle:Moderateurs')->findAll();

        return $this->render('moderateurs/index.html.twig', array(
            'moderateurs' => $moderateurs,
        ));
    }

    /**
     * Creates a new Moderateurs entity.
     *
     * @Route("/new", name="moderateurs_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $moderateur = new Moderateurs();
        $form = $this->createForm('MovieBundle\Form\ModerateursType', $moderateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($moderateur);
            $em->flush();

            return $this->redirectToRoute('moderateurs_show', array('id' => $moderateur->getId()));
        }

        return $this->render('moderateurs/new.html.twig', array(
            'moderateur' => $moderateur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Moderateurs entity.
     *
     * @Route("/{id}", name="moderateurs_show")
     * @Method("GET")
     */
    public function showAction(Moderateurs $moderateur)
    {
        $deleteForm = $this->createDeleteForm($moderateur);

        return $this->render('moderateurs/show.html.twig', array(
            'moderateur' => $moderateur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Moderateurs entity.
     *
     * @Route("/{id}/edit", name="moderateurs_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Moderateurs $moderateur)
    {
        $deleteForm = $this->createDeleteForm($moderateur);
        $editForm = $this->createForm('MovieBundle\Form\ModerateursType', $moderateur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($moderateur);
            $em->flush();

            return $this->redirectToRoute('moderateurs_edit', array('id' => $moderateur->getId()));
        }

        return $this->render('moderateurs/edit.html.twig', array(
            'moderateur' => $moderateur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Moderateurs entity.
     *
     * @Route("/{id}", name="moderateurs_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Moderateurs $moderateur)
    {
        $form = $this->createDeleteForm($moderateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($moderateur);
            $em->flush();
        }

        return $this->redirectToRoute('moderateurs_index');
    }

    /**
     * Creates a form to delete a Moderateurs entity.
     *
     * @param Moderateurs $moderateur The Moderateurs entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Moderateurs $moderateur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('moderateurs_delete', array('id' => $moderateur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
