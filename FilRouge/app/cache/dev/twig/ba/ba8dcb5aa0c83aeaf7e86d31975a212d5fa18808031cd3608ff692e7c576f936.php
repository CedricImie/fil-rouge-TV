<?php

/* MovieBundle:Default:index.html.twig */
class __TwigTemplate_4545028d7bd942b08f2b901ac731f4e10b8c0385a8cab237d75d314a31ac18c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MovieBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb1508f926ae9a58f7052795552254f1f0c4e6758d59a626c3c66c5a1bac826b = $this->env->getExtension("native_profiler");
        $__internal_cb1508f926ae9a58f7052795552254f1f0c4e6758d59a626c3c66c5a1bac826b->enter($__internal_cb1508f926ae9a58f7052795552254f1f0c4e6758d59a626c3c66c5a1bac826b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MovieBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb1508f926ae9a58f7052795552254f1f0c4e6758d59a626c3c66c5a1bac826b->leave($__internal_cb1508f926ae9a58f7052795552254f1f0c4e6758d59a626c3c66c5a1bac826b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f258d548694564865d31445990080d86306b9ebe6d2a46fb3200e48712fb291e = $this->env->getExtension("native_profiler");
        $__internal_f258d548694564865d31445990080d86306b9ebe6d2a46fb3200e48712fb291e->enter($__internal_f258d548694564865d31445990080d86306b9ebe6d2a46fb3200e48712fb291e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TalkSeries";
        
        $__internal_f258d548694564865d31445990080d86306b9ebe6d2a46fb3200e48712fb291e->leave($__internal_f258d548694564865d31445990080d86306b9ebe6d2a46fb3200e48712fb291e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b61c5159e4ab4f1a2a17617e0c6a219660e23f3e41fa184048e86335257380ca = $this->env->getExtension("native_profiler");
        $__internal_b61c5159e4ab4f1a2a17617e0c6a219660e23f3e41fa184048e86335257380ca->enter($__internal_b61c5159e4ab4f1a2a17617e0c6a219660e23f3e41fa184048e86335257380ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_b61c5159e4ab4f1a2a17617e0c6a219660e23f3e41fa184048e86335257380ca->leave($__internal_b61c5159e4ab4f1a2a17617e0c6a219660e23f3e41fa184048e86335257380ca_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_d13c312dfea2b39deceed9d4f924962b26a333702cdacfd26c80ab5c99ac8ad3 = $this->env->getExtension("native_profiler");
        $__internal_d13c312dfea2b39deceed9d4f924962b26a333702cdacfd26c80ab5c99ac8ad3->enter($__internal_d13c312dfea2b39deceed9d4f924962b26a333702cdacfd26c80ab5c99ac8ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "<div class=\"header\">
  <h1>Notre site TalkSeries</h1>
</div>
";
        
        $__internal_d13c312dfea2b39deceed9d4f924962b26a333702cdacfd26c80ab5c99ac8ad3->leave($__internal_d13c312dfea2b39deceed9d4f924962b26a333702cdacfd26c80ab5c99ac8ad3_prof);

    }

    public function getTemplateName()
    {
        return "MovieBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 6,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}TalkSeries{% endblock %}*/
/* {% block body %}*/
/* {% block header %}*/
/* <div class="header">*/
/*   <h1>Notre site TalkSeries</h1>*/
/* </div>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
