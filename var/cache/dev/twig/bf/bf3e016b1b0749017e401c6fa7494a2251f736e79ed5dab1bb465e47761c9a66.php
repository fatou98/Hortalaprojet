<?php

/* ::base.html.twig */
class __TwigTemplate_a0483be191faa1e02990afaa9a83b43734d803e33c36294e5b03b68faa847fc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'aside' => array($this, 'block_aside'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3454bf2cb45f8d86ea1dd98662a8612822abac1f75fe5a1d87ebc15192ad5ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3454bf2cb45f8d86ea1dd98662a8612822abac1f75fe5a1d87ebc15192ad5ad8->enter($__internal_3454bf2cb45f8d86ea1dd98662a8612822abac1f75fe5a1d87ebc15192ad5ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_57db6320e2c11c62516a797387f6d06763100155faff33e39d740e79c5f76eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57db6320e2c11c62516a797387f6d06763100155faff33e39d740e79c5f76eb3->enter($__internal_57db6320e2c11c62516a797387f6d06763100155faff33e39d740e79c5f76eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        body{
/*background-image: url('";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fond.png"), "html", null, true);
        echo "')}*/
            background-color: white;}
        .container{
            height: auto;
        }
        .header{
            text-align: center;
            border-bottom: 3px solid
\tblack;
            padding: 0px;
             color:
\tblack;
            font-family: 'nettizen';
        }
        .navbar-nav{
            display: flex;list-style-type: none;            flex-wrap: wrap;margin-left: 50px;

        }
       .nav-item{
            width: 90px;
            margin-right: 80px;
          /*  border: 1px solid
\t#246200;
            padding: 4px;
            border-radius: 10px;
            background-color:
\t#246200;

            padding-left: 0px;
        }*/}
        .nav-link{
            text-decoration: none;
            color:white;
        }
        nav{
            padding-top: 10px;
        }
        .section{
            height: 450px;
            border-top: 3px solid
\tblack;padding-left: 70px;
            border-bottom: 3px solid
\tblack;
            padding-top: 10px;
            margin-top: -10px;
        }

        .aside{
            display: flex;flex-wrap: wrap;
            margin-top: 20px;padding-left: 70px;
        } .aside1{
            display: flex; flex-wrap: wrap;
            margin-top: 20px;
        }
        .card-img-top{
            width: 300px;
            height: 200px;
        }
        .divfooter{
            width: auto;padding-left: 70px;
        }
        footer{
            color:
\t#246200;
            display: flex;            flex-wrap: wrap;
            border-top: 3px solid
\tblack;
            border-bottom: 3px solid
\tblack;

            padding: 20px;margin-top: 30px;
        }
        #api{
            width: 500px;
            height: 400px;
        }
        .afooter{
            color: white;
        }
        .btn-default{
            background-color: #246200;color: white;padding: 4px;width: 65px;
        }
      /*  .recherche{
            height: 100px;
            width: 900px;
            background-color: black;
            position: absolute;
            margin-top: -120px;
            margin-left: 30px;
           opacity: 0.6;
        }*/
        .imgsection{
            width: 1050px;
            height: 280px;
        }
        button{ color:white;}

input
        {
            border-radius: 0px;margin-bottom: 10px;
        }
        .conec{
        box-shadow: 10px 10px 15px #dcdcdc;
        margin-left: 250px;
        width: 400px;}
        .entete{
           border: 1px solid #dcdcdc;
        background-color: white;
            color:
\t#246200;
            padding: 4px;
        }
        .div1{
            border: 1px solid #dcdcdc;padding: 0px;margin-right: 20px;background-color: white;width: 300px;margin-bottom: 5px;
        }

        .rech{
            height: 150px;background-color:
\t#246200;padding-top: 20px;width: 950px;margin-left: 15px;display: flex;color: white;
        }
        .contacte{
            height: 40px;display: flex;color: white;background-color:
\t#246200;flex-wrap: wrap;
        }
        .liensocial{
            margin-right: 10px;color: white;
        }
        #social{
            margin-left: 750px;
        }
        .tel{padding-left: 50px;}
        .recher{
            opacity: none;
        }
        .reservations{
    font-size: 13pt;
    margin-bottom: 50px;
}

.reservations a{
    color:black;
}
.reservations a:hover ,.reservations a:focus , .reservations a:visited{
    color:black;
}
.pagination > li > a,
.pagination > li > span{
    color: black;

}

.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus{
    background-color: #246200;
    color:white;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus{
    background-color:#246200;
    color: white;
    border: 1px solid #dddddd;
}
        </style>
        ";
        // line 190
        $this->displayBlock('body', $context, $blocks);
        // line 335
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 349
        echo "    </body>
</html>
";
        
        $__internal_3454bf2cb45f8d86ea1dd98662a8612822abac1f75fe5a1d87ebc15192ad5ad8->leave($__internal_3454bf2cb45f8d86ea1dd98662a8612822abac1f75fe5a1d87ebc15192ad5ad8_prof);

        
        $__internal_57db6320e2c11c62516a797387f6d06763100155faff33e39d740e79c5f76eb3->leave($__internal_57db6320e2c11c62516a797387f6d06763100155faff33e39d740e79c5f76eb3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_47657c1ec164ea289564a2752e0207ba56f9e4e90992defa9ef36f547a0bfd74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47657c1ec164ea289564a2752e0207ba56f9e4e90992defa9ef36f547a0bfd74->enter($__internal_47657c1ec164ea289564a2752e0207ba56f9e4e90992defa9ef36f547a0bfd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e7048cbb5bffaecf963e8e3617a4d594d4ddc9c14219a943e7c2f06a75ad6ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7048cbb5bffaecf963e8e3617a4d594d4ddc9c14219a943e7c2f06a75ad6ae0->enter($__internal_e7048cbb5bffaecf963e8e3617a4d594d4ddc9c14219a943e7c2f06a75ad6ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e7048cbb5bffaecf963e8e3617a4d594d4ddc9c14219a943e7c2f06a75ad6ae0->leave($__internal_e7048cbb5bffaecf963e8e3617a4d594d4ddc9c14219a943e7c2f06a75ad6ae0_prof);

        
        $__internal_47657c1ec164ea289564a2752e0207ba56f9e4e90992defa9ef36f547a0bfd74->leave($__internal_47657c1ec164ea289564a2752e0207ba56f9e4e90992defa9ef36f547a0bfd74_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5071b0e0dab4da939a0ad9ee2c8c950c4e22ee64504c6305aad0b399d7380595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5071b0e0dab4da939a0ad9ee2c8c950c4e22ee64504c6305aad0b399d7380595->enter($__internal_5071b0e0dab4da939a0ad9ee2c8c950c4e22ee64504c6305aad0b399d7380595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5de412a5990b8f1780e3201eb68f0ee9abde0fe3ebcebc43c4e87a6edc86cca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de412a5990b8f1780e3201eb68f0ee9abde0fe3ebcebc43c4e87a6edc86cca8->enter($__internal_5de412a5990b8f1780e3201eb68f0ee9abde0fe3ebcebc43c4e87a6edc86cca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5de412a5990b8f1780e3201eb68f0ee9abde0fe3ebcebc43c4e87a6edc86cca8->leave($__internal_5de412a5990b8f1780e3201eb68f0ee9abde0fe3ebcebc43c4e87a6edc86cca8_prof);

        
        $__internal_5071b0e0dab4da939a0ad9ee2c8c950c4e22ee64504c6305aad0b399d7380595->leave($__internal_5071b0e0dab4da939a0ad9ee2c8c950c4e22ee64504c6305aad0b399d7380595_prof);

    }

    // line 190
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8b3999ea749f6414c9c2c3e6c1638236965a4047f895724f14edae5d5880def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b3999ea749f6414c9c2c3e6c1638236965a4047f895724f14edae5d5880def->enter($__internal_f8b3999ea749f6414c9c2c3e6c1638236965a4047f895724f14edae5d5880def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c385e5a5d0b2d7f25862bf31846d8fe7aadb4696413d6de76a08388e023f562c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c385e5a5d0b2d7f25862bf31846d8fe7aadb4696413d6de76a08388e023f562c->enter($__internal_c385e5a5d0b2d7f25862bf31846d8fe7aadb4696413d6de76a08388e023f562c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 191
        echo "        <div class=\"row contacte\"><h4 class=\"tel\"><span class=\"glyphicon glyphicon-earphone\" style=\"font-size:20px;\"></span>+221 70 000 00 00/77 000 000 00</h4><h4 id=\"social\"> <a href=\"#\" class=\"liensocial\"><span class=\"fa fa-facebook-square\" style=\"font-size:28px;\"></span></a><a href=\"#\" class=\"liensocial\"><span class=\"fa fa-linkedin-square\" style=\"font-size:28px;\"></span></a><a href=\"#\" class=\"liensocial\"><span class=\"fa fa-twitter-square\" style=\"font-size:28px;\"></span></a></h4></div>
        <div class=\"container\">
            <header class=\"row header\">
               <div class=\"row\"> <h1>HORTALA IMMOBILIER</h1></div>
            </header>
                    <nav class=\"navbar navbar-toggleable-md navbar-light bg-faded\">
                        <ul class=\"navbar-nav\">
                          <li class=\"nav-item active\">
                            <button class=\"nav-link btn btn-default\" href=\"#\" id=\"accueil\" style=\"width: 90px;\">Accueil</button>
                          </li>
                          <li class=\"nav-item\">
                            <button class=\"nav-link btn btn-default\" href=\"#\" style=\"width: 90px;\">Faire gerer</button>
                          </li>
                          <li class=\"nav-item\">
                            <button class=\"nav-link btn btn-default\" href=\"#\" style=\"width: 90px;\">Pricing</button>
                          </li>
                          <li class=\"nav-item\">
                            <button class=\"nav-link btn btn-default\" href=\"#\" style=\"width: 90px;\">Disabled</button>
                          </li><li class=\"nav-item\">
                            <button class=\"nav-link btn btn-default\" href=\"#\" id=\"connexionbuton\" style=\"width: 90px;\">Se connecter</button>
                          </li>
                        </ul>
                    </nav>
            <div class=\"load\">

            <section class=\"row section\">
<div class=\"row connexion col-sm-12 card conec\" > <form>
    <div class=\"card-header\"><h2>Connecter vous</h2></div>
    <div class=\"card-body\"> <div class=\"form-group\">
        <label>email</label>
  <div class=\"input-group  col-xs-8\">
    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
    <input id=\"email\" type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"Email\">
  </div></div><div class=\"form-group\">        <label>pwd</label>

  <div class=\"input-group  col-xs-8\">
    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
    <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\">
  </div></div>
<button class=\"btn btn-default\"  >conexion</button>
    </div>
</form>
                vous etes nouveau ?----><a href=\"#\">inscrivez vous</a> </div>
              <div id=\"myCarousel\" class=\"carousel slide col-sm-12\" data-ride=\"carousel\">

  <ol class=\"carousel-indicators\">
    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
  </ol>

  <div class=\"carousel-inner\">
    <div class=\"item active\">
      <img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/ban.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" class=\"baniere1\" width=\"950px\" height=\"500px\">
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/ban1.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" class=\"baniere1\" width=\"950px\" height=\"500px\">
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/baniere.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" class=\"baniere1\" width=\"950px\" height=\"500px\">
    </div>
  </div>
</div><div class=\"col-sm-12 rech\" >
                                            <form class=\"form-inline\" method=\"post\">
                                              <label for=\"usr\">Type:</label>
                                              <input type=\"text\" class=\"form-control\" name=\"libelletype\">

                                              <label for=\"localite\">Localite:</label>
                                              <input type=\"text\" class=\"form-control\" name=\"libellelocalite\">

                                              <label for=\"budget\">Budget:</label>
                                              <input type=\"text\" class=\"form-control\" name=\"prixlocation\">
                                                <div class=\"form-inline\" id=\"option1\">
                                              <label for=\"description\">Description:</label>
                                              <input type=\"text\" class=\"form-control\" name=\"description\"></div>
                                                  <button type=\"submit\" class=\"btn btn-danger mb-2\">Submit</button>

                                            </form>

                                    </div>


         <!--       <div class=\"col-sm-4 recherche\">
      <form action=\"\" id=\"formreservation\" class=\"form-group\">
          <fieldset>
          <h3>Rechercher</h3>
              <hr>
     <div class=\"form-inline\">
  <label for=\"usr\">Type de bien:</label>
  <input type=\"text\" class=\"form-control\" id=\"type\">
</div>
<div class=\"form-inline\">
  <label for=\"lieu\">Localite:</label>
  <input type=\"password\" class=\"form-control\" id=\"lieu\">
</div>
  <p>
  <label for=\"amount\">Budget:</label>
  <input type=\"text\" id=\"amount\" readonly style=\"border:0; color:red; font-weight:bold;\">
</p>

<div id=\"slider-range\"></div>
  <button class=\"btn btn-default\">Plus d'option</button>

 <button class=\"btn btn-default\">Rechercher</button></fieldset>
</form>
                </div>-->
            </section>
                          ";
        // line 300
        $this->displayBlock('aside', $context, $blocks);
        // line 308
        echo "                </div>
    <footer class=\"row\">
                    <div class=\"col-lg-8 divfooter\"><img class=\"thumbnail image-responsive\" src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/api.png"), "html", null, true);
        echo "\" alt=\"Card image cap\" id=\"api\"></div>

                    <div class=\"col-lg-4 divfooter\">
      <form><h3>CONTACTEZ-NOUS!</h3>
          <div class=\"form-group\">
                              <label>Email</label>

    <div class=\"input-group\">
      <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
      <input id=\"email\" type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\">
    </div></div>
               <div class=\"form-group\"> <label>Message</label>
    <div class=\"input-group\">

      <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-comment\"></i></span>
  <textarea class=\"form-control\" rows=\"7\" id=\"comment\"></textarea>                   </div></div>
            <button type=\"submit\" class=\"btn btn-default\">Submit</button>

  </form>
        </div>
    </footer>
            </div>


        ";
        
        $__internal_c385e5a5d0b2d7f25862bf31846d8fe7aadb4696413d6de76a08388e023f562c->leave($__internal_c385e5a5d0b2d7f25862bf31846d8fe7aadb4696413d6de76a08388e023f562c_prof);

        
        $__internal_f8b3999ea749f6414c9c2c3e6c1638236965a4047f895724f14edae5d5880def->leave($__internal_f8b3999ea749f6414c9c2c3e6c1638236965a4047f895724f14edae5d5880def_prof);

    }

    // line 300
    public function block_aside($context, array $blocks = array())
    {
        $__internal_d0acf13dfb88f855b7362e9b1f88a76e28cd472e3224fadee7b140f14c6ad6c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0acf13dfb88f855b7362e9b1f88a76e28cd472e3224fadee7b140f14c6ad6c1->enter($__internal_d0acf13dfb88f855b7362e9b1f88a76e28cd472e3224fadee7b140f14c6ad6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_57c5d8ce6fbf2a54d44b6c87ceff187a3f774ce29e0c411bae2a5594f80b231c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c5d8ce6fbf2a54d44b6c87ceff187a3f774ce29e0c411bae2a5594f80b231c->enter($__internal_57c5d8ce6fbf2a54d44b6c87ceff187a3f774ce29e0c411bae2a5594f80b231c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 301
        echo "
           <aside class=\"row aside1\">



            </aside>
             ";
        
        $__internal_57c5d8ce6fbf2a54d44b6c87ceff187a3f774ce29e0c411bae2a5594f80b231c->leave($__internal_57c5d8ce6fbf2a54d44b6c87ceff187a3f774ce29e0c411bae2a5594f80b231c_prof);

        
        $__internal_d0acf13dfb88f855b7362e9b1f88a76e28cd472e3224fadee7b140f14c6ad6c1->leave($__internal_d0acf13dfb88f855b7362e9b1f88a76e28cd472e3224fadee7b140f14c6ad6c1_prof);

    }

    // line 335
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f3b1684740bdfe80614ed3c4ef0b06893f6ba8feb7baf90ef2b6428046089d64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b1684740bdfe80614ed3c4ef0b06893f6ba8feb7baf90ef2b6428046089d64->enter($__internal_f3b1684740bdfe80614ed3c4ef0b06893f6ba8feb7baf90ef2b6428046089d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fdf3cb7b2b80c9dae5edea0bb26ccd6022e0ac3d4a41b16fd0da222b3b869306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf3cb7b2b80c9dae5edea0bb26ccd6022e0ac3d4a41b16fd0da222b3b869306->enter($__internal_fdf3cb7b2b80c9dae5edea0bb26ccd6022e0ac3d4a41b16fd0da222b3b869306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 336
        echo "
                         <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"> </script>


         <script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
          <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

        ";
        
        $__internal_fdf3cb7b2b80c9dae5edea0bb26ccd6022e0ac3d4a41b16fd0da222b3b869306->leave($__internal_fdf3cb7b2b80c9dae5edea0bb26ccd6022e0ac3d4a41b16fd0da222b3b869306_prof);

        
        $__internal_f3b1684740bdfe80614ed3c4ef0b06893f6ba8feb7baf90ef2b6428046089d64->leave($__internal_f3b1684740bdfe80614ed3c4ef0b06893f6ba8feb7baf90ef2b6428046089d64_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  508 => 343,  502 => 340,  496 => 337,  493 => 336,  484 => 335,  468 => 301,  459 => 300,  424 => 310,  420 => 308,  418 => 300,  367 => 252,  360 => 248,  353 => 244,  298 => 191,  289 => 190,  270 => 8,  267 => 7,  258 => 6,  240 => 5,  228 => 349,  225 => 335,  223 => 190,  51 => 21,  42 => 16,  40 => 6,  36 => 5,  30 => 1,);
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
        body{
/*background-image: url('{{ asset(\"image/fond.png\") }}')}*/
            background-color: white;}
        .container{
            height: auto;
        }
        .header{
            text-align: center;
            border-bottom: 3px solid
\tblack;
            padding: 0px;
             color:
\tblack;
            font-family: 'nettizen';
        }
        .navbar-nav{
            display: flex;list-style-type: none;            flex-wrap: wrap;margin-left: 50px;

        }
       .nav-item{
            width: 90px;
            margin-right: 80px;
          /*  border: 1px solid
\t#246200;
            padding: 4px;
            border-radius: 10px;
            background-color:
\t#246200;

            padding-left: 0px;
        }*/}
        .nav-link{
            text-decoration: none;
            color:white;
        }
        nav{
            padding-top: 10px;
        }
        .section{
            height: 450px;
            border-top: 3px solid
\tblack;padding-left: 70px;
            border-bottom: 3px solid
\tblack;
            padding-top: 10px;
            margin-top: -10px;
        }

        .aside{
            display: flex;flex-wrap: wrap;
            margin-top: 20px;padding-left: 70px;
        } .aside1{
            display: flex; flex-wrap: wrap;
            margin-top: 20px;
        }
        .card-img-top{
            width: 300px;
            height: 200px;
        }
        .divfooter{
            width: auto;padding-left: 70px;
        }
        footer{
            color:
\t#246200;
            display: flex;            flex-wrap: wrap;
            border-top: 3px solid
\tblack;
            border-bottom: 3px solid
\tblack;

            padding: 20px;margin-top: 30px;
        }
        #api{
            width: 500px;
            height: 400px;
        }
        .afooter{
            color: white;
        }
        .btn-default{
            background-color: #246200;color: white;padding: 4px;width: 65px;
        }
      /*  .recherche{
            height: 100px;
            width: 900px;
            background-color: black;
            position: absolute;
            margin-top: -120px;
            margin-left: 30px;
           opacity: 0.6;
        }*/
        .imgsection{
            width: 1050px;
            height: 280px;
        }
        button{ color:white;}

input
        {
            border-radius: 0px;margin-bottom: 10px;
        }
        .conec{
        box-shadow: 10px 10px 15px #dcdcdc;
        margin-left: 250px;
        width: 400px;}
        .entete{
           border: 1px solid #dcdcdc;
        background-color: white;
            color:
\t#246200;
            padding: 4px;
        }
        .div1{
            border: 1px solid #dcdcdc;padding: 0px;margin-right: 20px;background-color: white;width: 300px;margin-bottom: 5px;
        }

        .rech{
            height: 150px;background-color:
\t#246200;padding-top: 20px;width: 950px;margin-left: 15px;display: flex;color: white;
        }
        .contacte{
            height: 40px;display: flex;color: white;background-color:
\t#246200;flex-wrap: wrap;
        }
        .liensocial{
            margin-right: 10px;color: white;
        }
        #social{
            margin-left: 750px;
        }
        .tel{padding-left: 50px;}
        .recher{
            opacity: none;
        }
        .reservations{
    font-size: 13pt;
    margin-bottom: 50px;
}

.reservations a{
    color:black;
}
.reservations a:hover ,.reservations a:focus , .reservations a:visited{
    color:black;
}
.pagination > li > a,
.pagination > li > span{
    color: black;

}

.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus{
    background-color: #246200;
    color:white;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus{
    background-color:#246200;
    color: white;
    border: 1px solid #dddddd;
}
        </style>
        {% block body %}
        <div class=\"row contacte\"><h4 class=\"tel\"><span class=\"glyphicon glyphicon-earphone\" style=\"font-size:20px;\"></span>+221 70 000 00 00/77 000 000 00</h4><h4 id=\"social\"> <a href=\"#\" class=\"liensocial\"><span class=\"fa fa-facebook-square\" style=\"font-size:28px;\"></span></a><a href=\"#\" class=\"liensocial\"><span class=\"fa fa-linkedin-square\" style=\"font-size:28px;\"></span></a><a href=\"#\" class=\"liensocial\"><span class=\"fa fa-twitter-square\" style=\"font-size:28px;\"></span></a></h4></div>
        <div class=\"container\">
            <header class=\"row header\">
               <div class=\"row\"> <h1>HORTALA IMMOBILIER</h1></div>
            </header>
                    <nav class=\"navbar navbar-toggleable-md navbar-light bg-faded\">
                        <ul class=\"navbar-nav\">
                          <li class=\"nav-item active\">
                            <button class=\"nav-link btn btn-default\" href=\"#\" id=\"accueil\" style=\"width: 90px;\">Accueil</button>
                          </li>
                          <li class=\"nav-item\">
                            <button class=\"nav-link btn btn-default\" href=\"#\" style=\"width: 90px;\">Faire gerer</button>
                          </li>
                          <li class=\"nav-item\">
                            <button class=\"nav-link btn btn-default\" href=\"#\" style=\"width: 90px;\">Pricing</button>
                          </li>
                          <li class=\"nav-item\">
                            <button class=\"nav-link btn btn-default\" href=\"#\" style=\"width: 90px;\">Disabled</button>
                          </li><li class=\"nav-item\">
                            <button class=\"nav-link btn btn-default\" href=\"#\" id=\"connexionbuton\" style=\"width: 90px;\">Se connecter</button>
                          </li>
                        </ul>
                    </nav>
            <div class=\"load\">

            <section class=\"row section\">
<div class=\"row connexion col-sm-12 card conec\" > <form>
    <div class=\"card-header\"><h2>Connecter vous</h2></div>
    <div class=\"card-body\"> <div class=\"form-group\">
        <label>email</label>
  <div class=\"input-group  col-xs-8\">
    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
    <input id=\"email\" type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"Email\">
  </div></div><div class=\"form-group\">        <label>pwd</label>

  <div class=\"input-group  col-xs-8\">
    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
    <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\">
  </div></div>
<button class=\"btn btn-default\"  >conexion</button>
    </div>
</form>
                vous etes nouveau ?----><a href=\"#\">inscrivez vous</a> </div>
              <div id=\"myCarousel\" class=\"carousel slide col-sm-12\" data-ride=\"carousel\">

  <ol class=\"carousel-indicators\">
    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
  </ol>

  <div class=\"carousel-inner\">
    <div class=\"item active\">
      <img src=\"{{ asset('image/ban.jpg')}}\" alt=\"Los Angeles\" class=\"baniere1\" width=\"950px\" height=\"500px\">
    </div>

    <div class=\"item\">
      <img src=\"{{ asset('image/ban1.jpg')}}\" alt=\"Los Angeles\" class=\"baniere1\" width=\"950px\" height=\"500px\">
    </div>

    <div class=\"item\">
      <img src=\"{{ asset('image/baniere.jpg')}}\" alt=\"Los Angeles\" class=\"baniere1\" width=\"950px\" height=\"500px\">
    </div>
  </div>
</div><div class=\"col-sm-12 rech\" >
                                            <form class=\"form-inline\" method=\"post\">
                                              <label for=\"usr\">Type:</label>
                                              <input type=\"text\" class=\"form-control\" name=\"libelletype\">

                                              <label for=\"localite\">Localite:</label>
                                              <input type=\"text\" class=\"form-control\" name=\"libellelocalite\">

                                              <label for=\"budget\">Budget:</label>
                                              <input type=\"text\" class=\"form-control\" name=\"prixlocation\">
                                                <div class=\"form-inline\" id=\"option1\">
                                              <label for=\"description\">Description:</label>
                                              <input type=\"text\" class=\"form-control\" name=\"description\"></div>
                                                  <button type=\"submit\" class=\"btn btn-danger mb-2\">Submit</button>

                                            </form>

                                    </div>


         <!--       <div class=\"col-sm-4 recherche\">
      <form action=\"\" id=\"formreservation\" class=\"form-group\">
          <fieldset>
          <h3>Rechercher</h3>
              <hr>
     <div class=\"form-inline\">
  <label for=\"usr\">Type de bien:</label>
  <input type=\"text\" class=\"form-control\" id=\"type\">
</div>
<div class=\"form-inline\">
  <label for=\"lieu\">Localite:</label>
  <input type=\"password\" class=\"form-control\" id=\"lieu\">
</div>
  <p>
  <label for=\"amount\">Budget:</label>
  <input type=\"text\" id=\"amount\" readonly style=\"border:0; color:red; font-weight:bold;\">
</p>

<div id=\"slider-range\"></div>
  <button class=\"btn btn-default\">Plus d'option</button>

 <button class=\"btn btn-default\">Rechercher</button></fieldset>
</form>
                </div>-->
            </section>
                          {% block aside %}

           <aside class=\"row aside1\">



            </aside>
             {% endblock %}
                </div>
    <footer class=\"row\">
                    <div class=\"col-lg-8 divfooter\"><img class=\"thumbnail image-responsive\" src=\"{{ asset('image/api.png')}}\" alt=\"Card image cap\" id=\"api\"></div>

                    <div class=\"col-lg-4 divfooter\">
      <form><h3>CONTACTEZ-NOUS!</h3>
          <div class=\"form-group\">
                              <label>Email</label>

    <div class=\"input-group\">
      <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
      <input id=\"email\" type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\">
    </div></div>
               <div class=\"form-group\"> <label>Message</label>
    <div class=\"input-group\">

      <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-comment\"></i></span>
  <textarea class=\"form-control\" rows=\"7\" id=\"comment\"></textarea>                   </div></div>
            <button type=\"submit\" class=\"btn btn-default\">Submit</button>

  </form>
        </div>
    </footer>
            </div>


        {% endblock %}
        {% block javascripts %}

                         <script src=\"{{ asset('js/script.js') }}\"> </script>


         <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
         <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
          <script src=\"{{ asset('js/bootstrap.js') }}\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/hortala/app/Resources/views/base.html.twig");
    }
}
