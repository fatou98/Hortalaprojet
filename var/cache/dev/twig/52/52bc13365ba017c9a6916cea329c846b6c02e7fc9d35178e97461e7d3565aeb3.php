<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fb432cb2a926f5c0bae4a820050455fd38bb4bf20a529781b70730ba90751b2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_088cea72e88ab2c46186ded26181771b93a040ed59bc513cb5f1bd468e12ae53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_088cea72e88ab2c46186ded26181771b93a040ed59bc513cb5f1bd468e12ae53->enter($__internal_088cea72e88ab2c46186ded26181771b93a040ed59bc513cb5f1bd468e12ae53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b04422079153b386a208bb102295fb088e347cde2a61756c21bb0baa460f0831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04422079153b386a208bb102295fb088e347cde2a61756c21bb0baa460f0831->enter($__internal_b04422079153b386a208bb102295fb088e347cde2a61756c21bb0baa460f0831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_088cea72e88ab2c46186ded26181771b93a040ed59bc513cb5f1bd468e12ae53->leave($__internal_088cea72e88ab2c46186ded26181771b93a040ed59bc513cb5f1bd468e12ae53_prof);

        
        $__internal_b04422079153b386a208bb102295fb088e347cde2a61756c21bb0baa460f0831->leave($__internal_b04422079153b386a208bb102295fb088e347cde2a61756c21bb0baa460f0831_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1bd5b2e9abd553f3b6aa4d363f2921db33315313dd92f5272d848c9b2fd0174b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bd5b2e9abd553f3b6aa4d363f2921db33315313dd92f5272d848c9b2fd0174b->enter($__internal_1bd5b2e9abd553f3b6aa4d363f2921db33315313dd92f5272d848c9b2fd0174b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f29f31c617743c54e9f33aa45cd61906735b661eeaa612cabb216d2b47b6e7ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29f31c617743c54e9f33aa45cd61906735b661eeaa612cabb216d2b47b6e7ac->enter($__internal_f29f31c617743c54e9f33aa45cd61906735b661eeaa612cabb216d2b47b6e7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f29f31c617743c54e9f33aa45cd61906735b661eeaa612cabb216d2b47b6e7ac->leave($__internal_f29f31c617743c54e9f33aa45cd61906735b661eeaa612cabb216d2b47b6e7ac_prof);

        
        $__internal_1bd5b2e9abd553f3b6aa4d363f2921db33315313dd92f5272d848c9b2fd0174b->leave($__internal_1bd5b2e9abd553f3b6aa4d363f2921db33315313dd92f5272d848c9b2fd0174b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e48f8fa5ce916ed83c04b4d9558c09a1dc10123e878bd35f700c2d80b0f6f0b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e48f8fa5ce916ed83c04b4d9558c09a1dc10123e878bd35f700c2d80b0f6f0b2->enter($__internal_e48f8fa5ce916ed83c04b4d9558c09a1dc10123e878bd35f700c2d80b0f6f0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5acbf51595cb9678e7ef3f356ec505282167c22466e87f6b6d18cbc5bbdfa711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acbf51595cb9678e7ef3f356ec505282167c22466e87f6b6d18cbc5bbdfa711->enter($__internal_5acbf51595cb9678e7ef3f356ec505282167c22466e87f6b6d18cbc5bbdfa711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5acbf51595cb9678e7ef3f356ec505282167c22466e87f6b6d18cbc5bbdfa711->leave($__internal_5acbf51595cb9678e7ef3f356ec505282167c22466e87f6b6d18cbc5bbdfa711_prof);

        
        $__internal_e48f8fa5ce916ed83c04b4d9558c09a1dc10123e878bd35f700c2d80b0f6f0b2->leave($__internal_e48f8fa5ce916ed83c04b4d9558c09a1dc10123e878bd35f700c2d80b0f6f0b2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4dcf3c87c2101844617c0a3f8916a1e681197a080677eba0e4f112e2c5e24e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4dcf3c87c2101844617c0a3f8916a1e681197a080677eba0e4f112e2c5e24e8->enter($__internal_d4dcf3c87c2101844617c0a3f8916a1e681197a080677eba0e4f112e2c5e24e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_89295a837c6a417504d323506f75e2fef2f4640752c0f77f4dae88a8606ee8c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89295a837c6a417504d323506f75e2fef2f4640752c0f77f4dae88a8606ee8c5->enter($__internal_89295a837c6a417504d323506f75e2fef2f4640752c0f77f4dae88a8606ee8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_89295a837c6a417504d323506f75e2fef2f4640752c0f77f4dae88a8606ee8c5->leave($__internal_89295a837c6a417504d323506f75e2fef2f4640752c0f77f4dae88a8606ee8c5_prof);

        
        $__internal_d4dcf3c87c2101844617c0a3f8916a1e681197a080677eba0e4f112e2c5e24e8->leave($__internal_d4dcf3c87c2101844617c0a3f8916a1e681197a080677eba0e4f112e2c5e24e8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/testhortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
