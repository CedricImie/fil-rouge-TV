<?php

namespace MovieBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MovieBundle\Entity\Saisons;
use MovieBundle\Entity\Series;
use MovieBundle\Form\SaisonsType;

/**
 * Saisons controller.
 *
 * @Route("series/{nomSerie}/saisons")
 */
class SaisonsController extends Controller
{
    /**
     * Lists all Saisons entities.
     *
     * @Route("/", name="saisons_index")
     * @Method("GET")
     */
    public function indexAction(Series $serie)
    {
         dump($serie);
        $idSerie = $serie->getId();
        $em = $this->getDoctrine()->getManager();

        $saisons = $em->getRepository('MovieBundle:Saisons')->findBySeries($serie);
        
        $serie = $em->getRepository('MovieBundle:Series')->findById($idSerie);

        return $this->render('saisons/index.html.twig', array(
            'saisons' => $saisons,
            'serie' => $serie,
        ));
    }

    /**
     * Creates a new Saisons entity.
     *
     * @Route("/new", name="saisons_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Series $serie)
    {
        $saison = new Saisons();

        $form = $this->createForm('MovieBundle\Form\SaisonsType', $saison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $series = $em->getRepository('MovieBundle:Series')->findByNomSerie($serie->getNomSerie());
            foreach($series as $serie)
            {
                $saison->setSeries($serie);
            }
            $em->persist($saison);
            $em->flush();

            return $this->redirectToRoute('saisons_show', array('nomSaison' => urldecode($saison->getNomSaison()),
                                                                'nomSerie' => urldecode($serie->getNomSerie())));
        }

        return $this->render('saisons/new.html.twig', array(
            'saison' => $saison,
            'form' => $form->createView(),
            'serie' => $serie,
        ));
    }

    /**
     * Finds and displays a Saisons entity.
     *
     * @Route("/{nomSaison}", name="saisons_show")
     * @Method("GET")
     */
    public function showAction(Saisons $saison)
    {
        $em = $this->getDoctrine()->getManager();

        // ########## Test de récup d'un objet a partir d'une relation ############
        //dump($saison->getSeries()->getResumeSerie());
        // ########## Fin du test #################################################

        $idSerie = $saison->getSeries()->getId();
        $deleteForm = $this->createDeleteForm($saison);
        $serie = $em->getRepository('MovieBundle:Series')->findOneBy(array('id' => $idSerie));
        
        // foreach($series as $serie)
        // {
        //     $saison->setSeries($serie);
        //     dump($saison);
        // }
        $em->persist($saison);
        $em->flush();
        

        return $this->render('saisons/show.html.twig', array(
            'saison' => $saison,
            'delete_form' => $deleteForm->createView(),
            'serie' => $serie,
        ));
    }

    /**
     * Displays a form to edit an existing Saisons entity.
     *
     * @Route("/{nomSaison}/edit", name="saisons_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Saisons $saison)
    {
        $deleteForm = $this->createDeleteForm($saison);
        $editForm = $this->createForm('MovieBundle\Form\SaisonsType', $saison);
        $editForm->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $idSerie = $saison->getSeries()->getId();
        $serie = $em->getRepository('MovieBundle:Series')->findOneBy(array('id' => $idSerie));

        if ($editForm->isSubmitted() && $editForm->isValid()) {  
            $em->persist($saison);
            $em->flush();

            return $this->redirectToRoute('saisons_edit', array('nomSaison' => $saison->getNomSaison(), 
                                                                'nomSerie' => $serie->getNomSerie()));
        }

        return $this->render('saisons/edit.html.twig', array(
            'saison' => $saison,
            'serie' => $serie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Saisons entity.
     *
     * @Route("/{nomSaison}", name="saisons_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Saisons $saison)
    {
        $form = $this->createDeleteForm($saison);
        $form->handleRequest($request);
        $serie = $saison->getSeries();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($saison);
            $em->flush();
        }

        return $this->redirectToRoute('saisons_index', array('nomSerie' => $serie->getNomSerie()));
    }

    /**
     * Creates a form to delete a Saisons entity.
     *
     * @param Saisons $saison The Saisons entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Saisons $saison)
    {
        $serie = new Series();
        $serie = $saison->getSeries();
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('saisons_delete', array('nomSaison' => $saison->getNomSaison(),
                                                                   'nomSerie' => $serie->getNomSerie())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
