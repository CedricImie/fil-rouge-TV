<?php

/* :commentaires:show.html.twig */
class __TwigTemplate_96666e459bbefd9bbb5dd562bc64320347469eae505c8f71259c458b39f49dc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":commentaires:show.html.twig", 1);
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
        $__internal_58c6777328f6986832329d8cac1942631fee53172761ccc4cb9933941b9da5e1 = $this->env->getExtension("native_profiler");
        $__internal_58c6777328f6986832329d8cac1942631fee53172761ccc4cb9933941b9da5e1->enter($__internal_58c6777328f6986832329d8cac1942631fee53172761ccc4cb9933941b9da5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":commentaires:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58c6777328f6986832329d8cac1942631fee53172761ccc4cb9933941b9da5e1->leave($__internal_58c6777328f6986832329d8cac1942631fee53172761ccc4cb9933941b9da5e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7a1aa834c6c7c1f2608ee7884a919cfe061c19a8ed5d071a29533e1989f0fec = $this->env->getExtension("native_profiler");
        $__internal_f7a1aa834c6c7c1f2608ee7884a919cfe061c19a8ed5d071a29533e1989f0fec->enter($__internal_f7a1aa834c6c7c1f2608ee7884a919cfe061c19a8ed5d071a29533e1989f0fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Commentaires</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titrecommentaire</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "titreCommentaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecommentaire</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "dateCommentaire", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "dateCommentaire", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Notemoyennecommentaire</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "noteMoyenneCommentaire", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("commentaires_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commentaires_edit", array("id" => $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f7a1aa834c6c7c1f2608ee7884a919cfe061c19a8ed5d071a29533e1989f0fec->leave($__internal_f7a1aa834c6c7c1f2608ee7884a919cfe061c19a8ed5d071a29533e1989f0fec_prof);

    }

    public function getTemplateName()
    {
        return ":commentaires:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  93 => 35,  87 => 32,  81 => 29,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Commentaires</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ commentaire.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Titrecommentaire</th>*/
/*                 <td>{{ commentaire.titreCommentaire }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datecommentaire</th>*/
/*                 <td>{% if commentaire.dateCommentaire %}{{ commentaire.dateCommentaire|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Notemoyennecommentaire</th>*/
/*                 <td>{{ commentaire.noteMoyenneCommentaire }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('commentaires_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('commentaires_edit', { 'id': commentaire.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
