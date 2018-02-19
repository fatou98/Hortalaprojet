<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_535b12708e659651471c8c9ab58d74684ffb5475148b6571aee3622d1eb7f1a5 extends Twig_Template
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
        $__internal_a3a6ec1182da77e059312328691a4706b7b528784adc34d1a507621c68419313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a6ec1182da77e059312328691a4706b7b528784adc34d1a507621c68419313->enter($__internal_a3a6ec1182da77e059312328691a4706b7b528784adc34d1a507621c68419313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_02efa4e1bdc16128c41950394f1d63f61cf9d8526764fbce27e72b64a8188f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02efa4e1bdc16128c41950394f1d63f61cf9d8526764fbce27e72b64a8188f77->enter($__internal_02efa4e1bdc16128c41950394f1d63f61cf9d8526764fbce27e72b64a8188f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a3a6ec1182da77e059312328691a4706b7b528784adc34d1a507621c68419313->leave($__internal_a3a6ec1182da77e059312328691a4706b7b528784adc34d1a507621c68419313_prof);

        
        $__internal_02efa4e1bdc16128c41950394f1d63f61cf9d8526764fbce27e72b64a8188f77->leave($__internal_02efa4e1bdc16128c41950394f1d63f61cf9d8526764fbce27e72b64a8188f77_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
