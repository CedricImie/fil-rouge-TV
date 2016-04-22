<?php
<<<<<<< HEAD
<<<<<<< HEAD

namespace MovieBundle\Controller;

=======
namespace MovieBundle\Controller;
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

namespace MovieBundle\Controller;

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MovieBundle\Entity\Administrateurs;
use MovieBundle\Form\AdministrateursType;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
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
<<<<<<< HEAD

        $administrateurs = $em->getRepository('MovieBundle:Administrateurs')->findAll();

=======
        $administrateurs = $em->getRepository('MovieBundle:Administrateurs')->findAll();
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

        $administrateurs = $em->getRepository('MovieBundle:Administrateurs')->findAll();

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        return $this->render('administrateurs/index.html.twig', array(
            'administrateurs' => $administrateurs,
        ));
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
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
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($administrateur);
            $em->flush();
<<<<<<< HEAD
<<<<<<< HEAD

            return $this->redirectToRoute('administrateurs_show', array('id' => $administrateur->getId()));
        }

=======
            return $this->redirectToRoute('administrateurs_show', array('id' => $administrateur->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

            return $this->redirectToRoute('administrateurs_show', array('id' => $administrateur->getId()));
        }

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        return $this->render('administrateurs/new.html.twig', array(
            'administrateur' => $administrateur,
            'form' => $form->createView(),
        ));
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
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
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        return $this->render('administrateurs/show.html.twig', array(
            'administrateur' => $administrateur,
            'delete_form' => $deleteForm->createView(),
        ));
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
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
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($administrateur);
            $em->flush();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63

            return $this->redirectToRoute('administrateurs_edit', array('id' => $administrateur->getId()));
        }

<<<<<<< HEAD
=======
            return $this->redirectToRoute('administrateurs_edit', array('id' => $administrateur->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======
>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        return $this->render('administrateurs/edit.html.twig', array(
            'administrateur' => $administrateur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
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
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($administrateur);
            $em->flush();
        }
<<<<<<< HEAD
<<<<<<< HEAD

        return $this->redirectToRoute('administrateurs_index');
    }

=======
        return $this->redirectToRoute('administrateurs_index');
    }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

        return $this->redirectToRoute('administrateurs_index');
    }

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
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
<<<<<<< HEAD
}
=======
}
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======
}
>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
