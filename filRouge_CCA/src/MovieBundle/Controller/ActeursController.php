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
use MovieBundle\Entity\Acteurs;
use MovieBundle\Form\ActeursType;
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
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
<<<<<<< HEAD

        $acteurs = $em->getRepository('MovieBundle:Acteurs')->findAll();

=======
        $acteurs = $em->getRepository('MovieBundle:Acteurs')->findAll();
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('acteurs/index.html.twig', array(
            'acteurs' => $acteurs,
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
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
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acteur);
            $em->flush();
<<<<<<< HEAD

            return $this->redirectToRoute('acteurs_show', array('id' => $acteur->getId()));
        }

=======
            return $this->redirectToRoute('acteurs_show', array('id' => $acteur->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('acteurs/new.html.twig', array(
            'acteur' => $acteur,
            'form' => $form->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Finds and displays a Acteurs entity.
     *
     * @Route("/{id}", name="acteurs_show")
     * @Method("GET")
     */
    public function showAction(Acteurs $acteur)
    {
        $deleteForm = $this->createDeleteForm($acteur);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('acteurs/show.html.twig', array(
            'acteur' => $acteur,
            'delete_form' => $deleteForm->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
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
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acteur);
            $em->flush();
<<<<<<< HEAD

            return $this->redirectToRoute('acteurs_edit', array('id' => $acteur->getId()));
        }

=======
            return $this->redirectToRoute('acteurs_edit', array('id' => $acteur->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('acteurs/edit.html.twig', array(
            'acteur' => $acteur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
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
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($acteur);
            $em->flush();
        }
<<<<<<< HEAD

        return $this->redirectToRoute('acteurs_index');
    }

=======
        return $this->redirectToRoute('acteurs_index');
    }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
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
<<<<<<< HEAD
}
=======
}
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
