<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_627725a2894424fa0187a6546d2a2f1402b6f3d307d6db6f530590692af435e3 extends Twig_Template
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
        $__internal_50ed5ed985ca8efaf7febe07ea96ce8ee729d0e3fc4cde633b5ac43efe33d718 = $this->env->getExtension("native_profiler");
        $__internal_50ed5ed985ca8efaf7febe07ea96ce8ee729d0e3fc4cde633b5ac43efe33d718->enter($__internal_50ed5ed985ca8efaf7febe07ea96ce8ee729d0e3fc4cde633b5ac43efe33d718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50ed5ed985ca8efaf7febe07ea96ce8ee729d0e3fc4cde633b5ac43efe33d718->leave($__internal_50ed5ed985ca8efaf7febe07ea96ce8ee729d0e3fc4cde633b5ac43efe33d718_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dbec0d7c67ee16fc8ee10cfb83cd7812a5c82f1df95e98f26c7fef9a8626c3c9 = $this->env->getExtension("native_profiler");
        $__internal_dbec0d7c67ee16fc8ee10cfb83cd7812a5c82f1df95e98f26c7fef9a8626c3c9->enter($__internal_dbec0d7c67ee16fc8ee10cfb83cd7812a5c82f1df95e98f26c7fef9a8626c3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dbec0d7c67ee16fc8ee10cfb83cd7812a5c82f1df95e98f26c7fef9a8626c3c9->leave($__internal_dbec0d7c67ee16fc8ee10cfb83cd7812a5c82f1df95e98f26c7fef9a8626c3c9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b76cd7660507642d3db888aa5522128d5cea1200de3646afb73aff5c1a81798c = $this->env->getExtension("native_profiler");
        $__internal_b76cd7660507642d3db888aa5522128d5cea1200de3646afb73aff5c1a81798c->enter($__internal_b76cd7660507642d3db888aa5522128d5cea1200de3646afb73aff5c1a81798c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b76cd7660507642d3db888aa5522128d5cea1200de3646afb73aff5c1a81798c->leave($__internal_b76cd7660507642d3db888aa5522128d5cea1200de3646afb73aff5c1a81798c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_223c4b28b280295998972242ceab25624a1f7ab141fa9842d0bfa60325c3b639 = $this->env->getExtension("native_profiler");
        $__internal_223c4b28b280295998972242ceab25624a1f7ab141fa9842d0bfa60325c3b639->enter($__internal_223c4b28b280295998972242ceab25624a1f7ab141fa9842d0bfa60325c3b639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_223c4b28b280295998972242ceab25624a1f7ab141fa9842d0bfa60325c3b639->leave($__internal_223c4b28b280295998972242ceab25624a1f7ab141fa9842d0bfa60325c3b639_prof);

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
