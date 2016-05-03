<?php

/* :episodes:index.html.twig */
class __TwigTemplate_da223649bf7f9da230f76177853e0e639f2148124c992205241756e4198b08dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":episodes:index.html.twig", 1);
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
        $__internal_1b9e062208881980957b95941d9431f26c0c87df5f552a3a5a6e5353385fbddd = $this->env->getExtension("native_profiler");
        $__internal_1b9e062208881980957b95941d9431f26c0c87df5f552a3a5a6e5353385fbddd->enter($__internal_1b9e062208881980957b95941d9431f26c0c87df5f552a3a5a6e5353385fbddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":episodes:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b9e062208881980957b95941d9431f26c0c87df5f552a3a5a6e5353385fbddd->leave($__internal_1b9e062208881980957b95941d9431f26c0c87df5f552a3a5a6e5353385fbddd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e240574dd0825c5d925d1fe5f225b5c84129e8367b38c0994ecb020b3aba99a1 = $this->env->getExtension("native_profiler");
        $__internal_e240574dd0825c5d925d1fe5f225b5c84129e8367b38c0994ecb020b3aba99a1->enter($__internal_e240574dd0825c5d925d1fe5f225b5c84129e8367b38c0994ecb020b3aba99a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Episodes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nomepisode</th>
                <th>Resumeepisode</th>
                <th>Dureeepisode</th>
                <th>Dateepisode</th>
                <th>Notemoyenneepisode</th>
                <th>Classificationepisode</th>
                <th>Diffusionepisode</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["episodes"]) ? $context["episodes"] : $this->getContext($context, "episodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("episodes_show", array("id" => $this->getAttribute($context["episode"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "nomEpisode", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "resumeEpisode", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "dureeEpisode", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["episode"], "dateEpisode", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "dateEpisode", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "noteMoyenneEpisode", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "classificationEpisode", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["episode"], "diffusionEpisode", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "diffusionEpisode", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("episodes_show", array("id" => $this->getAttribute($context["episode"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("episodes_edit", array("id" => $this->getAttribute($context["episode"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("episodes_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_e240574dd0825c5d925d1fe5f225b5c84129e8367b38c0994ecb020b3aba99a1->leave($__internal_e240574dd0825c5d925d1fe5f225b5c84129e8367b38c0994ecb020b3aba99a1_prof);

    }

    public function getTemplateName()
    {
        return ":episodes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  125 => 43,  113 => 37,  107 => 34,  98 => 30,  94 => 29,  90 => 28,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Episodes list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nomepisode</th>*/
/*                 <th>Resumeepisode</th>*/
/*                 <th>Dureeepisode</th>*/
/*                 <th>Dateepisode</th>*/
/*                 <th>Notemoyenneepisode</th>*/
/*                 <th>Classificationepisode</th>*/
/*                 <th>Diffusionepisode</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for episode in episodes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('episodes_show', { 'id': episode.id }) }}">{{ episode.id }}</a></td>*/
/*                 <td>{{ episode.nomEpisode }}</td>*/
/*                 <td>{{ episode.resumeEpisode }}</td>*/
/*                 <td>{{ episode.dureeEpisode }}</td>*/
/*                 <td>{% if episode.dateEpisode %}{{ episode.dateEpisode|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ episode.noteMoyenneEpisode }}</td>*/
/*                 <td>{{ episode.classificationEpisode }}</td>*/
/*                 <td>{% if episode.diffusionEpisode %}{{ episode.diffusionEpisode|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('episodes_show', { 'id': episode.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('episodes_edit', { 'id': episode.id }) }}">edit</a>*/
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
/*             <a href="{{ path('episodes_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
