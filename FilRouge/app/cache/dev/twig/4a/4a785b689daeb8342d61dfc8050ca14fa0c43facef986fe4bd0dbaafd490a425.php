<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_ae14cb1d80ceb9c4ac0ffb526627d5eacd0656db122535a3008a2732383bf813 extends Twig_Template
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
        $__internal_fcb5b7ff3f6e30947430e679ebf640224948213238da8fb9318b754cc4a846ab = $this->env->getExtension("native_profiler");
        $__internal_fcb5b7ff3f6e30947430e679ebf640224948213238da8fb9318b754cc4a846ab->enter($__internal_fcb5b7ff3f6e30947430e679ebf640224948213238da8fb9318b754cc4a846ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_fcb5b7ff3f6e30947430e679ebf640224948213238da8fb9318b754cc4a846ab->leave($__internal_fcb5b7ff3f6e30947430e679ebf640224948213238da8fb9318b754cc4a846ab_prof);

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
