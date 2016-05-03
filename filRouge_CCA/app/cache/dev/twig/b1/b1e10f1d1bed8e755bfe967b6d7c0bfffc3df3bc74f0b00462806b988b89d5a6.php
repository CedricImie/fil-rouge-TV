<?php

/* series/edit.html.twig */
class __TwigTemplate_77cfd0f0494a2e8776260db13262f4611d518f88288497b7ab6e71f0b5853b88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "series/edit.html.twig", 1);
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
        $__internal_74010527002163d1bf5fa731f84eeab4095a7a841c714c6ba72df5496b31171c = $this->env->getExtension("native_profiler");
        $__internal_74010527002163d1bf5fa731f84eeab4095a7a841c714c6ba72df5496b31171c->enter($__internal_74010527002163d1bf5fa731f84eeab4095a7a841c714c6ba72df5496b31171c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "series/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74010527002163d1bf5fa731f84eeab4095a7a841c714c6ba72df5496b31171c->leave($__internal_74010527002163d1bf5fa731f84eeab4095a7a841c714c6ba72df5496b31171c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd81dd129fa139a4264c28882ebaf778420ea794b4464d0372da85514aaa8f5b = $this->env->getExtension("native_profiler");
        $__internal_fd81dd129fa139a4264c28882ebaf778420ea794b4464d0372da85514aaa8f5b->enter($__internal_fd81dd129fa139a4264c28882ebaf778420ea794b4464d0372da85514aaa8f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TalkSeries";
        
        $__internal_fd81dd129fa139a4264c28882ebaf778420ea794b4464d0372da85514aaa8f5b->leave($__internal_fd81dd129fa139a4264c28882ebaf778420ea794b4464d0372da85514aaa8f5b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b1fb553d612ff9c14a8208646f354858bca63d7d7f902ae25c43972a5a93ba2 = $this->env->getExtension("native_profiler");
        $__internal_4b1fb553d612ff9c14a8208646f354858bca63d7d7f902ae25c43972a5a93ba2->enter($__internal_4b1fb553d612ff9c14a8208646f354858bca63d7d7f902ae25c43972a5a93ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MovieBundle:Default:header"));
        echo "

<div class=\"btnEdit\">
    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("series_index");
        echo "\" class=\"btn btn-default\">Liste des séries</a>
    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("series_show", array("id" => $this->getAttribute((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">Revenir aux détails</a>
</div>

<div class=\"H1Edit\">
    <h1>Editer la série</h1>
</div>

    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

<div class=\"btnEditDel\">
    ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
    ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</div>

";
        // line 28
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MovieBundle:Default:footer"));
        echo "

";
        
        $__internal_4b1fb553d612ff9c14a8208646f354858bca63d7d7f902ae25c43972a5a93ba2->leave($__internal_4b1fb553d612ff9c14a8208646f354858bca63d7d7f902ae25c43972a5a93ba2_prof);

    }

    public function getTemplateName()
    {
        return "series/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 28,  96 => 25,  91 => 23,  85 => 20,  80 => 18,  76 => 17,  66 => 10,  62 => 9,  56 => 6,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}TalkSeries{% endblock %}*/
/* {% block body %}*/
/* */
/* {{ render(controller('MovieBundle:Default:header')) }}*/
/* */
/* <div class="btnEdit">*/
/*     <a href="{{ path('series_index') }}" class="btn btn-default">Liste des séries</a>*/
/*     <a href="{{ path('series_show', { 'id': series.id }) }}" class="btn btn-default">Revenir aux détails</a>*/
/* </div>*/
/* */
/* <div class="H1Edit">*/
/*     <h1>Editer la série</h1>*/
/* </div>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/* <div class="btnEditDel">*/
/*     {{ form_start(delete_form) }}*/
/*         <button type="submit" class="btn btn-danger">Supprimer</button>*/
/*     {{ form_end(delete_form) }}*/
/* </div>*/
/* */
/* {{ render(controller('MovieBundle:Default:footer')) }}*/
/* */
/* {% endblock %}*/
/* */
