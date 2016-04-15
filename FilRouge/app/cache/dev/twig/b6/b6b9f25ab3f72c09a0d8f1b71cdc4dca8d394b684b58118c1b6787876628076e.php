<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_790ac503f385a234d5fda551e9198316c37b4f7b7abbb1183247b2a870ef220b extends Twig_Template
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
        $__internal_b3571a2231dec9052e68f261689ad13594d7df82035066521b41f7378a8f9793 = $this->env->getExtension("native_profiler");
        $__internal_b3571a2231dec9052e68f261689ad13594d7df82035066521b41f7378a8f9793->enter($__internal_b3571a2231dec9052e68f261689ad13594d7df82035066521b41f7378a8f9793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b3571a2231dec9052e68f261689ad13594d7df82035066521b41f7378a8f9793->leave($__internal_b3571a2231dec9052e68f261689ad13594d7df82035066521b41f7378a8f9793_prof);

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
