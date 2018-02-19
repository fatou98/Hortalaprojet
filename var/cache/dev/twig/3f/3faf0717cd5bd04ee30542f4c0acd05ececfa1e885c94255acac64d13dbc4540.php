<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_63cf1def30edea29b891ac91795708fec601363b5d41979c4de30b1b8f2c499e extends Twig_Template
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
        $__internal_fdb3de572bbeedc410355ec7fa0df9b38afe68918cb02974c6b666d2a96ae509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb3de572bbeedc410355ec7fa0df9b38afe68918cb02974c6b666d2a96ae509->enter($__internal_fdb3de572bbeedc410355ec7fa0df9b38afe68918cb02974c6b666d2a96ae509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_b06cc239f8caa8dd60af4165526a867f08d457ebdb832837a972c53ca577d43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06cc239f8caa8dd60af4165526a867f08d457ebdb832837a972c53ca577d43c->enter($__internal_b06cc239f8caa8dd60af4165526a867f08d457ebdb832837a972c53ca577d43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_fdb3de572bbeedc410355ec7fa0df9b38afe68918cb02974c6b666d2a96ae509->leave($__internal_fdb3de572bbeedc410355ec7fa0df9b38afe68918cb02974c6b666d2a96ae509_prof);

        
        $__internal_b06cc239f8caa8dd60af4165526a867f08d457ebdb832837a972c53ca577d43c->leave($__internal_b06cc239f8caa8dd60af4165526a867f08d457ebdb832837a972c53ca577d43c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
