<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_7fb9e0954c6992fe496a7e2d94fab650ac2264d2f3f43c4300df92ea15c6662b extends Twig_Template
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
        $__internal_fc52b1868144985174e3b3bab4b5eeb894551cfc8ed1998ee4948b077f4269c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc52b1868144985174e3b3bab4b5eeb894551cfc8ed1998ee4948b077f4269c0->enter($__internal_fc52b1868144985174e3b3bab4b5eeb894551cfc8ed1998ee4948b077f4269c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_8e59cd92fc272aa354d18ac01fa6a2e0c7ffc7ce3564031df1273dcd728884d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e59cd92fc272aa354d18ac01fa6a2e0c7ffc7ce3564031df1273dcd728884d4->enter($__internal_8e59cd92fc272aa354d18ac01fa6a2e0c7ffc7ce3564031df1273dcd728884d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_fc52b1868144985174e3b3bab4b5eeb894551cfc8ed1998ee4948b077f4269c0->leave($__internal_fc52b1868144985174e3b3bab4b5eeb894551cfc8ed1998ee4948b077f4269c0_prof);

        
        $__internal_8e59cd92fc272aa354d18ac01fa6a2e0c7ffc7ce3564031df1273dcd728884d4->leave($__internal_8e59cd92fc272aa354d18ac01fa6a2e0c7ffc7ce3564031df1273dcd728884d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
