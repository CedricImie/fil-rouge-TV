<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_813c5777687b5b3ec11123bcd8d008ba2afad02f28885b773cf6045dae41ec9c extends Twig_Template
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
        $__internal_d11a0a33cc97cf8e2ba036e4a95855daa0ffa0e0cc6793398a3d829471692ecd = $this->env->getExtension("native_profiler");
        $__internal_d11a0a33cc97cf8e2ba036e4a95855daa0ffa0e0cc6793398a3d829471692ecd->enter($__internal_d11a0a33cc97cf8e2ba036e4a95855daa0ffa0e0cc6793398a3d829471692ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d11a0a33cc97cf8e2ba036e4a95855daa0ffa0e0cc6793398a3d829471692ecd->leave($__internal_d11a0a33cc97cf8e2ba036e4a95855daa0ffa0e0cc6793398a3d829471692ecd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_16556a387486148f457bf677cc5bdb57cd355835b0ec13fb29f6bf7278b989c0 = $this->env->getExtension("native_profiler");
        $__internal_16556a387486148f457bf677cc5bdb57cd355835b0ec13fb29f6bf7278b989c0->enter($__internal_16556a387486148f457bf677cc5bdb57cd355835b0ec13fb29f6bf7278b989c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_16556a387486148f457bf677cc5bdb57cd355835b0ec13fb29f6bf7278b989c0->leave($__internal_16556a387486148f457bf677cc5bdb57cd355835b0ec13fb29f6bf7278b989c0_prof);

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
