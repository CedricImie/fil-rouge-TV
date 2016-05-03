<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_d73ed12850d91da45290242a7cfb78d938c9bf3394f2cba03a6a46cf49b84520 extends Twig_Template
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
        $__internal_118181ba71b60bd88877528c49cbcd6ce8573cbe9b3de04673e06a1e2e8a4e4a = $this->env->getExtension("native_profiler");
        $__internal_118181ba71b60bd88877528c49cbcd6ce8573cbe9b3de04673e06a1e2e8a4e4a->enter($__internal_118181ba71b60bd88877528c49cbcd6ce8573cbe9b3de04673e06a1e2e8a4e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_118181ba71b60bd88877528c49cbcd6ce8573cbe9b3de04673e06a1e2e8a4e4a->leave($__internal_118181ba71b60bd88877528c49cbcd6ce8573cbe9b3de04673e06a1e2e8a4e4a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
