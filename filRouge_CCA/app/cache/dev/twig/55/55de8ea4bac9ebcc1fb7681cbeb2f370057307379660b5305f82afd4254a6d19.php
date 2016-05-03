<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_99a4ecefb36cc380c529bd737e6e247d99430592a03802bb1b69a8351621439c extends Twig_Template
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
        $__internal_66bbc28db5c2ea963e434a8f9deddb7a27efe42287a0dfe91a7f8869166fec53 = $this->env->getExtension("native_profiler");
        $__internal_66bbc28db5c2ea963e434a8f9deddb7a27efe42287a0dfe91a7f8869166fec53->enter($__internal_66bbc28db5c2ea963e434a8f9deddb7a27efe42287a0dfe91a7f8869166fec53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_66bbc28db5c2ea963e434a8f9deddb7a27efe42287a0dfe91a7f8869166fec53->leave($__internal_66bbc28db5c2ea963e434a8f9deddb7a27efe42287a0dfe91a7f8869166fec53_prof);

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
