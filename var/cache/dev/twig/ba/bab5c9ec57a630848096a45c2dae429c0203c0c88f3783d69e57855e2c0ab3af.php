<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_677c3f2f9313e200db4b7d2cfccebe243c6daaad2009789dccbd3915ca97049d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_511f97e428ea8dee346e78d372b3b19cc665838f0325ef7bdad9b5230a82c9f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_511f97e428ea8dee346e78d372b3b19cc665838f0325ef7bdad9b5230a82c9f7->enter($__internal_511f97e428ea8dee346e78d372b3b19cc665838f0325ef7bdad9b5230a82c9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c0f41963126c336e95eddce7082caa55d6ab09a4e47e22aee5fd697fe64ac001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f41963126c336e95eddce7082caa55d6ab09a4e47e22aee5fd697fe64ac001->enter($__internal_c0f41963126c336e95eddce7082caa55d6ab09a4e47e22aee5fd697fe64ac001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_511f97e428ea8dee346e78d372b3b19cc665838f0325ef7bdad9b5230a82c9f7->leave($__internal_511f97e428ea8dee346e78d372b3b19cc665838f0325ef7bdad9b5230a82c9f7_prof);

        
        $__internal_c0f41963126c336e95eddce7082caa55d6ab09a4e47e22aee5fd697fe64ac001->leave($__internal_c0f41963126c336e95eddce7082caa55d6ab09a4e47e22aee5fd697fe64ac001_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d30436b90fa02db9444cff0624c6245c58d73d3d9551b7e28395c329c8caf7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d30436b90fa02db9444cff0624c6245c58d73d3d9551b7e28395c329c8caf7b->enter($__internal_3d30436b90fa02db9444cff0624c6245c58d73d3d9551b7e28395c329c8caf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7288ed77d863725c0967bef6b7f9a904bf309da967b1e7b79da7d8b492103b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7288ed77d863725c0967bef6b7f9a904bf309da967b1e7b79da7d8b492103b36->enter($__internal_7288ed77d863725c0967bef6b7f9a904bf309da967b1e7b79da7d8b492103b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7288ed77d863725c0967bef6b7f9a904bf309da967b1e7b79da7d8b492103b36->leave($__internal_7288ed77d863725c0967bef6b7f9a904bf309da967b1e7b79da7d8b492103b36_prof);

        
        $__internal_3d30436b90fa02db9444cff0624c6245c58d73d3d9551b7e28395c329c8caf7b->leave($__internal_3d30436b90fa02db9444cff0624c6245c58d73d3d9551b7e28395c329c8caf7b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2639afc07dd80d0be6b8211708d3412a72ee7a15ac24642339b183c96a343ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2639afc07dd80d0be6b8211708d3412a72ee7a15ac24642339b183c96a343ea4->enter($__internal_2639afc07dd80d0be6b8211708d3412a72ee7a15ac24642339b183c96a343ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c14f290d1d17bdfc87df88911458cb98be0ff3ea0596389e1aabf21e5565c1b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14f290d1d17bdfc87df88911458cb98be0ff3ea0596389e1aabf21e5565c1b5->enter($__internal_c14f290d1d17bdfc87df88911458cb98be0ff3ea0596389e1aabf21e5565c1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c14f290d1d17bdfc87df88911458cb98be0ff3ea0596389e1aabf21e5565c1b5->leave($__internal_c14f290d1d17bdfc87df88911458cb98be0ff3ea0596389e1aabf21e5565c1b5_prof);

        
        $__internal_2639afc07dd80d0be6b8211708d3412a72ee7a15ac24642339b183c96a343ea4->leave($__internal_2639afc07dd80d0be6b8211708d3412a72ee7a15ac24642339b183c96a343ea4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc0de83da611b3d5e62812f7433488e674fad74253f2c695b4e27652d60fc3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc0de83da611b3d5e62812f7433488e674fad74253f2c695b4e27652d60fc3e5->enter($__internal_fc0de83da611b3d5e62812f7433488e674fad74253f2c695b4e27652d60fc3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_af18b323ca3e47f15d0222fddf5d7bc38bac51b784b27aca4e96d1173323cf7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af18b323ca3e47f15d0222fddf5d7bc38bac51b784b27aca4e96d1173323cf7a->enter($__internal_af18b323ca3e47f15d0222fddf5d7bc38bac51b784b27aca4e96d1173323cf7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_af18b323ca3e47f15d0222fddf5d7bc38bac51b784b27aca4e96d1173323cf7a->leave($__internal_af18b323ca3e47f15d0222fddf5d7bc38bac51b784b27aca4e96d1173323cf7a_prof);

        
        $__internal_fc0de83da611b3d5e62812f7433488e674fad74253f2c695b4e27652d60fc3e5->leave($__internal_fc0de83da611b3d5e62812f7433488e674fad74253f2c695b4e27652d60fc3e5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/testhortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
