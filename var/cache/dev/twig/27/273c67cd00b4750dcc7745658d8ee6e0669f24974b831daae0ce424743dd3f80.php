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
        $__internal_f0846f2c02d2d375d1a34df977aef61b4d90683a1ab267d63cc584668977ea39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0846f2c02d2d375d1a34df977aef61b4d90683a1ab267d63cc584668977ea39->enter($__internal_f0846f2c02d2d375d1a34df977aef61b4d90683a1ab267d63cc584668977ea39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_b4bc16bf12a6d3bb47b2b6ebb57a03ef73a4bce6947501bf6ce81f0afc8cbe1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bc16bf12a6d3bb47b2b6ebb57a03ef73a4bce6947501bf6ce81f0afc8cbe1d->enter($__internal_b4bc16bf12a6d3bb47b2b6ebb57a03ef73a4bce6947501bf6ce81f0afc8cbe1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
    <aside class=\"col-lg-6 aside\"><form id=\"connexion\">
        <div class=\"card-header\"> <h2>CONNEXION</h2></div><hr>
                  <input type=\"hidden\" class=\"form-control\" name=\"form\" placeholder=\"\" value=\"connexion\">

  <div class=\"form-group\">
    <label for=\"formGroupExampleInput\">Email</label>
    <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"example@example.com\">
  </div>
  <div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Password</label>
    <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"enter your password\"></div>
           
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
        // line 80
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
        // line 114
        $this->displayBlock('javascripts', $context, $blocks);
        // line 136
        echo "    </body>
</html>";
        
        $__internal_f0846f2c02d2d375d1a34df977aef61b4d90683a1ab267d63cc584668977ea39->leave($__internal_f0846f2c02d2d375d1a34df977aef61b4d90683a1ab267d63cc584668977ea39_prof);

        
        $__internal_b4bc16bf12a6d3bb47b2b6ebb57a03ef73a4bce6947501bf6ce81f0afc8cbe1d->leave($__internal_b4bc16bf12a6d3bb47b2b6ebb57a03ef73a4bce6947501bf6ce81f0afc8cbe1d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b8a09466af509ca81e107efec3f9884a9a0d17711774267c99c08bd7b299a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b8a09466af509ca81e107efec3f9884a9a0d17711774267c99c08bd7b299a52->enter($__internal_1b8a09466af509ca81e107efec3f9884a9a0d17711774267c99c08bd7b299a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da063371c6e80cde421ca1d3a23d7c1283f3b6e995004e37fa294e3c5428bf56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da063371c6e80cde421ca1d3a23d7c1283f3b6e995004e37fa294e3c5428bf56->enter($__internal_da063371c6e80cde421ca1d3a23d7c1283f3b6e995004e37fa294e3c5428bf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_da063371c6e80cde421ca1d3a23d7c1283f3b6e995004e37fa294e3c5428bf56->leave($__internal_da063371c6e80cde421ca1d3a23d7c1283f3b6e995004e37fa294e3c5428bf56_prof);

        
        $__internal_1b8a09466af509ca81e107efec3f9884a9a0d17711774267c99c08bd7b299a52->leave($__internal_1b8a09466af509ca81e107efec3f9884a9a0d17711774267c99c08bd7b299a52_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_823a96f5049bf8af6ac707dbe8f9b3f2f10693552c72a3591d89a3d200106758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_823a96f5049bf8af6ac707dbe8f9b3f2f10693552c72a3591d89a3d200106758->enter($__internal_823a96f5049bf8af6ac707dbe8f9b3f2f10693552c72a3591d89a3d200106758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_92fffa94d95acb6496ff334109dc9907f00a443dddaeee3e982018afe3bb0690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92fffa94d95acb6496ff334109dc9907f00a443dddaeee3e982018afe3bb0690->enter($__internal_92fffa94d95acb6496ff334109dc9907f00a443dddaeee3e982018afe3bb0690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_92fffa94d95acb6496ff334109dc9907f00a443dddaeee3e982018afe3bb0690->leave($__internal_92fffa94d95acb6496ff334109dc9907f00a443dddaeee3e982018afe3bb0690_prof);

        
        $__internal_823a96f5049bf8af6ac707dbe8f9b3f2f10693552c72a3591d89a3d200106758->leave($__internal_823a96f5049bf8af6ac707dbe8f9b3f2f10693552c72a3591d89a3d200106758_prof);

    }

    // line 52
    public function block_suggetions($context, array $blocks = array())
    {
        $__internal_ae1797c4d1ed312e23230bc597bdfc5db3515282deb83b52821de6617cd5eb8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae1797c4d1ed312e23230bc597bdfc5db3515282deb83b52821de6617cd5eb8f->enter($__internal_ae1797c4d1ed312e23230bc597bdfc5db3515282deb83b52821de6617cd5eb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "suggetions"));

        $__internal_04a2f8f78d7a9a115f9344852e9f071d8239006bb59bf5043adf07cd5e9901ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a2f8f78d7a9a115f9344852e9f071d8239006bb59bf5043adf07cd5e9901ac->enter($__internal_04a2f8f78d7a9a115f9344852e9f071d8239006bb59bf5043adf07cd5e9901ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "suggetions"));

        // line 53
        echo "        ";
        
        $__internal_04a2f8f78d7a9a115f9344852e9f071d8239006bb59bf5043adf07cd5e9901ac->leave($__internal_04a2f8f78d7a9a115f9344852e9f071d8239006bb59bf5043adf07cd5e9901ac_prof);

        
        $__internal_ae1797c4d1ed312e23230bc597bdfc5db3515282deb83b52821de6617cd5eb8f->leave($__internal_ae1797c4d1ed312e23230bc597bdfc5db3515282deb83b52821de6617cd5eb8f_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_236f302377da6bb84366daf7ec2f5a6b7413745629a1725b32a5942dc61bb9f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236f302377da6bb84366daf7ec2f5a6b7413745629a1725b32a5942dc61bb9f9->enter($__internal_236f302377da6bb84366daf7ec2f5a6b7413745629a1725b32a5942dc61bb9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6ebd9027371a35dfa6720fd39be78ade0036dd7b485bfd705cc3a7239c0b252d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebd9027371a35dfa6720fd39be78ade0036dd7b485bfd705cc3a7239c0b252d->enter($__internal_6ebd9027371a35dfa6720fd39be78ade0036dd7b485bfd705cc3a7239c0b252d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
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
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

        ";
        
        $__internal_6ebd9027371a35dfa6720fd39be78ade0036dd7b485bfd705cc3a7239c0b252d->leave($__internal_6ebd9027371a35dfa6720fd39be78ade0036dd7b485bfd705cc3a7239c0b252d_prof);

        
        $__internal_236f302377da6bb84366daf7ec2f5a6b7413745629a1725b32a5942dc61bb9f9->leave($__internal_236f302377da6bb84366daf7ec2f5a6b7413745629a1725b32a5942dc61bb9f9_prof);

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
        return array (  259 => 131,  253 => 128,  238 => 115,  229 => 114,  219 => 53,  210 => 52,  191 => 8,  188 => 7,  179 => 6,  161 => 5,  150 => 136,  148 => 114,  111 => 80,  83 => 54,  81 => 52,  41 => 16,  39 => 6,  35 => 5,  29 => 1,);
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
 
    <aside class=\"col-lg-6 aside\"><form id=\"connexion\">
        <div class=\"card-header\"> <h2>CONNEXION</h2></div><hr>
                  <input type=\"hidden\" class=\"form-control\" name=\"form\" placeholder=\"\" value=\"connexion\">

  <div class=\"form-group\">
    <label for=\"formGroupExampleInput\">Email</label>
    <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"example@example.com\">
  </div>
  <div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Password</label>
    <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"enter your password\"></div>
           
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
