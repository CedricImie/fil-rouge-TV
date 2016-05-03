<?php

/* series/index.html.twig */
class __TwigTemplate_f7ea4126373e35dfd6474d0f35036f6cb188bdd62ce4682954cb38f0e95ad1af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "series/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc835bf4019154c9023dbb32c9004c0a72d2fe0b6fb7a2971d929eb255cd4e26 = $this->env->getExtension("native_profiler");
        $__internal_cc835bf4019154c9023dbb32c9004c0a72d2fe0b6fb7a2971d929eb255cd4e26->enter($__internal_cc835bf4019154c9023dbb32c9004c0a72d2fe0b6fb7a2971d929eb255cd4e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "series/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc835bf4019154c9023dbb32c9004c0a72d2fe0b6fb7a2971d929eb255cd4e26->leave($__internal_cc835bf4019154c9023dbb32c9004c0a72d2fe0b6fb7a2971d929eb255cd4e26_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c86fa62e82f5c5d80502abcf425bb37a7ec8b928076c99607ed93e842515d72a = $this->env->getExtension("native_profiler");
        $__internal_c86fa62e82f5c5d80502abcf425bb37a7ec8b928076c99607ed93e842515d72a->enter($__internal_c86fa62e82f5c5d80502abcf425bb37a7ec8b928076c99607ed93e842515d72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TalkSeries";
        
        $__internal_c86fa62e82f5c5d80502abcf425bb37a7ec8b928076c99607ed93e842515d72a->leave($__internal_c86fa62e82f5c5d80502abcf425bb37a7ec8b928076c99607ed93e842515d72a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_549edacea102eb478d7ab699ca6b17195b3c54e30149b2b70d2a63a4c6a1a9e6 = $this->env->getExtension("native_profiler");
        $__internal_549edacea102eb478d7ab699ca6b17195b3c54e30149b2b70d2a63a4c6a1a9e6->enter($__internal_549edacea102eb478d7ab699ca6b17195b3c54e30149b2b70d2a63a4c6a1a9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MovieBundle:Default:header"));
        echo "

<!-- *** Main *** -->
    <div class=\"btnAddSerie\">
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("series_new");
        echo "\" class=\"btn btn-default\">Ajouter une série</a>
    </div>

    <h1 class=\"H1series\">Séries</h1>

    <table>
        <thead>
            <tr>
                <th>Nom de la série</th>
                <th>Affiche</th>
                <th>Note moyenne</th>
                <th>Genre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["series"]);
        foreach ($context['_seq'] as $context["_key"] => $context["series"]) {
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["series"], "nomSerie", array()), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["series"], "posterSerie", array()), "html", null, true);
            echo "\" alt=\"\"</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["series"], "noteMoyenneSerie", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["series"], "genreSerie", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("series_show", array("id" => $this->getAttribute($context["series"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default btn-xs\">Détails</a>
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("series_edit", array("id" => $this->getAttribute($context["series"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default btn-xs\">Editer</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['series'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

";
        // line 41
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MovieBundle:Default:footer"));
        echo "

";
        
        $__internal_549edacea102eb478d7ab699ca6b17195b3c54e30149b2b70d2a63a4c6a1a9e6->leave($__internal_549edacea102eb478d7ab699ca6b17195b3c54e30149b2b70d2a63a4c6a1a9e6_prof);

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
        return array (  125 => 41,  120 => 38,  110 => 34,  106 => 33,  101 => 31,  97 => 30,  93 => 29,  89 => 28,  86 => 27,  82 => 26,  63 => 10,  56 => 6,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}TalkSeries{% endblock %}*/
/* {% block body %}*/
/* */
/* {{ render(controller('MovieBundle:Default:header')) }}*/
/* */
/* <!-- *** Main *** -->*/
/*     <div class="btnAddSerie">*/
/*         <a href="{{ path('series_new') }}" class="btn btn-default">Ajouter une série</a>*/
/*     </div>*/
/* */
/*     <h1 class="H1series">Séries</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nom de la série</th>*/
/*                 <th>Affiche</th>*/
/*                 <th>Note moyenne</th>*/
/*                 <th>Genre</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for series in series %}*/
/*             <tr>*/
/*                 <td>{{ series.nomSerie }}</td>*/
/*                 <td><img src="{{ series.posterSerie }}" alt=""</td>*/
/*                 <td>{{ series.noteMoyenneSerie }}</td>*/
/*                 <td>{{ series.genreSerie }}</td>*/
/*                 <td>*/
/*                     <a href="{{ path('series_show', { 'id': series.id }) }}" class="btn btn-default btn-xs">Détails</a>*/
/*                     <a href="{{ path('series_edit', { 'id': series.id }) }}" class="btn btn-default btn-xs">Editer</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* {{ render(controller('MovieBundle:Default:footer')) }}*/
/* */
/* {% endblock %}*/
/* */
