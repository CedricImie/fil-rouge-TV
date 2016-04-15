<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d6e4c57e8520d2fb655445eac7d480473f4c9597e7a838edc11a477468b80040 extends Twig_Template
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
        $__internal_e94edaf4bfa1430b16cbf4cbf6d57b7d6e0d2b2d1311bd8df2d7cafc055257bc = $this->env->getExtension("native_profiler");
        $__internal_e94edaf4bfa1430b16cbf4cbf6d57b7d6e0d2b2d1311bd8df2d7cafc055257bc->enter($__internal_e94edaf4bfa1430b16cbf4cbf6d57b7d6e0d2b2d1311bd8df2d7cafc055257bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e94edaf4bfa1430b16cbf4cbf6d57b7d6e0d2b2d1311bd8df2d7cafc055257bc->leave($__internal_e94edaf4bfa1430b16cbf4cbf6d57b7d6e0d2b2d1311bd8df2d7cafc055257bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
