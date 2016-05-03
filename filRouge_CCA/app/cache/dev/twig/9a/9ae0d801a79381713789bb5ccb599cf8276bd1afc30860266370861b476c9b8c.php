<?php

/* :episodes:edit.html.twig */
class __TwigTemplate_b073848f9b719bb92691a4615ecac21d40e25317fe0ef2dda9ccbeaa3aa1c95f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":episodes:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_515e76de5b69f3ecbe9fe810c84ebe314b724b78b559a88993068a25be26c9bf = $this->env->getExtension("native_profiler");
        $__internal_515e76de5b69f3ecbe9fe810c84ebe314b724b78b559a88993068a25be26c9bf->enter($__internal_515e76de5b69f3ecbe9fe810c84ebe314b724b78b559a88993068a25be26c9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":episodes:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_515e76de5b69f3ecbe9fe810c84ebe314b724b78b559a88993068a25be26c9bf->leave($__internal_515e76de5b69f3ecbe9fe810c84ebe314b724b78b559a88993068a25be26c9bf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9841b5adb7cbcb10f7af1f81c82375bf45422899270b353743d1ccd7ec3f9524 = $this->env->getExtension("native_profiler");
        $__internal_9841b5adb7cbcb10f7af1f81c82375bf45422899270b353743d1ccd7ec3f9524->enter($__internal_9841b5adb7cbcb10f7af1f81c82375bf45422899270b353743d1ccd7ec3f9524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Episodes edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("episodes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9841b5adb7cbcb10f7af1f81c82375bf45422899270b353743d1ccd7ec3f9524->leave($__internal_9841b5adb7cbcb10f7af1f81c82375bf45422899270b353743d1ccd7ec3f9524_prof);

    }

    public function getTemplateName()
    {
        return ":episodes:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Episodes edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('episodes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
