<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ee9f85e22061ca20ec92bf4a776d41dac6ddcff2a29ab95941e2fd31615c8d4f extends Twig_Template
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
        $__internal_18190c0510771f813044d391d30ebb63c28bd59494846a590239d707cd573f49 = $this->env->getExtension("native_profiler");
        $__internal_18190c0510771f813044d391d30ebb63c28bd59494846a590239d707cd573f49->enter($__internal_18190c0510771f813044d391d30ebb63c28bd59494846a590239d707cd573f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18190c0510771f813044d391d30ebb63c28bd59494846a590239d707cd573f49->leave($__internal_18190c0510771f813044d391d30ebb63c28bd59494846a590239d707cd573f49_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_de8ecd0b9b1c509bde11618e629b539cf5f61ea4a0f104fb346116947761e425 = $this->env->getExtension("native_profiler");
        $__internal_de8ecd0b9b1c509bde11618e629b539cf5f61ea4a0f104fb346116947761e425->enter($__internal_de8ecd0b9b1c509bde11618e629b539cf5f61ea4a0f104fb346116947761e425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_de8ecd0b9b1c509bde11618e629b539cf5f61ea4a0f104fb346116947761e425->leave($__internal_de8ecd0b9b1c509bde11618e629b539cf5f61ea4a0f104fb346116947761e425_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_76d052cab1cb0e3a56723f74a3c313cfd413e6097e5bc3b2b3cf852687b2c982 = $this->env->getExtension("native_profiler");
        $__internal_76d052cab1cb0e3a56723f74a3c313cfd413e6097e5bc3b2b3cf852687b2c982->enter($__internal_76d052cab1cb0e3a56723f74a3c313cfd413e6097e5bc3b2b3cf852687b2c982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_76d052cab1cb0e3a56723f74a3c313cfd413e6097e5bc3b2b3cf852687b2c982->leave($__internal_76d052cab1cb0e3a56723f74a3c313cfd413e6097e5bc3b2b3cf852687b2c982_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93c51d56049e4cd474c2f2ab7f17095e8afd6692ad25e70724f7a1bfb71580e3 = $this->env->getExtension("native_profiler");
        $__internal_93c51d56049e4cd474c2f2ab7f17095e8afd6692ad25e70724f7a1bfb71580e3->enter($__internal_93c51d56049e4cd474c2f2ab7f17095e8afd6692ad25e70724f7a1bfb71580e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_93c51d56049e4cd474c2f2ab7f17095e8afd6692ad25e70724f7a1bfb71580e3->leave($__internal_93c51d56049e4cd474c2f2ab7f17095e8afd6692ad25e70724f7a1bfb71580e3_prof);

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
