<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_99d8168d63bcee73d56485686e48220e2fa7475a02dedd94541b68210936f271 extends Twig_Template
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
        $__internal_e82ee9c539a3c243722a8094c7369553f909f8a08b9d6048d1b2ac1274f52cd0 = $this->env->getExtension("native_profiler");
        $__internal_e82ee9c539a3c243722a8094c7369553f909f8a08b9d6048d1b2ac1274f52cd0->enter($__internal_e82ee9c539a3c243722a8094c7369553f909f8a08b9d6048d1b2ac1274f52cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e82ee9c539a3c243722a8094c7369553f909f8a08b9d6048d1b2ac1274f52cd0->leave($__internal_e82ee9c539a3c243722a8094c7369553f909f8a08b9d6048d1b2ac1274f52cd0_prof);

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
