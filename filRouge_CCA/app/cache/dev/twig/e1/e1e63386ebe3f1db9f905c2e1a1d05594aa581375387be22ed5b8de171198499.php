<?php

/* :saisons:show.html.twig */
class __TwigTemplate_df718459ae7f49220184e09ace568b454a7f7cf9de82382df79e6b120eebc421 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":saisons:show.html.twig", 1);
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
        $__internal_ccf9f96b3d610f1bf4e1beadb7cbcd52dd5f27f9235c58dc614c24dc437b50d2 = $this->env->getExtension("native_profiler");
        $__internal_ccf9f96b3d610f1bf4e1beadb7cbcd52dd5f27f9235c58dc614c24dc437b50d2->enter($__internal_ccf9f96b3d610f1bf4e1beadb7cbcd52dd5f27f9235c58dc614c24dc437b50d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":saisons:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccf9f96b3d610f1bf4e1beadb7cbcd52dd5f27f9235c58dc614c24dc437b50d2->leave($__internal_ccf9f96b3d610f1bf4e1beadb7cbcd52dd5f27f9235c58dc614c24dc437b50d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1ac52a660dc95c25b232b821fb3d488efb8353925ff17eabfa52174a602530e = $this->env->getExtension("native_profiler");
        $__internal_e1ac52a660dc95c25b232b821fb3d488efb8353925ff17eabfa52174a602530e->enter($__internal_e1ac52a660dc95c25b232b821fb3d488efb8353925ff17eabfa52174a602530e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Saisons</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["saison"]) ? $context["saison"] : $this->getContext($context, "saison")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomsaison</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["saison"]) ? $context["saison"] : $this->getContext($context, "saison")), "nomSaison", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbepisodesaison</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["saison"]) ? $context["saison"] : $this->getContext($context, "saison")), "nbEpisodeSaison", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dureesaison</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["saison"]) ? $context["saison"] : $this->getContext($context, "saison")), "dureeSaison", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Notemoyennesaison</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["saison"]) ? $context["saison"] : $this->getContext($context, "saison")), "noteMoyenneSaison", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Castingsaison</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["saison"]) ? $context["saison"] : $this->getContext($context, "saison")), "castingSaison", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Diffusionsaison</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["saison"]) ? $context["saison"] : $this->getContext($context, "saison")), "diffusionSaison", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["saison"]) ? $context["saison"] : $this->getContext($context, "saison")), "diffusionSaison", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("saisons_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("saisons_edit", array("id" => $this->getAttribute((isset($context["saison"]) ? $context["saison"] : $this->getContext($context, "saison")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e1ac52a660dc95c25b232b821fb3d488efb8353925ff17eabfa52174a602530e->leave($__internal_e1ac52a660dc95c25b232b821fb3d488efb8353925ff17eabfa52174a602530e_prof);

    }

    public function getTemplateName()
    {
        return ":saisons:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 49,  114 => 47,  108 => 44,  102 => 41,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Saisons</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ saison.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomsaison</th>*/
/*                 <td>{{ saison.nomSaison }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nbepisodesaison</th>*/
/*                 <td>{{ saison.nbEpisodeSaison }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dureesaison</th>*/
/*                 <td>{{ saison.dureeSaison }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Notemoyennesaison</th>*/
/*                 <td>{{ saison.noteMoyenneSaison }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Castingsaison</th>*/
/*                 <td>{{ saison.castingSaison }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Diffusionsaison</th>*/
/*                 <td>{% if saison.diffusionSaison %}{{ saison.diffusionSaison|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('saisons_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('saisons_edit', { 'id': saison.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
