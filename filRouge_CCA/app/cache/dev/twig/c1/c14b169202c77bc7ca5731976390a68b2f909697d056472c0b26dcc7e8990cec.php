<?php

/* :scenaristes:index.html.twig */
class __TwigTemplate_83376c28912018050b8ba602ad2fadee2450a6babadc809767a4618d3a252a99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":scenaristes:index.html.twig", 1);
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
        $__internal_eb122a95f14d10b2c7e04f12bc093c5f9abfa58af27d730fc6f0471e1e4ee53f = $this->env->getExtension("native_profiler");
        $__internal_eb122a95f14d10b2c7e04f12bc093c5f9abfa58af27d730fc6f0471e1e4ee53f->enter($__internal_eb122a95f14d10b2c7e04f12bc093c5f9abfa58af27d730fc6f0471e1e4ee53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":scenaristes:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb122a95f14d10b2c7e04f12bc093c5f9abfa58af27d730fc6f0471e1e4ee53f->leave($__internal_eb122a95f14d10b2c7e04f12bc093c5f9abfa58af27d730fc6f0471e1e4ee53f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6aae83d8dc363472c1c16c889234e2f64396edb7810f80ffb9535b503beb0480 = $this->env->getExtension("native_profiler");
        $__internal_6aae83d8dc363472c1c16c889234e2f64396edb7810f80ffb9535b503beb0480->enter($__internal_6aae83d8dc363472c1c16c889234e2f64396edb7810f80ffb9535b503beb0480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Scenaristes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nomscenariste</th>
                <th>Prenomscenariste</th>
                <th>Datenaissancescenariste</th>
                <th>Bioscenariste</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scenaristes"]) ? $context["scenaristes"] : $this->getContext($context, "scenaristes")));
        foreach ($context['_seq'] as $context["_key"] => $context["scenariste"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("scenaristes_show", array("id" => $this->getAttribute($context["scenariste"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["scenariste"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["scenariste"], "nomScenariste", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["scenariste"], "prenomScenariste", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["scenariste"], "dateNaissanceScenariste", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["scenariste"], "dateNaissanceScenariste", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["scenariste"], "bioScenariste", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("scenaristes_show", array("id" => $this->getAttribute($context["scenariste"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("scenaristes_edit", array("id" => $this->getAttribute($context["scenariste"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scenariste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("scenaristes_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_6aae83d8dc363472c1c16c889234e2f64396edb7810f80ffb9535b503beb0480->leave($__internal_6aae83d8dc363472c1c16c889234e2f64396edb7810f80ffb9535b503beb0480_prof);

    }

    public function getTemplateName()
    {
        return ":scenaristes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 42,  108 => 37,  96 => 31,  90 => 28,  83 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Scenaristes list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nomscenariste</th>*/
/*                 <th>Prenomscenariste</th>*/
/*                 <th>Datenaissancescenariste</th>*/
/*                 <th>Bioscenariste</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for scenariste in scenaristes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('scenaristes_show', { 'id': scenariste.id }) }}">{{ scenariste.id }}</a></td>*/
/*                 <td>{{ scenariste.nomScenariste }}</td>*/
/*                 <td>{{ scenariste.prenomScenariste }}</td>*/
/*                 <td>{% if scenariste.dateNaissanceScenariste %}{{ scenariste.dateNaissanceScenariste|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ scenariste.bioScenariste }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('scenaristes_show', { 'id': scenariste.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('scenaristes_edit', { 'id': scenariste.id }) }}">edit</a>*/
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
/*             <a href="{{ path('scenaristes_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
