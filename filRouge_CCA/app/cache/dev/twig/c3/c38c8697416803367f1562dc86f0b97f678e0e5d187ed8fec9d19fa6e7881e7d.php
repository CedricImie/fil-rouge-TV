<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_92ea548b8a4a4a84ac022b08ed3fa51b2526b25add9a53c7b5697c39ff315e6d extends Twig_Template
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
        $__internal_67a33427281d2e621f9bbd0b032314889ea62c1b9a6487411fed1e3aa2a93b49 = $this->env->getExtension("native_profiler");
        $__internal_67a33427281d2e621f9bbd0b032314889ea62c1b9a6487411fed1e3aa2a93b49->enter($__internal_67a33427281d2e621f9bbd0b032314889ea62c1b9a6487411fed1e3aa2a93b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67a33427281d2e621f9bbd0b032314889ea62c1b9a6487411fed1e3aa2a93b49->leave($__internal_67a33427281d2e621f9bbd0b032314889ea62c1b9a6487411fed1e3aa2a93b49_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6307f1ef62829f2502e839cdd32af956b06e7b4e8dc9a8d1bcbd69a78dd4816 = $this->env->getExtension("native_profiler");
        $__internal_c6307f1ef62829f2502e839cdd32af956b06e7b4e8dc9a8d1bcbd69a78dd4816->enter($__internal_c6307f1ef62829f2502e839cdd32af956b06e7b4e8dc9a8d1bcbd69a78dd4816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c6307f1ef62829f2502e839cdd32af956b06e7b4e8dc9a8d1bcbd69a78dd4816->leave($__internal_c6307f1ef62829f2502e839cdd32af956b06e7b4e8dc9a8d1bcbd69a78dd4816_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7088bfbbefbc4b4d2ef7a902aabba2594d8ba99e3ee539db7f709774dc682b5 = $this->env->getExtension("native_profiler");
        $__internal_a7088bfbbefbc4b4d2ef7a902aabba2594d8ba99e3ee539db7f709774dc682b5->enter($__internal_a7088bfbbefbc4b4d2ef7a902aabba2594d8ba99e3ee539db7f709774dc682b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a7088bfbbefbc4b4d2ef7a902aabba2594d8ba99e3ee539db7f709774dc682b5->leave($__internal_a7088bfbbefbc4b4d2ef7a902aabba2594d8ba99e3ee539db7f709774dc682b5_prof);

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
