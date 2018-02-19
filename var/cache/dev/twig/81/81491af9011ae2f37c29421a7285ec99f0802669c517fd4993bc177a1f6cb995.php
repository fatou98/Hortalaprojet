<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_68c23db07e3b56d6ffe8fc87c0841c1503c65d7f0d06a280686cae3fd7996572 extends Twig_Template
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
        $__internal_3418ce9386d938758806b1042d646e833e1156c34d3f252356e743259d6a1e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3418ce9386d938758806b1042d646e833e1156c34d3f252356e743259d6a1e2f->enter($__internal_3418ce9386d938758806b1042d646e833e1156c34d3f252356e743259d6a1e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_9273c7352e0eaca190f6dcbd84355efeed59aca76f9343607bd08e61b4429d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9273c7352e0eaca190f6dcbd84355efeed59aca76f9343607bd08e61b4429d7b->enter($__internal_9273c7352e0eaca190f6dcbd84355efeed59aca76f9343607bd08e61b4429d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3418ce9386d938758806b1042d646e833e1156c34d3f252356e743259d6a1e2f->leave($__internal_3418ce9386d938758806b1042d646e833e1156c34d3f252356e743259d6a1e2f_prof);

        
        $__internal_9273c7352e0eaca190f6dcbd84355efeed59aca76f9343607bd08e61b4429d7b->leave($__internal_9273c7352e0eaca190f6dcbd84355efeed59aca76f9343607bd08e61b4429d7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
