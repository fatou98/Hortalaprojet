<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d7c6312e26d73a3697325d60fe7bc8a1a0bbd8aed9aa7445a11e50591250cdce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b5e11f3f731a88d1a833bed68fe24bcc23dcb586b2e8f1fc4059a6a3a2172e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b5e11f3f731a88d1a833bed68fe24bcc23dcb586b2e8f1fc4059a6a3a2172e2->enter($__internal_3b5e11f3f731a88d1a833bed68fe24bcc23dcb586b2e8f1fc4059a6a3a2172e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_463100cb678ce2b7b4e06f482bc5935088d280f4d7447b4902ce9b94d600ef8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463100cb678ce2b7b4e06f482bc5935088d280f4d7447b4902ce9b94d600ef8c->enter($__internal_463100cb678ce2b7b4e06f482bc5935088d280f4d7447b4902ce9b94d600ef8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3b5e11f3f731a88d1a833bed68fe24bcc23dcb586b2e8f1fc4059a6a3a2172e2->leave($__internal_3b5e11f3f731a88d1a833bed68fe24bcc23dcb586b2e8f1fc4059a6a3a2172e2_prof);

        
        $__internal_463100cb678ce2b7b4e06f482bc5935088d280f4d7447b4902ce9b94d600ef8c->leave($__internal_463100cb678ce2b7b4e06f482bc5935088d280f4d7447b4902ce9b94d600ef8c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae55d6aa15b6d443fe0b2b48d603ffbe227df0d3cd1caff604d5b1a325acb41f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae55d6aa15b6d443fe0b2b48d603ffbe227df0d3cd1caff604d5b1a325acb41f->enter($__internal_ae55d6aa15b6d443fe0b2b48d603ffbe227df0d3cd1caff604d5b1a325acb41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f41c9937d660907a7d14b1ac5e63f68040fc64881ef6e11d69e4dbecc9e97c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f41c9937d660907a7d14b1ac5e63f68040fc64881ef6e11d69e4dbecc9e97c9->enter($__internal_1f41c9937d660907a7d14b1ac5e63f68040fc64881ef6e11d69e4dbecc9e97c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1f41c9937d660907a7d14b1ac5e63f68040fc64881ef6e11d69e4dbecc9e97c9->leave($__internal_1f41c9937d660907a7d14b1ac5e63f68040fc64881ef6e11d69e4dbecc9e97c9_prof);

        
        $__internal_ae55d6aa15b6d443fe0b2b48d603ffbe227df0d3cd1caff604d5b1a325acb41f->leave($__internal_ae55d6aa15b6d443fe0b2b48d603ffbe227df0d3cd1caff604d5b1a325acb41f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
