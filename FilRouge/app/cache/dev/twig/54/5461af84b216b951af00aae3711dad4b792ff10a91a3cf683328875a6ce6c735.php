<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6cc436116fc93003da412526856d14f023e6056cfe769f77bdad2a9f5cc8039d extends Twig_Template
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
        $__internal_19ab8802e49b081f06d35575a89c6c76164b25572b8f7261498b6c6a59402dc9 = $this->env->getExtension("native_profiler");
        $__internal_19ab8802e49b081f06d35575a89c6c76164b25572b8f7261498b6c6a59402dc9->enter($__internal_19ab8802e49b081f06d35575a89c6c76164b25572b8f7261498b6c6a59402dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_19ab8802e49b081f06d35575a89c6c76164b25572b8f7261498b6c6a59402dc9->leave($__internal_19ab8802e49b081f06d35575a89c6c76164b25572b8f7261498b6c6a59402dc9_prof);

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
