<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_310ac507305c5fb564b594ee586232302f87006ee1d1e3a3dbf4c58164aca950 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_67273149fd966134e653be5b9ddbafe69d4403e373f8bfb7215335aa90971eae = $this->env->getExtension("native_profiler");
        $__internal_67273149fd966134e653be5b9ddbafe69d4403e373f8bfb7215335aa90971eae->enter($__internal_67273149fd966134e653be5b9ddbafe69d4403e373f8bfb7215335aa90971eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67273149fd966134e653be5b9ddbafe69d4403e373f8bfb7215335aa90971eae->leave($__internal_67273149fd966134e653be5b9ddbafe69d4403e373f8bfb7215335aa90971eae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ba39d0862b6a8bf98675bbcc7aa88f7eb7aab1becea9ead17a7bafd5e6752be = $this->env->getExtension("native_profiler");
        $__internal_8ba39d0862b6a8bf98675bbcc7aa88f7eb7aab1becea9ead17a7bafd5e6752be->enter($__internal_8ba39d0862b6a8bf98675bbcc7aa88f7eb7aab1becea9ead17a7bafd5e6752be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8ba39d0862b6a8bf98675bbcc7aa88f7eb7aab1becea9ead17a7bafd5e6752be->leave($__internal_8ba39d0862b6a8bf98675bbcc7aa88f7eb7aab1becea9ead17a7bafd5e6752be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
