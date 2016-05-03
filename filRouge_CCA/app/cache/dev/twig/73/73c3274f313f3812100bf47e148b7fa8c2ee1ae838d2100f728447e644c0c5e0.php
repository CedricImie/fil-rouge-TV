<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d5f87bc15e3dd36fd96386709aaa9679276ed62b420ddd75a9e095f2b121d720 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6606d86cd3f284c214eeedc61c2997dbb91e70962e52d10046b82b39a88878f0 = $this->env->getExtension("native_profiler");
        $__internal_6606d86cd3f284c214eeedc61c2997dbb91e70962e52d10046b82b39a88878f0->enter($__internal_6606d86cd3f284c214eeedc61c2997dbb91e70962e52d10046b82b39a88878f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6606d86cd3f284c214eeedc61c2997dbb91e70962e52d10046b82b39a88878f0->leave($__internal_6606d86cd3f284c214eeedc61c2997dbb91e70962e52d10046b82b39a88878f0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_811567775137855cf1cad12e3618604e7d3b346b96748dad2d19a4a26fabc67d = $this->env->getExtension("native_profiler");
        $__internal_811567775137855cf1cad12e3618604e7d3b346b96748dad2d19a4a26fabc67d->enter($__internal_811567775137855cf1cad12e3618604e7d3b346b96748dad2d19a4a26fabc67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_811567775137855cf1cad12e3618604e7d3b346b96748dad2d19a4a26fabc67d->leave($__internal_811567775137855cf1cad12e3618604e7d3b346b96748dad2d19a4a26fabc67d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
