<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3c5c8d69eed5fe0f8866f5deafa748e198a56cdbb7cfb26f7ca03cf2531439b8 extends Twig_Template
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
        $__internal_09760ef5565dcbe8ca3218e714b10254b193ab2c682698d0a7731f4ae6931da8 = $this->env->getExtension("native_profiler");
        $__internal_09760ef5565dcbe8ca3218e714b10254b193ab2c682698d0a7731f4ae6931da8->enter($__internal_09760ef5565dcbe8ca3218e714b10254b193ab2c682698d0a7731f4ae6931da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_09760ef5565dcbe8ca3218e714b10254b193ab2c682698d0a7731f4ae6931da8->leave($__internal_09760ef5565dcbe8ca3218e714b10254b193ab2c682698d0a7731f4ae6931da8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
