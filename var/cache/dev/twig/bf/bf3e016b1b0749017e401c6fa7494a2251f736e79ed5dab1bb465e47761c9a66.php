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
        $__internal_61a6ad24700d48f9f975abe3416bffea2d7c12f2e79203ba80c13aaf75e64d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a6ad24700d48f9f975abe3416bffea2d7c12f2e79203ba80c13aaf75e64d6b->enter($__internal_61a6ad24700d48f9f975abe3416bffea2d7c12f2e79203ba80c13aaf75e64d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_25a676eee5b60be8a8bd58f96d27c675e9bd58c9dd3d91d5d4f7e9427272f5f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a676eee5b60be8a8bd58f96d27c675e9bd58c9dd3d91d5d4f7e9427272f5f2->enter($__internal_25a676eee5b60be8a8bd58f96d27c675e9bd58c9dd3d91d5d4f7e9427272f5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 175
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 189
        echo "    </body>
</html>
";
        
        $__internal_61a6ad24700d48f9f975abe3416bffea2d7c12f2e79203ba80c13aaf75e64d6b->leave($__internal_61a6ad24700d48f9f975abe3416bffea2d7c12f2e79203ba80c13aaf75e64d6b_prof);

        
        $__internal_25a676eee5b60be8a8bd58f96d27c675e9bd58c9dd3d91d5d4f7e9427272f5f2->leave($__internal_25a676eee5b60be8a8bd58f96d27c675e9bd58c9dd3d91d5d4f7e9427272f5f2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a352fe61c406b61a6a8c9eb5ae66dd8f624fdcfd7e7dbee5795a69fae9526b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a352fe61c406b61a6a8c9eb5ae66dd8f624fdcfd7e7dbee5795a69fae9526b62->enter($__internal_a352fe61c406b61a6a8c9eb5ae66dd8f624fdcfd7e7dbee5795a69fae9526b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_580f5d540112d4924c945f0d24b9c2fa75b80cd2bf7b83dc7dded37b8a6f67d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580f5d540112d4924c945f0d24b9c2fa75b80cd2bf7b83dc7dded37b8a6f67d5->enter($__internal_580f5d540112d4924c945f0d24b9c2fa75b80cd2bf7b83dc7dded37b8a6f67d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_580f5d540112d4924c945f0d24b9c2fa75b80cd2bf7b83dc7dded37b8a6f67d5->leave($__internal_580f5d540112d4924c945f0d24b9c2fa75b80cd2bf7b83dc7dded37b8a6f67d5_prof);

        
        $__internal_a352fe61c406b61a6a8c9eb5ae66dd8f624fdcfd7e7dbee5795a69fae9526b62->leave($__internal_a352fe61c406b61a6a8c9eb5ae66dd8f624fdcfd7e7dbee5795a69fae9526b62_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3cfdf25826770c7d7b5971d640bf9bb6cc96a472f29dde45e205a030b2279b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfdf25826770c7d7b5971d640bf9bb6cc96a472f29dde45e205a030b2279b1d->enter($__internal_3cfdf25826770c7d7b5971d640bf9bb6cc96a472f29dde45e205a030b2279b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_651b8793418ab122ee65baa26a8a355e1a734a4922b7603fc18401978f69d8e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651b8793418ab122ee65baa26a8a355e1a734a4922b7603fc18401978f69d8e4->enter($__internal_651b8793418ab122ee65baa26a8a355e1a734a4922b7603fc18401978f69d8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

";
        
        $__internal_651b8793418ab122ee65baa26a8a355e1a734a4922b7603fc18401978f69d8e4->leave($__internal_651b8793418ab122ee65baa26a8a355e1a734a4922b7603fc18401978f69d8e4_prof);

        
        $__internal_3cfdf25826770c7d7b5971d640bf9bb6cc96a472f29dde45e205a030b2279b1d->leave($__internal_3cfdf25826770c7d7b5971d640bf9bb6cc96a472f29dde45e205a030b2279b1d_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_10077dec4bd559f8739340b9bf8d6f4809b203eed96b32a5c42b0dd08b71562c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10077dec4bd559f8739340b9bf8d6f4809b203eed96b32a5c42b0dd08b71562c->enter($__internal_10077dec4bd559f8739340b9bf8d6f4809b203eed96b32a5c42b0dd08b71562c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1dd03f13c01d7e01943dc3116e0eb60ee8f4c931a17b1bc5b90d899ed891edd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd03f13c01d7e01943dc3116e0eb60ee8f4c931a17b1bc5b90d899ed891edd4->enter($__internal_1dd03f13c01d7e01943dc3116e0eb60ee8f4c931a17b1bc5b90d899ed891edd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "
<div class=\"row contacte\"><h4 class=\"tel\"><span class=\"glyphicon glyphicon-earphone\" style=\"font-size:20px;\">
</span>+221 70 000 00 00/77 000 000 00</h4><h4 id=\"social\"> <a href=\"#\" class=\"liensocial\">
<span class=\"fa fa-facebook-square\" style=\"font-size:28px;\"></span></a><a href=\"#\" class=\"liensocial\">
<span class=\"fa fa-linkedin-square\" style=\"font-size:28px;\"></span></a><a href=\"#\" class=\"liensocial\">
<span class=\"fa fa-twitter-square\" style=\"font-size:28px;\"></span></a></h4></div>
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
                    </nav>            <div class=\"load\">

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
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/ban.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" class=\"baniere1\" width=\"950px\" height=\"500px\">
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/ban1.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" class=\"baniere1\" width=\"950px\" height=\"500px\">
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/baniere.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" class=\"baniere1\" width=\"950px\" height=\"500px\">
    </div>
  </div>
</div><div class=\"col-sm-12 rech\" >
                                            <form class=\"form-inline\" method=\"post\">
                                              <label for=\"usr\">Type:</label>
                                              <select name=\"libelletype\"><option value=\"\" selected=\"true\">Choisir un type</option>
                                              ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typebiens"] ?? $this->getContext($context, "typebiens")));
        foreach ($context['_seq'] as $context["_key"] => $context["typebien"]) {
            // line 94
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
        // line 96
        echo "                                                     </select>
                                              <label for=\"localite\">Localite:</label>
                                              <select name=\"libellelocalite\"><option value=\"\" selected=\"true\">Choisir une localite</option>

                                              ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localites"] ?? $this->getContext($context, "localites")));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 101
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
        // line 103
        echo "                                                                </select>
                                              <label for=\"budget\">Budget:</label>
                                              <input type=\"number\" class=\"form-control\" name=\"prixlocation\" min=\"30000\">      <a type=\"submit\" class=\"btn btn-danger mb-2\" id=\"plus\" href=\"#\">Plus d'option</a>
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
        // line 140
        $this->displayBlock('aside', $context, $blocks);
        // line 148
        echo "                </div>
    <footer class=\"row\">
                    <div class=\"col-lg-8 divfooter\"><img class=\"thumbnail image-responsive\" src=\"";
        // line 150
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
        
        $__internal_1dd03f13c01d7e01943dc3116e0eb60ee8f4c931a17b1bc5b90d899ed891edd4->leave($__internal_1dd03f13c01d7e01943dc3116e0eb60ee8f4c931a17b1bc5b90d899ed891edd4_prof);

        
        $__internal_10077dec4bd559f8739340b9bf8d6f4809b203eed96b32a5c42b0dd08b71562c->leave($__internal_10077dec4bd559f8739340b9bf8d6f4809b203eed96b32a5c42b0dd08b71562c_prof);

    }

    // line 140
    public function block_aside($context, array $blocks = array())
    {
        $__internal_dfb0e47b30c72b0a5e6091f98051470603d86b968e46c46250a84433577d7c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfb0e47b30c72b0a5e6091f98051470603d86b968e46c46250a84433577d7c01->enter($__internal_dfb0e47b30c72b0a5e6091f98051470603d86b968e46c46250a84433577d7c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_54951f638cad51475de79db31772c12ade49d3352683fe6be0c86b3967aa64b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54951f638cad51475de79db31772c12ade49d3352683fe6be0c86b3967aa64b0->enter($__internal_54951f638cad51475de79db31772c12ade49d3352683fe6be0c86b3967aa64b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 141
        echo "
           <aside class=\"row aside1\">



            </aside>
             ";
        
        $__internal_54951f638cad51475de79db31772c12ade49d3352683fe6be0c86b3967aa64b0->leave($__internal_54951f638cad51475de79db31772c12ade49d3352683fe6be0c86b3967aa64b0_prof);

        
        $__internal_dfb0e47b30c72b0a5e6091f98051470603d86b968e46c46250a84433577d7c01->leave($__internal_dfb0e47b30c72b0a5e6091f98051470603d86b968e46c46250a84433577d7c01_prof);

    }

    // line 175
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8bd8ce1026765a2559044898f35f4a39af77a6672cb4cda0c9e19fcb022db102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd8ce1026765a2559044898f35f4a39af77a6672cb4cda0c9e19fcb022db102->enter($__internal_8bd8ce1026765a2559044898f35f4a39af77a6672cb4cda0c9e19fcb022db102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fe5d94596fa415321e5f27244cd789ebbf7c6a9d0bb4ae896a1af17383dc74e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5d94596fa415321e5f27244cd789ebbf7c6a9d0bb4ae896a1af17383dc74e9->enter($__internal_fe5d94596fa415321e5f27244cd789ebbf7c6a9d0bb4ae896a1af17383dc74e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 176
        echo "
                         <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"> </script>


         <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
          <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

        ";
        
        $__internal_fe5d94596fa415321e5f27244cd789ebbf7c6a9d0bb4ae896a1af17383dc74e9->leave($__internal_fe5d94596fa415321e5f27244cd789ebbf7c6a9d0bb4ae896a1af17383dc74e9_prof);

        
        $__internal_8bd8ce1026765a2559044898f35f4a39af77a6672cb4cda0c9e19fcb022db102->leave($__internal_8bd8ce1026765a2559044898f35f4a39af77a6672cb4cda0c9e19fcb022db102_prof);

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
        return array (  376 => 183,  370 => 180,  364 => 177,  361 => 176,  352 => 175,  336 => 141,  327 => 140,  292 => 150,  288 => 148,  286 => 140,  247 => 103,  236 => 101,  232 => 100,  226 => 96,  215 => 94,  211 => 93,  201 => 86,  194 => 82,  187 => 78,  128 => 21,  119 => 20,  106 => 15,  96 => 8,  93 => 7,  84 => 6,  66 => 5,  54 => 189,  51 => 175,  49 => 20,  42 => 17,  40 => 6,  36 => 5,  30 => 1,);
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
  <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">

{% endblock %}        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}

<div class=\"row contacte\"><h4 class=\"tel\"><span class=\"glyphicon glyphicon-earphone\" style=\"font-size:20px;\">
</span>+221 70 000 00 00/77 000 000 00</h4><h4 id=\"social\"> <a href=\"#\" class=\"liensocial\">
<span class=\"fa fa-facebook-square\" style=\"font-size:28px;\"></span></a><a href=\"#\" class=\"liensocial\">
<span class=\"fa fa-linkedin-square\" style=\"font-size:28px;\"></span></a><a href=\"#\" class=\"liensocial\">
<span class=\"fa fa-twitter-square\" style=\"font-size:28px;\"></span></a></h4></div>
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
                    </nav>            <div class=\"load\">

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
                                              <input type=\"number\" class=\"form-control\" name=\"prixlocation\" min=\"30000\">      <a type=\"submit\" class=\"btn btn-danger mb-2\" id=\"plus\" href=\"#\">Plus d'option</a>
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
", "::base.html.twig", "/var/www/html/testhortala/app/Resources/views/base.html.twig");
    }
}
