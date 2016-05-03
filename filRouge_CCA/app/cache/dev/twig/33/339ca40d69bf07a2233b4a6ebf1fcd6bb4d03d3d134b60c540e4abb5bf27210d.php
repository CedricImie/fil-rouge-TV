<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2d4b9b4b15496b8fdddc62cc074bd36aa38eccc7412361de9f784ffe2a3c1c47 extends Twig_Template
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
        $__internal_6f48828e32fa8584540ab0711fb2fe58b22f434a0fd909e601606af8d3863285 = $this->env->getExtension("native_profiler");
        $__internal_6f48828e32fa8584540ab0711fb2fe58b22f434a0fd909e601606af8d3863285->enter($__internal_6f48828e32fa8584540ab0711fb2fe58b22f434a0fd909e601606af8d3863285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6f48828e32fa8584540ab0711fb2fe58b22f434a0fd909e601606af8d3863285->leave($__internal_6f48828e32fa8584540ab0711fb2fe58b22f434a0fd909e601606af8d3863285_prof);

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
