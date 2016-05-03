<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_2d1ec88b6fd9a58607a0897dbac8e5362b7408991b4d8e083a682f2624c64540 extends Twig_Template
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
        $__internal_ab3b79985d8e01377a407a1aaca3c596b2bbe0ea0fbce4970b2ea7f46eacf502 = $this->env->getExtension("native_profiler");
        $__internal_ab3b79985d8e01377a407a1aaca3c596b2bbe0ea0fbce4970b2ea7f46eacf502->enter($__internal_ab3b79985d8e01377a407a1aaca3c596b2bbe0ea0fbce4970b2ea7f46eacf502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ab3b79985d8e01377a407a1aaca3c596b2bbe0ea0fbce4970b2ea7f46eacf502->leave($__internal_ab3b79985d8e01377a407a1aaca3c596b2bbe0ea0fbce4970b2ea7f46eacf502_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
