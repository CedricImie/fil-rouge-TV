<?php

/* :scenaristes:show.html.twig */
class __TwigTemplate_1c2db78b11ea4fb48147ca0d2e21796abe267ee273dc2a84646429cb29542a0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":scenaristes:show.html.twig", 1);
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
        $__internal_5bcb97eb4cb74deaa187e0b45854d0cbf6eb5d543b3b215ee024a0b54b71ce48 = $this->env->getExtension("native_profiler");
        $__internal_5bcb97eb4cb74deaa187e0b45854d0cbf6eb5d543b3b215ee024a0b54b71ce48->enter($__internal_5bcb97eb4cb74deaa187e0b45854d0cbf6eb5d543b3b215ee024a0b54b71ce48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":scenaristes:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bcb97eb4cb74deaa187e0b45854d0cbf6eb5d543b3b215ee024a0b54b71ce48->leave($__internal_5bcb97eb4cb74deaa187e0b45854d0cbf6eb5d543b3b215ee024a0b54b71ce48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3df6f7ae465789274520387ea9c30a420e61b508e4967bcfe5459b43af1c2474 = $this->env->getExtension("native_profiler");
        $__internal_3df6f7ae465789274520387ea9c30a420e61b508e4967bcfe5459b43af1c2474->enter($__internal_3df6f7ae465789274520387ea9c30a420e61b508e4967bcfe5459b43af1c2474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Scenaristes</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scenariste"]) ? $context["scenariste"] : $this->getContext($context, "scenariste")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomscenariste</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scenariste"]) ? $context["scenariste"] : $this->getContext($context, "scenariste")), "nomScenariste", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenomscenariste</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scenariste"]) ? $context["scenariste"] : $this->getContext($context, "scenariste")), "prenomScenariste", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datenaissancescenariste</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["scenariste"]) ? $context["scenariste"] : $this->getContext($context, "scenariste")), "dateNaissanceScenariste", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["scenariste"]) ? $context["scenariste"] : $this->getContext($context, "scenariste")), "dateNaissanceScenariste", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Bioscenariste</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scenariste"]) ? $context["scenariste"] : $this->getContext($context, "scenariste")), "bioScenariste", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("scenaristes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("scenaristes_edit", array("id" => $this->getAttribute((isset($context["scenariste"]) ? $context["scenariste"] : $this->getContext($context, "scenariste")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3df6f7ae465789274520387ea9c30a420e61b508e4967bcfe5459b43af1c2474->leave($__internal_3df6f7ae465789274520387ea9c30a420e61b508e4967bcfe5459b43af1c2474_prof);

    }

    public function getTemplateName()
    {
        return ":scenaristes:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 41,  100 => 39,  94 => 36,  88 => 33,  78 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Scenaristes</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ scenariste.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomscenariste</th>*/
/*                 <td>{{ scenariste.nomScenariste }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prenomscenariste</th>*/
/*                 <td>{{ scenariste.prenomScenariste }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datenaissancescenariste</th>*/
/*                 <td>{% if scenariste.dateNaissanceScenariste %}{{ scenariste.dateNaissanceScenariste|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Bioscenariste</th>*/
/*                 <td>{{ scenariste.bioScenariste }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('scenaristes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('scenaristes_edit', { 'id': scenariste.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
