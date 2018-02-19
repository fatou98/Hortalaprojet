<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_21b8c52e7877915666fa7e806131d315b8c04e4bfdc36dc862b76b2184bcc1b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_478720e6e196fee5226cc22121f60933680f119977b610b1ecf1e9d35681c782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478720e6e196fee5226cc22121f60933680f119977b610b1ecf1e9d35681c782->enter($__internal_478720e6e196fee5226cc22121f60933680f119977b610b1ecf1e9d35681c782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_9508624faf37f832ca8d92a365b4780367c89e3ed31b14ef14f7c4420bf18d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9508624faf37f832ca8d92a365b4780367c89e3ed31b14ef14f7c4420bf18d8b->enter($__internal_9508624faf37f832ca8d92a365b4780367c89e3ed31b14ef14f7c4420bf18d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_478720e6e196fee5226cc22121f60933680f119977b610b1ecf1e9d35681c782->leave($__internal_478720e6e196fee5226cc22121f60933680f119977b610b1ecf1e9d35681c782_prof);

        
        $__internal_9508624faf37f832ca8d92a365b4780367c89e3ed31b14ef14f7c4420bf18d8b->leave($__internal_9508624faf37f832ca8d92a365b4780367c89e3ed31b14ef14f7c4420bf18d8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e2b71748fc2ce7526469e580cc3767c515d4de904086a1a1541a10025e85b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e2b71748fc2ce7526469e580cc3767c515d4de904086a1a1541a10025e85b16->enter($__internal_8e2b71748fc2ce7526469e580cc3767c515d4de904086a1a1541a10025e85b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9afeb93a5c9c302dbc2377e9f014829b37934c4e9fd5b9cc64b2c4e60c9bb9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afeb93a5c9c302dbc2377e9f014829b37934c4e9fd5b9cc64b2c4e60c9bb9ac->enter($__internal_9afeb93a5c9c302dbc2377e9f014829b37934c4e9fd5b9cc64b2c4e60c9bb9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9afeb93a5c9c302dbc2377e9f014829b37934c4e9fd5b9cc64b2c4e60c9bb9ac->leave($__internal_9afeb93a5c9c302dbc2377e9f014829b37934c4e9fd5b9cc64b2c4e60c9bb9ac_prof);

        
        $__internal_8e2b71748fc2ce7526469e580cc3767c515d4de904086a1a1541a10025e85b16->leave($__internal_8e2b71748fc2ce7526469e580cc3767c515d4de904086a1a1541a10025e85b16_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/hortala/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
