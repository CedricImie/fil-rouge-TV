<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2ef2c12381f9172e2139d43eb8d3ba6aba7d97e7ac160aa99aa92e05aa16b8d7 extends Twig_Template
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
        $__internal_3810eceb00f1c851338999eb77af68cbae0bb910c77a68d97784dcbd985b844e = $this->env->getExtension("native_profiler");
        $__internal_3810eceb00f1c851338999eb77af68cbae0bb910c77a68d97784dcbd985b844e->enter($__internal_3810eceb00f1c851338999eb77af68cbae0bb910c77a68d97784dcbd985b844e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3810eceb00f1c851338999eb77af68cbae0bb910c77a68d97784dcbd985b844e->leave($__internal_3810eceb00f1c851338999eb77af68cbae0bb910c77a68d97784dcbd985b844e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
