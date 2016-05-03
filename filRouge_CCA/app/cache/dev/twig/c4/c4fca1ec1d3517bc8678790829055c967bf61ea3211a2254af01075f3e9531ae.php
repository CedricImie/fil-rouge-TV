<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_04882562d318a157bc731ee05c2d3c90c0b8c08e4a5c92d08fdb14ab57947369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_898ca682fee010972342dc9e44adc735a61de3b24e82e11d8cb15b6058e873e6 = $this->env->getExtension("native_profiler");
        $__internal_898ca682fee010972342dc9e44adc735a61de3b24e82e11d8cb15b6058e873e6->enter($__internal_898ca682fee010972342dc9e44adc735a61de3b24e82e11d8cb15b6058e873e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_898ca682fee010972342dc9e44adc735a61de3b24e82e11d8cb15b6058e873e6->leave($__internal_898ca682fee010972342dc9e44adc735a61de3b24e82e11d8cb15b6058e873e6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
