<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0036339d5495b63b0b4ce55b81c0806813b259e7bf77c6b39dfa39d2421d7a68 extends Twig_Template
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
        $__internal_7dfbfb66405df48a6a9b02997905e082059b81f78e72ce39fd2fff70985f51d0 = $this->env->getExtension("native_profiler");
        $__internal_7dfbfb66405df48a6a9b02997905e082059b81f78e72ce39fd2fff70985f51d0->enter($__internal_7dfbfb66405df48a6a9b02997905e082059b81f78e72ce39fd2fff70985f51d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7dfbfb66405df48a6a9b02997905e082059b81f78e72ce39fd2fff70985f51d0->leave($__internal_7dfbfb66405df48a6a9b02997905e082059b81f78e72ce39fd2fff70985f51d0_prof);

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
