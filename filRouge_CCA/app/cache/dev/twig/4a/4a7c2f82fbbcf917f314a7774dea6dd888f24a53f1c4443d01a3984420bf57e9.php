<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_123407e38b48f3f6dfca4c8a44c7e97d3aedd4e6172fd87bbae1912745a6e245 extends Twig_Template
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
        $__internal_eb31f5a696f7ba23579188ea77ba5f01cc83df839dbe4babd805f19aaaec941c = $this->env->getExtension("native_profiler");
        $__internal_eb31f5a696f7ba23579188ea77ba5f01cc83df839dbe4babd805f19aaaec941c->enter($__internal_eb31f5a696f7ba23579188ea77ba5f01cc83df839dbe4babd805f19aaaec941c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_eb31f5a696f7ba23579188ea77ba5f01cc83df839dbe4babd805f19aaaec941c->leave($__internal_eb31f5a696f7ba23579188ea77ba5f01cc83df839dbe4babd805f19aaaec941c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
