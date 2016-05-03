<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a97376505c956728d806199c3572d1145c9df66a40a32ac55ccb4ebcf12dd179 extends Twig_Template
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
        $__internal_b4c269f9c18198d094a95b229516139eacc3ba43375d7415c2d032c4ca02c323 = $this->env->getExtension("native_profiler");
        $__internal_b4c269f9c18198d094a95b229516139eacc3ba43375d7415c2d032c4ca02c323->enter($__internal_b4c269f9c18198d094a95b229516139eacc3ba43375d7415c2d032c4ca02c323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4c269f9c18198d094a95b229516139eacc3ba43375d7415c2d032c4ca02c323->leave($__internal_b4c269f9c18198d094a95b229516139eacc3ba43375d7415c2d032c4ca02c323_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1d8dd68f2054ca3e1c2de85fdad0d8a931bbae66b9e7c1104ce9c9d0e287513 = $this->env->getExtension("native_profiler");
        $__internal_c1d8dd68f2054ca3e1c2de85fdad0d8a931bbae66b9e7c1104ce9c9d0e287513->enter($__internal_c1d8dd68f2054ca3e1c2de85fdad0d8a931bbae66b9e7c1104ce9c9d0e287513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c1d8dd68f2054ca3e1c2de85fdad0d8a931bbae66b9e7c1104ce9c9d0e287513->leave($__internal_c1d8dd68f2054ca3e1c2de85fdad0d8a931bbae66b9e7c1104ce9c9d0e287513_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9daf022391771d679968def25ab12b40699b919aca218a046defd867a4cdbed = $this->env->getExtension("native_profiler");
        $__internal_f9daf022391771d679968def25ab12b40699b919aca218a046defd867a4cdbed->enter($__internal_f9daf022391771d679968def25ab12b40699b919aca218a046defd867a4cdbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f9daf022391771d679968def25ab12b40699b919aca218a046defd867a4cdbed->leave($__internal_f9daf022391771d679968def25ab12b40699b919aca218a046defd867a4cdbed_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f10eedb009df3891bc67859168d6c5680dfd6a502c77bf41948fb66cd3787af5 = $this->env->getExtension("native_profiler");
        $__internal_f10eedb009df3891bc67859168d6c5680dfd6a502c77bf41948fb66cd3787af5->enter($__internal_f10eedb009df3891bc67859168d6c5680dfd6a502c77bf41948fb66cd3787af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f10eedb009df3891bc67859168d6c5680dfd6a502c77bf41948fb66cd3787af5->leave($__internal_f10eedb009df3891bc67859168d6c5680dfd6a502c77bf41948fb66cd3787af5_prof);

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
