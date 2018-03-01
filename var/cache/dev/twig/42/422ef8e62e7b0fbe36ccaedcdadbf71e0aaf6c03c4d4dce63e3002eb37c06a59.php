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
            'body' => array($this, 'block_body'),
            'table' => array($this, 'block_table'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb34c8c1e7ac866ff223a8c6394ccb9125a5f7f55b9d8dcd103709afb17c9893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb34c8c1e7ac866ff223a8c6394ccb9125a5f7f55b9d8dcd103709afb17c9893->enter($__internal_eb34c8c1e7ac866ff223a8c6394ccb9125a5f7f55b9d8dcd103709afb17c9893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_b665e2bbad056daa48f5f238c9a4879093d5fce3b2e3b8d776744c833e9b2d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b665e2bbad056daa48f5f238c9a4879093d5fce3b2e3b8d776744c833e9b2d37->enter($__internal_b665e2bbad056daa48f5f238c9a4879093d5fce3b2e3b8d776744c833e9b2d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        
        $__internal_eb34c8c1e7ac866ff223a8c6394ccb9125a5f7f55b9d8dcd103709afb17c9893->leave($__internal_eb34c8c1e7ac866ff223a8c6394ccb9125a5f7f55b9d8dcd103709afb17c9893_prof);

        
        $__internal_b665e2bbad056daa48f5f238c9a4879093d5fce3b2e3b8d776744c833e9b2d37->leave($__internal_b665e2bbad056daa48f5f238c9a4879093d5fce3b2e3b8d776744c833e9b2d37_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_937f8ebe45d424d2dbe28945de6a873a844e0b49917538b0ac8d56de0a8c10d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_937f8ebe45d424d2dbe28945de6a873a844e0b49917538b0ac8d56de0a8c10d3->enter($__internal_937f8ebe45d424d2dbe28945de6a873a844e0b49917538b0ac8d56de0a8c10d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_241ad5903d262e75afcf9a73e8f443ededd91b1c44b2be8f7411993ea51f2a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241ad5903d262e75afcf9a73e8f443ededd91b1c44b2be8f7411993ea51f2a06->enter($__internal_241ad5903d262e75afcf9a73e8f443ededd91b1c44b2be8f7411993ea51f2a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_241ad5903d262e75afcf9a73e8f443ededd91b1c44b2be8f7411993ea51f2a06->leave($__internal_241ad5903d262e75afcf9a73e8f443ededd91b1c44b2be8f7411993ea51f2a06_prof);

        
        $__internal_937f8ebe45d424d2dbe28945de6a873a844e0b49917538b0ac8d56de0a8c10d3->leave($__internal_937f8ebe45d424d2dbe28945de6a873a844e0b49917538b0ac8d56de0a8c10d3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d2571bef10fd56af64f43694b8106c3680b6e5cffe1901c68481405a0553b4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2571bef10fd56af64f43694b8106c3680b6e5cffe1901c68481405a0553b4f6->enter($__internal_d2571bef10fd56af64f43694b8106c3680b6e5cffe1901c68481405a0553b4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_20c49895d2b321c8a5826dfbf236e29ed54feee329d2dc85c0ba87963883563a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c49895d2b321c8a5826dfbf236e29ed54feee329d2dc85c0ba87963883563a->enter($__internal_20c49895d2b321c8a5826dfbf236e29ed54feee329d2dc85c0ba87963883563a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_20c49895d2b321c8a5826dfbf236e29ed54feee329d2dc85c0ba87963883563a->leave($__internal_20c49895d2b321c8a5826dfbf236e29ed54feee329d2dc85c0ba87963883563a_prof);

        
        $__internal_d2571bef10fd56af64f43694b8106c3680b6e5cffe1901c68481405a0553b4f6->leave($__internal_d2571bef10fd56af64f43694b8106c3680b6e5cffe1901c68481405a0553b4f6_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_31efc20742a42e3ef6668d216d7e1a048867fef92b42685c35f9e4a145a43800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31efc20742a42e3ef6668d216d7e1a048867fef92b42685c35f9e4a145a43800->enter($__internal_31efc20742a42e3ef6668d216d7e1a048867fef92b42685c35f9e4a145a43800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10563179ff4599e1a64dd7dd35733bace84102d1e46bcf7072d36c48dd1f5e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10563179ff4599e1a64dd7dd35733bace84102d1e46bcf7072d36c48dd1f5e74->enter($__internal_10563179ff4599e1a64dd7dd35733bace84102d1e46bcf7072d36c48dd1f5e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_10563179ff4599e1a64dd7dd35733bace84102d1e46bcf7072d36c48dd1f5e74->leave($__internal_10563179ff4599e1a64dd7dd35733bace84102d1e46bcf7072d36c48dd1f5e74_prof);

        
        $__internal_31efc20742a42e3ef6668d216d7e1a048867fef92b42685c35f9e4a145a43800->leave($__internal_31efc20742a42e3ef6668d216d7e1a048867fef92b42685c35f9e4a145a43800_prof);

    }

    // line 21
    public function block_table($context, array $blocks = array())
    {
        $__internal_571b75a5db708817215b47c83ec3ab56d2a861a5636d4a77b38653b10c1457d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571b75a5db708817215b47c83ec3ab56d2a861a5636d4a77b38653b10c1457d8->enter($__internal_571b75a5db708817215b47c83ec3ab56d2a861a5636d4a77b38653b10c1457d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_9676fb5dd88fecc21ca4b13b302572c991c0afceeea165d04b647a83b07376cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9676fb5dd88fecc21ca4b13b302572c991c0afceeea165d04b647a83b07376cf->enter($__internal_9676fb5dd88fecc21ca4b13b302572c991c0afceeea165d04b647a83b07376cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        
        $__internal_9676fb5dd88fecc21ca4b13b302572c991c0afceeea165d04b647a83b07376cf->leave($__internal_9676fb5dd88fecc21ca4b13b302572c991c0afceeea165d04b647a83b07376cf_prof);

        
        $__internal_571b75a5db708817215b47c83ec3ab56d2a861a5636d4a77b38653b10c1457d8->leave($__internal_571b75a5db708817215b47c83ec3ab56d2a861a5636d4a77b38653b10c1457d8_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5fcdd5a15b155dd011a3553b76cc2ce4270e3a5996f786be1bc2efac70135f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fcdd5a15b155dd011a3553b76cc2ce4270e3a5996f786be1bc2efac70135f7a->enter($__internal_5fcdd5a15b155dd011a3553b76cc2ce4270e3a5996f786be1bc2efac70135f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2b54dc0308a004cd5b2177379917ecc9714fb5a9cf2389045be2e22681a08146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b54dc0308a004cd5b2177379917ecc9714fb5a9cf2389045be2e22681a08146->enter($__internal_2b54dc0308a004cd5b2177379917ecc9714fb5a9cf2389045be2e22681a08146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2b54dc0308a004cd5b2177379917ecc9714fb5a9cf2389045be2e22681a08146->leave($__internal_2b54dc0308a004cd5b2177379917ecc9714fb5a9cf2389045be2e22681a08146_prof);

        
        $__internal_5fcdd5a15b155dd011a3553b76cc2ce4270e3a5996f786be1bc2efac70135f7a->leave($__internal_5fcdd5a15b155dd011a3553b76cc2ce4270e3a5996f786be1bc2efac70135f7a_prof);

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
", "base1.html.twig", "/var/www/html/testhortala/app/Resources/views/base1.html.twig");
    }
}
