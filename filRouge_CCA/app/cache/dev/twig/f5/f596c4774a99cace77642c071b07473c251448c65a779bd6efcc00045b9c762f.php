<?php

/* series/show.html.twig */
class __TwigTemplate_a6a2f59510a28da0835b8035a80aaf867c9a13d04fbc155d7514b46fea571e7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "series/show.html.twig", 1);
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
        $__internal_eed618a2d435173c73ec3a1a931db8f72f1c76f632cc9e0fb3dffd9ccc0f25fa = $this->env->getExtension("native_profiler");
        $__internal_eed618a2d435173c73ec3a1a931db8f72f1c76f632cc9e0fb3dffd9ccc0f25fa->enter($__internal_eed618a2d435173c73ec3a1a931db8f72f1c76f632cc9e0fb3dffd9ccc0f25fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "series/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eed618a2d435173c73ec3a1a931db8f72f1c76f632cc9e0fb3dffd9ccc0f25fa->leave($__internal_eed618a2d435173c73ec3a1a931db8f72f1c76f632cc9e0fb3dffd9ccc0f25fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_50d899229ee4f3c7b817f2d9e3d08e6bcaba54eadadc81d81fdbd0accbddcdb0 = $this->env->getExtension("native_profiler");
        $__internal_50d899229ee4f3c7b817f2d9e3d08e6bcaba54eadadc81d81fdbd0accbddcdb0->enter($__internal_50d899229ee4f3c7b817f2d9e3d08e6bcaba54eadadc81d81fdbd0accbddcdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TalkSeries";
        
        $__internal_50d899229ee4f3c7b817f2d9e3d08e6bcaba54eadadc81d81fdbd0accbddcdb0->leave($__internal_50d899229ee4f3c7b817f2d9e3d08e6bcaba54eadadc81d81fdbd0accbddcdb0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7f212e7e83baf696d3cbc75a880f54b2cf2dffb44e979be5bdd9e82123ededb = $this->env->getExtension("native_profiler");
        $__internal_d7f212e7e83baf696d3cbc75a880f54b2cf2dffb44e979be5bdd9e82123ededb->enter($__internal_d7f212e7e83baf696d3cbc75a880f54b2cf2dffb44e979be5bdd9e82123ededb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MovieBundle:Default:header"));
        echo "

<div class=\"H1serie\">
    <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")), "nomSerie", array()), "html", null, true);
        echo "</h1>
</div>

<div class=\"btnSerie\">
    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("series_index");
        echo "\" class=\"btn btn-default\">Liste des séries</a>
    <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("series_edit", array("id" => $this->getAttribute((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">Editer</a>
</div>
";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

<table>
    <tbody>
        <tr>
            <th>Nom de la série</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")), "nomSerie", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Affiche</th>
            <td><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")), "posterSerie", array()), "html", null, true);
        echo "\"</td>
        </tr>
        <tr>
            <th>Résumé</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")), "resumeSerie", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Date de création</th>
            <td>";
        // line 35
        if ($this->getAttribute((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")), "dateCreationSerie", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")), "dateCreationSerie", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
        </tr>
        <tr>
            <th>Note moyenne</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")), "noteMoyenneSerie", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nb d'abonnés</th>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")), "nbAbonneSerie", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Casting</th>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")), "castingSerie", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Genre</th>
            <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")), "genreSerie", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Date de diffusion</th>
            <td>";
        // line 55
        if ($this->getAttribute((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")), "diffusionSerie", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")), "diffusionSerie", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
        </tr>
    </tbody>
</table>

";
        // line 60
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MovieBundle:Default:footer"));
        echo "

";
        
        $__internal_d7f212e7e83baf696d3cbc75a880f54b2cf2dffb44e979be5bdd9e82123ededb->leave($__internal_d7f212e7e83baf696d3cbc75a880f54b2cf2dffb44e979be5bdd9e82123ededb_prof);

    }

    public function getTemplateName()
    {
        return "series/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 60,  149 => 55,  142 => 51,  135 => 47,  128 => 43,  121 => 39,  112 => 35,  105 => 31,  98 => 27,  91 => 23,  82 => 17,  78 => 16,  73 => 14,  69 => 13,  62 => 9,  56 => 6,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}TalkSeries{% endblock %}*/
/* {% block body %}*/
/* */
/* {{ render(controller('MovieBundle:Default:header')) }}*/
/* */
/* <div class="H1serie">*/
/*     <h1>{{ series.nomSerie }}</h1>*/
/* </div>*/
/* */
/* <div class="btnSerie">*/
/*     <a href="{{ path('series_index') }}" class="btn btn-default">Liste des séries</a>*/
/*     <a href="{{ path('series_edit', { 'id': series.id }) }}" class="btn btn-default">Editer</a>*/
/* </div>*/
/* {{ form_start(delete_form) }}*/
/* {{ form_end(delete_form) }}*/
/* */
/* <table>*/
/*     <tbody>*/
/*         <tr>*/
/*             <th>Nom de la série</th>*/
/*             <td>{{ series.nomSerie }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Affiche</th>*/
/*             <td><img src="{{ series.posterSerie }}"</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Résumé</th>*/
/*             <td>{{ series.resumeSerie }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Date de création</th>*/
/*             <td>{% if series.dateCreationSerie %}{{ series.dateCreationSerie|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Note moyenne</th>*/
/*             <td>{{ series.noteMoyenneSerie }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Nb d'abonnés</th>*/
/*             <td>{{ series.nbAbonneSerie }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Casting</th>*/
/*             <td>{{ series.castingSerie }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Genre</th>*/
/*             <td>{{ series.genreSerie }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Date de diffusion</th>*/
/*             <td>{% if series.diffusionSerie %}{{ series.diffusionSerie|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*         </tr>*/
/*     </tbody>*/
/* </table>*/
/* */
/* {{ render(controller('MovieBundle:Default:footer')) }}*/
/* */
/* {% endblock %}*/
/* */
