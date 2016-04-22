<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dee047ca30798d9f584e2e7c78713e0471f30ef2fa3f95bca299ace8a4fe035d extends Twig_Template
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
        $__internal_cec06609e1db76404ac1969fa3148097a61a1bb90eb1599bdd1bf47a2c151299 = $this->env->getExtension("native_profiler");
        $__internal_cec06609e1db76404ac1969fa3148097a61a1bb90eb1599bdd1bf47a2c151299->enter($__internal_cec06609e1db76404ac1969fa3148097a61a1bb90eb1599bdd1bf47a2c151299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cec06609e1db76404ac1969fa3148097a61a1bb90eb1599bdd1bf47a2c151299->leave($__internal_cec06609e1db76404ac1969fa3148097a61a1bb90eb1599bdd1bf47a2c151299_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1333a680a84aa887cbceef5f2495a51c4c6e273416d682fbce248db102e6622f = $this->env->getExtension("native_profiler");
        $__internal_1333a680a84aa887cbceef5f2495a51c4c6e273416d682fbce248db102e6622f->enter($__internal_1333a680a84aa887cbceef5f2495a51c4c6e273416d682fbce248db102e6622f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1333a680a84aa887cbceef5f2495a51c4c6e273416d682fbce248db102e6622f->leave($__internal_1333a680a84aa887cbceef5f2495a51c4c6e273416d682fbce248db102e6622f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6162a904c8a0b3d09dadcceed8a0ca9e58a494a3e606944c8fe6373dbf9e51e = $this->env->getExtension("native_profiler");
        $__internal_c6162a904c8a0b3d09dadcceed8a0ca9e58a494a3e606944c8fe6373dbf9e51e->enter($__internal_c6162a904c8a0b3d09dadcceed8a0ca9e58a494a3e606944c8fe6373dbf9e51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c6162a904c8a0b3d09dadcceed8a0ca9e58a494a3e606944c8fe6373dbf9e51e->leave($__internal_c6162a904c8a0b3d09dadcceed8a0ca9e58a494a3e606944c8fe6373dbf9e51e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf5f1fa53d6ff27a4441ccf71f028b54ddd6ec988f018de4660291e6fcc47ec6 = $this->env->getExtension("native_profiler");
        $__internal_bf5f1fa53d6ff27a4441ccf71f028b54ddd6ec988f018de4660291e6fcc47ec6->enter($__internal_bf5f1fa53d6ff27a4441ccf71f028b54ddd6ec988f018de4660291e6fcc47ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bf5f1fa53d6ff27a4441ccf71f028b54ddd6ec988f018de4660291e6fcc47ec6->leave($__internal_bf5f1fa53d6ff27a4441ccf71f028b54ddd6ec988f018de4660291e6fcc47ec6_prof);

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
