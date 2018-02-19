<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_2d6d5cf424a23c6a3e2f3efaafe40ef4820091c961049ba4b2be544b0ef2fd21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_63642bac0926be603fe25e6447bdd174fa404959df3ab4322068b4dd467a02a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63642bac0926be603fe25e6447bdd174fa404959df3ab4322068b4dd467a02a3->enter($__internal_63642bac0926be603fe25e6447bdd174fa404959df3ab4322068b4dd467a02a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_72eae8a0f9c81155359f014e8449ae16b434a6080611960956028b57e4410e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72eae8a0f9c81155359f014e8449ae16b434a6080611960956028b57e4410e62->enter($__internal_72eae8a0f9c81155359f014e8449ae16b434a6080611960956028b57e4410e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63642bac0926be603fe25e6447bdd174fa404959df3ab4322068b4dd467a02a3->leave($__internal_63642bac0926be603fe25e6447bdd174fa404959df3ab4322068b4dd467a02a3_prof);

        
        $__internal_72eae8a0f9c81155359f014e8449ae16b434a6080611960956028b57e4410e62->leave($__internal_72eae8a0f9c81155359f014e8449ae16b434a6080611960956028b57e4410e62_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e23de1981b50bb61caf10979ea6f8171c19001622e9795c77b6e06e39bcd7a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e23de1981b50bb61caf10979ea6f8171c19001622e9795c77b6e06e39bcd7a51->enter($__internal_e23de1981b50bb61caf10979ea6f8171c19001622e9795c77b6e06e39bcd7a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eebc6d67cdb0d91de8feaba34f619877afd6da58c3919393e7d50ac4d292cce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eebc6d67cdb0d91de8feaba34f619877afd6da58c3919393e7d50ac4d292cce1->enter($__internal_eebc6d67cdb0d91de8feaba34f619877afd6da58c3919393e7d50ac4d292cce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_eebc6d67cdb0d91de8feaba34f619877afd6da58c3919393e7d50ac4d292cce1->leave($__internal_eebc6d67cdb0d91de8feaba34f619877afd6da58c3919393e7d50ac4d292cce1_prof);

        
        $__internal_e23de1981b50bb61caf10979ea6f8171c19001622e9795c77b6e06e39bcd7a51->leave($__internal_e23de1981b50bb61caf10979ea6f8171c19001622e9795c77b6e06e39bcd7a51_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/hortala/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
