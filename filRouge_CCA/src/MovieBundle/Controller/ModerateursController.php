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
use MovieBundle\Entity\Moderateurs;
use MovieBundle\Form\ModerateursType;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
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
<<<<<<< HEAD
<<<<<<< HEAD

        $moderateurs = $em->getRepository('MovieBundle:Moderateurs')->findAll();

=======
        $moderateurs = $em->getRepository('MovieBundle:Moderateurs')->findAll();
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

        $moderateurs = $em->getRepository('MovieBundle:Moderateurs')->findAll();

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        return $this->render('moderateurs/index.html.twig', array(
            'moderateurs' => $moderateurs,
        ));
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($moderateur);
            $em->flush();
<<<<<<< HEAD
<<<<<<< HEAD

            return $this->redirectToRoute('moderateurs_show', array('id' => $moderateur->getId()));
        }

=======
            return $this->redirectToRoute('moderateurs_show', array('id' => $moderateur->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

            return $this->redirectToRoute('moderateurs_show', array('id' => $moderateur->getId()));
        }

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        return $this->render('moderateurs/new.html.twig', array(
            'moderateur' => $moderateur,
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
     * Finds and displays a Moderateurs entity.
     *
     * @Route("/{id}", name="moderateurs_show")
     * @Method("GET")
     */
    public function showAction(Moderateurs $moderateur)
    {
        $deleteForm = $this->createDeleteForm($moderateur);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        return $this->render('moderateurs/show.html.twig', array(
            'moderateur' => $moderateur,
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($moderateur);
            $em->flush();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63

            return $this->redirectToRoute('moderateurs_edit', array('id' => $moderateur->getId()));
        }

<<<<<<< HEAD
=======
            return $this->redirectToRoute('moderateurs_edit', array('id' => $moderateur->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======
>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        return $this->render('moderateurs/edit.html.twig', array(
            'moderateur' => $moderateur,
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
     * Deletes a Moderateurs entity.
     *
     * @Route("/{id}", name="moderateurs_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Moderateurs $moderateur)
    {
        $form = $this->createDeleteForm($moderateur);
        $form->handleRequest($request);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($moderateur);
            $em->flush();
        }
<<<<<<< HEAD
<<<<<<< HEAD

        return $this->redirectToRoute('moderateurs_index');
    }

=======
        return $this->redirectToRoute('moderateurs_index');
    }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

        return $this->redirectToRoute('moderateurs_index');
    }

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
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
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======
}
>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
