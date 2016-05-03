<?php

/* :user:new.html.twig */
class __TwigTemplate_dd148b32bf093ef75b950af0def177cf56f49e2074962d5ee30641c6da70176c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
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
        $__internal_4c3e06f9af9baae91de5f790244e81d1d51d559b420d0510727f10b49d6a8433 = $this->env->getExtension("native_profiler");
        $__internal_4c3e06f9af9baae91de5f790244e81d1d51d559b420d0510727f10b49d6a8433->enter($__internal_4c3e06f9af9baae91de5f790244e81d1d51d559b420d0510727f10b49d6a8433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c3e06f9af9baae91de5f790244e81d1d51d559b420d0510727f10b49d6a8433->leave($__internal_4c3e06f9af9baae91de5f790244e81d1d51d559b420d0510727f10b49d6a8433_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd1ef2df2202f98be8251f1ed9156cbd0686b219b63518346820ef611435c968 = $this->env->getExtension("native_profiler");
        $__internal_dd1ef2df2202f98be8251f1ed9156cbd0686b219b63518346820ef611435c968->enter($__internal_dd1ef2df2202f98be8251f1ed9156cbd0686b219b63518346820ef611435c968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_dd1ef2df2202f98be8251f1ed9156cbd0686b219b63518346820ef611435c968->leave($__internal_dd1ef2df2202f98be8251f1ed9156cbd0686b219b63518346820ef611435c968_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
