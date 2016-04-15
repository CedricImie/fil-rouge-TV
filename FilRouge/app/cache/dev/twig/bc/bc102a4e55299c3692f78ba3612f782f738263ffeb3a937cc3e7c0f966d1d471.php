<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a0db6e15b27c1472ce8de83ce3919ac0a8b48ba8a50e0faab1dfc28764a2f993 extends Twig_Template
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
        $__internal_cb8ede88581221c1e46cb7dbcc70176e2709a90947575d6f00bab16049cdf6fd = $this->env->getExtension("native_profiler");
        $__internal_cb8ede88581221c1e46cb7dbcc70176e2709a90947575d6f00bab16049cdf6fd->enter($__internal_cb8ede88581221c1e46cb7dbcc70176e2709a90947575d6f00bab16049cdf6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_cb8ede88581221c1e46cb7dbcc70176e2709a90947575d6f00bab16049cdf6fd->leave($__internal_cb8ede88581221c1e46cb7dbcc70176e2709a90947575d6f00bab16049cdf6fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
