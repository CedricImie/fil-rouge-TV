<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_f19c977b987de50efed4d65e5bb7164cd22c7ef176d2b247778c652f300650c7 extends Twig_Template
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
        $__internal_e60eb6590619525fa7b328794c3cb8e9cab3816d76582fb6c3a49f75bc5f80d4 = $this->env->getExtension("native_profiler");
        $__internal_e60eb6590619525fa7b328794c3cb8e9cab3816d76582fb6c3a49f75bc5f80d4->enter($__internal_e60eb6590619525fa7b328794c3cb8e9cab3816d76582fb6c3a49f75bc5f80d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e60eb6590619525fa7b328794c3cb8e9cab3816d76582fb6c3a49f75bc5f80d4->leave($__internal_e60eb6590619525fa7b328794c3cb8e9cab3816d76582fb6c3a49f75bc5f80d4_prof);

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
