<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_4b9b243705caff794368a3ecd66222ad89c20309383256d1117b6a473f2aeeb5 extends Twig_Template
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
        $__internal_bf95e1ef673e1388c8b47b7feb2560a0818af86244df5dfa6a796acf6bc8f082 = $this->env->getExtension("native_profiler");
        $__internal_bf95e1ef673e1388c8b47b7feb2560a0818af86244df5dfa6a796acf6bc8f082->enter($__internal_bf95e1ef673e1388c8b47b7feb2560a0818af86244df5dfa6a796acf6bc8f082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bf95e1ef673e1388c8b47b7feb2560a0818af86244df5dfa6a796acf6bc8f082->leave($__internal_bf95e1ef673e1388c8b47b7feb2560a0818af86244df5dfa6a796acf6bc8f082_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
