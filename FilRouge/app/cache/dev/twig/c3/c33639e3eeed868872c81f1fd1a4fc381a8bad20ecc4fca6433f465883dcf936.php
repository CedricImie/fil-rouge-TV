<?php

/* ::base.html.twig */
class __TwigTemplate_a4afe148c11988f83bb868a63094ed7beec344b81cc8e233209bd3c3ce4f36f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec4eb047bfcc6572e1028c17a8c96b2c901b6333a6b4dca4614bf62fd4c3904e = $this->env->getExtension("native_profiler");
        $__internal_ec4eb047bfcc6572e1028c17a8c96b2c901b6333a6b4dca4614bf62fd4c3904e->enter($__internal_ec4eb047bfcc6572e1028c17a8c96b2c901b6333a6b4dca4614bf62fd4c3904e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ec4eb047bfcc6572e1028c17a8c96b2c901b6333a6b4dca4614bf62fd4c3904e->leave($__internal_ec4eb047bfcc6572e1028c17a8c96b2c901b6333a6b4dca4614bf62fd4c3904e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ad95b7adf826e2818b1462789edac213458865a25617412d55c04ad4ae6ae85 = $this->env->getExtension("native_profiler");
        $__internal_1ad95b7adf826e2818b1462789edac213458865a25617412d55c04ad4ae6ae85->enter($__internal_1ad95b7adf826e2818b1462789edac213458865a25617412d55c04ad4ae6ae85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1ad95b7adf826e2818b1462789edac213458865a25617412d55c04ad4ae6ae85->leave($__internal_1ad95b7adf826e2818b1462789edac213458865a25617412d55c04ad4ae6ae85_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_512ceaa10ee9686578670024e0a2b03f95511d511edc984f91c32cb5e204ee5e = $this->env->getExtension("native_profiler");
        $__internal_512ceaa10ee9686578670024e0a2b03f95511d511edc984f91c32cb5e204ee5e->enter($__internal_512ceaa10ee9686578670024e0a2b03f95511d511edc984f91c32cb5e204ee5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/style.css"), "html", null, true);
        echo "\" type=\"text/css\">";
        
        $__internal_512ceaa10ee9686578670024e0a2b03f95511d511edc984f91c32cb5e204ee5e->leave($__internal_512ceaa10ee9686578670024e0a2b03f95511d511edc984f91c32cb5e204ee5e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b074930ba909c35e52c7b4a5a8b4363cdca8031d880cea59708dea6828f472cc = $this->env->getExtension("native_profiler");
        $__internal_b074930ba909c35e52c7b4a5a8b4363cdca8031d880cea59708dea6828f472cc->enter($__internal_b074930ba909c35e52c7b4a5a8b4363cdca8031d880cea59708dea6828f472cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b074930ba909c35e52c7b4a5a8b4363cdca8031d880cea59708dea6828f472cc->leave($__internal_b074930ba909c35e52c7b4a5a8b4363cdca8031d880cea59708dea6828f472cc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1d0958bb663ea19ca078832b2b6f882cf4c7dd6cd74793c09db2a0ce0b6a6cad = $this->env->getExtension("native_profiler");
        $__internal_1d0958bb663ea19ca078832b2b6f882cf4c7dd6cd74793c09db2a0ce0b6a6cad->enter($__internal_1d0958bb663ea19ca078832b2b6f882cf4c7dd6cd74793c09db2a0ce0b6a6cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1d0958bb663ea19ca078832b2b6f882cf4c7dd6cd74793c09db2a0ce0b6a6cad->leave($__internal_1d0958bb663ea19ca078832b2b6f882cf4c7dd6cd74793c09db2a0ce0b6a6cad_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 11,  84 => 10,  70 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{% endblock %}</title>*/
/*         {% block stylesheets %}<link rel="stylesheet" href="{{ asset('/style.css') }}" type="text/css">{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
