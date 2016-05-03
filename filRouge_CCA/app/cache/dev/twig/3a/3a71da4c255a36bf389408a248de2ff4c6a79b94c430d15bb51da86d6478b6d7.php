<?php

/* ::base.html.twig */
class __TwigTemplate_e5edcb0d1cdd745738c145ede62cc5f799cc42d5e8e669d0892a107ded6cf137 extends Twig_Template
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
        $__internal_fe51ec87698c6afa41ff3d79a7b9f0db1637b9d537d751115cf570a51e789785 = $this->env->getExtension("native_profiler");
        $__internal_fe51ec87698c6afa41ff3d79a7b9f0db1637b9d537d751115cf570a51e789785->enter($__internal_fe51ec87698c6afa41ff3d79a7b9f0db1637b9d537d751115cf570a51e789785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_fe51ec87698c6afa41ff3d79a7b9f0db1637b9d537d751115cf570a51e789785->leave($__internal_fe51ec87698c6afa41ff3d79a7b9f0db1637b9d537d751115cf570a51e789785_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_015b2e8103ee6c28153e58790e8e8a7a65adccfaca1da229a871c1b7bb2a57a9 = $this->env->getExtension("native_profiler");
        $__internal_015b2e8103ee6c28153e58790e8e8a7a65adccfaca1da229a871c1b7bb2a57a9->enter($__internal_015b2e8103ee6c28153e58790e8e8a7a65adccfaca1da229a871c1b7bb2a57a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_015b2e8103ee6c28153e58790e8e8a7a65adccfaca1da229a871c1b7bb2a57a9->leave($__internal_015b2e8103ee6c28153e58790e8e8a7a65adccfaca1da229a871c1b7bb2a57a9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_39d8d73f3d6a46ffa4d5d2bb02267f2be03293fcf20f9857966b40ed7e5202c0 = $this->env->getExtension("native_profiler");
        $__internal_39d8d73f3d6a46ffa4d5d2bb02267f2be03293fcf20f9857966b40ed7e5202c0->enter($__internal_39d8d73f3d6a46ffa4d5d2bb02267f2be03293fcf20f9857966b40ed7e5202c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
        <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_39d8d73f3d6a46ffa4d5d2bb02267f2be03293fcf20f9857966b40ed7e5202c0->leave($__internal_39d8d73f3d6a46ffa4d5d2bb02267f2be03293fcf20f9857966b40ed7e5202c0_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_29984a7a391b240c5ce84a24bb2671d8ddf6cf240da6f567f8db84724b45e9d8 = $this->env->getExtension("native_profiler");
        $__internal_29984a7a391b240c5ce84a24bb2671d8ddf6cf240da6f567f8db84724b45e9d8->enter($__internal_29984a7a391b240c5ce84a24bb2671d8ddf6cf240da6f567f8db84724b45e9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
        ";
        // line 17
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MovieBundle:Default:header"));
        echo "
        ";
        // line 18
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MovieBundle:Default:footer"));
        echo "

        ";
        
        $__internal_29984a7a391b240c5ce84a24bb2671d8ddf6cf240da6f567f8db84724b45e9d8->leave($__internal_29984a7a391b240c5ce84a24bb2671d8ddf6cf240da6f567f8db84724b45e9d8_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9c9410676507222cd1831e0d0a4c3021d0c4abb0dc3f1dba3e06e50ad24bf15d = $this->env->getExtension("native_profiler");
        $__internal_9c9410676507222cd1831e0d0a4c3021d0c4abb0dc3f1dba3e06e50ad24bf15d->enter($__internal_9c9410676507222cd1831e0d0a4c3021d0c4abb0dc3f1dba3e06e50ad24bf15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9c9410676507222cd1831e0d0a4c3021d0c4abb0dc3f1dba3e06e50ad24bf15d->leave($__internal_9c9410676507222cd1831e0d0a4c3021d0c4abb0dc3f1dba3e06e50ad24bf15d_prof);

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
        return array (  113 => 21,  103 => 18,  99 => 17,  96 => 16,  90 => 15,  79 => 8,  76 => 7,  70 => 6,  59 => 5,  50 => 22,  47 => 21,  45 => 15,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*         <link rel="stylesheet" href="{{ asset('/style.css') }}" type="text/css">*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/*         <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/* */
/*         {{ render(controller('MovieBundle:Default:header')) }}*/
/*         {{ render(controller('MovieBundle:Default:footer')) }}*/
/* */
/*         {% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
