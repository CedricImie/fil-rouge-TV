<?php

/* :moderateurs:index.html.twig */
class __TwigTemplate_00192cd024ebe4370d3760b882dece7e030e1a1e1cf54cc43022313a1fe58f01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":moderateurs:index.html.twig", 1);
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
        $__internal_2c9f002c6b90d3a62321e67c1003df9982e5dddc3020f6c7dd04585b8050c3f8 = $this->env->getExtension("native_profiler");
        $__internal_2c9f002c6b90d3a62321e67c1003df9982e5dddc3020f6c7dd04585b8050c3f8->enter($__internal_2c9f002c6b90d3a62321e67c1003df9982e5dddc3020f6c7dd04585b8050c3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":moderateurs:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c9f002c6b90d3a62321e67c1003df9982e5dddc3020f6c7dd04585b8050c3f8->leave($__internal_2c9f002c6b90d3a62321e67c1003df9982e5dddc3020f6c7dd04585b8050c3f8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a302fa8c7d5a3bcdcba142cfbceb5744cd546673eb52d2b25a07eda48146db2 = $this->env->getExtension("native_profiler");
        $__internal_2a302fa8c7d5a3bcdcba142cfbceb5744cd546673eb52d2b25a07eda48146db2->enter($__internal_2a302fa8c7d5a3bcdcba142cfbceb5744cd546673eb52d2b25a07eda48146db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Moderateurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datedebutmoderateur</th>
                <th>Datefinmoderateur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moderateurs"]) ? $context["moderateurs"] : $this->getContext($context, "moderateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["moderateur"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moderateurs_show", array("id" => $this->getAttribute($context["moderateur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["moderateur"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["moderateur"], "dateDebutModerateur", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["moderateur"], "dateDebutModerateur", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["moderateur"], "dateFinModerateur", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["moderateur"], "dateFinModerateur", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moderateurs_show", array("id" => $this->getAttribute($context["moderateur"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moderateurs_edit", array("id" => $this->getAttribute($context["moderateur"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moderateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("moderateurs_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_2a302fa8c7d5a3bcdcba142cfbceb5744cd546673eb52d2b25a07eda48146db2->leave($__internal_2a302fa8c7d5a3bcdcba142cfbceb5744cd546673eb52d2b25a07eda48146db2_prof);

    }

    public function getTemplateName()
    {
        return ":moderateurs:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 38,  100 => 33,  88 => 27,  82 => 24,  73 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Moderateurs list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Datedebutmoderateur</th>*/
/*                 <th>Datefinmoderateur</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for moderateur in moderateurs %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('moderateurs_show', { 'id': moderateur.id }) }}">{{ moderateur.id }}</a></td>*/
/*                 <td>{% if moderateur.dateDebutModerateur %}{{ moderateur.dateDebutModerateur|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if moderateur.dateFinModerateur %}{{ moderateur.dateFinModerateur|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('moderateurs_show', { 'id': moderateur.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('moderateurs_edit', { 'id': moderateur.id }) }}">edit</a>*/
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
/*             <a href="{{ path('moderateurs_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
