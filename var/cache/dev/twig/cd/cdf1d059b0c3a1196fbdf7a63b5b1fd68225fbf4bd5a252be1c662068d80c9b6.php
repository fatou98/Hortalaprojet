<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ec54a3e07847b95f4576d7d493ad687fe46d2fa86a318c7c42f9c50c24f2aaac extends Twig_Template
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
        $__internal_7a680e152f591059841247a6e13f36ab29661c89f2fcc83bddc38d71cbd63c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a680e152f591059841247a6e13f36ab29661c89f2fcc83bddc38d71cbd63c98->enter($__internal_7a680e152f591059841247a6e13f36ab29661c89f2fcc83bddc38d71cbd63c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_7a4b967643d562c450c058d38202f35487095a3166aaa642531800455a3b9f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4b967643d562c450c058d38202f35487095a3166aaa642531800455a3b9f1d->enter($__internal_7a4b967643d562c450c058d38202f35487095a3166aaa642531800455a3b9f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7a680e152f591059841247a6e13f36ab29661c89f2fcc83bddc38d71cbd63c98->leave($__internal_7a680e152f591059841247a6e13f36ab29661c89f2fcc83bddc38d71cbd63c98_prof);

        
        $__internal_7a4b967643d562c450c058d38202f35487095a3166aaa642531800455a3b9f1d->leave($__internal_7a4b967643d562c450c058d38202f35487095a3166aaa642531800455a3b9f1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
