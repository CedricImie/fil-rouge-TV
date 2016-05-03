<?php

/* :realisateurs:index.html.twig */
class __TwigTemplate_b40f1213403545b0d4c11dcab09e738286d275a15363e965b8ee25f3562b62c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":realisateurs:index.html.twig", 1);
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
        $__internal_760a426c5f3244040a12b5713721a58b40995ce8e2a6c24b60f39792f6ec61e3 = $this->env->getExtension("native_profiler");
        $__internal_760a426c5f3244040a12b5713721a58b40995ce8e2a6c24b60f39792f6ec61e3->enter($__internal_760a426c5f3244040a12b5713721a58b40995ce8e2a6c24b60f39792f6ec61e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":realisateurs:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_760a426c5f3244040a12b5713721a58b40995ce8e2a6c24b60f39792f6ec61e3->leave($__internal_760a426c5f3244040a12b5713721a58b40995ce8e2a6c24b60f39792f6ec61e3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4591fe845816135c5fca9b1a3c0b5005710d7c104d6d7ca05bc88b7066a41208 = $this->env->getExtension("native_profiler");
        $__internal_4591fe845816135c5fca9b1a3c0b5005710d7c104d6d7ca05bc88b7066a41208->enter($__internal_4591fe845816135c5fca9b1a3c0b5005710d7c104d6d7ca05bc88b7066a41208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Realisateurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nomrealisateur</th>
                <th>Prenomrealisateur</th>
                <th>Datenaissancerealisateur</th>
                <th>Biorealisateur</th>
                <th>Serierealisateur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["realisateurs"]) ? $context["realisateurs"] : $this->getContext($context, "realisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["realisateur"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("realisateurs_show", array("id" => $this->getAttribute($context["realisateur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisateur"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisateur"], "nomRealisateur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisateur"], "prenomRealisateur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["realisateur"], "dateNaissanceRealisateur", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["realisateur"], "dateNaissanceRealisateur", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisateur"], "bioRealisateur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisateur"], "serieRealisateur", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("realisateurs_show", array("id" => $this->getAttribute($context["realisateur"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("realisateurs_edit", array("id" => $this->getAttribute($context["realisateur"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['realisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("realisateurs_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_4591fe845816135c5fca9b1a3c0b5005710d7c104d6d7ca05bc88b7066a41208->leave($__internal_4591fe845816135c5fca9b1a3c0b5005710d7c104d6d7ca05bc88b7066a41208_prof);

    }

    public function getTemplateName()
    {
        return ":realisateurs:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  113 => 39,  101 => 33,  95 => 30,  88 => 26,  84 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Realisateurs list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nomrealisateur</th>*/
/*                 <th>Prenomrealisateur</th>*/
/*                 <th>Datenaissancerealisateur</th>*/
/*                 <th>Biorealisateur</th>*/
/*                 <th>Serierealisateur</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for realisateur in realisateurs %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('realisateurs_show', { 'id': realisateur.id }) }}">{{ realisateur.id }}</a></td>*/
/*                 <td>{{ realisateur.nomRealisateur }}</td>*/
/*                 <td>{{ realisateur.prenomRealisateur }}</td>*/
/*                 <td>{% if realisateur.dateNaissanceRealisateur %}{{ realisateur.dateNaissanceRealisateur|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ realisateur.bioRealisateur }}</td>*/
/*                 <td>{{ realisateur.serieRealisateur }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('realisateurs_show', { 'id': realisateur.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('realisateurs_edit', { 'id': realisateur.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('realisateurs_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
