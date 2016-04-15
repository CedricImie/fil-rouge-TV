<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3959e85d645178f42bf1b9c6d2c0dcdce0d4d349a0ab14db263a36bd17a7daca extends Twig_Template
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
        $__internal_f726652c429df437b4bf6917843dc8b305282edec8161ed9f3c1652892b9980a = $this->env->getExtension("native_profiler");
        $__internal_f726652c429df437b4bf6917843dc8b305282edec8161ed9f3c1652892b9980a->enter($__internal_f726652c429df437b4bf6917843dc8b305282edec8161ed9f3c1652892b9980a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f726652c429df437b4bf6917843dc8b305282edec8161ed9f3c1652892b9980a->leave($__internal_f726652c429df437b4bf6917843dc8b305282edec8161ed9f3c1652892b9980a_prof);

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
