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
        $__internal_e5ab32bed9b1c9b98334a9e8a283efdadedea89e174a7b4c528abc5f5262c148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5ab32bed9b1c9b98334a9e8a283efdadedea89e174a7b4c528abc5f5262c148->enter($__internal_e5ab32bed9b1c9b98334a9e8a283efdadedea89e174a7b4c528abc5f5262c148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_8192c7f298fa699797c58d4b8b85ab0c49899cd448afdf2a37d4b3e40d2fdda6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8192c7f298fa699797c58d4b8b85ab0c49899cd448afdf2a37d4b3e40d2fdda6->enter($__internal_8192c7f298fa699797c58d4b8b85ab0c49899cd448afdf2a37d4b3e40d2fdda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_e5ab32bed9b1c9b98334a9e8a283efdadedea89e174a7b4c528abc5f5262c148->leave($__internal_e5ab32bed9b1c9b98334a9e8a283efdadedea89e174a7b4c528abc5f5262c148_prof);

        
        $__internal_8192c7f298fa699797c58d4b8b85ab0c49899cd448afdf2a37d4b3e40d2fdda6->leave($__internal_8192c7f298fa699797c58d4b8b85ab0c49899cd448afdf2a37d4b3e40d2fdda6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c26c8f2314c68718bf3853aa932b6f4c8f8d876d50149966a5c51e672e0a05a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c26c8f2314c68718bf3853aa932b6f4c8f8d876d50149966a5c51e672e0a05a2->enter($__internal_c26c8f2314c68718bf3853aa932b6f4c8f8d876d50149966a5c51e672e0a05a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e3949defb4ba5186f1eade37ae7d2941c000fb9ece4669fc292e51f9fb81d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3949defb4ba5186f1eade37ae7d2941c000fb9ece4669fc292e51f9fb81d9a->enter($__internal_1e3949defb4ba5186f1eade37ae7d2941c000fb9ece4669fc292e51f9fb81d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1e3949defb4ba5186f1eade37ae7d2941c000fb9ece4669fc292e51f9fb81d9a->leave($__internal_1e3949defb4ba5186f1eade37ae7d2941c000fb9ece4669fc292e51f9fb81d9a_prof);

        
        $__internal_c26c8f2314c68718bf3853aa932b6f4c8f8d876d50149966a5c51e672e0a05a2->leave($__internal_c26c8f2314c68718bf3853aa932b6f4c8f8d876d50149966a5c51e672e0a05a2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2baedc2b88fa5187d7f827d59ab018e5b82dcce470182ccf406cab0ae4ac5145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2baedc2b88fa5187d7f827d59ab018e5b82dcce470182ccf406cab0ae4ac5145->enter($__internal_2baedc2b88fa5187d7f827d59ab018e5b82dcce470182ccf406cab0ae4ac5145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c8c17c9d4336a07871a52e2254c205a6996a3c5547384f0dfb4c3fe23f3ca47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c17c9d4336a07871a52e2254c205a6996a3c5547384f0dfb4c3fe23f3ca47e->enter($__internal_c8c17c9d4336a07871a52e2254c205a6996a3c5547384f0dfb4c3fe23f3ca47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c8c17c9d4336a07871a52e2254c205a6996a3c5547384f0dfb4c3fe23f3ca47e->leave($__internal_c8c17c9d4336a07871a52e2254c205a6996a3c5547384f0dfb4c3fe23f3ca47e_prof);

        
        $__internal_2baedc2b88fa5187d7f827d59ab018e5b82dcce470182ccf406cab0ae4ac5145->leave($__internal_2baedc2b88fa5187d7f827d59ab018e5b82dcce470182ccf406cab0ae4ac5145_prof);

    }

    // line 52
    public function block_suggetions($context, array $blocks = array())
    {
        $__internal_43dcd25b6adeaa74292f592e38307852292fed2d8b2e0527c0a4d1dde48d3d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43dcd25b6adeaa74292f592e38307852292fed2d8b2e0527c0a4d1dde48d3d56->enter($__internal_43dcd25b6adeaa74292f592e38307852292fed2d8b2e0527c0a4d1dde48d3d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "suggetions"));

        $__internal_38438de7a8ab0d7580ecf79c395ca44e1efe3878af3c85713887cb9c6081a38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38438de7a8ab0d7580ecf79c395ca44e1efe3878af3c85713887cb9c6081a38f->enter($__internal_38438de7a8ab0d7580ecf79c395ca44e1efe3878af3c85713887cb9c6081a38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "suggetions"));

        // line 53
        echo "        ";
        
        $__internal_38438de7a8ab0d7580ecf79c395ca44e1efe3878af3c85713887cb9c6081a38f->leave($__internal_38438de7a8ab0d7580ecf79c395ca44e1efe3878af3c85713887cb9c6081a38f_prof);

        
        $__internal_43dcd25b6adeaa74292f592e38307852292fed2d8b2e0527c0a4d1dde48d3d56->leave($__internal_43dcd25b6adeaa74292f592e38307852292fed2d8b2e0527c0a4d1dde48d3d56_prof);

    }

    // line 114
    public function block_autres($context, array $blocks = array())
    {
        $__internal_32969d4366279ec8803a7fec16eab661924b4b8d796020ea18eb1f40d0f5da11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32969d4366279ec8803a7fec16eab661924b4b8d796020ea18eb1f40d0f5da11->enter($__internal_32969d4366279ec8803a7fec16eab661924b4b8d796020ea18eb1f40d0f5da11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "autres"));

        $__internal_48a51cb460de639ea57034e43cef5766b9784c41020707e23adff6c9e8bc977e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a51cb460de639ea57034e43cef5766b9784c41020707e23adff6c9e8bc977e->enter($__internal_48a51cb460de639ea57034e43cef5766b9784c41020707e23adff6c9e8bc977e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "autres"));

        // line 115
        echo "  ";
        
        $__internal_48a51cb460de639ea57034e43cef5766b9784c41020707e23adff6c9e8bc977e->leave($__internal_48a51cb460de639ea57034e43cef5766b9784c41020707e23adff6c9e8bc977e_prof);

        
        $__internal_32969d4366279ec8803a7fec16eab661924b4b8d796020ea18eb1f40d0f5da11->leave($__internal_32969d4366279ec8803a7fec16eab661924b4b8d796020ea18eb1f40d0f5da11_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e0c851e09ac03f72670032ba3e03690be339afac56789e97b467f4a1c0c9449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0c851e09ac03f72670032ba3e03690be339afac56789e97b467f4a1c0c9449->enter($__internal_7e0c851e09ac03f72670032ba3e03690be339afac56789e97b467f4a1c0c9449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a723c81aa1357b00f457b4ef3d99f2248eaa597575071130021e3f6108dd39da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a723c81aa1357b00f457b4ef3d99f2248eaa597575071130021e3f6108dd39da->enter($__internal_a723c81aa1357b00f457b4ef3d99f2248eaa597575071130021e3f6108dd39da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a723c81aa1357b00f457b4ef3d99f2248eaa597575071130021e3f6108dd39da->leave($__internal_a723c81aa1357b00f457b4ef3d99f2248eaa597575071130021e3f6108dd39da_prof);

        
        $__internal_7e0c851e09ac03f72670032ba3e03690be339afac56789e97b467f4a1c0c9449->leave($__internal_7e0c851e09ac03f72670032ba3e03690be339afac56789e97b467f4a1c0c9449_prof);

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
