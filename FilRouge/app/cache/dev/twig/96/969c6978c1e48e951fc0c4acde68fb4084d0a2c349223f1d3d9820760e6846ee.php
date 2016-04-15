<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_af1d985305baf6274f03c372a3717d4386c37451b7f0e29595154483c898146d extends Twig_Template
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
        $__internal_93c84d02d3eddbc9f582fabda8f273ea01ed7515ace78f9406e0c61445f05a3a = $this->env->getExtension("native_profiler");
        $__internal_93c84d02d3eddbc9f582fabda8f273ea01ed7515ace78f9406e0c61445f05a3a->enter($__internal_93c84d02d3eddbc9f582fabda8f273ea01ed7515ace78f9406e0c61445f05a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_93c84d02d3eddbc9f582fabda8f273ea01ed7515ace78f9406e0c61445f05a3a->leave($__internal_93c84d02d3eddbc9f582fabda8f273ea01ed7515ace78f9406e0c61445f05a3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
