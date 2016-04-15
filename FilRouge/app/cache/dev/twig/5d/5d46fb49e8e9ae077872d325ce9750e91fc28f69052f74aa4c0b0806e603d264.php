<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_06427bc261ed97ec5a1c21464898b3c81dfe0efd472aafca534f6367d1405395 extends Twig_Template
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
        $__internal_3834f1b4c4a6faf391719f961895a5db8ce15e388bc3822d3255c7dce92afda6 = $this->env->getExtension("native_profiler");
        $__internal_3834f1b4c4a6faf391719f961895a5db8ce15e388bc3822d3255c7dce92afda6->enter($__internal_3834f1b4c4a6faf391719f961895a5db8ce15e388bc3822d3255c7dce92afda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3834f1b4c4a6faf391719f961895a5db8ce15e388bc3822d3255c7dce92afda6->leave($__internal_3834f1b4c4a6faf391719f961895a5db8ce15e388bc3822d3255c7dce92afda6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
