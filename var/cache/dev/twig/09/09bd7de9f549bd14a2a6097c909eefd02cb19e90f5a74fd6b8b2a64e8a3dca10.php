<?php

/* HTLImmobilierBundle:Reservation:accueil.html.twig */
class __TwigTemplate_d9234811e23e6b86742f77afdda82d64da96360f917d01075bbcd713897f119b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::pageadmin.html.twig", "HTLImmobilierBundle:Reservation:accueil.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::pageadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_287ce5516498c3de3e8c2e488d64fad8bd0b1d1993c9fb267ce42e255cbfd2d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_287ce5516498c3de3e8c2e488d64fad8bd0b1d1993c9fb267ce42e255cbfd2d0->enter($__internal_287ce5516498c3de3e8c2e488d64fad8bd0b1d1993c9fb267ce42e255cbfd2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Reservation:accueil.html.twig"));

        $__internal_a67f2694ecf3e3ef8b0a82e20b9aac93f323aac96bd02a5eb33ffb21bb5ed8c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67f2694ecf3e3ef8b0a82e20b9aac93f323aac96bd02a5eb33ffb21bb5ed8c0->enter($__internal_a67f2694ecf3e3ef8b0a82e20b9aac93f323aac96bd02a5eb33ffb21bb5ed8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Reservation:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_287ce5516498c3de3e8c2e488d64fad8bd0b1d1993c9fb267ce42e255cbfd2d0->leave($__internal_287ce5516498c3de3e8c2e488d64fad8bd0b1d1993c9fb267ce42e255cbfd2d0_prof);

        
        $__internal_a67f2694ecf3e3ef8b0a82e20b9aac93f323aac96bd02a5eb33ffb21bb5ed8c0->leave($__internal_a67f2694ecf3e3ef8b0a82e20b9aac93f323aac96bd02a5eb33ffb21bb5ed8c0_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Reservation:accueil.html.twig";
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
", "HTLImmobilierBundle:Reservation:accueil.html.twig", "/var/www/html/hortala/src/HTL/ImmobilierBundle/Resources/views/Reservation/accueil.html.twig");
    }
}
