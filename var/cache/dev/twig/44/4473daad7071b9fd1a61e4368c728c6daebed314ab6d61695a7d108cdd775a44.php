<?php

/* HTLImmobilierBundle:Front:formsearchlocalite.html.twig */
class __TwigTemplate_f3cb81308b9a961f8a8c8befb73098b0a0e191302fee6a1055ba83b6dd47ca23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a2487b0432c4cf0a95d7391c228598db33f8136ba9e494e6dbb8fe7ce027236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2487b0432c4cf0a95d7391c228598db33f8136ba9e494e6dbb8fe7ce027236->enter($__internal_2a2487b0432c4cf0a95d7391c228598db33f8136ba9e494e6dbb8fe7ce027236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:formsearchlocalite.html.twig"));

        $__internal_ed4b480ba4a9ee8d416c261daf9037bf316ec544792d592de574276cf3ac86b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4b480ba4a9ee8d416c261daf9037bf316ec544792d592de574276cf3ac86b0->enter($__internal_ed4b480ba4a9ee8d416c261daf9037bf316ec544792d592de574276cf3ac86b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:formsearchlocalite.html.twig"));

        // line 1
        echo "




<form class=\"form-inline\" method=\"post\">
  <label for=\"usr\">Type:</label>
  <input type=\"text\" class=\"form-control\" name=\"libelletype\">

  <label for=\"localite\">Localite:</label>
  <input type=\"text\" class=\"form-control\" name=\"libellelocalite\">
    
  <label for=\"budget\">Budget:</label>
  <input type=\"text\" class=\"form-control\" name=\"prixlocation\">
    <div class=\"form-inline\" id=\"option\">
  <label for=\"description\">Description:</label>
  <input type=\"text\" class=\"form-control\" name=\"description\"></div>
      <button type=\"submit\" class=\"btn btn-primary mb-2\">Submit</button>

</form>
<div class=\"container bg-warning divtable\" style=\"display: flex;flex-wrap: wrap;\">
   
<h1>LISTE DES bien</h1>
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 25
            echo "
                     <div class=\"col-lg-4 card div1\">
 <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "image", array()), "html", null, true);
            echo "\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libelletype", array()), "html", null, true);
            echo "</h4>
                     <p class=\"card-text\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</p>
                        <a class=\"btn btn-default reserver\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\" >Reserver</a>
                        </div>
</div>

 
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "<h1>ce bien n'existe pas</h1>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</div>



";
        
        $__internal_2a2487b0432c4cf0a95d7391c228598db33f8136ba9e494e6dbb8fe7ce027236->leave($__internal_2a2487b0432c4cf0a95d7391c228598db33f8136ba9e494e6dbb8fe7ce027236_prof);

        
        $__internal_ed4b480ba4a9ee8d416c261daf9037bf316ec544792d592de574276cf3ac86b0->leave($__internal_ed4b480ba4a9ee8d416c261daf9037bf316ec544792d592de574276cf3ac86b0_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:formsearchlocalite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 40,  87 => 38,  76 => 32,  70 => 31,  66 => 30,  60 => 28,  55 => 25,  50 => 24,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("




<form class=\"form-inline\" method=\"post\">
  <label for=\"usr\">Type:</label>
  <input type=\"text\" class=\"form-control\" name=\"libelletype\">

  <label for=\"localite\">Localite:</label>
  <input type=\"text\" class=\"form-control\" name=\"libellelocalite\">
    
  <label for=\"budget\">Budget:</label>
  <input type=\"text\" class=\"form-control\" name=\"prixlocation\">
    <div class=\"form-inline\" id=\"option\">
  <label for=\"description\">Description:</label>
  <input type=\"text\" class=\"form-control\" name=\"description\"></div>
      <button type=\"submit\" class=\"btn btn-primary mb-2\">Submit</button>

</form>
<div class=\"container bg-warning divtable\" style=\"display: flex;flex-wrap: wrap;\">
   
<h1>LISTE DES bien</h1>
{% for bien in biens %}

                     <div class=\"col-lg-4 card div1\">
 <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"{{ asset('image/') }}{{bien.image}}\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">{{bien.libelletype}}</h4>
                     <p class=\"card-text\">{{bien.libellelocalite}}<br>{{bien.prixlocation}}</p>
                        <a class=\"btn btn-default reserver\" href=\"{{path('reserver',{id:bien.id})}}\" >Reserver</a>
                        </div>
</div>

 
{% else %}
<h1>ce bien n'existe pas</h1>
  {% endfor %}
</div>



", "HTLImmobilierBundle:Front:formsearchlocalite.html.twig", "/var/www/html/hortala/src/HTL/ImmobilierBundle/Resources/views/Front/formsearchlocalite.html.twig");
    }
}
