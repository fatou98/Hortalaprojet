<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a59743d5b4216716b4258f7a8b3b31150423e90672021301d7620ffaf2fe9c8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_443e381df54b09f9ed0ce3eaef3db09ae46ed9e7ae314e9a7421ba33324ec661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_443e381df54b09f9ed0ce3eaef3db09ae46ed9e7ae314e9a7421ba33324ec661->enter($__internal_443e381df54b09f9ed0ce3eaef3db09ae46ed9e7ae314e9a7421ba33324ec661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_369d38a52cbeb81eda73ac28d1b3c1313067ebe505b2af940019117fd8679b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369d38a52cbeb81eda73ac28d1b3c1313067ebe505b2af940019117fd8679b7e->enter($__internal_369d38a52cbeb81eda73ac28d1b3c1313067ebe505b2af940019117fd8679b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_443e381df54b09f9ed0ce3eaef3db09ae46ed9e7ae314e9a7421ba33324ec661->leave($__internal_443e381df54b09f9ed0ce3eaef3db09ae46ed9e7ae314e9a7421ba33324ec661_prof);

        
        $__internal_369d38a52cbeb81eda73ac28d1b3c1313067ebe505b2af940019117fd8679b7e->leave($__internal_369d38a52cbeb81eda73ac28d1b3c1313067ebe505b2af940019117fd8679b7e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
