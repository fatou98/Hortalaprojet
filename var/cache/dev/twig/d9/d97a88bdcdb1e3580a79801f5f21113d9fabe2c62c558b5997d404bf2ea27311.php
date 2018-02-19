<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_a25cd2e7f69656f77c2b32536f8fc139d39db9b9c5a5562bab0c388b92db2cd5 extends Twig_Template
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
        $__internal_b812008590d7408f486c6f72f53f4da54abeeecbf78e848c56d310cdbcddfa2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b812008590d7408f486c6f72f53f4da54abeeecbf78e848c56d310cdbcddfa2c->enter($__internal_b812008590d7408f486c6f72f53f4da54abeeecbf78e848c56d310cdbcddfa2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_7c4a6a7f46c8fd377c6f4d79f57412e9675e069b637e0fbd8c88921d60850954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4a6a7f46c8fd377c6f4d79f57412e9675e069b637e0fbd8c88921d60850954->enter($__internal_7c4a6a7f46c8fd377c6f4d79f57412e9675e069b637e0fbd8c88921d60850954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b812008590d7408f486c6f72f53f4da54abeeecbf78e848c56d310cdbcddfa2c->leave($__internal_b812008590d7408f486c6f72f53f4da54abeeecbf78e848c56d310cdbcddfa2c_prof);

        
        $__internal_7c4a6a7f46c8fd377c6f4d79f57412e9675e069b637e0fbd8c88921d60850954->leave($__internal_7c4a6a7f46c8fd377c6f4d79f57412e9675e069b637e0fbd8c88921d60850954_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
