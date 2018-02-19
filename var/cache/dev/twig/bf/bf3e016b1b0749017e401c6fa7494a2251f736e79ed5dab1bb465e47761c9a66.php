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
        $__internal_a2bad9d01dcd9f1078249e57bd75074ecddca6255cfa73e8a204f6d659c0583e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2bad9d01dcd9f1078249e57bd75074ecddca6255cfa73e8a204f6d659c0583e->enter($__internal_a2bad9d01dcd9f1078249e57bd75074ecddca6255cfa73e8a204f6d659c0583e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_4c34afce1f1220ec4fbf8810563aa6749f9dba10563f3d6d4fade49cbd7679a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c34afce1f1220ec4fbf8810563aa6749f9dba10563f3d6d4fade49cbd7679a4->enter($__internal_4c34afce1f1220ec4fbf8810563aa6749f9dba10563f3d6d4fade49cbd7679a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
            background-color: #091DD4;color: white;padding: 4px;width: 65px;opacity: 0.5;
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
\t#091DD4;
            padding: 4px;
        }
        .div1{
            border: 1px solid #dcdcdc;padding: 0px;margin-right: 20px;background-color: white;width: 300px;margin-bottom: 5px;
        }
      
        .rech{
            height: 150px;background-color:
\tblue;opacity: 0.5;padding-top: 20px;width: 950px;margin-left: 15px;display: flex;color: white;
        }
        .contacte{
            height: 40px;display: flex;color: white;background-color: 
\t#091DD4;flex-wrap: wrap;opacity: 0.5;
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
    background-color: blue;
    color:white;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus{
    background-color:blue;
    color: white;
    border: 1px solid #dddddd;
}
        </style>
        ";
        // line 189
        $this->displayBlock('body', $context, $blocks);
        // line 334
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 348
        echo "    </body>
</html>
";
        
        $__internal_a2bad9d01dcd9f1078249e57bd75074ecddca6255cfa73e8a204f6d659c0583e->leave($__internal_a2bad9d01dcd9f1078249e57bd75074ecddca6255cfa73e8a204f6d659c0583e_prof);

        
        $__internal_4c34afce1f1220ec4fbf8810563aa6749f9dba10563f3d6d4fade49cbd7679a4->leave($__internal_4c34afce1f1220ec4fbf8810563aa6749f9dba10563f3d6d4fade49cbd7679a4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2a5c2f9283bc2d8a33e5f4593f4e0750883fff26f966ca7e5d37e1cf3e757c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a5c2f9283bc2d8a33e5f4593f4e0750883fff26f966ca7e5d37e1cf3e757c7->enter($__internal_a2a5c2f9283bc2d8a33e5f4593f4e0750883fff26f966ca7e5d37e1cf3e757c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_789fb0a27e53de6d58d1c6478ceb9a365eee4098c0e19436588ccc9be6837636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789fb0a27e53de6d58d1c6478ceb9a365eee4098c0e19436588ccc9be6837636->enter($__internal_789fb0a27e53de6d58d1c6478ceb9a365eee4098c0e19436588ccc9be6837636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_789fb0a27e53de6d58d1c6478ceb9a365eee4098c0e19436588ccc9be6837636->leave($__internal_789fb0a27e53de6d58d1c6478ceb9a365eee4098c0e19436588ccc9be6837636_prof);

        
        $__internal_a2a5c2f9283bc2d8a33e5f4593f4e0750883fff26f966ca7e5d37e1cf3e757c7->leave($__internal_a2a5c2f9283bc2d8a33e5f4593f4e0750883fff26f966ca7e5d37e1cf3e757c7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84cf69a843f70567a60d36bf6a4e715baba97b8de0f04237166582b0a15ee705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84cf69a843f70567a60d36bf6a4e715baba97b8de0f04237166582b0a15ee705->enter($__internal_84cf69a843f70567a60d36bf6a4e715baba97b8de0f04237166582b0a15ee705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5eda5a8fa8592488f853dc7c18e8fc9e73170441c15d585e7e46efbbee282f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eda5a8fa8592488f853dc7c18e8fc9e73170441c15d585e7e46efbbee282f69->enter($__internal_5eda5a8fa8592488f853dc7c18e8fc9e73170441c15d585e7e46efbbee282f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5eda5a8fa8592488f853dc7c18e8fc9e73170441c15d585e7e46efbbee282f69->leave($__internal_5eda5a8fa8592488f853dc7c18e8fc9e73170441c15d585e7e46efbbee282f69_prof);

        
        $__internal_84cf69a843f70567a60d36bf6a4e715baba97b8de0f04237166582b0a15ee705->leave($__internal_84cf69a843f70567a60d36bf6a4e715baba97b8de0f04237166582b0a15ee705_prof);

    }

    // line 189
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c3fe485f65e1ede79ea12b2073ab4b5b57f96706abf1369d1834b4a05c8631f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3fe485f65e1ede79ea12b2073ab4b5b57f96706abf1369d1834b4a05c8631f->enter($__internal_5c3fe485f65e1ede79ea12b2073ab4b5b57f96706abf1369d1834b4a05c8631f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eeb56b124dca49091442b1e29f50db7b8b4f36526e44cb763165a7558d769646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb56b124dca49091442b1e29f50db7b8b4f36526e44cb763165a7558d769646->enter($__internal_eeb56b124dca49091442b1e29f50db7b8b4f36526e44cb763165a7558d769646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 190
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
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/ban.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" class=\"baniere1\" width=\"950px\" height=\"500px\">
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/ban1.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" class=\"baniere1\" width=\"950px\" height=\"500px\">
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 251
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
      <button type=\"submit\" class=\"btn btn-primary mb-2\">Submit</button>

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
        // line 299
        $this->displayBlock('aside', $context, $blocks);
        // line 307
        echo "                </div>
    <footer class=\"row\">
                    <div class=\"col-lg-8 divfooter\"><img class=\"thumbnail image-responsive\" src=\"";
        // line 309
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
        
        $__internal_eeb56b124dca49091442b1e29f50db7b8b4f36526e44cb763165a7558d769646->leave($__internal_eeb56b124dca49091442b1e29f50db7b8b4f36526e44cb763165a7558d769646_prof);

        
        $__internal_5c3fe485f65e1ede79ea12b2073ab4b5b57f96706abf1369d1834b4a05c8631f->leave($__internal_5c3fe485f65e1ede79ea12b2073ab4b5b57f96706abf1369d1834b4a05c8631f_prof);

    }

    // line 299
    public function block_aside($context, array $blocks = array())
    {
        $__internal_1db57738e937ffa286e452e725d560e25d8705d4a855de8bf095e432b7c9b214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db57738e937ffa286e452e725d560e25d8705d4a855de8bf095e432b7c9b214->enter($__internal_1db57738e937ffa286e452e725d560e25d8705d4a855de8bf095e432b7c9b214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_f65e52be2610ab5d2d93f26d522f834d3c71755bf79f2f4c30b7a692e8f07f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65e52be2610ab5d2d93f26d522f834d3c71755bf79f2f4c30b7a692e8f07f9e->enter($__internal_f65e52be2610ab5d2d93f26d522f834d3c71755bf79f2f4c30b7a692e8f07f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 300
        echo "
           <aside class=\"row aside1\">
           
            
            
            </aside>
             ";
        
        $__internal_f65e52be2610ab5d2d93f26d522f834d3c71755bf79f2f4c30b7a692e8f07f9e->leave($__internal_f65e52be2610ab5d2d93f26d522f834d3c71755bf79f2f4c30b7a692e8f07f9e_prof);

        
        $__internal_1db57738e937ffa286e452e725d560e25d8705d4a855de8bf095e432b7c9b214->leave($__internal_1db57738e937ffa286e452e725d560e25d8705d4a855de8bf095e432b7c9b214_prof);

    }

    // line 334
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_00524ba46cd87bcefdcf54a7354145519c09edb6b88ff27d77d64b15cf52de99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00524ba46cd87bcefdcf54a7354145519c09edb6b88ff27d77d64b15cf52de99->enter($__internal_00524ba46cd87bcefdcf54a7354145519c09edb6b88ff27d77d64b15cf52de99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fd5661261426303bab2fc1975472813baf495ae3628eccf3dcc3e8f9de0831c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5661261426303bab2fc1975472813baf495ae3628eccf3dcc3e8f9de0831c2->enter($__internal_fd5661261426303bab2fc1975472813baf495ae3628eccf3dcc3e8f9de0831c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 335
        echo "
                         <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"> </script>


         <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
          <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

        ";
        
        $__internal_fd5661261426303bab2fc1975472813baf495ae3628eccf3dcc3e8f9de0831c2->leave($__internal_fd5661261426303bab2fc1975472813baf495ae3628eccf3dcc3e8f9de0831c2_prof);

        
        $__internal_00524ba46cd87bcefdcf54a7354145519c09edb6b88ff27d77d64b15cf52de99->leave($__internal_00524ba46cd87bcefdcf54a7354145519c09edb6b88ff27d77d64b15cf52de99_prof);

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
        return array (  507 => 342,  501 => 339,  495 => 336,  492 => 335,  483 => 334,  467 => 300,  458 => 299,  423 => 309,  419 => 307,  417 => 299,  366 => 251,  359 => 247,  352 => 243,  297 => 190,  288 => 189,  269 => 8,  266 => 7,  257 => 6,  239 => 5,  227 => 348,  224 => 334,  222 => 189,  51 => 21,  42 => 16,  40 => 6,  36 => 5,  30 => 1,);
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
            background-color: #091DD4;color: white;padding: 4px;width: 65px;opacity: 0.5;
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
\t#091DD4;
            padding: 4px;
        }
        .div1{
            border: 1px solid #dcdcdc;padding: 0px;margin-right: 20px;background-color: white;width: 300px;margin-bottom: 5px;
        }
      
        .rech{
            height: 150px;background-color:
\tblue;opacity: 0.5;padding-top: 20px;width: 950px;margin-left: 15px;display: flex;color: white;
        }
        .contacte{
            height: 40px;display: flex;color: white;background-color: 
\t#091DD4;flex-wrap: wrap;opacity: 0.5;
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
    background-color: blue;
    color:white;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus{
    background-color:blue;
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
      <button type=\"submit\" class=\"btn btn-primary mb-2\">Submit</button>

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
