<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9f2aeb7b686b20d170484168c5491bc67bdd403ec78ab977f5f3640a430e686e extends Twig_Template
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
        $__internal_0f53b9cb1a77f5c95373e5142b15e51d61e8ea3c6dcb4e67b2ebe3e1d137274c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f53b9cb1a77f5c95373e5142b15e51d61e8ea3c6dcb4e67b2ebe3e1d137274c->enter($__internal_0f53b9cb1a77f5c95373e5142b15e51d61e8ea3c6dcb4e67b2ebe3e1d137274c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_955aced3e0eb98208f98c94a9b36821207e15e0b34d0a29bcb22b0bc6a2d5403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955aced3e0eb98208f98c94a9b36821207e15e0b34d0a29bcb22b0bc6a2d5403->enter($__internal_955aced3e0eb98208f98c94a9b36821207e15e0b34d0a29bcb22b0bc6a2d5403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0f53b9cb1a77f5c95373e5142b15e51d61e8ea3c6dcb4e67b2ebe3e1d137274c->leave($__internal_0f53b9cb1a77f5c95373e5142b15e51d61e8ea3c6dcb4e67b2ebe3e1d137274c_prof);

        
        $__internal_955aced3e0eb98208f98c94a9b36821207e15e0b34d0a29bcb22b0bc6a2d5403->leave($__internal_955aced3e0eb98208f98c94a9b36821207e15e0b34d0a29bcb22b0bc6a2d5403_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
