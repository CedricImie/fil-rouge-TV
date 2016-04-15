<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5a49b7acfb81b0ae8586532f75cbd07c11b54b88786715814ee9cdacbb57d15f extends Twig_Template
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
        $__internal_6b4e097a3a8da6d0c6c2071045281f20a4921cbcfc6a703c4e9789eb1c6d3ea3 = $this->env->getExtension("native_profiler");
        $__internal_6b4e097a3a8da6d0c6c2071045281f20a4921cbcfc6a703c4e9789eb1c6d3ea3->enter($__internal_6b4e097a3a8da6d0c6c2071045281f20a4921cbcfc6a703c4e9789eb1c6d3ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6b4e097a3a8da6d0c6c2071045281f20a4921cbcfc6a703c4e9789eb1c6d3ea3->leave($__internal_6b4e097a3a8da6d0c6c2071045281f20a4921cbcfc6a703c4e9789eb1c6d3ea3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
