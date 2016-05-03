<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e58f10abf8558f7a678acefdf5822dae8a7dac22bf2357f5264549b275499ead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_190e293622cc1b14197b7434e385302648016077ad7f79f0edacdbec5d4fbdb8 = $this->env->getExtension("native_profiler");
        $__internal_190e293622cc1b14197b7434e385302648016077ad7f79f0edacdbec5d4fbdb8->enter($__internal_190e293622cc1b14197b7434e385302648016077ad7f79f0edacdbec5d4fbdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_190e293622cc1b14197b7434e385302648016077ad7f79f0edacdbec5d4fbdb8->leave($__internal_190e293622cc1b14197b7434e385302648016077ad7f79f0edacdbec5d4fbdb8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60272bb6c74c0ac9ed7cfd3460e166d0e44ad12451580c26d9a564d6db6cc613 = $this->env->getExtension("native_profiler");
        $__internal_60272bb6c74c0ac9ed7cfd3460e166d0e44ad12451580c26d9a564d6db6cc613->enter($__internal_60272bb6c74c0ac9ed7cfd3460e166d0e44ad12451580c26d9a564d6db6cc613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_60272bb6c74c0ac9ed7cfd3460e166d0e44ad12451580c26d9a564d6db6cc613->leave($__internal_60272bb6c74c0ac9ed7cfd3460e166d0e44ad12451580c26d9a564d6db6cc613_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
