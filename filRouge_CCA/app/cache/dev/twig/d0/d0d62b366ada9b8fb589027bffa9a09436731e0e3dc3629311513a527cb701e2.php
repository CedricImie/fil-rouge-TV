<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_9585415f241172bfc6bc7fdc00ae17bf2ab9fc328f021ce459ff584ab08f7413 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6e1e0279355e009fb75a82dbbf66358fd38b9c128be8a41110ea07960c6a581 = $this->env->getExtension("native_profiler");
        $__internal_f6e1e0279355e009fb75a82dbbf66358fd38b9c128be8a41110ea07960c6a581->enter($__internal_f6e1e0279355e009fb75a82dbbf66358fd38b9c128be8a41110ea07960c6a581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6e1e0279355e009fb75a82dbbf66358fd38b9c128be8a41110ea07960c6a581->leave($__internal_f6e1e0279355e009fb75a82dbbf66358fd38b9c128be8a41110ea07960c6a581_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8defc4415a864a7d6b5ee2e5917daf3bae2ec2e87ebdbb133276d5479be8ab4 = $this->env->getExtension("native_profiler");
        $__internal_d8defc4415a864a7d6b5ee2e5917daf3bae2ec2e87ebdbb133276d5479be8ab4->enter($__internal_d8defc4415a864a7d6b5ee2e5917daf3bae2ec2e87ebdbb133276d5479be8ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d8defc4415a864a7d6b5ee2e5917daf3bae2ec2e87ebdbb133276d5479be8ab4->leave($__internal_d8defc4415a864a7d6b5ee2e5917daf3bae2ec2e87ebdbb133276d5479be8ab4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
