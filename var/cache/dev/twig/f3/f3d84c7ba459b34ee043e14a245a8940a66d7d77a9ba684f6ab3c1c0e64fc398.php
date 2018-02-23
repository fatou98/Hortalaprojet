<?php

/* HTLImmobilierBundle:Front:localite.html.twig */
class __TwigTemplate_4f0224a6624d6284a902b5fbcedf87c92418b4142e86524289ae0157712aa351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::pageadmin.html.twig", "HTLImmobilierBundle:Front:localite.html.twig", 2);
        $this->blocks = array(
            'liste' => array($this, 'block_liste'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::pageadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb9fb65fe1958f7f150bdcaa5f242184389620edf66e6cd384a38d5dc1a894c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb9fb65fe1958f7f150bdcaa5f242184389620edf66e6cd384a38d5dc1a894c7->enter($__internal_fb9fb65fe1958f7f150bdcaa5f242184389620edf66e6cd384a38d5dc1a894c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:localite.html.twig"));

        $__internal_ae37afcdfd4b5d36cfda316bd0c2b7c719be05277e0c538b9e6b044de6108b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae37afcdfd4b5d36cfda316bd0c2b7c719be05277e0c538b9e6b044de6108b18->enter($__internal_ae37afcdfd4b5d36cfda316bd0c2b7c719be05277e0c538b9e6b044de6108b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:localite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb9fb65fe1958f7f150bdcaa5f242184389620edf66e6cd384a38d5dc1a894c7->leave($__internal_fb9fb65fe1958f7f150bdcaa5f242184389620edf66e6cd384a38d5dc1a894c7_prof);

        
        $__internal_ae37afcdfd4b5d36cfda316bd0c2b7c719be05277e0c538b9e6b044de6108b18->leave($__internal_ae37afcdfd4b5d36cfda316bd0c2b7c719be05277e0c538b9e6b044de6108b18_prof);

    }

    // line 3
    public function block_liste($context, array $blocks = array())
    {
        $__internal_75c45f4e3de6e499d7def98f7e0f2f799a0c4da5137dfba1665c4cc7b3558798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c45f4e3de6e499d7def98f7e0f2f799a0c4da5137dfba1665c4cc7b3558798->enter($__internal_75c45f4e3de6e499d7def98f7e0f2f799a0c4da5137dfba1665c4cc7b3558798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liste"));

        $__internal_5aa336d9d4353b142114d74b864071b19fb4342abad8b67c85065ad0d7946b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa336d9d4353b142114d74b864071b19fb4342abad8b67c85065ad0d7946b01->enter($__internal_5aa336d9d4353b142114d74b864071b19fb4342abad8b67c85065ad0d7946b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liste"));

        // line 4
        echo "

   <div class=\"\" id=\"divtable\">
<h1>LISTE DES LOCALITES</h1>
<table class=\"table table-condensed\" border=\"1px\" id=\"listebientable\">
<thead>
    <tr>
        <th>id</th>
        <th>nom localite</th>
        
    
    </tr>
</thead>
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localites"] ?? $this->getContext($context, "localites")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 18
            echo "  <tbody>
    <tr>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libellelocalite", array()), "html", null, true);
            echo "</td>
    </tr>
    </tbody>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "<h1>ce bien n'existe pas</h1>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</table></div>
";
        
        $__internal_5aa336d9d4353b142114d74b864071b19fb4342abad8b67c85065ad0d7946b01->leave($__internal_5aa336d9d4353b142114d74b864071b19fb4342abad8b67c85065ad0d7946b01_prof);

        
        $__internal_75c45f4e3de6e499d7def98f7e0f2f799a0c4da5137dfba1665c4cc7b3558798->leave($__internal_75c45f4e3de6e499d7def98f7e0f2f799a0c4da5137dfba1665c4cc7b3558798_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:localite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 28,  87 => 26,  77 => 21,  73 => 20,  69 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 2,);
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
{% extends \"::pageadmin.html.twig\" %}
        {% block liste %}


   <div class=\"\" id=\"divtable\">
<h1>LISTE DES LOCALITES</h1>
<table class=\"table table-condensed\" border=\"1px\" id=\"listebientable\">
<thead>
    <tr>
        <th>id</th>
        <th>nom localite</th>
        
    
    </tr>
</thead>
  {% for localite in localites %}
  <tbody>
    <tr>
        <td>{{localite.id}}</td>
        <td>{{localite.libellelocalite}}</td>
    </tr>
    </tbody>

{% else %}
<h1>ce bien n'existe pas</h1>
  {% endfor %}
</table></div>
{% endblock %}







", "HTLImmobilierBundle:Front:localite.html.twig", "/var/www/html/hortala/src/HTL/ImmobilierBundle/Resources/views/Front/localite.html.twig");
    }
}
