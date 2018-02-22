<?php

/* base1.html.twig */
class __TwigTemplate_9d66a7b4db70199422f19fe7a288c4c962e3b2884b8dacabb4283492931d41d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'table' => array($this, 'block_table'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d404f16974a6954270b1492270ba04e863bfdca49d6a3fb93b2524e2831f700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d404f16974a6954270b1492270ba04e863bfdca49d6a3fb93b2524e2831f700->enter($__internal_8d404f16974a6954270b1492270ba04e863bfdca49d6a3fb93b2524e2831f700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_924177c8dbb44664d6c05bbe6b4d37f594b9aa295a73cd178a8fde5c836fa98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924177c8dbb44664d6c05bbe6b4d37f594b9aa295a73cd178a8fde5c836fa98d->enter($__internal_924177c8dbb44664d6c05bbe6b4d37f594b9aa295a73cd178a8fde5c836fa98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
        ";
        // line 21
        $this->displayBlock('table', $context, $blocks);
        // line 22
        echo "
     ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "    </body>
</html>
";
        
        $__internal_8d404f16974a6954270b1492270ba04e863bfdca49d6a3fb93b2524e2831f700->leave($__internal_8d404f16974a6954270b1492270ba04e863bfdca49d6a3fb93b2524e2831f700_prof);

        
        $__internal_924177c8dbb44664d6c05bbe6b4d37f594b9aa295a73cd178a8fde5c836fa98d->leave($__internal_924177c8dbb44664d6c05bbe6b4d37f594b9aa295a73cd178a8fde5c836fa98d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_600ea29f1fcdf5d5d2ee14b0797fd31fd0e03de6fa44556e35df49f564dcdd54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_600ea29f1fcdf5d5d2ee14b0797fd31fd0e03de6fa44556e35df49f564dcdd54->enter($__internal_600ea29f1fcdf5d5d2ee14b0797fd31fd0e03de6fa44556e35df49f564dcdd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b0121ceeb1419b25e49fee8c580f651b7b860fd12ba78dff3cca8f7c5390ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0121ceeb1419b25e49fee8c580f651b7b860fd12ba78dff3cca8f7c5390ec4->enter($__internal_1b0121ceeb1419b25e49fee8c580f651b7b860fd12ba78dff3cca8f7c5390ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1b0121ceeb1419b25e49fee8c580f651b7b860fd12ba78dff3cca8f7c5390ec4->leave($__internal_1b0121ceeb1419b25e49fee8c580f651b7b860fd12ba78dff3cca8f7c5390ec4_prof);

        
        $__internal_600ea29f1fcdf5d5d2ee14b0797fd31fd0e03de6fa44556e35df49f564dcdd54->leave($__internal_600ea29f1fcdf5d5d2ee14b0797fd31fd0e03de6fa44556e35df49f564dcdd54_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d2dda5b4437f95d144d34964a0b1cf47b0615ceaf292b44ca527a67d8a4b352e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2dda5b4437f95d144d34964a0b1cf47b0615ceaf292b44ca527a67d8a4b352e->enter($__internal_d2dda5b4437f95d144d34964a0b1cf47b0615ceaf292b44ca527a67d8a4b352e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3d99b84236efc71292ae3e3f9384c3aa30cf03672281f90736fc2576a7019cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d99b84236efc71292ae3e3f9384c3aa30cf03672281f90736fc2576a7019cd3->enter($__internal_3d99b84236efc71292ae3e3f9384c3aa30cf03672281f90736fc2576a7019cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
          <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
          <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datatables.css"), "html", null, true);
        echo "\">
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">



";
        
        $__internal_3d99b84236efc71292ae3e3f9384c3aa30cf03672281f90736fc2576a7019cd3->leave($__internal_3d99b84236efc71292ae3e3f9384c3aa30cf03672281f90736fc2576a7019cd3_prof);

        
        $__internal_d2dda5b4437f95d144d34964a0b1cf47b0615ceaf292b44ca527a67d8a4b352e->leave($__internal_d2dda5b4437f95d144d34964a0b1cf47b0615ceaf292b44ca527a67d8a4b352e_prof);

    }

    // line 21
    public function block_table($context, array $blocks = array())
    {
        $__internal_10d6369b3eb85765aa22aec34a716df137191ec7f7d19d34754222416e9023f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d6369b3eb85765aa22aec34a716df137191ec7f7d19d34754222416e9023f2->enter($__internal_10d6369b3eb85765aa22aec34a716df137191ec7f7d19d34754222416e9023f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_559f36af40ec2a05b7a4323ba17a84a73d7c42b80e2c884bda4c39127df0ddcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559f36af40ec2a05b7a4323ba17a84a73d7c42b80e2c884bda4c39127df0ddcb->enter($__internal_559f36af40ec2a05b7a4323ba17a84a73d7c42b80e2c884bda4c39127df0ddcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        
        $__internal_559f36af40ec2a05b7a4323ba17a84a73d7c42b80e2c884bda4c39127df0ddcb->leave($__internal_559f36af40ec2a05b7a4323ba17a84a73d7c42b80e2c884bda4c39127df0ddcb_prof);

        
        $__internal_10d6369b3eb85765aa22aec34a716df137191ec7f7d19d34754222416e9023f2->leave($__internal_10d6369b3eb85765aa22aec34a716df137191ec7f7d19d34754222416e9023f2_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f3cf23ddcf6f3aa79ccb6c70da1a4444327576389b9bccfa0263f5cf1d4cfc27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3cf23ddcf6f3aa79ccb6c70da1a4444327576389b9bccfa0263f5cf1d4cfc27->enter($__internal_f3cf23ddcf6f3aa79ccb6c70da1a4444327576389b9bccfa0263f5cf1d4cfc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e19682acd89be53c0afd04a2dbda885cff2cc9fa89485bf5d25ebd125432fdba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19682acd89be53c0afd04a2dbda885cff2cc9fa89485bf5d25ebd125432fdba->enter($__internal_e19682acd89be53c0afd04a2dbda885cff2cc9fa89485bf5d25ebd125432fdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"> </script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.js"), "html", null, true);
        echo "\"></script>

         ";
        
        $__internal_e19682acd89be53c0afd04a2dbda885cff2cc9fa89485bf5d25ebd125432fdba->leave($__internal_e19682acd89be53c0afd04a2dbda885cff2cc9fa89485bf5d25ebd125432fdba_prof);

        
        $__internal_f3cf23ddcf6f3aa79ccb6c70da1a4444327576389b9bccfa0263f5cf1d4cfc27->leave($__internal_f3cf23ddcf6f3aa79ccb6c70da1a4444327576389b9bccfa0263f5cf1d4cfc27_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 28,  158 => 27,  154 => 26,  150 => 25,  147 => 24,  138 => 23,  121 => 21,  102 => 9,  98 => 8,  95 => 7,  86 => 6,  68 => 5,  56 => 31,  54 => 23,  51 => 22,  49 => 21,  41 => 17,  39 => 6,  35 => 5,  29 => 1,);
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
          <link rel=\"stylesheet\" href=\"{{ asset('css/datatables.css') }}\">
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">



{% endblock %}        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <body>
        {% block table %}{% endblock %}

     {% block javascripts %}

        <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('js/script.js') }}\"> </script>
        <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('js/datatables.js' )}}\"></script>

         {% endblock %}
    </body>
</html>
", "base1.html.twig", "/var/www/html/hortala/app/Resources/views/base1.html.twig");
    }
}
