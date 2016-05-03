<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4f2a1b56f6684b6871cb0016cb7b702a3ce0137b35f827fb43a928c4a4e19d48 extends Twig_Template
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
        $__internal_5d27b6520110bd9bb53de832ed1065aa8dd23c156e86bd7bca9564f7805ee840 = $this->env->getExtension("native_profiler");
        $__internal_5d27b6520110bd9bb53de832ed1065aa8dd23c156e86bd7bca9564f7805ee840->enter($__internal_5d27b6520110bd9bb53de832ed1065aa8dd23c156e86bd7bca9564f7805ee840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5d27b6520110bd9bb53de832ed1065aa8dd23c156e86bd7bca9564f7805ee840->leave($__internal_5d27b6520110bd9bb53de832ed1065aa8dd23c156e86bd7bca9564f7805ee840_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1702fe4e22236cafc3410bdba1eddd7b632cdb31dd978f7692f645fe08420bd2 = $this->env->getExtension("native_profiler");
        $__internal_1702fe4e22236cafc3410bdba1eddd7b632cdb31dd978f7692f645fe08420bd2->enter($__internal_1702fe4e22236cafc3410bdba1eddd7b632cdb31dd978f7692f645fe08420bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1702fe4e22236cafc3410bdba1eddd7b632cdb31dd978f7692f645fe08420bd2->leave($__internal_1702fe4e22236cafc3410bdba1eddd7b632cdb31dd978f7692f645fe08420bd2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_179e10471603f1a1ab0dad7246a20a76cab9f3b563db5f3c7427bc6b98b798b3 = $this->env->getExtension("native_profiler");
        $__internal_179e10471603f1a1ab0dad7246a20a76cab9f3b563db5f3c7427bc6b98b798b3->enter($__internal_179e10471603f1a1ab0dad7246a20a76cab9f3b563db5f3c7427bc6b98b798b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_179e10471603f1a1ab0dad7246a20a76cab9f3b563db5f3c7427bc6b98b798b3->leave($__internal_179e10471603f1a1ab0dad7246a20a76cab9f3b563db5f3c7427bc6b98b798b3_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c409577fbed8ab267866370324686d68042aeedaa324237e73b1e6bb10a914d0 = $this->env->getExtension("native_profiler");
        $__internal_c409577fbed8ab267866370324686d68042aeedaa324237e73b1e6bb10a914d0->enter($__internal_c409577fbed8ab267866370324686d68042aeedaa324237e73b1e6bb10a914d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c409577fbed8ab267866370324686d68042aeedaa324237e73b1e6bb10a914d0->leave($__internal_c409577fbed8ab267866370324686d68042aeedaa324237e73b1e6bb10a914d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
