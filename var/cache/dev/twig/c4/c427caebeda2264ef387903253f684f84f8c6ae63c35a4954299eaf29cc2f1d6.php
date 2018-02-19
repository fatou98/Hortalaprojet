<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b0dcf729e21e7b2b63f9fca65ac5f30971d8cc7e9e01e35338e38f87c0545039 extends Twig_Template
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
        $__internal_4d2a141a50ae2fc878c926868f2e572649d091f6791d388201080e9c4174f0d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d2a141a50ae2fc878c926868f2e572649d091f6791d388201080e9c4174f0d1->enter($__internal_4d2a141a50ae2fc878c926868f2e572649d091f6791d388201080e9c4174f0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_af2f9c533e04d621cb1434adf16047b8a071b28fa47b1f3b41e5ea875c68dbf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2f9c533e04d621cb1434adf16047b8a071b28fa47b1f3b41e5ea875c68dbf5->enter($__internal_af2f9c533e04d621cb1434adf16047b8a071b28fa47b1f3b41e5ea875c68dbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4d2a141a50ae2fc878c926868f2e572649d091f6791d388201080e9c4174f0d1->leave($__internal_4d2a141a50ae2fc878c926868f2e572649d091f6791d388201080e9c4174f0d1_prof);

        
        $__internal_af2f9c533e04d621cb1434adf16047b8a071b28fa47b1f3b41e5ea875c68dbf5->leave($__internal_af2f9c533e04d621cb1434adf16047b8a071b28fa47b1f3b41e5ea875c68dbf5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
