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
        $__internal_8148c95e98200781cfd00f6aa0a47cb8344aaa0f4ebd5a7bc99308fdcd29ca96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8148c95e98200781cfd00f6aa0a47cb8344aaa0f4ebd5a7bc99308fdcd29ca96->enter($__internal_8148c95e98200781cfd00f6aa0a47cb8344aaa0f4ebd5a7bc99308fdcd29ca96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_441feae0a874273cd2e9819353c53c744ed4e8f4acc07d582d409e63c8ea842f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441feae0a874273cd2e9819353c53c744ed4e8f4acc07d582d409e63c8ea842f->enter($__internal_441feae0a874273cd2e9819353c53c744ed4e8f4acc07d582d409e63c8ea842f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        <form id=\"inscription\">
               <div class=\"card-header\"> <h2>Inscription</h2><hr>

            <div class=\"row\">
  <div class=\"form-group col-md-6\">
    <label for=\"formGroupExampleInput\">Prenom</label>
    <input type=\"text\" class=\"form-control\" name=\"prenom\" placeholder=\"entrez votre prenom\" value=\"\">
  </div> <div class=\"form-group col-md-6\">
    <label for=\"formGroupExampleInput\">Nom</label>
    <input type=\"text\" class=\"form-control\" name=\"nom\" placeholder=\"entrez votre nom\" value=\"\">
  </div>
                </div>
  <div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Email</label>
    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"enter your email\" value=\"\">
           <br><div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Numpiece</label>
    <input type=\"number\" class=\"form-control\" name=\"numpiece\" placeholder=\"enter your cni\" value=\"\">
           <br>
       <div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Password</label>
    <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"enter your password\" value=\"\"></div>
            <label for=\"formGroupExampleInput2\"> Verifier Password</label>
    <input type=\"password\" class=\"form-control\" name=\"vpassword\" placeholder=\"enter your password\" value=\"\"></div>
        
           <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        <p>  <a type=\"submit\" class=\"fa fa-arrow-right\" href=\"#\" id=\"conect\">se connecter</a>
      </p>
      </div></div> 

</form>
    </aside>
  </section>
      
     
     ";
        // line 106
        $this->displayBlock('javascripts', $context, $blocks);
        // line 128
        echo "    </body>
</html>";
        
        $__internal_8148c95e98200781cfd00f6aa0a47cb8344aaa0f4ebd5a7bc99308fdcd29ca96->leave($__internal_8148c95e98200781cfd00f6aa0a47cb8344aaa0f4ebd5a7bc99308fdcd29ca96_prof);

        
        $__internal_441feae0a874273cd2e9819353c53c744ed4e8f4acc07d582d409e63c8ea842f->leave($__internal_441feae0a874273cd2e9819353c53c744ed4e8f4acc07d582d409e63c8ea842f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b379d87d2b2d6cee26bb1f54a5e363a939dc5b7e49524214cbc72a9f5a08cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b379d87d2b2d6cee26bb1f54a5e363a939dc5b7e49524214cbc72a9f5a08cd8->enter($__internal_6b379d87d2b2d6cee26bb1f54a5e363a939dc5b7e49524214cbc72a9f5a08cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d1215179642a7a36e26061b792cfd87561128d92d6d3cd380436fe192ad789e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1215179642a7a36e26061b792cfd87561128d92d6d3cd380436fe192ad789e->enter($__internal_8d1215179642a7a36e26061b792cfd87561128d92d6d3cd380436fe192ad789e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8d1215179642a7a36e26061b792cfd87561128d92d6d3cd380436fe192ad789e->leave($__internal_8d1215179642a7a36e26061b792cfd87561128d92d6d3cd380436fe192ad789e_prof);

        
        $__internal_6b379d87d2b2d6cee26bb1f54a5e363a939dc5b7e49524214cbc72a9f5a08cd8->leave($__internal_6b379d87d2b2d6cee26bb1f54a5e363a939dc5b7e49524214cbc72a9f5a08cd8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c111d013a0c45d9fe4d87a2c57ea30bcd7892422f22cf10a13fc5a2ab5bbda09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c111d013a0c45d9fe4d87a2c57ea30bcd7892422f22cf10a13fc5a2ab5bbda09->enter($__internal_c111d013a0c45d9fe4d87a2c57ea30bcd7892422f22cf10a13fc5a2ab5bbda09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_827992d324e595b2b0b88f00ca104ca8b0e0d95cca00dbff86e614afdd008b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827992d324e595b2b0b88f00ca104ca8b0e0d95cca00dbff86e614afdd008b4e->enter($__internal_827992d324e595b2b0b88f00ca104ca8b0e0d95cca00dbff86e614afdd008b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_827992d324e595b2b0b88f00ca104ca8b0e0d95cca00dbff86e614afdd008b4e->leave($__internal_827992d324e595b2b0b88f00ca104ca8b0e0d95cca00dbff86e614afdd008b4e_prof);

        
        $__internal_c111d013a0c45d9fe4d87a2c57ea30bcd7892422f22cf10a13fc5a2ab5bbda09->leave($__internal_c111d013a0c45d9fe4d87a2c57ea30bcd7892422f22cf10a13fc5a2ab5bbda09_prof);

    }

    // line 52
    public function block_suggetions($context, array $blocks = array())
    {
        $__internal_059e41a96d9abd30da1ce30bcdb873c9ad58ecee5fa4da5b3aadbf4d6290ad95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_059e41a96d9abd30da1ce30bcdb873c9ad58ecee5fa4da5b3aadbf4d6290ad95->enter($__internal_059e41a96d9abd30da1ce30bcdb873c9ad58ecee5fa4da5b3aadbf4d6290ad95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "suggetions"));

        $__internal_5bb350ed813a183070a6397e705eb3d26c50bd8d54d9b00e097eadf66e4bcb92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb350ed813a183070a6397e705eb3d26c50bd8d54d9b00e097eadf66e4bcb92->enter($__internal_5bb350ed813a183070a6397e705eb3d26c50bd8d54d9b00e097eadf66e4bcb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "suggetions"));

        // line 53
        echo "        ";
        
        $__internal_5bb350ed813a183070a6397e705eb3d26c50bd8d54d9b00e097eadf66e4bcb92->leave($__internal_5bb350ed813a183070a6397e705eb3d26c50bd8d54d9b00e097eadf66e4bcb92_prof);

        
        $__internal_059e41a96d9abd30da1ce30bcdb873c9ad58ecee5fa4da5b3aadbf4d6290ad95->leave($__internal_059e41a96d9abd30da1ce30bcdb873c9ad58ecee5fa4da5b3aadbf4d6290ad95_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7685214486c427f763eb01b6f299d1e6a0a8804fdfc90770ae4e684d251404aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7685214486c427f763eb01b6f299d1e6a0a8804fdfc90770ae4e684d251404aa->enter($__internal_7685214486c427f763eb01b6f299d1e6a0a8804fdfc90770ae4e684d251404aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_32bd46df982b6974eceba766f2f21e93993a3f3380234ff4a4e5a090325be632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32bd46df982b6974eceba766f2f21e93993a3f3380234ff4a4e5a090325be632->enter($__internal_32bd46df982b6974eceba766f2f21e93993a3f3380234ff4a4e5a090325be632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
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
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

        ";
        
        $__internal_32bd46df982b6974eceba766f2f21e93993a3f3380234ff4a4e5a090325be632->leave($__internal_32bd46df982b6974eceba766f2f21e93993a3f3380234ff4a4e5a090325be632_prof);

        
        $__internal_7685214486c427f763eb01b6f299d1e6a0a8804fdfc90770ae4e684d251404aa->leave($__internal_7685214486c427f763eb01b6f299d1e6a0a8804fdfc90770ae4e684d251404aa_prof);

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
        return array (  248 => 123,  242 => 120,  227 => 107,  218 => 106,  208 => 53,  199 => 52,  180 => 8,  177 => 7,  168 => 6,  150 => 5,  139 => 128,  137 => 106,  83 => 54,  81 => 52,  41 => 16,  39 => 6,  35 => 5,  29 => 1,);
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
        
        <form id=\"inscription\">
               <div class=\"card-header\"> <h2>Inscription</h2><hr>

            <div class=\"row\">
  <div class=\"form-group col-md-6\">
    <label for=\"formGroupExampleInput\">Prenom</label>
    <input type=\"text\" class=\"form-control\" name=\"prenom\" placeholder=\"entrez votre prenom\" value=\"\">
  </div> <div class=\"form-group col-md-6\">
    <label for=\"formGroupExampleInput\">Nom</label>
    <input type=\"text\" class=\"form-control\" name=\"nom\" placeholder=\"entrez votre nom\" value=\"\">
  </div>
                </div>
  <div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Email</label>
    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"enter your email\" value=\"\">
           <br><div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Numpiece</label>
    <input type=\"number\" class=\"form-control\" name=\"numpiece\" placeholder=\"enter your cni\" value=\"\">
           <br>
       <div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Password</label>
    <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"enter your password\" value=\"\"></div>
            <label for=\"formGroupExampleInput2\"> Verifier Password</label>
    <input type=\"password\" class=\"form-control\" name=\"vpassword\" placeholder=\"enter your password\" value=\"\"></div>
        
           <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        <p>  <a type=\"submit\" class=\"fa fa-arrow-right\" href=\"#\" id=\"conect\">se connecter</a>
      </p>
      </div></div> 

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
