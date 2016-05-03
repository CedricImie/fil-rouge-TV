<?php

/* :saisons:new.html.twig */
class __TwigTemplate_000e88bd547f32ef6e3b6a442aca37a6784e8ab317bec9032a77fb613588e68d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":saisons:new.html.twig", 1);
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
        $__internal_279ede8ba6df3c9798ae66e4c8eb81a83d4ae86b6e4dac36fe9f8bd82f394827 = $this->env->getExtension("native_profiler");
        $__internal_279ede8ba6df3c9798ae66e4c8eb81a83d4ae86b6e4dac36fe9f8bd82f394827->enter($__internal_279ede8ba6df3c9798ae66e4c8eb81a83d4ae86b6e4dac36fe9f8bd82f394827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":saisons:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_279ede8ba6df3c9798ae66e4c8eb81a83d4ae86b6e4dac36fe9f8bd82f394827->leave($__internal_279ede8ba6df3c9798ae66e4c8eb81a83d4ae86b6e4dac36fe9f8bd82f394827_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_deb95f7b9aaa7c716226b33cfd0f79327b90642fd41f59ae2ead7946ecd9ac4b = $this->env->getExtension("native_profiler");
        $__internal_deb95f7b9aaa7c716226b33cfd0f79327b90642fd41f59ae2ead7946ecd9ac4b->enter($__internal_deb95f7b9aaa7c716226b33cfd0f79327b90642fd41f59ae2ead7946ecd9ac4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Saisons creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("saisons_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_deb95f7b9aaa7c716226b33cfd0f79327b90642fd41f59ae2ead7946ecd9ac4b->leave($__internal_deb95f7b9aaa7c716226b33cfd0f79327b90642fd41f59ae2ead7946ecd9ac4b_prof);

    }

    public function getTemplateName()
    {
        return ":saisons:new.html.twig";
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
/*     <h1>Saisons creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('saisons_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
