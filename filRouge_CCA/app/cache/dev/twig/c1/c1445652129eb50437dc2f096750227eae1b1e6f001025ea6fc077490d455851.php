<?php

/* :episodes:show.html.twig */
class __TwigTemplate_92125bfc98b1caffa10a0934bda4d016a51313f75203d404218282a40c6d399c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":episodes:show.html.twig", 1);
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
        $__internal_033892cd71e5f01bb2d397579653f81797b9541dfa5daf88390a7d3f1830e01f = $this->env->getExtension("native_profiler");
        $__internal_033892cd71e5f01bb2d397579653f81797b9541dfa5daf88390a7d3f1830e01f->enter($__internal_033892cd71e5f01bb2d397579653f81797b9541dfa5daf88390a7d3f1830e01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":episodes:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_033892cd71e5f01bb2d397579653f81797b9541dfa5daf88390a7d3f1830e01f->leave($__internal_033892cd71e5f01bb2d397579653f81797b9541dfa5daf88390a7d3f1830e01f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_42699eff21e34059928878a6bcb325f156b928cbe6c61ebef34325a943d51b16 = $this->env->getExtension("native_profiler");
        $__internal_42699eff21e34059928878a6bcb325f156b928cbe6c61ebef34325a943d51b16->enter($__internal_42699eff21e34059928878a6bcb325f156b928cbe6c61ebef34325a943d51b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Episodes</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomepisode</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "nomEpisode", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Resumeepisode</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "resumeEpisode", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dureeepisode</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "dureeEpisode", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateepisode</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "dateEpisode", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "dateEpisode", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Notemoyenneepisode</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "noteMoyenneEpisode", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Classificationepisode</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "classificationEpisode", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Diffusionepisode</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "diffusionEpisode", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "diffusionEpisode", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("episodes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("episodes_edit", array("id" => $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_42699eff21e34059928878a6bcb325f156b928cbe6c61ebef34325a943d51b16->leave($__internal_42699eff21e34059928878a6bcb325f156b928cbe6c61ebef34325a943d51b16_prof);

    }

    public function getTemplateName()
    {
        return ":episodes:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 53,  123 => 51,  117 => 48,  111 => 45,  99 => 38,  92 => 34,  85 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Episodes</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ episode.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomepisode</th>*/
/*                 <td>{{ episode.nomEpisode }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Resumeepisode</th>*/
/*                 <td>{{ episode.resumeEpisode }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dureeepisode</th>*/
/*                 <td>{{ episode.dureeEpisode }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dateepisode</th>*/
/*                 <td>{% if episode.dateEpisode %}{{ episode.dateEpisode|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Notemoyenneepisode</th>*/
/*                 <td>{{ episode.noteMoyenneEpisode }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Classificationepisode</th>*/
/*                 <td>{{ episode.classificationEpisode }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Diffusionepisode</th>*/
/*                 <td>{% if episode.diffusionEpisode %}{{ episode.diffusionEpisode|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('episodes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('episodes_edit', { 'id': episode.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
