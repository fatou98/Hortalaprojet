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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8568b53efa546de3fd0d2dfe34dbaf3a2f109b5ba522a971be38d82bb91b83c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8568b53efa546de3fd0d2dfe34dbaf3a2f109b5ba522a971be38d82bb91b83c->enter($__internal_a8568b53efa546de3fd0d2dfe34dbaf3a2f109b5ba522a971be38d82bb91b83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_7cbb1fd56d6886794e2d41ef7014aeb80e1a37d6ed7ef4cc946e4aa4b3fdb3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbb1fd56d6886794e2d41ef7014aeb80e1a37d6ed7ef4cc946e4aa4b3fdb3a7->enter($__internal_7cbb1fd56d6886794e2d41ef7014aeb80e1a37d6ed7ef4cc946e4aa4b3fdb3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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


     ";
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
        // line 137
        echo "    </body>
</html>";
        
        $__internal_a8568b53efa546de3fd0d2dfe34dbaf3a2f109b5ba522a971be38d82bb91b83c->leave($__internal_a8568b53efa546de3fd0d2dfe34dbaf3a2f109b5ba522a971be38d82bb91b83c_prof);

        
        $__internal_7cbb1fd56d6886794e2d41ef7014aeb80e1a37d6ed7ef4cc946e4aa4b3fdb3a7->leave($__internal_7cbb1fd56d6886794e2d41ef7014aeb80e1a37d6ed7ef4cc946e4aa4b3fdb3a7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_581982aeeafbb1a6d0ce8588a0dc85bc89c85f410d9cb518467f81158c564b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_581982aeeafbb1a6d0ce8588a0dc85bc89c85f410d9cb518467f81158c564b20->enter($__internal_581982aeeafbb1a6d0ce8588a0dc85bc89c85f410d9cb518467f81158c564b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82106cc9f8766148e87c0b11721c6cc6060833975363c31abc2d776324053741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82106cc9f8766148e87c0b11721c6cc6060833975363c31abc2d776324053741->enter($__internal_82106cc9f8766148e87c0b11721c6cc6060833975363c31abc2d776324053741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_82106cc9f8766148e87c0b11721c6cc6060833975363c31abc2d776324053741->leave($__internal_82106cc9f8766148e87c0b11721c6cc6060833975363c31abc2d776324053741_prof);

        
        $__internal_581982aeeafbb1a6d0ce8588a0dc85bc89c85f410d9cb518467f81158c564b20->leave($__internal_581982aeeafbb1a6d0ce8588a0dc85bc89c85f410d9cb518467f81158c564b20_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e03f4b3b72906bd1bea42b6032efc48c63d461154406642957b320eae8ac121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e03f4b3b72906bd1bea42b6032efc48c63d461154406642957b320eae8ac121->enter($__internal_0e03f4b3b72906bd1bea42b6032efc48c63d461154406642957b320eae8ac121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1f1b82e7ba99c52bdaf4a5eec3715587d106a3ccce915f003c201252f30de1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1b82e7ba99c52bdaf4a5eec3715587d106a3ccce915f003c201252f30de1da->enter($__internal_1f1b82e7ba99c52bdaf4a5eec3715587d106a3ccce915f003c201252f30de1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1f1b82e7ba99c52bdaf4a5eec3715587d106a3ccce915f003c201252f30de1da->leave($__internal_1f1b82e7ba99c52bdaf4a5eec3715587d106a3ccce915f003c201252f30de1da_prof);

        
        $__internal_0e03f4b3b72906bd1bea42b6032efc48c63d461154406642957b320eae8ac121->leave($__internal_0e03f4b3b72906bd1bea42b6032efc48c63d461154406642957b320eae8ac121_prof);

    }

    // line 52
    public function block_suggetions($context, array $blocks = array())
    {
        $__internal_291b49220f4e50057bce779ec4581e1940520e0f5ca5457c186ea32c75580a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_291b49220f4e50057bce779ec4581e1940520e0f5ca5457c186ea32c75580a24->enter($__internal_291b49220f4e50057bce779ec4581e1940520e0f5ca5457c186ea32c75580a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "suggetions"));

        $__internal_9a1a54d24d96b2aa600bc9babfd9108b26946bb3de97ff09e4c7f8ec1222ace4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1a54d24d96b2aa600bc9babfd9108b26946bb3de97ff09e4c7f8ec1222ace4->enter($__internal_9a1a54d24d96b2aa600bc9babfd9108b26946bb3de97ff09e4c7f8ec1222ace4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "suggetions"));

        // line 53
        echo "        ";
        
        $__internal_9a1a54d24d96b2aa600bc9babfd9108b26946bb3de97ff09e4c7f8ec1222ace4->leave($__internal_9a1a54d24d96b2aa600bc9babfd9108b26946bb3de97ff09e4c7f8ec1222ace4_prof);

        
        $__internal_291b49220f4e50057bce779ec4581e1940520e0f5ca5457c186ea32c75580a24->leave($__internal_291b49220f4e50057bce779ec4581e1940520e0f5ca5457c186ea32c75580a24_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5593d792867b158031be2683479f97b7cbdb1ff8a5c8f4c6e385a51cbe0a6fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5593d792867b158031be2683479f97b7cbdb1ff8a5c8f4c6e385a51cbe0a6fa4->enter($__internal_5593d792867b158031be2683479f97b7cbdb1ff8a5c8f4c6e385a51cbe0a6fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f843aad6596db920120262a296379dffc784d0e96c982c4c127a0daf3c3fc9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f843aad6596db920120262a296379dffc784d0e96c982c4c127a0daf3c3fc9f->enter($__internal_6f843aad6596db920120262a296379dffc784d0e96c982c4c127a0daf3c3fc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
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
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

        ";
        
        $__internal_6f843aad6596db920120262a296379dffc784d0e96c982c4c127a0daf3c3fc9f->leave($__internal_6f843aad6596db920120262a296379dffc784d0e96c982c4c127a0daf3c3fc9f_prof);

        
        $__internal_5593d792867b158031be2683479f97b7cbdb1ff8a5c8f4c6e385a51cbe0a6fa4->leave($__internal_5593d792867b158031be2683479f97b7cbdb1ff8a5c8f4c6e385a51cbe0a6fa4_prof);

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
        return array (  263 => 132,  257 => 129,  242 => 116,  233 => 115,  223 => 53,  214 => 52,  195 => 8,  192 => 7,  183 => 6,  165 => 5,  154 => 137,  152 => 115,  115 => 81,  89 => 58,  83 => 54,  81 => 52,  41 => 16,  39 => 6,  35 => 5,  29 => 1,);
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
