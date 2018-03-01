<?php

/* HTLImmobilierBundle:Front:details.html.twig */
class __TwigTemplate_05d7a7c6325572fdb73c8e32378bef00f0e7001d1a5d378a155d444399cbdc3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base1.html.twig", "HTLImmobilierBundle:Front:details.html.twig", 1);
        $this->blocks = array(
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_702625b4976a6b78993c3f78bf3b21da6b79aae3416978333c4d42b06930ca31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_702625b4976a6b78993c3f78bf3b21da6b79aae3416978333c4d42b06930ca31->enter($__internal_702625b4976a6b78993c3f78bf3b21da6b79aae3416978333c4d42b06930ca31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:details.html.twig"));

        $__internal_c991603fc42cb8be5c955efdaf1db40899ce083bdef0066fb3c9a590b689a14c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c991603fc42cb8be5c955efdaf1db40899ce083bdef0066fb3c9a590b689a14c->enter($__internal_c991603fc42cb8be5c955efdaf1db40899ce083bdef0066fb3c9a590b689a14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_702625b4976a6b78993c3f78bf3b21da6b79aae3416978333c4d42b06930ca31->leave($__internal_702625b4976a6b78993c3f78bf3b21da6b79aae3416978333c4d42b06930ca31_prof);

        
        $__internal_c991603fc42cb8be5c955efdaf1db40899ce083bdef0066fb3c9a590b689a14c->leave($__internal_c991603fc42cb8be5c955efdaf1db40899ce083bdef0066fb3c9a590b689a14c_prof);

    }

    // line 2
    public function block_table($context, array $blocks = array())
    {
        $__internal_69c44f6e0097ef4b06b128ad861e8ee0625a3222904f06f50a13222e3fab4032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c44f6e0097ef4b06b128ad861e8ee0625a3222904f06f50a13222e3fab4032->enter($__internal_69c44f6e0097ef4b06b128ad861e8ee0625a3222904f06f50a13222e3fab4032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_9e9f295b61dfe332b825866807c8636845a58e5e71ef146d542ac1bb9232d811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9f295b61dfe332b825866807c8636845a58e5e71ef146d542ac1bb9232d811->enter($__internal_9e9f295b61dfe332b825866807c8636845a58e5e71ef146d542ac1bb9232d811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 3
        echo "<style>
div{
\tfont-family:Times New Roman;
}
.panel-title{
\tbackground-color:gray;
\tcolor:white;height:50px;border-radius:5px;text-align:center;

}
.col-md-6{
\tborder:1px solid gray;
\tborder-radius:10px;margin-right:20px;
}
.client{
\twidth:450px;margin-left:20px;
}
</style>
<div class=\"row\">
                <div class=\"col-md-6 client\">
                    <div class=\"content-box-large\">
                            <div class=\"panel-title\"><h1>CLIENT</h1></div>
                        <div class=\"panel-body\">
                        </div>";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 26
            echo "        <h3>Nom :";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</h3>
    <h3>    CNI :";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "numpiece", array()), "html", null, true);
            echo "</h3>
    <h3>    Tel :";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "tel", array()), "html", null, true);
            echo "</h3>
        <h3>Adresse :";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "adresse", array()), "html", null, true);
            echo "</h3>
      <h3>  Email :";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "email", array()), "html", null, true);
            echo "</h3>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"content-box-header\">
                                <div class=\"panel-title bg-primary\"><h1>BIEN</h1></div>
                            <div class=\"content-box-large box-with-header\">
                                  <h3>Type de bien :";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "typebien", array()), "html", null, true);
            echo "</h3>
                            <h3>      Localite :";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "libellelocalite", array()), "html", null, true);
            echo "</h3>
                           <h3>   Description :";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "typebien", array()), "html", null, true);
            echo "</h3>
                          <h3> Prix location :";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "</h3>
                        <h3>Images:
                                  ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 45
                echo " <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "image", array()), "html", null, true);
                echo "\" alt=\"Card image cap\" width=\"100px\" height=\"80px\">";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo " </h3>
                            </div>
                        </div>
                    </div>
                </div>   
               </div> <div class=\"col-md-2\"><a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
            echo "\" class=\"btn btn-default bg-dark\">RETOUR</a>
               <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default bg-dark\">Valider</a> </div>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "
  
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo " ";
        
        $__internal_9e9f295b61dfe332b825866807c8636845a58e5e71ef146d542ac1bb9232d811->leave($__internal_9e9f295b61dfe332b825866807c8636845a58e5e71ef146d542ac1bb9232d811_prof);

        
        $__internal_69c44f6e0097ef4b06b128ad861e8ee0625a3222904f06f50a13222e3fab4032->leave($__internal_69c44f6e0097ef4b06b128ad861e8ee0625a3222904f06f50a13222e3fab4032_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 58,  156 => 55,  148 => 52,  144 => 51,  137 => 46,  128 => 45,  124 => 44,  119 => 42,  115 => 41,  111 => 40,  107 => 39,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  78 => 26,  73 => 25,  49 => 3,  40 => 2,  11 => 1,);
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
{% block table %}
<style>
div{
\tfont-family:Times New Roman;
}
.panel-title{
\tbackground-color:gray;
\tcolor:white;height:50px;border-radius:5px;text-align:center;

}
.col-md-6{
\tborder:1px solid gray;
\tborder-radius:10px;margin-right:20px;
}
.client{
\twidth:450px;margin-left:20px;
}
</style>
<div class=\"row\">
                <div class=\"col-md-6 client\">
                    <div class=\"content-box-large\">
                            <div class=\"panel-title\"><h1>CLIENT</h1></div>
                        <div class=\"panel-body\">
                        </div>{% for reservation in reservations %}
        <h3>Nom :{{reservation.client.nomComplet}}</h3>
    <h3>    CNI :{{reservation.client.numpiece}}</h3>
    <h3>    Tel :{{reservation.client.tel}}</h3>
        <h3>Adresse :{{reservation.client.adresse}}</h3>
      <h3>  Email :{{reservation.client.email}}</h3>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"content-box-header\">
                                <div class=\"panel-title bg-primary\"><h1>BIEN</h1></div>
                            <div class=\"content-box-large box-with-header\">
                                  <h3>Type de bien :{{reservation.bien.typebien}}</h3>
                            <h3>      Localite :{{reservation.bien.libellelocalite}}</h3>
                           <h3>   Description :{{reservation.bien.typebien}}</h3>
                          <h3> Prix location :{{reservation.bien.prixlocation}}</h3>
                        <h3>Images:
                                  {% for image in reservation.bien.images %}
 <img class=\"card-img-top\" src=\"{{ asset('image/') }}{{image.image}}\" alt=\"Card image cap\" width=\"100px\" height=\"80px\">{% endfor %}
 </h3>
                            </div>
                        </div>
                    </div>
                </div>   
               </div> <div class=\"col-md-2\"><a href=\"{{path('accueil')}}\" class=\"btn btn-default bg-dark\">RETOUR</a>
               <a href=\"{{path('contrat',{id:reservation.id})}}\" class=\"btn btn-default bg-dark\">Valider</a> </div>

{% else %}

  
  {% endfor %}
 {% endblock %}", "HTLImmobilierBundle:Front:details.html.twig", "/var/www/html/testhortala/src/HTL/ImmobilierBundle/Resources/views/Front/details.html.twig");
    }
}
