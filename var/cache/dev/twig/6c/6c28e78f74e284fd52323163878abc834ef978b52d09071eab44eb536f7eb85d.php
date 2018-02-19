<?php

/* HTLImmobilierBundle:Front:formsearch.html.twig */
class __TwigTemplate_0636b17d9fd4f29c666f6c356d9de9e99c076018ea122e4e95ca03aed96145ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "HTLImmobilierBundle:Front:formsearch.html.twig", 1);
        $this->blocks = array(
            'suggetions' => array($this, 'block_suggetions'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3608caac291b58a946b00d585d5e281a7d905523b5947e8fccebc32938a5c11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3608caac291b58a946b00d585d5e281a7d905523b5947e8fccebc32938a5c11->enter($__internal_f3608caac291b58a946b00d585d5e281a7d905523b5947e8fccebc32938a5c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:formsearch.html.twig"));

        $__internal_e4099bf719fd3eae49cb366482d2b678bb72214c9674b6ac5bc1ea38f4fe1b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4099bf719fd3eae49cb366482d2b678bb72214c9674b6ac5bc1ea38f4fe1b1a->enter($__internal_e4099bf719fd3eae49cb366482d2b678bb72214c9674b6ac5bc1ea38f4fe1b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:formsearch.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3608caac291b58a946b00d585d5e281a7d905523b5947e8fccebc32938a5c11->leave($__internal_f3608caac291b58a946b00d585d5e281a7d905523b5947e8fccebc32938a5c11_prof);

        
        $__internal_e4099bf719fd3eae49cb366482d2b678bb72214c9674b6ac5bc1ea38f4fe1b1a->leave($__internal_e4099bf719fd3eae49cb366482d2b678bb72214c9674b6ac5bc1ea38f4fe1b1a_prof);

    }

    // line 10
    public function block_suggetions($context, array $blocks = array())
    {
        $__internal_0a96f48485bbc75cdc1753a99f54f4e077c3a70ebe163b4256549180e66827ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a96f48485bbc75cdc1753a99f54f4e077c3a70ebe163b4256549180e66827ca->enter($__internal_0a96f48485bbc75cdc1753a99f54f4e077c3a70ebe163b4256549180e66827ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "suggetions"));

        $__internal_8d4ddfb1195cd5b29c8c16b313d4d6adde352cbdba65f67240164839e04ab30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4ddfb1195cd5b29c8c16b313d4d6adde352cbdba65f67240164839e04ab30a->enter($__internal_8d4ddfb1195cd5b29c8c16b313d4d6adde352cbdba65f67240164839e04ab30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "suggetions"));

        // line 11
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 12
            echo "
<article class=\"col-lg-4\">
      <div class=\"card-header entete\">  
          <h1>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libelletype", array()), "html", null, true);
            echo "</h1>
</div><div class=\"card-body\">
                      <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "image", array()), "html", null, true);
            echo "\" alt=\"Los Angeles\" class=\"thumbnail\" width=\"300px\" height=\"auto\">
               <div class=\"imgpetit\"> <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "image", array()), "html", null, true);
            echo "\" alt=\"Los Angeles\" class=\"thumbnail\" width=\"100px\" height=\"auto\">
                <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "image", array()), "html", null, true);
            echo "\" alt=\"Los Angeles\" class=\"thumbnail\" width=\"100px\" height=\"auto\">
                <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "image", array()), "html", null, true);
            echo "\" alt=\"Los Angeles\" class=\"thumbnail\" width=\"100px\" height=\"auto\">
                </div>
          
          </div>
     
    </article>



    <div class=\"col-lg-2 desc\"><h4 class=\"card-title\">Lieu:";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "<hr>Prix:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</h4>
                     <p class=\"card-text\">
                      ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "
                                    </p></div>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo " ";
        
        $__internal_8d4ddfb1195cd5b29c8c16b313d4d6adde352cbdba65f67240164839e04ab30a->leave($__internal_8d4ddfb1195cd5b29c8c16b313d4d6adde352cbdba65f67240164839e04ab30a_prof);

        
        $__internal_0a96f48485bbc75cdc1753a99f54f4e077c3a70ebe163b4256549180e66827ca->leave($__internal_0a96f48485bbc75cdc1753a99f54f4e077c3a70ebe163b4256549180e66827ca_prof);

    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        $__internal_37f60406deb6b5ef434b1a342658c84884aef468286bd9c6c2b26b5711f8559a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f60406deb6b5ef434b1a342658c84884aef468286bd9c6c2b26b5711f8559a->enter($__internal_37f60406deb6b5ef434b1a342658c84884aef468286bd9c6c2b26b5711f8559a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6da9e3c311b0b9329a09f00d39b3b881debe5c6eacfa17b368a3ee014e540eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da9e3c311b0b9329a09f00d39b3b881debe5c6eacfa17b368a3ee014e540eea->enter($__internal_6da9e3c311b0b9329a09f00d39b3b881debe5c6eacfa17b368a3ee014e540eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 39
        echo "

<!--
";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "





<div class=\"container bg-warning divtable\">
   
<h1>LISTE DES UTILISATEURS</h1>
<table class=\"table table-responsive table-condensed\" border=\"1px\">
<thead>
    <tr>
        <th>nombien</th>
         <th>localite</th>
         <th>typebien</th>
        <th>description</th>
        <th>prixlocation</th>
        <th>image</th>
    
    </tr>
</thead>
  ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 64
            echo "  <tbody>
    <tr>
        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libelletype", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
     <td><img class=\"card-img-top\" src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "image", array()), "html", null, true);
            echo "\" alt=\"Card image cap\"></td>

    </tr>
    </tbody>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            echo "<h1>ce bien n'existe pas</h1>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "</table></div>

-->


";
        
        $__internal_6da9e3c311b0b9329a09f00d39b3b881debe5c6eacfa17b368a3ee014e540eea->leave($__internal_6da9e3c311b0b9329a09f00d39b3b881debe5c6eacfa17b368a3ee014e540eea_prof);

        
        $__internal_37f60406deb6b5ef434b1a342658c84884aef468286bd9c6c2b26b5711f8559a->leave($__internal_37f60406deb6b5ef434b1a342658c84884aef468286bd9c6c2b26b5711f8559a_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:formsearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 79,  205 => 77,  193 => 71,  189 => 70,  185 => 69,  181 => 68,  177 => 67,  173 => 66,  169 => 64,  164 => 63,  140 => 42,  135 => 39,  126 => 38,  116 => 36,  110 => 35,  101 => 31,  94 => 29,  81 => 20,  76 => 19,  71 => 18,  66 => 17,  61 => 15,  56 => 12,  50 => 11,  41 => 10,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}








 {% block suggetions %}
  {% for bien in biens %}

<article class=\"col-lg-4\">
      <div class=\"card-header entete\">  
          <h1>{{bien.libelletype}}</h1>
</div><div class=\"card-body\">
                      <img src=\"{{ asset('image/') }}{{bien.image}}\" alt=\"Los Angeles\" class=\"thumbnail\" width=\"300px\" height=\"auto\">
               <div class=\"imgpetit\"> <img src=\"{{ asset('image/') }}{{bien.image}}\" alt=\"Los Angeles\" class=\"thumbnail\" width=\"100px\" height=\"auto\">
                <img src=\"{{ asset('image/') }}{{bien.image}}\" alt=\"Los Angeles\" class=\"thumbnail\" width=\"100px\" height=\"auto\">
                <img src=\"{{ asset('image/') }}{{bien.image}}\" alt=\"Los Angeles\" class=\"thumbnail\" width=\"100px\" height=\"auto\">
                </div>
          
          </div>
     
    </article>



    <div class=\"col-lg-2 desc\"><h4 class=\"card-title\">Lieu:{{bien.libellelocalite}}<hr>Prix:{{bien.prixlocation}}</h4>
                     <p class=\"card-text\">
                      {{bien.description}}
                                    </p></div>

{% else %}
  {% endfor %}
 {% endblock %}

{% block footer %}


<!--
{{form(form)}}





<div class=\"container bg-warning divtable\">
   
<h1>LISTE DES UTILISATEURS</h1>
<table class=\"table table-responsive table-condensed\" border=\"1px\">
<thead>
    <tr>
        <th>nombien</th>
         <th>localite</th>
         <th>typebien</th>
        <th>description</th>
        <th>prixlocation</th>
        <th>image</th>
    
    </tr>
</thead>
  {% for bien in biens %}
  <tbody>
    <tr>
        <td>{{bien.nombien}}</td>
        <td>{{bien.libellelocalite}}</td>
        <td>{{bien.libelletype}}</td>
        <td>{{bien.description}}</td>
        <td>{{bien.prixlocation}}</td>
     <td><img class=\"card-img-top\" src=\"{{ asset('image/') }}{{bien.image}}\" alt=\"Card image cap\"></td>

    </tr>
    </tbody>

{% else %}
<h1>ce bien n'existe pas</h1>
  {% endfor %}
</table></div>

-->


{% endblock %}











", "HTLImmobilierBundle:Front:formsearch.html.twig", "/var/www/html/hortala/src/HTL/ImmobilierBundle/Resources/views/Front/formsearch.html.twig");
    }
}
