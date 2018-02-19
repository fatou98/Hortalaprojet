<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ad859a1ac90e6cf1de1ecc26631a556382d446e4174d3929b177db9e4532a5f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_2bda366d3eaa78a4fb4f78bb875e9820022043d11b1402b6a3a1aa0cd17700df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bda366d3eaa78a4fb4f78bb875e9820022043d11b1402b6a3a1aa0cd17700df->enter($__internal_2bda366d3eaa78a4fb4f78bb875e9820022043d11b1402b6a3a1aa0cd17700df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_b96d99622a2dfddd2fb0cbd1b18cbd3d285872d4d2bfd96d72fbaeb57670223a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96d99622a2dfddd2fb0cbd1b18cbd3d285872d4d2bfd96d72fbaeb57670223a->enter($__internal_b96d99622a2dfddd2fb0cbd1b18cbd3d285872d4d2bfd96d72fbaeb57670223a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bda366d3eaa78a4fb4f78bb875e9820022043d11b1402b6a3a1aa0cd17700df->leave($__internal_2bda366d3eaa78a4fb4f78bb875e9820022043d11b1402b6a3a1aa0cd17700df_prof);

        
        $__internal_b96d99622a2dfddd2fb0cbd1b18cbd3d285872d4d2bfd96d72fbaeb57670223a->leave($__internal_b96d99622a2dfddd2fb0cbd1b18cbd3d285872d4d2bfd96d72fbaeb57670223a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22a01302cf8fc7848a8ed7c3dbb5c79ecd4d75d2834e800612e501ba1bcd8c7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a01302cf8fc7848a8ed7c3dbb5c79ecd4d75d2834e800612e501ba1bcd8c7b->enter($__internal_22a01302cf8fc7848a8ed7c3dbb5c79ecd4d75d2834e800612e501ba1bcd8c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_39dc7b278200796c74de070c3b02e7a140a1c8df2fe832bd40182bc64fbfc769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39dc7b278200796c74de070c3b02e7a140a1c8df2fe832bd40182bc64fbfc769->enter($__internal_39dc7b278200796c74de070c3b02e7a140a1c8df2fe832bd40182bc64fbfc769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_39dc7b278200796c74de070c3b02e7a140a1c8df2fe832bd40182bc64fbfc769->leave($__internal_39dc7b278200796c74de070c3b02e7a140a1c8df2fe832bd40182bc64fbfc769_prof);

        
        $__internal_22a01302cf8fc7848a8ed7c3dbb5c79ecd4d75d2834e800612e501ba1bcd8c7b->leave($__internal_22a01302cf8fc7848a8ed7c3dbb5c79ecd4d75d2834e800612e501ba1bcd8c7b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/hortala/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
