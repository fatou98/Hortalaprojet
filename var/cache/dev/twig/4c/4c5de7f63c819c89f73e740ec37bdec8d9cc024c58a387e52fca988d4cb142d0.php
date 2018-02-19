<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8098579827d964258bd999a92c15a96055d26e01c4046125c114bef31f9c58a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_c38c66e8770c3550fd89ebe04c7c14a4810ab830d1b4229f346d23e18d003394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38c66e8770c3550fd89ebe04c7c14a4810ab830d1b4229f346d23e18d003394->enter($__internal_c38c66e8770c3550fd89ebe04c7c14a4810ab830d1b4229f346d23e18d003394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_b60c1e5c9d2b59cb73d0c961d0b41595371b9e7bcb9f5c64ebf2666f09f4e334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60c1e5c9d2b59cb73d0c961d0b41595371b9e7bcb9f5c64ebf2666f09f4e334->enter($__internal_b60c1e5c9d2b59cb73d0c961d0b41595371b9e7bcb9f5c64ebf2666f09f4e334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c38c66e8770c3550fd89ebe04c7c14a4810ab830d1b4229f346d23e18d003394->leave($__internal_c38c66e8770c3550fd89ebe04c7c14a4810ab830d1b4229f346d23e18d003394_prof);

        
        $__internal_b60c1e5c9d2b59cb73d0c961d0b41595371b9e7bcb9f5c64ebf2666f09f4e334->leave($__internal_b60c1e5c9d2b59cb73d0c961d0b41595371b9e7bcb9f5c64ebf2666f09f4e334_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d3c9211790ba0d3df1da7e43acd2e9cee89a98572f6b7db7e2acb792698c3d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d3c9211790ba0d3df1da7e43acd2e9cee89a98572f6b7db7e2acb792698c3d0->enter($__internal_0d3c9211790ba0d3df1da7e43acd2e9cee89a98572f6b7db7e2acb792698c3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_32aeddac68fc59d1e8d7ca31428292c1388c79d003e541b91982efc90a541d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32aeddac68fc59d1e8d7ca31428292c1388c79d003e541b91982efc90a541d0f->enter($__internal_32aeddac68fc59d1e8d7ca31428292c1388c79d003e541b91982efc90a541d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_32aeddac68fc59d1e8d7ca31428292c1388c79d003e541b91982efc90a541d0f->leave($__internal_32aeddac68fc59d1e8d7ca31428292c1388c79d003e541b91982efc90a541d0f_prof);

        
        $__internal_0d3c9211790ba0d3df1da7e43acd2e9cee89a98572f6b7db7e2acb792698c3d0->leave($__internal_0d3c9211790ba0d3df1da7e43acd2e9cee89a98572f6b7db7e2acb792698c3d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/hortala/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
