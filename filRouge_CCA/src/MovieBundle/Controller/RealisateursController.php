<?php
namespace MovieBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MovieBundle\Entity\Realisateurs;
use MovieBundle\Form\RealisateursType;
/**
 * Realisateurs controller.
 *
 * @Route("/realisateurs")
 */
class RealisateursController extends Controller
{
    /**
     * Lists all Realisateurs entities.
     *
     * @Route("/", name="realisateurs_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $realisateurs = $em->getRepository('MovieBundle:Realisateurs')->findAll();
        return $this->render('realisateurs/index.html.twig', array(
            'realisateurs' => $realisateurs,
        ));
    }
    /**
     * Creates a new Realisateurs entity.
     *
     * @Route("/new", name="realisateurs_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $realisateur = new Realisateurs();
        $form = $this->createForm('MovieBundle\Form\RealisateursType', $realisateur);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($realisateur);
            $em->flush();
            return $this->redirectToRoute('realisateurs_show', array('id' => $realisateur->getId()));
        }
        return $this->render('realisateurs/new.html.twig', array(
            'realisateur' => $realisateur,
            'form' => $form->createView(),
        ));
    }
    /**
     * Finds and displays a Realisateurs entity.
     *
     * @Route("/{id}", name="realisateurs_show")
     * @Method("GET")
     */
    public function showAction(Realisateurs $realisateur)
    {
        $deleteForm = $this->createDeleteForm($realisateur);
        return $this->render('realisateurs/show.html.twig', array(
            'realisateur' => $realisateur,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Displays a form to edit an existing Realisateurs entity.
     *
     * @Route("/{id}/edit", name="realisateurs_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Realisateurs $realisateur)
    {
        $deleteForm = $this->createDeleteForm($realisateur);
        $editForm = $this->createForm('MovieBundle\Form\RealisateursType', $realisateur);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($realisateur);
            $em->flush();
            return $this->redirectToRoute('realisateurs_edit', array('id' => $realisateur->getId()));
        }
        return $this->render('realisateurs/edit.html.twig', array(
            'realisateur' => $realisateur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Realisateurs entity.
     *
     * @Route("/{id}", name="realisateurs_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Realisateurs $realisateur)
    {
        $form = $this->createDeleteForm($realisateur);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($realisateur);
            $em->flush();
        }
        return $this->redirectToRoute('realisateurs_index');
    }
    /**
     * Creates a form to delete a Realisateurs entity.
     *
     * @param Realisateurs $realisateur The Realisateurs entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Realisateurs $realisateur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('realisateurs_delete', array('id' => $realisateur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}