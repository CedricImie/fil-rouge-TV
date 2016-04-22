<?php

/* series/index.html.twig */
class __TwigTemplate_d5ad7243b7451933ead2f6ca6b5df5ca686c714467ec352741bf374479986623 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "series/index.html.twig", 1);
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
        $__internal_54ed3c161c73fdfffb3b361befabd1f9ae1f4b51f5ecaa9ec3594d9cb99a4794 = $this->env->getExtension("native_profiler");
        $__internal_54ed3c161c73fdfffb3b361befabd1f9ae1f4b51f5ecaa9ec3594d9cb99a4794->enter($__internal_54ed3c161c73fdfffb3b361befabd1f9ae1f4b51f5ecaa9ec3594d9cb99a4794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "series/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54ed3c161c73fdfffb3b361befabd1f9ae1f4b51f5ecaa9ec3594d9cb99a4794->leave($__internal_54ed3c161c73fdfffb3b361befabd1f9ae1f4b51f5ecaa9ec3594d9cb99a4794_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6005ea9d2bcab97fe8b44aa7631e72689ac5b6c36e5c5bdf0bf3efaa6b96405f = $this->env->getExtension("native_profiler");
        $__internal_6005ea9d2bcab97fe8b44aa7631e72689ac5b6c36e5c5bdf0bf3efaa6b96405f->enter($__internal_6005ea9d2bcab97fe8b44aa7631e72689ac5b6c36e5c5bdf0bf3efaa6b96405f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Series list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nomserie</th>
                <th>Posterserie</th>
                <th>Resumeserie</th>
                <th>Datecreationserie</th>
                <th>Notemoyenneserie</th>
                <th>Nbabonneserie</th>
                <th>Castingserie</th>
                <th>Genreserie</th>
                <th>Diffusionserie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["series"]);
        foreach ($context['_seq'] as $context["_key"] => $context["series"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("series_show", array("id" => $this->getAttribute($context["series"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["series"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["series"], "nomSerie", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["series"], "posterSerie", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["series"], "resumeSerie", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute($context["series"], "dateCreationSerie", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["series"], "dateCreationSerie", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["series"], "noteMoyenneSerie", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["series"], "nbAbonneSerie", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["series"], "castingSerie", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["series"], "genreSerie", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["series"], "diffusionSerie", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["series"], "diffusionSerie", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("series_show", array("id" => $this->getAttribute($context["series"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("series_edit", array("id" => $this->getAttribute($context["series"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['series'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("series_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_6005ea9d2bcab97fe8b44aa7631e72689ac5b6c36e5c5bdf0bf3efaa6b96405f->leave($__internal_6005ea9d2bcab97fe8b44aa7631e72689ac5b6c36e5c5bdf0bf3efaa6b96405f_prof);

    }

    public function getTemplateName()
    {
        return "series/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 52,  135 => 47,  123 => 41,  117 => 38,  108 => 34,  104 => 33,  100 => 32,  96 => 31,  92 => 30,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  68 => 25,  65 => 24,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Series list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nomserie</th>*/
/*                 <th>Posterserie</th>*/
/*                 <th>Resumeserie</th>*/
/*                 <th>Datecreationserie</th>*/
/*                 <th>Notemoyenneserie</th>*/
/*                 <th>Nbabonneserie</th>*/
/*                 <th>Castingserie</th>*/
/*                 <th>Genreserie</th>*/
/*                 <th>Diffusionserie</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for series in series %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('series_show', { 'id': series.id }) }}">{{ series.id }}</a></td>*/
/*                 <td>{{ series.nomSerie }}</td>*/
/*                 <td>{{ series.posterSerie }}</td>*/
/*                 <td>{{ series.resumeSerie }}</td>*/
/*                 <td>{% if series.dateCreationSerie %}{{ series.dateCreationSerie|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ series.noteMoyenneSerie }}</td>*/
/*                 <td>{{ series.nbAbonneSerie }}</td>*/
/*                 <td>{{ series.castingSerie }}</td>*/
/*                 <td>{{ series.genreSerie }}</td>*/
/*                 <td>{% if series.diffusionSerie %}{{ series.diffusionSerie|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('series_show', { 'id': series.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('series_edit', { 'id': series.id }) }}">edit</a>*/
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
/*             <a href="{{ path('series_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
