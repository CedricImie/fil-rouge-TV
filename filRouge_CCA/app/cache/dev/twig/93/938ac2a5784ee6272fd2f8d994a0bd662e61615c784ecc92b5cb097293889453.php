<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_31c08d1ed5189bc6882814eb320c6c1ab5256d97de519e4536749bc57812c366 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f8a11b227f6a3b92e8d720362d70da79a134d969e0b2ad7262bf4a2c9640dd1 = $this->env->getExtension("native_profiler");
        $__internal_0f8a11b227f6a3b92e8d720362d70da79a134d969e0b2ad7262bf4a2c9640dd1->enter($__internal_0f8a11b227f6a3b92e8d720362d70da79a134d969e0b2ad7262bf4a2c9640dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f8a11b227f6a3b92e8d720362d70da79a134d969e0b2ad7262bf4a2c9640dd1->leave($__internal_0f8a11b227f6a3b92e8d720362d70da79a134d969e0b2ad7262bf4a2c9640dd1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_97e83a61d9340d80551fb4e95ed57dfe573e1f437f4e639e7e4e5c87b2a9a57d = $this->env->getExtension("native_profiler");
        $__internal_97e83a61d9340d80551fb4e95ed57dfe573e1f437f4e639e7e4e5c87b2a9a57d->enter($__internal_97e83a61d9340d80551fb4e95ed57dfe573e1f437f4e639e7e4e5c87b2a9a57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_97e83a61d9340d80551fb4e95ed57dfe573e1f437f4e639e7e4e5c87b2a9a57d->leave($__internal_97e83a61d9340d80551fb4e95ed57dfe573e1f437f4e639e7e4e5c87b2a9a57d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_230d266b7e1607bc0ab0c42a1f2dd02eda7789fb871d70446962874055d253a6 = $this->env->getExtension("native_profiler");
        $__internal_230d266b7e1607bc0ab0c42a1f2dd02eda7789fb871d70446962874055d253a6->enter($__internal_230d266b7e1607bc0ab0c42a1f2dd02eda7789fb871d70446962874055d253a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_230d266b7e1607bc0ab0c42a1f2dd02eda7789fb871d70446962874055d253a6->leave($__internal_230d266b7e1607bc0ab0c42a1f2dd02eda7789fb871d70446962874055d253a6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5f62b1c3a83b837a390efa2075574aa1c730d8e71f29e8889534a8a3cd5a6ed = $this->env->getExtension("native_profiler");
        $__internal_c5f62b1c3a83b837a390efa2075574aa1c730d8e71f29e8889534a8a3cd5a6ed->enter($__internal_c5f62b1c3a83b837a390efa2075574aa1c730d8e71f29e8889534a8a3cd5a6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c5f62b1c3a83b837a390efa2075574aa1c730d8e71f29e8889534a8a3cd5a6ed->leave($__internal_c5f62b1c3a83b837a390efa2075574aa1c730d8e71f29e8889534a8a3cd5a6ed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
