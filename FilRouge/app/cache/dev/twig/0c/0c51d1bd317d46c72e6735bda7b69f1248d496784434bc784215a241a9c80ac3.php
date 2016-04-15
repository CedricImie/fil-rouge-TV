<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a4bbe03b2a205ae7a0d68c907c4678f6d23dfac5fa6fee667b5ce68d3630b8bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_5d816522bef27bedace17a768099e2746c7753226e6190288f508fd6a9a51f32 = $this->env->getExtension("native_profiler");
        $__internal_5d816522bef27bedace17a768099e2746c7753226e6190288f508fd6a9a51f32->enter($__internal_5d816522bef27bedace17a768099e2746c7753226e6190288f508fd6a9a51f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d816522bef27bedace17a768099e2746c7753226e6190288f508fd6a9a51f32->leave($__internal_5d816522bef27bedace17a768099e2746c7753226e6190288f508fd6a9a51f32_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a433d36066ce04683dd807ee55728f12b6c5e4cf9dd9b867e9acad90229bfad0 = $this->env->getExtension("native_profiler");
        $__internal_a433d36066ce04683dd807ee55728f12b6c5e4cf9dd9b867e9acad90229bfad0->enter($__internal_a433d36066ce04683dd807ee55728f12b6c5e4cf9dd9b867e9acad90229bfad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a433d36066ce04683dd807ee55728f12b6c5e4cf9dd9b867e9acad90229bfad0->leave($__internal_a433d36066ce04683dd807ee55728f12b6c5e4cf9dd9b867e9acad90229bfad0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6de433762032b339ddb3447cc89f6b3c4f8e574f8a1720914ff3b7f795ac4be2 = $this->env->getExtension("native_profiler");
        $__internal_6de433762032b339ddb3447cc89f6b3c4f8e574f8a1720914ff3b7f795ac4be2->enter($__internal_6de433762032b339ddb3447cc89f6b3c4f8e574f8a1720914ff3b7f795ac4be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6de433762032b339ddb3447cc89f6b3c4f8e574f8a1720914ff3b7f795ac4be2->leave($__internal_6de433762032b339ddb3447cc89f6b3c4f8e574f8a1720914ff3b7f795ac4be2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
