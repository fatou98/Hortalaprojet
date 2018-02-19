<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_f6bbc909d8076c8f186786125ec90d67e1082e0f0abadf93a6dc3133474d57a2 extends Twig_Template
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
        $__internal_3fb749affdea1f137fc2a1c29025f5c8838631134843cec2e987324a9a7e79d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb749affdea1f137fc2a1c29025f5c8838631134843cec2e987324a9a7e79d2->enter($__internal_3fb749affdea1f137fc2a1c29025f5c8838631134843cec2e987324a9a7e79d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_41ca442ad9f6445916dd3a89e53571497e8c8e2ab0b4d28068e41652b72a8945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ca442ad9f6445916dd3a89e53571497e8c8e2ab0b4d28068e41652b72a8945->enter($__internal_41ca442ad9f6445916dd3a89e53571497e8c8e2ab0b4d28068e41652b72a8945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_3fb749affdea1f137fc2a1c29025f5c8838631134843cec2e987324a9a7e79d2->leave($__internal_3fb749affdea1f137fc2a1c29025f5c8838631134843cec2e987324a9a7e79d2_prof);

        
        $__internal_41ca442ad9f6445916dd3a89e53571497e8c8e2ab0b4d28068e41652b72a8945->leave($__internal_41ca442ad9f6445916dd3a89e53571497e8c8e2ab0b4d28068e41652b72a8945_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
