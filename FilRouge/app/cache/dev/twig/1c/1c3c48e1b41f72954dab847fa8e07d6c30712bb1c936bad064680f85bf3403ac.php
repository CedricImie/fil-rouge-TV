<?php

/* MovieBundle:Default:index.html.twig */
class __TwigTemplate_118a4780d489bbb763756e7f69577333ddfefb623cf8d75f8cb5c111ddd2505f extends Twig_Template
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
        $__internal_82d8dd719caf2e63e991fba62a7daef107e8e50d7c31659cf9b43376ed25b6de = $this->env->getExtension("native_profiler");
        $__internal_82d8dd719caf2e63e991fba62a7daef107e8e50d7c31659cf9b43376ed25b6de->enter($__internal_82d8dd719caf2e63e991fba62a7daef107e8e50d7c31659cf9b43376ed25b6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MovieBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82d8dd719caf2e63e991fba62a7daef107e8e50d7c31659cf9b43376ed25b6de->leave($__internal_82d8dd719caf2e63e991fba62a7daef107e8e50d7c31659cf9b43376ed25b6de_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c622853f14c57ef70f6abec5dfe68fba6d5a22b1bc129cd42013b872a18c105 = $this->env->getExtension("native_profiler");
        $__internal_7c622853f14c57ef70f6abec5dfe68fba6d5a22b1bc129cd42013b872a18c105->enter($__internal_7c622853f14c57ef70f6abec5dfe68fba6d5a22b1bc129cd42013b872a18c105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TalkSeries";
        
        $__internal_7c622853f14c57ef70f6abec5dfe68fba6d5a22b1bc129cd42013b872a18c105->leave($__internal_7c622853f14c57ef70f6abec5dfe68fba6d5a22b1bc129cd42013b872a18c105_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9823549b376124289607bd4dcedddc70a1d7c1796a9e6b2455576b015cec2e29 = $this->env->getExtension("native_profiler");
        $__internal_9823549b376124289607bd4dcedddc70a1d7c1796a9e6b2455576b015cec2e29->enter($__internal_9823549b376124289607bd4dcedddc70a1d7c1796a9e6b2455576b015cec2e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_9823549b376124289607bd4dcedddc70a1d7c1796a9e6b2455576b015cec2e29->leave($__internal_9823549b376124289607bd4dcedddc70a1d7c1796a9e6b2455576b015cec2e29_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_911493df43f75fb7f963a7452f1b591a205661aa12aca1d837f2c1392c1020d4 = $this->env->getExtension("native_profiler");
        $__internal_911493df43f75fb7f963a7452f1b591a205661aa12aca1d837f2c1392c1020d4->enter($__internal_911493df43f75fb7f963a7452f1b591a205661aa12aca1d837f2c1392c1020d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "<div class=\"header\">
  <div class=\"row-1\">
    <div class=\"col-md-10\">
      <div class=\"logo\">
        <img src=\"#\" alt=\"Logo du site\" />
      </div>
    </div>
    <div class=\"col-md-2\">
      <div class=\"login\">
        <input class=\"form-control\" type=\"text\" name=\"login\" placeholder=\"Identifiant\">
      </div>
      <div class=\"password\">
        <input class=\"form-control\" type=\"text\" name=\"password\" placeholder=\"Mot de passe\">
      </div>
      <div class=\"btnConnexion\">
          <button class=\"btn btn-default\" type=\"button\">Connexion</button>
      </div>
    </div>
  </div>
  <div class=\"row-2\">
    <button class =\"btn btn-default\" type=\"button\" name=\"btnFr\">Fr</button>
    <button class =\"btn btn-default\" type=\"button\" name=\"btnEn\">En</button>
  </div>
  <div class=\"row-3\">
    <div class=\"col-md-4 col-md-offset-4\">
      <input class=\"form-control input-lg\" type=\"text\" name=\"search\" placeholder=\"Recherche\">
    </div>
  </div>
</div>
<div class=\"main\">

</div>
<div class=\"footer\">

</div>
";
        
        $__internal_911493df43f75fb7f963a7452f1b591a205661aa12aca1d837f2c1392c1020d4->leave($__internal_911493df43f75fb7f963a7452f1b591a205661aa12aca1d837f2c1392c1020d4_prof);

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
/*   <div class="row-1">*/
/*     <div class="col-md-10">*/
/*       <div class="logo">*/
/*         <img src="#" alt="Logo du site" />*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-md-2">*/
/*       <div class="login">*/
/*         <input class="form-control" type="text" name="login" placeholder="Identifiant">*/
/*       </div>*/
/*       <div class="password">*/
/*         <input class="form-control" type="text" name="password" placeholder="Mot de passe">*/
/*       </div>*/
/*       <div class="btnConnexion">*/
/*           <button class="btn btn-default" type="button">Connexion</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="row-2">*/
/*     <button class ="btn btn-default" type="button" name="btnFr">Fr</button>*/
/*     <button class ="btn btn-default" type="button" name="btnEn">En</button>*/
/*   </div>*/
/*   <div class="row-3">*/
/*     <div class="col-md-4 col-md-offset-4">*/
/*       <input class="form-control input-lg" type="text" name="search" placeholder="Recherche">*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <div class="main">*/
/* */
/* </div>*/
/* <div class="footer">*/
/* */
/* </div>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
