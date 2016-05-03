<?php

/* :acteurs:index.html.twig */
class __TwigTemplate_fe8bcac05037d196a31182c4b8404b35cee2e85c1d9a1ca61f5f4aabd42c9b57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":acteurs:index.html.twig", 1);
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
        $__internal_392ec925d46175f14ee49c6dfef0ce8961af9ccf23ad23e81f5d0059f0138f6e = $this->env->getExtension("native_profiler");
        $__internal_392ec925d46175f14ee49c6dfef0ce8961af9ccf23ad23e81f5d0059f0138f6e->enter($__internal_392ec925d46175f14ee49c6dfef0ce8961af9ccf23ad23e81f5d0059f0138f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":acteurs:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_392ec925d46175f14ee49c6dfef0ce8961af9ccf23ad23e81f5d0059f0138f6e->leave($__internal_392ec925d46175f14ee49c6dfef0ce8961af9ccf23ad23e81f5d0059f0138f6e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_458c66a5544c0656d69ed61a6f90ccaabefbf720e809282edb28dbab2c9ab717 = $this->env->getExtension("native_profiler");
        $__internal_458c66a5544c0656d69ed61a6f90ccaabefbf720e809282edb28dbab2c9ab717->enter($__internal_458c66a5544c0656d69ed61a6f90ccaabefbf720e809282edb28dbab2c9ab717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Acteurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nomacteur</th>
                <th>Prenomacteur</th>
                <th>Datenaissanceacteur</th>
                <th>Bioacteur</th>
                <th>Serieacteur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acteurs"]) ? $context["acteurs"] : $this->getContext($context, "acteurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["acteur"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acteurs_show", array("id" => $this->getAttribute($context["acteur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["acteur"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["acteur"], "nomActeur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["acteur"], "prenomActeur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["acteur"], "dateNaissanceActeur", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["acteur"], "dateNaissanceActeur", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["acteur"], "bioActeur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["acteur"], "serieActeur", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acteurs_show", array("id" => $this->getAttribute($context["acteur"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acteurs_edit", array("id" => $this->getAttribute($context["acteur"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("acteurs_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_458c66a5544c0656d69ed61a6f90ccaabefbf720e809282edb28dbab2c9ab717->leave($__internal_458c66a5544c0656d69ed61a6f90ccaabefbf720e809282edb28dbab2c9ab717_prof);

    }

    public function getTemplateName()
    {
        return ":acteurs:index.html.twig";
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
/*     <h1>Acteurs list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nomacteur</th>*/
/*                 <th>Prenomacteur</th>*/
/*                 <th>Datenaissanceacteur</th>*/
/*                 <th>Bioacteur</th>*/
/*                 <th>Serieacteur</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for acteur in acteurs %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('acteurs_show', { 'id': acteur.id }) }}">{{ acteur.id }}</a></td>*/
/*                 <td>{{ acteur.nomActeur }}</td>*/
/*                 <td>{{ acteur.prenomActeur }}</td>*/
/*                 <td>{% if acteur.dateNaissanceActeur %}{{ acteur.dateNaissanceActeur|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ acteur.bioActeur }}</td>*/
/*                 <td>{{ acteur.serieActeur }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('acteurs_show', { 'id': acteur.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('acteurs_edit', { 'id': acteur.id }) }}">edit</a>*/
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
/*             <a href="{{ path('acteurs_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
