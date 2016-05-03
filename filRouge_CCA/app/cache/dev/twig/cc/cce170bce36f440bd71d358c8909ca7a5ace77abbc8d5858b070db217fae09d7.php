<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e23abcd31544be6f4be0e89361260be53083d119f418da888c943b6ea4d0004c extends Twig_Template
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
        $__internal_e5f289a62c5abb0b259575a57d249eab1b443f8636e5aa2ff66abe608bf050f1 = $this->env->getExtension("native_profiler");
        $__internal_e5f289a62c5abb0b259575a57d249eab1b443f8636e5aa2ff66abe608bf050f1->enter($__internal_e5f289a62c5abb0b259575a57d249eab1b443f8636e5aa2ff66abe608bf050f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_e5f289a62c5abb0b259575a57d249eab1b443f8636e5aa2ff66abe608bf050f1->leave($__internal_e5f289a62c5abb0b259575a57d249eab1b443f8636e5aa2ff66abe608bf050f1_prof);

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
