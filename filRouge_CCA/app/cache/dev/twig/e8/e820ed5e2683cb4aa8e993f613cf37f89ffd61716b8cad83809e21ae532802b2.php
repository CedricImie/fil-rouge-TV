<?php

/* :saisons:edit.html.twig */
class __TwigTemplate_e7def602ea5fb491d1c9a32cf8da58500cdd0153e15a51be517cd535e7e1c151 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":saisons:edit.html.twig", 1);
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
        $__internal_c26030852f784c7f0c6b1eed54b7599e0ab193e7da15852e5cbe306868f2c30e = $this->env->getExtension("native_profiler");
        $__internal_c26030852f784c7f0c6b1eed54b7599e0ab193e7da15852e5cbe306868f2c30e->enter($__internal_c26030852f784c7f0c6b1eed54b7599e0ab193e7da15852e5cbe306868f2c30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":saisons:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c26030852f784c7f0c6b1eed54b7599e0ab193e7da15852e5cbe306868f2c30e->leave($__internal_c26030852f784c7f0c6b1eed54b7599e0ab193e7da15852e5cbe306868f2c30e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_887129d472639c2d9f1167bb30ffa865548d0a5cb2d57c24f8468b49b0a8186a = $this->env->getExtension("native_profiler");
        $__internal_887129d472639c2d9f1167bb30ffa865548d0a5cb2d57c24f8468b49b0a8186a->enter($__internal_887129d472639c2d9f1167bb30ffa865548d0a5cb2d57c24f8468b49b0a8186a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Saisons edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("saisons_index");
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
        
        $__internal_887129d472639c2d9f1167bb30ffa865548d0a5cb2d57c24f8468b49b0a8186a->leave($__internal_887129d472639c2d9f1167bb30ffa865548d0a5cb2d57c24f8468b49b0a8186a_prof);

    }

    public function getTemplateName()
    {
        return ":saisons:edit.html.twig";
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
/*     <h1>Saisons edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('saisons_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
