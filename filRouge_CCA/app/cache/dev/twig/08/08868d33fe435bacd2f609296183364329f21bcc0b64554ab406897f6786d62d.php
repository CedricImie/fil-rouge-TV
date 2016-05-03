<?php

/* :episodes:new.html.twig */
class __TwigTemplate_764876df72ac36fc6e28d85302d2ef0e5fb2ac345e6c6660f1875d513cb253b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":episodes:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9f755f5994ff112fb68fbcbf3e0a2096873116071b8df366fb3c04100dd2d63 = $this->env->getExtension("native_profiler");
        $__internal_b9f755f5994ff112fb68fbcbf3e0a2096873116071b8df366fb3c04100dd2d63->enter($__internal_b9f755f5994ff112fb68fbcbf3e0a2096873116071b8df366fb3c04100dd2d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":episodes:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9f755f5994ff112fb68fbcbf3e0a2096873116071b8df366fb3c04100dd2d63->leave($__internal_b9f755f5994ff112fb68fbcbf3e0a2096873116071b8df366fb3c04100dd2d63_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a96494696d09bc58ced4f0f2ea69ec1d8f9e2cac3f3bc9a7c567193c4cce38f3 = $this->env->getExtension("native_profiler");
        $__internal_a96494696d09bc58ced4f0f2ea69ec1d8f9e2cac3f3bc9a7c567193c4cce38f3->enter($__internal_a96494696d09bc58ced4f0f2ea69ec1d8f9e2cac3f3bc9a7c567193c4cce38f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Episodes creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("episodes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a96494696d09bc58ced4f0f2ea69ec1d8f9e2cac3f3bc9a7c567193c4cce38f3->leave($__internal_a96494696d09bc58ced4f0f2ea69ec1d8f9e2cac3f3bc9a7c567193c4cce38f3_prof);

    }

    public function getTemplateName()
    {
        return ":episodes:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Episodes creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('episodes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
