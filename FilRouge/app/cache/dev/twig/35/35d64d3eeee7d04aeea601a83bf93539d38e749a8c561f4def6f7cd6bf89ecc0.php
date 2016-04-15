<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_2bb8376bb9c21224f38efc916ac1bff8854f3a9d8b9c9f9ec6c5b6c9980fee2a extends Twig_Template
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
        $__internal_3062d33d4c32d1fc0d76979387267511a026403e8d6fd971945a8f63fc5adbaa = $this->env->getExtension("native_profiler");
        $__internal_3062d33d4c32d1fc0d76979387267511a026403e8d6fd971945a8f63fc5adbaa->enter($__internal_3062d33d4c32d1fc0d76979387267511a026403e8d6fd971945a8f63fc5adbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_3062d33d4c32d1fc0d76979387267511a026403e8d6fd971945a8f63fc5adbaa->leave($__internal_3062d33d4c32d1fc0d76979387267511a026403e8d6fd971945a8f63fc5adbaa_prof);

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
