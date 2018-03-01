<?php

/* HTLImmobilierBundle:Front:accueil.html.twig */
class __TwigTemplate_afa557905a675e3bee7afd78e2c3e18941139f0809c818ed030a4dd2b27bf1ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::pageadmin.html.twig", "HTLImmobilierBundle:Front:accueil.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::pageadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc1ad6162a8c719de4b48de503249d076de6fb8315b6e8cf91cf32e7efdb75b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1ad6162a8c719de4b48de503249d076de6fb8315b6e8cf91cf32e7efdb75b3->enter($__internal_bc1ad6162a8c719de4b48de503249d076de6fb8315b6e8cf91cf32e7efdb75b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:accueil.html.twig"));

        $__internal_56659fb54827ff3c9f5fa170800ba362497fbc151b0c5e8c00a4906c346273c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56659fb54827ff3c9f5fa170800ba362497fbc151b0c5e8c00a4906c346273c7->enter($__internal_56659fb54827ff3c9f5fa170800ba362497fbc151b0c5e8c00a4906c346273c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc1ad6162a8c719de4b48de503249d076de6fb8315b6e8cf91cf32e7efdb75b3->leave($__internal_bc1ad6162a8c719de4b48de503249d076de6fb8315b6e8cf91cf32e7efdb75b3_prof);

        
        $__internal_56659fb54827ff3c9f5fa170800ba362497fbc151b0c5e8c00a4906c346273c7->leave($__internal_56659fb54827ff3c9f5fa170800ba362497fbc151b0c5e8c00a4906c346273c7_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::pageadmin.html.twig\" %}

      ", "HTLImmobilierBundle:Front:accueil.html.twig", "/var/www/html/testhortala/src/HTL/ImmobilierBundle/Resources/views/Front/accueil.html.twig");
    }
}
