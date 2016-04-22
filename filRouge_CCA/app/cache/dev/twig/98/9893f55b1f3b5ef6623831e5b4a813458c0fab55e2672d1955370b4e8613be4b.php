<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e45a156980478d9bb8553dd8b7c331d07365ec0c786439e4dee1e60faa9a01ae extends Twig_Template
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
        $__internal_06e6b696dc2e9495449832089f086084edd9b69cdd7129aae563d8cec93bd249 = $this->env->getExtension("native_profiler");
        $__internal_06e6b696dc2e9495449832089f086084edd9b69cdd7129aae563d8cec93bd249->enter($__internal_06e6b696dc2e9495449832089f086084edd9b69cdd7129aae563d8cec93bd249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06e6b696dc2e9495449832089f086084edd9b69cdd7129aae563d8cec93bd249->leave($__internal_06e6b696dc2e9495449832089f086084edd9b69cdd7129aae563d8cec93bd249_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e6dc4da5e10bdad77a87b40399fd484fbbb7578056d2fb3e9a44dbf9b3ebb28a = $this->env->getExtension("native_profiler");
        $__internal_e6dc4da5e10bdad77a87b40399fd484fbbb7578056d2fb3e9a44dbf9b3ebb28a->enter($__internal_e6dc4da5e10bdad77a87b40399fd484fbbb7578056d2fb3e9a44dbf9b3ebb28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e6dc4da5e10bdad77a87b40399fd484fbbb7578056d2fb3e9a44dbf9b3ebb28a->leave($__internal_e6dc4da5e10bdad77a87b40399fd484fbbb7578056d2fb3e9a44dbf9b3ebb28a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e795e28143a92d9621f63f4d866b734dfbc265989e51574b07ac91e4d3b51a0 = $this->env->getExtension("native_profiler");
        $__internal_6e795e28143a92d9621f63f4d866b734dfbc265989e51574b07ac91e4d3b51a0->enter($__internal_6e795e28143a92d9621f63f4d866b734dfbc265989e51574b07ac91e4d3b51a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6e795e28143a92d9621f63f4d866b734dfbc265989e51574b07ac91e4d3b51a0->leave($__internal_6e795e28143a92d9621f63f4d866b734dfbc265989e51574b07ac91e4d3b51a0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e92576d01da96d4b9268ec3914ba2cd1f07563f6f45377bf2db4f7d01041052 = $this->env->getExtension("native_profiler");
        $__internal_2e92576d01da96d4b9268ec3914ba2cd1f07563f6f45377bf2db4f7d01041052->enter($__internal_2e92576d01da96d4b9268ec3914ba2cd1f07563f6f45377bf2db4f7d01041052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2e92576d01da96d4b9268ec3914ba2cd1f07563f6f45377bf2db4f7d01041052->leave($__internal_2e92576d01da96d4b9268ec3914ba2cd1f07563f6f45377bf2db4f7d01041052_prof);

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
