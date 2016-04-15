<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c9f1a0ca7762432bea1afaad5b928ff5a5bece069a0d71fcf6657e3ec94e3c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f8c09240f56e693d7e50d1e60aa0edbb8fc163d0f60f650502c0f24637dbcc6e = $this->env->getExtension("native_profiler");
        $__internal_f8c09240f56e693d7e50d1e60aa0edbb8fc163d0f60f650502c0f24637dbcc6e->enter($__internal_f8c09240f56e693d7e50d1e60aa0edbb8fc163d0f60f650502c0f24637dbcc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8c09240f56e693d7e50d1e60aa0edbb8fc163d0f60f650502c0f24637dbcc6e->leave($__internal_f8c09240f56e693d7e50d1e60aa0edbb8fc163d0f60f650502c0f24637dbcc6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_365e55fe42bb38579af338874e6b315370e723c55768c6af792da48f868b453e = $this->env->getExtension("native_profiler");
        $__internal_365e55fe42bb38579af338874e6b315370e723c55768c6af792da48f868b453e->enter($__internal_365e55fe42bb38579af338874e6b315370e723c55768c6af792da48f868b453e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_365e55fe42bb38579af338874e6b315370e723c55768c6af792da48f868b453e->leave($__internal_365e55fe42bb38579af338874e6b315370e723c55768c6af792da48f868b453e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_735f680db9f3273042904010b25be384dab2ec2680057e66c5df228fe9d2cfc7 = $this->env->getExtension("native_profiler");
        $__internal_735f680db9f3273042904010b25be384dab2ec2680057e66c5df228fe9d2cfc7->enter($__internal_735f680db9f3273042904010b25be384dab2ec2680057e66c5df228fe9d2cfc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_735f680db9f3273042904010b25be384dab2ec2680057e66c5df228fe9d2cfc7->leave($__internal_735f680db9f3273042904010b25be384dab2ec2680057e66c5df228fe9d2cfc7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb10953a56e0d854c5d44284518868d6184ee56a8c7ff3604aaa1b669a6a353f = $this->env->getExtension("native_profiler");
        $__internal_bb10953a56e0d854c5d44284518868d6184ee56a8c7ff3604aaa1b669a6a353f->enter($__internal_bb10953a56e0d854c5d44284518868d6184ee56a8c7ff3604aaa1b669a6a353f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bb10953a56e0d854c5d44284518868d6184ee56a8c7ff3604aaa1b669a6a353f->leave($__internal_bb10953a56e0d854c5d44284518868d6184ee56a8c7ff3604aaa1b669a6a353f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
