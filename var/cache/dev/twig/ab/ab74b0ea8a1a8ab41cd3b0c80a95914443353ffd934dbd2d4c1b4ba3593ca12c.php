<?php

/* HTLImmobilierBundle:Default:index.html.twig */
class __TwigTemplate_722df834f6c08c37847d9a91b074b819301311f3830dfce415fb867b9918df63 extends Twig_Template
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
        $__internal_8eef6412536d0b6d1a863e66457faa45f2a5cdf994292a23d2068a7cdf9f6920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eef6412536d0b6d1a863e66457faa45f2a5cdf994292a23d2068a7cdf9f6920->enter($__internal_8eef6412536d0b6d1a863e66457faa45f2a5cdf994292a23d2068a7cdf9f6920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Default:index.html.twig"));

        $__internal_7672b40d63f85b731f76a68600605a974f105ca23c5c7fdaf97a3e5c073e950d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7672b40d63f85b731f76a68600605a974f105ca23c5c7fdaf97a3e5c073e950d->enter($__internal_7672b40d63f85b731f76a68600605a974f105ca23c5c7fdaf97a3e5c073e950d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
<body>
    Hello World!
</body>
</html>";
        
        $__internal_8eef6412536d0b6d1a863e66457faa45f2a5cdf994292a23d2068a7cdf9f6920->leave($__internal_8eef6412536d0b6d1a863e66457faa45f2a5cdf994292a23d2068a7cdf9f6920_prof);

        
        $__internal_7672b40d63f85b731f76a68600605a974f105ca23c5c7fdaf97a3e5c073e950d->leave($__internal_7672b40d63f85b731f76a68600605a974f105ca23c5c7fdaf97a3e5c073e950d_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Default:index.html.twig";
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
        return new Twig_Source("<html>
<body>
    Hello World!
</body>
</html>", "HTLImmobilierBundle:Default:index.html.twig", "/var/www/html/hortala/src/HTL/ImmobilierBundle/Resources/views/Default/index.html.twig");
    }
}
