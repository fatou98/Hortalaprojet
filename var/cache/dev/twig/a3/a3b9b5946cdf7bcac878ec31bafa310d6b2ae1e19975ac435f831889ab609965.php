<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_3ef7adea19b42e823b956d611d77402e24e99ed76369e90e992ee56e2902b811 extends Twig_Template
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
        $__internal_8e01ee007f95a42e998de5e5f201f7a69ffa59b68f55bf06fc920270cc426bf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e01ee007f95a42e998de5e5f201f7a69ffa59b68f55bf06fc920270cc426bf0->enter($__internal_8e01ee007f95a42e998de5e5f201f7a69ffa59b68f55bf06fc920270cc426bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_26b235b106b76e0dd176e9d296e3125076be608763fda57deb11398b1ef58dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b235b106b76e0dd176e9d296e3125076be608763fda57deb11398b1ef58dee->enter($__internal_26b235b106b76e0dd176e9d296e3125076be608763fda57deb11398b1ef58dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_8e01ee007f95a42e998de5e5f201f7a69ffa59b68f55bf06fc920270cc426bf0->leave($__internal_8e01ee007f95a42e998de5e5f201f7a69ffa59b68f55bf06fc920270cc426bf0_prof);

        
        $__internal_26b235b106b76e0dd176e9d296e3125076be608763fda57deb11398b1ef58dee->leave($__internal_26b235b106b76e0dd176e9d296e3125076be608763fda57deb11398b1ef58dee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
