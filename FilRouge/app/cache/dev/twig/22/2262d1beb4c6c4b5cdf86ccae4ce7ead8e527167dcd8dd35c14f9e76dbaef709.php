<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_aac4df33363a90f13451f3e58ac146e39a3926b3112d2f475b4d9f6b9b701ad9 extends Twig_Template
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
        $__internal_766c39a0378ee639174f04b5b18b7bfe6fa71c2dfd852adb3cf1c9bc67f1656a = $this->env->getExtension("native_profiler");
        $__internal_766c39a0378ee639174f04b5b18b7bfe6fa71c2dfd852adb3cf1c9bc67f1656a->enter($__internal_766c39a0378ee639174f04b5b18b7bfe6fa71c2dfd852adb3cf1c9bc67f1656a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_766c39a0378ee639174f04b5b18b7bfe6fa71c2dfd852adb3cf1c9bc67f1656a->leave($__internal_766c39a0378ee639174f04b5b18b7bfe6fa71c2dfd852adb3cf1c9bc67f1656a_prof);

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
