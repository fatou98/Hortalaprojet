<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_ffda73bd874444f993cf02cc5945b564ba8d7671aa16adba1cbe50e54e91f60b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_d180b4dcd0c49c320be2ec90006ec783f7f50a7b79fde6e93e20a8f0586bad57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d180b4dcd0c49c320be2ec90006ec783f7f50a7b79fde6e93e20a8f0586bad57->enter($__internal_d180b4dcd0c49c320be2ec90006ec783f7f50a7b79fde6e93e20a8f0586bad57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_dc00166577899f2234d029e16ffcc77c3940c7d5101b63357d1024b54f39ef13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc00166577899f2234d029e16ffcc77c3940c7d5101b63357d1024b54f39ef13->enter($__internal_dc00166577899f2234d029e16ffcc77c3940c7d5101b63357d1024b54f39ef13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d180b4dcd0c49c320be2ec90006ec783f7f50a7b79fde6e93e20a8f0586bad57->leave($__internal_d180b4dcd0c49c320be2ec90006ec783f7f50a7b79fde6e93e20a8f0586bad57_prof);

        
        $__internal_dc00166577899f2234d029e16ffcc77c3940c7d5101b63357d1024b54f39ef13->leave($__internal_dc00166577899f2234d029e16ffcc77c3940c7d5101b63357d1024b54f39ef13_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4df997df1489fda1e84e988c91f71f071fb4a99bba0fb90bb45b8de831b20ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4df997df1489fda1e84e988c91f71f071fb4a99bba0fb90bb45b8de831b20ed8->enter($__internal_4df997df1489fda1e84e988c91f71f071fb4a99bba0fb90bb45b8de831b20ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1759e9114f260af4562ca70ba6a8202bc6db6216e1254d71708daaf648c57292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1759e9114f260af4562ca70ba6a8202bc6db6216e1254d71708daaf648c57292->enter($__internal_1759e9114f260af4562ca70ba6a8202bc6db6216e1254d71708daaf648c57292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_1759e9114f260af4562ca70ba6a8202bc6db6216e1254d71708daaf648c57292->leave($__internal_1759e9114f260af4562ca70ba6a8202bc6db6216e1254d71708daaf648c57292_prof);

        
        $__internal_4df997df1489fda1e84e988c91f71f071fb4a99bba0fb90bb45b8de831b20ed8->leave($__internal_4df997df1489fda1e84e988c91f71f071fb4a99bba0fb90bb45b8de831b20ed8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/hortala/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
