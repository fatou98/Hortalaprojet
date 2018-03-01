<?php

/* ::layout.html.twig */
class __TwigTemplate_e772e6caa04b5254c9095cc6ba40c5b37200b8a39fb6b31aee4fdfcf9ebc6ef5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'suggetions' => array($this, 'block_suggetions'),
            'autres' => array($this, 'block_autres'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1eb1d5f92684968305e732c6277c70c86037bf437976143e976e3e3df9ff3a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb1d5f92684968305e732c6277c70c86037bf437976143e976e3e3df9ff3a46->enter($__internal_1eb1d5f92684968305e732c6277c70c86037bf437976143e976e3e3df9ff3a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_a27a996ed1507329a173c31acc5d17fa777aaeddb6e1f45542429a2e38502caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27a996ed1507329a173c31acc5d17fa777aaeddb6e1f45542429a2e38502caf->enter($__internal_a27a996ed1507329a173c31acc5d17fa777aaeddb6e1f45542429a2e38502caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 16
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
<body>
    <style>
        section{
            display: flex;
            border-top: 2px solid black;
            border-bottom: 2px solid black;
            margin-bottom: 100px;

        }
        .article{
            width: auto;display: flex;
        }
        .aside{
            width: 400px;;
           padding: 0px;display: flex;
        }
        .imgpetit{
            display: flex;
        }
        .desc{
            padding-top: 70px;width: 300px;
        }
        form{
            padding: 20px;
            border: 1px solid black;
        }
        .row{
            padding: 0px;
        }

    </style>
    <div class=\"container\">

<section class=\"row\">
      ";
        // line 52
        $this->displayBlock('suggetions', $context, $blocks);
        // line 54
        echo "
    <aside class=\"col-lg-6 aside\"><form id=\"connexion\" method=\"post\">
        <div class=\"card-header\"> <h2>CONNEXION</h2></div><hr>
                  <input type=\"hidden\" class=\"form-control\" name=\"form\" placeholder=\"\" value=\"connexion\">
    <input type=\"hidden\" class=\"form-control\" name=\"idBien\" placeholder=\"\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "id", array()), "html", null, true);
        echo "\">

  <div class=\"form-group\">
    <label for=\"formGroupExampleInput\">Email</label>
    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"example@example.com\">
  </div>
  <div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Password</label>
    <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"enter your password\"></div>

           <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        <p>  Vous etes nouveau? <a type=\"submit\" class=\"fa fa-arrow-right\" href=\"#\" id=\"inscrire\">Inscrivez-vous</a>
      </p>

</form>

        <form id=\"inscription\" method=\"post\">
               <div class=\"card-header\"> <h2>Inscription</h2><hr>

            <div class=\"row\">
  <div class=\"form-group col-md-6\">
          <input type=\"hidden\" class=\"form-control\" name=\"form\" placeholder=\"\" value=\"inscription\">

    <input type=\"hidden\" class=\"form-control\" name=\"idBien\" placeholder=\"\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "id", array()), "html", null, true);
        echo "\">

      <label for=\"formGroupExampleInput2\">Numpiece</label>
    <input type=\"number\" class=\"form-control\" name=\"numpiece\" placeholder=\"enter your cni\" value=\"\">
  </div> <div class=\"form-group col-md-6\">
    <label for=\"formGroupExampleInput\">Nom</label>
    <input type=\"text\" class=\"form-control\" name=\"nomComplet\" placeholder=\"entrez votre nom\" value=\"\">
  </div>
                </div>
  <div class=\"form-group\">
       <label for=\"formGroupExampleInput2\">TEL</label>
    <input type=\"number\" class=\"form-control\" name=\"tel\" placeholder=\"enrter votre numero \" value=\"\">
                   </div><div class=\"form-group\">
       <label for=\"formGroupExampleInput2\">Adresse</label>
    <input type=\"text\" class=\"form-control\" name=\"adresse\" placeholder=\"entrer votre addresse\" value=\"\">
                   </div>
    <br><div class=\"form-group\">   <label for=\"formGroupExampleInput2\">Email</label>
    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"entrer votre email\" value=\"\">
                   </div>
           <br>
       <div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Password</label>
    <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"entrer votre password\" value=\"\"></div>

           <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        <p>  <a type=\"submit\" class=\"fa fa-arrow-right\" href=\"#\" id=\"conect\">se connecter</a>
      </p>
            </div>

</form>
    </aside>
  </section>
  <div class='row'>
  ";
        // line 114
        $this->displayBlock('autres', $context, $blocks);
        // line 116
        echo "  </div>


     ";
        // line 119
        $this->displayBlock('javascripts', $context, $blocks);
        // line 141
        echo "    </body>
</html>";
        
        $__internal_1eb1d5f92684968305e732c6277c70c86037bf437976143e976e3e3df9ff3a46->leave($__internal_1eb1d5f92684968305e732c6277c70c86037bf437976143e976e3e3df9ff3a46_prof);

        
        $__internal_a27a996ed1507329a173c31acc5d17fa777aaeddb6e1f45542429a2e38502caf->leave($__internal_a27a996ed1507329a173c31acc5d17fa777aaeddb6e1f45542429a2e38502caf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_524e5ae38071ec39ca3a714488872da33b9b43e4e43ac8839c87b49b5c239264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524e5ae38071ec39ca3a714488872da33b9b43e4e43ac8839c87b49b5c239264->enter($__internal_524e5ae38071ec39ca3a714488872da33b9b43e4e43ac8839c87b49b5c239264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4bab3d8bcb89b1a0831eadba38680dea5879e4f7368d04c1eaef95836f0080e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bab3d8bcb89b1a0831eadba38680dea5879e4f7368d04c1eaef95836f0080e->enter($__internal_b4bab3d8bcb89b1a0831eadba38680dea5879e4f7368d04c1eaef95836f0080e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b4bab3d8bcb89b1a0831eadba38680dea5879e4f7368d04c1eaef95836f0080e->leave($__internal_b4bab3d8bcb89b1a0831eadba38680dea5879e4f7368d04c1eaef95836f0080e_prof);

        
        $__internal_524e5ae38071ec39ca3a714488872da33b9b43e4e43ac8839c87b49b5c239264->leave($__internal_524e5ae38071ec39ca3a714488872da33b9b43e4e43ac8839c87b49b5c239264_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ebd9f8ae93fc4ad9a74ac26c182d2c4d1e63edb1bc8d205c157de902bce3263a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd9f8ae93fc4ad9a74ac26c182d2c4d1e63edb1bc8d205c157de902bce3263a->enter($__internal_ebd9f8ae93fc4ad9a74ac26c182d2c4d1e63edb1bc8d205c157de902bce3263a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b261699d0ad232edd9f15e2f80c4874811f08006bd924bfdc8c8122effe7e5c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b261699d0ad232edd9f15e2f80c4874811f08006bd924bfdc8c8122effe7e5c0->enter($__internal_b261699d0ad232edd9f15e2f80c4874811f08006bd924bfdc8c8122effe7e5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
          <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
   <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>

";
        
        $__internal_b261699d0ad232edd9f15e2f80c4874811f08006bd924bfdc8c8122effe7e5c0->leave($__internal_b261699d0ad232edd9f15e2f80c4874811f08006bd924bfdc8c8122effe7e5c0_prof);

        
        $__internal_ebd9f8ae93fc4ad9a74ac26c182d2c4d1e63edb1bc8d205c157de902bce3263a->leave($__internal_ebd9f8ae93fc4ad9a74ac26c182d2c4d1e63edb1bc8d205c157de902bce3263a_prof);

    }

    // line 52
    public function block_suggetions($context, array $blocks = array())
    {
        $__internal_fd68faa4748ee874b4c4677ea18298078b76f6abdfd6983a21159ff465824b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd68faa4748ee874b4c4677ea18298078b76f6abdfd6983a21159ff465824b58->enter($__internal_fd68faa4748ee874b4c4677ea18298078b76f6abdfd6983a21159ff465824b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "suggetions"));

        $__internal_5280d6086617b4ab208abb1cff5bf71ee22577156a0074a7f614ffe5bcb47008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5280d6086617b4ab208abb1cff5bf71ee22577156a0074a7f614ffe5bcb47008->enter($__internal_5280d6086617b4ab208abb1cff5bf71ee22577156a0074a7f614ffe5bcb47008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "suggetions"));

        // line 53
        echo "        ";
        
        $__internal_5280d6086617b4ab208abb1cff5bf71ee22577156a0074a7f614ffe5bcb47008->leave($__internal_5280d6086617b4ab208abb1cff5bf71ee22577156a0074a7f614ffe5bcb47008_prof);

        
        $__internal_fd68faa4748ee874b4c4677ea18298078b76f6abdfd6983a21159ff465824b58->leave($__internal_fd68faa4748ee874b4c4677ea18298078b76f6abdfd6983a21159ff465824b58_prof);

    }

    // line 114
    public function block_autres($context, array $blocks = array())
    {
        $__internal_97e2c2001a54113a7c16efea0125ccacabdd3e25af900bb734192bb5966700cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e2c2001a54113a7c16efea0125ccacabdd3e25af900bb734192bb5966700cc->enter($__internal_97e2c2001a54113a7c16efea0125ccacabdd3e25af900bb734192bb5966700cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "autres"));

        $__internal_248a01e471fc1b70f339af56a54316db6cdd42588799c7c8bd0765c9e0a6c176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248a01e471fc1b70f339af56a54316db6cdd42588799c7c8bd0765c9e0a6c176->enter($__internal_248a01e471fc1b70f339af56a54316db6cdd42588799c7c8bd0765c9e0a6c176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "autres"));

        // line 115
        echo "  ";
        
        $__internal_248a01e471fc1b70f339af56a54316db6cdd42588799c7c8bd0765c9e0a6c176->leave($__internal_248a01e471fc1b70f339af56a54316db6cdd42588799c7c8bd0765c9e0a6c176_prof);

        
        $__internal_97e2c2001a54113a7c16efea0125ccacabdd3e25af900bb734192bb5966700cc->leave($__internal_97e2c2001a54113a7c16efea0125ccacabdd3e25af900bb734192bb5966700cc_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_040e56e8b1d00c484bf11ce3c382c8df6c8cc6300663d1b9f005826ffc6e731b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040e56e8b1d00c484bf11ce3c382c8df6c8cc6300663d1b9f005826ffc6e731b->enter($__internal_040e56e8b1d00c484bf11ce3c382c8df6c8cc6300663d1b9f005826ffc6e731b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fbf07b90f931bda766537f28b1b2b7aebda03e5d82e725ecb9000ff9e7c290e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf07b90f931bda766537f28b1b2b7aebda03e5d82e725ecb9000ff9e7c290e5->enter($__internal_fbf07b90f931bda766537f28b1b2b7aebda03e5d82e725ecb9000ff9e7c290e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 120
        echo "<script>
    \$(document).ready(function(){
                    \$(\"#inscription\").hide();
        \$(\"#inscrire\").on(\"click\",function(){
            \$(\"#connexion\").hide();
                                \$(\"#inscription\").show();

        });
                \$(\"#conect\").on(\"click\",function(){
\$(\"#connexion\").show(); \$(\"#inscription\").hide();
         });
    });
    </script>
     <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

        ";
        
        $__internal_fbf07b90f931bda766537f28b1b2b7aebda03e5d82e725ecb9000ff9e7c290e5->leave($__internal_fbf07b90f931bda766537f28b1b2b7aebda03e5d82e725ecb9000ff9e7c290e5_prof);

        
        $__internal_040e56e8b1d00c484bf11ce3c382c8df6c8cc6300663d1b9f005826ffc6e731b->leave($__internal_040e56e8b1d00c484bf11ce3c382c8df6c8cc6300663d1b9f005826ffc6e731b_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 136,  283 => 133,  268 => 120,  259 => 119,  249 => 115,  240 => 114,  230 => 53,  221 => 52,  202 => 8,  199 => 7,  190 => 6,  172 => 5,  161 => 141,  159 => 119,  154 => 116,  152 => 114,  116 => 81,  90 => 58,  84 => 54,  82 => 52,  42 => 16,  40 => 6,  36 => 5,  30 => 1,);
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
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
   <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>

{% endblock %}        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
<body>
    <style>
        section{
            display: flex;
            border-top: 2px solid black;
            border-bottom: 2px solid black;
            margin-bottom: 100px;

        }
        .article{
            width: auto;display: flex;
        }
        .aside{
            width: 400px;;
           padding: 0px;display: flex;
        }
        .imgpetit{
            display: flex;
        }
        .desc{
            padding-top: 70px;width: 300px;
        }
        form{
            padding: 20px;
            border: 1px solid black;
        }
        .row{
            padding: 0px;
        }

    </style>
    <div class=\"container\">

<section class=\"row\">
      {% block suggetions %}
        {% endblock %}

    <aside class=\"col-lg-6 aside\"><form id=\"connexion\" method=\"post\">
        <div class=\"card-header\"> <h2>CONNEXION</h2></div><hr>
                  <input type=\"hidden\" class=\"form-control\" name=\"form\" placeholder=\"\" value=\"connexion\">
    <input type=\"hidden\" class=\"form-control\" name=\"idBien\" placeholder=\"\" value=\"{{ biens[0].id }}\">

  <div class=\"form-group\">
    <label for=\"formGroupExampleInput\">Email</label>
    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"example@example.com\">
  </div>
  <div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Password</label>
    <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"enter your password\"></div>

           <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        <p>  Vous etes nouveau? <a type=\"submit\" class=\"fa fa-arrow-right\" href=\"#\" id=\"inscrire\">Inscrivez-vous</a>
      </p>

</form>

        <form id=\"inscription\" method=\"post\">
               <div class=\"card-header\"> <h2>Inscription</h2><hr>

            <div class=\"row\">
  <div class=\"form-group col-md-6\">
          <input type=\"hidden\" class=\"form-control\" name=\"form\" placeholder=\"\" value=\"inscription\">

    <input type=\"hidden\" class=\"form-control\" name=\"idBien\" placeholder=\"\" value=\"{{ biens[0].id }}\">

      <label for=\"formGroupExampleInput2\">Numpiece</label>
    <input type=\"number\" class=\"form-control\" name=\"numpiece\" placeholder=\"enter your cni\" value=\"\">
  </div> <div class=\"form-group col-md-6\">
    <label for=\"formGroupExampleInput\">Nom</label>
    <input type=\"text\" class=\"form-control\" name=\"nomComplet\" placeholder=\"entrez votre nom\" value=\"\">
  </div>
                </div>
  <div class=\"form-group\">
       <label for=\"formGroupExampleInput2\">TEL</label>
    <input type=\"number\" class=\"form-control\" name=\"tel\" placeholder=\"enrter votre numero \" value=\"\">
                   </div><div class=\"form-group\">
       <label for=\"formGroupExampleInput2\">Adresse</label>
    <input type=\"text\" class=\"form-control\" name=\"adresse\" placeholder=\"entrer votre addresse\" value=\"\">
                   </div>
    <br><div class=\"form-group\">   <label for=\"formGroupExampleInput2\">Email</label>
    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"entrer votre email\" value=\"\">
                   </div>
           <br>
       <div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Password</label>
    <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"entrer votre password\" value=\"\"></div>

           <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        <p>  <a type=\"submit\" class=\"fa fa-arrow-right\" href=\"#\" id=\"conect\">se connecter</a>
      </p>
            </div>

</form>
    </aside>
  </section>
  <div class='row'>
  {% block autres %}
  {% endblock  %}
  </div>


     {% block javascripts %}
<script>
    \$(document).ready(function(){
                    \$(\"#inscription\").hide();
        \$(\"#inscrire\").on(\"click\",function(){
            \$(\"#connexion\").hide();
                                \$(\"#inscription\").show();

        });
                \$(\"#conect\").on(\"click\",function(){
\$(\"#connexion\").show(); \$(\"#inscription\").hide();
         });
    });
    </script>
     <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
     <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

        {% endblock %}
    </body>
</html>", "::layout.html.twig", "/var/www/html/hortala/app/Resources/views/layout.html.twig");
    }
}
