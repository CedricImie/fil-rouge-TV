<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a0a30979c1498b1cee8e29e52804fd964bf443c88f519ed496b4042091a3804a extends Twig_Template
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
        $__internal_97d57e864a315ef2cf5e112bdec6e2bfd7a95ff71131c8fdfb536e29292e70ad = $this->env->getExtension("native_profiler");
        $__internal_97d57e864a315ef2cf5e112bdec6e2bfd7a95ff71131c8fdfb536e29292e70ad->enter($__internal_97d57e864a315ef2cf5e112bdec6e2bfd7a95ff71131c8fdfb536e29292e70ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_97d57e864a315ef2cf5e112bdec6e2bfd7a95ff71131c8fdfb536e29292e70ad->leave($__internal_97d57e864a315ef2cf5e112bdec6e2bfd7a95ff71131c8fdfb536e29292e70ad_prof);

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
