<?php

/* user/index.html.twig */
class __TwigTemplate_49467f32ba9637344dea441a8d75ae10826b3851b4fd9fac1a5d64fa9a98b0ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_a4850d4d3d3a8e03818561f277df1935d155de86ebad9dfd620549c098bc85c2 = $this->env->getExtension("native_profiler");
        $__internal_a4850d4d3d3a8e03818561f277df1935d155de86ebad9dfd620549c098bc85c2->enter($__internal_a4850d4d3d3a8e03818561f277df1935d155de86ebad9dfd620549c098bc85c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4850d4d3d3a8e03818561f277df1935d155de86ebad9dfd620549c098bc85c2->leave($__internal_a4850d4d3d3a8e03818561f277df1935d155de86ebad9dfd620549c098bc85c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bff0d57288414aa12eb38132ff794387069945600c30312c56a5de8def812389 = $this->env->getExtension("native_profiler");
        $__internal_bff0d57288414aa12eb38132ff794387069945600c30312c56a5de8def812389->enter($__internal_bff0d57288414aa12eb38132ff794387069945600c30312c56a5de8def812389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Pseudoutilisateur</th>
                <th>Prenomutilisateur</th>
                <th>Nomutilisateur</th>
                <th>Adresseemailutilisateur</th>
                <th>Datenaissanceutilisateur</th>
                <th>Photoprofilutilisateur</th>
                <th>Motdepasseutilisateur</th>
                <th>Sexeutilisateur</th>
                <th>Facebookutilisateur</th>
                <th>Twitterutilisateur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "pseudoUtilisateur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenomUtilisateur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nomUtilisateur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "adresseEmailUtilisateur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["user"], "dateNaissanceUtilisateur", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "dateNaissanceUtilisateur", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "photoProfilUtilisateur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "motDePasseUtilisateur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "sexeUtilisateur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "facebookUtilisateur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "twitterUtilisateur", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_bff0d57288414aa12eb38132ff794387069945600c30312c56a5de8def812389->leave($__internal_bff0d57288414aa12eb38132ff794387069945600c30312c56a5de8def812389_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 54,  138 => 49,  126 => 43,  120 => 40,  113 => 36,  109 => 35,  105 => 34,  101 => 33,  97 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  69 => 26,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Pseudoutilisateur</th>*/
/*                 <th>Prenomutilisateur</th>*/
/*                 <th>Nomutilisateur</th>*/
/*                 <th>Adresseemailutilisateur</th>*/
/*                 <th>Datenaissanceutilisateur</th>*/
/*                 <th>Photoprofilutilisateur</th>*/
/*                 <th>Motdepasseutilisateur</th>*/
/*                 <th>Sexeutilisateur</th>*/
/*                 <th>Facebookutilisateur</th>*/
/*                 <th>Twitterutilisateur</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for user in users %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('user_show', { 'id': user.id }) }}">{{ user.id }}</a></td>*/
/*                 <td>{{ user.pseudoUtilisateur }}</td>*/
/*                 <td>{{ user.prenomUtilisateur }}</td>*/
/*                 <td>{{ user.nomUtilisateur }}</td>*/
/*                 <td>{{ user.adresseEmailUtilisateur }}</td>*/
/*                 <td>{% if user.dateNaissanceUtilisateur %}{{ user.dateNaissanceUtilisateur|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ user.photoProfilUtilisateur }}</td>*/
/*                 <td>{{ user.motDePasseUtilisateur }}</td>*/
/*                 <td>{{ user.sexeUtilisateur }}</td>*/
/*                 <td>{{ user.facebookUtilisateur }}</td>*/
/*                 <td>{{ user.twitterUtilisateur }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('user_show', { 'id': user.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('user_edit', { 'id': user.id }) }}">edit</a>*/
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
/*             <a href="{{ path('user_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
