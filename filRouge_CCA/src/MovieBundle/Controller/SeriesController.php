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
use MovieBundle\Entity\Series;
use MovieBundle\Form\SeriesType;
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
/**
 * Series controller.
 *
 * @Route("/series")
 */
class SeriesController extends Controller
{
    /**
     * Lists all Series entities.
     *
     * @Route("/", name="series_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
<<<<<<< HEAD

        $series = $em->getRepository('MovieBundle:Series')->findAll();

=======
        $series = $em->getRepository('MovieBundle:Series')->findAll();
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('series/index.html.twig', array(
            'series' => $series,
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Creates a new Series entity.
     *
     * @Route("/new", name="series_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $series = new Series();
        $form = $this->createForm('MovieBundle\Form\SeriesType', $series);
        $form->handleRequest($request);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($series);
            $em->flush();
<<<<<<< HEAD

            return $this->redirectToRoute('series_show', array('id' => $series->getId()));
        }

=======
            return $this->redirectToRoute('series_show', array('id' => $series->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('series/new.html.twig', array(
            'series' => $series,
            'form' => $form->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Finds and displays a Series entity.
     *
     * @Route("/{id}", name="series_show")
     * @Method("GET")
     */
    public function showAction(Series $series)
    {
        $deleteForm = $this->createDeleteForm($series);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('series/show.html.twig', array(
            'series' => $series,
            'delete_form' => $deleteForm->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Displays a form to edit an existing Series entity.
     *
     * @Route("/{id}/edit", name="series_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Series $series)
    {
        $deleteForm = $this->createDeleteForm($series);
        $editForm = $this->createForm('MovieBundle\Form\SeriesType', $series);
        $editForm->handleRequest($request);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($series);
            $em->flush();
<<<<<<< HEAD

            return $this->redirectToRoute('series_edit', array('id' => $series->getId()));
        }

=======
            return $this->redirectToRoute('series_edit', array('id' => $series->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        return $this->render('series/edit.html.twig', array(
            'series' => $series,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Deletes a Series entity.
     *
     * @Route("/{id}", name="series_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Series $series)
    {
        $form = $this->createDeleteForm($series);
        $form->handleRequest($request);
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($series);
            $em->flush();
        }
<<<<<<< HEAD

        return $this->redirectToRoute('series_index');
    }

=======
        return $this->redirectToRoute('series_index');
    }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * Creates a form to delete a Series entity.
     *
     * @param Series $series The Series entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Series $series)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('series_delete', array('id' => $series->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
    /**
     * find all series.
     *
     * @Route("/findall", name="series_findall")
     * @Method("GET")
     */
    public function findAllAction(){
    $em = $this->getDoctrine()->getManager();
    $query = $em->createQuery('SELECT p'
            . ' FROM MovieBundle:Series p');
    
    $series = $query->getResult();
    
    return $this->render('series/index.html.twig', array(
            'series' => $series,
            ));
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
