<?php

/* :moderateurs:edit.html.twig */
class __TwigTemplate_8c48607a17990765a1acffafa116cf691db090025ff9cb5bcbf1afcbad15bd96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":moderateurs:edit.html.twig", 1);
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
        $__internal_32c4ac02277e3627cc1ad9e4e1bd4c1931bb0a2100f5cd756afeb86e30c6aa43 = $this->env->getExtension("native_profiler");
        $__internal_32c4ac02277e3627cc1ad9e4e1bd4c1931bb0a2100f5cd756afeb86e30c6aa43->enter($__internal_32c4ac02277e3627cc1ad9e4e1bd4c1931bb0a2100f5cd756afeb86e30c6aa43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":moderateurs:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32c4ac02277e3627cc1ad9e4e1bd4c1931bb0a2100f5cd756afeb86e30c6aa43->leave($__internal_32c4ac02277e3627cc1ad9e4e1bd4c1931bb0a2100f5cd756afeb86e30c6aa43_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_01505a8ee15df0b18a196b456bcdc0801e44b5411547e706ca01ae040d860490 = $this->env->getExtension("native_profiler");
        $__internal_01505a8ee15df0b18a196b456bcdc0801e44b5411547e706ca01ae040d860490->enter($__internal_01505a8ee15df0b18a196b456bcdc0801e44b5411547e706ca01ae040d860490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Moderateurs edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("moderateurs_index");
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
        
        $__internal_01505a8ee15df0b18a196b456bcdc0801e44b5411547e706ca01ae040d860490->leave($__internal_01505a8ee15df0b18a196b456bcdc0801e44b5411547e706ca01ae040d860490_prof);

    }

    public function getTemplateName()
    {
        return ":moderateurs:edit.html.twig";
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
/*     <h1>Moderateurs edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('moderateurs_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
