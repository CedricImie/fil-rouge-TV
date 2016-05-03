<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_5235d3e2972a7c7461c49bc909ae1ec32b1bcfe2ac2716bdf0cc986cbb01f492 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_eae27d9d26d80adfe9de3629977479069bfae9cd2820a74face9ed4e6f147af3 = $this->env->getExtension("native_profiler");
        $__internal_eae27d9d26d80adfe9de3629977479069bfae9cd2820a74face9ed4e6f147af3->enter($__internal_eae27d9d26d80adfe9de3629977479069bfae9cd2820a74face9ed4e6f147af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eae27d9d26d80adfe9de3629977479069bfae9cd2820a74face9ed4e6f147af3->leave($__internal_eae27d9d26d80adfe9de3629977479069bfae9cd2820a74face9ed4e6f147af3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7de9d61749b31f6cdec381ac59721ee66306bd0da118d5617c078c5e433fae62 = $this->env->getExtension("native_profiler");
        $__internal_7de9d61749b31f6cdec381ac59721ee66306bd0da118d5617c078c5e433fae62->enter($__internal_7de9d61749b31f6cdec381ac59721ee66306bd0da118d5617c078c5e433fae62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_7de9d61749b31f6cdec381ac59721ee66306bd0da118d5617c078c5e433fae62->leave($__internal_7de9d61749b31f6cdec381ac59721ee66306bd0da118d5617c078c5e433fae62_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
