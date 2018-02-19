<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_9cd18d9efffe12642b64ff40e5a8ee5de2c535e79579697735108fb1ba73885f extends Twig_Template
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
        $__internal_abf89ebc3d2cc209ad67d911421bafe189a81762c207300fbaddf98315735db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf89ebc3d2cc209ad67d911421bafe189a81762c207300fbaddf98315735db2->enter($__internal_abf89ebc3d2cc209ad67d911421bafe189a81762c207300fbaddf98315735db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_4b2d3b78c4c85f4dc158ff1e81b5e431a1c7de40d3b09e432dd72aada19599ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2d3b78c4c85f4dc158ff1e81b5e431a1c7de40d3b09e432dd72aada19599ff->enter($__internal_4b2d3b78c4c85f4dc158ff1e81b5e431a1c7de40d3b09e432dd72aada19599ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_abf89ebc3d2cc209ad67d911421bafe189a81762c207300fbaddf98315735db2->leave($__internal_abf89ebc3d2cc209ad67d911421bafe189a81762c207300fbaddf98315735db2_prof);

        
        $__internal_4b2d3b78c4c85f4dc158ff1e81b5e431a1c7de40d3b09e432dd72aada19599ff->leave($__internal_4b2d3b78c4c85f4dc158ff1e81b5e431a1c7de40d3b09e432dd72aada19599ff_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f9577f158b93d7aaddba4393c0f259654297c6b5d6b10f6c15e4fc743b28e933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9577f158b93d7aaddba4393c0f259654297c6b5d6b10f6c15e4fc743b28e933->enter($__internal_f9577f158b93d7aaddba4393c0f259654297c6b5d6b10f6c15e4fc743b28e933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_6eb6e1d7d0b58b48f89822b149c826e4e8235d6ed3be74ab656e6687f3a50f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb6e1d7d0b58b48f89822b149c826e4e8235d6ed3be74ab656e6687f3a50f58->enter($__internal_6eb6e1d7d0b58b48f89822b149c826e4e8235d6ed3be74ab656e6687f3a50f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_6eb6e1d7d0b58b48f89822b149c826e4e8235d6ed3be74ab656e6687f3a50f58->leave($__internal_6eb6e1d7d0b58b48f89822b149c826e4e8235d6ed3be74ab656e6687f3a50f58_prof);

        
        $__internal_f9577f158b93d7aaddba4393c0f259654297c6b5d6b10f6c15e4fc743b28e933->leave($__internal_f9577f158b93d7aaddba4393c0f259654297c6b5d6b10f6c15e4fc743b28e933_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9c57d354da5c5dc434757f0646d4feb1afe0d24859b0f1bd70850efb40b0351a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c57d354da5c5dc434757f0646d4feb1afe0d24859b0f1bd70850efb40b0351a->enter($__internal_9c57d354da5c5dc434757f0646d4feb1afe0d24859b0f1bd70850efb40b0351a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3e666965ee87c5da4fee98cf5eed615cf34fba004a99c278db4cbb15ea486e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e666965ee87c5da4fee98cf5eed615cf34fba004a99c278db4cbb15ea486e2b->enter($__internal_3e666965ee87c5da4fee98cf5eed615cf34fba004a99c278db4cbb15ea486e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3e666965ee87c5da4fee98cf5eed615cf34fba004a99c278db4cbb15ea486e2b->leave($__internal_3e666965ee87c5da4fee98cf5eed615cf34fba004a99c278db4cbb15ea486e2b_prof);

        
        $__internal_9c57d354da5c5dc434757f0646d4feb1afe0d24859b0f1bd70850efb40b0351a->leave($__internal_9c57d354da5c5dc434757f0646d4feb1afe0d24859b0f1bd70850efb40b0351a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0ea6cdd3428663e587f50694961e90e8deb2785ec70a6641c58572c2aa8168be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea6cdd3428663e587f50694961e90e8deb2785ec70a6641c58572c2aa8168be->enter($__internal_0ea6cdd3428663e587f50694961e90e8deb2785ec70a6641c58572c2aa8168be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_dcd7c63747bb38d60de639e7d29dc820514741fda9410258f451f94dfe78ae67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd7c63747bb38d60de639e7d29dc820514741fda9410258f451f94dfe78ae67->enter($__internal_dcd7c63747bb38d60de639e7d29dc820514741fda9410258f451f94dfe78ae67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dcd7c63747bb38d60de639e7d29dc820514741fda9410258f451f94dfe78ae67->leave($__internal_dcd7c63747bb38d60de639e7d29dc820514741fda9410258f451f94dfe78ae67_prof);

        
        $__internal_0ea6cdd3428663e587f50694961e90e8deb2785ec70a6641c58572c2aa8168be->leave($__internal_0ea6cdd3428663e587f50694961e90e8deb2785ec70a6641c58572c2aa8168be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/hortala/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
