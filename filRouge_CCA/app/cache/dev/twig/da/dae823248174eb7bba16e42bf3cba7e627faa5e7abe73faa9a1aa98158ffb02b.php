<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2dff874a5346558537d2d68d82940e3426b55ffe4582fba80020ddaffca881b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfaf6bef0b8e990a0056340535e281304e117a01a357944aede3b29264334f81 = $this->env->getExtension("native_profiler");
        $__internal_bfaf6bef0b8e990a0056340535e281304e117a01a357944aede3b29264334f81->enter($__internal_bfaf6bef0b8e990a0056340535e281304e117a01a357944aede3b29264334f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfaf6bef0b8e990a0056340535e281304e117a01a357944aede3b29264334f81->leave($__internal_bfaf6bef0b8e990a0056340535e281304e117a01a357944aede3b29264334f81_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e09dc4be2d3b469ba1fad60cbb2fc195fc02c158dcec97a19dc26e1f5807b99f = $this->env->getExtension("native_profiler");
        $__internal_e09dc4be2d3b469ba1fad60cbb2fc195fc02c158dcec97a19dc26e1f5807b99f->enter($__internal_e09dc4be2d3b469ba1fad60cbb2fc195fc02c158dcec97a19dc26e1f5807b99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e09dc4be2d3b469ba1fad60cbb2fc195fc02c158dcec97a19dc26e1f5807b99f->leave($__internal_e09dc4be2d3b469ba1fad60cbb2fc195fc02c158dcec97a19dc26e1f5807b99f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_83ce574bd890fdcd763c70b7bb2e52c8329379289534127ab74d1a7ae779da20 = $this->env->getExtension("native_profiler");
        $__internal_83ce574bd890fdcd763c70b7bb2e52c8329379289534127ab74d1a7ae779da20->enter($__internal_83ce574bd890fdcd763c70b7bb2e52c8329379289534127ab74d1a7ae779da20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_83ce574bd890fdcd763c70b7bb2e52c8329379289534127ab74d1a7ae779da20->leave($__internal_83ce574bd890fdcd763c70b7bb2e52c8329379289534127ab74d1a7ae779da20_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f80586550e7774a73107d4508698d3e1e64735183ca5dcd00a541bd7ec30f55 = $this->env->getExtension("native_profiler");
        $__internal_3f80586550e7774a73107d4508698d3e1e64735183ca5dcd00a541bd7ec30f55->enter($__internal_3f80586550e7774a73107d4508698d3e1e64735183ca5dcd00a541bd7ec30f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3f80586550e7774a73107d4508698d3e1e64735183ca5dcd00a541bd7ec30f55->leave($__internal_3f80586550e7774a73107d4508698d3e1e64735183ca5dcd00a541bd7ec30f55_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
