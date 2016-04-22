<?php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

namespace MovieBundle\Controller;

=======
namespace MovieBundle\Controller;
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

namespace MovieBundle\Controller;

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
=======

namespace MovieBundle\Controller;

>>>>>>> brancheAnthony
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MovieBundle\Entity\Series;
use MovieBundle\Form\SeriesType;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
=======

>>>>>>> brancheAnthony
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
<<<<<<< HEAD
<<<<<<< HEAD

        $series = $em->getRepository('MovieBundle:Series')->findAll();

=======
        $series = $em->getRepository('MovieBundle:Series')->findAll();
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

        $series = $em->getRepository('MovieBundle:Series')->findAll();

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
=======

        $series = $em->getRepository('MovieBundle:Series')->findAll();

>>>>>>> brancheAnthony
        return $this->render('series/index.html.twig', array(
            'series' => $series,
        ));
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
=======

>>>>>>> brancheAnthony
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
=======

>>>>>>> brancheAnthony
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($series);
            $em->flush();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

            return $this->redirectToRoute('series_show', array('id' => $series->getId()));
        }

=======
            return $this->redirectToRoute('series_show', array('id' => $series->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======
=======
>>>>>>> brancheAnthony

            return $this->redirectToRoute('series_show', array('id' => $series->getId()));
        }

<<<<<<< HEAD
>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
=======
>>>>>>> brancheAnthony
        return $this->render('series/new.html.twig', array(
            'series' => $series,
            'form' => $form->createView(),
        ));
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
=======

>>>>>>> brancheAnthony
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
=======

>>>>>>> brancheAnthony
        return $this->render('series/show.html.twig', array(
            'series' => $series,
            'delete_form' => $deleteForm->createView(),
        ));
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
=======

>>>>>>> brancheAnthony
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
=======

>>>>>>> brancheAnthony
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($series);
            $em->flush();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63

            return $this->redirectToRoute('series_edit', array('id' => $series->getId()));
        }

<<<<<<< HEAD
=======
            return $this->redirectToRoute('series_edit', array('id' => $series->getId()));
        }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======
>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
=======

            return $this->redirectToRoute('series_edit', array('id' => $series->getId()));
        }

>>>>>>> brancheAnthony
        return $this->render('series/edit.html.twig', array(
            'series' => $series,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
=======

>>>>>>> brancheAnthony
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
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======

>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
=======

>>>>>>> brancheAnthony
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($series);
            $em->flush();
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        return $this->redirectToRoute('series_index');
    }

=======
        return $this->redirectToRoute('series_index');
    }
>>>>>>> 90824d8da03badc808f50219515998bc0f429b82
=======
=======
>>>>>>> brancheAnthony

        return $this->redirectToRoute('series_index');
    }

<<<<<<< HEAD
>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
=======
>>>>>>> brancheAnthony
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
<<<<<<< HEAD
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
=======
}
>>>>>>> 9584d6057f286ae84d18ab88af1ad79f0970ee63
=======
}
>>>>>>> brancheAnthony
