<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_677c3f2f9313e200db4b7d2cfccebe243c6daaad2009789dccbd3915ca97049d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c3e4e80797b7a9fcf047c6ba1e4ad68c8cb82e38f566930cc8ff80cf51fce53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c3e4e80797b7a9fcf047c6ba1e4ad68c8cb82e38f566930cc8ff80cf51fce53->enter($__internal_8c3e4e80797b7a9fcf047c6ba1e4ad68c8cb82e38f566930cc8ff80cf51fce53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_19ed5ac8c2a16146d070d8b8143fe7af7d836822b1c9d337270f5d9a2d6ed502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ed5ac8c2a16146d070d8b8143fe7af7d836822b1c9d337270f5d9a2d6ed502->enter($__internal_19ed5ac8c2a16146d070d8b8143fe7af7d836822b1c9d337270f5d9a2d6ed502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c3e4e80797b7a9fcf047c6ba1e4ad68c8cb82e38f566930cc8ff80cf51fce53->leave($__internal_8c3e4e80797b7a9fcf047c6ba1e4ad68c8cb82e38f566930cc8ff80cf51fce53_prof);

        
        $__internal_19ed5ac8c2a16146d070d8b8143fe7af7d836822b1c9d337270f5d9a2d6ed502->leave($__internal_19ed5ac8c2a16146d070d8b8143fe7af7d836822b1c9d337270f5d9a2d6ed502_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e64d50e247cde3b32232e71d20986c86d4f8374e8fa99fbcdbf5e0699f361b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e64d50e247cde3b32232e71d20986c86d4f8374e8fa99fbcdbf5e0699f361b6->enter($__internal_2e64d50e247cde3b32232e71d20986c86d4f8374e8fa99fbcdbf5e0699f361b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d667351eda360497dedf9b8b6e2a114745b4d477a878b51b835f8b8c5ff508a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d667351eda360497dedf9b8b6e2a114745b4d477a878b51b835f8b8c5ff508a9->enter($__internal_d667351eda360497dedf9b8b6e2a114745b4d477a878b51b835f8b8c5ff508a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d667351eda360497dedf9b8b6e2a114745b4d477a878b51b835f8b8c5ff508a9->leave($__internal_d667351eda360497dedf9b8b6e2a114745b4d477a878b51b835f8b8c5ff508a9_prof);

        
        $__internal_2e64d50e247cde3b32232e71d20986c86d4f8374e8fa99fbcdbf5e0699f361b6->leave($__internal_2e64d50e247cde3b32232e71d20986c86d4f8374e8fa99fbcdbf5e0699f361b6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a5c8b3547220356380d624ff63e6dd6d14af596183e4963949f59416004fe3fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c8b3547220356380d624ff63e6dd6d14af596183e4963949f59416004fe3fa->enter($__internal_a5c8b3547220356380d624ff63e6dd6d14af596183e4963949f59416004fe3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f7c58f2e9769369fa5c0377e576290348173ab32d1147baf151a3a54bf33f7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c58f2e9769369fa5c0377e576290348173ab32d1147baf151a3a54bf33f7cd->enter($__internal_f7c58f2e9769369fa5c0377e576290348173ab32d1147baf151a3a54bf33f7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f7c58f2e9769369fa5c0377e576290348173ab32d1147baf151a3a54bf33f7cd->leave($__internal_f7c58f2e9769369fa5c0377e576290348173ab32d1147baf151a3a54bf33f7cd_prof);

        
        $__internal_a5c8b3547220356380d624ff63e6dd6d14af596183e4963949f59416004fe3fa->leave($__internal_a5c8b3547220356380d624ff63e6dd6d14af596183e4963949f59416004fe3fa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_839584738098ef6656f50e1643bfbb5b094a9a57c1a3344ee75c4dc473d16fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_839584738098ef6656f50e1643bfbb5b094a9a57c1a3344ee75c4dc473d16fca->enter($__internal_839584738098ef6656f50e1643bfbb5b094a9a57c1a3344ee75c4dc473d16fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c2312efef3220d98eb751b6848bcb276e9cd1411d3902014019d8446f24cbcb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2312efef3220d98eb751b6848bcb276e9cd1411d3902014019d8446f24cbcb9->enter($__internal_c2312efef3220d98eb751b6848bcb276e9cd1411d3902014019d8446f24cbcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c2312efef3220d98eb751b6848bcb276e9cd1411d3902014019d8446f24cbcb9->leave($__internal_c2312efef3220d98eb751b6848bcb276e9cd1411d3902014019d8446f24cbcb9_prof);

        
        $__internal_839584738098ef6656f50e1643bfbb5b094a9a57c1a3344ee75c4dc473d16fca->leave($__internal_839584738098ef6656f50e1643bfbb5b094a9a57c1a3344ee75c4dc473d16fca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
