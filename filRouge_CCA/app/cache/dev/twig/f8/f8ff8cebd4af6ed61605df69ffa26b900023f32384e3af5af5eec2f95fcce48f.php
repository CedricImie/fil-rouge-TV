<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0d199b777f489897c5b773660d2c2b464ad18e7adaabec7630dba1f74e0ee46f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_57bc04f4cf6895c0f675607a8ab6f6a0adbc17d7e152d00b58fe8881e89d3168 = $this->env->getExtension("native_profiler");
        $__internal_57bc04f4cf6895c0f675607a8ab6f6a0adbc17d7e152d00b58fe8881e89d3168->enter($__internal_57bc04f4cf6895c0f675607a8ab6f6a0adbc17d7e152d00b58fe8881e89d3168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57bc04f4cf6895c0f675607a8ab6f6a0adbc17d7e152d00b58fe8881e89d3168->leave($__internal_57bc04f4cf6895c0f675607a8ab6f6a0adbc17d7e152d00b58fe8881e89d3168_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a1180325580fee742b2c3da4b063940821e326e7bd9b5b56cdd8dd61dec6716 = $this->env->getExtension("native_profiler");
        $__internal_2a1180325580fee742b2c3da4b063940821e326e7bd9b5b56cdd8dd61dec6716->enter($__internal_2a1180325580fee742b2c3da4b063940821e326e7bd9b5b56cdd8dd61dec6716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_2a1180325580fee742b2c3da4b063940821e326e7bd9b5b56cdd8dd61dec6716->leave($__internal_2a1180325580fee742b2c3da4b063940821e326e7bd9b5b56cdd8dd61dec6716_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
