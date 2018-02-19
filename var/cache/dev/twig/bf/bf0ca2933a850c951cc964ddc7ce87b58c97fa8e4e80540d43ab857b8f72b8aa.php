<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e65021b70df3063e338bc3fb48ad3dcec789e7d1cea81df187348b0363f5c53b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ff70749ea427914cd0d80b5ab4e729a7af9d8c73761a401b7dc6aecd8fc88a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff70749ea427914cd0d80b5ab4e729a7af9d8c73761a401b7dc6aecd8fc88a6->enter($__internal_7ff70749ea427914cd0d80b5ab4e729a7af9d8c73761a401b7dc6aecd8fc88a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b127ac45add68de3951562cea66f1ef84b0b9cd812db7c3fc1272b4f269fbc86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b127ac45add68de3951562cea66f1ef84b0b9cd812db7c3fc1272b4f269fbc86->enter($__internal_b127ac45add68de3951562cea66f1ef84b0b9cd812db7c3fc1272b4f269fbc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_7ff70749ea427914cd0d80b5ab4e729a7af9d8c73761a401b7dc6aecd8fc88a6->leave($__internal_7ff70749ea427914cd0d80b5ab4e729a7af9d8c73761a401b7dc6aecd8fc88a6_prof);

        
        $__internal_b127ac45add68de3951562cea66f1ef84b0b9cd812db7c3fc1272b4f269fbc86->leave($__internal_b127ac45add68de3951562cea66f1ef84b0b9cd812db7c3fc1272b4f269fbc86_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cedff525f13765ad9dc21621a0a455b9193acfca1f1bbec3add6232f178e9108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cedff525f13765ad9dc21621a0a455b9193acfca1f1bbec3add6232f178e9108->enter($__internal_cedff525f13765ad9dc21621a0a455b9193acfca1f1bbec3add6232f178e9108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e4fdbb5fa998644b594cee6f5f27ad5a2cfe79847f023fb6cc2a02301bd8e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4fdbb5fa998644b594cee6f5f27ad5a2cfe79847f023fb6cc2a02301bd8e5e->enter($__internal_0e4fdbb5fa998644b594cee6f5f27ad5a2cfe79847f023fb6cc2a02301bd8e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0e4fdbb5fa998644b594cee6f5f27ad5a2cfe79847f023fb6cc2a02301bd8e5e->leave($__internal_0e4fdbb5fa998644b594cee6f5f27ad5a2cfe79847f023fb6cc2a02301bd8e5e_prof);

        
        $__internal_cedff525f13765ad9dc21621a0a455b9193acfca1f1bbec3add6232f178e9108->leave($__internal_cedff525f13765ad9dc21621a0a455b9193acfca1f1bbec3add6232f178e9108_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c44d8ce1fc22b4a24d8984716440bc8902b668ef7b601f0d082cf8dc89572bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c44d8ce1fc22b4a24d8984716440bc8902b668ef7b601f0d082cf8dc89572bc->enter($__internal_1c44d8ce1fc22b4a24d8984716440bc8902b668ef7b601f0d082cf8dc89572bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4d9b5f2ff85a71f02b547930d033abd11b2a91a26904fede2947ec382d7277ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9b5f2ff85a71f02b547930d033abd11b2a91a26904fede2947ec382d7277ec->enter($__internal_4d9b5f2ff85a71f02b547930d033abd11b2a91a26904fede2947ec382d7277ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4d9b5f2ff85a71f02b547930d033abd11b2a91a26904fede2947ec382d7277ec->leave($__internal_4d9b5f2ff85a71f02b547930d033abd11b2a91a26904fede2947ec382d7277ec_prof);

        
        $__internal_1c44d8ce1fc22b4a24d8984716440bc8902b668ef7b601f0d082cf8dc89572bc->leave($__internal_1c44d8ce1fc22b4a24d8984716440bc8902b668ef7b601f0d082cf8dc89572bc_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9d0d5b51176476b8c6405e5deeeffd48c5aaf78d47a6a331c824065f8f03da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d0d5b51176476b8c6405e5deeeffd48c5aaf78d47a6a331c824065f8f03da8->enter($__internal_c9d0d5b51176476b8c6405e5deeeffd48c5aaf78d47a6a331c824065f8f03da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23e17babad2cf7b8e125bd7a70f17c806b3ebc8bbdfebc1f5edd5eab7d678ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e17babad2cf7b8e125bd7a70f17c806b3ebc8bbdfebc1f5edd5eab7d678ae8->enter($__internal_23e17babad2cf7b8e125bd7a70f17c806b3ebc8bbdfebc1f5edd5eab7d678ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_23e17babad2cf7b8e125bd7a70f17c806b3ebc8bbdfebc1f5edd5eab7d678ae8->leave($__internal_23e17babad2cf7b8e125bd7a70f17c806b3ebc8bbdfebc1f5edd5eab7d678ae8_prof);

        
        $__internal_c9d0d5b51176476b8c6405e5deeeffd48c5aaf78d47a6a331c824065f8f03da8->leave($__internal_c9d0d5b51176476b8c6405e5deeeffd48c5aaf78d47a6a331c824065f8f03da8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
