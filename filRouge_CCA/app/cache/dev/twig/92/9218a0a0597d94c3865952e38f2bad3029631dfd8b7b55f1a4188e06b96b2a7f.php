<?php

/* :scenaristes:new.html.twig */
class __TwigTemplate_232fa65444721f790e37f3c99c8e29149c6fe52f428cc99c093acb72c827f08f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":scenaristes:new.html.twig", 1);
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
        $__internal_24c86196afdb52f4c23706ce9c50b5fec975508f619c7851c20d7c1a9fd6ddce = $this->env->getExtension("native_profiler");
        $__internal_24c86196afdb52f4c23706ce9c50b5fec975508f619c7851c20d7c1a9fd6ddce->enter($__internal_24c86196afdb52f4c23706ce9c50b5fec975508f619c7851c20d7c1a9fd6ddce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":scenaristes:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24c86196afdb52f4c23706ce9c50b5fec975508f619c7851c20d7c1a9fd6ddce->leave($__internal_24c86196afdb52f4c23706ce9c50b5fec975508f619c7851c20d7c1a9fd6ddce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_59ef716c58abb9c08c42bd48b9b5d78a0f283ba7d513f95047ee084041e84068 = $this->env->getExtension("native_profiler");
        $__internal_59ef716c58abb9c08c42bd48b9b5d78a0f283ba7d513f95047ee084041e84068->enter($__internal_59ef716c58abb9c08c42bd48b9b5d78a0f283ba7d513f95047ee084041e84068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Scenaristes creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("scenaristes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_59ef716c58abb9c08c42bd48b9b5d78a0f283ba7d513f95047ee084041e84068->leave($__internal_59ef716c58abb9c08c42bd48b9b5d78a0f283ba7d513f95047ee084041e84068_prof);

    }

    public function getTemplateName()
    {
        return ":scenaristes:new.html.twig";
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
/*     <h1>Scenaristes creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('scenaristes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
