<?php

/* NurikabeStarRatingBundle:Form:fields.html.twig */
class __TwigTemplate_33795e2d81aa4e8641ab484d446db4c1742baccc82e84b11ab7ba60ed212c8a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'star_rating_widget' => array($this, 'block_star_rating_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99bf399585f59f3a43fbb006750d3a46856a250956a04aaa2a99c9e33483aa1e = $this->env->getExtension("native_profiler");
        $__internal_99bf399585f59f3a43fbb006750d3a46856a250956a04aaa2a99c9e33483aa1e->enter($__internal_99bf399585f59f3a43fbb006750d3a46856a250956a04aaa2a99c9e33483aa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NurikabeStarRatingBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('star_rating_widget', $context, $blocks);
        
        $__internal_99bf399585f59f3a43fbb006750d3a46856a250956a04aaa2a99c9e33483aa1e->leave($__internal_99bf399585f59f3a43fbb006750d3a46856a250956a04aaa2a99c9e33483aa1e_prof);

    }

    public function block_star_rating_widget($context, array $blocks = array())
    {
        $__internal_b467bbc661cd642468d144be07c4b7e952df4567a8207a8f344bd232b8b105c2 = $this->env->getExtension("native_profiler");
        $__internal_b467bbc661cd642468d144be07c4b7e952df4567a8207a8f344bd232b8b105c2->enter($__internal_b467bbc661cd642468d144be07c4b7e952df4567a8207a8f344bd232b8b105c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "star_rating_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 4
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 6
                echo "                    ";
                // line 7
                echo "                    ";
                $context["starredClass"] = ("star" . (($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "required", array())) ? (" required") : ("")));
                // line 8
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("class" => (isset($context["starredClass"]) ? $context["starredClass"] : $this->getContext($context, "starredClass")), "title" => $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()))));
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "            </div>
        ";
        } else {
            // line 12
            echo "            ";
            // line 13
            echo "            ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
        ";
        }
        // line 15
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b467bbc661cd642468d144be07c4b7e952df4567a8207a8f344bd232b8b105c2->leave($__internal_b467bbc661cd642468d144be07c4b7e952df4567a8207a8f344bd232b8b105c2_prof);

    }

    public function getTemplateName()
    {
        return "NurikabeStarRatingBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  70 => 13,  68 => 12,  64 => 10,  55 => 8,  52 => 7,  50 => 6,  46 => 5,  41 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block star_rating_widget %}*/
/*     {% spaceless %}*/
/*         {% if expanded %}*/
/*             <div {{ block('widget_container_attributes') }}>*/
/*                 {% for child in form %}*/
/*                     {# Create class string with "star" appended #}*/
/*                     {% set starredClass = 'star' ~ (child.vars.required ? ' required') %}*/
/*                     {{ form_widget(child, {'attr': {'class': starredClass, 'title': child.vars.label}}) }}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         {% else %}*/
/*             {# Let the choice widget render the select tag #}*/
/*             {{ block('choice_widget') }}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock star_rating_widget %}*/
/* */
