<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_75555404f2cb3dd09cece53756bd902c41e898f2bbd32055218dcb02452436c3 extends Twig_Template
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
        $__internal_a2548ded65894da620924f2eb5803ac6352cb1e95f015fe7e473dc64d3ef8264 = $this->env->getExtension("native_profiler");
        $__internal_a2548ded65894da620924f2eb5803ac6352cb1e95f015fe7e473dc64d3ef8264->enter($__internal_a2548ded65894da620924f2eb5803ac6352cb1e95f015fe7e473dc64d3ef8264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a2548ded65894da620924f2eb5803ac6352cb1e95f015fe7e473dc64d3ef8264->leave($__internal_a2548ded65894da620924f2eb5803ac6352cb1e95f015fe7e473dc64d3ef8264_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
