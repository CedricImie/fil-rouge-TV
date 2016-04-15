<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_54045808e447e0993a2445d8edb7b68d1ea6751475414beb76ac628a9ace6eeb extends Twig_Template
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
        $__internal_eeccb73055801de6124440f6cb31011bfce3b85edbd79033ac327981844e0417 = $this->env->getExtension("native_profiler");
        $__internal_eeccb73055801de6124440f6cb31011bfce3b85edbd79033ac327981844e0417->enter($__internal_eeccb73055801de6124440f6cb31011bfce3b85edbd79033ac327981844e0417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_eeccb73055801de6124440f6cb31011bfce3b85edbd79033ac327981844e0417->leave($__internal_eeccb73055801de6124440f6cb31011bfce3b85edbd79033ac327981844e0417_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
