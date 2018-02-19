<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c98acd3c6aff3216c30a74a181b1e17b86cd0c774e1c533810b204e11e72db5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_19451508cc70e106de8293fa4a5cf76d1ebe44572141d0cd40fac45dc335829e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19451508cc70e106de8293fa4a5cf76d1ebe44572141d0cd40fac45dc335829e->enter($__internal_19451508cc70e106de8293fa4a5cf76d1ebe44572141d0cd40fac45dc335829e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_6a6962073798e0f6cf09049d502f0975e4226e13d4449c109a3d7163ff6772f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6962073798e0f6cf09049d502f0975e4226e13d4449c109a3d7163ff6772f1->enter($__internal_6a6962073798e0f6cf09049d502f0975e4226e13d4449c109a3d7163ff6772f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19451508cc70e106de8293fa4a5cf76d1ebe44572141d0cd40fac45dc335829e->leave($__internal_19451508cc70e106de8293fa4a5cf76d1ebe44572141d0cd40fac45dc335829e_prof);

        
        $__internal_6a6962073798e0f6cf09049d502f0975e4226e13d4449c109a3d7163ff6772f1->leave($__internal_6a6962073798e0f6cf09049d502f0975e4226e13d4449c109a3d7163ff6772f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9045f483f7bc2f64f983d199707b05ee41746362c6dc84df71102990225cae73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9045f483f7bc2f64f983d199707b05ee41746362c6dc84df71102990225cae73->enter($__internal_9045f483f7bc2f64f983d199707b05ee41746362c6dc84df71102990225cae73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3dd97659abe69d1a5bd045fefd15f01003400ab3a4047c269bae31b95c760186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd97659abe69d1a5bd045fefd15f01003400ab3a4047c269bae31b95c760186->enter($__internal_3dd97659abe69d1a5bd045fefd15f01003400ab3a4047c269bae31b95c760186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_3dd97659abe69d1a5bd045fefd15f01003400ab3a4047c269bae31b95c760186->leave($__internal_3dd97659abe69d1a5bd045fefd15f01003400ab3a4047c269bae31b95c760186_prof);

        
        $__internal_9045f483f7bc2f64f983d199707b05ee41746362c6dc84df71102990225cae73->leave($__internal_9045f483f7bc2f64f983d199707b05ee41746362c6dc84df71102990225cae73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/hortala/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
