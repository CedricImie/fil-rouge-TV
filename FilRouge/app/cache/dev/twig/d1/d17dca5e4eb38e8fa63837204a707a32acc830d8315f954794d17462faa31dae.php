<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_28b323f3376906bf7bdbcb55984d1bcc0b985014f503bab1be7c797d2373a5e1 extends Twig_Template
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
        $__internal_b1cda932a86ce3b81568a22cf026c21ed03d8dfe47099553c01fa27e3f712621 = $this->env->getExtension("native_profiler");
        $__internal_b1cda932a86ce3b81568a22cf026c21ed03d8dfe47099553c01fa27e3f712621->enter($__internal_b1cda932a86ce3b81568a22cf026c21ed03d8dfe47099553c01fa27e3f712621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b1cda932a86ce3b81568a22cf026c21ed03d8dfe47099553c01fa27e3f712621->leave($__internal_b1cda932a86ce3b81568a22cf026c21ed03d8dfe47099553c01fa27e3f712621_prof);

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
