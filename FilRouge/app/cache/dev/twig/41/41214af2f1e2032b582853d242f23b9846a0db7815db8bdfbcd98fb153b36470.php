<?php

/* ::base.html.twig */
class __TwigTemplate_c7bfcefe000e1507e23da16d503c08ba044654db87490fe06ddc83f88f0c3a7e extends Twig_Template
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
        $__internal_25dc4b5f99a813153c5b5a257f8f7387be8b2ae8ec633084a8b1720e239fa869 = $this->env->getExtension("native_profiler");
        $__internal_25dc4b5f99a813153c5b5a257f8f7387be8b2ae8ec633084a8b1720e239fa869->enter($__internal_25dc4b5f99a813153c5b5a257f8f7387be8b2ae8ec633084a8b1720e239fa869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_25dc4b5f99a813153c5b5a257f8f7387be8b2ae8ec633084a8b1720e239fa869->leave($__internal_25dc4b5f99a813153c5b5a257f8f7387be8b2ae8ec633084a8b1720e239fa869_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0917603e70935fff5be09917afecfc523357cdca8017ea532e76eef06126c836 = $this->env->getExtension("native_profiler");
        $__internal_0917603e70935fff5be09917afecfc523357cdca8017ea532e76eef06126c836->enter($__internal_0917603e70935fff5be09917afecfc523357cdca8017ea532e76eef06126c836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0917603e70935fff5be09917afecfc523357cdca8017ea532e76eef06126c836->leave($__internal_0917603e70935fff5be09917afecfc523357cdca8017ea532e76eef06126c836_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cdf694d4146f9fbb3e73dd96b4f7ae1bb0cafd4187f1a508e17bc231cc68aab2 = $this->env->getExtension("native_profiler");
        $__internal_cdf694d4146f9fbb3e73dd96b4f7ae1bb0cafd4187f1a508e17bc231cc68aab2->enter($__internal_cdf694d4146f9fbb3e73dd96b4f7ae1bb0cafd4187f1a508e17bc231cc68aab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
        ";
        
        $__internal_cdf694d4146f9fbb3e73dd96b4f7ae1bb0cafd4187f1a508e17bc231cc68aab2->leave($__internal_cdf694d4146f9fbb3e73dd96b4f7ae1bb0cafd4187f1a508e17bc231cc68aab2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d31b5ecf131f33bf4f1aa1504ad66a3dca305af5438b9ad351012dc80a6aac9 = $this->env->getExtension("native_profiler");
        $__internal_2d31b5ecf131f33bf4f1aa1504ad66a3dca305af5438b9ad351012dc80a6aac9->enter($__internal_2d31b5ecf131f33bf4f1aa1504ad66a3dca305af5438b9ad351012dc80a6aac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2d31b5ecf131f33bf4f1aa1504ad66a3dca305af5438b9ad351012dc80a6aac9->leave($__internal_2d31b5ecf131f33bf4f1aa1504ad66a3dca305af5438b9ad351012dc80a6aac9_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e4abb65cd4fe8f17b92ee47f1102e8f0e31f96418cb7bdba6c15b6d89bb164a = $this->env->getExtension("native_profiler");
        $__internal_4e4abb65cd4fe8f17b92ee47f1102e8f0e31f96418cb7bdba6c15b6d89bb164a->enter($__internal_4e4abb65cd4fe8f17b92ee47f1102e8f0e31f96418cb7bdba6c15b6d89bb164a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4e4abb65cd4fe8f17b92ee47f1102e8f0e31f96418cb7bdba6c15b6d89bb164a->leave($__internal_4e4abb65cd4fe8f17b92ee47f1102e8f0e31f96418cb7bdba6c15b6d89bb164a_prof);

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
        return array (  99 => 14,  88 => 13,  79 => 8,  76 => 7,  70 => 6,  59 => 5,  50 => 15,  47 => 14,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
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
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
