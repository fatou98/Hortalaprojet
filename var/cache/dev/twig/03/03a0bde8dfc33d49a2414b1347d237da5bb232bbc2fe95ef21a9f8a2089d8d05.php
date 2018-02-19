<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f059ae2991ae060f000cfc242cc4ac2599f75e2ae978013c7ccac99c4f17fbb6 extends Twig_Template
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
        $__internal_6ae58caa44ea9c3cc36baa3ff991db9971a61e2b44c0ac04378ebc40d39d6cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae58caa44ea9c3cc36baa3ff991db9971a61e2b44c0ac04378ebc40d39d6cfa->enter($__internal_6ae58caa44ea9c3cc36baa3ff991db9971a61e2b44c0ac04378ebc40d39d6cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_7c04a0d77ffe2f86a15c7ba61f6b1f6705633f7e29153878ab6e178ada497f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c04a0d77ffe2f86a15c7ba61f6b1f6705633f7e29153878ab6e178ada497f48->enter($__internal_7c04a0d77ffe2f86a15c7ba61f6b1f6705633f7e29153878ab6e178ada497f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6ae58caa44ea9c3cc36baa3ff991db9971a61e2b44c0ac04378ebc40d39d6cfa->leave($__internal_6ae58caa44ea9c3cc36baa3ff991db9971a61e2b44c0ac04378ebc40d39d6cfa_prof);

        
        $__internal_7c04a0d77ffe2f86a15c7ba61f6b1f6705633f7e29153878ab6e178ada497f48->leave($__internal_7c04a0d77ffe2f86a15c7ba61f6b1f6705633f7e29153878ab6e178ada497f48_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
