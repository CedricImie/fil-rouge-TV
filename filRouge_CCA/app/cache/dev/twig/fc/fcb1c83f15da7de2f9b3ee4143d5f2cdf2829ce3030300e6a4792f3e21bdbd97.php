<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_b514090e2cdab7dfaaca5b66607a548d9499d30ff6c996a8fe7bc5164cd071db extends Twig_Template
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
        $__internal_21ad8ac862383bea2e5c444e589396d8a18b6d16cdbf1de949c2ecf9a738ba21 = $this->env->getExtension("native_profiler");
        $__internal_21ad8ac862383bea2e5c444e589396d8a18b6d16cdbf1de949c2ecf9a738ba21->enter($__internal_21ad8ac862383bea2e5c444e589396d8a18b6d16cdbf1de949c2ecf9a738ba21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_21ad8ac862383bea2e5c444e589396d8a18b6d16cdbf1de949c2ecf9a738ba21->leave($__internal_21ad8ac862383bea2e5c444e589396d8a18b6d16cdbf1de949c2ecf9a738ba21_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
