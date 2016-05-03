<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_134691edf5715e3248c36224531ebcd682f9a6e7a31192b286a7b87dfde7b7ae extends Twig_Template
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
        $__internal_91df995da9789909644d7d161472a440d099350ce2533826e6f07e21c9363344 = $this->env->getExtension("native_profiler");
        $__internal_91df995da9789909644d7d161472a440d099350ce2533826e6f07e21c9363344->enter($__internal_91df995da9789909644d7d161472a440d099350ce2533826e6f07e21c9363344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_91df995da9789909644d7d161472a440d099350ce2533826e6f07e21c9363344->leave($__internal_91df995da9789909644d7d161472a440d099350ce2533826e6f07e21c9363344_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
