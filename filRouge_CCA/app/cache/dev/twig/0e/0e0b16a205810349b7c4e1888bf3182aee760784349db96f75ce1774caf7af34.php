<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3c66f49e5b891d3f8c538c8e171caca74229569dc2d0c3cc7a439819d233639e extends Twig_Template
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
        $__internal_f25dbfd4da09cd93d0c028a1e4378f1586fec23b369fc0f5682a1780221fc91c = $this->env->getExtension("native_profiler");
        $__internal_f25dbfd4da09cd93d0c028a1e4378f1586fec23b369fc0f5682a1780221fc91c->enter($__internal_f25dbfd4da09cd93d0c028a1e4378f1586fec23b369fc0f5682a1780221fc91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f25dbfd4da09cd93d0c028a1e4378f1586fec23b369fc0f5682a1780221fc91c->leave($__internal_f25dbfd4da09cd93d0c028a1e4378f1586fec23b369fc0f5682a1780221fc91c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
