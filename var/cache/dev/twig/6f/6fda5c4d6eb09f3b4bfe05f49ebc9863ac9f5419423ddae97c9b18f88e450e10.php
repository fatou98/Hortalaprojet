<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2e0783b5da51e384bf021c1b96e39e92a61479f08f6e34190b4571ddcb100c22 extends Twig_Template
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
        $__internal_82a6ac0f200e8d19033899c707c1ae440f5c191a42ff1c9a3941c473fd2aa55d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a6ac0f200e8d19033899c707c1ae440f5c191a42ff1c9a3941c473fd2aa55d->enter($__internal_82a6ac0f200e8d19033899c707c1ae440f5c191a42ff1c9a3941c473fd2aa55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_97629f0755876a798a1eb9381b93015c4ff3c9efd53692a010148d4a52e7f10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97629f0755876a798a1eb9381b93015c4ff3c9efd53692a010148d4a52e7f10d->enter($__internal_97629f0755876a798a1eb9381b93015c4ff3c9efd53692a010148d4a52e7f10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_82a6ac0f200e8d19033899c707c1ae440f5c191a42ff1c9a3941c473fd2aa55d->leave($__internal_82a6ac0f200e8d19033899c707c1ae440f5c191a42ff1c9a3941c473fd2aa55d_prof);

        
        $__internal_97629f0755876a798a1eb9381b93015c4ff3c9efd53692a010148d4a52e7f10d->leave($__internal_97629f0755876a798a1eb9381b93015c4ff3c9efd53692a010148d4a52e7f10d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
