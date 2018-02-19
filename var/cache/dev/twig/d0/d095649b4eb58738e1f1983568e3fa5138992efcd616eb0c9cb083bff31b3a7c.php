<?php

/* HTLImmobilierBundle:Front:search_bien.html.twig */
class __TwigTemplate_c28396fe9e49f444397597dd7feb2c6ea1f7fd0757a79010450b983f032757e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "HTLImmobilierBundle:Front:search_bien.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'inscription' => array($this, 'block_inscription'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_993ecf652aabb366f4133e530f3ebfc297f91e886410f9846a2913ec550cb64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993ecf652aabb366f4133e530f3ebfc297f91e886410f9846a2913ec550cb64b->enter($__internal_993ecf652aabb366f4133e530f3ebfc297f91e886410f9846a2913ec550cb64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:search_bien.html.twig"));

        $__internal_846c5becaaadc5811a27c219687079684bb9963f4ca3b75000b986925488b50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846c5becaaadc5811a27c219687079684bb9963f4ca3b75000b986925488b50f->enter($__internal_846c5becaaadc5811a27c219687079684bb9963f4ca3b75000b986925488b50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:search_bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_993ecf652aabb366f4133e530f3ebfc297f91e886410f9846a2913ec550cb64b->leave($__internal_993ecf652aabb366f4133e530f3ebfc297f91e886410f9846a2913ec550cb64b_prof);

        
        $__internal_846c5becaaadc5811a27c219687079684bb9963f4ca3b75000b986925488b50f->leave($__internal_846c5becaaadc5811a27c219687079684bb9963f4ca3b75000b986925488b50f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6bf17d16879defd1154487264c973df41c67217963f20632fcf6ea34ed87307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6bf17d16879defd1154487264c973df41c67217963f20632fcf6ea34ed87307->enter($__internal_c6bf17d16879defd1154487264c973df41c67217963f20632fcf6ea34ed87307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_015f2b810376920125f5e1c5c053e30f7f4889a6b391b9c38cb7add105199520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015f2b810376920125f5e1c5c053e30f7f4889a6b391b9c38cb7add105199520->enter($__internal_015f2b810376920125f5e1c5c053e30f7f4889a6b391b9c38cb7add105199520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "HTLImmobilierBundle:Front:searchBien";
        
        $__internal_015f2b810376920125f5e1c5c053e30f7f4889a6b391b9c38cb7add105199520->leave($__internal_015f2b810376920125f5e1c5c053e30f7f4889a6b391b9c38cb7add105199520_prof);

        
        $__internal_c6bf17d16879defd1154487264c973df41c67217963f20632fcf6ea34ed87307->leave($__internal_c6bf17d16879defd1154487264c973df41c67217963f20632fcf6ea34ed87307_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e03ce811dc42e1310b29622fef9a7603db1fd7972d67036c59d3eba99609645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e03ce811dc42e1310b29622fef9a7603db1fd7972d67036c59d3eba99609645->enter($__internal_8e03ce811dc42e1310b29622fef9a7603db1fd7972d67036c59d3eba99609645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67e5d5fbc115c7866888c3751d1930e90b06f88b56a7bab64e261f580d1cce8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e5d5fbc115c7866888c3751d1930e90b06f88b56a7bab64e261f580d1cce8a->enter($__internal_67e5d5fbc115c7866888c3751d1930e90b06f88b56a7bab64e261f580d1cce8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Front:searchBien page</h1>
";
        // line 7
        $this->displayBlock('inscription', $context, $blocks);
        
        $__internal_67e5d5fbc115c7866888c3751d1930e90b06f88b56a7bab64e261f580d1cce8a->leave($__internal_67e5d5fbc115c7866888c3751d1930e90b06f88b56a7bab64e261f580d1cce8a_prof);

        
        $__internal_8e03ce811dc42e1310b29622fef9a7603db1fd7972d67036c59d3eba99609645->leave($__internal_8e03ce811dc42e1310b29622fef9a7603db1fd7972d67036c59d3eba99609645_prof);

    }

    public function block_inscription($context, array $blocks = array())
    {
        $__internal_6d5b9e00cf377f52a8c922016f13d988c8ccff6bccd9c6d11356d09b8c00ff1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5b9e00cf377f52a8c922016f13d988c8ccff6bccd9c6d11356d09b8c00ff1f->enter($__internal_6d5b9e00cf377f52a8c922016f13d988c8ccff6bccd9c6d11356d09b8c00ff1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inscription"));

        $__internal_0cf863a89945746afc23147d4bb3350f96813210b946b3628d3e66e09958fa7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf863a89945746afc23147d4bb3350f96813210b946b3628d3e66e09958fa7c->enter($__internal_0cf863a89945746afc23147d4bb3350f96813210b946b3628d3e66e09958fa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inscription"));

        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_0cf863a89945746afc23147d4bb3350f96813210b946b3628d3e66e09958fa7c->leave($__internal_0cf863a89945746afc23147d4bb3350f96813210b946b3628d3e66e09958fa7c_prof);

        
        $__internal_6d5b9e00cf377f52a8c922016f13d988c8ccff6bccd9c6d11356d09b8c00ff1f->leave($__internal_6d5b9e00cf377f52a8c922016f13d988c8ccff6bccd9c6d11356d09b8c00ff1f_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:search_bien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 8,  72 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block title %}HTLImmobilierBundle:Front:searchBien{% endblock %}

{% block body %}
<h1>Welcome to the Front:searchBien page</h1>
{% block inscription %}
{{form(form)}}
{% endblock %}
{% endblock %}
", "HTLImmobilierBundle:Front:search_bien.html.twig", "/var/www/html/hortala/src/HTL/ImmobilierBundle/Resources/views/Front/search_bien.html.twig");
    }
}
