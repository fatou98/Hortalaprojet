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
        $__internal_a747beb8ab25c9a12e165a664595cbf80b146afd3d7465e0e9b606792dc4567a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a747beb8ab25c9a12e165a664595cbf80b146afd3d7465e0e9b606792dc4567a->enter($__internal_a747beb8ab25c9a12e165a664595cbf80b146afd3d7465e0e9b606792dc4567a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8667b067d828759978f6892e5a96c592145ce37528201a1c91acb3eff6175d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8667b067d828759978f6892e5a96c592145ce37528201a1c91acb3eff6175d35->enter($__internal_8667b067d828759978f6892e5a96c592145ce37528201a1c91acb3eff6175d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
}select{
    color:black;
}
        </style>
        ";
        // line 192
        $this->displayBlock('body', $context, $blocks);
        // line 348
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 362
        echo "    </body>
</html>
";
        
        $__internal_a747beb8ab25c9a12e165a664595cbf80b146afd3d7465e0e9b606792dc4567a->leave($__internal_a747beb8ab25c9a12e165a664595cbf80b146afd3d7465e0e9b606792dc4567a_prof);

        
        $__internal_8667b067d828759978f6892e5a96c592145ce37528201a1c91acb3eff6175d35->leave($__internal_8667b067d828759978f6892e5a96c592145ce37528201a1c91acb3eff6175d35_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_604c470e7b6503c881c50f9a049169936f1f517d1b781e7585e28c0db6c57e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604c470e7b6503c881c50f9a049169936f1f517d1b781e7585e28c0db6c57e1d->enter($__internal_604c470e7b6503c881c50f9a049169936f1f517d1b781e7585e28c0db6c57e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c25e666fb87582b1a02043fafc7b45fd4cfad83ed71058e15a145e970e53c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c25e666fb87582b1a02043fafc7b45fd4cfad83ed71058e15a145e970e53c83->enter($__internal_6c25e666fb87582b1a02043fafc7b45fd4cfad83ed71058e15a145e970e53c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6c25e666fb87582b1a02043fafc7b45fd4cfad83ed71058e15a145e970e53c83->leave($__internal_6c25e666fb87582b1a02043fafc7b45fd4cfad83ed71058e15a145e970e53c83_prof);

        
        $__internal_604c470e7b6503c881c50f9a049169936f1f517d1b781e7585e28c0db6c57e1d->leave($__internal_604c470e7b6503c881c50f9a049169936f1f517d1b781e7585e28c0db6c57e1d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_64a68b55dc8cfb2330e54356a823dfe909e87379e3d0551d684f38b8dab5d97c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a68b55dc8cfb2330e54356a823dfe909e87379e3d0551d684f38b8dab5d97c->enter($__internal_64a68b55dc8cfb2330e54356a823dfe909e87379e3d0551d684f38b8dab5d97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3d318299b58c36496aac4574e22e16118d12a28fa914016ae189d1f09664aa09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d318299b58c36496aac4574e22e16118d12a28fa914016ae189d1f09664aa09->enter($__internal_3d318299b58c36496aac4574e22e16118d12a28fa914016ae189d1f09664aa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3d318299b58c36496aac4574e22e16118d12a28fa914016ae189d1f09664aa09->leave($__internal_3d318299b58c36496aac4574e22e16118d12a28fa914016ae189d1f09664aa09_prof);

        
        $__internal_64a68b55dc8cfb2330e54356a823dfe909e87379e3d0551d684f38b8dab5d97c->leave($__internal_64a68b55dc8cfb2330e54356a823dfe909e87379e3d0551d684f38b8dab5d97c_prof);

    }

    // line 192
    public function block_body($context, array $blocks = array())
    {
        $__internal_10d92f019f8191ce07e309ecb4e94c24569f804f1d32a48c4d0cd4433a5e54ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d92f019f8191ce07e309ecb4e94c24569f804f1d32a48c4d0cd4433a5e54ab->enter($__internal_10d92f019f8191ce07e309ecb4e94c24569f804f1d32a48c4d0cd4433a5e54ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f429d46c3fb435125e102a82614d23f6cc5ffe8a58fce9ceadf171610d72ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f429d46c3fb435125e102a82614d23f6cc5ffe8a58fce9ceadf171610d72ed1->enter($__internal_7f429d46c3fb435125e102a82614d23f6cc5ffe8a58fce9ceadf171610d72ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 193
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
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/ban.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" class=\"baniere1\" width=\"950px\" height=\"500px\">
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/ban1.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" class=\"baniere1\" width=\"950px\" height=\"500px\">
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/baniere.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" class=\"baniere1\" width=\"950px\" height=\"500px\">
    </div>
  </div>
</div><div class=\"col-sm-12 rech\" >
                                            <form class=\"form-inline\" method=\"post\">
                                              <label for=\"usr\">Type:</label>

                                              <select name=\"libelletype\"><option value=\"\" selected=\"true\">Choisir un type</option>
                                              ";
        // line 262
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typebiens"] ?? $this->getContext($context, "typebiens")));
        foreach ($context['_seq'] as $context["_key"] => $context["typebien"]) {
            // line 263
            echo "                                              <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typebien"], "libelletype", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typebien"], "libelletype", array()), "html", null, true);
            echo "</option>
                                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typebien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "                                                     </select>


                                              <label for=\"localite\">Localite:</label>
                                              <select name=\"libellelocalite\"><option value=\"\" selected=\"true\">Choisir une localite</option>

                                              ";
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localites"] ?? $this->getContext($context, "localites")));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 272
            echo "                                              <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libellelocalite", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libellelocalite", array()), "html", null, true);
            echo "</option>
                                                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "                                                                </select>

                                              <label for=\"budget\">Budget:</label>
                                              <input type=\"text\" class=\"form-control\" name=\"prixlocation\">                                                  <a type=\"submit\" class=\"btn btn-danger mb-2\" id=\"plus\" href=\"#\">Plus d'option</a>
                                                  <button type=\"submit\" class=\"btn btn-danger mb-2\">Submit</button>

                                                  <div id=\"option\">
                                              <label for=\"description\">Description:</label>
                                              <input type=\"text\" class=\"form-control\" name=\"description\"></div>
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
        // line 313
        $this->displayBlock('aside', $context, $blocks);
        // line 321
        echo "                </div>
    <footer class=\"row\">
                    <div class=\"col-lg-8 divfooter\"><img class=\"thumbnail image-responsive\" src=\"";
        // line 323
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
        
        $__internal_7f429d46c3fb435125e102a82614d23f6cc5ffe8a58fce9ceadf171610d72ed1->leave($__internal_7f429d46c3fb435125e102a82614d23f6cc5ffe8a58fce9ceadf171610d72ed1_prof);

        
        $__internal_10d92f019f8191ce07e309ecb4e94c24569f804f1d32a48c4d0cd4433a5e54ab->leave($__internal_10d92f019f8191ce07e309ecb4e94c24569f804f1d32a48c4d0cd4433a5e54ab_prof);

    }

    // line 313
    public function block_aside($context, array $blocks = array())
    {
        $__internal_56f146ad0a3377c9017a535fa31a9f3b92b3e9535e3364a5aa532b55302bb2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f146ad0a3377c9017a535fa31a9f3b92b3e9535e3364a5aa532b55302bb2fb->enter($__internal_56f146ad0a3377c9017a535fa31a9f3b92b3e9535e3364a5aa532b55302bb2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_1dbf571141b003dbd8bd02e32c3ee95fe022daae68c42315d6c8fef08543fb2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dbf571141b003dbd8bd02e32c3ee95fe022daae68c42315d6c8fef08543fb2f->enter($__internal_1dbf571141b003dbd8bd02e32c3ee95fe022daae68c42315d6c8fef08543fb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 314
        echo "
           <aside class=\"row aside1\">



            </aside>
             ";
        
        $__internal_1dbf571141b003dbd8bd02e32c3ee95fe022daae68c42315d6c8fef08543fb2f->leave($__internal_1dbf571141b003dbd8bd02e32c3ee95fe022daae68c42315d6c8fef08543fb2f_prof);

        
        $__internal_56f146ad0a3377c9017a535fa31a9f3b92b3e9535e3364a5aa532b55302bb2fb->leave($__internal_56f146ad0a3377c9017a535fa31a9f3b92b3e9535e3364a5aa532b55302bb2fb_prof);

    }

    // line 348
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a92ddf7f9b4d138d67651b14e49d240530a45174142e6608f7a37604848f0bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a92ddf7f9b4d138d67651b14e49d240530a45174142e6608f7a37604848f0bf7->enter($__internal_a92ddf7f9b4d138d67651b14e49d240530a45174142e6608f7a37604848f0bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_34a4db9145181bb3dbed55130f3e549928462a037a25339f5d9f4f15dd90fd8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a4db9145181bb3dbed55130f3e549928462a037a25339f5d9f4f15dd90fd8a->enter($__internal_34a4db9145181bb3dbed55130f3e549928462a037a25339f5d9f4f15dd90fd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 349
        echo "
                         <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"> </script>


         <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
          <script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

        ";
        
        $__internal_34a4db9145181bb3dbed55130f3e549928462a037a25339f5d9f4f15dd90fd8a->leave($__internal_34a4db9145181bb3dbed55130f3e549928462a037a25339f5d9f4f15dd90fd8a_prof);

        
        $__internal_a92ddf7f9b4d138d67651b14e49d240530a45174142e6608f7a37604848f0bf7->leave($__internal_a92ddf7f9b4d138d67651b14e49d240530a45174142e6608f7a37604848f0bf7_prof);

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
        return array (  549 => 356,  543 => 353,  537 => 350,  534 => 349,  525 => 348,  509 => 314,  500 => 313,  465 => 323,  461 => 321,  459 => 313,  418 => 274,  407 => 272,  403 => 271,  395 => 265,  384 => 263,  380 => 262,  369 => 254,  362 => 250,  355 => 246,  300 => 193,  291 => 192,  272 => 8,  269 => 7,  260 => 6,  242 => 5,  230 => 362,  227 => 348,  225 => 192,  51 => 21,  42 => 16,  40 => 6,  36 => 5,  30 => 1,);
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
}select{
    color:black;
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

                                              <select name=\"libelletype\"><option value=\"\" selected=\"true\">Choisir un type</option>
                                              {% for typebien in typebiens %}
                                              <option value=\"{{typebien.libelletype}}\">{{typebien.libelletype}}</option>
                                                   {% endfor %}
                                                     </select>


                                              <label for=\"localite\">Localite:</label>
                                              <select name=\"libellelocalite\"><option value=\"\" selected=\"true\">Choisir une localite</option>

                                              {% for localite in localites %}
                                              <option value=\"{{localite.libellelocalite}}\">{{localite.libellelocalite}}</option>
                                                       {% endfor %}
                                                                </select>

                                              <label for=\"budget\">Budget:</label>
                                              <input type=\"text\" class=\"form-control\" name=\"prixlocation\">                                                  <a type=\"submit\" class=\"btn btn-danger mb-2\" id=\"plus\" href=\"#\">Plus d'option</a>
                                                  <button type=\"submit\" class=\"btn btn-danger mb-2\">Submit</button>

                                                  <div id=\"option\">
                                              <label for=\"description\">Description:</label>
                                              <input type=\"text\" class=\"form-control\" name=\"description\"></div>
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
