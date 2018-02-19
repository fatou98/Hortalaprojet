<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_00232e4fc0185074f9c578c85eddda0af12b8e852c4c441bab897d4d6670148a extends Twig_Template
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
        $__internal_903d318072a1b17ec549cd2c4bdd25f6b4de5c2245336d30c28cbd4a71cf1a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903d318072a1b17ec549cd2c4bdd25f6b4de5c2245336d30c28cbd4a71cf1a33->enter($__internal_903d318072a1b17ec549cd2c4bdd25f6b4de5c2245336d30c28cbd4a71cf1a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_0c124bf1491a77ba2a66961b113507a1b66258ed433389bd3f683a130870c3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c124bf1491a77ba2a66961b113507a1b66258ed433389bd3f683a130870c3e6->enter($__internal_0c124bf1491a77ba2a66961b113507a1b66258ed433389bd3f683a130870c3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_903d318072a1b17ec549cd2c4bdd25f6b4de5c2245336d30c28cbd4a71cf1a33->leave($__internal_903d318072a1b17ec549cd2c4bdd25f6b4de5c2245336d30c28cbd4a71cf1a33_prof);

        
        $__internal_0c124bf1491a77ba2a66961b113507a1b66258ed433389bd3f683a130870c3e6->leave($__internal_0c124bf1491a77ba2a66961b113507a1b66258ed433389bd3f683a130870c3e6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/html/hortala/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
