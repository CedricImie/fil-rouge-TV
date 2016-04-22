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
use MovieBundle\Entity\Administrateurs;
use MovieBundle\Form\AdministrateursType;
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
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
<<<<<<< HEAD

        $administrateurs = $em->getRepository('MovieBundle:Administrateurs')->findAll();

=======
        $administrateurs = $em->getRepository('MovieBundle:Administrateurs')->findAll();
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('administrateurs/index.html.twig', array(
            'administrateurs' => $administrateurs,
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
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
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($administrateur);
            $em->flush();
<<<<<<< HEAD

            return $this->redirectToRoute('administrateurs_show', array('id' => $administrateur->getId()));
        }

=======
            return $this->redirectToRoute('administrateurs_show', array('id' => $administrateur->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('administrateurs/new.html.twig', array(
            'administrateur' => $administrateur,
            'form' => $form->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Finds and displays a Administrateurs entity.
     *
     * @Route("/{id}", name="administrateurs_show")
     * @Method("GET")
     */
    public function showAction(Administrateurs $administrateur)
    {
        $deleteForm = $this->createDeleteForm($administrateur);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('administrateurs/show.html.twig', array(
            'administrateur' => $administrateur,
            'delete_form' => $deleteForm->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
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
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($administrateur);
            $em->flush();
<<<<<<< HEAD

            return $this->redirectToRoute('administrateurs_edit', array('id' => $administrateur->getId()));
        }

=======
            return $this->redirectToRoute('administrateurs_edit', array('id' => $administrateur->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('administrateurs/edit.html.twig', array(
            'administrateur' => $administrateur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
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
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($administrateur);
            $em->flush();
        }
<<<<<<< HEAD

        return $this->redirectToRoute('administrateurs_index');
    }

=======
        return $this->redirectToRoute('administrateurs_index');
    }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
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
<<<<<<< HEAD
}
=======
}
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
