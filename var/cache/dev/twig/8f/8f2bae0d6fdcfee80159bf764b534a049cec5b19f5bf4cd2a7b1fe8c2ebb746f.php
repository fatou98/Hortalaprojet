<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_fcbc65df1a0322b55d6cc099884424eaeb0e898507bc962f1da7f16d12ff7865 extends Twig_Template
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
        $__internal_9b381e89f2a01f61c28ae66010b7c260975f84438ecfe52b5fd819f2f47d575a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b381e89f2a01f61c28ae66010b7c260975f84438ecfe52b5fd819f2f47d575a->enter($__internal_9b381e89f2a01f61c28ae66010b7c260975f84438ecfe52b5fd819f2f47d575a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f62b68bc38787be1d1437eca7c95cf02642e2fce27d4da4ea999bb41276c3726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62b68bc38787be1d1437eca7c95cf02642e2fce27d4da4ea999bb41276c3726->enter($__internal_f62b68bc38787be1d1437eca7c95cf02642e2fce27d4da4ea999bb41276c3726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9b381e89f2a01f61c28ae66010b7c260975f84438ecfe52b5fd819f2f47d575a->leave($__internal_9b381e89f2a01f61c28ae66010b7c260975f84438ecfe52b5fd819f2f47d575a_prof);

        
        $__internal_f62b68bc38787be1d1437eca7c95cf02642e2fce27d4da4ea999bb41276c3726->leave($__internal_f62b68bc38787be1d1437eca7c95cf02642e2fce27d4da4ea999bb41276c3726_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
