<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_9ad0ad0cf5d6c539f77941787defea635bcb119d414e6a60648dd36495a3e852 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_485db73e86dee965ff431a53c3aa66a70ec0875b6f7933b0f7789661e2c35e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485db73e86dee965ff431a53c3aa66a70ec0875b6f7933b0f7789661e2c35e20->enter($__internal_485db73e86dee965ff431a53c3aa66a70ec0875b6f7933b0f7789661e2c35e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_521b82584243f4b482816fca9f9ebca80a3c114fb1ca5406e10c846d24d53341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521b82584243f4b482816fca9f9ebca80a3c114fb1ca5406e10c846d24d53341->enter($__internal_521b82584243f4b482816fca9f9ebca80a3c114fb1ca5406e10c846d24d53341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_485db73e86dee965ff431a53c3aa66a70ec0875b6f7933b0f7789661e2c35e20->leave($__internal_485db73e86dee965ff431a53c3aa66a70ec0875b6f7933b0f7789661e2c35e20_prof);

        
        $__internal_521b82584243f4b482816fca9f9ebca80a3c114fb1ca5406e10c846d24d53341->leave($__internal_521b82584243f4b482816fca9f9ebca80a3c114fb1ca5406e10c846d24d53341_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a7abbbef81c392f92c821160b266c0f730659b62f5b709c7998e27f75ac1feb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a7abbbef81c392f92c821160b266c0f730659b62f5b709c7998e27f75ac1feb->enter($__internal_3a7abbbef81c392f92c821160b266c0f730659b62f5b709c7998e27f75ac1feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_07188d06ec65c671c1657fa4a2dea49ea1695f759a074fe0b7835f65688c702d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07188d06ec65c671c1657fa4a2dea49ea1695f759a074fe0b7835f65688c702d->enter($__internal_07188d06ec65c671c1657fa4a2dea49ea1695f759a074fe0b7835f65688c702d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_07188d06ec65c671c1657fa4a2dea49ea1695f759a074fe0b7835f65688c702d->leave($__internal_07188d06ec65c671c1657fa4a2dea49ea1695f759a074fe0b7835f65688c702d_prof);

        
        $__internal_3a7abbbef81c392f92c821160b266c0f730659b62f5b709c7998e27f75ac1feb->leave($__internal_3a7abbbef81c392f92c821160b266c0f730659b62f5b709c7998e27f75ac1feb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/hortala/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
