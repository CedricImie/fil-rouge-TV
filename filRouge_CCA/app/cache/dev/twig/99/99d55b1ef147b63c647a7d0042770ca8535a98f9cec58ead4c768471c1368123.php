<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e031aec700b5c45f8693e18aa47e154c3816ea923654cd073d5c64e2c60fea54 extends Twig_Template
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
        $__internal_4e352216307960240830bd7b6649dcbdf9c5be120b351c9a22f5ea4b3f2b4513 = $this->env->getExtension("native_profiler");
        $__internal_4e352216307960240830bd7b6649dcbdf9c5be120b351c9a22f5ea4b3f2b4513->enter($__internal_4e352216307960240830bd7b6649dcbdf9c5be120b351c9a22f5ea4b3f2b4513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4e352216307960240830bd7b6649dcbdf9c5be120b351c9a22f5ea4b3f2b4513->leave($__internal_4e352216307960240830bd7b6649dcbdf9c5be120b351c9a22f5ea4b3f2b4513_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
