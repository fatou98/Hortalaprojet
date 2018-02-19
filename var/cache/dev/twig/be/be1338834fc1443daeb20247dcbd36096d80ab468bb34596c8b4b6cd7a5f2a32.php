<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_0cfb685605403b31fdc9011d614d4a0f14659577d64e31fdc4447084c712781f extends Twig_Template
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
        $__internal_af97c11243e0bb568bc2edf447210dad7938a80b365673128dd83bf8829a25f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af97c11243e0bb568bc2edf447210dad7938a80b365673128dd83bf8829a25f6->enter($__internal_af97c11243e0bb568bc2edf447210dad7938a80b365673128dd83bf8829a25f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_1e67b4b8f6bf056bbebfbacfbd25255d7fb18f94c09887a1e4d304c44c1894b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e67b4b8f6bf056bbebfbacfbd25255d7fb18f94c09887a1e4d304c44c1894b2->enter($__internal_1e67b4b8f6bf056bbebfbacfbd25255d7fb18f94c09887a1e4d304c44c1894b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_af97c11243e0bb568bc2edf447210dad7938a80b365673128dd83bf8829a25f6->leave($__internal_af97c11243e0bb568bc2edf447210dad7938a80b365673128dd83bf8829a25f6_prof);

        
        $__internal_1e67b4b8f6bf056bbebfbacfbd25255d7fb18f94c09887a1e4d304c44c1894b2->leave($__internal_1e67b4b8f6bf056bbebfbacfbd25255d7fb18f94c09887a1e4d304c44c1894b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
