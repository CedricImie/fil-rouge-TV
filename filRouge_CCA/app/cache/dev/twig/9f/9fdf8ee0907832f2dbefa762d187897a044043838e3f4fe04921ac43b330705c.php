<?php

/* :commentaires:index.html.twig */
class __TwigTemplate_053ff4c59092ec7718507e52bbbec3d0d2b6bbc2639cdcb6a1489c20e72678d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":commentaires:index.html.twig", 1);
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
        $__internal_8a7084b2d099bf60e14f2fec162a3173cdf860ba12f73c621ea21c08bde90681 = $this->env->getExtension("native_profiler");
        $__internal_8a7084b2d099bf60e14f2fec162a3173cdf860ba12f73c621ea21c08bde90681->enter($__internal_8a7084b2d099bf60e14f2fec162a3173cdf860ba12f73c621ea21c08bde90681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":commentaires:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a7084b2d099bf60e14f2fec162a3173cdf860ba12f73c621ea21c08bde90681->leave($__internal_8a7084b2d099bf60e14f2fec162a3173cdf860ba12f73c621ea21c08bde90681_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_01dfca00de0fe3d04bb814c77fd1ca76ec2e41d78f40def8a4caa918441c70b2 = $this->env->getExtension("native_profiler");
        $__internal_01dfca00de0fe3d04bb814c77fd1ca76ec2e41d78f40def8a4caa918441c70b2->enter($__internal_01dfca00de0fe3d04bb814c77fd1ca76ec2e41d78f40def8a4caa918441c70b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Commentaires list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titrecommentaire</th>
                <th>Datecommentaire</th>
                <th>Notemoyennecommentaire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commentaires_show", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "titreCommentaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["commentaire"], "dateCommentaire", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commentaire"], "dateCommentaire", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "noteMoyenneCommentaire", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commentaires_show", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commentaires_edit", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("commentaires_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_01dfca00de0fe3d04bb814c77fd1ca76ec2e41d78f40def8a4caa918441c70b2->leave($__internal_01dfca00de0fe3d04bb814c77fd1ca76ec2e41d78f40def8a4caa918441c70b2_prof);

    }

    public function getTemplateName()
    {
        return ":commentaires:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  103 => 35,  91 => 29,  85 => 26,  78 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Commentaires list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Titrecommentaire</th>*/
/*                 <th>Datecommentaire</th>*/
/*                 <th>Notemoyennecommentaire</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for commentaire in commentaires %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('commentaires_show', { 'id': commentaire.id }) }}">{{ commentaire.id }}</a></td>*/
/*                 <td>{{ commentaire.titreCommentaire }}</td>*/
/*                 <td>{% if commentaire.dateCommentaire %}{{ commentaire.dateCommentaire|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ commentaire.noteMoyenneCommentaire }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('commentaires_show', { 'id': commentaire.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('commentaires_edit', { 'id': commentaire.id }) }}">edit</a>*/
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
/*             <a href="{{ path('commentaires_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
