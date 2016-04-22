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
use MovieBundle\Entity\Scenaristes;
use MovieBundle\Form\ScenaristesType;
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
/**
 * Scenaristes controller.
 *
 * @Route("/scenaristes")
 */
class ScenaristesController extends Controller
{
    /**
     * Lists all Scenaristes entities.
     *
     * @Route("/", name="scenaristes_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
<<<<<<< HEAD

        $scenaristes = $em->getRepository('MovieBundle:Scenaristes')->findAll();

=======
        $scenaristes = $em->getRepository('MovieBundle:Scenaristes')->findAll();
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('scenaristes/index.html.twig', array(
            'scenaristes' => $scenaristes,
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Creates a new Scenaristes entity.
     *
     * @Route("/new", name="scenaristes_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $scenariste = new Scenaristes();
        $form = $this->createForm('MovieBundle\Form\ScenaristesType', $scenariste);
        $form->handleRequest($request);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($scenariste);
            $em->flush();
<<<<<<< HEAD

            return $this->redirectToRoute('scenaristes_show', array('id' => $scenariste->getId()));
        }

=======
            return $this->redirectToRoute('scenaristes_show', array('id' => $scenariste->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('scenaristes/new.html.twig', array(
            'scenariste' => $scenariste,
            'form' => $form->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Finds and displays a Scenaristes entity.
     *
     * @Route("/{id}", name="scenaristes_show")
     * @Method("GET")
     */
    public function showAction(Scenaristes $scenariste)
    {
        $deleteForm = $this->createDeleteForm($scenariste);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('scenaristes/show.html.twig', array(
            'scenariste' => $scenariste,
            'delete_form' => $deleteForm->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Displays a form to edit an existing Scenaristes entity.
     *
     * @Route("/{id}/edit", name="scenaristes_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Scenaristes $scenariste)
    {
        $deleteForm = $this->createDeleteForm($scenariste);
        $editForm = $this->createForm('MovieBundle\Form\ScenaristesType', $scenariste);
        $editForm->handleRequest($request);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($scenariste);
            $em->flush();
<<<<<<< HEAD

            return $this->redirectToRoute('scenaristes_edit', array('id' => $scenariste->getId()));
        }

=======
            return $this->redirectToRoute('scenaristes_edit', array('id' => $scenariste->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('scenaristes/edit.html.twig', array(
            'scenariste' => $scenariste,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Deletes a Scenaristes entity.
     *
     * @Route("/{id}", name="scenaristes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Scenaristes $scenariste)
    {
        $form = $this->createDeleteForm($scenariste);
        $form->handleRequest($request);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($scenariste);
            $em->flush();
        }
<<<<<<< HEAD

        return $this->redirectToRoute('scenaristes_index');
    }

=======
        return $this->redirectToRoute('scenaristes_index');
    }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Creates a form to delete a Scenaristes entity.
     *
     * @param Scenaristes $scenariste The Scenaristes entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Scenaristes $scenariste)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('scenaristes_delete', array('id' => $scenariste->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
