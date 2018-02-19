<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_8f802c4f1751c7d93652b29f19d09169c01d21022a3bfd6fa7bde001d5c8b0f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_1f20a9f27d5b325e233bf3879171cf57a45de1b3bdcc79a00fb101b1573b2288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f20a9f27d5b325e233bf3879171cf57a45de1b3bdcc79a00fb101b1573b2288->enter($__internal_1f20a9f27d5b325e233bf3879171cf57a45de1b3bdcc79a00fb101b1573b2288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_1c69f6a94af074c423d645aacbd462528ea9e06b612c37ce397e93b4283fff83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c69f6a94af074c423d645aacbd462528ea9e06b612c37ce397e93b4283fff83->enter($__internal_1c69f6a94af074c423d645aacbd462528ea9e06b612c37ce397e93b4283fff83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f20a9f27d5b325e233bf3879171cf57a45de1b3bdcc79a00fb101b1573b2288->leave($__internal_1f20a9f27d5b325e233bf3879171cf57a45de1b3bdcc79a00fb101b1573b2288_prof);

        
        $__internal_1c69f6a94af074c423d645aacbd462528ea9e06b612c37ce397e93b4283fff83->leave($__internal_1c69f6a94af074c423d645aacbd462528ea9e06b612c37ce397e93b4283fff83_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60dd82e6cd50d0bebc233f5f4beb7349f6451ac805097e2379e950663c4f1918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60dd82e6cd50d0bebc233f5f4beb7349f6451ac805097e2379e950663c4f1918->enter($__internal_60dd82e6cd50d0bebc233f5f4beb7349f6451ac805097e2379e950663c4f1918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9ee69e87783142a869a60cd32c5345b60c810ec41a2861b1c85c0feb632263ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee69e87783142a869a60cd32c5345b60c810ec41a2861b1c85c0feb632263ca->enter($__internal_9ee69e87783142a869a60cd32c5345b60c810ec41a2861b1c85c0feb632263ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_9ee69e87783142a869a60cd32c5345b60c810ec41a2861b1c85c0feb632263ca->leave($__internal_9ee69e87783142a869a60cd32c5345b60c810ec41a2861b1c85c0feb632263ca_prof);

        
        $__internal_60dd82e6cd50d0bebc233f5f4beb7349f6451ac805097e2379e950663c4f1918->leave($__internal_60dd82e6cd50d0bebc233f5f4beb7349f6451ac805097e2379e950663c4f1918_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/hortala/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
