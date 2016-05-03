<?php

/* :administrateurs:index.html.twig */
class __TwigTemplate_75884aa1b198259554a7bd39a3de6b682656f3159d3e63abbb1132adce888944 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":administrateurs:index.html.twig", 1);
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
        $__internal_b2ce7f8fff9f767f4e649fb5218a0936167be1a349b1e8aa890b6a6928be1c80 = $this->env->getExtension("native_profiler");
        $__internal_b2ce7f8fff9f767f4e649fb5218a0936167be1a349b1e8aa890b6a6928be1c80->enter($__internal_b2ce7f8fff9f767f4e649fb5218a0936167be1a349b1e8aa890b6a6928be1c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":administrateurs:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2ce7f8fff9f767f4e649fb5218a0936167be1a349b1e8aa890b6a6928be1c80->leave($__internal_b2ce7f8fff9f767f4e649fb5218a0936167be1a349b1e8aa890b6a6928be1c80_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c256df8a7b00cb654a1c11ef5be85dc8bad9bed14335bb8585e50171614faee = $this->env->getExtension("native_profiler");
        $__internal_2c256df8a7b00cb654a1c11ef5be85dc8bad9bed14335bb8585e50171614faee->enter($__internal_2c256df8a7b00cb654a1c11ef5be85dc8bad9bed14335bb8585e50171614faee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Administrateurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["administrateurs"]) ? $context["administrateurs"] : $this->getContext($context, "administrateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["administrateur"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("administrateurs_show", array("id" => $this->getAttribute($context["administrateur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["administrateur"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("administrateurs_show", array("id" => $this->getAttribute($context["administrateur"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("administrateurs_edit", array("id" => $this->getAttribute($context["administrateur"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['administrateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("administrateurs_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_2c256df8a7b00cb654a1c11ef5be85dc8bad9bed14335bb8585e50171614faee->leave($__internal_2c256df8a7b00cb654a1c11ef5be85dc8bad9bed14335bb8585e50171614faee_prof);

    }

    public function getTemplateName()
    {
        return ":administrateurs:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  86 => 29,  74 => 23,  68 => 20,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Administrateurs list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for administrateur in administrateurs %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('administrateurs_show', { 'id': administrateur.id }) }}">{{ administrateur.id }}</a></td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('administrateurs_show', { 'id': administrateur.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('administrateurs_edit', { 'id': administrateur.id }) }}">edit</a>*/
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
/*             <a href="{{ path('administrateurs_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
