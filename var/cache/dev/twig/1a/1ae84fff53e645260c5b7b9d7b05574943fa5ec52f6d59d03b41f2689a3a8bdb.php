<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_b184eb827511296740f03ac869d4875e6ad99eaf725f233ca1d05b9f7ac35da3 extends Twig_Template
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
        $__internal_54f78afe85e6d909dd323e65046c69770e40aab947274e7eb5a8d4489f11b31a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f78afe85e6d909dd323e65046c69770e40aab947274e7eb5a8d4489f11b31a->enter($__internal_54f78afe85e6d909dd323e65046c69770e40aab947274e7eb5a8d4489f11b31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_1be53c8b865dce03d106d6ccb84f884da80df7f397415003d5c47c05b571180b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be53c8b865dce03d106d6ccb84f884da80df7f397415003d5c47c05b571180b->enter($__internal_1be53c8b865dce03d106d6ccb84f884da80df7f397415003d5c47c05b571180b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_54f78afe85e6d909dd323e65046c69770e40aab947274e7eb5a8d4489f11b31a->leave($__internal_54f78afe85e6d909dd323e65046c69770e40aab947274e7eb5a8d4489f11b31a_prof);

        
        $__internal_1be53c8b865dce03d106d6ccb84f884da80df7f397415003d5c47c05b571180b->leave($__internal_1be53c8b865dce03d106d6ccb84f884da80df7f397415003d5c47c05b571180b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
