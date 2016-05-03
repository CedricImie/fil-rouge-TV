<?php

/* :realisateurs:show.html.twig */
class __TwigTemplate_d5c427c26132f3834a47acec8addbce76e6439f84e919de194eccb9dd8d7b878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":realisateurs:show.html.twig", 1);
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
        $__internal_eb0fa5908d996bb8a6217691388f8e570fdce49c52cf6135d9280f6261b6debf = $this->env->getExtension("native_profiler");
        $__internal_eb0fa5908d996bb8a6217691388f8e570fdce49c52cf6135d9280f6261b6debf->enter($__internal_eb0fa5908d996bb8a6217691388f8e570fdce49c52cf6135d9280f6261b6debf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":realisateurs:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb0fa5908d996bb8a6217691388f8e570fdce49c52cf6135d9280f6261b6debf->leave($__internal_eb0fa5908d996bb8a6217691388f8e570fdce49c52cf6135d9280f6261b6debf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4273d28a3414ac8515b9a5e7577c835e17850106c8212017b98b5215aa27e70c = $this->env->getExtension("native_profiler");
        $__internal_4273d28a3414ac8515b9a5e7577c835e17850106c8212017b98b5215aa27e70c->enter($__internal_4273d28a3414ac8515b9a5e7577c835e17850106c8212017b98b5215aa27e70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Realisateurs</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisateur"]) ? $context["realisateur"] : $this->getContext($context, "realisateur")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomrealisateur</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisateur"]) ? $context["realisateur"] : $this->getContext($context, "realisateur")), "nomRealisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenomrealisateur</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisateur"]) ? $context["realisateur"] : $this->getContext($context, "realisateur")), "prenomRealisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datenaissancerealisateur</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["realisateur"]) ? $context["realisateur"] : $this->getContext($context, "realisateur")), "dateNaissanceRealisateur", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["realisateur"]) ? $context["realisateur"] : $this->getContext($context, "realisateur")), "dateNaissanceRealisateur", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Biorealisateur</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisateur"]) ? $context["realisateur"] : $this->getContext($context, "realisateur")), "bioRealisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Serierealisateur</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisateur"]) ? $context["realisateur"] : $this->getContext($context, "realisateur")), "serieRealisateur", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("realisateurs_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("realisateurs_edit", array("id" => $this->getAttribute((isset($context["realisateur"]) ? $context["realisateur"] : $this->getContext($context, "realisateur")), "id", array()))), "html", null, true);
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
        
        $__internal_4273d28a3414ac8515b9a5e7577c835e17850106c8212017b98b5215aa27e70c->leave($__internal_4273d28a3414ac8515b9a5e7577c835e17850106c8212017b98b5215aa27e70c_prof);

    }

    public function getTemplateName()
    {
        return ":realisateurs:show.html.twig";
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
/*     <h1>Realisateurs</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ realisateur.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomrealisateur</th>*/
/*                 <td>{{ realisateur.nomRealisateur }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prenomrealisateur</th>*/
/*                 <td>{{ realisateur.prenomRealisateur }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datenaissancerealisateur</th>*/
/*                 <td>{% if realisateur.dateNaissanceRealisateur %}{{ realisateur.dateNaissanceRealisateur|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Biorealisateur</th>*/
/*                 <td>{{ realisateur.bioRealisateur }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Serierealisateur</th>*/
/*                 <td>{{ realisateur.serieRealisateur }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('realisateurs_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('realisateurs_edit', { 'id': realisateur.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
