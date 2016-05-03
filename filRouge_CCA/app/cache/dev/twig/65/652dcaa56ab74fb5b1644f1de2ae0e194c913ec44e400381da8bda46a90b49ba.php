<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_299fc692d598a977485e32ee037be00679bbf3a62a579ac1bfb90df03df86f39 extends Twig_Template
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
        $__internal_8a509194330a582e9e7c9ae966cd90b80b23f04b04e5d7e268bb7bb43c857936 = $this->env->getExtension("native_profiler");
        $__internal_8a509194330a582e9e7c9ae966cd90b80b23f04b04e5d7e268bb7bb43c857936->enter($__internal_8a509194330a582e9e7c9ae966cd90b80b23f04b04e5d7e268bb7bb43c857936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8a509194330a582e9e7c9ae966cd90b80b23f04b04e5d7e268bb7bb43c857936->leave($__internal_8a509194330a582e9e7c9ae966cd90b80b23f04b04e5d7e268bb7bb43c857936_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
