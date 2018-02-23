<?php

/* ::pageadmin.html.twig */
class __TwigTemplate_a5b83d794ad63ff5f053a23f16247f78c6820de90959b8efef77218a852d9aa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8757612a12e2eed4f8d81b092f3549735b0a86a8adafb78069dca603e4aeef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8757612a12e2eed4f8d81b092f3549735b0a86a8adafb78069dca603e4aeef3->enter($__internal_d8757612a12e2eed4f8d81b092f3549735b0a86a8adafb78069dca603e4aeef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::pageadmin.html.twig"));

        $__internal_161fbf0e6829c1c985c8653e7f34e3373c08573800c94a21ad1cb1665e3f20b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161fbf0e6829c1c985c8653e7f34e3373c08573800c94a21ad1cb1665e3f20b2->enter($__internal_161fbf0e6829c1c985c8653e7f34e3373c08573800c94a21ad1cb1665e3f20b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::pageadmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "     
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
       <body>

     ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </body>
</html>
";
        
        $__internal_d8757612a12e2eed4f8d81b092f3549735b0a86a8adafb78069dca603e4aeef3->leave($__internal_d8757612a12e2eed4f8d81b092f3549735b0a86a8adafb78069dca603e4aeef3_prof);

        
        $__internal_161fbf0e6829c1c985c8653e7f34e3373c08573800c94a21ad1cb1665e3f20b2->leave($__internal_161fbf0e6829c1c985c8653e7f34e3373c08573800c94a21ad1cb1665e3f20b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_013c8f36d39fced01252d57f00dd2f3d9393cb01b6131477d59644121fd56105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_013c8f36d39fced01252d57f00dd2f3d9393cb01b6131477d59644121fd56105->enter($__internal_013c8f36d39fced01252d57f00dd2f3d9393cb01b6131477d59644121fd56105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7db9b5ac3d82594b57c3f2fe741901737d8b39d9ca07fefe04fe02f2941d126e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db9b5ac3d82594b57c3f2fe741901737d8b39d9ca07fefe04fe02f2941d126e->enter($__internal_7db9b5ac3d82594b57c3f2fe741901737d8b39d9ca07fefe04fe02f2941d126e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7db9b5ac3d82594b57c3f2fe741901737d8b39d9ca07fefe04fe02f2941d126e->leave($__internal_7db9b5ac3d82594b57c3f2fe741901737d8b39d9ca07fefe04fe02f2941d126e_prof);

        
        $__internal_013c8f36d39fced01252d57f00dd2f3d9393cb01b6131477d59644121fd56105->leave($__internal_013c8f36d39fced01252d57f00dd2f3d9393cb01b6131477d59644121fd56105_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f669e780bcff0ea380977bf9b69fd3e0a96884ee932cb581ffff87bdcdab9750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f669e780bcff0ea380977bf9b69fd3e0a96884ee932cb581ffff87bdcdab9750->enter($__internal_f669e780bcff0ea380977bf9b69fd3e0a96884ee932cb581ffff87bdcdab9750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_490665d9967a060744e384dc040757560f784741f1c8009ec8887b569035b543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490665d9967a060744e384dc040757560f784741f1c8009ec8887b569035b543->enter($__internal_490665d9967a060744e384dc040757560f784741f1c8009ec8887b569035b543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style1.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datatables.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
";
        
        $__internal_490665d9967a060744e384dc040757560f784741f1c8009ec8887b569035b543->leave($__internal_490665d9967a060744e384dc040757560f784741f1c8009ec8887b569035b543_prof);

        
        $__internal_f669e780bcff0ea380977bf9b69fd3e0a96884ee932cb581ffff87bdcdab9750->leave($__internal_f669e780bcff0ea380977bf9b69fd3e0a96884ee932cb581ffff87bdcdab9750_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec029be52d5833eb39a1135a8fea1a9b15d1e91d96eee0c3c0cab281d564b628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec029be52d5833eb39a1135a8fea1a9b15d1e91d96eee0c3c0cab281d564b628->enter($__internal_ec029be52d5833eb39a1135a8fea1a9b15d1e91d96eee0c3c0cab281d564b628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bf764800d758cb34b8174c12149c852e466d4a4c4a766a85c927c23aa228b4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf764800d758cb34b8174c12149c852e466d4a4c4a766a85c927c23aa228b4b7->enter($__internal_bf764800d758cb34b8174c12149c852e466d4a4c4a766a85c927c23aa228b4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"> </script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.js"), "html", null, true);
        echo "\"></script>

         ";
        
        $__internal_bf764800d758cb34b8174c12149c852e466d4a4c4a766a85c927c23aa228b4b7->leave($__internal_bf764800d758cb34b8174c12149c852e466d4a4c4a766a85c927c23aa228b4b7_prof);

        
        $__internal_ec029be52d5833eb39a1135a8fea1a9b15d1e91d96eee0c3c0cab281d564b628->leave($__internal_ec029be52d5833eb39a1135a8fea1a9b15d1e91d96eee0c3c0cab281d564b628_prof);

    }

    public function getTemplateName()
    {
        return "::pageadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 24,  136 => 23,  132 => 22,  127 => 21,  118 => 20,  102 => 10,  98 => 9,  94 => 8,  91 => 7,  82 => 6,  64 => 5,  52 => 27,  50 => 20,  43 => 16,  40 => 15,  38 => 6,  34 => 5,  28 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
{% block stylesheets %}

            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/style1.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/datatables.css') }}\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
{% endblock %}     
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
       <body>

     {% block javascripts %}
        <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('js/script.js') }}\"> </script>
        <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('js/datatables.js' )}}\"></script>

         {% endblock %}
    </body>
</html>
", "::pageadmin.html.twig", "/var/www/html/hortala/app/Resources/views/pageadmin.html.twig");
    }
}
