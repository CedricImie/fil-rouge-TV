<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3f307a3fafec0f87385527838e4f119331343f096e690aa9ffd70dffc4fff21a extends Twig_Template
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
        $__internal_43dd1debaa483d417f10274058ce435e89dc4162a7e4015b2c73ba429a543e11 = $this->env->getExtension("native_profiler");
        $__internal_43dd1debaa483d417f10274058ce435e89dc4162a7e4015b2c73ba429a543e11->enter($__internal_43dd1debaa483d417f10274058ce435e89dc4162a7e4015b2c73ba429a543e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_43dd1debaa483d417f10274058ce435e89dc4162a7e4015b2c73ba429a543e11->leave($__internal_43dd1debaa483d417f10274058ce435e89dc4162a7e4015b2c73ba429a543e11_prof);

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
