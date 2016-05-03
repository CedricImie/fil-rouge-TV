<?php

/* :administrateurs:edit.html.twig */
class __TwigTemplate_affbb220d553ba9398b875e3a5dcc29ccaaa0ec5ace4d1a2184c5a9d807ce95f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":administrateurs:edit.html.twig", 1);
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
        $__internal_9449b9e2190d576a2aad7cfd1ee8585dafe787ae3db3a274257228910f076bc1 = $this->env->getExtension("native_profiler");
        $__internal_9449b9e2190d576a2aad7cfd1ee8585dafe787ae3db3a274257228910f076bc1->enter($__internal_9449b9e2190d576a2aad7cfd1ee8585dafe787ae3db3a274257228910f076bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":administrateurs:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9449b9e2190d576a2aad7cfd1ee8585dafe787ae3db3a274257228910f076bc1->leave($__internal_9449b9e2190d576a2aad7cfd1ee8585dafe787ae3db3a274257228910f076bc1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_631047e3e094438121dcd45c30708dac0bbab9d40083d66746e4dbb7103d4df2 = $this->env->getExtension("native_profiler");
        $__internal_631047e3e094438121dcd45c30708dac0bbab9d40083d66746e4dbb7103d4df2->enter($__internal_631047e3e094438121dcd45c30708dac0bbab9d40083d66746e4dbb7103d4df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Administrateurs edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("administrateurs_index");
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
        
        $__internal_631047e3e094438121dcd45c30708dac0bbab9d40083d66746e4dbb7103d4df2->leave($__internal_631047e3e094438121dcd45c30708dac0bbab9d40083d66746e4dbb7103d4df2_prof);

    }

    public function getTemplateName()
    {
        return ":administrateurs:edit.html.twig";
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
/*     <h1>Administrateurs edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('administrateurs_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
