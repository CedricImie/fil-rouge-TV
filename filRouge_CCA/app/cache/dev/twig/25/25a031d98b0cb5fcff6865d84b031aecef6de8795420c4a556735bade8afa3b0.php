<?php

/* base.html.twig */
class __TwigTemplate_9c11474831c126c4feef78c60aa8e7859397a32bcca1fe70d145a0a455800495 extends Twig_Template
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
        $__internal_2ba32d38e8223fe07cbe15a140a4e3a93cc95b2b83c1a4567a6ac9c494a8ac35 = $this->env->getExtension("native_profiler");
        $__internal_2ba32d38e8223fe07cbe15a140a4e3a93cc95b2b83c1a4567a6ac9c494a8ac35->enter($__internal_2ba32d38e8223fe07cbe15a140a4e3a93cc95b2b83c1a4567a6ac9c494a8ac35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2ba32d38e8223fe07cbe15a140a4e3a93cc95b2b83c1a4567a6ac9c494a8ac35->leave($__internal_2ba32d38e8223fe07cbe15a140a4e3a93cc95b2b83c1a4567a6ac9c494a8ac35_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a009c3224b8cd63d62adeeb35479880a867db2e78daad7f1a602294059aec47 = $this->env->getExtension("native_profiler");
        $__internal_8a009c3224b8cd63d62adeeb35479880a867db2e78daad7f1a602294059aec47->enter($__internal_8a009c3224b8cd63d62adeeb35479880a867db2e78daad7f1a602294059aec47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8a009c3224b8cd63d62adeeb35479880a867db2e78daad7f1a602294059aec47->leave($__internal_8a009c3224b8cd63d62adeeb35479880a867db2e78daad7f1a602294059aec47_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b8ba132ef1e027066c9f48c83f29e542d8038bfe6d7d290de0ae5aaa217c090e = $this->env->getExtension("native_profiler");
        $__internal_b8ba132ef1e027066c9f48c83f29e542d8038bfe6d7d290de0ae5aaa217c090e->enter($__internal_b8ba132ef1e027066c9f48c83f29e542d8038bfe6d7d290de0ae5aaa217c090e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b8ba132ef1e027066c9f48c83f29e542d8038bfe6d7d290de0ae5aaa217c090e->leave($__internal_b8ba132ef1e027066c9f48c83f29e542d8038bfe6d7d290de0ae5aaa217c090e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d2222e7faeac7c22152416c01d8eb7526eabaa7e3b9979fe034e37a8a37c2eb = $this->env->getExtension("native_profiler");
        $__internal_5d2222e7faeac7c22152416c01d8eb7526eabaa7e3b9979fe034e37a8a37c2eb->enter($__internal_5d2222e7faeac7c22152416c01d8eb7526eabaa7e3b9979fe034e37a8a37c2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5d2222e7faeac7c22152416c01d8eb7526eabaa7e3b9979fe034e37a8a37c2eb->leave($__internal_5d2222e7faeac7c22152416c01d8eb7526eabaa7e3b9979fe034e37a8a37c2eb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24df1d51cbcfaf41080d4790a13f4c398e3d5039a62c724360d65afc41e84e0f = $this->env->getExtension("native_profiler");
        $__internal_24df1d51cbcfaf41080d4790a13f4c398e3d5039a62c724360d65afc41e84e0f->enter($__internal_24df1d51cbcfaf41080d4790a13f4c398e3d5039a62c724360d65afc41e84e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_24df1d51cbcfaf41080d4790a13f4c398e3d5039a62c724360d65afc41e84e0f->leave($__internal_24df1d51cbcfaf41080d4790a13f4c398e3d5039a62c724360d65afc41e84e0f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
