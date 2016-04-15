<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9ad51f522c0ad4af5dda46820881eb99a2bfe0f7bc9c771347b396c535c869ba extends Twig_Template
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
        $__internal_2066a47908744ad82ffc9221efeba49c61e9554dee2d32d6428ffb7899f61612 = $this->env->getExtension("native_profiler");
        $__internal_2066a47908744ad82ffc9221efeba49c61e9554dee2d32d6428ffb7899f61612->enter($__internal_2066a47908744ad82ffc9221efeba49c61e9554dee2d32d6428ffb7899f61612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2066a47908744ad82ffc9221efeba49c61e9554dee2d32d6428ffb7899f61612->leave($__internal_2066a47908744ad82ffc9221efeba49c61e9554dee2d32d6428ffb7899f61612_prof);

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
