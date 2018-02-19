<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_4ac556a89b571f439478ac49c1888c1b90367e82b7c603bd71e6e61a645bc4bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_58182beeec4eec49c70e3b8e2a2ea8988a15b63399c70ccb4a32720a72506620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58182beeec4eec49c70e3b8e2a2ea8988a15b63399c70ccb4a32720a72506620->enter($__internal_58182beeec4eec49c70e3b8e2a2ea8988a15b63399c70ccb4a32720a72506620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_9d594c783269d4dfeb8a645140fcd5e2b373c85473fe4fdb0106074f29a37415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d594c783269d4dfeb8a645140fcd5e2b373c85473fe4fdb0106074f29a37415->enter($__internal_9d594c783269d4dfeb8a645140fcd5e2b373c85473fe4fdb0106074f29a37415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58182beeec4eec49c70e3b8e2a2ea8988a15b63399c70ccb4a32720a72506620->leave($__internal_58182beeec4eec49c70e3b8e2a2ea8988a15b63399c70ccb4a32720a72506620_prof);

        
        $__internal_9d594c783269d4dfeb8a645140fcd5e2b373c85473fe4fdb0106074f29a37415->leave($__internal_9d594c783269d4dfeb8a645140fcd5e2b373c85473fe4fdb0106074f29a37415_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b1728c06af75300eea63e2bc87b221327070e0754353cc531c0fa053cd640a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b1728c06af75300eea63e2bc87b221327070e0754353cc531c0fa053cd640a4->enter($__internal_5b1728c06af75300eea63e2bc87b221327070e0754353cc531c0fa053cd640a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9760a89f46c4c17896ade89c654ea90e5fa1a4486d511c5c82ae4a34aa63c965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9760a89f46c4c17896ade89c654ea90e5fa1a4486d511c5c82ae4a34aa63c965->enter($__internal_9760a89f46c4c17896ade89c654ea90e5fa1a4486d511c5c82ae4a34aa63c965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_9760a89f46c4c17896ade89c654ea90e5fa1a4486d511c5c82ae4a34aa63c965->leave($__internal_9760a89f46c4c17896ade89c654ea90e5fa1a4486d511c5c82ae4a34aa63c965_prof);

        
        $__internal_5b1728c06af75300eea63e2bc87b221327070e0754353cc531c0fa053cd640a4->leave($__internal_5b1728c06af75300eea63e2bc87b221327070e0754353cc531c0fa053cd640a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/hortala/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
