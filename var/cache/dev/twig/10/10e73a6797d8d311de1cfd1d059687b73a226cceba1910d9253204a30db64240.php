<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_fb269e3c0afc6f0809bac498c2f59af66ac7ad19fcada8257845f778d27a7607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4e7fccbb41c3b04285b9f83500b48b1f5e10821d067f37af362276723a7c4ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e7fccbb41c3b04285b9f83500b48b1f5e10821d067f37af362276723a7c4ab->enter($__internal_d4e7fccbb41c3b04285b9f83500b48b1f5e10821d067f37af362276723a7c4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_cda3e017a788ccf8e5fe65512d26d43849da0f966afa6e0fd68b97b913ea68d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda3e017a788ccf8e5fe65512d26d43849da0f966afa6e0fd68b97b913ea68d0->enter($__internal_cda3e017a788ccf8e5fe65512d26d43849da0f966afa6e0fd68b97b913ea68d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4e7fccbb41c3b04285b9f83500b48b1f5e10821d067f37af362276723a7c4ab->leave($__internal_d4e7fccbb41c3b04285b9f83500b48b1f5e10821d067f37af362276723a7c4ab_prof);

        
        $__internal_cda3e017a788ccf8e5fe65512d26d43849da0f966afa6e0fd68b97b913ea68d0->leave($__internal_cda3e017a788ccf8e5fe65512d26d43849da0f966afa6e0fd68b97b913ea68d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f0a51d3ce48d5e92ab4ca38cb2cf81eeee6773fa565b2c02d7ae0f2ae8d129c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f0a51d3ce48d5e92ab4ca38cb2cf81eeee6773fa565b2c02d7ae0f2ae8d129c->enter($__internal_1f0a51d3ce48d5e92ab4ca38cb2cf81eeee6773fa565b2c02d7ae0f2ae8d129c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d3de0f2f10b8292395b7a9b55c4d26b8ec6e12306800e72f26355d52185c4b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3de0f2f10b8292395b7a9b55c4d26b8ec6e12306800e72f26355d52185c4b07->enter($__internal_d3de0f2f10b8292395b7a9b55c4d26b8ec6e12306800e72f26355d52185c4b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d3de0f2f10b8292395b7a9b55c4d26b8ec6e12306800e72f26355d52185c4b07->leave($__internal_d3de0f2f10b8292395b7a9b55c4d26b8ec6e12306800e72f26355d52185c4b07_prof);

        
        $__internal_1f0a51d3ce48d5e92ab4ca38cb2cf81eeee6773fa565b2c02d7ae0f2ae8d129c->leave($__internal_1f0a51d3ce48d5e92ab4ca38cb2cf81eeee6773fa565b2c02d7ae0f2ae8d129c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1381e1c7a2f7869a59bd93a0acba960ecac4354b62934c8f0dbceb161f3b13f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1381e1c7a2f7869a59bd93a0acba960ecac4354b62934c8f0dbceb161f3b13f->enter($__internal_b1381e1c7a2f7869a59bd93a0acba960ecac4354b62934c8f0dbceb161f3b13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36d444ad30ce03e97aacbee017d7b095e0fce66fa23272528885ad95da50e74c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d444ad30ce03e97aacbee017d7b095e0fce66fa23272528885ad95da50e74c->enter($__internal_36d444ad30ce03e97aacbee017d7b095e0fce66fa23272528885ad95da50e74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_36d444ad30ce03e97aacbee017d7b095e0fce66fa23272528885ad95da50e74c->leave($__internal_36d444ad30ce03e97aacbee017d7b095e0fce66fa23272528885ad95da50e74c_prof);

        
        $__internal_b1381e1c7a2f7869a59bd93a0acba960ecac4354b62934c8f0dbceb161f3b13f->leave($__internal_b1381e1c7a2f7869a59bd93a0acba960ecac4354b62934c8f0dbceb161f3b13f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
