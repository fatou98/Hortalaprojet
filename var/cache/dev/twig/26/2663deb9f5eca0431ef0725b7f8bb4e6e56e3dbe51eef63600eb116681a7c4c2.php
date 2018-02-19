<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_ed34b914cf7dc7c8fedf49e61a80c56d208916b4e7fe450faa7a846e0d6cd330 extends Twig_Template
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
        $__internal_d694e5db836b19e47036ac8a9b3cba3a835e3aa7c632d8b8beef973a2fdfeb52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d694e5db836b19e47036ac8a9b3cba3a835e3aa7c632d8b8beef973a2fdfeb52->enter($__internal_d694e5db836b19e47036ac8a9b3cba3a835e3aa7c632d8b8beef973a2fdfeb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_3270a6f33e7e5e59ea614b216b51fe6109ab9f4ee1751410327d270a823179bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3270a6f33e7e5e59ea614b216b51fe6109ab9f4ee1751410327d270a823179bb->enter($__internal_3270a6f33e7e5e59ea614b216b51fe6109ab9f4ee1751410327d270a823179bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_d694e5db836b19e47036ac8a9b3cba3a835e3aa7c632d8b8beef973a2fdfeb52->leave($__internal_d694e5db836b19e47036ac8a9b3cba3a835e3aa7c632d8b8beef973a2fdfeb52_prof);

        
        $__internal_3270a6f33e7e5e59ea614b216b51fe6109ab9f4ee1751410327d270a823179bb->leave($__internal_3270a6f33e7e5e59ea614b216b51fe6109ab9f4ee1751410327d270a823179bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
