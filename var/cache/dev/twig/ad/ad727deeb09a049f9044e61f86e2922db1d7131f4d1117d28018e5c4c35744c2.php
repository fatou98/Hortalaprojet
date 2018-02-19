<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_248d7bfd4b3cfc9c65853e9d39f03d050f837b7352376bd57e191b85fb869eb8 extends Twig_Template
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
        $__internal_59192476705d458cb71daae0f24510f0768c3a1fd14539885a9c3364d95825ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59192476705d458cb71daae0f24510f0768c3a1fd14539885a9c3364d95825ae->enter($__internal_59192476705d458cb71daae0f24510f0768c3a1fd14539885a9c3364d95825ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_80d9b3329864bb23c1e42c11fa0f6eb9a908db505f99c6f5029145ab6263b029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d9b3329864bb23c1e42c11fa0f6eb9a908db505f99c6f5029145ab6263b029->enter($__internal_80d9b3329864bb23c1e42c11fa0f6eb9a908db505f99c6f5029145ab6263b029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_59192476705d458cb71daae0f24510f0768c3a1fd14539885a9c3364d95825ae->leave($__internal_59192476705d458cb71daae0f24510f0768c3a1fd14539885a9c3364d95825ae_prof);

        
        $__internal_80d9b3329864bb23c1e42c11fa0f6eb9a908db505f99c6f5029145ab6263b029->leave($__internal_80d9b3329864bb23c1e42c11fa0f6eb9a908db505f99c6f5029145ab6263b029_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
