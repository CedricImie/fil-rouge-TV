<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f1dfca2fca928b6b842e332db0c735834babbcd2c18316a410b5d7499ff790c0 extends Twig_Template
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
        $__internal_9014f5a3f95aa25964e86371841d5fe80ccaad33739315b557a2fe9cf6faffbc = $this->env->getExtension("native_profiler");
        $__internal_9014f5a3f95aa25964e86371841d5fe80ccaad33739315b557a2fe9cf6faffbc->enter($__internal_9014f5a3f95aa25964e86371841d5fe80ccaad33739315b557a2fe9cf6faffbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9014f5a3f95aa25964e86371841d5fe80ccaad33739315b557a2fe9cf6faffbc->leave($__internal_9014f5a3f95aa25964e86371841d5fe80ccaad33739315b557a2fe9cf6faffbc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
