<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a467abe01d857974dcbdafb06fa74b66f9e633a88ece3a07b67204986cbd3d8f extends Twig_Template
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
        $__internal_37dd3d4c5ceaf336d53b5fcc0b919714d1a3a8f3e3fd65bb5ab58077f024cc70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37dd3d4c5ceaf336d53b5fcc0b919714d1a3a8f3e3fd65bb5ab58077f024cc70->enter($__internal_37dd3d4c5ceaf336d53b5fcc0b919714d1a3a8f3e3fd65bb5ab58077f024cc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e7fd821b02d8c37b1320cf761c43102e2848633ab8f07dc0abb810aa5a804f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fd821b02d8c37b1320cf761c43102e2848633ab8f07dc0abb810aa5a804f09->enter($__internal_e7fd821b02d8c37b1320cf761c43102e2848633ab8f07dc0abb810aa5a804f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_37dd3d4c5ceaf336d53b5fcc0b919714d1a3a8f3e3fd65bb5ab58077f024cc70->leave($__internal_37dd3d4c5ceaf336d53b5fcc0b919714d1a3a8f3e3fd65bb5ab58077f024cc70_prof);

        
        $__internal_e7fd821b02d8c37b1320cf761c43102e2848633ab8f07dc0abb810aa5a804f09->leave($__internal_e7fd821b02d8c37b1320cf761c43102e2848633ab8f07dc0abb810aa5a804f09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
