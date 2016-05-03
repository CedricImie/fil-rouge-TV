<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f0b938dca263fe5c3ff1c27022bcdd53e8134663fdf9f7499b719226b4a1c994 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a6bf7986c7655baa50f90b97f13c23f0cd45af61272c97942df05abd4f2dd43 = $this->env->getExtension("native_profiler");
        $__internal_8a6bf7986c7655baa50f90b97f13c23f0cd45af61272c97942df05abd4f2dd43->enter($__internal_8a6bf7986c7655baa50f90b97f13c23f0cd45af61272c97942df05abd4f2dd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8a6bf7986c7655baa50f90b97f13c23f0cd45af61272c97942df05abd4f2dd43->leave($__internal_8a6bf7986c7655baa50f90b97f13c23f0cd45af61272c97942df05abd4f2dd43_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cffe5c2d82694e79cef411b5e33d5034ff11423aab812e9d84ab305b91a8742c = $this->env->getExtension("native_profiler");
        $__internal_cffe5c2d82694e79cef411b5e33d5034ff11423aab812e9d84ab305b91a8742c->enter($__internal_cffe5c2d82694e79cef411b5e33d5034ff11423aab812e9d84ab305b91a8742c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cffe5c2d82694e79cef411b5e33d5034ff11423aab812e9d84ab305b91a8742c->leave($__internal_cffe5c2d82694e79cef411b5e33d5034ff11423aab812e9d84ab305b91a8742c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
