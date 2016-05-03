<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_fecbc183324170084780cab4223a5abbc303b6e7d4b7b40d6fa20560f5665645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_645fced2f6ebca7df9fa06d79c4e2a250131288a2fd3405cfa90d5d153360403 = $this->env->getExtension("native_profiler");
        $__internal_645fced2f6ebca7df9fa06d79c4e2a250131288a2fd3405cfa90d5d153360403->enter($__internal_645fced2f6ebca7df9fa06d79c4e2a250131288a2fd3405cfa90d5d153360403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_645fced2f6ebca7df9fa06d79c4e2a250131288a2fd3405cfa90d5d153360403->leave($__internal_645fced2f6ebca7df9fa06d79c4e2a250131288a2fd3405cfa90d5d153360403_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0058f170fec0c1e8e211368b5fb3e089cbdaf6e5e4d6f221eebe26885b1bd91e = $this->env->getExtension("native_profiler");
        $__internal_0058f170fec0c1e8e211368b5fb3e089cbdaf6e5e4d6f221eebe26885b1bd91e->enter($__internal_0058f170fec0c1e8e211368b5fb3e089cbdaf6e5e4d6f221eebe26885b1bd91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0058f170fec0c1e8e211368b5fb3e089cbdaf6e5e4d6f221eebe26885b1bd91e->leave($__internal_0058f170fec0c1e8e211368b5fb3e089cbdaf6e5e4d6f221eebe26885b1bd91e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
