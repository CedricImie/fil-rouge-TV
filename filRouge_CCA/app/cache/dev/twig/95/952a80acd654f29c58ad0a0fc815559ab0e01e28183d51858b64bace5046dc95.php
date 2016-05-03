<?php

/* :realisateurs:edit.html.twig */
class __TwigTemplate_f783b9a2a561e95d6970e1104611264c30fdccc72053035d6b322278c2746adc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":realisateurs:edit.html.twig", 1);
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
        $__internal_3de07bac24737f0132d58c741ed9ffd7f5c0052a58d179bc503622922962a8ce = $this->env->getExtension("native_profiler");
        $__internal_3de07bac24737f0132d58c741ed9ffd7f5c0052a58d179bc503622922962a8ce->enter($__internal_3de07bac24737f0132d58c741ed9ffd7f5c0052a58d179bc503622922962a8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":realisateurs:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3de07bac24737f0132d58c741ed9ffd7f5c0052a58d179bc503622922962a8ce->leave($__internal_3de07bac24737f0132d58c741ed9ffd7f5c0052a58d179bc503622922962a8ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_569a71b9e0c78f3cb18cea51b91c352fbf327073c1fb69823e9b31b704715d36 = $this->env->getExtension("native_profiler");
        $__internal_569a71b9e0c78f3cb18cea51b91c352fbf327073c1fb69823e9b31b704715d36->enter($__internal_569a71b9e0c78f3cb18cea51b91c352fbf327073c1fb69823e9b31b704715d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Realisateurs edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("realisateurs_index");
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
        
        $__internal_569a71b9e0c78f3cb18cea51b91c352fbf327073c1fb69823e9b31b704715d36->leave($__internal_569a71b9e0c78f3cb18cea51b91c352fbf327073c1fb69823e9b31b704715d36_prof);

    }

    public function getTemplateName()
    {
        return ":realisateurs:edit.html.twig";
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
/*     <h1>Realisateurs edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('realisateurs_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
