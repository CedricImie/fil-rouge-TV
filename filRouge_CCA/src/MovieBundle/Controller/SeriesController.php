<?php

namespace MovieBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MovieBundle\Entity\Series;
use MovieBundle\Form\SeriesType;

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

        $usr = $this->get('security.token_storage')->getToken()->getUser(); // On récupère les infos de l'utilisateur courant
        if($usr != "anon.")
        {
            if($usr->hasRole("ROLE_SUPER_ADMIN") or $usr->hasRole("ROLE_ADMIN") or $usr->hasRole("ROLE_MODERATEUR"))
            {
                $em = $this->getDoctrine()->getManager();

                $series = $em->getRepository('MovieBundle:Series')->findAll();
        
                return $this->render('series/index.html.twig', array(
                    'series' => $series,
                ));
            }
            else
            {
                $em = $this->getDoctrine()->getManager();

                $series = $em->getRepository('MovieBundle:Series')->getAll();

                return $this->render('series/index.html.twig', array(
                    'series' => $series,
                ));
            }
        }    
        else
        {
            $em = $this->getDoctrine()->getManager();

        $series = $em->getRepository('MovieBundle:Series')->getAll();

        return $this->render('series/index.html.twig', array(
            'series' => $series,
        )); 
        }    
    }

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
        $series->setValidation(0);
        $series->setDateAjout(new \DateTime("now"));

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($series);
            $em->flush();

            return $this->redirectToRoute('series_show', array('nomSerie' => $series->getNomSerie()));
        }

        return $this->render('series/new.html.twig', array(
            'series' => $series,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Series entity.
     *
     * @Route("/{nomSerie}", name="series_show")
     * @Method("GET")
     */
    public function showAction(Series $series)
    {       
        $em = $this->getDoctrine()->getManager();
        $noms=$em->getRepository('MovieBundle:Series')->findName($series->getNomSerie());
        $taille = sizeof($noms);
        $oldSeries = $em->getRepository('MovieBundle:Series')->selectLast($series->getNomSerie());
        $oldSeriesObject = new Series();
         foreach ($oldSeries as $oldSerie) 
             {
                $oldSeriesObject->setNomSerie($oldSerie->getNomSerie());
                $oldSeriesObject->setPosterSerie($oldSerie->getPosterSerie());
                $oldSeriesObject->setGenreSerie($oldSerie->getGenreSerie());
                $oldSeriesObject->setDateAjout($oldSerie->getDateAjout());
                $oldSeriesObject->setResumeSerie($oldSerie->getResumeSerie());
                $oldSeriesObject->setDateCreationSerie($oldSerie->getDateCreationSerie());
                $oldSeriesObject->setCastingSerie($oldSerie->getCastingSerie());
                $oldSeriesObject->setNoteMoyenneSerie($oldSerie->getNoteMoyenneSerie());
                $oldSeriesObject->setNbAbonneSerie($oldSerie->getNbAbonneSerie());
                $oldSeriesObject->setDiffusionSerie($oldSerie->getDiffusionSerie());
             }

        $deleteForm = $this->createDeleteForm($series);

        return $this->render('series/show.html.twig', array(
            'series' => $series,
            'oldSeriesObject' => $oldSeriesObject,
            'delete_form' => $deleteForm->createView(),
            'taille' => $taille,
        ));
    }

    /**
     * Displays a form to promote an existing User entity.
     *
     * @Route("/{nomSerie}/valid", name="series_valid")
     * @Method("GET")
     */
    public function validAction(Series $series)
    {
        $usr = $this->get('security.token_storage')->getToken()->getUser(); // On récupère les infos de l'utilisateur courant

        if($usr->hasRole("ROLE_MODERATEUR") or $usr->hasRole("ROLE_ADMIN") or $usr->hasRole("ROLE_SUPER_ADMIN"))
        {
            if($series->getValidation() == 0)
            {
                $em = $this->getDoctrine()->getManager();
                $series->setValidation(1);
                $em->persist($series);
                $oldSeries = $em->getRepository('MovieBundle:Series')->selectLast($series->getNomSerie());
                $nbSerie = $em->getRepository('MovieBundle:Series')->findName($series->getNomSerie());
                $taille = sizeof($nbSerie);

                if($taille > 1)
                {
                    foreach ($oldSeries as $oldSerie) 
                    {
                        $em->remove($oldSerie);   
                    }
                        $em->flush();
                }
                else
                {
                    $em->flush();
                }     
           }
            else
            {
                $em = $this->getDoctrine()->getManager();
                $series->setValidation(0);
            }
        }

        return $this->redirectToRoute('series_index');
    }

    /**
     * Displays a form to promote an existing User entity.
     *
     * @Route("/{nomSerie}/invalid", name="series_invalid")
     * @Method("GET")
     */
    public function invalidAction(Series $series)
    {
        $usr = $this->get('security.token_storage')->getToken()->getUser(); // On récupère les infos de l'utilisateur courant

        if($usr->hasRole("ROLE_MODERATEUR") or $usr->hasRole("ROLE_ADMIN") or $usr->hasRole("ROLE_SUPER_ADMIN"))
        {
             if($series->getValidation() == 0)
             {
                 $em = $this->getDoctrine()->getManager();
                 $nbSerie = $em->getRepository('MovieBundle:Series')->findName($series->getNomSerie());
                 $taille = sizeof($nbSerie);

                 if($taille > 1)
                 {
                         $em->remove($series);
                         $em->flush();
                 }
   
           }

        }

        return $this->redirectToRoute('series_index');
    }

    /**
     * Displays a form to edit an existing Series entity.
     *
     * @Route("/{nomSerie}/edit", name="series_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Series $series) // Méthode modifiée
    {
        $seriesTemp = new Series();
        $seriesTemp->setNomSerie($series->getNomSerie());
        $seriesTemp->setPosterSerie($series->getPosterSerie());
        $seriesTemp->setGenreSerie($series->getGenreSerie());
        $seriesTemp->setDateAjout($series->getDateAjout());
        $seriesTemp->setResumeSerie($series->getResumeSerie());
        $seriesTemp->setDateCreationSerie($series->getDateCreationSerie());
        $seriesTemp->setNoteMoyenneSerie($series->getNoteMoyenneSerie());
        $seriesTemp->setCastingSerie($series->getCastingSerie());
        $seriesTemp->setNbAbonneSerie($series->getNbAbonneSerie());
        $seriesTemp->setDiffusionSerie($series->getDiffusionSerie());
        $seriesTemp->setValidation(1);

        $deleteForm = $this->createDeleteForm($series);

        $editForm = $this->createForm('MovieBundle\Form\SeriesType', $series);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $series->setValidation(0);
            $series->setDateAjout(new \DateTime("now"));

             $em->persist($series);
             $em->persist($seriesTemp);
             $em->flush();
            return $this->redirectToRoute('series_edit', array('nomSerie' => $series->getNomSerie()));
        }

        $em = $this->getDoctrine()->getManager();
        $noms=$em->getRepository('MovieBundle:Series')->findName($series->getNomSerie());
        $taille = sizeof($noms);

        if($taille < 2)
        {
            return $this->render('series/edit.html.twig', array(
            'seriesTemp' => $seriesTemp,
            'series' => $series,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
        }
        else
        {
        return $this->redirectToRoute('series_index');
        }
    }

    /**
     * Deletes a Series entity.
     *
     * @Route("/{nomSerie}/delete", name="series_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Series $series)
    {
        $form = $this->createDeleteForm($series);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($series);
            $em->flush();
        }

        return $this->redirectToRoute('series_index');
    }

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
            ->setAction($this->generateUrl('series_delete', array('nomSerie' => $series->getNomSerie())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
