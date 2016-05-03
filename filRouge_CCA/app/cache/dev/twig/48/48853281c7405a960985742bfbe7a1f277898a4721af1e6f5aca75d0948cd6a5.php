<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fa549f030e741e1d881b6d6d45690be5f1df584e5709f4418b719e14d9509690 extends Twig_Template
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
        $__internal_905003c7ea2e1c9102ca0e630ee9f99ecbdcaf65e611a2d53bd4edcc40b89482 = $this->env->getExtension("native_profiler");
        $__internal_905003c7ea2e1c9102ca0e630ee9f99ecbdcaf65e611a2d53bd4edcc40b89482->enter($__internal_905003c7ea2e1c9102ca0e630ee9f99ecbdcaf65e611a2d53bd4edcc40b89482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_905003c7ea2e1c9102ca0e630ee9f99ecbdcaf65e611a2d53bd4edcc40b89482->leave($__internal_905003c7ea2e1c9102ca0e630ee9f99ecbdcaf65e611a2d53bd4edcc40b89482_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
