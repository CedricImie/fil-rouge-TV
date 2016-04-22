<?php
namespace MovieBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MovieBundle\Entity\Administrateurs;
use MovieBundle\Form\AdministrateursType;
/**
 * Administrateurs controller.
 *
 * @Route("/administrateurs")
 */
class AdministrateursController extends Controller
{
    /**
     * Lists all Administrateurs entities.
     *
     * @Route("/", name="administrateurs_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $administrateurs = $em->getRepository('MovieBundle:Administrateurs')->findAll();
        return $this->render('administrateurs/index.html.twig', array(
            'administrateurs' => $administrateurs,
        ));
    }
    /**
     * Creates a new Administrateurs entity.
     *
     * @Route("/new", name="administrateurs_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $administrateur = new Administrateurs();
        $form = $this->createForm('MovieBundle\Form\AdministrateursType', $administrateur);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($administrateur);
            $em->flush();
            return $this->redirectToRoute('administrateurs_show', array('id' => $administrateur->getId()));
        }
        return $this->render('administrateurs/new.html.twig', array(
            'administrateur' => $administrateur,
            'form' => $form->createView(),
        ));
    }
    /**
     * Finds and displays a Administrateurs entity.
     *
     * @Route("/{id}", name="administrateurs_show")
     * @Method("GET")
     */
    public function showAction(Administrateurs $administrateur)
    {
        $deleteForm = $this->createDeleteForm($administrateur);
        return $this->render('administrateurs/show.html.twig', array(
            'administrateur' => $administrateur,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Displays a form to edit an existing Administrateurs entity.
     *
     * @Route("/{id}/edit", name="administrateurs_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Administrateurs $administrateur)
    {
        $deleteForm = $this->createDeleteForm($administrateur);
        $editForm = $this->createForm('MovieBundle\Form\AdministrateursType', $administrateur);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($administrateur);
            $em->flush();
            return $this->redirectToRoute('administrateurs_edit', array('id' => $administrateur->getId()));
        }
        return $this->render('administrateurs/edit.html.twig', array(
            'administrateur' => $administrateur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Administrateurs entity.
     *
     * @Route("/{id}", name="administrateurs_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Administrateurs $administrateur)
    {
        $form = $this->createDeleteForm($administrateur);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($administrateur);
            $em->flush();
        }
        return $this->redirectToRoute('administrateurs_index');
    }
    /**
     * Creates a form to delete a Administrateurs entity.
     *
     * @param Administrateurs $administrateur The Administrateurs entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Administrateurs $administrateur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('administrateurs_delete', array('id' => $administrateur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}