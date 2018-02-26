<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8c374e12e73914b5f102e3be95402f14f258e97959a5553ee752256db776868e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ebd918a25988eed4a8275c2a5ab9563a956f180cb031eea10b2decf8cc817d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd918a25988eed4a8275c2a5ab9563a956f180cb031eea10b2decf8cc817d8d->enter($__internal_ebd918a25988eed4a8275c2a5ab9563a956f180cb031eea10b2decf8cc817d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_426823e1877fdef89894b98b142b32f35ff69bf3a4403dd18cd788079a489cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426823e1877fdef89894b98b142b32f35ff69bf3a4403dd18cd788079a489cf0->enter($__internal_426823e1877fdef89894b98b142b32f35ff69bf3a4403dd18cd788079a489cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebd918a25988eed4a8275c2a5ab9563a956f180cb031eea10b2decf8cc817d8d->leave($__internal_ebd918a25988eed4a8275c2a5ab9563a956f180cb031eea10b2decf8cc817d8d_prof);

        
        $__internal_426823e1877fdef89894b98b142b32f35ff69bf3a4403dd18cd788079a489cf0->leave($__internal_426823e1877fdef89894b98b142b32f35ff69bf3a4403dd18cd788079a489cf0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_46aa9064b05a37658518803c6fbf3465bfd454ad6ff17ed76fced5e5c98ae2e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46aa9064b05a37658518803c6fbf3465bfd454ad6ff17ed76fced5e5c98ae2e7->enter($__internal_46aa9064b05a37658518803c6fbf3465bfd454ad6ff17ed76fced5e5c98ae2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_066a7ee1f509abb59be96424fc498ada0c127967aebd7b9e5e40c1f5a24b447d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066a7ee1f509abb59be96424fc498ada0c127967aebd7b9e5e40c1f5a24b447d->enter($__internal_066a7ee1f509abb59be96424fc498ada0c127967aebd7b9e5e40c1f5a24b447d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_066a7ee1f509abb59be96424fc498ada0c127967aebd7b9e5e40c1f5a24b447d->leave($__internal_066a7ee1f509abb59be96424fc498ada0c127967aebd7b9e5e40c1f5a24b447d_prof);

        
        $__internal_46aa9064b05a37658518803c6fbf3465bfd454ad6ff17ed76fced5e5c98ae2e7->leave($__internal_46aa9064b05a37658518803c6fbf3465bfd454ad6ff17ed76fced5e5c98ae2e7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_15c139c27e39e43d5e897563049fb0f939367580037e70f1d486f481a877a4a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c139c27e39e43d5e897563049fb0f939367580037e70f1d486f481a877a4a4->enter($__internal_15c139c27e39e43d5e897563049fb0f939367580037e70f1d486f481a877a4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_62c581c1910492e49a08dda735464c59e58249ff8affa0a964f078d020882e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c581c1910492e49a08dda735464c59e58249ff8affa0a964f078d020882e2f->enter($__internal_62c581c1910492e49a08dda735464c59e58249ff8affa0a964f078d020882e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_62c581c1910492e49a08dda735464c59e58249ff8affa0a964f078d020882e2f->leave($__internal_62c581c1910492e49a08dda735464c59e58249ff8affa0a964f078d020882e2f_prof);

        
        $__internal_15c139c27e39e43d5e897563049fb0f939367580037e70f1d486f481a877a4a4->leave($__internal_15c139c27e39e43d5e897563049fb0f939367580037e70f1d486f481a877a4a4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6dcd6461eb227a5e48564a59a5c48747449f1e9ebf34cc149aa7a7f1e03f6fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6dcd6461eb227a5e48564a59a5c48747449f1e9ebf34cc149aa7a7f1e03f6fe->enter($__internal_d6dcd6461eb227a5e48564a59a5c48747449f1e9ebf34cc149aa7a7f1e03f6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf8ac88bafc8a6de8383be9b84c4d57c8dfdf6744768f14d30401df48832835f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8ac88bafc8a6de8383be9b84c4d57c8dfdf6744768f14d30401df48832835f->enter($__internal_bf8ac88bafc8a6de8383be9b84c4d57c8dfdf6744768f14d30401df48832835f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_bf8ac88bafc8a6de8383be9b84c4d57c8dfdf6744768f14d30401df48832835f->leave($__internal_bf8ac88bafc8a6de8383be9b84c4d57c8dfdf6744768f14d30401df48832835f_prof);

        
        $__internal_d6dcd6461eb227a5e48564a59a5c48747449f1e9ebf34cc149aa7a7f1e03f6fe->leave($__internal_d6dcd6461eb227a5e48564a59a5c48747449f1e9ebf34cc149aa7a7f1e03f6fe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/testhortala/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
