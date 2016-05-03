<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_f6f83343fd60b9cd4a04ba447530dd02be5ce125408be06e2efc4219b7d0270d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cedc721c17e34d52837c6f30d5cf8f4421bb9aba1d3503bccc637c802d40f72f = $this->env->getExtension("native_profiler");
        $__internal_cedc721c17e34d52837c6f30d5cf8f4421bb9aba1d3503bccc637c802d40f72f->enter($__internal_cedc721c17e34d52837c6f30d5cf8f4421bb9aba1d3503bccc637c802d40f72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cedc721c17e34d52837c6f30d5cf8f4421bb9aba1d3503bccc637c802d40f72f->leave($__internal_cedc721c17e34d52837c6f30d5cf8f4421bb9aba1d3503bccc637c802d40f72f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5070ce5dc20a9cf99aa6894599303a01c5f7f0cc085fdca1a9a326faafcf94f = $this->env->getExtension("native_profiler");
        $__internal_d5070ce5dc20a9cf99aa6894599303a01c5f7f0cc085fdca1a9a326faafcf94f->enter($__internal_d5070ce5dc20a9cf99aa6894599303a01c5f7f0cc085fdca1a9a326faafcf94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_d5070ce5dc20a9cf99aa6894599303a01c5f7f0cc085fdca1a9a326faafcf94f->leave($__internal_d5070ce5dc20a9cf99aa6894599303a01c5f7f0cc085fdca1a9a326faafcf94f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
