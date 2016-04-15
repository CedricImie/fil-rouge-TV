<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f2769024d6d541e80c2d479736ce719e1798c33ddc8368c4743e678c548e7d31 extends Twig_Template
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
        $__internal_972a16ba4e72187cab69161165fa4cdc55f8e5cde0fb6cd362a9b4fe032399c9 = $this->env->getExtension("native_profiler");
        $__internal_972a16ba4e72187cab69161165fa4cdc55f8e5cde0fb6cd362a9b4fe032399c9->enter($__internal_972a16ba4e72187cab69161165fa4cdc55f8e5cde0fb6cd362a9b4fe032399c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_972a16ba4e72187cab69161165fa4cdc55f8e5cde0fb6cd362a9b4fe032399c9->leave($__internal_972a16ba4e72187cab69161165fa4cdc55f8e5cde0fb6cd362a9b4fe032399c9_prof);

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
