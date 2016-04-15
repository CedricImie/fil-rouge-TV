<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b967b54e5b7fd244b758e418d3eed6278f3e642f9c01ddb3887d9be70587cad5 extends Twig_Template
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
        $__internal_ce1dac4871913d981d788339dddbd92132e0bb5eb483fcd19c42c829a9263268 = $this->env->getExtension("native_profiler");
        $__internal_ce1dac4871913d981d788339dddbd92132e0bb5eb483fcd19c42c829a9263268->enter($__internal_ce1dac4871913d981d788339dddbd92132e0bb5eb483fcd19c42c829a9263268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ce1dac4871913d981d788339dddbd92132e0bb5eb483fcd19c42c829a9263268->leave($__internal_ce1dac4871913d981d788339dddbd92132e0bb5eb483fcd19c42c829a9263268_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
