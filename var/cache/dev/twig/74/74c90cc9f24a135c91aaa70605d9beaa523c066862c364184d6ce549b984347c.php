<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9f0b7b137cc8cbb9e18a7ab8953b94e90c1288173c9966599fd3d0528c7f6b99 extends Twig_Template
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
        $__internal_65fca0865901571b32f512572f1ea5a1297e6d897c8a119eea01053d4517f283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65fca0865901571b32f512572f1ea5a1297e6d897c8a119eea01053d4517f283->enter($__internal_65fca0865901571b32f512572f1ea5a1297e6d897c8a119eea01053d4517f283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_68e479b4ddc15d671fc25ec25982edc0b255f270de0c456393d4e353cc53b77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e479b4ddc15d671fc25ec25982edc0b255f270de0c456393d4e353cc53b77a->enter($__internal_68e479b4ddc15d671fc25ec25982edc0b255f270de0c456393d4e353cc53b77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_65fca0865901571b32f512572f1ea5a1297e6d897c8a119eea01053d4517f283->leave($__internal_65fca0865901571b32f512572f1ea5a1297e6d897c8a119eea01053d4517f283_prof);

        
        $__internal_68e479b4ddc15d671fc25ec25982edc0b255f270de0c456393d4e353cc53b77a->leave($__internal_68e479b4ddc15d671fc25ec25982edc0b255f270de0c456393d4e353cc53b77a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
