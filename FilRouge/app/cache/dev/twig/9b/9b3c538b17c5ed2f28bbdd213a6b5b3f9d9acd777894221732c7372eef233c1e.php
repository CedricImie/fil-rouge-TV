<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bbed3923c70fb496b17560a9089125e98eb242be817575020c1b87426d298a48 extends Twig_Template
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
        $__internal_c60ced2e2999ab5ea245138f9bf57cb5da0b41a2e70074bd7b1265009139aca4 = $this->env->getExtension("native_profiler");
        $__internal_c60ced2e2999ab5ea245138f9bf57cb5da0b41a2e70074bd7b1265009139aca4->enter($__internal_c60ced2e2999ab5ea245138f9bf57cb5da0b41a2e70074bd7b1265009139aca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c60ced2e2999ab5ea245138f9bf57cb5da0b41a2e70074bd7b1265009139aca4->leave($__internal_c60ced2e2999ab5ea245138f9bf57cb5da0b41a2e70074bd7b1265009139aca4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
