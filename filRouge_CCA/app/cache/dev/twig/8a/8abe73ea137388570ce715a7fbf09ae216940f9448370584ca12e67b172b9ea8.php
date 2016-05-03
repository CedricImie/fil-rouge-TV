<?php

/* MovieBundle:Default:index.html.twig */
class __TwigTemplate_174143ad1d98ffb681ccd0f1689f37965108f07ec401a9e016bd7ae134d9a27b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MovieBundle:Default:index.html.twig", 1);
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
        $__internal_ef452c46d9938bbddcf50ad84552fcca0afe3c650dad4c84986a311c0555ee00 = $this->env->getExtension("native_profiler");
        $__internal_ef452c46d9938bbddcf50ad84552fcca0afe3c650dad4c84986a311c0555ee00->enter($__internal_ef452c46d9938bbddcf50ad84552fcca0afe3c650dad4c84986a311c0555ee00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MovieBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef452c46d9938bbddcf50ad84552fcca0afe3c650dad4c84986a311c0555ee00->leave($__internal_ef452c46d9938bbddcf50ad84552fcca0afe3c650dad4c84986a311c0555ee00_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_14e3f4f3a299c067b7f43c950bf858874bc893bfca367214657865cd6407aae5 = $this->env->getExtension("native_profiler");
        $__internal_14e3f4f3a299c067b7f43c950bf858874bc893bfca367214657865cd6407aae5->enter($__internal_14e3f4f3a299c067b7f43c950bf858874bc893bfca367214657865cd6407aae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TalkSeries";
        
        $__internal_14e3f4f3a299c067b7f43c950bf858874bc893bfca367214657865cd6407aae5->leave($__internal_14e3f4f3a299c067b7f43c950bf858874bc893bfca367214657865cd6407aae5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d7d1062ef07ef9660b99e4afb9f8553cbf85959d6c74c4c4f1176ae13dcf70b = $this->env->getExtension("native_profiler");
        $__internal_9d7d1062ef07ef9660b99e4afb9f8553cbf85959d6c74c4c4f1176ae13dcf70b->enter($__internal_9d7d1062ef07ef9660b99e4afb9f8553cbf85959d6c74c4c4f1176ae13dcf70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<!-- *** Header *** -->
";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MovieBundle:Default:header"));
        echo "

<!-- *** Main *** -->
<div class=\"main\">
  <div class=\"row-M1\">
    <div class=\"col-md-4 col-md-offset-4\">
      <input class=\"form-control input-lg\" type=\"text\" name=\"search\" placeholder=\"Recherche\">
    </div>
  </div>
  <div class=\"row-M2\">
    <div class=\"btnSeriesForum\">
      <div class=\"col-md-8 col-md-offset-2\">
        <a href=\"http://127.0.0.1:8000/series/\" class=\"btn btn-default btn-lg\" style=\"display: inline-block; width: 49%\">Séries</a>
        <a href=\"#\" class=\"btn btn-default btn-lg\" style=\"display: inline-block; width: 49%\">Forum</a>
      </div>
    </div>
  </div>
    <div class=\"carouselCommentaires\">
      <div class=\"col-md-7\">
        <div class=\"carousel\">
<!-- *** Carousel *** -->
          <div id=\"my_carousel\" class=\"carousel slide\" data-ride=\"carousel\">
          \t<!-- Slides -->
          \t<div class=\"carousel-inner\">
            \t<!-- Page 1 -->
            \t<div class=\"item active\">
              \t<div class=\"carousel-page\">
              \t  <img src=\"/images/01.jpg\" class=\"img-responsive\" />
              \t</div>
            \t</div>
            \t<!-- Page 2 -->
            \t<div class=\"item\">
              \t<div class=\"carousel-page\">
                  <img src=\"/images/02.jpg\" class=\"img-responsive\" />
                </div>
            \t</div>
            \t<!-- Page 3 -->
            \t<div class=\"item\">
              \t<div class=\"carousel-page\">
              \t  <img src=\"/images/03.jpg\" class=\"img-responsive\" />
              \t</div>
            \t</div>
              <!-- Page 4 -->
            \t<div class=\"item\">
              \t<div class=\"carousel-page\">
              \t  <img src=\"/images/04.jpg\" class=\"img-responsive\" />
              \t</div>
            \t</div>
          \t</div>
          \t<!-- Contrôles -->
          \t<a class=\"left carousel-control\" href=\"#my_carousel\" data-slide=\"prev\">
          \t  <span class=\"glyphicon glyphicon-chevron-left\"></span>
          \t</a>
          \t<a class=\"right carousel-control\" href=\"#my_carousel\" data-slide=\"next\">
          \t  <span class=\"glyphicon glyphicon-chevron-right\"></span>
          \t</a>
        \t</div>
<!-- *** Carousel end *** -->
        </div>
      </div>
      <div class=\"col-md-5\">
        <div class=\"commentaires\">
          Commentaires
        </div>
      </div>
    </div>
</div>
<!-- *** Footer *** -->
";
        // line 75
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MovieBundle:Default:footer"));
        echo "
";
        
        $__internal_9d7d1062ef07ef9660b99e4afb9f8553cbf85959d6c74c4c4f1176ae13dcf70b->leave($__internal_9d7d1062ef07ef9660b99e4afb9f8553cbf85959d6c74c4c4f1176ae13dcf70b_prof);

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
        return array (  128 => 75,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}TalkSeries{% endblock %}*/
/* {% block body %}*/
/* */
/* <!-- *** Header *** -->*/
/* {{ render(controller('MovieBundle:Default:header')) }}*/
/* */
/* <!-- *** Main *** -->*/
/* <div class="main">*/
/*   <div class="row-M1">*/
/*     <div class="col-md-4 col-md-offset-4">*/
/*       <input class="form-control input-lg" type="text" name="search" placeholder="Recherche">*/
/*     </div>*/
/*   </div>*/
/*   <div class="row-M2">*/
/*     <div class="btnSeriesForum">*/
/*       <div class="col-md-8 col-md-offset-2">*/
/*         <a href="http://127.0.0.1:8000/series/" class="btn btn-default btn-lg" style="display: inline-block; width: 49%">Séries</a>*/
/*         <a href="#" class="btn btn-default btn-lg" style="display: inline-block; width: 49%">Forum</a>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*     <div class="carouselCommentaires">*/
/*       <div class="col-md-7">*/
/*         <div class="carousel">*/
/* <!-- *** Carousel *** -->*/
/*           <div id="my_carousel" class="carousel slide" data-ride="carousel">*/
/*           	<!-- Slides -->*/
/*           	<div class="carousel-inner">*/
/*             	<!-- Page 1 -->*/
/*             	<div class="item active">*/
/*               	<div class="carousel-page">*/
/*               	  <img src="/images/01.jpg" class="img-responsive" />*/
/*               	</div>*/
/*             	</div>*/
/*             	<!-- Page 2 -->*/
/*             	<div class="item">*/
/*               	<div class="carousel-page">*/
/*                   <img src="/images/02.jpg" class="img-responsive" />*/
/*                 </div>*/
/*             	</div>*/
/*             	<!-- Page 3 -->*/
/*             	<div class="item">*/
/*               	<div class="carousel-page">*/
/*               	  <img src="/images/03.jpg" class="img-responsive" />*/
/*               	</div>*/
/*             	</div>*/
/*               <!-- Page 4 -->*/
/*             	<div class="item">*/
/*               	<div class="carousel-page">*/
/*               	  <img src="/images/04.jpg" class="img-responsive" />*/
/*               	</div>*/
/*             	</div>*/
/*           	</div>*/
/*           	<!-- Contrôles -->*/
/*           	<a class="left carousel-control" href="#my_carousel" data-slide="prev">*/
/*           	  <span class="glyphicon glyphicon-chevron-left"></span>*/
/*           	</a>*/
/*           	<a class="right carousel-control" href="#my_carousel" data-slide="next">*/
/*           	  <span class="glyphicon glyphicon-chevron-right"></span>*/
/*           	</a>*/
/*         	</div>*/
/* <!-- *** Carousel end *** -->*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-5">*/
/*         <div class="commentaires">*/
/*           Commentaires*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* </div>*/
/* <!-- *** Footer *** -->*/
/* {{ render(controller('MovieBundle:Default:footer')) }}*/
/* {% endblock %}*/
/* */
