<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_24368a2248c0af7b162a15b8d8a139061054c3ec9eb0a7dc75901c6728ca1efd extends Twig_Template
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
        $__internal_a8b1eca38939c7ed219f8866eb4d556eeae4da0fdf9e91e8e6d50704cba929a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b1eca38939c7ed219f8866eb4d556eeae4da0fdf9e91e8e6d50704cba929a7->enter($__internal_a8b1eca38939c7ed219f8866eb4d556eeae4da0fdf9e91e8e6d50704cba929a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a8f5b428a3fbf5e34c612a450905cc14c2b3bee1a42c802330f84e1142b68bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f5b428a3fbf5e34c612a450905cc14c2b3bee1a42c802330f84e1142b68bc6->enter($__internal_a8f5b428a3fbf5e34c612a450905cc14c2b3bee1a42c802330f84e1142b68bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a8b1eca38939c7ed219f8866eb4d556eeae4da0fdf9e91e8e6d50704cba929a7->leave($__internal_a8b1eca38939c7ed219f8866eb4d556eeae4da0fdf9e91e8e6d50704cba929a7_prof);

        
        $__internal_a8f5b428a3fbf5e34c612a450905cc14c2b3bee1a42c802330f84e1142b68bc6->leave($__internal_a8f5b428a3fbf5e34c612a450905cc14c2b3bee1a42c802330f84e1142b68bc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
