<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b919a0bed1f0da8db1f6e3ee491aa91f86fb9f011cf904d756bcf7bf2547a23c extends Twig_Template
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
        $__internal_08c735d9fc675208cf849eaa417de67a2fff483beb774bac244781c727198eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08c735d9fc675208cf849eaa417de67a2fff483beb774bac244781c727198eb7->enter($__internal_08c735d9fc675208cf849eaa417de67a2fff483beb774bac244781c727198eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_f8fc9c28002e15307608faaf0addf4ffe1b21d5b2cbf8aa5a184e398b28e5ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fc9c28002e15307608faaf0addf4ffe1b21d5b2cbf8aa5a184e398b28e5ecf->enter($__internal_f8fc9c28002e15307608faaf0addf4ffe1b21d5b2cbf8aa5a184e398b28e5ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_08c735d9fc675208cf849eaa417de67a2fff483beb774bac244781c727198eb7->leave($__internal_08c735d9fc675208cf849eaa417de67a2fff483beb774bac244781c727198eb7_prof);

        
        $__internal_f8fc9c28002e15307608faaf0addf4ffe1b21d5b2cbf8aa5a184e398b28e5ecf->leave($__internal_f8fc9c28002e15307608faaf0addf4ffe1b21d5b2cbf8aa5a184e398b28e5ecf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
