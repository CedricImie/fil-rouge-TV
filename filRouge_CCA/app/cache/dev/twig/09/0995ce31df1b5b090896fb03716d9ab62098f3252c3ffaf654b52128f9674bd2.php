<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_573015a2a9ef4c7c146022fdb06b303a32099e9ee5c9063459b20d4d7db83cc7 extends Twig_Template
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
        $__internal_570442d57df294cec8d02119381e44560cdb1ff35fd669fbe2f8c620869969c0 = $this->env->getExtension("native_profiler");
        $__internal_570442d57df294cec8d02119381e44560cdb1ff35fd669fbe2f8c620869969c0->enter($__internal_570442d57df294cec8d02119381e44560cdb1ff35fd669fbe2f8c620869969c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_570442d57df294cec8d02119381e44560cdb1ff35fd669fbe2f8c620869969c0->leave($__internal_570442d57df294cec8d02119381e44560cdb1ff35fd669fbe2f8c620869969c0_prof);

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
