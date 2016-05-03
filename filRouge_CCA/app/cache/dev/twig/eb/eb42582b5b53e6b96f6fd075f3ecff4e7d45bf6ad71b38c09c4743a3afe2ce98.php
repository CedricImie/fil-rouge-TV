<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_cd298b836fcea6e5f6fa32240fd0777e2efe84638de9b544966745439d96eda9 extends Twig_Template
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
        $__internal_9a6e26c28ca4f79bf960afb52ceb48ef9b5d92a5fd50f7cb98e3b6cef68e103e = $this->env->getExtension("native_profiler");
        $__internal_9a6e26c28ca4f79bf960afb52ceb48ef9b5d92a5fd50f7cb98e3b6cef68e103e->enter($__internal_9a6e26c28ca4f79bf960afb52ceb48ef9b5d92a5fd50f7cb98e3b6cef68e103e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9a6e26c28ca4f79bf960afb52ceb48ef9b5d92a5fd50f7cb98e3b6cef68e103e->leave($__internal_9a6e26c28ca4f79bf960afb52ceb48ef9b5d92a5fd50f7cb98e3b6cef68e103e_prof);

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
