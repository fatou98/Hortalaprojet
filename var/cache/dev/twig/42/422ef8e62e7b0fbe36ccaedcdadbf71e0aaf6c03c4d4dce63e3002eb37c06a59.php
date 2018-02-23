<?php

/* ::base1.html.twig */
class __TwigTemplate_9d66a7b4db70199422f19fe7a288c4c962e3b2884b8dacabb4283492931d41d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'table' => array($this, 'block_table'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_688941adc1f0990d5470cf25681b07e05346711d17b57e4d35ded10f3ed8099e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_688941adc1f0990d5470cf25681b07e05346711d17b57e4d35ded10f3ed8099e->enter($__internal_688941adc1f0990d5470cf25681b07e05346711d17b57e4d35ded10f3ed8099e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

        $__internal_ac1a468f904b22a97d36b7c1f901253d44bf923bb7b45a32d1e4231f6aeddc26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1a468f904b22a97d36b7c1f901253d44bf923bb7b45a32d1e4231f6aeddc26->enter($__internal_ac1a468f904b22a97d36b7c1f901253d44bf923bb7b45a32d1e4231f6aeddc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

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
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
                <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.js"), "html", null, true);
        echo "\"></script>
    </head>

    <body>
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        echo "  
        ";
        // line 21
        $this->displayBlock('table', $context, $blocks);
        // line 22
        echo "
     ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    </body>
</html>
";
        
        $__internal_688941adc1f0990d5470cf25681b07e05346711d17b57e4d35ded10f3ed8099e->leave($__internal_688941adc1f0990d5470cf25681b07e05346711d17b57e4d35ded10f3ed8099e_prof);

        
        $__internal_ac1a468f904b22a97d36b7c1f901253d44bf923bb7b45a32d1e4231f6aeddc26->leave($__internal_ac1a468f904b22a97d36b7c1f901253d44bf923bb7b45a32d1e4231f6aeddc26_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_33aad4a9e2051a136270a8ead00ddc017a7aacee1e4927dd7ce7272d8ea259d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33aad4a9e2051a136270a8ead00ddc017a7aacee1e4927dd7ce7272d8ea259d6->enter($__internal_33aad4a9e2051a136270a8ead00ddc017a7aacee1e4927dd7ce7272d8ea259d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe714d7371e1ab3b25d2df3fbc7aa01d4f054d1a7e2ab47825ae48d6f9aa4b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe714d7371e1ab3b25d2df3fbc7aa01d4f054d1a7e2ab47825ae48d6f9aa4b61->enter($__internal_fe714d7371e1ab3b25d2df3fbc7aa01d4f054d1a7e2ab47825ae48d6f9aa4b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fe714d7371e1ab3b25d2df3fbc7aa01d4f054d1a7e2ab47825ae48d6f9aa4b61->leave($__internal_fe714d7371e1ab3b25d2df3fbc7aa01d4f054d1a7e2ab47825ae48d6f9aa4b61_prof);

        
        $__internal_33aad4a9e2051a136270a8ead00ddc017a7aacee1e4927dd7ce7272d8ea259d6->leave($__internal_33aad4a9e2051a136270a8ead00ddc017a7aacee1e4927dd7ce7272d8ea259d6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a69095025c1c20c09440e659be873f42fdd91b9e8ac9317461d7b8a2355aca6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69095025c1c20c09440e659be873f42fdd91b9e8ac9317461d7b8a2355aca6a->enter($__internal_a69095025c1c20c09440e659be873f42fdd91b9e8ac9317461d7b8a2355aca6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d4f4378e9434208c94c0e8c62c04ea36be71d7bc0ffcba2f8087c9413ba7f888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f4378e9434208c94c0e8c62c04ea36be71d7bc0ffcba2f8087c9413ba7f888->enter($__internal_d4f4378e9434208c94c0e8c62c04ea36be71d7bc0ffcba2f8087c9413ba7f888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d4f4378e9434208c94c0e8c62c04ea36be71d7bc0ffcba2f8087c9413ba7f888->leave($__internal_d4f4378e9434208c94c0e8c62c04ea36be71d7bc0ffcba2f8087c9413ba7f888_prof);

        
        $__internal_a69095025c1c20c09440e659be873f42fdd91b9e8ac9317461d7b8a2355aca6a->leave($__internal_a69095025c1c20c09440e659be873f42fdd91b9e8ac9317461d7b8a2355aca6a_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_05f52e0d31e69ce7157d78124e851513f8c872a25df82fe935bdb10f095663eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f52e0d31e69ce7157d78124e851513f8c872a25df82fe935bdb10f095663eb->enter($__internal_05f52e0d31e69ce7157d78124e851513f8c872a25df82fe935bdb10f095663eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26399762b79c4936777e3fcbf548a5659e12d2cb133b1e46e8ed7a05c89c1b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26399762b79c4936777e3fcbf548a5659e12d2cb133b1e46e8ed7a05c89c1b57->enter($__internal_26399762b79c4936777e3fcbf548a5659e12d2cb133b1e46e8ed7a05c89c1b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_26399762b79c4936777e3fcbf548a5659e12d2cb133b1e46e8ed7a05c89c1b57->leave($__internal_26399762b79c4936777e3fcbf548a5659e12d2cb133b1e46e8ed7a05c89c1b57_prof);

        
        $__internal_05f52e0d31e69ce7157d78124e851513f8c872a25df82fe935bdb10f095663eb->leave($__internal_05f52e0d31e69ce7157d78124e851513f8c872a25df82fe935bdb10f095663eb_prof);

    }

    // line 21
    public function block_table($context, array $blocks = array())
    {
        $__internal_d2656779f58fb2b591d20c29c91a10699745ead4780f41de4d46e3e6e2b3eee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2656779f58fb2b591d20c29c91a10699745ead4780f41de4d46e3e6e2b3eee8->enter($__internal_d2656779f58fb2b591d20c29c91a10699745ead4780f41de4d46e3e6e2b3eee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_c4d68908877493a1ee9fdba49cc19d78ba91e4454a78d91d34c3a1a6495764f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d68908877493a1ee9fdba49cc19d78ba91e4454a78d91d34c3a1a6495764f4->enter($__internal_c4d68908877493a1ee9fdba49cc19d78ba91e4454a78d91d34c3a1a6495764f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        
        $__internal_c4d68908877493a1ee9fdba49cc19d78ba91e4454a78d91d34c3a1a6495764f4->leave($__internal_c4d68908877493a1ee9fdba49cc19d78ba91e4454a78d91d34c3a1a6495764f4_prof);

        
        $__internal_d2656779f58fb2b591d20c29c91a10699745ead4780f41de4d46e3e6e2b3eee8->leave($__internal_d2656779f58fb2b591d20c29c91a10699745ead4780f41de4d46e3e6e2b3eee8_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_55b0705b5551ad8d3d8cb742adb595fbada0691b06069b9170a359a7ba2dfb6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b0705b5551ad8d3d8cb742adb595fbada0691b06069b9170a359a7ba2dfb6c->enter($__internal_55b0705b5551ad8d3d8cb742adb595fbada0691b06069b9170a359a7ba2dfb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d44b6f13c2bd98bc27ab7bd041e96c4594e7a3018ca8ab38faed07f52ee130a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d44b6f13c2bd98bc27ab7bd041e96c4594e7a3018ca8ab38faed07f52ee130a6->enter($__internal_d44b6f13c2bd98bc27ab7bd041e96c4594e7a3018ca8ab38faed07f52ee130a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"> </script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

         ";
        
        $__internal_d44b6f13c2bd98bc27ab7bd041e96c4594e7a3018ca8ab38faed07f52ee130a6->leave($__internal_d44b6f13c2bd98bc27ab7bd041e96c4594e7a3018ca8ab38faed07f52ee130a6_prof);

        
        $__internal_55b0705b5551ad8d3d8cb742adb595fbada0691b06069b9170a359a7ba2dfb6c->leave($__internal_55b0705b5551ad8d3d8cb742adb595fbada0691b06069b9170a359a7ba2dfb6c_prof);

    }

    public function getTemplateName()
    {
        return "::base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 26,  177 => 25,  174 => 24,  165 => 23,  148 => 21,  131 => 20,  115 => 9,  111 => 8,  108 => 7,  99 => 6,  81 => 5,  69 => 29,  67 => 23,  64 => 22,  62 => 21,  58 => 20,  51 => 16,  47 => 15,  42 => 14,  40 => 6,  36 => 5,  30 => 1,);
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
                <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('js/datatables.js' )}}\"></script>
    </head>

    <body>
        {% block body %}{% endblock %}  
        {% block table %}{% endblock %}

     {% block javascripts %}

        <script src=\"{{ asset('js/script.js') }}\"> </script>
        <script src=\"{{ asset('js/bootstrap.js') }}\"></script>

         {% endblock %}
    </body>
</html>
", "::base1.html.twig", "/var/www/html/hortala/app/Resources/views/base1.html.twig");
    }
}
