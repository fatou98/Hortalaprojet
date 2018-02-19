<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_44eba0b7a500ba481eb8c8a7fe8a3d0e7987d61bf84b9d172386a710eab887d0 extends Twig_Template
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
        $__internal_e9630298ac43ba4e2eb849d1c29c53aa0ec9f29f057bfbd78826b977372312cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9630298ac43ba4e2eb849d1c29c53aa0ec9f29f057bfbd78826b977372312cc->enter($__internal_e9630298ac43ba4e2eb849d1c29c53aa0ec9f29f057bfbd78826b977372312cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d5015f66a6c4b2caa627d24ce1513292edb8d4ea08d1df7bc758153423c11533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5015f66a6c4b2caa627d24ce1513292edb8d4ea08d1df7bc758153423c11533->enter($__internal_d5015f66a6c4b2caa627d24ce1513292edb8d4ea08d1df7bc758153423c11533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e9630298ac43ba4e2eb849d1c29c53aa0ec9f29f057bfbd78826b977372312cc->leave($__internal_e9630298ac43ba4e2eb849d1c29c53aa0ec9f29f057bfbd78826b977372312cc_prof);

        
        $__internal_d5015f66a6c4b2caa627d24ce1513292edb8d4ea08d1df7bc758153423c11533->leave($__internal_d5015f66a6c4b2caa627d24ce1513292edb8d4ea08d1df7bc758153423c11533_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
