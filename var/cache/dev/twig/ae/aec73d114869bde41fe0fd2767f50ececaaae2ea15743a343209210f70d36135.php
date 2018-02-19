<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_a6e23cf060e4f4e0b992f60bc7946d956232e7d2e7dc0b865bece2019419196f extends Twig_Template
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
        $__internal_1e6d5ef2ec36679714c3479aebd3195e17485e3c2b19e2126b2d324e4b7f6424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6d5ef2ec36679714c3479aebd3195e17485e3c2b19e2126b2d324e4b7f6424->enter($__internal_1e6d5ef2ec36679714c3479aebd3195e17485e3c2b19e2126b2d324e4b7f6424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_9210a61a6795cf87071e59b95552ef1c7620a7606b463f399a75e0a29a5a644d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9210a61a6795cf87071e59b95552ef1c7620a7606b463f399a75e0a29a5a644d->enter($__internal_9210a61a6795cf87071e59b95552ef1c7620a7606b463f399a75e0a29a5a644d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1e6d5ef2ec36679714c3479aebd3195e17485e3c2b19e2126b2d324e4b7f6424->leave($__internal_1e6d5ef2ec36679714c3479aebd3195e17485e3c2b19e2126b2d324e4b7f6424_prof);

        
        $__internal_9210a61a6795cf87071e59b95552ef1c7620a7606b463f399a75e0a29a5a644d->leave($__internal_9210a61a6795cf87071e59b95552ef1c7620a7606b463f399a75e0a29a5a644d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
