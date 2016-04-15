<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3bfbb26897b5e49c4c6b23fabca99d97763ce56855ea444515770161bcb1ca6a extends Twig_Template
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
        $__internal_2e4af0cb522d5b991751571e6822c736d6b4e47e3f964b15aa21fb398e1d65a1 = $this->env->getExtension("native_profiler");
        $__internal_2e4af0cb522d5b991751571e6822c736d6b4e47e3f964b15aa21fb398e1d65a1->enter($__internal_2e4af0cb522d5b991751571e6822c736d6b4e47e3f964b15aa21fb398e1d65a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_2e4af0cb522d5b991751571e6822c736d6b4e47e3f964b15aa21fb398e1d65a1->leave($__internal_2e4af0cb522d5b991751571e6822c736d6b4e47e3f964b15aa21fb398e1d65a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
