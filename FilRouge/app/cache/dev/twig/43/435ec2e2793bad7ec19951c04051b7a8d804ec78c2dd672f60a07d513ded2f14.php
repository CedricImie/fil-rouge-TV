<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7862dfdc242afff9671df973a4126df5546fd86df6819e0588b96ab7b05c0d12 extends Twig_Template
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
        $__internal_136e74da65f9cec7ff1979af79c8ffdd6c10251601e3ea07d3723226369ddb8a = $this->env->getExtension("native_profiler");
        $__internal_136e74da65f9cec7ff1979af79c8ffdd6c10251601e3ea07d3723226369ddb8a->enter($__internal_136e74da65f9cec7ff1979af79c8ffdd6c10251601e3ea07d3723226369ddb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_136e74da65f9cec7ff1979af79c8ffdd6c10251601e3ea07d3723226369ddb8a->leave($__internal_136e74da65f9cec7ff1979af79c8ffdd6c10251601e3ea07d3723226369ddb8a_prof);

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
