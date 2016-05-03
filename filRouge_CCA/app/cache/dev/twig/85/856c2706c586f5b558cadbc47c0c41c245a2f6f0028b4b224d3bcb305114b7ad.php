<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_8a816cd43b588c876e103610b7e7f890746c3d204e093305a80243fc5537286b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5fbf9813c48c48e21e2d6a49901c2acf13894a2b5001cc7b35fe47693fa0133 = $this->env->getExtension("native_profiler");
        $__internal_f5fbf9813c48c48e21e2d6a49901c2acf13894a2b5001cc7b35fe47693fa0133->enter($__internal_f5fbf9813c48c48e21e2d6a49901c2acf13894a2b5001cc7b35fe47693fa0133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f5fbf9813c48c48e21e2d6a49901c2acf13894a2b5001cc7b35fe47693fa0133->leave($__internal_f5fbf9813c48c48e21e2d6a49901c2acf13894a2b5001cc7b35fe47693fa0133_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_485a931c2e016b4f7966edb38184e3ad49787b97e8063f23edd39c3d3c3c0b8d = $this->env->getExtension("native_profiler");
        $__internal_485a931c2e016b4f7966edb38184e3ad49787b97e8063f23edd39c3d3c3c0b8d->enter($__internal_485a931c2e016b4f7966edb38184e3ad49787b97e8063f23edd39c3d3c3c0b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_485a931c2e016b4f7966edb38184e3ad49787b97e8063f23edd39c3d3c3c0b8d->leave($__internal_485a931c2e016b4f7966edb38184e3ad49787b97e8063f23edd39c3d3c3c0b8d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e2cbbbdee82d42b673a808ea4af5d4cc05ddc16dadc978d837af0fbc80e58cac = $this->env->getExtension("native_profiler");
        $__internal_e2cbbbdee82d42b673a808ea4af5d4cc05ddc16dadc978d837af0fbc80e58cac->enter($__internal_e2cbbbdee82d42b673a808ea4af5d4cc05ddc16dadc978d837af0fbc80e58cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e2cbbbdee82d42b673a808ea4af5d4cc05ddc16dadc978d837af0fbc80e58cac->leave($__internal_e2cbbbdee82d42b673a808ea4af5d4cc05ddc16dadc978d837af0fbc80e58cac_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f23ad1366bb98e8e56ed70ac0077ca2c2bf65914c67c580df38158eb484f5880 = $this->env->getExtension("native_profiler");
        $__internal_f23ad1366bb98e8e56ed70ac0077ca2c2bf65914c67c580df38158eb484f5880->enter($__internal_f23ad1366bb98e8e56ed70ac0077ca2c2bf65914c67c580df38158eb484f5880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f23ad1366bb98e8e56ed70ac0077ca2c2bf65914c67c580df38158eb484f5880->leave($__internal_f23ad1366bb98e8e56ed70ac0077ca2c2bf65914c67c580df38158eb484f5880_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
