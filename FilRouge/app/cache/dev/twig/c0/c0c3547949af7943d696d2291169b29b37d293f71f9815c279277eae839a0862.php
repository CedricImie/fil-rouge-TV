<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4644b1db5bd42ff286449d2d9a26d2d47ce35e2b460813082d8897625726a9d7 extends Twig_Template
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
        $__internal_a9d71c9b0638c96316972726998b632716fd211967e3b45855d79b351f3adabd = $this->env->getExtension("native_profiler");
        $__internal_a9d71c9b0638c96316972726998b632716fd211967e3b45855d79b351f3adabd->enter($__internal_a9d71c9b0638c96316972726998b632716fd211967e3b45855d79b351f3adabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a9d71c9b0638c96316972726998b632716fd211967e3b45855d79b351f3adabd->leave($__internal_a9d71c9b0638c96316972726998b632716fd211967e3b45855d79b351f3adabd_prof);

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
