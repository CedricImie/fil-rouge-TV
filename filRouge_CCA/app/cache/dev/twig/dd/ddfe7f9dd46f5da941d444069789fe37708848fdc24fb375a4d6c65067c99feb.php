<?php

/* :realisateurs:new.html.twig */
class __TwigTemplate_81f359c08c7938310f895a196ff0e3cbe5b3b7c55acb256d6b2167828bd0d5a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":realisateurs:new.html.twig", 1);
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
        $__internal_a12dc864b66677564b9e1705921c00c4b83eb89309b7fd9538df6b060d4432b3 = $this->env->getExtension("native_profiler");
        $__internal_a12dc864b66677564b9e1705921c00c4b83eb89309b7fd9538df6b060d4432b3->enter($__internal_a12dc864b66677564b9e1705921c00c4b83eb89309b7fd9538df6b060d4432b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":realisateurs:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a12dc864b66677564b9e1705921c00c4b83eb89309b7fd9538df6b060d4432b3->leave($__internal_a12dc864b66677564b9e1705921c00c4b83eb89309b7fd9538df6b060d4432b3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc0e9a65e64de64865858c376082a7668643ba5223dd70510638b38fb201ec77 = $this->env->getExtension("native_profiler");
        $__internal_cc0e9a65e64de64865858c376082a7668643ba5223dd70510638b38fb201ec77->enter($__internal_cc0e9a65e64de64865858c376082a7668643ba5223dd70510638b38fb201ec77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Realisateurs creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("realisateurs_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_cc0e9a65e64de64865858c376082a7668643ba5223dd70510638b38fb201ec77->leave($__internal_cc0e9a65e64de64865858c376082a7668643ba5223dd70510638b38fb201ec77_prof);

    }

    public function getTemplateName()
    {
        return ":realisateurs:new.html.twig";
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
/*     <h1>Realisateurs creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('realisateurs_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
