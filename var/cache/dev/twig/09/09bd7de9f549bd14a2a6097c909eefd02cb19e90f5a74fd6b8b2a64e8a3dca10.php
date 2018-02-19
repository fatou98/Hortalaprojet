<?php

/* HTLImmobilierBundle:Reservation:accueil.html.twig */
class __TwigTemplate_d9234811e23e6b86742f77afdda82d64da96360f917d01075bbcd713897f119b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_287c3d646b4d78feafe0eaa84563b01f55c93604b5a65211b4c580a21b4f885c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_287c3d646b4d78feafe0eaa84563b01f55c93604b5a65211b4c580a21b4f885c->enter($__internal_287c3d646b4d78feafe0eaa84563b01f55c93604b5a65211b4c580a21b4f885c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Reservation:accueil.html.twig"));

        $__internal_931dda184822a059d5b77d4f228eeda4ae92e44bea84a77e9eb15146cbb2b48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931dda184822a059d5b77d4f228eeda4ae92e44bea84a77e9eb15146cbb2b48b->enter($__internal_931dda184822a059d5b77d4f228eeda4ae92e44bea84a77e9eb15146cbb2b48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Reservation:accueil.html.twig"));

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
            display: flex;list-style-type: none;            flex-wrap: wrap;

        }
       .nav-item{
            width: 90px;
            margin-right: 80px;
          /*  border: 1px solid 
\t#091DD4;
            padding: 4px;
            border-radius: 10px;
            background-color: 
\t#091DD4;
           
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
            height: 420px;
            border-top: 3px solid 
\tblack;
            border-bottom: 3px solid 
\tblack;
            padding-top: 10px;
            margin-top: -10px;
        }

        .aside{
            display: flex;flex-wrap: wrap;
            margin-top: 20px;
        } .aside1{
            display: flex; flex-wrap: wrap;
            margin-top: 20px;
        }
        .card-img-top{
            width: 300px;
            height: 200px;
        }
        .divfooter{
            width: auto;
        }
        footer{
            color: 
\t#091DD4;
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
            background-color: #091DD4;color: white;padding: 4px;width: 65px;
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
            width: 980px;
            height: 280px;
        }

input
        {
            border-radius: 0px;
        }
        .conec{
box-shadow: 10px 10px    15px;
        margin-left: 250px;
        width: 400px;}
        .entete{
            border-bottom: 2px solid 
\tblack;
        background-color: white;
            color: 
\t#091DD4;
            padding: 4px;
        }
        .div1{
            border: 2px solid white;padding: 0px;margin-left: 15px;background-color: white;
        }
        .div1:hover{
            border: 2px solid 
\tblack;
        }
        .rech{
            height: 100px;background-color:
\tblack;opacity: 0.5;padding-top: 20px;width: 940px;margin-left: 15px;
        }
        .contacte{
            height: 40px;display: flex;color: white;background-color: 
\t#091DD4;flex-wrap: wrap;
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
        </style>
        ";
        // line 159
        $this->displayBlock('body', $context, $blocks);
        // line 388
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 402
        echo "    </body>
</html>
";
        
        $__internal_287c3d646b4d78feafe0eaa84563b01f55c93604b5a65211b4c580a21b4f885c->leave($__internal_287c3d646b4d78feafe0eaa84563b01f55c93604b5a65211b4c580a21b4f885c_prof);

        
        $__internal_931dda184822a059d5b77d4f228eeda4ae92e44bea84a77e9eb15146cbb2b48b->leave($__internal_931dda184822a059d5b77d4f228eeda4ae92e44bea84a77e9eb15146cbb2b48b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d08e1e32831be541e32d381f8c7df27f1501b41ce74cfc3252a80d75dcc6ce09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08e1e32831be541e32d381f8c7df27f1501b41ce74cfc3252a80d75dcc6ce09->enter($__internal_d08e1e32831be541e32d381f8c7df27f1501b41ce74cfc3252a80d75dcc6ce09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e741270569e2048b6a55bba22a310dab991b55e0c4d65ac740b9ec1e890976e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e741270569e2048b6a55bba22a310dab991b55e0c4d65ac740b9ec1e890976e->enter($__internal_8e741270569e2048b6a55bba22a310dab991b55e0c4d65ac740b9ec1e890976e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8e741270569e2048b6a55bba22a310dab991b55e0c4d65ac740b9ec1e890976e->leave($__internal_8e741270569e2048b6a55bba22a310dab991b55e0c4d65ac740b9ec1e890976e_prof);

        
        $__internal_d08e1e32831be541e32d381f8c7df27f1501b41ce74cfc3252a80d75dcc6ce09->leave($__internal_d08e1e32831be541e32d381f8c7df27f1501b41ce74cfc3252a80d75dcc6ce09_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00db71c5b5f9989b7e1b04eab2bfc7757b51c652e5bb7ab8c783c27f9e22ba9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00db71c5b5f9989b7e1b04eab2bfc7757b51c652e5bb7ab8c783c27f9e22ba9c->enter($__internal_00db71c5b5f9989b7e1b04eab2bfc7757b51c652e5bb7ab8c783c27f9e22ba9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3dfd8a0eb68e1fb11d58ad7f579ff885bc031b07cafb976bd495cd794d31f0e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dfd8a0eb68e1fb11d58ad7f579ff885bc031b07cafb976bd495cd794d31f0e8->enter($__internal_3dfd8a0eb68e1fb11d58ad7f579ff885bc031b07cafb976bd495cd794d31f0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3dfd8a0eb68e1fb11d58ad7f579ff885bc031b07cafb976bd495cd794d31f0e8->leave($__internal_3dfd8a0eb68e1fb11d58ad7f579ff885bc031b07cafb976bd495cd794d31f0e8_prof);

        
        $__internal_00db71c5b5f9989b7e1b04eab2bfc7757b51c652e5bb7ab8c783c27f9e22ba9c->leave($__internal_00db71c5b5f9989b7e1b04eab2bfc7757b51c652e5bb7ab8c783c27f9e22ba9c_prof);

    }

    // line 159
    public function block_body($context, array $blocks = array())
    {
        $__internal_1872f2a63f139d727bfe1ee18676f2656492753d4e0f8b9f1ce8f79f4516c77c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1872f2a63f139d727bfe1ee18676f2656492753d4e0f8b9f1ce8f79f4516c77c->enter($__internal_1872f2a63f139d727bfe1ee18676f2656492753d4e0f8b9f1ce8f79f4516c77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b584a976dafa1563a33ef73fe063d532b9e15c98b0899a15637ae0de252e52c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b584a976dafa1563a33ef73fe063d532b9e15c98b0899a15637ae0de252e52c2->enter($__internal_b584a976dafa1563a33ef73fe063d532b9e15c98b0899a15637ae0de252e52c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 160
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
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/ban.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" class=\"baniere1\" width=\"950px\" height=\"500px\">
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/ban1.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" class=\"baniere1\" width=\"950px\" height=\"500px\">
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/baniere.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" class=\"baniere1\" width=\"950px\" height=\"500px\">
    </div>
  </div>
</div>
                <div class=\"col-sm-12 rech\" style=\"color: white;\"><form class=\"form-inline recher\">
  <label class=\"sr-only\" for=\"inlineFormInput\">Name</label>
  <input type=\"text\" class=\"form-control mb-2 mr-sm-2 mb-sm-0\" id=\"inlineFormInput\" placeholder=\"Jane Doe\">

  <label class=\"sr-only\" for=\"inlineFormInputGroup\">Username</label>
  <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
    <div class=\"input-group-addon\">@</div>
    <input type=\"text\" class=\"form-control\" id=\"inlineFormInputGroup\" placeholder=\"Username\">
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form></div>
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
           <aside class=\"row aside1\">
                <div class=\"col-lg-4 card div1\">
                    <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index.jpeg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Immeuble</h4>
                     <p class=\"card-text\">localite<br>prix</p>
                        <button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button>
                    </div></div>
             <div class=\"col-lg-4 card div1\">
                    <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index3.jpeg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Immeuble</h4>
                     <p class=\"card-text\">localite<br>prix</p>
                        <button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button>
                    </div></div>
             <div class=\"col-lg-4 card div1\">
                    <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index4.jpeg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Immeuble</h4>
                     <p class=\"card-text\">localite<br>prix</p>
                        <button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button>
                    </div></div>

            </aside>
            <aside class=\"row aside1\">
                <div class=\"col-lg-4 card div1\">
                    <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index5.jpeg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Immeuble</h4>
                     <p class=\"card-text\">localite<br>prix</p>
                        <button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button>
                    </div></div>
             <div class=\"col-lg-4 card div1\">
                    <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index6.jpeg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Immeuble</h4>
                     <p class=\"card-text\">localite<br>prix</p>
                        <button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button>
                    </div></div>
             <div class=\"col-lg-4 card div1\">
                    <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index5.jpeg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Immeuble</h4>
                     <p class=\"card-text\">localite<br>prix</p>
                        <button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button>
                    </div></div>

            </aside>
           <aside class=\"row aside1\">
                <div class=\"col-lg-4 card div1\">
                    <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index6.jpeg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Immeuble</h4>
                     <p class=\"card-text\">localite<br>prix</p>
                        <button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button>
                    </div></div>
             <div class=\"col-lg-4 card div1\">
                    <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index3.jpeg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Immeuble</h4>
                     <p class=\"card-text\">localite<br>prix</p>
                        <button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button>
                    </div></div>
             <div class=\"col-lg-4 card div1\">
                    <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index4.jpeg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Immeuble</h4>
                     <p class=\"card-text\">localite<br>prix</p>
                        <button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button>
                    </div></div>

            </aside>
    <footer class=\"row\">
                    <div class=\"col-lg-8 divfooter\"><img class=\"thumbnail image-responsive\" src=\"";
        // line 342
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

<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Modal Header</h4>
      </div>
      <div class=\"modal-body\">
        <p>Some text in the modal.</p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>

  </div>
</div>
        ";
        
        $__internal_b584a976dafa1563a33ef73fe063d532b9e15c98b0899a15637ae0de252e52c2->leave($__internal_b584a976dafa1563a33ef73fe063d532b9e15c98b0899a15637ae0de252e52c2_prof);

        
        $__internal_1872f2a63f139d727bfe1ee18676f2656492753d4e0f8b9f1ce8f79f4516c77c->leave($__internal_1872f2a63f139d727bfe1ee18676f2656492753d4e0f8b9f1ce8f79f4516c77c_prof);

    }

    // line 388
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2db0cb9ae5f990c9800d6d18e32c635cfdbe1de3f75eea1e659e9fbbade5479a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db0cb9ae5f990c9800d6d18e32c635cfdbe1de3f75eea1e659e9fbbade5479a->enter($__internal_2db0cb9ae5f990c9800d6d18e32c635cfdbe1de3f75eea1e659e9fbbade5479a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3e8760652d8987562c37df6239bb07d06bb900646be0e6615d1a0dbd5daa9bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8760652d8987562c37df6239bb07d06bb900646be0e6615d1a0dbd5daa9bfd->enter($__internal_3e8760652d8987562c37df6239bb07d06bb900646be0e6615d1a0dbd5daa9bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 389
        echo "
                         <script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"> </script>


         <script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
          <script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

        ";
        
        $__internal_3e8760652d8987562c37df6239bb07d06bb900646be0e6615d1a0dbd5daa9bfd->leave($__internal_3e8760652d8987562c37df6239bb07d06bb900646be0e6615d1a0dbd5daa9bfd_prof);

        
        $__internal_2db0cb9ae5f990c9800d6d18e32c635cfdbe1de3f75eea1e659e9fbbade5479a->leave($__internal_2db0cb9ae5f990c9800d6d18e32c635cfdbe1de3f75eea1e659e9fbbade5479a_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Reservation:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 396,  560 => 393,  554 => 390,  551 => 389,  542 => 388,  486 => 342,  474 => 333,  463 => 325,  452 => 317,  438 => 306,  427 => 298,  416 => 290,  402 => 279,  391 => 271,  380 => 263,  334 => 220,  327 => 216,  320 => 212,  266 => 160,  257 => 159,  238 => 8,  235 => 7,  226 => 6,  208 => 5,  196 => 402,  193 => 388,  191 => 159,  50 => 21,  41 => 16,  39 => 6,  35 => 5,  29 => 1,);
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
            display: flex;list-style-type: none;            flex-wrap: wrap;

        }
       .nav-item{
            width: 90px;
            margin-right: 80px;
          /*  border: 1px solid 
\t#091DD4;
            padding: 4px;
            border-radius: 10px;
            background-color: 
\t#091DD4;
           
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
            height: 420px;
            border-top: 3px solid 
\tblack;
            border-bottom: 3px solid 
\tblack;
            padding-top: 10px;
            margin-top: -10px;
        }

        .aside{
            display: flex;flex-wrap: wrap;
            margin-top: 20px;
        } .aside1{
            display: flex; flex-wrap: wrap;
            margin-top: 20px;
        }
        .card-img-top{
            width: 300px;
            height: 200px;
        }
        .divfooter{
            width: auto;
        }
        footer{
            color: 
\t#091DD4;
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
            background-color: #091DD4;color: white;padding: 4px;width: 65px;
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
            width: 980px;
            height: 280px;
        }

input
        {
            border-radius: 0px;
        }
        .conec{
box-shadow: 10px 10px    15px;
        margin-left: 250px;
        width: 400px;}
        .entete{
            border-bottom: 2px solid 
\tblack;
        background-color: white;
            color: 
\t#091DD4;
            padding: 4px;
        }
        .div1{
            border: 2px solid white;padding: 0px;margin-left: 15px;background-color: white;
        }
        .div1:hover{
            border: 2px solid 
\tblack;
        }
        .rech{
            height: 100px;background-color:
\tblack;opacity: 0.5;padding-top: 20px;width: 940px;margin-left: 15px;
        }
        .contacte{
            height: 40px;display: flex;color: white;background-color: 
\t#091DD4;flex-wrap: wrap;
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
</div>
                <div class=\"col-sm-12 rech\" style=\"color: white;\"><form class=\"form-inline recher\">
  <label class=\"sr-only\" for=\"inlineFormInput\">Name</label>
  <input type=\"text\" class=\"form-control mb-2 mr-sm-2 mb-sm-0\" id=\"inlineFormInput\" placeholder=\"Jane Doe\">

  <label class=\"sr-only\" for=\"inlineFormInputGroup\">Username</label>
  <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
    <div class=\"input-group-addon\">@</div>
    <input type=\"text\" class=\"form-control\" id=\"inlineFormInputGroup\" placeholder=\"Username\">
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form></div>
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
           <aside class=\"row aside1\">
                <div class=\"col-lg-4 card div1\">
                    <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"{{ asset('image/index.jpeg')}}\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Immeuble</h4>
                     <p class=\"card-text\">localite<br>prix</p>
                        <button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button>
                    </div></div>
             <div class=\"col-lg-4 card div1\">
                    <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"{{ asset('image/index3.jpeg')}}\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Immeuble</h4>
                     <p class=\"card-text\">localite<br>prix</p>
                        <button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button>
                    </div></div>
             <div class=\"col-lg-4 card div1\">
                    <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"{{ asset('image/index4.jpeg')}}\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Immeuble</h4>
                     <p class=\"card-text\">localite<br>prix</p>
                        <button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button>
                    </div></div>

            </aside>
            <aside class=\"row aside1\">
                <div class=\"col-lg-4 card div1\">
                    <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"{{ asset('image/index5.jpeg')}}\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Immeuble</h4>
                     <p class=\"card-text\">localite<br>prix</p>
                        <button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button>
                    </div></div>
             <div class=\"col-lg-4 card div1\">
                    <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"{{ asset('image/index6.jpeg')}}\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Immeuble</h4>
                     <p class=\"card-text\">localite<br>prix</p>
                        <button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button>
                    </div></div>
             <div class=\"col-lg-4 card div1\">
                    <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"{{ asset('image/index5.jpeg')}}\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Immeuble</h4>
                     <p class=\"card-text\">localite<br>prix</p>
                        <button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button>
                    </div></div>

            </aside>
           <aside class=\"row aside1\">
                <div class=\"col-lg-4 card div1\">
                    <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"{{ asset('image/index6.jpeg')}}\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Immeuble</h4>
                     <p class=\"card-text\">localite<br>prix</p>
                        <button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button>
                    </div></div>
             <div class=\"col-lg-4 card div1\">
                    <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"{{ asset('image/index3.jpeg')}}\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Immeuble</h4>
                     <p class=\"card-text\">localite<br>prix</p>
                        <button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button>
                    </div></div>
             <div class=\"col-lg-4 card div1\">
                    <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"{{ asset('image/index4.jpeg')}}\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Immeuble</h4>
                     <p class=\"card-text\">localite<br>prix</p>
                        <button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button>
                    </div></div>

            </aside>
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

<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Modal Header</h4>
      </div>
      <div class=\"modal-body\">
        <p>Some text in the modal.</p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>

  </div>
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
", "HTLImmobilierBundle:Reservation:accueil.html.twig", "/var/www/html/hortala/src/HTL/ImmobilierBundle/Resources/views/Reservation/accueil.html.twig");
    }
}
