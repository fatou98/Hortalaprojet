<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_da2f81008a6023aedfa23043385f41ef6405f34d22bb018f42ebd0518c035f64 extends Twig_Template
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
        $__internal_754b9ec14baa930af71970c96f3bfb639da4cdab2397d13f1f6721786a5c5e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_754b9ec14baa930af71970c96f3bfb639da4cdab2397d13f1f6721786a5c5e15->enter($__internal_754b9ec14baa930af71970c96f3bfb639da4cdab2397d13f1f6721786a5c5e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_83987765ca4a85e48587c246a1d811dc7553329357888b86a9122e2709bf7479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83987765ca4a85e48587c246a1d811dc7553329357888b86a9122e2709bf7479->enter($__internal_83987765ca4a85e48587c246a1d811dc7553329357888b86a9122e2709bf7479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_754b9ec14baa930af71970c96f3bfb639da4cdab2397d13f1f6721786a5c5e15->leave($__internal_754b9ec14baa930af71970c96f3bfb639da4cdab2397d13f1f6721786a5c5e15_prof);

        
        $__internal_83987765ca4a85e48587c246a1d811dc7553329357888b86a9122e2709bf7479->leave($__internal_83987765ca4a85e48587c246a1d811dc7553329357888b86a9122e2709bf7479_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
