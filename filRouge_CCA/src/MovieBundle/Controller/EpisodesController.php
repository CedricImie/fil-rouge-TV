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
use MovieBundle\Entity\Episodes;
use MovieBundle\Form\EpisodesType;
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
/**
 * Episodes controller.
 *
 * @Route("/episodes")
 */
class EpisodesController extends Controller
{
    /**
     * Lists all Episodes entities.
     *
     * @Route("/", name="episodes_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
<<<<<<< HEAD

        $episodes = $em->getRepository('MovieBundle:Episodes')->findAll();

=======
        $episodes = $em->getRepository('MovieBundle:Episodes')->findAll();
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('episodes/index.html.twig', array(
            'episodes' => $episodes,
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Creates a new Episodes entity.
     *
     * @Route("/new", name="episodes_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $episode = new Episodes();
        $form = $this->createForm('MovieBundle\Form\EpisodesType', $episode);
        $form->handleRequest($request);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($episode);
            $em->flush();
<<<<<<< HEAD

            return $this->redirectToRoute('episodes_show', array('id' => $episode->getId()));
        }

=======
            return $this->redirectToRoute('episodes_show', array('id' => $episode->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('episodes/new.html.twig', array(
            'episode' => $episode,
            'form' => $form->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Finds and displays a Episodes entity.
     *
     * @Route("/{id}", name="episodes_show")
     * @Method("GET")
     */
    public function showAction(Episodes $episode)
    {
        $deleteForm = $this->createDeleteForm($episode);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('episodes/show.html.twig', array(
            'episode' => $episode,
            'delete_form' => $deleteForm->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Displays a form to edit an existing Episodes entity.
     *
     * @Route("/{id}/edit", name="episodes_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Episodes $episode)
    {
        $deleteForm = $this->createDeleteForm($episode);
        $editForm = $this->createForm('MovieBundle\Form\EpisodesType', $episode);
        $editForm->handleRequest($request);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($episode);
            $em->flush();
<<<<<<< HEAD

            return $this->redirectToRoute('episodes_edit', array('id' => $episode->getId()));
        }

=======
            return $this->redirectToRoute('episodes_edit', array('id' => $episode->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('episodes/edit.html.twig', array(
            'episode' => $episode,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Deletes a Episodes entity.
     *
     * @Route("/{id}", name="episodes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Episodes $episode)
    {
        $form = $this->createDeleteForm($episode);
        $form->handleRequest($request);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($episode);
            $em->flush();
        }
<<<<<<< HEAD

        return $this->redirectToRoute('episodes_index');
    }

=======
        return $this->redirectToRoute('episodes_index');
    }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Creates a form to delete a Episodes entity.
     *
     * @param Episodes $episode The Episodes entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Episodes $episode)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('episodes_delete', array('id' => $episode->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
