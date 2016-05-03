<?php

/* MovieBundle:Default:footer.html.twig */
class __TwigTemplate_7095dbc64b58ab884c937e2a281ac460093a7531eca89e0170f7802420297b81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MovieBundle:Default:footer.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8e89038840f949963c4b19737e1158e20a79295287890c4b156410d93caaae8 = $this->env->getExtension("native_profiler");
        $__internal_d8e89038840f949963c4b19737e1158e20a79295287890c4b156410d93caaae8->enter($__internal_d8e89038840f949963c4b19737e1158e20a79295287890c4b156410d93caaae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MovieBundle:Default:footer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8e89038840f949963c4b19737e1158e20a79295287890c4b156410d93caaae8->leave($__internal_d8e89038840f949963c4b19737e1158e20a79295287890c4b156410d93caaae8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_055c475fa3abc026c0f7efcf1387d5ab322e1805db79df20bffb02052573d467 = $this->env->getExtension("native_profiler");
        $__internal_055c475fa3abc026c0f7efcf1387d5ab322e1805db79df20bffb02052573d467->enter($__internal_055c475fa3abc026c0f7efcf1387d5ab322e1805db79df20bffb02052573d467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TalkSeries";
        
        $__internal_055c475fa3abc026c0f7efcf1387d5ab322e1805db79df20bffb02052573d467->leave($__internal_055c475fa3abc026c0f7efcf1387d5ab322e1805db79df20bffb02052573d467_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_30942ac39d199a685b5865b0f732e18adc15b807fcbcba16b80716ea69bb9353 = $this->env->getExtension("native_profiler");
        $__internal_30942ac39d199a685b5865b0f732e18adc15b807fcbcba16b80716ea69bb9353->enter($__internal_30942ac39d199a685b5865b0f732e18adc15b807fcbcba16b80716ea69bb9353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"footer\">
  <div class=\"row-F1\"></div>
  <div class=\"row-F2\">
    <p>Imie</p>
  </div>
  <div class=\"row-F3\"></div>
</div>

";
        
        $__internal_30942ac39d199a685b5865b0f732e18adc15b807fcbcba16b80716ea69bb9353->leave($__internal_30942ac39d199a685b5865b0f732e18adc15b807fcbcba16b80716ea69bb9353_prof);

    }

    public function getTemplateName()
    {
        return "MovieBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}TalkSeries{% endblock %}*/
/* {% block body %}*/
/* */
/* <div class="footer">*/
/*   <div class="row-F1"></div>*/
/*   <div class="row-F2">*/
/*     <p>Imie</p>*/
/*   </div>*/
/*   <div class="row-F3"></div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
