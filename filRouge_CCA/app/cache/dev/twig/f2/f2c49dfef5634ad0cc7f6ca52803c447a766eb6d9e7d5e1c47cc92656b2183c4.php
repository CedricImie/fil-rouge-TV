<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_314a0e2c2165a240e6c4be71b0f1180834ee749d11ce58cfafb20a40ba5f5cf2 extends Twig_Template
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
        $__internal_60f01ef3bc45e5fc7e2b087712aced150636218fececaf8992c453686ab8b933 = $this->env->getExtension("native_profiler");
        $__internal_60f01ef3bc45e5fc7e2b087712aced150636218fececaf8992c453686ab8b933->enter($__internal_60f01ef3bc45e5fc7e2b087712aced150636218fececaf8992c453686ab8b933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_60f01ef3bc45e5fc7e2b087712aced150636218fececaf8992c453686ab8b933->leave($__internal_60f01ef3bc45e5fc7e2b087712aced150636218fececaf8992c453686ab8b933_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
