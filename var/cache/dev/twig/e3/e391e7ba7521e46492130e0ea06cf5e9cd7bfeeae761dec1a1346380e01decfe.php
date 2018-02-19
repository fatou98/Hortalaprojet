<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_a76abfc728d79ab80cc4d55769dee31d2436132b39305a0cba693936feca5ebf extends Twig_Template
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
        $__internal_7381233c428e201eb9a6b5e5e7e6f9de89831d37e14ba711dc51a689bfdba3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7381233c428e201eb9a6b5e5e7e6f9de89831d37e14ba711dc51a689bfdba3e5->enter($__internal_7381233c428e201eb9a6b5e5e7e6f9de89831d37e14ba711dc51a689bfdba3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_e30b0a12ff9104c21381bcfb2d40b534dbed0dd778722a84b1917cf35ad16a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30b0a12ff9104c21381bcfb2d40b534dbed0dd778722a84b1917cf35ad16a65->enter($__internal_e30b0a12ff9104c21381bcfb2d40b534dbed0dd778722a84b1917cf35ad16a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_7381233c428e201eb9a6b5e5e7e6f9de89831d37e14ba711dc51a689bfdba3e5->leave($__internal_7381233c428e201eb9a6b5e5e7e6f9de89831d37e14ba711dc51a689bfdba3e5_prof);

        
        $__internal_e30b0a12ff9104c21381bcfb2d40b534dbed0dd778722a84b1917cf35ad16a65->leave($__internal_e30b0a12ff9104c21381bcfb2d40b534dbed0dd778722a84b1917cf35ad16a65_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
