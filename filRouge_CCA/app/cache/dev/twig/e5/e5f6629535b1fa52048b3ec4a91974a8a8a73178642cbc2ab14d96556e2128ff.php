<?php

/* :user:edit.html.twig */
class __TwigTemplate_ad751532bdfd6adb2d7fdf94b1c35ab1e8f5ba79230a5515acb07f6b9d972fe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:edit.html.twig", 1);
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
        $__internal_38efc078dcdb1882ce6656ad5956d487b6645de9979aea3429a83ce8f5deabc4 = $this->env->getExtension("native_profiler");
        $__internal_38efc078dcdb1882ce6656ad5956d487b6645de9979aea3429a83ce8f5deabc4->enter($__internal_38efc078dcdb1882ce6656ad5956d487b6645de9979aea3429a83ce8f5deabc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38efc078dcdb1882ce6656ad5956d487b6645de9979aea3429a83ce8f5deabc4->leave($__internal_38efc078dcdb1882ce6656ad5956d487b6645de9979aea3429a83ce8f5deabc4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8146bb08df0930e8bb125f8b78262707a80f991f1fe7f100d9e8e5924131830 = $this->env->getExtension("native_profiler");
        $__internal_a8146bb08df0930e8bb125f8b78262707a80f991f1fe7f100d9e8e5924131830->enter($__internal_a8146bb08df0930e8bb125f8b78262707a80f991f1fe7f100d9e8e5924131830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("user_index");
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
        
        $__internal_a8146bb08df0930e8bb125f8b78262707a80f991f1fe7f100d9e8e5924131830->leave($__internal_a8146bb08df0930e8bb125f8b78262707a80f991f1fe7f100d9e8e5924131830_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
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
/*     <h1>User edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
