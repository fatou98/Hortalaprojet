<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_ac2a67f4a48ead9c957bb8092f614b83dfd5d39b3115ee9e3f522124e2c09a4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_6340db25b41bd496c9ccf2a913605091afef7101b73cef098455c074a1703ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6340db25b41bd496c9ccf2a913605091afef7101b73cef098455c074a1703ee8->enter($__internal_6340db25b41bd496c9ccf2a913605091afef7101b73cef098455c074a1703ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_01b6069c100d8e82513470792d50c02c26b5cad874d91edac9c0441ed1befccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b6069c100d8e82513470792d50c02c26b5cad874d91edac9c0441ed1befccd->enter($__internal_01b6069c100d8e82513470792d50c02c26b5cad874d91edac9c0441ed1befccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6340db25b41bd496c9ccf2a913605091afef7101b73cef098455c074a1703ee8->leave($__internal_6340db25b41bd496c9ccf2a913605091afef7101b73cef098455c074a1703ee8_prof);

        
        $__internal_01b6069c100d8e82513470792d50c02c26b5cad874d91edac9c0441ed1befccd->leave($__internal_01b6069c100d8e82513470792d50c02c26b5cad874d91edac9c0441ed1befccd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81389dce784408f058b5c9f2f532be7cae9f6a971b4aff97589f2a10112a7617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81389dce784408f058b5c9f2f532be7cae9f6a971b4aff97589f2a10112a7617->enter($__internal_81389dce784408f058b5c9f2f532be7cae9f6a971b4aff97589f2a10112a7617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_35951675ed446eff13e8ae6d8c30837b62fa4891f885a3dc7085ff9958bbcdae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35951675ed446eff13e8ae6d8c30837b62fa4891f885a3dc7085ff9958bbcdae->enter($__internal_35951675ed446eff13e8ae6d8c30837b62fa4891f885a3dc7085ff9958bbcdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_35951675ed446eff13e8ae6d8c30837b62fa4891f885a3dc7085ff9958bbcdae->leave($__internal_35951675ed446eff13e8ae6d8c30837b62fa4891f885a3dc7085ff9958bbcdae_prof);

        
        $__internal_81389dce784408f058b5c9f2f532be7cae9f6a971b4aff97589f2a10112a7617->leave($__internal_81389dce784408f058b5c9f2f532be7cae9f6a971b4aff97589f2a10112a7617_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/hortala/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
