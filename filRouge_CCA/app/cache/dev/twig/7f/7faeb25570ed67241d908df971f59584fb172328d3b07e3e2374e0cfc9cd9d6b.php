<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f9fcbcff0593a35d2c6e7f2d33cc8a7a0901b6fda0dcd40d752ce30535415355 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74f8a253b221ef7f8006580693866a9353758d55ff335e36b1737c91e30853eb = $this->env->getExtension("native_profiler");
        $__internal_74f8a253b221ef7f8006580693866a9353758d55ff335e36b1737c91e30853eb->enter($__internal_74f8a253b221ef7f8006580693866a9353758d55ff335e36b1737c91e30853eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_74f8a253b221ef7f8006580693866a9353758d55ff335e36b1737c91e30853eb->leave($__internal_74f8a253b221ef7f8006580693866a9353758d55ff335e36b1737c91e30853eb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
