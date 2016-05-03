<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_e8a8c20abbca50db4e3d5414b30dadf00c364d7b54f60bb50298b5dad6f99bd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_9f929a9135944eecfb237fccc49b497f8d9bd775fabe75f5db7aa3baf97575f9 = $this->env->getExtension("native_profiler");
        $__internal_9f929a9135944eecfb237fccc49b497f8d9bd775fabe75f5db7aa3baf97575f9->enter($__internal_9f929a9135944eecfb237fccc49b497f8d9bd775fabe75f5db7aa3baf97575f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f929a9135944eecfb237fccc49b497f8d9bd775fabe75f5db7aa3baf97575f9->leave($__internal_9f929a9135944eecfb237fccc49b497f8d9bd775fabe75f5db7aa3baf97575f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8134279d33674962646f3d3f2ef97d4029bec9a61a921b504326ac0ff3caf5ce = $this->env->getExtension("native_profiler");
        $__internal_8134279d33674962646f3d3f2ef97d4029bec9a61a921b504326ac0ff3caf5ce->enter($__internal_8134279d33674962646f3d3f2ef97d4029bec9a61a921b504326ac0ff3caf5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_8134279d33674962646f3d3f2ef97d4029bec9a61a921b504326ac0ff3caf5ce->leave($__internal_8134279d33674962646f3d3f2ef97d4029bec9a61a921b504326ac0ff3caf5ce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
