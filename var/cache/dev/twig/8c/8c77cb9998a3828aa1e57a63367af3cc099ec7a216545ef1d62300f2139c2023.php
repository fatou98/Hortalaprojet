<?php

/* ::pageadmin.html.twig */
class __TwigTemplate_a5b83d794ad63ff5f053a23f16247f78c6820de90959b8efef77218a852d9aa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_541f77f1034c1ddc32e897c4f9d408257ed90eb5cd8aedcd13ed77e6428ab90d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541f77f1034c1ddc32e897c4f9d408257ed90eb5cd8aedcd13ed77e6428ab90d->enter($__internal_541f77f1034c1ddc32e897c4f9d408257ed90eb5cd8aedcd13ed77e6428ab90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::pageadmin.html.twig"));

        $__internal_95564a24ee46ba088561552742c02574c40dad51d24c8a4f6b8be3640bb3a7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95564a24ee46ba088561552742c02574c40dad51d24c8a4f6b8be3640bb3a7fe->enter($__internal_95564a24ee46ba088561552742c02574c40dad51d24c8a4f6b8be3640bb3a7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::pageadmin.html.twig"));

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
        // line 19
        echo "     
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
       <body>
    <div class=\"header\">
         <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-md-5\">
                  <!-- Logo -->
                  <div class=\"logo\">
                     <h1><a href=\"index.html\">GERANT</a></h1>
                  </div>
               </div>
               <div class=\"col-md-5\">
                  <div class=\"row\">
                    <div class=\"col-lg-12\">
                      <div class=\"input-group form\">
                           <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                           <span class=\"input-group-btn\">
                             <button class=\"btn btn-primary\" type=\"button\">Search</button>
                           </span>
                      </div>
                    </div>
                  </div>
               </div>
               <div class=\"col-md-2\">
                  <div class=\"navbar navbar-inverse\" role=\"banner\">
                      <nav class=\"collapse navbar-collapse bs-navbar-collapse navbar-right\" role=\"navigation\">
                        <ul class=\"nav navbar-nav\">
                          <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">My Account <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu animated fadeInUp\">
                              <li><a href=\"profile.html\">Profile</a></li>
                              <li><a href=\"login.html\">Logout</a></li>
                            </ul>
                          </li>
                        </ul>
                      </nav>
                  </div>
               </div>
            </div>
         </div>
    </div>

    <div class=\"page-content\">
        <div class=\"row\">
          <div class=\"col-md-2\">
            <div class=\"sidebar content-box\" style=\"display: block;\">
                <ul class=\"nav\">
                    <!-- Main menu -->
                    <li><a href=\"#\" id=\"bien\"><i class=\"glyphicon glyphicon-list\" ></i>Biens</a></li>
                    <li><a href=\"#\"  id=\"Reservations\"><i class=\"glyphicon glyphicon-list\"></i>Reservations</a></li>
                </ul>
             </div>
          </div>
          <div class=\"col-md-10\">
            <div class=\"row\">
                <div class=\"row\">
                    <div class=\"content-box-large\">
                        <div class=\"panel-heading\">
                            <div class=\"panel-title\"><h4>LISTE</h4></div>
                            <div class=\"panel-options\" id=\"liste\">
                                
                            </div>   
                        </div>
                        <div class=\"panel-body\"></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <footer>
         <div class=\"container\">
         
            <div class=\"copy text-center\">
               Copyright 2018 <a href='#'>HORTALA IMMO</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://code.jquery.com/jquery.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"js/custom.js\"></script>
  </body>
</html>
     ";
        // line 109
        $this->displayBlock('javascripts', $context, $blocks);
        // line 158
        echo "    </body>
</html>
";
        
        $__internal_541f77f1034c1ddc32e897c4f9d408257ed90eb5cd8aedcd13ed77e6428ab90d->leave($__internal_541f77f1034c1ddc32e897c4f9d408257ed90eb5cd8aedcd13ed77e6428ab90d_prof);

        
        $__internal_95564a24ee46ba088561552742c02574c40dad51d24c8a4f6b8be3640bb3a7fe->leave($__internal_95564a24ee46ba088561552742c02574c40dad51d24c8a4f6b8be3640bb3a7fe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2f356837daef13f11ce172b0bed269c33f79fc84121f371cec778c2edd32d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f356837daef13f11ce172b0bed269c33f79fc84121f371cec778c2edd32d67->enter($__internal_b2f356837daef13f11ce172b0bed269c33f79fc84121f371cec778c2edd32d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50b036e7a5eb66e5a17feafa57491b28b822967c71cde33dcac36db9d278219c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b036e7a5eb66e5a17feafa57491b28b822967c71cde33dcac36db9d278219c->enter($__internal_50b036e7a5eb66e5a17feafa57491b28b822967c71cde33dcac36db9d278219c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "HORTALA!";
        
        $__internal_50b036e7a5eb66e5a17feafa57491b28b822967c71cde33dcac36db9d278219c->leave($__internal_50b036e7a5eb66e5a17feafa57491b28b822967c71cde33dcac36db9d278219c_prof);

        
        $__internal_b2f356837daef13f11ce172b0bed269c33f79fc84121f371cec778c2edd32d67->leave($__internal_b2f356837daef13f11ce172b0bed269c33f79fc84121f371cec778c2edd32d67_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8cda19b1c7f18706dbb4ac4e4260393436f215cc37423ca9bd67f238eecec55e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cda19b1c7f18706dbb4ac4e4260393436f215cc37423ca9bd67f238eecec55e->enter($__internal_8cda19b1c7f18706dbb4ac4e4260393436f215cc37423ca9bd67f238eecec55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bc96d7621f03046495e0b4f10fd86095e20deebc3e87afa41ee6c96bc8806ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc96d7621f03046495e0b4f10fd86095e20deebc3e87afa41ee6c96bc8806ece->enter($__internal_bc96d7621f03046495e0b4f10fd86095e20deebc3e87afa41ee6c96bc8806ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style1.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datatables.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
                        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datatables.css"), "html", null, true);
        echo "\">

    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_bc96d7621f03046495e0b4f10fd86095e20deebc3e87afa41ee6c96bc8806ece->leave($__internal_bc96d7621f03046495e0b4f10fd86095e20deebc3e87afa41ee6c96bc8806ece_prof);

        
        $__internal_8cda19b1c7f18706dbb4ac4e4260393436f215cc37423ca9bd67f238eecec55e->leave($__internal_8cda19b1c7f18706dbb4ac4e4260393436f215cc37423ca9bd67f238eecec55e_prof);

    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86ee78e827754616208aa93f7d6bec8107d40e6d544571389e06bc6ba677c05c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86ee78e827754616208aa93f7d6bec8107d40e6d544571389e06bc6ba677c05c->enter($__internal_86ee78e827754616208aa93f7d6bec8107d40e6d544571389e06bc6ba677c05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ca7f41c4348e7e66a9ad32f09162a27b714d13c49b76f8e4e3c0b599406ef8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7f41c4348e7e66a9ad32f09162a27b714d13c49b76f8e4e3c0b599406ef8c1->enter($__internal_ca7f41c4348e7e66a9ad32f09162a27b714d13c49b76f8e4e3c0b599406ef8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 110
        echo "     <script type=\"text/javascript\">
        \$(document).ready(function(){
      \$(\"#liste\").load(\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeadmin");
        echo "\");

  \$('#bien').on(\"click\",function(){
        \$(\"#liste\").load(\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeadmin");
        echo "\");
    });
     \$('#Reservations').on(\"click\",function(){
        \$(\"#liste\").load(\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listereservation");
        echo "\");
    });
     \$(\"#reservationid\").on(\"click\",function(){
        \$(\"#liste\").load(\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details");
        echo "\");

     });
      });
/*  \$('#listebientable').dataTable({
      \"iDisplayLength\":5,
      \"language\": {
    \"sProcessing\":     \"Traitement en cours...\",
    \"sSearch\":         \"Rechercher&nbsp;:\",
    \"sLengthMenu\":     \"Afficher _MENU_ &eacute;l&eacute;ments\",
    \"sInfo\":           \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
    \"sInfoEmpty\":      \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
    \"sInfoFiltered\":   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
    \"sInfoPostFix\":    \"\",
    \"sLoadingRecords\": \"Chargement en cours...\",
    \"sZeroRecords\":    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
    \"sEmptyTable\":     \"Aucune donn&eacute;e disponible dans le tableau\",
    \"oPaginate\": {
        \"sFirst\":      \"Premier\",
        \"sPrevious\":   \"Pr&eacute;c&eacute;dent\",
        \"sNext\":       \"Suivant\",
        \"sLast\":       \"Dernier\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": activer pour trier la colonne par ordre croissant\",
        \"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
    }
}
  });
    */
</script>
        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"> </script>
        <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.js"), "html", null, true);
        echo "\"></script>

         ";
        
        $__internal_ca7f41c4348e7e66a9ad32f09162a27b714d13c49b76f8e4e3c0b599406ef8c1->leave($__internal_ca7f41c4348e7e66a9ad32f09162a27b714d13c49b76f8e4e3c0b599406ef8c1_prof);

        
        $__internal_86ee78e827754616208aa93f7d6bec8107d40e6d544571389e06bc6ba677c05c->leave($__internal_86ee78e827754616208aa93f7d6bec8107d40e6d544571389e06bc6ba677c05c_prof);

    }

    public function getTemplateName()
    {
        return "::pageadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 155,  286 => 154,  282 => 153,  278 => 152,  244 => 121,  238 => 118,  232 => 115,  226 => 112,  222 => 110,  213 => 109,  200 => 17,  195 => 15,  187 => 10,  183 => 9,  179 => 8,  176 => 7,  167 => 6,  149 => 5,  137 => 158,  135 => 109,  43 => 20,  40 => 19,  38 => 6,  34 => 5,  28 => 1,);
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
        <title>{% block title %}HORTALA!{% endblock %}</title>
{% block stylesheets %}

            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/style1.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/datatables.css') }}\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
                        <link rel=\"stylesheet\" href=\"{{ asset('css/datatables.css') }}\">

    <link href=\"{{ asset('css/styles.css')}}\" rel=\"stylesheet\">

{% endblock %}     
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
       <body>
    <div class=\"header\">
         <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-md-5\">
                  <!-- Logo -->
                  <div class=\"logo\">
                     <h1><a href=\"index.html\">GERANT</a></h1>
                  </div>
               </div>
               <div class=\"col-md-5\">
                  <div class=\"row\">
                    <div class=\"col-lg-12\">
                      <div class=\"input-group form\">
                           <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                           <span class=\"input-group-btn\">
                             <button class=\"btn btn-primary\" type=\"button\">Search</button>
                           </span>
                      </div>
                    </div>
                  </div>
               </div>
               <div class=\"col-md-2\">
                  <div class=\"navbar navbar-inverse\" role=\"banner\">
                      <nav class=\"collapse navbar-collapse bs-navbar-collapse navbar-right\" role=\"navigation\">
                        <ul class=\"nav navbar-nav\">
                          <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">My Account <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu animated fadeInUp\">
                              <li><a href=\"profile.html\">Profile</a></li>
                              <li><a href=\"login.html\">Logout</a></li>
                            </ul>
                          </li>
                        </ul>
                      </nav>
                  </div>
               </div>
            </div>
         </div>
    </div>

    <div class=\"page-content\">
        <div class=\"row\">
          <div class=\"col-md-2\">
            <div class=\"sidebar content-box\" style=\"display: block;\">
                <ul class=\"nav\">
                    <!-- Main menu -->
                    <li><a href=\"#\" id=\"bien\"><i class=\"glyphicon glyphicon-list\" ></i>Biens</a></li>
                    <li><a href=\"#\"  id=\"Reservations\"><i class=\"glyphicon glyphicon-list\"></i>Reservations</a></li>
                </ul>
             </div>
          </div>
          <div class=\"col-md-10\">
            <div class=\"row\">
                <div class=\"row\">
                    <div class=\"content-box-large\">
                        <div class=\"panel-heading\">
                            <div class=\"panel-title\"><h4>LISTE</h4></div>
                            <div class=\"panel-options\" id=\"liste\">
                                
                            </div>   
                        </div>
                        <div class=\"panel-body\"></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <footer>
         <div class=\"container\">
         
            <div class=\"copy text-center\">
               Copyright 2018 <a href='#'>HORTALA IMMO</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://code.jquery.com/jquery.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"js/custom.js\"></script>
  </body>
</html>
     {% block javascripts %}
     <script type=\"text/javascript\">
        \$(document).ready(function(){
      \$(\"#liste\").load(\"{{path('listeadmin')}}\");

  \$('#bien').on(\"click\",function(){
        \$(\"#liste\").load(\"{{path('listeadmin')}}\");
    });
     \$('#Reservations').on(\"click\",function(){
        \$(\"#liste\").load(\"{{path('listereservation')}}\");
    });
     \$(\"#reservationid\").on(\"click\",function(){
        \$(\"#liste\").load(\"{{path('details')}}\");

     });
      });
/*  \$('#listebientable').dataTable({
      \"iDisplayLength\":5,
      \"language\": {
    \"sProcessing\":     \"Traitement en cours...\",
    \"sSearch\":         \"Rechercher&nbsp;:\",
    \"sLengthMenu\":     \"Afficher _MENU_ &eacute;l&eacute;ments\",
    \"sInfo\":           \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
    \"sInfoEmpty\":      \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
    \"sInfoFiltered\":   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
    \"sInfoPostFix\":    \"\",
    \"sLoadingRecords\": \"Chargement en cours...\",
    \"sZeroRecords\":    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
    \"sEmptyTable\":     \"Aucune donn&eacute;e disponible dans le tableau\",
    \"oPaginate\": {
        \"sFirst\":      \"Premier\",
        \"sPrevious\":   \"Pr&eacute;c&eacute;dent\",
        \"sNext\":       \"Suivant\",
        \"sLast\":       \"Dernier\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": activer pour trier la colonne par ordre croissant\",
        \"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
    }
}
  });
    */
</script>
        <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('js/script.js') }}\"> </script>
        <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('js/datatables.js' )}}\"></script>

         {% endblock %}
    </body>
</html>
", "::pageadmin.html.twig", "/var/www/html/testhortala/app/Resources/views/pageadmin.html.twig");
    }
}
