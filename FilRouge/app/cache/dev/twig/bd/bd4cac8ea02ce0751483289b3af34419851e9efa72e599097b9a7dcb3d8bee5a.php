<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5e702c5c1f2f0abaa86aed0a0a4c8aa6f72cea137492afc70afc350e936ced36 extends Twig_Template
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
        $__internal_895f44788193b46380d638e078e788beb7a0328f7b11792c36965b74d22b5840 = $this->env->getExtension("native_profiler");
        $__internal_895f44788193b46380d638e078e788beb7a0328f7b11792c36965b74d22b5840->enter($__internal_895f44788193b46380d638e078e788beb7a0328f7b11792c36965b74d22b5840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_895f44788193b46380d638e078e788beb7a0328f7b11792c36965b74d22b5840->leave($__internal_895f44788193b46380d638e078e788beb7a0328f7b11792c36965b74d22b5840_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
