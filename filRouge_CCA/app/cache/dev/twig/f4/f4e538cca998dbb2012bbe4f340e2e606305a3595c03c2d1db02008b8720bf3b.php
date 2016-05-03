<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_396f485dfacc8210085c9f4113edf09c70fdac3ab27fb9dbb3b09a679a9bbedb extends Twig_Template
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
        $__internal_81620e5b8c877c7ece2a58a216ef3fbf58c58c1a29e79ecb96a43b01259d3d1d = $this->env->getExtension("native_profiler");
        $__internal_81620e5b8c877c7ece2a58a216ef3fbf58c58c1a29e79ecb96a43b01259d3d1d->enter($__internal_81620e5b8c877c7ece2a58a216ef3fbf58c58c1a29e79ecb96a43b01259d3d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_81620e5b8c877c7ece2a58a216ef3fbf58c58c1a29e79ecb96a43b01259d3d1d->leave($__internal_81620e5b8c877c7ece2a58a216ef3fbf58c58c1a29e79ecb96a43b01259d3d1d_prof);

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
