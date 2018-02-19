<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_50693584840fd2c13d39c1f93dd92abb20fa1cdba7a64e1b72c3efffa7bb7bd0 extends Twig_Template
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
        $__internal_ecbb5a371ec586d6afcfeddbe569195fcd14f5898351f8c62b5936572be6b34e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecbb5a371ec586d6afcfeddbe569195fcd14f5898351f8c62b5936572be6b34e->enter($__internal_ecbb5a371ec586d6afcfeddbe569195fcd14f5898351f8c62b5936572be6b34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_98a32199f836bcc2bfe091c19ad2bea8c5bdb000193a37576e675e330ed0aeda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a32199f836bcc2bfe091c19ad2bea8c5bdb000193a37576e675e330ed0aeda->enter($__internal_98a32199f836bcc2bfe091c19ad2bea8c5bdb000193a37576e675e330ed0aeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ecbb5a371ec586d6afcfeddbe569195fcd14f5898351f8c62b5936572be6b34e->leave($__internal_ecbb5a371ec586d6afcfeddbe569195fcd14f5898351f8c62b5936572be6b34e_prof);

        
        $__internal_98a32199f836bcc2bfe091c19ad2bea8c5bdb000193a37576e675e330ed0aeda->leave($__internal_98a32199f836bcc2bfe091c19ad2bea8c5bdb000193a37576e675e330ed0aeda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
