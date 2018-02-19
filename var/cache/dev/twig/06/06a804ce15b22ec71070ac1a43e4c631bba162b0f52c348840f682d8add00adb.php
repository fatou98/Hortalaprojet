<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_50904cc47d15a093cf908a64fbcb6c55acce7cb259f5fdd700a394ddaeb80522 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f154b9921796aede86cf8d808d3b32966c5f9c541b49be0fa00d8ef6783f465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f154b9921796aede86cf8d808d3b32966c5f9c541b49be0fa00d8ef6783f465->enter($__internal_0f154b9921796aede86cf8d808d3b32966c5f9c541b49be0fa00d8ef6783f465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_8e5c0ad61214e4ce0073670b1f81e2dc44571885e8769c385255aa75c95a0be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5c0ad61214e4ce0073670b1f81e2dc44571885e8769c385255aa75c95a0be2->enter($__internal_8e5c0ad61214e4ce0073670b1f81e2dc44571885e8769c385255aa75c95a0be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f154b9921796aede86cf8d808d3b32966c5f9c541b49be0fa00d8ef6783f465->leave($__internal_0f154b9921796aede86cf8d808d3b32966c5f9c541b49be0fa00d8ef6783f465_prof);

        
        $__internal_8e5c0ad61214e4ce0073670b1f81e2dc44571885e8769c385255aa75c95a0be2->leave($__internal_8e5c0ad61214e4ce0073670b1f81e2dc44571885e8769c385255aa75c95a0be2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7211bce9075fe1706e3f0c14ed4b077dcaea2f82b2788622db62357d6e8f4391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7211bce9075fe1706e3f0c14ed4b077dcaea2f82b2788622db62357d6e8f4391->enter($__internal_7211bce9075fe1706e3f0c14ed4b077dcaea2f82b2788622db62357d6e8f4391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8c8d83e9e67918383c7d826e8e17c092783a47b4b7be83d344ff02f35eadabab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8d83e9e67918383c7d826e8e17c092783a47b4b7be83d344ff02f35eadabab->enter($__internal_8c8d83e9e67918383c7d826e8e17c092783a47b4b7be83d344ff02f35eadabab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_8c8d83e9e67918383c7d826e8e17c092783a47b4b7be83d344ff02f35eadabab->leave($__internal_8c8d83e9e67918383c7d826e8e17c092783a47b4b7be83d344ff02f35eadabab_prof);

        
        $__internal_7211bce9075fe1706e3f0c14ed4b077dcaea2f82b2788622db62357d6e8f4391->leave($__internal_7211bce9075fe1706e3f0c14ed4b077dcaea2f82b2788622db62357d6e8f4391_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/hortala/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
