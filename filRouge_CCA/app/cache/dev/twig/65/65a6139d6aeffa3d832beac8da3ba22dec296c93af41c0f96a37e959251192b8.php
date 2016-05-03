<?php

/* :user:show.html.twig */
class __TwigTemplate_2c31ecb10b11ca1353ae108bcea92dc8012b4cb804edc96ad6c37ebcb4e21c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:show.html.twig", 1);
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
        $__internal_88a55df4b2f9e3743f1bffbd7395bbd052b816bf7e0cce6a40ae273e8ce19ec7 = $this->env->getExtension("native_profiler");
        $__internal_88a55df4b2f9e3743f1bffbd7395bbd052b816bf7e0cce6a40ae273e8ce19ec7->enter($__internal_88a55df4b2f9e3743f1bffbd7395bbd052b816bf7e0cce6a40ae273e8ce19ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88a55df4b2f9e3743f1bffbd7395bbd052b816bf7e0cce6a40ae273e8ce19ec7->leave($__internal_88a55df4b2f9e3743f1bffbd7395bbd052b816bf7e0cce6a40ae273e8ce19ec7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e2cd90c48f344a147d5ed91d699ef309a1c08e1376e375e13631f5f2f547001 = $this->env->getExtension("native_profiler");
        $__internal_7e2cd90c48f344a147d5ed91d699ef309a1c08e1376e375e13631f5f2f547001->enter($__internal_7e2cd90c48f344a147d5ed91d699ef309a1c08e1376e375e13631f5f2f547001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pseudoutilisateur</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudoUtilisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenomutilisateur</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenomUtilisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomutilisateur</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nomUtilisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresseemailutilisateur</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresseEmailUtilisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datenaissanceutilisateur</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateNaissanceUtilisateur", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateNaissanceUtilisateur", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Photoprofilutilisateur</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photoProfilUtilisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Motdepasseutilisateur</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "motDePasseUtilisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexeutilisateur</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "sexeUtilisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Facebookutilisateur</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "facebookUtilisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Twitterutilisateur</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "twitterUtilisateur", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7e2cd90c48f344a147d5ed91d699ef309a1c08e1376e375e13631f5f2f547001->leave($__internal_7e2cd90c48f344a147d5ed91d699ef309a1c08e1376e375e13631f5f2f547001_prof);

    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 65,  142 => 63,  136 => 60,  130 => 57,  120 => 50,  113 => 46,  106 => 42,  99 => 38,  92 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ user.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Pseudoutilisateur</th>*/
/*                 <td>{{ user.pseudoUtilisateur }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prenomutilisateur</th>*/
/*                 <td>{{ user.prenomUtilisateur }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomutilisateur</th>*/
/*                 <td>{{ user.nomUtilisateur }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Adresseemailutilisateur</th>*/
/*                 <td>{{ user.adresseEmailUtilisateur }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datenaissanceutilisateur</th>*/
/*                 <td>{% if user.dateNaissanceUtilisateur %}{{ user.dateNaissanceUtilisateur|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Photoprofilutilisateur</th>*/
/*                 <td>{{ user.photoProfilUtilisateur }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Motdepasseutilisateur</th>*/
/*                 <td>{{ user.motDePasseUtilisateur }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Sexeutilisateur</th>*/
/*                 <td>{{ user.sexeUtilisateur }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Facebookutilisateur</th>*/
/*                 <td>{{ user.facebookUtilisateur }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Twitterutilisateur</th>*/
/*                 <td>{{ user.twitterUtilisateur }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('user_edit', { 'id': user.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
