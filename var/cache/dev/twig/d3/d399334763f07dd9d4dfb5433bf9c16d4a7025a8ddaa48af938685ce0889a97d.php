<?php

/* HTLImmobilierBundle:Front:formsearchtype.html.twig */
class __TwigTemplate_b67f285383f6b51d1e96afc3eaf9e9e9286ae214bb78cb1c842c55629c24380f extends Twig_Template
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
        $__internal_4cb4fc1e9707ac20986fb46aed364681ca99b9e3e6dfee674c284fb17586e1ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb4fc1e9707ac20986fb46aed364681ca99b9e3e6dfee674c284fb17586e1ec->enter($__internal_4cb4fc1e9707ac20986fb46aed364681ca99b9e3e6dfee674c284fb17586e1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:formsearchtype.html.twig"));

        $__internal_ea1dc35e7a431125c8fbaa211ba39d5eb2a87d2727c3a4190a68027b1535e551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1dc35e7a431125c8fbaa211ba39d5eb2a87d2727c3a4190a68027b1535e551->enter($__internal_ea1dc35e7a431125c8fbaa211ba39d5eb2a87d2727c3a4190a68027b1535e551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:formsearchtype.html.twig"));

        // line 1
        echo "





<form class=\"form-inline\" method=\"post\">
  <label for=\"usr\">Type:</label>
  <input type=\"text\" class=\"form-control\" name=\"libelletype\">
  <button type=\"submit\" class=\"btn btn-primary mb-2\">Submit</button>

</form>

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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 30
            echo "  <tbody>
    <tr>
        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libelletype", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
     <td><img class=\"card-img-top\" src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "image", array()), "html", null, true);
            echo "\" alt=\"Card image cap\"></td>

    </tr>
    </tbody>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "<h1>ce bien n'existe pas</h1>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</table></div>



";
        
        $__internal_4cb4fc1e9707ac20986fb46aed364681ca99b9e3e6dfee674c284fb17586e1ec->leave($__internal_4cb4fc1e9707ac20986fb46aed364681ca99b9e3e6dfee674c284fb17586e1ec_prof);

        
        $__internal_ea1dc35e7a431125c8fbaa211ba39d5eb2a87d2727c3a4190a68027b1535e551->leave($__internal_ea1dc35e7a431125c8fbaa211ba39d5eb2a87d2727c3a4190a68027b1535e551_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:formsearchtype.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 45,  96 => 43,  84 => 37,  80 => 36,  76 => 35,  72 => 34,  68 => 33,  64 => 32,  60 => 30,  55 => 29,  25 => 1,);
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
  <button type=\"submit\" class=\"btn btn-primary mb-2\">Submit</button>

</form>

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



", "HTLImmobilierBundle:Front:formsearchtype.html.twig", "/var/www/html/hortala/src/HTL/ImmobilierBundle/Resources/views/Front/formsearchtype.html.twig");
    }
}
