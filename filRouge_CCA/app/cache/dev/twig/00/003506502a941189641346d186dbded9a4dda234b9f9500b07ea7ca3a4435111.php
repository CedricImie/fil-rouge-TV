<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_654a657dc5b3f40ad44816c3d2775b769efb71576fd3a88feecbfff59cc07be3 extends Twig_Template
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
        $__internal_14f8fe736e82e1ec6368bd2d8a39979b3f598513d53ece0b011ba20569507dee = $this->env->getExtension("native_profiler");
        $__internal_14f8fe736e82e1ec6368bd2d8a39979b3f598513d53ece0b011ba20569507dee->enter($__internal_14f8fe736e82e1ec6368bd2d8a39979b3f598513d53ece0b011ba20569507dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_14f8fe736e82e1ec6368bd2d8a39979b3f598513d53ece0b011ba20569507dee->leave($__internal_14f8fe736e82e1ec6368bd2d8a39979b3f598513d53ece0b011ba20569507dee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
