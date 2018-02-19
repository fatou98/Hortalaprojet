<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e93ae63d9aae1811faf2b98caabcad8decff66353c846b99d33841f1a2571093 extends Twig_Template
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
        $__internal_2e1c01c870129075e71ab4f005589d905677465a107ce264cd6f7497b6518e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1c01c870129075e71ab4f005589d905677465a107ce264cd6f7497b6518e78->enter($__internal_2e1c01c870129075e71ab4f005589d905677465a107ce264cd6f7497b6518e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_5c0e6a7af1c2c9661c1d961b85479ed49693f8bc82b226f447dbd0a8ce34a77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0e6a7af1c2c9661c1d961b85479ed49693f8bc82b226f447dbd0a8ce34a77f->enter($__internal_5c0e6a7af1c2c9661c1d961b85479ed49693f8bc82b226f447dbd0a8ce34a77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2e1c01c870129075e71ab4f005589d905677465a107ce264cd6f7497b6518e78->leave($__internal_2e1c01c870129075e71ab4f005589d905677465a107ce264cd6f7497b6518e78_prof);

        
        $__internal_5c0e6a7af1c2c9661c1d961b85479ed49693f8bc82b226f447dbd0a8ce34a77f->leave($__internal_5c0e6a7af1c2c9661c1d961b85479ed49693f8bc82b226f447dbd0a8ce34a77f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
