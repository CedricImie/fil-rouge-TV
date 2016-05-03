<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0c31dd381723dd75cbad0a422d50665409d7b82d41dcb6aede73b5a90e4a2c73 extends Twig_Template
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
        $__internal_07a3292b0e09dcee9eeff862d1811ae2c500fb4a439ea83e7033369b40c982eb = $this->env->getExtension("native_profiler");
        $__internal_07a3292b0e09dcee9eeff862d1811ae2c500fb4a439ea83e7033369b40c982eb->enter($__internal_07a3292b0e09dcee9eeff862d1811ae2c500fb4a439ea83e7033369b40c982eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_07a3292b0e09dcee9eeff862d1811ae2c500fb4a439ea83e7033369b40c982eb->leave($__internal_07a3292b0e09dcee9eeff862d1811ae2c500fb4a439ea83e7033369b40c982eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
