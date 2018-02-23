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
            'autres' => array($this, 'block_autres'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1eb1fd8c512ce0d7a502c76ff29929af6e1bc7e6201c64d7b3bea181e7069566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb1fd8c512ce0d7a502c76ff29929af6e1bc7e6201c64d7b3bea181e7069566->enter($__internal_1eb1fd8c512ce0d7a502c76ff29929af6e1bc7e6201c64d7b3bea181e7069566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:formsearch.html.twig"));

        $__internal_1d02c93f44dc5062435081f10eeabda43c00cc62c5c520d256dec205d8c7e181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d02c93f44dc5062435081f10eeabda43c00cc62c5c520d256dec205d8c7e181->enter($__internal_1d02c93f44dc5062435081f10eeabda43c00cc62c5c520d256dec205d8c7e181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:formsearch.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eb1fd8c512ce0d7a502c76ff29929af6e1bc7e6201c64d7b3bea181e7069566->leave($__internal_1eb1fd8c512ce0d7a502c76ff29929af6e1bc7e6201c64d7b3bea181e7069566_prof);

        
        $__internal_1d02c93f44dc5062435081f10eeabda43c00cc62c5c520d256dec205d8c7e181->leave($__internal_1d02c93f44dc5062435081f10eeabda43c00cc62c5c520d256dec205d8c7e181_prof);

    }

    // line 10
    public function block_suggetions($context, array $blocks = array())
    {
        $__internal_c8217bf754e920a1aa6204bc142b37f8eb703a1464b1097bc7e7e523d8bf878f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8217bf754e920a1aa6204bc142b37f8eb703a1464b1097bc7e7e523d8bf878f->enter($__internal_c8217bf754e920a1aa6204bc142b37f8eb703a1464b1097bc7e7e523d8bf878f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "suggetions"));

        $__internal_b79dd54040fbd4b6c10db75972d7b29343a98733c1fba6ad3e0d3f961a64661c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79dd54040fbd4b6c10db75972d7b29343a98733c1fba6ad3e0d3f961a64661c->enter($__internal_b79dd54040fbd4b6c10db75972d7b29343a98733c1fba6ad3e0d3f961a64661c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "suggetions"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "typebien", array()), "html", null, true);
            echo "</h1>
                      <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "html", null, true);
            echo "\" alt=\"Los Angeles\" class=\"thumbnail\" width=\"300px\" height=\"auto\">

               <div class=\"imgpetit\">    
               ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["bien"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 20
                echo "                   <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "image", array()), "html", null, true);
                echo "\" alt=\"Los Angeles\" class=\"thumbnail\" width=\"100px\" height=\"auto\">
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo " 
          </div>
          </div>
        </article>



    <div class=\"col-lg-2 desc\"><h4 class=\"card-title\">Lieu:";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "<hr>Prix:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</h4>
                     <p class=\"card-text\">
                      ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "
                                    </p></div>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo " ";
        
        $__internal_b79dd54040fbd4b6c10db75972d7b29343a98733c1fba6ad3e0d3f961a64661c->leave($__internal_b79dd54040fbd4b6c10db75972d7b29343a98733c1fba6ad3e0d3f961a64661c_prof);

        
        $__internal_c8217bf754e920a1aa6204bc142b37f8eb703a1464b1097bc7e7e523d8bf878f->leave($__internal_c8217bf754e920a1aa6204bc142b37f8eb703a1464b1097bc7e7e523d8bf878f_prof);

    }

    // line 36
    public function block_autres($context, array $blocks = array())
    {
        $__internal_e4ac01aa5c29aea98bc95930d9fa1cd341870c571038fb591fbc8816f9e07f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ac01aa5c29aea98bc95930d9fa1cd341870c571038fb591fbc8816f9e07f5a->enter($__internal_e4ac01aa5c29aea98bc95930d9fa1cd341870c571038fb591fbc8816f9e07f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "autres"));

        $__internal_bbeb3886105a2b48bd26bf02cfac2fbad29f583cb4cbceb0cee2256faf69135b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbeb3886105a2b48bd26bf02cfac2fbad29f583cb4cbceb0cee2256faf69135b->enter($__internal_bbeb3886105a2b48bd26bf02cfac2fbad29f583cb4cbceb0cee2256faf69135b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "autres"));

        // line 37
        echo "
  ";
        
        $__internal_bbeb3886105a2b48bd26bf02cfac2fbad29f583cb4cbceb0cee2256faf69135b->leave($__internal_bbeb3886105a2b48bd26bf02cfac2fbad29f583cb4cbceb0cee2256faf69135b_prof);

        
        $__internal_e4ac01aa5c29aea98bc95930d9fa1cd341870c571038fb591fbc8816f9e07f5a->leave($__internal_e4ac01aa5c29aea98bc95930d9fa1cd341870c571038fb591fbc8816f9e07f5a_prof);

    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ba0b0ed302a0923c60fa297ebe750e43fdb3476dbff8d43347bdf616f8fc30dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba0b0ed302a0923c60fa297ebe750e43fdb3476dbff8d43347bdf616f8fc30dd->enter($__internal_ba0b0ed302a0923c60fa297ebe750e43fdb3476dbff8d43347bdf616f8fc30dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_268d14a2604d2e7e123d4c20541ac06a41f34f03ef8c71c781c326e9d0fe7b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268d14a2604d2e7e123d4c20541ac06a41f34f03ef8c71c781c326e9d0fe7b6f->enter($__internal_268d14a2604d2e7e123d4c20541ac06a41f34f03ef8c71c781c326e9d0fe7b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 40
        echo "

<!--
";
        // line 43
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
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 65
            echo "  <tbody>
    <tr>
        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libelletype", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
     <td><img class=\"card-img-top\" src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "image", array()), "html", null, true);
            echo "\" alt=\"Card image cap\"></td>

    </tr>
    </tbody>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
            echo "<h1>ce bien n'existe pas</h1>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "</table></div>

-->


";
        
        $__internal_268d14a2604d2e7e123d4c20541ac06a41f34f03ef8c71c781c326e9d0fe7b6f->leave($__internal_268d14a2604d2e7e123d4c20541ac06a41f34f03ef8c71c781c326e9d0fe7b6f_prof);

        
        $__internal_ba0b0ed302a0923c60fa297ebe750e43fdb3476dbff8d43347bdf616f8fc30dd->leave($__internal_ba0b0ed302a0923c60fa297ebe750e43fdb3476dbff8d43347bdf616f8fc30dd_prof);

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
        return array (  234 => 80,  227 => 78,  215 => 72,  211 => 71,  207 => 70,  203 => 69,  199 => 68,  195 => 67,  191 => 65,  186 => 64,  162 => 43,  157 => 40,  148 => 39,  137 => 37,  128 => 36,  118 => 35,  112 => 34,  103 => 30,  96 => 28,  87 => 21,  77 => 20,  73 => 19,  66 => 16,  62 => 15,  57 => 12,  51 => 11,  42 => 10,  11 => 1,);
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
          <h1>{{bien.typebien}}</h1>
                      <img src=\"{{ asset('image/') }}{{bien.images[0]}}\" alt=\"Los Angeles\" class=\"thumbnail\" width=\"300px\" height=\"auto\">

               <div class=\"imgpetit\">    
               {% for image in  bien.images %}
                   <img src=\"{{ asset('image/') }}{{image.image}}\" alt=\"Los Angeles\" class=\"thumbnail\" width=\"100px\" height=\"auto\">
               {% endfor %} 
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
{% block autres %}

  {% endblock  %}
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
