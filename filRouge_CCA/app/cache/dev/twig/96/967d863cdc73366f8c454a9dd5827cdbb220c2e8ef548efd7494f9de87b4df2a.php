<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_47b9e9878fa7d5c6b6ecdaac9d83ce6fed9138a6b9b82852e3319dcf2e3ec1b2 extends Twig_Template
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
        $__internal_1bb50af0b9c42d8bb94e72b0a6cfe2d74571d9c174cf4e1cdae4f93d5a6d1e41 = $this->env->getExtension("native_profiler");
        $__internal_1bb50af0b9c42d8bb94e72b0a6cfe2d74571d9c174cf4e1cdae4f93d5a6d1e41->enter($__internal_1bb50af0b9c42d8bb94e72b0a6cfe2d74571d9c174cf4e1cdae4f93d5a6d1e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1bb50af0b9c42d8bb94e72b0a6cfe2d74571d9c174cf4e1cdae4f93d5a6d1e41->leave($__internal_1bb50af0b9c42d8bb94e72b0a6cfe2d74571d9c174cf4e1cdae4f93d5a6d1e41_prof);

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
