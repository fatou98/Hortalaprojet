<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a3fcc35fa7aa65649a1583e787e531feb8ba14e6237a34607039ec9db7423e38 extends Twig_Template
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
        $__internal_a434ea809accaa9ae15b4fc6703f2c6533865611648bf4853337fb638d91c116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a434ea809accaa9ae15b4fc6703f2c6533865611648bf4853337fb638d91c116->enter($__internal_a434ea809accaa9ae15b4fc6703f2c6533865611648bf4853337fb638d91c116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_c0d6bda31e12db199fb25404eee901bd643d3aaa58ec067cfb96ef45e9de3c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d6bda31e12db199fb25404eee901bd643d3aaa58ec067cfb96ef45e9de3c40->enter($__internal_c0d6bda31e12db199fb25404eee901bd643d3aaa58ec067cfb96ef45e9de3c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_a434ea809accaa9ae15b4fc6703f2c6533865611648bf4853337fb638d91c116->leave($__internal_a434ea809accaa9ae15b4fc6703f2c6533865611648bf4853337fb638d91c116_prof);

        
        $__internal_c0d6bda31e12db199fb25404eee901bd643d3aaa58ec067cfb96ef45e9de3c40->leave($__internal_c0d6bda31e12db199fb25404eee901bd643d3aaa58ec067cfb96ef45e9de3c40_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
