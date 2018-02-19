<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_625b8ffe509a8ff1f02c975345ccd05abe7a67c0efb71d0b1e5e72f78161d78f extends Twig_Template
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
        $__internal_d782768e7cc356af2c6d0cbdeaca8e1a9e2192fc0ca316f724e6f8a1102661d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d782768e7cc356af2c6d0cbdeaca8e1a9e2192fc0ca316f724e6f8a1102661d8->enter($__internal_d782768e7cc356af2c6d0cbdeaca8e1a9e2192fc0ca316f724e6f8a1102661d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_8342ff3f9a3a7f542d33237c0369c4b085580678f95e479f3da54068aca20974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8342ff3f9a3a7f542d33237c0369c4b085580678f95e479f3da54068aca20974->enter($__internal_8342ff3f9a3a7f542d33237c0369c4b085580678f95e479f3da54068aca20974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d782768e7cc356af2c6d0cbdeaca8e1a9e2192fc0ca316f724e6f8a1102661d8->leave($__internal_d782768e7cc356af2c6d0cbdeaca8e1a9e2192fc0ca316f724e6f8a1102661d8_prof);

        
        $__internal_8342ff3f9a3a7f542d33237c0369c4b085580678f95e479f3da54068aca20974->leave($__internal_8342ff3f9a3a7f542d33237c0369c4b085580678f95e479f3da54068aca20974_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
