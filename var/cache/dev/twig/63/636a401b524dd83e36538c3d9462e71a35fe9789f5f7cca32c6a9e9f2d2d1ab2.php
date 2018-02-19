<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_b52044be9a1ffb2e276ef5545a3a9dfdec42574ba1b7d967fa531877ef3e2fc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_55518c657a206eda66539114d4bbe5ba2808f79234ebcfad17155a43987bbec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55518c657a206eda66539114d4bbe5ba2808f79234ebcfad17155a43987bbec6->enter($__internal_55518c657a206eda66539114d4bbe5ba2808f79234ebcfad17155a43987bbec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_97d14e07af1580d844297801c0b55c499d50fd9baf53ba7fd00c61d0d0d9eca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d14e07af1580d844297801c0b55c499d50fd9baf53ba7fd00c61d0d0d9eca4->enter($__internal_97d14e07af1580d844297801c0b55c499d50fd9baf53ba7fd00c61d0d0d9eca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55518c657a206eda66539114d4bbe5ba2808f79234ebcfad17155a43987bbec6->leave($__internal_55518c657a206eda66539114d4bbe5ba2808f79234ebcfad17155a43987bbec6_prof);

        
        $__internal_97d14e07af1580d844297801c0b55c499d50fd9baf53ba7fd00c61d0d0d9eca4->leave($__internal_97d14e07af1580d844297801c0b55c499d50fd9baf53ba7fd00c61d0d0d9eca4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_beeda35632c0c9f0291248f0e6404caa985314dae9fa0401408314e024af4aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beeda35632c0c9f0291248f0e6404caa985314dae9fa0401408314e024af4aae->enter($__internal_beeda35632c0c9f0291248f0e6404caa985314dae9fa0401408314e024af4aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c6fdd69ed56e28d6fefbc34bab272f33866f66913f4a3a1440366660f690bbb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fdd69ed56e28d6fefbc34bab272f33866f66913f4a3a1440366660f690bbb9->enter($__internal_c6fdd69ed56e28d6fefbc34bab272f33866f66913f4a3a1440366660f690bbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c6fdd69ed56e28d6fefbc34bab272f33866f66913f4a3a1440366660f690bbb9->leave($__internal_c6fdd69ed56e28d6fefbc34bab272f33866f66913f4a3a1440366660f690bbb9_prof);

        
        $__internal_beeda35632c0c9f0291248f0e6404caa985314dae9fa0401408314e024af4aae->leave($__internal_beeda35632c0c9f0291248f0e6404caa985314dae9fa0401408314e024af4aae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/hortala/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
