<?php

/* HTLImmobilierBundle:Front:accueil.html.twig */
class __TwigTemplate_afa557905a675e3bee7afd78e2c3e18941139f0809c818ed030a4dd2b27bf1ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base1.html.twig", "HTLImmobilierBundle:Front:accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6b710c3cd43512625014c8718de9e5dca8934b314b9881b9d31c0ca8b1ce689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6b710c3cd43512625014c8718de9e5dca8934b314b9881b9d31c0ca8b1ce689->enter($__internal_c6b710c3cd43512625014c8718de9e5dca8934b314b9881b9d31c0ca8b1ce689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:accueil.html.twig"));

        $__internal_20aaefba214bd473742e8bd9880516b78d0745bb4e16e38dc19f64a4e3301329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20aaefba214bd473742e8bd9880516b78d0745bb4e16e38dc19f64a4e3301329->enter($__internal_20aaefba214bd473742e8bd9880516b78d0745bb4e16e38dc19f64a4e3301329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6b710c3cd43512625014c8718de9e5dca8934b314b9881b9d31c0ca8b1ce689->leave($__internal_c6b710c3cd43512625014c8718de9e5dca8934b314b9881b9d31c0ca8b1ce689_prof);

        
        $__internal_20aaefba214bd473742e8bd9880516b78d0745bb4e16e38dc19f64a4e3301329->leave($__internal_20aaefba214bd473742e8bd9880516b78d0745bb4e16e38dc19f64a4e3301329_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8746c77ef66a9a75aa935b081fecc041efa1dcb81c9b950f2afeb86fc197890b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8746c77ef66a9a75aa935b081fecc041efa1dcb81c9b950f2afeb86fc197890b->enter($__internal_8746c77ef66a9a75aa935b081fecc041efa1dcb81c9b950f2afeb86fc197890b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e6a564a4b9f7a19ece680def4cd831b44ab54e949b2313a9292ca8178b8be7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6a564a4b9f7a19ece680def4cd831b44ab54e949b2313a9292ca8178b8be7a->enter($__internal_1e6a564a4b9f7a19ece680def4cd831b44ab54e949b2313a9292ca8178b8be7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "               <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.js"), "html", null, true);
        echo "\"></script>
   
<style>section{
            height: auto;
            margin-top: 10px;display: flex;
       }tr,td{
           color: black;
       }
    </style>

        <div class=\"container-fluid\">
            <header class=\"row bg-primary\"></header>
            <section class=\"row\">
                <aside class=\"col-lg-2\"><nav class=\"navbar navbar-default sidebar\" role=\"navigation\">
    <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-sidebar-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>      
    </div>
    <div class=\"collapse navbar-collapse\" id=\"bs-sidebar-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\" style=\"width: 80px;\">
        <li><a href=\"#\" id=\"bien\">BIEN<span style=\"font-size:16px;\" class=\"pull-right hidden-xs showopacity glyphicon glyphicon-home\"></span></a></li>
        <li>
          <a href=\"#\" id=\"localite\">RESERVATION<span style=\"font-size:16px;\" class=\"pull-right hidden-xs showopacity glyphicon glyphicon-map-marker\"></span></a>
        </li>          
               
      </ul>
    </div>
  </div>
                   
</nav></aside>
                <article class=\"col-lg-10\" id=\"article\">
</article>
            </section>
            <footer class=\"row\"></footer>
        </div>
               <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
   
<script>
    \$(document).ready(function(){
      \$(\"#article\").load(\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeadmin");
        echo "\");

  \$('#bien').on(\"click\",function(){
        \$(\"#article\").load(\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeadmin");
        echo "\");
    });
     \$('#localite').on(\"click\",function(){
        \$(\"#article\").load(\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listereservation");
        echo "\");
    });
        \$('#listebientable').dataTable({
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
         
    });
    
</script>
  <script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_1e6a564a4b9f7a19ece680def4cd831b44ab54e949b2313a9292ca8178b8be7a->leave($__internal_1e6a564a4b9f7a19ece680def4cd831b44ab54e949b2313a9292ca8178b8be7a_prof);

        
        $__internal_8746c77ef66a9a75aa935b081fecc041efa1dcb81c9b950f2afeb86fc197890b->leave($__internal_8746c77ef66a9a75aa935b081fecc041efa1dcb81c9b950f2afeb86fc197890b_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 85,  116 => 54,  110 => 51,  104 => 48,  97 => 44,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base1.html.twig\" %}
{% block body %}
               <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('js/datatables.js' )}}\"></script>
   
<style>section{
            height: auto;
            margin-top: 10px;display: flex;
       }tr,td{
           color: black;
       }
    </style>

        <div class=\"container-fluid\">
            <header class=\"row bg-primary\"></header>
            <section class=\"row\">
                <aside class=\"col-lg-2\"><nav class=\"navbar navbar-default sidebar\" role=\"navigation\">
    <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-sidebar-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>      
    </div>
    <div class=\"collapse navbar-collapse\" id=\"bs-sidebar-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\" style=\"width: 80px;\">
        <li><a href=\"#\" id=\"bien\">BIEN<span style=\"font-size:16px;\" class=\"pull-right hidden-xs showopacity glyphicon glyphicon-home\"></span></a></li>
        <li>
          <a href=\"#\" id=\"localite\">RESERVATION<span style=\"font-size:16px;\" class=\"pull-right hidden-xs showopacity glyphicon glyphicon-map-marker\"></span></a>
        </li>          
               
      </ul>
    </div>
  </div>
                   
</nav></aside>
                <article class=\"col-lg-10\" id=\"article\">
</article>
            </section>
            <footer class=\"row\"></footer>
        </div>
               <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
   
<script>
    \$(document).ready(function(){
      \$(\"#article\").load(\"{{path('listeadmin')}}\");

  \$('#bien').on(\"click\",function(){
        \$(\"#article\").load(\"{{path('listeadmin')}}\");
    });
     \$('#localite').on(\"click\",function(){
        \$(\"#article\").load(\"{{path('listereservation')}}\");
    });
        \$('#listebientable').dataTable({
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
         
    });
    
</script>
  <script type=\"text/javascript\" src=\"{{ asset('js/datatables.js' )}}\"></script>

{% endblock %} ", "HTLImmobilierBundle:Front:accueil.html.twig", "/var/www/html/hortala/src/HTL/ImmobilierBundle/Resources/views/Front/accueil.html.twig");
    }
}
