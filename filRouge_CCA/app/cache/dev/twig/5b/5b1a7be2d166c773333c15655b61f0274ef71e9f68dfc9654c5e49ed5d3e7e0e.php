<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6c5c1254d2e187ad5173b47a7870c60bc8c61621a9a249dd4d3a5a1dda051be2 extends Twig_Template
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
        $__internal_8cb113e0ace4bc2655464a62acf83c2a57f689fca390f997039dc5f5a9f26836 = $this->env->getExtension("native_profiler");
        $__internal_8cb113e0ace4bc2655464a62acf83c2a57f689fca390f997039dc5f5a9f26836->enter($__internal_8cb113e0ace4bc2655464a62acf83c2a57f689fca390f997039dc5f5a9f26836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8cb113e0ace4bc2655464a62acf83c2a57f689fca390f997039dc5f5a9f26836->leave($__internal_8cb113e0ace4bc2655464a62acf83c2a57f689fca390f997039dc5f5a9f26836_prof);

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
