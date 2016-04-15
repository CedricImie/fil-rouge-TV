<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8df4557f266f880a05b7a02a4f892da34b96c588b9d9a3565d0b5380b4db6596 extends Twig_Template
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
        $__internal_d4b1e18fd4128dd073f08417572a05de1096bee9acf7cbc8c2a1734ff9d07fbf = $this->env->getExtension("native_profiler");
        $__internal_d4b1e18fd4128dd073f08417572a05de1096bee9acf7cbc8c2a1734ff9d07fbf->enter($__internal_d4b1e18fd4128dd073f08417572a05de1096bee9acf7cbc8c2a1734ff9d07fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d4b1e18fd4128dd073f08417572a05de1096bee9acf7cbc8c2a1734ff9d07fbf->leave($__internal_d4b1e18fd4128dd073f08417572a05de1096bee9acf7cbc8c2a1734ff9d07fbf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
