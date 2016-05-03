<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_91ec0ca618f53a7d2ef557c1ee140fb13c108e74a09e91ceeb331064b54b1eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cfbb79bd9b1533363695c72e7cccb1b93bd0b743796de622ee691ad1295306c = $this->env->getExtension("native_profiler");
        $__internal_2cfbb79bd9b1533363695c72e7cccb1b93bd0b743796de622ee691ad1295306c->enter($__internal_2cfbb79bd9b1533363695c72e7cccb1b93bd0b743796de622ee691ad1295306c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>

      <!-- *** Header *** -->
      ";
        // line 9
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MovieBundle:Default:header"));
        echo "

        <div>
            ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 18
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 20
        echo "        </div>

        ";
        // line 22
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 24
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 25
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 26
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
        }
        // line 31
        echo "
        <div>
            ";
        // line 33
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 35
        echo "        </div>

      <!-- *** Footer *** -->
      ";
        // line 38
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MovieBundle:Default:footer"));
        echo "

    </body>
</html>
";
        
        $__internal_2cfbb79bd9b1533363695c72e7cccb1b93bd0b743796de622ee691ad1295306c->leave($__internal_2cfbb79bd9b1533363695c72e7cccb1b93bd0b743796de622ee691ad1295306c_prof);

    }

    // line 33
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d2bc199b720e4569f8ff50e450c29dfe5b569e4d846d659dff7d6870a780227 = $this->env->getExtension("native_profiler");
        $__internal_0d2bc199b720e4569f8ff50e450c29dfe5b569e4d846d659dff7d6870a780227->enter($__internal_0d2bc199b720e4569f8ff50e450c29dfe5b569e4d846d659dff7d6870a780227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 34
        echo "            ";
        
        $__internal_0d2bc199b720e4569f8ff50e450c29dfe5b569e4d846d659dff7d6870a780227->leave($__internal_0d2bc199b720e4569f8ff50e450c29dfe5b569e4d846d659dff7d6870a780227_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 34,  126 => 33,  114 => 38,  109 => 35,  107 => 33,  103 => 31,  100 => 30,  94 => 29,  85 => 26,  80 => 25,  75 => 24,  70 => 23,  68 => 22,  64 => 20,  56 => 18,  50 => 15,  46 => 14,  41 => 13,  39 => 12,  33 => 9,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*     </head>*/
/*     <body>*/
/* */
/*       <!-- *** Header *** -->*/
/*       {{ render(controller('MovieBundle:Default:header')) }}*/
/* */
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/* */
/*       <!-- *** Footer *** -->*/
/*       {{ render(controller('MovieBundle:Default:footer')) }}*/
/* */
/*     </body>*/
/* </html>*/
/* */
