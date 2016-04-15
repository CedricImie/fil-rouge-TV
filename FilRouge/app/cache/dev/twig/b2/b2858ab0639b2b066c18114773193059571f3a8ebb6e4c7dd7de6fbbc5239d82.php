<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c032a37403652a000bd486802caad0b6539ade4ebbae1d1c675a6a3954dcb962 extends Twig_Template
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
        $__internal_addd58b24523402dbdb539457dd6cfc9569b30045d495563c4b5b9eb5a075fdf = $this->env->getExtension("native_profiler");
        $__internal_addd58b24523402dbdb539457dd6cfc9569b30045d495563c4b5b9eb5a075fdf->enter($__internal_addd58b24523402dbdb539457dd6cfc9569b30045d495563c4b5b9eb5a075fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_addd58b24523402dbdb539457dd6cfc9569b30045d495563c4b5b9eb5a075fdf->leave($__internal_addd58b24523402dbdb539457dd6cfc9569b30045d495563c4b5b9eb5a075fdf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
