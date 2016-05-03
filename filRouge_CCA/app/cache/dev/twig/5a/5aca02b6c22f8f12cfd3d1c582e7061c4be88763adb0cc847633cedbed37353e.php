<?php

/* :commentaires:new.html.twig */
class __TwigTemplate_0f764266adce08ce416c76132403ec6f7bbaf424ef76a673a5ce458a407b317d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":commentaires:new.html.twig", 1);
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
        $__internal_8f8e1709f2bcb74ceec93468bcd568b001c4c102b012896a7e97d7055893fe79 = $this->env->getExtension("native_profiler");
        $__internal_8f8e1709f2bcb74ceec93468bcd568b001c4c102b012896a7e97d7055893fe79->enter($__internal_8f8e1709f2bcb74ceec93468bcd568b001c4c102b012896a7e97d7055893fe79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":commentaires:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f8e1709f2bcb74ceec93468bcd568b001c4c102b012896a7e97d7055893fe79->leave($__internal_8f8e1709f2bcb74ceec93468bcd568b001c4c102b012896a7e97d7055893fe79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bd2b12d6c3ecaabcaa906050eb594601c1bca9082b7c524703841fe98908a02 = $this->env->getExtension("native_profiler");
        $__internal_9bd2b12d6c3ecaabcaa906050eb594601c1bca9082b7c524703841fe98908a02->enter($__internal_9bd2b12d6c3ecaabcaa906050eb594601c1bca9082b7c524703841fe98908a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Commentaires creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("commentaires_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9bd2b12d6c3ecaabcaa906050eb594601c1bca9082b7c524703841fe98908a02->leave($__internal_9bd2b12d6c3ecaabcaa906050eb594601c1bca9082b7c524703841fe98908a02_prof);

    }

    public function getTemplateName()
    {
        return ":commentaires:new.html.twig";
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
/*     <h1>Commentaires creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('commentaires_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
