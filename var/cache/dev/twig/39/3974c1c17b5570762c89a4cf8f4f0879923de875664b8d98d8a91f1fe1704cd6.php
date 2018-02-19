<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_88423b3302e4e5745f2b650e220f4ac10d40f006b54b9885dfd888fa32f80857 extends Twig_Template
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
        $__internal_0886482c818d1f65055eb3338d1023176553d2bca27caadcbe98df49ca6162d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0886482c818d1f65055eb3338d1023176553d2bca27caadcbe98df49ca6162d1->enter($__internal_0886482c818d1f65055eb3338d1023176553d2bca27caadcbe98df49ca6162d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3a3d244dcf2a3e6e38b0dfbfb9b54457cd77ba84c30ef911973bbeca27bceeeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3d244dcf2a3e6e38b0dfbfb9b54457cd77ba84c30ef911973bbeca27bceeeb->enter($__internal_3a3d244dcf2a3e6e38b0dfbfb9b54457cd77ba84c30ef911973bbeca27bceeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0886482c818d1f65055eb3338d1023176553d2bca27caadcbe98df49ca6162d1->leave($__internal_0886482c818d1f65055eb3338d1023176553d2bca27caadcbe98df49ca6162d1_prof);

        
        $__internal_3a3d244dcf2a3e6e38b0dfbfb9b54457cd77ba84c30ef911973bbeca27bceeeb->leave($__internal_3a3d244dcf2a3e6e38b0dfbfb9b54457cd77ba84c30ef911973bbeca27bceeeb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
