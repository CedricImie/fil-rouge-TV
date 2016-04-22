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
use MovieBundle\Entity\Realisateurs;
use MovieBundle\Form\RealisateursType;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
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
<<<<<<< HEAD
<<<<<<< HEAD

        $realisateurs = $em->getRepository('MovieBundle:Realisateurs')->findAll();

=======
        $realisateurs = $em->getRepository('MovieBundle:Realisateurs')->findAll();
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

        $realisateurs = $em->getRepository('MovieBundle:Realisateurs')->findAll();

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        return $this->render('realisateurs/index.html.twig', array(
            'realisateurs' => $realisateurs,
        ));
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($realisateur);
            $em->flush();
<<<<<<< HEAD
<<<<<<< HEAD

            return $this->redirectToRoute('realisateurs_show', array('id' => $realisateur->getId()));
        }

=======
            return $this->redirectToRoute('realisateurs_show', array('id' => $realisateur->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

            return $this->redirectToRoute('realisateurs_show', array('id' => $realisateur->getId()));
        }

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        return $this->render('realisateurs/new.html.twig', array(
            'realisateur' => $realisateur,
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
     * Finds and displays a Realisateurs entity.
     *
     * @Route("/{id}", name="realisateurs_show")
     * @Method("GET")
     */
    public function showAction(Realisateurs $realisateur)
    {
        $deleteForm = $this->createDeleteForm($realisateur);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        return $this->render('realisateurs/show.html.twig', array(
            'realisateur' => $realisateur,
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($realisateur);
            $em->flush();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63

            return $this->redirectToRoute('realisateurs_edit', array('id' => $realisateur->getId()));
        }

<<<<<<< HEAD
=======
            return $this->redirectToRoute('realisateurs_edit', array('id' => $realisateur->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======
>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        return $this->render('realisateurs/edit.html.twig', array(
            'realisateur' => $realisateur,
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
     * Deletes a Realisateurs entity.
     *
     * @Route("/{id}", name="realisateurs_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Realisateurs $realisateur)
    {
        $form = $this->createDeleteForm($realisateur);
        $form->handleRequest($request);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($realisateur);
            $em->flush();
        }
<<<<<<< HEAD
<<<<<<< HEAD

        return $this->redirectToRoute('realisateurs_index');
    }

=======
        return $this->redirectToRoute('realisateurs_index');
    }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

        return $this->redirectToRoute('realisateurs_index');
    }

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
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
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======
}
>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
