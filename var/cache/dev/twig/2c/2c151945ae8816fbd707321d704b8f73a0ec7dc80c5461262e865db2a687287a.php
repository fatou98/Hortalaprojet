<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_932b38669a7cf6856b167da7172fb16e4bea7a5b32f0fd072c159fbbd5d5516d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59231066feb3d27d2c3f10955ab302ace7195edf62bfa4572e3dc5d66bb023f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59231066feb3d27d2c3f10955ab302ace7195edf62bfa4572e3dc5d66bb023f5->enter($__internal_59231066feb3d27d2c3f10955ab302ace7195edf62bfa4572e3dc5d66bb023f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_04bc81345f542b1900cc698dbc8531ce781b3067a887963a422b9771b5fe33cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04bc81345f542b1900cc698dbc8531ce781b3067a887963a422b9771b5fe33cb->enter($__internal_04bc81345f542b1900cc698dbc8531ce781b3067a887963a422b9771b5fe33cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_59231066feb3d27d2c3f10955ab302ace7195edf62bfa4572e3dc5d66bb023f5->leave($__internal_59231066feb3d27d2c3f10955ab302ace7195edf62bfa4572e3dc5d66bb023f5_prof);

        
        $__internal_04bc81345f542b1900cc698dbc8531ce781b3067a887963a422b9771b5fe33cb->leave($__internal_04bc81345f542b1900cc698dbc8531ce781b3067a887963a422b9771b5fe33cb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_08a6611f4bfd9c60e2a90b24bffadba281b3dcd0f2fdd09e7708cea34c9aebcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08a6611f4bfd9c60e2a90b24bffadba281b3dcd0f2fdd09e7708cea34c9aebcb->enter($__internal_08a6611f4bfd9c60e2a90b24bffadba281b3dcd0f2fdd09e7708cea34c9aebcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_88d005ab9753410d31d9e7e50e43469926e93a364bab5f8d5ab85c3f5dae54e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d005ab9753410d31d9e7e50e43469926e93a364bab5f8d5ab85c3f5dae54e0->enter($__internal_88d005ab9753410d31d9e7e50e43469926e93a364bab5f8d5ab85c3f5dae54e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_88d005ab9753410d31d9e7e50e43469926e93a364bab5f8d5ab85c3f5dae54e0->leave($__internal_88d005ab9753410d31d9e7e50e43469926e93a364bab5f8d5ab85c3f5dae54e0_prof);

        
        $__internal_08a6611f4bfd9c60e2a90b24bffadba281b3dcd0f2fdd09e7708cea34c9aebcb->leave($__internal_08a6611f4bfd9c60e2a90b24bffadba281b3dcd0f2fdd09e7708cea34c9aebcb_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_02b89d4d715fa06aa07092966586f926f5918bad83ac7e9d7785da78fba982d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b89d4d715fa06aa07092966586f926f5918bad83ac7e9d7785da78fba982d0->enter($__internal_02b89d4d715fa06aa07092966586f926f5918bad83ac7e9d7785da78fba982d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_8237e6089ea08e691be271565ef6fb9240a2f632bc5fbd7cea42975a938cc811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8237e6089ea08e691be271565ef6fb9240a2f632bc5fbd7cea42975a938cc811->enter($__internal_8237e6089ea08e691be271565ef6fb9240a2f632bc5fbd7cea42975a938cc811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8237e6089ea08e691be271565ef6fb9240a2f632bc5fbd7cea42975a938cc811->leave($__internal_8237e6089ea08e691be271565ef6fb9240a2f632bc5fbd7cea42975a938cc811_prof);

        
        $__internal_02b89d4d715fa06aa07092966586f926f5918bad83ac7e9d7785da78fba982d0->leave($__internal_02b89d4d715fa06aa07092966586f926f5918bad83ac7e9d7785da78fba982d0_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d662161eafb7da489d6e9d566405a77a55395c381b0d4bb2c5ec05cb6204b57f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d662161eafb7da489d6e9d566405a77a55395c381b0d4bb2c5ec05cb6204b57f->enter($__internal_d662161eafb7da489d6e9d566405a77a55395c381b0d4bb2c5ec05cb6204b57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bce95ce44b267f23be9c6cba0450c43b0020891c92bdb7ea7e3c59ed883f34a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce95ce44b267f23be9c6cba0450c43b0020891c92bdb7ea7e3c59ed883f34a5->enter($__internal_bce95ce44b267f23be9c6cba0450c43b0020891c92bdb7ea7e3c59ed883f34a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bce95ce44b267f23be9c6cba0450c43b0020891c92bdb7ea7e3c59ed883f34a5->leave($__internal_bce95ce44b267f23be9c6cba0450c43b0020891c92bdb7ea7e3c59ed883f34a5_prof);

        
        $__internal_d662161eafb7da489d6e9d566405a77a55395c381b0d4bb2c5ec05cb6204b57f->leave($__internal_d662161eafb7da489d6e9d566405a77a55395c381b0d4bb2c5ec05cb6204b57f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/hortala/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
