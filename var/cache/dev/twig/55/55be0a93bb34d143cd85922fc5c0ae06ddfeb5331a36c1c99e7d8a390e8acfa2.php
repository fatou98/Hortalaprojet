<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_219835b3ae468b62cc10b048f2f2ab6e4b9c7979fb5e4f65edc09a8eb37c84a9 extends Twig_Template
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
        $__internal_9aae9474978f12ffeb7156366f9adcdce65412279f80ab0404604567bc108cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aae9474978f12ffeb7156366f9adcdce65412279f80ab0404604567bc108cf5->enter($__internal_9aae9474978f12ffeb7156366f9adcdce65412279f80ab0404604567bc108cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_58fd0085778f32001246fcb4258e349d54b616f9693a70bcf823fde7f9350986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fd0085778f32001246fcb4258e349d54b616f9693a70bcf823fde7f9350986->enter($__internal_58fd0085778f32001246fcb4258e349d54b616f9693a70bcf823fde7f9350986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9aae9474978f12ffeb7156366f9adcdce65412279f80ab0404604567bc108cf5->leave($__internal_9aae9474978f12ffeb7156366f9adcdce65412279f80ab0404604567bc108cf5_prof);

        
        $__internal_58fd0085778f32001246fcb4258e349d54b616f9693a70bcf823fde7f9350986->leave($__internal_58fd0085778f32001246fcb4258e349d54b616f9693a70bcf823fde7f9350986_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
