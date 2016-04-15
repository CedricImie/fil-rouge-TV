<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_6cb87142ac81de84513718616ce183f4e255ceaf1f9c11d2c130a18b715db070 extends Twig_Template
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
        $__internal_997db4b0f346a714819de7a4dcca46650e62f29a5eefabc99f5a520a2b52a18f = $this->env->getExtension("native_profiler");
        $__internal_997db4b0f346a714819de7a4dcca46650e62f29a5eefabc99f5a520a2b52a18f->enter($__internal_997db4b0f346a714819de7a4dcca46650e62f29a5eefabc99f5a520a2b52a18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_997db4b0f346a714819de7a4dcca46650e62f29a5eefabc99f5a520a2b52a18f->leave($__internal_997db4b0f346a714819de7a4dcca46650e62f29a5eefabc99f5a520a2b52a18f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
