<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6b8caad697d66c3cda9d6e55807e266079d09256cbeeb140711b8c5e4a11c223 extends Twig_Template
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
        $__internal_2b9a9e11994dcd45423183b4fdcf83ea1cf94f07a01b1215e35804b6114a928a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b9a9e11994dcd45423183b4fdcf83ea1cf94f07a01b1215e35804b6114a928a->enter($__internal_2b9a9e11994dcd45423183b4fdcf83ea1cf94f07a01b1215e35804b6114a928a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ff83ec54d38ab94a79f8450c62f2ba96fe72fea90aa47ec3d77eaab189f920c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff83ec54d38ab94a79f8450c62f2ba96fe72fea90aa47ec3d77eaab189f920c0->enter($__internal_ff83ec54d38ab94a79f8450c62f2ba96fe72fea90aa47ec3d77eaab189f920c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2b9a9e11994dcd45423183b4fdcf83ea1cf94f07a01b1215e35804b6114a928a->leave($__internal_2b9a9e11994dcd45423183b4fdcf83ea1cf94f07a01b1215e35804b6114a928a_prof);

        
        $__internal_ff83ec54d38ab94a79f8450c62f2ba96fe72fea90aa47ec3d77eaab189f920c0->leave($__internal_ff83ec54d38ab94a79f8450c62f2ba96fe72fea90aa47ec3d77eaab189f920c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
