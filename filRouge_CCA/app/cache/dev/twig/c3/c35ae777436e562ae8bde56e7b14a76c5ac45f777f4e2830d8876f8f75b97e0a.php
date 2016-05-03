<?php

/* :acteurs:show.html.twig */
class __TwigTemplate_5ed85ec049d6ea41e9a56839feda3039b68032510aefa03b10a3242fbe4d4327 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":acteurs:show.html.twig", 1);
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
        $__internal_87431380f1842aa73dadd877b61f289bef16e1274e4fa458cd3faa5b4ccc057c = $this->env->getExtension("native_profiler");
        $__internal_87431380f1842aa73dadd877b61f289bef16e1274e4fa458cd3faa5b4ccc057c->enter($__internal_87431380f1842aa73dadd877b61f289bef16e1274e4fa458cd3faa5b4ccc057c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":acteurs:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87431380f1842aa73dadd877b61f289bef16e1274e4fa458cd3faa5b4ccc057c->leave($__internal_87431380f1842aa73dadd877b61f289bef16e1274e4fa458cd3faa5b4ccc057c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c62ed7bc054a510c82fd7af682292e53528d05597d9232544cfa1f8772b8a2a4 = $this->env->getExtension("native_profiler");
        $__internal_c62ed7bc054a510c82fd7af682292e53528d05597d9232544cfa1f8772b8a2a4->enter($__internal_c62ed7bc054a510c82fd7af682292e53528d05597d9232544cfa1f8772b8a2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Acteurs</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["acteur"]) ? $context["acteur"] : $this->getContext($context, "acteur")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomacteur</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["acteur"]) ? $context["acteur"] : $this->getContext($context, "acteur")), "nomActeur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenomacteur</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["acteur"]) ? $context["acteur"] : $this->getContext($context, "acteur")), "prenomActeur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datenaissanceacteur</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["acteur"]) ? $context["acteur"] : $this->getContext($context, "acteur")), "dateNaissanceActeur", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["acteur"]) ? $context["acteur"] : $this->getContext($context, "acteur")), "dateNaissanceActeur", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Bioacteur</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["acteur"]) ? $context["acteur"] : $this->getContext($context, "acteur")), "bioActeur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Serieacteur</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["acteur"]) ? $context["acteur"] : $this->getContext($context, "acteur")), "serieActeur", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("acteurs_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acteurs_edit", array("id" => $this->getAttribute((isset($context["acteur"]) ? $context["acteur"] : $this->getContext($context, "acteur")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c62ed7bc054a510c82fd7af682292e53528d05597d9232544cfa1f8772b8a2a4->leave($__internal_c62ed7bc054a510c82fd7af682292e53528d05597d9232544cfa1f8772b8a2a4_prof);

    }

    public function getTemplateName()
    {
        return ":acteurs:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 45,  107 => 43,  101 => 40,  95 => 37,  85 => 30,  78 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Acteurs</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ acteur.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomacteur</th>*/
/*                 <td>{{ acteur.nomActeur }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prenomacteur</th>*/
/*                 <td>{{ acteur.prenomActeur }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datenaissanceacteur</th>*/
/*                 <td>{% if acteur.dateNaissanceActeur %}{{ acteur.dateNaissanceActeur|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Bioacteur</th>*/
/*                 <td>{{ acteur.bioActeur }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Serieacteur</th>*/
/*                 <td>{{ acteur.serieActeur }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('acteurs_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('acteurs_edit', { 'id': acteur.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
