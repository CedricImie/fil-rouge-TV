<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_0fcfaa0a032d2badabdbd01d21ed2b7db742db9dcf1fa611f18e11e05d73a6cd extends Twig_Template
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
        $__internal_40b52801095476334c576c3535b72df0d799796f635a56e6137acf4691721b4d = $this->env->getExtension("native_profiler");
        $__internal_40b52801095476334c576c3535b72df0d799796f635a56e6137acf4691721b4d->enter($__internal_40b52801095476334c576c3535b72df0d799796f635a56e6137acf4691721b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_40b52801095476334c576c3535b72df0d799796f635a56e6137acf4691721b4d->leave($__internal_40b52801095476334c576c3535b72df0d799796f635a56e6137acf4691721b4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'submit')) ?>*/
/* */
