<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_78cc96ec4064f86409e92ac4f8f130cac3b97b0291d5fa7c1636c3549a4bc64a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_653fcf02c2e1ecc7d614a5ddf1d044439fd058c64946b65dcd156c39a69aee99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_653fcf02c2e1ecc7d614a5ddf1d044439fd058c64946b65dcd156c39a69aee99->enter($__internal_653fcf02c2e1ecc7d614a5ddf1d044439fd058c64946b65dcd156c39a69aee99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_7ab6d3a9a968271cf960894d3cfcd4e3dfc71006bd4abd293d0b42ddb3f1ef03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab6d3a9a968271cf960894d3cfcd4e3dfc71006bd4abd293d0b42ddb3f1ef03->enter($__internal_7ab6d3a9a968271cf960894d3cfcd4e3dfc71006bd4abd293d0b42ddb3f1ef03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_653fcf02c2e1ecc7d614a5ddf1d044439fd058c64946b65dcd156c39a69aee99->leave($__internal_653fcf02c2e1ecc7d614a5ddf1d044439fd058c64946b65dcd156c39a69aee99_prof);

        
        $__internal_7ab6d3a9a968271cf960894d3cfcd4e3dfc71006bd4abd293d0b42ddb3f1ef03->leave($__internal_7ab6d3a9a968271cf960894d3cfcd4e3dfc71006bd4abd293d0b42ddb3f1ef03_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e9c503de35f92177c4fc7fdfb5330a51266b38944388e62ab84078f72d5e425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9c503de35f92177c4fc7fdfb5330a51266b38944388e62ab84078f72d5e425->enter($__internal_6e9c503de35f92177c4fc7fdfb5330a51266b38944388e62ab84078f72d5e425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d32f4d475b24e8b70796996b5f1ca017f1d684a82672a93108b885fb8acd93ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32f4d475b24e8b70796996b5f1ca017f1d684a82672a93108b885fb8acd93ca->enter($__internal_d32f4d475b24e8b70796996b5f1ca017f1d684a82672a93108b885fb8acd93ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d32f4d475b24e8b70796996b5f1ca017f1d684a82672a93108b885fb8acd93ca->leave($__internal_d32f4d475b24e8b70796996b5f1ca017f1d684a82672a93108b885fb8acd93ca_prof);

        
        $__internal_6e9c503de35f92177c4fc7fdfb5330a51266b38944388e62ab84078f72d5e425->leave($__internal_6e9c503de35f92177c4fc7fdfb5330a51266b38944388e62ab84078f72d5e425_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/hortala/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
