<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_0a748b78615be54fe8fe5883a5d79e1d4d459c4470173e9022496f9d6b57d320 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_3fa037992236e47e16bc137603e0fcb98b8e3e3b8f84cf0a81e2dfcd943d03d1 = $this->env->getExtension("native_profiler");
        $__internal_3fa037992236e47e16bc137603e0fcb98b8e3e3b8f84cf0a81e2dfcd943d03d1->enter($__internal_3fa037992236e47e16bc137603e0fcb98b8e3e3b8f84cf0a81e2dfcd943d03d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fa037992236e47e16bc137603e0fcb98b8e3e3b8f84cf0a81e2dfcd943d03d1->leave($__internal_3fa037992236e47e16bc137603e0fcb98b8e3e3b8f84cf0a81e2dfcd943d03d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_08631885856cc30cda8a17f7f0b7ff0f102b450f7e9e0ed1b8c7f0a47961219b = $this->env->getExtension("native_profiler");
        $__internal_08631885856cc30cda8a17f7f0b7ff0f102b450f7e9e0ed1b8c7f0a47961219b->enter($__internal_08631885856cc30cda8a17f7f0b7ff0f102b450f7e9e0ed1b8c7f0a47961219b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_08631885856cc30cda8a17f7f0b7ff0f102b450f7e9e0ed1b8c7f0a47961219b->leave($__internal_08631885856cc30cda8a17f7f0b7ff0f102b450f7e9e0ed1b8c7f0a47961219b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
