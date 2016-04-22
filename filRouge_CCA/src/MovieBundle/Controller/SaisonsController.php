<?php
<<<<<<< HEAD

namespace MovieBundle\Controller;

=======
namespace MovieBundle\Controller;
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MovieBundle\Entity\Saisons;
use MovieBundle\Form\SaisonsType;
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
/**
 * Saisons controller.
 *
 * @Route("/saisons")
 */
class SaisonsController extends Controller
{
    /**
     * Lists all Saisons entities.
     *
     * @Route("/", name="saisons_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
<<<<<<< HEAD

        $saisons = $em->getRepository('MovieBundle:Saisons')->findAll();

=======
        $saisons = $em->getRepository('MovieBundle:Saisons')->findAll();
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('saisons/index.html.twig', array(
            'saisons' => $saisons,
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Creates a new Saisons entity.
     *
     * @Route("/new", name="saisons_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $saison = new Saisons();
        $form = $this->createForm('MovieBundle\Form\SaisonsType', $saison);
        $form->handleRequest($request);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($saison);
            $em->flush();
<<<<<<< HEAD

            return $this->redirectToRoute('saisons_show', array('id' => $saison->getId()));
        }

=======
            return $this->redirectToRoute('saisons_show', array('id' => $saison->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('saisons/new.html.twig', array(
            'saison' => $saison,
            'form' => $form->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Finds and displays a Saisons entity.
     *
     * @Route("/{id}", name="saisons_show")
     * @Method("GET")
     */
    public function showAction(Saisons $saison)
    {
        $deleteForm = $this->createDeleteForm($saison);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('saisons/show.html.twig', array(
            'saison' => $saison,
            'delete_form' => $deleteForm->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Displays a form to edit an existing Saisons entity.
     *
     * @Route("/{id}/edit", name="saisons_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Saisons $saison)
    {
        $deleteForm = $this->createDeleteForm($saison);
        $editForm = $this->createForm('MovieBundle\Form\SaisonsType', $saison);
        $editForm->handleRequest($request);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($saison);
            $em->flush();
<<<<<<< HEAD

            return $this->redirectToRoute('saisons_edit', array('id' => $saison->getId()));
        }

=======
            return $this->redirectToRoute('saisons_edit', array('id' => $saison->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('saisons/edit.html.twig', array(
            'saison' => $saison,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Deletes a Saisons entity.
     *
     * @Route("/{id}", name="saisons_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Saisons $saison)
    {
        $form = $this->createDeleteForm($saison);
        $form->handleRequest($request);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($saison);
            $em->flush();
        }
<<<<<<< HEAD

        return $this->redirectToRoute('saisons_index');
    }

=======
        return $this->redirectToRoute('saisons_index');
    }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Creates a form to delete a Saisons entity.
     *
     * @param Saisons $saison The Saisons entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Saisons $saison)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('saisons_delete', array('id' => $saison->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
