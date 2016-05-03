<?php

/* :scenaristes:edit.html.twig */
class __TwigTemplate_913b12e118005b6c57f90392f0ff9712f65565986bbd87e8c8ab459d1916e4d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":scenaristes:edit.html.twig", 1);
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
        $__internal_dba5f063f9734abf674df0e8863f192b652dcc77d7746c232e46edfc2e16419d = $this->env->getExtension("native_profiler");
        $__internal_dba5f063f9734abf674df0e8863f192b652dcc77d7746c232e46edfc2e16419d->enter($__internal_dba5f063f9734abf674df0e8863f192b652dcc77d7746c232e46edfc2e16419d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":scenaristes:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dba5f063f9734abf674df0e8863f192b652dcc77d7746c232e46edfc2e16419d->leave($__internal_dba5f063f9734abf674df0e8863f192b652dcc77d7746c232e46edfc2e16419d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a50c0d7cc99753c7ad50b22c3b6e960f506d7b17a1160bfa1d4f9d6e1a69c98 = $this->env->getExtension("native_profiler");
        $__internal_0a50c0d7cc99753c7ad50b22c3b6e960f506d7b17a1160bfa1d4f9d6e1a69c98->enter($__internal_0a50c0d7cc99753c7ad50b22c3b6e960f506d7b17a1160bfa1d4f9d6e1a69c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Scenaristes edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("scenaristes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0a50c0d7cc99753c7ad50b22c3b6e960f506d7b17a1160bfa1d4f9d6e1a69c98->leave($__internal_0a50c0d7cc99753c7ad50b22c3b6e960f506d7b17a1160bfa1d4f9d6e1a69c98_prof);

    }

    public function getTemplateName()
    {
        return ":scenaristes:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Scenaristes edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('scenaristes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
