<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_0d37dcdc234a4cefbeee8735fb0f87c7faf2da32badf09764d6e3d01c8ef9a9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_aad85daad7261d1e97357748cc57931a7c3ca04647e3122684265c34201440ae = $this->env->getExtension("native_profiler");
        $__internal_aad85daad7261d1e97357748cc57931a7c3ca04647e3122684265c34201440ae->enter($__internal_aad85daad7261d1e97357748cc57931a7c3ca04647e3122684265c34201440ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aad85daad7261d1e97357748cc57931a7c3ca04647e3122684265c34201440ae->leave($__internal_aad85daad7261d1e97357748cc57931a7c3ca04647e3122684265c34201440ae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd0f29908866d23aca7a540fd10d598b8ce1c5633c1d98e5d957eb87e08c9e15 = $this->env->getExtension("native_profiler");
        $__internal_dd0f29908866d23aca7a540fd10d598b8ce1c5633c1d98e5d957eb87e08c9e15->enter($__internal_dd0f29908866d23aca7a540fd10d598b8ce1c5633c1d98e5d957eb87e08c9e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_dd0f29908866d23aca7a540fd10d598b8ce1c5633c1d98e5d957eb87e08c9e15->leave($__internal_dd0f29908866d23aca7a540fd10d598b8ce1c5633c1d98e5d957eb87e08c9e15_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
