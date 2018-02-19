<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_effd22203229c89bf1f4ca8b9ba03818384218e3093cf3105bbbf61f556a017c extends Twig_Template
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
        $__internal_beeed501689e08bd5eef67978fd8ccd09f372289715dddd3acf0bd58dd766470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beeed501689e08bd5eef67978fd8ccd09f372289715dddd3acf0bd58dd766470->enter($__internal_beeed501689e08bd5eef67978fd8ccd09f372289715dddd3acf0bd58dd766470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c40153f553c31e463a557bdac6db86c8a6bb7621c3b65079111f1dc2c74badb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40153f553c31e463a557bdac6db86c8a6bb7621c3b65079111f1dc2c74badb3->enter($__internal_c40153f553c31e463a557bdac6db86c8a6bb7621c3b65079111f1dc2c74badb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_beeed501689e08bd5eef67978fd8ccd09f372289715dddd3acf0bd58dd766470->leave($__internal_beeed501689e08bd5eef67978fd8ccd09f372289715dddd3acf0bd58dd766470_prof);

        
        $__internal_c40153f553c31e463a557bdac6db86c8a6bb7621c3b65079111f1dc2c74badb3->leave($__internal_c40153f553c31e463a557bdac6db86c8a6bb7621c3b65079111f1dc2c74badb3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
