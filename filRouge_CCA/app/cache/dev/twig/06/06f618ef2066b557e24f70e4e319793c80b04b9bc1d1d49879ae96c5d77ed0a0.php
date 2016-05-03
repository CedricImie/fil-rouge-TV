<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7738a78d0f62ec11f3cde34e60590ac9b483e9e2553350de424217a46e4e77fe extends Twig_Template
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
        $__internal_66e962d0830d5ec5a827343b2c9eeb4b19c19cbb0fb3190acb64b13ab53664b5 = $this->env->getExtension("native_profiler");
        $__internal_66e962d0830d5ec5a827343b2c9eeb4b19c19cbb0fb3190acb64b13ab53664b5->enter($__internal_66e962d0830d5ec5a827343b2c9eeb4b19c19cbb0fb3190acb64b13ab53664b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_66e962d0830d5ec5a827343b2c9eeb4b19c19cbb0fb3190acb64b13ab53664b5->leave($__internal_66e962d0830d5ec5a827343b2c9eeb4b19c19cbb0fb3190acb64b13ab53664b5_prof);

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
