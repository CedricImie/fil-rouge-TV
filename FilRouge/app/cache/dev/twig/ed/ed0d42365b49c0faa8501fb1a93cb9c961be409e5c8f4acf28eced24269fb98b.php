<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c2ff0061d7029d1b1cf4f092e56c726d0090ccfad31038f609d7722435d78473 extends Twig_Template
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
        $__internal_467226bf9c7a57493cdd460834cfecca2eeee5459999469341730fdd4188f3ec = $this->env->getExtension("native_profiler");
        $__internal_467226bf9c7a57493cdd460834cfecca2eeee5459999469341730fdd4188f3ec->enter($__internal_467226bf9c7a57493cdd460834cfecca2eeee5459999469341730fdd4188f3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_467226bf9c7a57493cdd460834cfecca2eeee5459999469341730fdd4188f3ec->leave($__internal_467226bf9c7a57493cdd460834cfecca2eeee5459999469341730fdd4188f3ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4d3402b65d0ddf48d744c3338312169e129f8555926ae619dd8f44d202716f55 = $this->env->getExtension("native_profiler");
        $__internal_4d3402b65d0ddf48d744c3338312169e129f8555926ae619dd8f44d202716f55->enter($__internal_4d3402b65d0ddf48d744c3338312169e129f8555926ae619dd8f44d202716f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4d3402b65d0ddf48d744c3338312169e129f8555926ae619dd8f44d202716f55->leave($__internal_4d3402b65d0ddf48d744c3338312169e129f8555926ae619dd8f44d202716f55_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b155b11df672437242beaf762028bc88346577a0e3174e292a7356b72b7337fd = $this->env->getExtension("native_profiler");
        $__internal_b155b11df672437242beaf762028bc88346577a0e3174e292a7356b72b7337fd->enter($__internal_b155b11df672437242beaf762028bc88346577a0e3174e292a7356b72b7337fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b155b11df672437242beaf762028bc88346577a0e3174e292a7356b72b7337fd->leave($__internal_b155b11df672437242beaf762028bc88346577a0e3174e292a7356b72b7337fd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_35daa237fd54ed4be1cce1c4626c1081bdb8d3a4e53ce3671dcb219c8cf85244 = $this->env->getExtension("native_profiler");
        $__internal_35daa237fd54ed4be1cce1c4626c1081bdb8d3a4e53ce3671dcb219c8cf85244->enter($__internal_35daa237fd54ed4be1cce1c4626c1081bdb8d3a4e53ce3671dcb219c8cf85244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_35daa237fd54ed4be1cce1c4626c1081bdb8d3a4e53ce3671dcb219c8cf85244->leave($__internal_35daa237fd54ed4be1cce1c4626c1081bdb8d3a4e53ce3671dcb219c8cf85244_prof);

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
