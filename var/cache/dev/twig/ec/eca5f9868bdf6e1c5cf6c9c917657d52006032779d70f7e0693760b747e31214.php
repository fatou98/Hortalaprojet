<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d435a03f2035d8039c44c0141aea200433276daa8c40c57dae2e6cddcee8bd91 extends Twig_Template
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
        $__internal_692481d0e39fbd89dcd208be6cd871c0751a9d85c1cb49b9d8cc6d1a60373938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_692481d0e39fbd89dcd208be6cd871c0751a9d85c1cb49b9d8cc6d1a60373938->enter($__internal_692481d0e39fbd89dcd208be6cd871c0751a9d85c1cb49b9d8cc6d1a60373938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_020ca308faf7da99258afe7f58082aeeedaedaf2e7f419a81724288457d06acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020ca308faf7da99258afe7f58082aeeedaedaf2e7f419a81724288457d06acc->enter($__internal_020ca308faf7da99258afe7f58082aeeedaedaf2e7f419a81724288457d06acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_692481d0e39fbd89dcd208be6cd871c0751a9d85c1cb49b9d8cc6d1a60373938->leave($__internal_692481d0e39fbd89dcd208be6cd871c0751a9d85c1cb49b9d8cc6d1a60373938_prof);

        
        $__internal_020ca308faf7da99258afe7f58082aeeedaedaf2e7f419a81724288457d06acc->leave($__internal_020ca308faf7da99258afe7f58082aeeedaedaf2e7f419a81724288457d06acc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
