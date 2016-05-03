<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4a47da0ab80b522145d2149db32d5b0e6ab1f9abb26e540d6ce75669b8c3c94b extends Twig_Template
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
        $__internal_39b0611d50d7ccb1f7cfdb1ada4a7e40a3f25a590deb8323d5d6341ffc052992 = $this->env->getExtension("native_profiler");
        $__internal_39b0611d50d7ccb1f7cfdb1ada4a7e40a3f25a590deb8323d5d6341ffc052992->enter($__internal_39b0611d50d7ccb1f7cfdb1ada4a7e40a3f25a590deb8323d5d6341ffc052992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_39b0611d50d7ccb1f7cfdb1ada4a7e40a3f25a590deb8323d5d6341ffc052992->leave($__internal_39b0611d50d7ccb1f7cfdb1ada4a7e40a3f25a590deb8323d5d6341ffc052992_prof);

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
