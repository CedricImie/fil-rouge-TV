<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_45fa001b1180b1c9924fe3fff896f471765343ad58e098c4bbf036c96c56994a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6313b5c9151b95bbc5da28040b59d124fda4d33e08f5c804f0dd15b165bd3825 = $this->env->getExtension("native_profiler");
        $__internal_6313b5c9151b95bbc5da28040b59d124fda4d33e08f5c804f0dd15b165bd3825->enter($__internal_6313b5c9151b95bbc5da28040b59d124fda4d33e08f5c804f0dd15b165bd3825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6313b5c9151b95bbc5da28040b59d124fda4d33e08f5c804f0dd15b165bd3825->leave($__internal_6313b5c9151b95bbc5da28040b59d124fda4d33e08f5c804f0dd15b165bd3825_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
