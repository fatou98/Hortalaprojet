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
        $__internal_bc8a02583972e5d3fe38c2dfdb201448874f5b177ed5bb91bee8071ed3dce661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8a02583972e5d3fe38c2dfdb201448874f5b177ed5bb91bee8071ed3dce661->enter($__internal_bc8a02583972e5d3fe38c2dfdb201448874f5b177ed5bb91bee8071ed3dce661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:formsearch.html.twig"));

        $__internal_fdc25f7f86c4cb31192733dedf08865d9cebd424f7374a32123aa3da6eef7499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc25f7f86c4cb31192733dedf08865d9cebd424f7374a32123aa3da6eef7499->enter($__internal_fdc25f7f86c4cb31192733dedf08865d9cebd424f7374a32123aa3da6eef7499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:formsearch.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc8a02583972e5d3fe38c2dfdb201448874f5b177ed5bb91bee8071ed3dce661->leave($__internal_bc8a02583972e5d3fe38c2dfdb201448874f5b177ed5bb91bee8071ed3dce661_prof);

        
        $__internal_fdc25f7f86c4cb31192733dedf08865d9cebd424f7374a32123aa3da6eef7499->leave($__internal_fdc25f7f86c4cb31192733dedf08865d9cebd424f7374a32123aa3da6eef7499_prof);

    }

    // line 10
    public function block_suggetions($context, array $blocks = array())
    {
        $__internal_3257343588143004fbe655a2c07fb0d143e8db835c073ffd01bb8ebf0ab26f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3257343588143004fbe655a2c07fb0d143e8db835c073ffd01bb8ebf0ab26f29->enter($__internal_3257343588143004fbe655a2c07fb0d143e8db835c073ffd01bb8ebf0ab26f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "suggetions"));

        $__internal_8de417045af5eac452c4e0b556ed80b2dd00410d3b4f88b36e515f89e485c1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de417045af5eac452c4e0b556ed80b2dd00410d3b4f88b36e515f89e485c1cb->enter($__internal_8de417045af5eac452c4e0b556ed80b2dd00410d3b4f88b36e515f89e485c1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "suggetions"));

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
        
        $__internal_8de417045af5eac452c4e0b556ed80b2dd00410d3b4f88b36e515f89e485c1cb->leave($__internal_8de417045af5eac452c4e0b556ed80b2dd00410d3b4f88b36e515f89e485c1cb_prof);

        
        $__internal_3257343588143004fbe655a2c07fb0d143e8db835c073ffd01bb8ebf0ab26f29->leave($__internal_3257343588143004fbe655a2c07fb0d143e8db835c073ffd01bb8ebf0ab26f29_prof);

    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c049b50199a3852ed564e64be0e0a6743db3a2cfb49a765184d868ca3a315638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c049b50199a3852ed564e64be0e0a6743db3a2cfb49a765184d868ca3a315638->enter($__internal_c049b50199a3852ed564e64be0e0a6743db3a2cfb49a765184d868ca3a315638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_91c508bd17b0d694acb6fc4f8b73f4604a758d73bc692b72da9030881d00faec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c508bd17b0d694acb6fc4f8b73f4604a758d73bc692b72da9030881d00faec->enter($__internal_91c508bd17b0d694acb6fc4f8b73f4604a758d73bc692b72da9030881d00faec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_91c508bd17b0d694acb6fc4f8b73f4604a758d73bc692b72da9030881d00faec->leave($__internal_91c508bd17b0d694acb6fc4f8b73f4604a758d73bc692b72da9030881d00faec_prof);

        
        $__internal_c049b50199a3852ed564e64be0e0a6743db3a2cfb49a765184d868ca3a315638->leave($__internal_c049b50199a3852ed564e64be0e0a6743db3a2cfb49a765184d868ca3a315638_prof);

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
