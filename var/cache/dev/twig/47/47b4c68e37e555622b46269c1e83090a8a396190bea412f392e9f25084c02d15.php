<?php

/* HTLImmobilierBundle:Front:listeadmin.html.twig */
class __TwigTemplate_797bb8f9d89faf5752636b1c7e33a6efa663984240c93d6e7e548f29a33081c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base1.html.twig", "HTLImmobilierBundle:Front:listeadmin.html.twig", 2);
        $this->blocks = array(
            'table' => array($this, 'block_table'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6244a9f3b78e0f64f7c64d367088a99305164f2aafeaf6ead0bcd749dea120a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6244a9f3b78e0f64f7c64d367088a99305164f2aafeaf6ead0bcd749dea120a6->enter($__internal_6244a9f3b78e0f64f7c64d367088a99305164f2aafeaf6ead0bcd749dea120a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listeadmin.html.twig"));

        $__internal_dc9d4b304421efee0446f28ddbdde771d0a00f589611e47dbaf8ab3c6a68f048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9d4b304421efee0446f28ddbdde771d0a00f589611e47dbaf8ab3c6a68f048->enter($__internal_dc9d4b304421efee0446f28ddbdde771d0a00f589611e47dbaf8ab3c6a68f048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listeadmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6244a9f3b78e0f64f7c64d367088a99305164f2aafeaf6ead0bcd749dea120a6->leave($__internal_6244a9f3b78e0f64f7c64d367088a99305164f2aafeaf6ead0bcd749dea120a6_prof);

        
        $__internal_dc9d4b304421efee0446f28ddbdde771d0a00f589611e47dbaf8ab3c6a68f048->leave($__internal_dc9d4b304421efee0446f28ddbdde771d0a00f589611e47dbaf8ab3c6a68f048_prof);

    }

    // line 7
    public function block_table($context, array $blocks = array())
    {
        $__internal_de82c5785293920e04d73c433ad862631b9e03529c2f4fee1cfa1b91e90f2155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de82c5785293920e04d73c433ad862631b9e03529c2f4fee1cfa1b91e90f2155->enter($__internal_de82c5785293920e04d73c433ad862631b9e03529c2f4fee1cfa1b91e90f2155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_910263e7c8eeb7d55f3850eb86ed22bfe637dd216ba6887d1c700419928110fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910263e7c8eeb7d55f3850eb86ed22bfe637dd216ba6887d1c700419928110fe->enter($__internal_910263e7c8eeb7d55f3850eb86ed22bfe637dd216ba6887d1c700419928110fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 8
        echo "
<div class=\"container divtable\" >
<h1>LISTE DES Biens</h1>
<table class=\"table table-condensed\" id=\"listebientable\">
<thead>
    <style>
    </style>

    
    <tr class=\"row\"><th>typebien</th>
        <th>localite</th>
        <th>prix</th>
        <th>image</th>
        <th>details</th>
       
    </tr>
</thead>
  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 26
            echo "  <tbody>
    <tr class=\"row\">
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "typebien", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
        <td><img class=\"card-img-top\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "html", null, true);
            echo "\" alt=\"Card image cap\" width=\"50px\">
</td>
         <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeadmin", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default bg-primary\">details</a></td>
        

    </tr>
    </tbody>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</table>
</div>
";
        
        $__internal_910263e7c8eeb7d55f3850eb86ed22bfe637dd216ba6887d1c700419928110fe->leave($__internal_910263e7c8eeb7d55f3850eb86ed22bfe637dd216ba6887d1c700419928110fe_prof);

        
        $__internal_de82c5785293920e04d73c433ad862631b9e03529c2f4fee1cfa1b91e90f2155->leave($__internal_de82c5785293920e04d73c433ad862631b9e03529c2f4fee1cfa1b91e90f2155_prof);

    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        $__internal_846ea070806252b5ac5ea87f0516bf1906ed093cdf0c3b7d70c014afd82f1065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_846ea070806252b5ac5ea87f0516bf1906ed093cdf0c3b7d70c014afd82f1065->enter($__internal_846ea070806252b5ac5ea87f0516bf1906ed093cdf0c3b7d70c014afd82f1065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_46c9d6b54ff10e5c4267a12c44a4677afc563df2a0b102adbeb86cc7f34051e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c9d6b54ff10e5c4267a12c44a4677afc563df2a0b102adbeb86cc7f34051e9->enter($__internal_46c9d6b54ff10e5c4267a12c44a4677afc563df2a0b102adbeb86cc7f34051e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 52
        echo "
";
        
        $__internal_46c9d6b54ff10e5c4267a12c44a4677afc563df2a0b102adbeb86cc7f34051e9->leave($__internal_46c9d6b54ff10e5c4267a12c44a4677afc563df2a0b102adbeb86cc7f34051e9_prof);

        
        $__internal_846ea070806252b5ac5ea87f0516bf1906ed093cdf0c3b7d70c014afd82f1065->leave($__internal_846ea070806252b5ac5ea87f0516bf1906ed093cdf0c3b7d70c014afd82f1065_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:listeadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 52,  127 => 51,  115 => 42,  108 => 40,  96 => 33,  90 => 31,  86 => 30,  82 => 29,  78 => 28,  74 => 26,  69 => 25,  50 => 8,  41 => 7,  11 => 2,);
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
{% extends \"base1.html.twig\" %}




    {% block table%}

<div class=\"container divtable\" >
<h1>LISTE DES Biens</h1>
<table class=\"table table-condensed\" id=\"listebientable\">
<thead>
    <style>
    </style>

    
    <tr class=\"row\"><th>typebien</th>
        <th>localite</th>
        <th>prix</th>
        <th>image</th>
        <th>details</th>
       
    </tr>
</thead>
  {% for bien in biens %}
  <tbody>
    <tr class=\"row\">
        <td>{{bien.typebien}}</td>
        <td>{{bien.libellelocalite}}</td>
        <td>{{bien.prixlocation}}</td>
        <td><img class=\"card-img-top\" src=\"{{ asset('image/') }}{{bien.images[0]}}\" alt=\"Card image cap\" width=\"50px\">
</td>
         <td><a href=\"{{path('listeadmin',{id:bien.id})}}\" class=\"btn btn-default bg-primary\">details</a></td>
        

    </tr>
    </tbody>

{% else %}

  {% endfor %}
</table>
</div>
{% endblock %}






{% block footer %}

{% endblock %}






", "HTLImmobilierBundle:Front:listeadmin.html.twig", "/var/www/html/hortala/src/HTL/ImmobilierBundle/Resources/views/Front/listeadmin.html.twig");
    }
}
