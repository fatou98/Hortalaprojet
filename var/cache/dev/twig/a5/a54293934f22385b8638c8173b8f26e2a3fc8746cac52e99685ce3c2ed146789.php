<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_7c5ca4a68698dc2b74d160f7220e4b43f2bc8a2e1b7fdd4026a31f026f8b66e1 extends Twig_Template
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
        $__internal_cf6e75048f95c4b175b79daa0c4731f2935de6404bd77a64265d1daad605d5e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6e75048f95c4b175b79daa0c4731f2935de6404bd77a64265d1daad605d5e7->enter($__internal_cf6e75048f95c4b175b79daa0c4731f2935de6404bd77a64265d1daad605d5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_027f7369e189686788104aba61d910689e690fd19faeb5c996f8cf502c1b2b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027f7369e189686788104aba61d910689e690fd19faeb5c996f8cf502c1b2b49->enter($__internal_027f7369e189686788104aba61d910689e690fd19faeb5c996f8cf502c1b2b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cf6e75048f95c4b175b79daa0c4731f2935de6404bd77a64265d1daad605d5e7->leave($__internal_cf6e75048f95c4b175b79daa0c4731f2935de6404bd77a64265d1daad605d5e7_prof);

        
        $__internal_027f7369e189686788104aba61d910689e690fd19faeb5c996f8cf502c1b2b49->leave($__internal_027f7369e189686788104aba61d910689e690fd19faeb5c996f8cf502c1b2b49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
