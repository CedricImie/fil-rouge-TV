<?php

/* :acteurs:new.html.twig */
class __TwigTemplate_dd59a5f6e656cffd92ed05e52a602e39a4966ec6307416371ca9157f0445a118 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":acteurs:new.html.twig", 1);
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
        $__internal_f84d6c7916f1b48d04cac0049c8feaae673d3fc7a7c1b5addb54a85845f75efa = $this->env->getExtension("native_profiler");
        $__internal_f84d6c7916f1b48d04cac0049c8feaae673d3fc7a7c1b5addb54a85845f75efa->enter($__internal_f84d6c7916f1b48d04cac0049c8feaae673d3fc7a7c1b5addb54a85845f75efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":acteurs:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f84d6c7916f1b48d04cac0049c8feaae673d3fc7a7c1b5addb54a85845f75efa->leave($__internal_f84d6c7916f1b48d04cac0049c8feaae673d3fc7a7c1b5addb54a85845f75efa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6a20dc125b0dd9e9b7c051f4e0c18d28ea2967194cb7dccfcd78e30467f4c33 = $this->env->getExtension("native_profiler");
        $__internal_e6a20dc125b0dd9e9b7c051f4e0c18d28ea2967194cb7dccfcd78e30467f4c33->enter($__internal_e6a20dc125b0dd9e9b7c051f4e0c18d28ea2967194cb7dccfcd78e30467f4c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Acteurs creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("acteurs_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e6a20dc125b0dd9e9b7c051f4e0c18d28ea2967194cb7dccfcd78e30467f4c33->leave($__internal_e6a20dc125b0dd9e9b7c051f4e0c18d28ea2967194cb7dccfcd78e30467f4c33_prof);

    }

    public function getTemplateName()
    {
        return ":acteurs:new.html.twig";
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
/*     <h1>Acteurs creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('acteurs_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
