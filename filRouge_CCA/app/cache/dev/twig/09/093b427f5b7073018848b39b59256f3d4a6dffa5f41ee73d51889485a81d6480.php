<?php

/* :moderateurs:show.html.twig */
class __TwigTemplate_e353fc7866c0ad2b2ed89d310ba4cf509cf22f379284f42f7a492b69a7a7569b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":moderateurs:show.html.twig", 1);
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
        $__internal_f3c6698f7a2baca495aea933e1b5c2663032799a2468bbab03c52619d0e672fe = $this->env->getExtension("native_profiler");
        $__internal_f3c6698f7a2baca495aea933e1b5c2663032799a2468bbab03c52619d0e672fe->enter($__internal_f3c6698f7a2baca495aea933e1b5c2663032799a2468bbab03c52619d0e672fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":moderateurs:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3c6698f7a2baca495aea933e1b5c2663032799a2468bbab03c52619d0e672fe->leave($__internal_f3c6698f7a2baca495aea933e1b5c2663032799a2468bbab03c52619d0e672fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c690b2f32d7d668fa741680007fc1aa120eb1e7162601dfba15085d5486aa7c = $this->env->getExtension("native_profiler");
        $__internal_9c690b2f32d7d668fa741680007fc1aa120eb1e7162601dfba15085d5486aa7c->enter($__internal_9c690b2f32d7d668fa741680007fc1aa120eb1e7162601dfba15085d5486aa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Moderateurs</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moderateur"]) ? $context["moderateur"] : $this->getContext($context, "moderateur")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datedebutmoderateur</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["moderateur"]) ? $context["moderateur"] : $this->getContext($context, "moderateur")), "dateDebutModerateur", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["moderateur"]) ? $context["moderateur"] : $this->getContext($context, "moderateur")), "dateDebutModerateur", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datefinmoderateur</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["moderateur"]) ? $context["moderateur"] : $this->getContext($context, "moderateur")), "dateFinModerateur", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["moderateur"]) ? $context["moderateur"] : $this->getContext($context, "moderateur")), "dateFinModerateur", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("moderateurs_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moderateurs_edit", array("id" => $this->getAttribute((isset($context["moderateur"]) ? $context["moderateur"] : $this->getContext($context, "moderateur")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9c690b2f32d7d668fa741680007fc1aa120eb1e7162601dfba15085d5486aa7c->leave($__internal_9c690b2f32d7d668fa741680007fc1aa120eb1e7162601dfba15085d5486aa7c_prof);

    }

    public function getTemplateName()
    {
        return ":moderateurs:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  88 => 31,  82 => 28,  76 => 25,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Moderateurs</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ moderateur.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datedebutmoderateur</th>*/
/*                 <td>{% if moderateur.dateDebutModerateur %}{{ moderateur.dateDebutModerateur|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datefinmoderateur</th>*/
/*                 <td>{% if moderateur.dateFinModerateur %}{{ moderateur.dateFinModerateur|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('moderateurs_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('moderateurs_edit', { 'id': moderateur.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
