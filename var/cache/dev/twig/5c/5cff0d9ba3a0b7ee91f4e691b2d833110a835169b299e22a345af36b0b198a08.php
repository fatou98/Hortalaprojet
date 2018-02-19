<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ea489ac037eff5b6cc5da6e46398cb3142524f8b1f8d695642203ccc4ca0976f extends Twig_Template
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
        $__internal_7a1df0934852e875c10676adf052a8f0172c79f24b5f9c7045c7e97d24d987b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1df0934852e875c10676adf052a8f0172c79f24b5f9c7045c7e97d24d987b8->enter($__internal_7a1df0934852e875c10676adf052a8f0172c79f24b5f9c7045c7e97d24d987b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_e99eeba90fe621f561d4306a028eaf86ff5876f1e17db6574aad3d1e724080fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99eeba90fe621f561d4306a028eaf86ff5876f1e17db6574aad3d1e724080fb->enter($__internal_e99eeba90fe621f561d4306a028eaf86ff5876f1e17db6574aad3d1e724080fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7a1df0934852e875c10676adf052a8f0172c79f24b5f9c7045c7e97d24d987b8->leave($__internal_7a1df0934852e875c10676adf052a8f0172c79f24b5f9c7045c7e97d24d987b8_prof);

        
        $__internal_e99eeba90fe621f561d4306a028eaf86ff5876f1e17db6574aad3d1e724080fb->leave($__internal_e99eeba90fe621f561d4306a028eaf86ff5876f1e17db6574aad3d1e724080fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
