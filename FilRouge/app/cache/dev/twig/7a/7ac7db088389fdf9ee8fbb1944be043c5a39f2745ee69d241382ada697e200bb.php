<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_17be372ae1bfff072226ffbc95c757d4432f5fd61fd380dc9a36fade92143d30 extends Twig_Template
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
        $__internal_f2fbd00192e5ce4931c103418debc47815a159da8822a871bd19a449679c147b = $this->env->getExtension("native_profiler");
        $__internal_f2fbd00192e5ce4931c103418debc47815a159da8822a871bd19a449679c147b->enter($__internal_f2fbd00192e5ce4931c103418debc47815a159da8822a871bd19a449679c147b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f2fbd00192e5ce4931c103418debc47815a159da8822a871bd19a449679c147b->leave($__internal_f2fbd00192e5ce4931c103418debc47815a159da8822a871bd19a449679c147b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
