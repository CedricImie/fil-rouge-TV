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
use MovieBundle\Entity\Saisons;
use MovieBundle\Form\SaisonsType;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
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
<<<<<<< HEAD

        $saisons = $em->getRepository('MovieBundle:Saisons')->findAll();

=======
        $saisons = $em->getRepository('MovieBundle:Saisons')->findAll();
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

        $saisons = $em->getRepository('MovieBundle:Saisons')->findAll();

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        return $this->render('saisons/index.html.twig', array(
            'saisons' => $saisons,
        ));
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
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
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($saison);
            $em->flush();
<<<<<<< HEAD
<<<<<<< HEAD

            return $this->redirectToRoute('saisons_show', array('id' => $saison->getId()));
        }

=======
            return $this->redirectToRoute('saisons_show', array('id' => $saison->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

            return $this->redirectToRoute('saisons_show', array('id' => $saison->getId()));
        }

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        return $this->render('saisons/new.html.twig', array(
            'saison' => $saison,
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
     * Finds and displays a Saisons entity.
     *
     * @Route("/{id}", name="saisons_show")
     * @Method("GET")
     */
    public function showAction(Saisons $saison)
    {
        $deleteForm = $this->createDeleteForm($saison);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        return $this->render('saisons/show.html.twig', array(
            'saison' => $saison,
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
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($saison);
            $em->flush();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63

            return $this->redirectToRoute('saisons_edit', array('id' => $saison->getId()));
        }

<<<<<<< HEAD
=======
            return $this->redirectToRoute('saisons_edit', array('id' => $saison->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======
>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        return $this->render('saisons/edit.html.twig', array(
            'saison' => $saison,
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
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($saison);
            $em->flush();
        }
<<<<<<< HEAD
<<<<<<< HEAD

        return $this->redirectToRoute('saisons_index');
    }

=======
        return $this->redirectToRoute('saisons_index');
    }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

        return $this->redirectToRoute('saisons_index');
    }

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
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
<<<<<<< HEAD
}
=======
}
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======
}
>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
