<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_fb432cb2a926f5c0bae4a820050455fd38bb4bf20a529781b70730ba90751b2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_d6648cd56ff6f47a24329d427fb963522918fbf3ce3e2963666388ab00cf361f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6648cd56ff6f47a24329d427fb963522918fbf3ce3e2963666388ab00cf361f->enter($__internal_d6648cd56ff6f47a24329d427fb963522918fbf3ce3e2963666388ab00cf361f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_a57d16227c9133fec0cec2bc2fbfeeaeee6dfaca777ea8ee8db9153efe872ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57d16227c9133fec0cec2bc2fbfeeaeee6dfaca777ea8ee8db9153efe872ba3->enter($__internal_a57d16227c9133fec0cec2bc2fbfeeaeee6dfaca777ea8ee8db9153efe872ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6648cd56ff6f47a24329d427fb963522918fbf3ce3e2963666388ab00cf361f->leave($__internal_d6648cd56ff6f47a24329d427fb963522918fbf3ce3e2963666388ab00cf361f_prof);

        
        $__internal_a57d16227c9133fec0cec2bc2fbfeeaeee6dfaca777ea8ee8db9153efe872ba3->leave($__internal_a57d16227c9133fec0cec2bc2fbfeeaeee6dfaca777ea8ee8db9153efe872ba3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6ce931e9daa94b5e14c2cdc73b85ad1f6bcef60fb05f41fcec3d6f3ec68fc47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ce931e9daa94b5e14c2cdc73b85ad1f6bcef60fb05f41fcec3d6f3ec68fc47->enter($__internal_d6ce931e9daa94b5e14c2cdc73b85ad1f6bcef60fb05f41fcec3d6f3ec68fc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a9eb7a91aeb85862aaaa6037edf69cf751a5ce2f1597f8a4d3fb711e3410ffbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9eb7a91aeb85862aaaa6037edf69cf751a5ce2f1597f8a4d3fb711e3410ffbc->enter($__internal_a9eb7a91aeb85862aaaa6037edf69cf751a5ce2f1597f8a4d3fb711e3410ffbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a9eb7a91aeb85862aaaa6037edf69cf751a5ce2f1597f8a4d3fb711e3410ffbc->leave($__internal_a9eb7a91aeb85862aaaa6037edf69cf751a5ce2f1597f8a4d3fb711e3410ffbc_prof);

        
        $__internal_d6ce931e9daa94b5e14c2cdc73b85ad1f6bcef60fb05f41fcec3d6f3ec68fc47->leave($__internal_d6ce931e9daa94b5e14c2cdc73b85ad1f6bcef60fb05f41fcec3d6f3ec68fc47_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65ad2983cbaabb23b2f72c63cecfd664034d091ceeedbad0108ee9cc0407ed0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ad2983cbaabb23b2f72c63cecfd664034d091ceeedbad0108ee9cc0407ed0e->enter($__internal_65ad2983cbaabb23b2f72c63cecfd664034d091ceeedbad0108ee9cc0407ed0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6bff749bff4a66bf5a93efb49bd98266ae546c7421877fea84d70bc04a7c6ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bff749bff4a66bf5a93efb49bd98266ae546c7421877fea84d70bc04a7c6ca5->enter($__internal_6bff749bff4a66bf5a93efb49bd98266ae546c7421877fea84d70bc04a7c6ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6bff749bff4a66bf5a93efb49bd98266ae546c7421877fea84d70bc04a7c6ca5->leave($__internal_6bff749bff4a66bf5a93efb49bd98266ae546c7421877fea84d70bc04a7c6ca5_prof);

        
        $__internal_65ad2983cbaabb23b2f72c63cecfd664034d091ceeedbad0108ee9cc0407ed0e->leave($__internal_65ad2983cbaabb23b2f72c63cecfd664034d091ceeedbad0108ee9cc0407ed0e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a54e87095e7f747d11194f419066720c6e539c7c6449d0a0c5bedb98b85008c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54e87095e7f747d11194f419066720c6e539c7c6449d0a0c5bedb98b85008c6->enter($__internal_a54e87095e7f747d11194f419066720c6e539c7c6449d0a0c5bedb98b85008c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3827d42d982a1ea5c37ef8f0677c0512e00e18da81603593ff859f75c59abfda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3827d42d982a1ea5c37ef8f0677c0512e00e18da81603593ff859f75c59abfda->enter($__internal_3827d42d982a1ea5c37ef8f0677c0512e00e18da81603593ff859f75c59abfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3827d42d982a1ea5c37ef8f0677c0512e00e18da81603593ff859f75c59abfda->leave($__internal_3827d42d982a1ea5c37ef8f0677c0512e00e18da81603593ff859f75c59abfda_prof);

        
        $__internal_a54e87095e7f747d11194f419066720c6e539c7c6449d0a0c5bedb98b85008c6->leave($__internal_a54e87095e7f747d11194f419066720c6e539c7c6449d0a0c5bedb98b85008c6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
