<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_be9e13b0a59c6b6456d3b8a9a876bf2cc6005691426c3b7dabaaa2b02b9cf700 extends Twig_Template
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
        $__internal_2e370b2570f7c5ff1299546c8c7971d75223532209a5ce7139b45973aec71970 = $this->env->getExtension("native_profiler");
        $__internal_2e370b2570f7c5ff1299546c8c7971d75223532209a5ce7139b45973aec71970->enter($__internal_2e370b2570f7c5ff1299546c8c7971d75223532209a5ce7139b45973aec71970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2e370b2570f7c5ff1299546c8c7971d75223532209a5ce7139b45973aec71970->leave($__internal_2e370b2570f7c5ff1299546c8c7971d75223532209a5ce7139b45973aec71970_prof);

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
