<?php

/* :administrateurs:new.html.twig */
class __TwigTemplate_00c49aab8bc29863a1cfe67f684700d15a637ebfb93ea9bdabb4b6c7a6612071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":administrateurs:new.html.twig", 1);
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
        $__internal_4d9be9edb0f7f221ea27235a51456719dd028e6f9245b382a71ef11589e3e47a = $this->env->getExtension("native_profiler");
        $__internal_4d9be9edb0f7f221ea27235a51456719dd028e6f9245b382a71ef11589e3e47a->enter($__internal_4d9be9edb0f7f221ea27235a51456719dd028e6f9245b382a71ef11589e3e47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":administrateurs:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d9be9edb0f7f221ea27235a51456719dd028e6f9245b382a71ef11589e3e47a->leave($__internal_4d9be9edb0f7f221ea27235a51456719dd028e6f9245b382a71ef11589e3e47a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2fc459f4839cfbf4726d5048f758b0cfffb5f293af03be1a5db9725b62207c3 = $this->env->getExtension("native_profiler");
        $__internal_c2fc459f4839cfbf4726d5048f758b0cfffb5f293af03be1a5db9725b62207c3->enter($__internal_c2fc459f4839cfbf4726d5048f758b0cfffb5f293af03be1a5db9725b62207c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Administrateurs creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("administrateurs_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c2fc459f4839cfbf4726d5048f758b0cfffb5f293af03be1a5db9725b62207c3->leave($__internal_c2fc459f4839cfbf4726d5048f758b0cfffb5f293af03be1a5db9725b62207c3_prof);

    }

    public function getTemplateName()
    {
        return ":administrateurs:new.html.twig";
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
/*     <h1>Administrateurs creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('administrateurs_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
