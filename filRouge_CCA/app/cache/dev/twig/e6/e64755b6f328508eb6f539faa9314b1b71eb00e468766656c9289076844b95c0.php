<?php

/* :saisons:index.html.twig */
class __TwigTemplate_d8445cdce241f07c0107db18817bbbf71f1cc8cd04000a21ec9c313aee03cab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":saisons:index.html.twig", 1);
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
        $__internal_f36faaf9bbdf4a81fbd77e243220cc854f138aba5c7619efe14a18d4fa0cd894 = $this->env->getExtension("native_profiler");
        $__internal_f36faaf9bbdf4a81fbd77e243220cc854f138aba5c7619efe14a18d4fa0cd894->enter($__internal_f36faaf9bbdf4a81fbd77e243220cc854f138aba5c7619efe14a18d4fa0cd894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":saisons:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f36faaf9bbdf4a81fbd77e243220cc854f138aba5c7619efe14a18d4fa0cd894->leave($__internal_f36faaf9bbdf4a81fbd77e243220cc854f138aba5c7619efe14a18d4fa0cd894_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d32d922c73d34e76a27c63ba273d8f958e19b48e9aa4e78b2da52dd9773ad9d0 = $this->env->getExtension("native_profiler");
        $__internal_d32d922c73d34e76a27c63ba273d8f958e19b48e9aa4e78b2da52dd9773ad9d0->enter($__internal_d32d922c73d34e76a27c63ba273d8f958e19b48e9aa4e78b2da52dd9773ad9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Saisons list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nomsaison</th>
                <th>Nbepisodesaison</th>
                <th>Dureesaison</th>
                <th>Notemoyennesaison</th>
                <th>Castingsaison</th>
                <th>Diffusionsaison</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["saisons"]) ? $context["saisons"] : $this->getContext($context, "saisons")));
        foreach ($context['_seq'] as $context["_key"] => $context["saison"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("saisons_show", array("id" => $this->getAttribute($context["saison"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["saison"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["saison"], "nomSaison", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["saison"], "nbEpisodeSaison", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["saison"], "dureeSaison", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["saison"], "noteMoyenneSaison", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["saison"], "castingSaison", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["saison"], "diffusionSaison", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["saison"], "diffusionSaison", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("saisons_show", array("id" => $this->getAttribute($context["saison"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("saisons_edit", array("id" => $this->getAttribute($context["saison"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['saison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("saisons_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_d32d922c73d34e76a27c63ba273d8f958e19b48e9aa4e78b2da52dd9773ad9d0->leave($__internal_d32d922c73d34e76a27c63ba273d8f958e19b48e9aa4e78b2da52dd9773ad9d0_prof);

    }

    public function getTemplateName()
    {
        return ":saisons:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 46,  118 => 41,  106 => 35,  100 => 32,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Saisons list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nomsaison</th>*/
/*                 <th>Nbepisodesaison</th>*/
/*                 <th>Dureesaison</th>*/
/*                 <th>Notemoyennesaison</th>*/
/*                 <th>Castingsaison</th>*/
/*                 <th>Diffusionsaison</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for saison in saisons %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('saisons_show', { 'id': saison.id }) }}">{{ saison.id }}</a></td>*/
/*                 <td>{{ saison.nomSaison }}</td>*/
/*                 <td>{{ saison.nbEpisodeSaison }}</td>*/
/*                 <td>{{ saison.dureeSaison }}</td>*/
/*                 <td>{{ saison.noteMoyenneSaison }}</td>*/
/*                 <td>{{ saison.castingSaison }}</td>*/
/*                 <td>{% if saison.diffusionSaison %}{{ saison.diffusionSaison|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('saisons_show', { 'id': saison.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('saisons_edit', { 'id': saison.id }) }}">edit</a>*/
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
/*             <a href="{{ path('saisons_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
