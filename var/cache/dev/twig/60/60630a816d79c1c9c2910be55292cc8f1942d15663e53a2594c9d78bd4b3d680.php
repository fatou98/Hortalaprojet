<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_8fb0a95e2d5c765dd83f0e7bd9221b26b5d3d1500864e4581b4c2e6c39eab5b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50a3d20c8222f90bf4fdaaa6ed64c230f010a51470cd518a506aa174f2268562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50a3d20c8222f90bf4fdaaa6ed64c230f010a51470cd518a506aa174f2268562->enter($__internal_50a3d20c8222f90bf4fdaaa6ed64c230f010a51470cd518a506aa174f2268562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_4c8dd9179aafe5cc23bbb264f0d3ffe318441da19df9126d474aa7630e529819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8dd9179aafe5cc23bbb264f0d3ffe318441da19df9126d474aa7630e529819->enter($__internal_4c8dd9179aafe5cc23bbb264f0d3ffe318441da19df9126d474aa7630e529819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50a3d20c8222f90bf4fdaaa6ed64c230f010a51470cd518a506aa174f2268562->leave($__internal_50a3d20c8222f90bf4fdaaa6ed64c230f010a51470cd518a506aa174f2268562_prof);

        
        $__internal_4c8dd9179aafe5cc23bbb264f0d3ffe318441da19df9126d474aa7630e529819->leave($__internal_4c8dd9179aafe5cc23bbb264f0d3ffe318441da19df9126d474aa7630e529819_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_912cc2daf79db2fd2302c96e87df27cd3fb632c995053c6fbe23d0fe9a532025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_912cc2daf79db2fd2302c96e87df27cd3fb632c995053c6fbe23d0fe9a532025->enter($__internal_912cc2daf79db2fd2302c96e87df27cd3fb632c995053c6fbe23d0fe9a532025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_77520b362dcad23e32e2171d3781dadd6aab8f4dea6a4e8e5cc6bbe2a0f4e3f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77520b362dcad23e32e2171d3781dadd6aab8f4dea6a4e8e5cc6bbe2a0f4e3f0->enter($__internal_77520b362dcad23e32e2171d3781dadd6aab8f4dea6a4e8e5cc6bbe2a0f4e3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_77520b362dcad23e32e2171d3781dadd6aab8f4dea6a4e8e5cc6bbe2a0f4e3f0->leave($__internal_77520b362dcad23e32e2171d3781dadd6aab8f4dea6a4e8e5cc6bbe2a0f4e3f0_prof);

        
        $__internal_912cc2daf79db2fd2302c96e87df27cd3fb632c995053c6fbe23d0fe9a532025->leave($__internal_912cc2daf79db2fd2302c96e87df27cd3fb632c995053c6fbe23d0fe9a532025_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
