<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e69ea2fbd87db996559795308b3031e71f4932b97828f8343b9e480366be8bbe extends Twig_Template
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
        $__internal_3c3499e1726ba948a848c049d5a8d4bee94cf549d6415dab18161d606fe68d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c3499e1726ba948a848c049d5a8d4bee94cf549d6415dab18161d606fe68d93->enter($__internal_3c3499e1726ba948a848c049d5a8d4bee94cf549d6415dab18161d606fe68d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_2d680e21a7416e0ea8d6e196fdcd31f78bdd89e2955ba2cf1891d78a61374bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d680e21a7416e0ea8d6e196fdcd31f78bdd89e2955ba2cf1891d78a61374bc3->enter($__internal_2d680e21a7416e0ea8d6e196fdcd31f78bdd89e2955ba2cf1891d78a61374bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3c3499e1726ba948a848c049d5a8d4bee94cf549d6415dab18161d606fe68d93->leave($__internal_3c3499e1726ba948a848c049d5a8d4bee94cf549d6415dab18161d606fe68d93_prof);

        
        $__internal_2d680e21a7416e0ea8d6e196fdcd31f78bdd89e2955ba2cf1891d78a61374bc3->leave($__internal_2d680e21a7416e0ea8d6e196fdcd31f78bdd89e2955ba2cf1891d78a61374bc3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
