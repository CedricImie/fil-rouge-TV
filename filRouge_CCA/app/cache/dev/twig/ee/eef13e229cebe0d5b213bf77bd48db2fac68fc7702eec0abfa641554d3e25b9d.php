<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_0f19bd9bb084fd96f843154bc6932510675c8fd436a9e43fa4d4101317f3134e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_d358a720117587ab8b448882581f12c3d8b63996f1cd454cc39876563354d272 = $this->env->getExtension("native_profiler");
        $__internal_d358a720117587ab8b448882581f12c3d8b63996f1cd454cc39876563354d272->enter($__internal_d358a720117587ab8b448882581f12c3d8b63996f1cd454cc39876563354d272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d358a720117587ab8b448882581f12c3d8b63996f1cd454cc39876563354d272->leave($__internal_d358a720117587ab8b448882581f12c3d8b63996f1cd454cc39876563354d272_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8773b6ff23c7dc39efac2996de11290245fa70a864476f80082a5d51794ecf19 = $this->env->getExtension("native_profiler");
        $__internal_8773b6ff23c7dc39efac2996de11290245fa70a864476f80082a5d51794ecf19->enter($__internal_8773b6ff23c7dc39efac2996de11290245fa70a864476f80082a5d51794ecf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_8773b6ff23c7dc39efac2996de11290245fa70a864476f80082a5d51794ecf19->leave($__internal_8773b6ff23c7dc39efac2996de11290245fa70a864476f80082a5d51794ecf19_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
