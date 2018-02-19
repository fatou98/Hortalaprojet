<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_f716af3f0ca2d3ccc61fb9f4f3694711dddc5988af07604d0e51450861c22aa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4112b242dcd74a4a23065aae01c1bd7eb6a39e4b150a8c4afeeb65ae39da992d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4112b242dcd74a4a23065aae01c1bd7eb6a39e4b150a8c4afeeb65ae39da992d->enter($__internal_4112b242dcd74a4a23065aae01c1bd7eb6a39e4b150a8c4afeeb65ae39da992d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_44ac6a530151c5fd22b8e8d5e897a7b451cc80cff74e22ecde69a973266439be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ac6a530151c5fd22b8e8d5e897a7b451cc80cff74e22ecde69a973266439be->enter($__internal_44ac6a530151c5fd22b8e8d5e897a7b451cc80cff74e22ecde69a973266439be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_4112b242dcd74a4a23065aae01c1bd7eb6a39e4b150a8c4afeeb65ae39da992d->leave($__internal_4112b242dcd74a4a23065aae01c1bd7eb6a39e4b150a8c4afeeb65ae39da992d_prof);

        
        $__internal_44ac6a530151c5fd22b8e8d5e897a7b451cc80cff74e22ecde69a973266439be->leave($__internal_44ac6a530151c5fd22b8e8d5e897a7b451cc80cff74e22ecde69a973266439be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/hortala/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
