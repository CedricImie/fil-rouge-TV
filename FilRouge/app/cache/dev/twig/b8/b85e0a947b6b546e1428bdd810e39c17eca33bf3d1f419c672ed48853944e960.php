<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_410711801adddd3d443d3a443bb7ecd1a2bdfef1c13cc884526d06331bb409b6 extends Twig_Template
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
        $__internal_1c087b442d74c18adf02472c067c6370ab46e0c12a8e6c7d104e24ce5ce1ad71 = $this->env->getExtension("native_profiler");
        $__internal_1c087b442d74c18adf02472c067c6370ab46e0c12a8e6c7d104e24ce5ce1ad71->enter($__internal_1c087b442d74c18adf02472c067c6370ab46e0c12a8e6c7d104e24ce5ce1ad71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1c087b442d74c18adf02472c067c6370ab46e0c12a8e6c7d104e24ce5ce1ad71->leave($__internal_1c087b442d74c18adf02472c067c6370ab46e0c12a8e6c7d104e24ce5ce1ad71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
