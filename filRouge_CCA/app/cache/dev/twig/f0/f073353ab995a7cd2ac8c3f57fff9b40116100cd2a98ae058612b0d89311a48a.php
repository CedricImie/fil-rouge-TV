<?php

/* series/new.html.twig */
class __TwigTemplate_c9c26d3f005ac33e4480f0d91ec6c4e99946d93cd177d6d89575726b6392fd38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "series/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5129e73501877a2cf99fcaa7158c6ab0c9d241b2d5918222547c889ded99ebd7 = $this->env->getExtension("native_profiler");
        $__internal_5129e73501877a2cf99fcaa7158c6ab0c9d241b2d5918222547c889ded99ebd7->enter($__internal_5129e73501877a2cf99fcaa7158c6ab0c9d241b2d5918222547c889ded99ebd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "series/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5129e73501877a2cf99fcaa7158c6ab0c9d241b2d5918222547c889ded99ebd7->leave($__internal_5129e73501877a2cf99fcaa7158c6ab0c9d241b2d5918222547c889ded99ebd7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ac1ace4cc9fb0823ac1192e202e5334e4e48382505620ba4d73a5e3eeed5cd8 = $this->env->getExtension("native_profiler");
        $__internal_5ac1ace4cc9fb0823ac1192e202e5334e4e48382505620ba4d73a5e3eeed5cd8->enter($__internal_5ac1ace4cc9fb0823ac1192e202e5334e4e48382505620ba4d73a5e3eeed5cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TalkSeries";
        
        $__internal_5ac1ace4cc9fb0823ac1192e202e5334e4e48382505620ba4d73a5e3eeed5cd8->leave($__internal_5ac1ace4cc9fb0823ac1192e202e5334e4e48382505620ba4d73a5e3eeed5cd8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_eedc424235dfa4b18b3a485af331594511bb038a8eeaf434599e7ef3da67064b = $this->env->getExtension("native_profiler");
        $__internal_eedc424235dfa4b18b3a485af331594511bb038a8eeaf434599e7ef3da67064b->enter($__internal_eedc424235dfa4b18b3a485af331594511bb038a8eeaf434599e7ef3da67064b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MovieBundle:Default:header"));
        echo "

<div class=\"btnNewSerie\">
    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("series_index");
        echo "\" class=\"btn btn-default\">Retour à la liste des séries</a>
</div>

<div class=\"H1NewSerie\">
    <h1>Nouvelle série</h1>
</div>

    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        // line 21
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MovieBundle:Default:footer"));
        echo "

";
        
        $__internal_eedc424235dfa4b18b3a485af331594511bb038a8eeaf434599e7ef3da67064b->leave($__internal_eedc424235dfa4b18b3a485af331594511bb038a8eeaf434599e7ef3da67064b_prof);

    }

    public function getTemplateName()
    {
        return "series/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 21,  81 => 19,  76 => 17,  72 => 16,  62 => 9,  56 => 6,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}TalkSeries{% endblock %}*/
/* {% block body %}*/
/* */
/* {{ render(controller('MovieBundle:Default:header')) }}*/
/* */
/* <div class="btnNewSerie">*/
/*     <a href="{{ path('series_index') }}" class="btn btn-default">Retour à la liste des séries</a>*/
/* </div>*/
/* */
/* <div class="H1NewSerie">*/
/*     <h1>Nouvelle série</h1>*/
/* </div>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/* {{ render(controller('MovieBundle:Default:footer')) }}*/
/* */
/* {% endblock %}*/
/* */
