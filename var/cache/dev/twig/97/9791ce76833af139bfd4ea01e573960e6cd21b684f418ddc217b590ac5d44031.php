<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_ec64245912791ab202fa1a1ee9b050ef1f408e9c2047c8788aa4d16c10976e26 extends Twig_Template
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
        $__internal_eb4673747f2f1169b89bff20e023172a846fb8355a4a489453198ad4aba7a9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4673747f2f1169b89bff20e023172a846fb8355a4a489453198ad4aba7a9e7->enter($__internal_eb4673747f2f1169b89bff20e023172a846fb8355a4a489453198ad4aba7a9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_24877f78f5941a81543c0eea5151f960ca0bb01aa03532ff6242eef130a4bc75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24877f78f5941a81543c0eea5151f960ca0bb01aa03532ff6242eef130a4bc75->enter($__internal_24877f78f5941a81543c0eea5151f960ca0bb01aa03532ff6242eef130a4bc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_eb4673747f2f1169b89bff20e023172a846fb8355a4a489453198ad4aba7a9e7->leave($__internal_eb4673747f2f1169b89bff20e023172a846fb8355a4a489453198ad4aba7a9e7_prof);

        
        $__internal_24877f78f5941a81543c0eea5151f960ca0bb01aa03532ff6242eef130a4bc75->leave($__internal_24877f78f5941a81543c0eea5151f960ca0bb01aa03532ff6242eef130a4bc75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
