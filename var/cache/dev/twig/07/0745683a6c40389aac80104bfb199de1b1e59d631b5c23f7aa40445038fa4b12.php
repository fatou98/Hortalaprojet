<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_793db0e16e3bdba4e13d216bac91f26bbb45df7737287128d2f2b34e8f05488f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e061025e77ab79c51644c1342218b5360238062127bfd32282adfae84e6c6efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e061025e77ab79c51644c1342218b5360238062127bfd32282adfae84e6c6efa->enter($__internal_e061025e77ab79c51644c1342218b5360238062127bfd32282adfae84e6c6efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_3418e4fbc9b006e500d405b09ec04439745fbb730c75b4f746c9a2ac199768b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3418e4fbc9b006e500d405b09ec04439745fbb730c75b4f746c9a2ac199768b4->enter($__internal_3418e4fbc9b006e500d405b09ec04439745fbb730c75b4f746c9a2ac199768b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e061025e77ab79c51644c1342218b5360238062127bfd32282adfae84e6c6efa->leave($__internal_e061025e77ab79c51644c1342218b5360238062127bfd32282adfae84e6c6efa_prof);

        
        $__internal_3418e4fbc9b006e500d405b09ec04439745fbb730c75b4f746c9a2ac199768b4->leave($__internal_3418e4fbc9b006e500d405b09ec04439745fbb730c75b4f746c9a2ac199768b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae2b21f3ad6752645c77e07f9dbed8d8f84c7609abdbcc32675c013851e72289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2b21f3ad6752645c77e07f9dbed8d8f84c7609abdbcc32675c013851e72289->enter($__internal_ae2b21f3ad6752645c77e07f9dbed8d8f84c7609abdbcc32675c013851e72289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_574f8edd6dec992db0e3fcd43520895cd65f95a6d7dc741ca3f03cec14be7261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574f8edd6dec992db0e3fcd43520895cd65f95a6d7dc741ca3f03cec14be7261->enter($__internal_574f8edd6dec992db0e3fcd43520895cd65f95a6d7dc741ca3f03cec14be7261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_574f8edd6dec992db0e3fcd43520895cd65f95a6d7dc741ca3f03cec14be7261->leave($__internal_574f8edd6dec992db0e3fcd43520895cd65f95a6d7dc741ca3f03cec14be7261_prof);

        
        $__internal_ae2b21f3ad6752645c77e07f9dbed8d8f84c7609abdbcc32675c013851e72289->leave($__internal_ae2b21f3ad6752645c77e07f9dbed8d8f84c7609abdbcc32675c013851e72289_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_398c515d34de8d7b82fb451c9f5a68026c9c670ef8bfafa414a0e94850bcf883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398c515d34de8d7b82fb451c9f5a68026c9c670ef8bfafa414a0e94850bcf883->enter($__internal_398c515d34de8d7b82fb451c9f5a68026c9c670ef8bfafa414a0e94850bcf883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f04e1db48377508833d92fc60982b683acdc096ad63319f678c25419c9e7023a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04e1db48377508833d92fc60982b683acdc096ad63319f678c25419c9e7023a->enter($__internal_f04e1db48377508833d92fc60982b683acdc096ad63319f678c25419c9e7023a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f04e1db48377508833d92fc60982b683acdc096ad63319f678c25419c9e7023a->leave($__internal_f04e1db48377508833d92fc60982b683acdc096ad63319f678c25419c9e7023a_prof);

        
        $__internal_398c515d34de8d7b82fb451c9f5a68026c9c670ef8bfafa414a0e94850bcf883->leave($__internal_398c515d34de8d7b82fb451c9f5a68026c9c670ef8bfafa414a0e94850bcf883_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
