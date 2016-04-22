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
use MovieBundle\Entity\Commentaires;
use MovieBundle\Form\CommentairesType;
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
/**
 * Commentaires controller.
 *
 * @Route("/commentaires")
 */
class CommentairesController extends Controller
{
    /**
     * Lists all Commentaires entities.
     *
     * @Route("/", name="commentaires_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
<<<<<<< HEAD

        $commentaires = $em->getRepository('MovieBundle:Commentaires')->findAll();

=======
        $commentaires = $em->getRepository('MovieBundle:Commentaires')->findAll();
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('commentaires/index.html.twig', array(
            'commentaires' => $commentaires,
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Creates a new Commentaires entity.
     *
     * @Route("/new", name="commentaires_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $commentaire = new Commentaires();
        $form = $this->createForm('MovieBundle\Form\CommentairesType', $commentaire);
        $form->handleRequest($request);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();
<<<<<<< HEAD

            return $this->redirectToRoute('commentaires_show', array('id' => $commentaire->getId()));
        }

=======
            return $this->redirectToRoute('commentaires_show', array('id' => $commentaire->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('commentaires/new.html.twig', array(
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Finds and displays a Commentaires entity.
     *
     * @Route("/{id}", name="commentaires_show")
     * @Method("GET")
     */
    public function showAction(Commentaires $commentaire)
    {
        $deleteForm = $this->createDeleteForm($commentaire);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('commentaires/show.html.twig', array(
            'commentaire' => $commentaire,
            'delete_form' => $deleteForm->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Displays a form to edit an existing Commentaires entity.
     *
     * @Route("/{id}/edit", name="commentaires_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Commentaires $commentaire)
    {
        $deleteForm = $this->createDeleteForm($commentaire);
        $editForm = $this->createForm('MovieBundle\Form\CommentairesType', $commentaire);
        $editForm->handleRequest($request);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();
<<<<<<< HEAD

            return $this->redirectToRoute('commentaires_edit', array('id' => $commentaire->getId()));
        }

=======
            return $this->redirectToRoute('commentaires_edit', array('id' => $commentaire->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('commentaires/edit.html.twig', array(
            'commentaire' => $commentaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Deletes a Commentaires entity.
     *
     * @Route("/{id}", name="commentaires_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Commentaires $commentaire)
    {
        $form = $this->createDeleteForm($commentaire);
        $form->handleRequest($request);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($commentaire);
            $em->flush();
        }
<<<<<<< HEAD

        return $this->redirectToRoute('commentaires_index');
    }

=======
        return $this->redirectToRoute('commentaires_index');
    }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Creates a form to delete a Commentaires entity.
     *
     * @param Commentaires $commentaire The Commentaires entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Commentaires $commentaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commentaires_delete', array('id' => $commentaire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
