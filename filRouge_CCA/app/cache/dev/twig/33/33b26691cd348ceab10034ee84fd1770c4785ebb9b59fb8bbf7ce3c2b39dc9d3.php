<?php

/* MovieBundle:Default:header.html.twig */
class __TwigTemplate_6747b0202f9a84c8c533908c3f9e595aad7d3c3bf3d5ef680cdf92cbd3e8f1d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MovieBundle:Default:header.html.twig", 1);
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
        $__internal_22d97f27fe8319c908aa88787e0759c2892e6542c7de824154f8e4efe9ba4184 = $this->env->getExtension("native_profiler");
        $__internal_22d97f27fe8319c908aa88787e0759c2892e6542c7de824154f8e4efe9ba4184->enter($__internal_22d97f27fe8319c908aa88787e0759c2892e6542c7de824154f8e4efe9ba4184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MovieBundle:Default:header.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22d97f27fe8319c908aa88787e0759c2892e6542c7de824154f8e4efe9ba4184->leave($__internal_22d97f27fe8319c908aa88787e0759c2892e6542c7de824154f8e4efe9ba4184_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ee767cd7b74cee83a9d41caac6b8d0fb000f4138a8dd34930cc1d4c72b6994b = $this->env->getExtension("native_profiler");
        $__internal_7ee767cd7b74cee83a9d41caac6b8d0fb000f4138a8dd34930cc1d4c72b6994b->enter($__internal_7ee767cd7b74cee83a9d41caac6b8d0fb000f4138a8dd34930cc1d4c72b6994b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TalkSeries";
        
        $__internal_7ee767cd7b74cee83a9d41caac6b8d0fb000f4138a8dd34930cc1d4c72b6994b->leave($__internal_7ee767cd7b74cee83a9d41caac6b8d0fb000f4138a8dd34930cc1d4c72b6994b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc5315118d00b5d18815f4aed0d8e9c0af2701303e72296b1e9a0fd9ee12827a = $this->env->getExtension("native_profiler");
        $__internal_fc5315118d00b5d18815f4aed0d8e9c0af2701303e72296b1e9a0fd9ee12827a->enter($__internal_fc5315118d00b5d18815f4aed0d8e9c0af2701303e72296b1e9a0fd9ee12827a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"header\">
  <!-- *** Logo *** -->
  <div class=\"row-H1\">
    <div class=\"logo\">
      <a href=\"http://127.0.0.1:8000\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/images/Logo.jpg"), "html", null, true);
        echo "\" alt=\"Logo du site\" /></a>
    </div>
    <!-- *** Login *** -->

    <!-- <div class=\"col-md-10\"></div>
    <div class=\"col-md-2\">
      <div class=\"form-group form-group-sm\">
        <div class=\"login\">
          <input class=\"form-control\" type=\"text\" name=\"login\" placeholder=\"Identifiant\">
        </div>
        <div class=\"password\">
          <input class=\"form-control\" type=\"text\" name=\"password\" placeholder=\"Mot de passe\">
        </div>
      </div>
      <div class=\"btnConnInsc\">
        <button class=\"btn btn-default btn-sm\" type=\"button\" name=\"btnConnexion\">Connexion</button>
        <button class=\"btn btn-default btn-sm\" type=\"button\" name=\"btnSub\">Inscription</button>
      </div>
    </div> -->

  </div>
  <div class=\"row-H2\">
    <div class=\"col-md-1\">
      <button class=\"btn btn-default btn-xs\" type=\"button\" name=\"btnFr\">Fr</button>
      <button class=\"btn btn-default btn-xs\" type=\"button\" name=\"btnEn\">En</button>
    </div>
    <div class=\"col-md-9\"></div>
    <div class=\"col-md-2\">
      <ul class=\"list-inline\">
        <li><a href=\"http://127.0.0.1:8000/login\" class=\"btn btn-default\">Login</a></li>
        <li><a href=\"http://127.0.0.1:8000/register\" class=\"btn btn-default\">S'inscrire</a></li>
      </ul>
    </div>
  </div>
</div>

";
        
        $__internal_fc5315118d00b5d18815f4aed0d8e9c0af2701303e72296b1e9a0fd9ee12827a->leave($__internal_fc5315118d00b5d18815f4aed0d8e9c0af2701303e72296b1e9a0fd9ee12827a_prof);

    }

    public function getTemplateName()
    {
        return "MovieBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}TalkSeries{% endblock %}*/
/* {% block body %}*/
/* */
/* <div class="header">*/
/*   <!-- *** Logo *** -->*/
/*   <div class="row-H1">*/
/*     <div class="logo">*/
/*       <a href="http://127.0.0.1:8000"><img src="{{ asset ('/images/Logo.jpg') }}" alt="Logo du site" /></a>*/
/*     </div>*/
/*     <!-- *** Login *** -->*/
/* */
/*     <!-- <div class="col-md-10"></div>*/
/*     <div class="col-md-2">*/
/*       <div class="form-group form-group-sm">*/
/*         <div class="login">*/
/*           <input class="form-control" type="text" name="login" placeholder="Identifiant">*/
/*         </div>*/
/*         <div class="password">*/
/*           <input class="form-control" type="text" name="password" placeholder="Mot de passe">*/
/*         </div>*/
/*       </div>*/
/*       <div class="btnConnInsc">*/
/*         <button class="btn btn-default btn-sm" type="button" name="btnConnexion">Connexion</button>*/
/*         <button class="btn btn-default btn-sm" type="button" name="btnSub">Inscription</button>*/
/*       </div>*/
/*     </div> -->*/
/* */
/*   </div>*/
/*   <div class="row-H2">*/
/*     <div class="col-md-1">*/
/*       <button class="btn btn-default btn-xs" type="button" name="btnFr">Fr</button>*/
/*       <button class="btn btn-default btn-xs" type="button" name="btnEn">En</button>*/
/*     </div>*/
/*     <div class="col-md-9"></div>*/
/*     <div class="col-md-2">*/
/*       <ul class="list-inline">*/
/*         <li><a href="http://127.0.0.1:8000/login" class="btn btn-default">Login</a></li>*/
/*         <li><a href="http://127.0.0.1:8000/register" class="btn btn-default">S'inscrire</a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
