<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_cfd5706fcd02e042f12ad936a8599982598c9401143d3278f02130268b20b5fd extends Twig_Template
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
        $__internal_f9a87f60865730d83c72fed54990386410095de06a7141e50dd4c1368a46e5a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a87f60865730d83c72fed54990386410095de06a7141e50dd4c1368a46e5a3->enter($__internal_f9a87f60865730d83c72fed54990386410095de06a7141e50dd4c1368a46e5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_7de30d2930945f5ffda51b089e2f270d791725b09156787c9e64f9b7007f2e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de30d2930945f5ffda51b089e2f270d791725b09156787c9e64f9b7007f2e4e->enter($__internal_7de30d2930945f5ffda51b089e2f270d791725b09156787c9e64f9b7007f2e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f9a87f60865730d83c72fed54990386410095de06a7141e50dd4c1368a46e5a3->leave($__internal_f9a87f60865730d83c72fed54990386410095de06a7141e50dd4c1368a46e5a3_prof);

        
        $__internal_7de30d2930945f5ffda51b089e2f270d791725b09156787c9e64f9b7007f2e4e->leave($__internal_7de30d2930945f5ffda51b089e2f270d791725b09156787c9e64f9b7007f2e4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
