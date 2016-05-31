<?php

namespace MovieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('MovieBundle:Default:index.html.twig');
    }

    /**
     * @Route("/")
     */
    public function headerAction()
    {
        return $this->render('MovieBundle:Default:header.html.twig');
    }

    /**
     * @Route("/")
     */
    public function footerAction()
    {
        return $this->render('MovieBundle:Default:footer.html.twig');
    }
}
