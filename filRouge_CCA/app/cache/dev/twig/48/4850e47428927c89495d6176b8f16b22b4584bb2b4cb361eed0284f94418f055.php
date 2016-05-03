<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_a410ba888aab64d5b1184f8a3579478980b84b9e33b2303d5cfad8a730865f1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_a4d985bdb8542d4e16d4afcf701e826e3cbcd2ccfcb700196470d8fa8d555a9d = $this->env->getExtension("native_profiler");
        $__internal_a4d985bdb8542d4e16d4afcf701e826e3cbcd2ccfcb700196470d8fa8d555a9d->enter($__internal_a4d985bdb8542d4e16d4afcf701e826e3cbcd2ccfcb700196470d8fa8d555a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4d985bdb8542d4e16d4afcf701e826e3cbcd2ccfcb700196470d8fa8d555a9d->leave($__internal_a4d985bdb8542d4e16d4afcf701e826e3cbcd2ccfcb700196470d8fa8d555a9d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6a337beacb5cca3790c990a8996a727b91502778109d49ab04ef3fd3d4ce240 = $this->env->getExtension("native_profiler");
        $__internal_d6a337beacb5cca3790c990a8996a727b91502778109d49ab04ef3fd3d4ce240->enter($__internal_d6a337beacb5cca3790c990a8996a727b91502778109d49ab04ef3fd3d4ce240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_d6a337beacb5cca3790c990a8996a727b91502778109d49ab04ef3fd3d4ce240->leave($__internal_d6a337beacb5cca3790c990a8996a727b91502778109d49ab04ef3fd3d4ce240_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
