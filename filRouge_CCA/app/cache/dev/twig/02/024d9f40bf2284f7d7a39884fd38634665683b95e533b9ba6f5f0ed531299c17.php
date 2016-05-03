<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_5d3a90500d0ed279f3761d12d3fdbaa62dc4afd7da1760f310ba400887bf0b01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_921e299467358e12ffd335660cc2ee3ef309f1f9e7205b6a5f67f7a013b6997a = $this->env->getExtension("native_profiler");
        $__internal_921e299467358e12ffd335660cc2ee3ef309f1f9e7205b6a5f67f7a013b6997a->enter($__internal_921e299467358e12ffd335660cc2ee3ef309f1f9e7205b6a5f67f7a013b6997a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_921e299467358e12ffd335660cc2ee3ef309f1f9e7205b6a5f67f7a013b6997a->leave($__internal_921e299467358e12ffd335660cc2ee3ef309f1f9e7205b6a5f67f7a013b6997a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f62944a4b96d0581ff8e69b2f68f52f0eb7fa09d462a5b0e2918ff61b01fbad4 = $this->env->getExtension("native_profiler");
        $__internal_f62944a4b96d0581ff8e69b2f68f52f0eb7fa09d462a5b0e2918ff61b01fbad4->enter($__internal_f62944a4b96d0581ff8e69b2f68f52f0eb7fa09d462a5b0e2918ff61b01fbad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_f62944a4b96d0581ff8e69b2f68f52f0eb7fa09d462a5b0e2918ff61b01fbad4->leave($__internal_f62944a4b96d0581ff8e69b2f68f52f0eb7fa09d462a5b0e2918ff61b01fbad4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
