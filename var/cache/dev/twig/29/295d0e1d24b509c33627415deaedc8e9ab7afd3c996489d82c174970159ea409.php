<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e65e64201a0806cad25e171e2a61f7bb862dfdbba389d1ed2cdf715f0c6d77a4 extends Twig_Template
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
        $__internal_789e0f4cb3a7bd5368761092aa42d5511fa24a9fc3f168cd6ecd98f4b468691e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789e0f4cb3a7bd5368761092aa42d5511fa24a9fc3f168cd6ecd98f4b468691e->enter($__internal_789e0f4cb3a7bd5368761092aa42d5511fa24a9fc3f168cd6ecd98f4b468691e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2aaf152c7a0b341851e559226b6240a5ac7949e51bf38f1919b7b019b20269f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aaf152c7a0b341851e559226b6240a5ac7949e51bf38f1919b7b019b20269f5->enter($__internal_2aaf152c7a0b341851e559226b6240a5ac7949e51bf38f1919b7b019b20269f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_789e0f4cb3a7bd5368761092aa42d5511fa24a9fc3f168cd6ecd98f4b468691e->leave($__internal_789e0f4cb3a7bd5368761092aa42d5511fa24a9fc3f168cd6ecd98f4b468691e_prof);

        
        $__internal_2aaf152c7a0b341851e559226b6240a5ac7949e51bf38f1919b7b019b20269f5->leave($__internal_2aaf152c7a0b341851e559226b6240a5ac7949e51bf38f1919b7b019b20269f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
