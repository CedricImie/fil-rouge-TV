<?php

/* :administrateurs:show.html.twig */
class __TwigTemplate_fb2ff24c1fef3edb9e5ac76748190d3f9f7152bf7eb8119dac1c94e5716935db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":administrateurs:show.html.twig", 1);
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
        $__internal_e92a98ff5bfd4684e3147286d7f263d5f827edae323976b2011fcc202781c5c0 = $this->env->getExtension("native_profiler");
        $__internal_e92a98ff5bfd4684e3147286d7f263d5f827edae323976b2011fcc202781c5c0->enter($__internal_e92a98ff5bfd4684e3147286d7f263d5f827edae323976b2011fcc202781c5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":administrateurs:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e92a98ff5bfd4684e3147286d7f263d5f827edae323976b2011fcc202781c5c0->leave($__internal_e92a98ff5bfd4684e3147286d7f263d5f827edae323976b2011fcc202781c5c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_049a30fd8514284b3d96954d2e9385a1aeb544f6375b5ff3f269aa8959b7b6eb = $this->env->getExtension("native_profiler");
        $__internal_049a30fd8514284b3d96954d2e9385a1aeb544f6375b5ff3f269aa8959b7b6eb->enter($__internal_049a30fd8514284b3d96954d2e9385a1aeb544f6375b5ff3f269aa8959b7b6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Administrateurs</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["administrateur"]) ? $context["administrateur"] : $this->getContext($context, "administrateur")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("administrateurs_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("administrateurs_edit", array("id" => $this->getAttribute((isset($context["administrateur"]) ? $context["administrateur"] : $this->getContext($context, "administrateur")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_049a30fd8514284b3d96954d2e9385a1aeb544f6375b5ff3f269aa8959b7b6eb->leave($__internal_049a30fd8514284b3d96954d2e9385a1aeb544f6375b5ff3f269aa8959b7b6eb_prof);

    }

    public function getTemplateName()
    {
        return ":administrateurs:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  70 => 23,  64 => 20,  58 => 17,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Administrateurs</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ administrateur.id }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('administrateurs_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('administrateurs_edit', { 'id': administrateur.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
