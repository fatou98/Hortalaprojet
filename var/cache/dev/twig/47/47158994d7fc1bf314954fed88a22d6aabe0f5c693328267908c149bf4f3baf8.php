<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a011f3aaf1f668a2fabb5c32ecf0c706f585c0c34488ba3bcd18502bd1d4615e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_14c0382604aac8dd517446488cf6db1fd062c2c1ccb21097ea0bf7aa6af10c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c0382604aac8dd517446488cf6db1fd062c2c1ccb21097ea0bf7aa6af10c82->enter($__internal_14c0382604aac8dd517446488cf6db1fd062c2c1ccb21097ea0bf7aa6af10c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_5da9ace7d5b9f0c02630617a11df1dfc99543cc691284cb0af227329bc65f8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da9ace7d5b9f0c02630617a11df1dfc99543cc691284cb0af227329bc65f8b8->enter($__internal_5da9ace7d5b9f0c02630617a11df1dfc99543cc691284cb0af227329bc65f8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14c0382604aac8dd517446488cf6db1fd062c2c1ccb21097ea0bf7aa6af10c82->leave($__internal_14c0382604aac8dd517446488cf6db1fd062c2c1ccb21097ea0bf7aa6af10c82_prof);

        
        $__internal_5da9ace7d5b9f0c02630617a11df1dfc99543cc691284cb0af227329bc65f8b8->leave($__internal_5da9ace7d5b9f0c02630617a11df1dfc99543cc691284cb0af227329bc65f8b8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20093aadc1262aa870c3ddb3ac9f038dab6470e2f6595a328653f2829a8a6324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20093aadc1262aa870c3ddb3ac9f038dab6470e2f6595a328653f2829a8a6324->enter($__internal_20093aadc1262aa870c3ddb3ac9f038dab6470e2f6595a328653f2829a8a6324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_18d0b021e456996ea12756d317b9fe9711007bca61101fe0e86c5a95d8931988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d0b021e456996ea12756d317b9fe9711007bca61101fe0e86c5a95d8931988->enter($__internal_18d0b021e456996ea12756d317b9fe9711007bca61101fe0e86c5a95d8931988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_18d0b021e456996ea12756d317b9fe9711007bca61101fe0e86c5a95d8931988->leave($__internal_18d0b021e456996ea12756d317b9fe9711007bca61101fe0e86c5a95d8931988_prof);

        
        $__internal_20093aadc1262aa870c3ddb3ac9f038dab6470e2f6595a328653f2829a8a6324->leave($__internal_20093aadc1262aa870c3ddb3ac9f038dab6470e2f6595a328653f2829a8a6324_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/hortala/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
