<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1bd4be519cd98f82924759fd66fd17fe0434c992bc9068f43fd8c2f77555486f extends Twig_Template
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
        $__internal_85b5e44bb9cba5bb72ff64efe39681bc44379df44ecc5bcf75f4185718e2b8a1 = $this->env->getExtension("native_profiler");
        $__internal_85b5e44bb9cba5bb72ff64efe39681bc44379df44ecc5bcf75f4185718e2b8a1->enter($__internal_85b5e44bb9cba5bb72ff64efe39681bc44379df44ecc5bcf75f4185718e2b8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_85b5e44bb9cba5bb72ff64efe39681bc44379df44ecc5bcf75f4185718e2b8a1->leave($__internal_85b5e44bb9cba5bb72ff64efe39681bc44379df44ecc5bcf75f4185718e2b8a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
