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
        $__internal_8bd0a49ffab3201e894f1cc92218580e8182c568fb865ab73549f35a94513a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd0a49ffab3201e894f1cc92218580e8182c568fb865ab73549f35a94513a95->enter($__internal_8bd0a49ffab3201e894f1cc92218580e8182c568fb865ab73549f35a94513a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listeadmin.html.twig"));

        $__internal_24c54d589777eed5754178a33c317d36247e502889fc24946c32b36acc3cb23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c54d589777eed5754178a33c317d36247e502889fc24946c32b36acc3cb23e->enter($__internal_24c54d589777eed5754178a33c317d36247e502889fc24946c32b36acc3cb23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listeadmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bd0a49ffab3201e894f1cc92218580e8182c568fb865ab73549f35a94513a95->leave($__internal_8bd0a49ffab3201e894f1cc92218580e8182c568fb865ab73549f35a94513a95_prof);

        
        $__internal_24c54d589777eed5754178a33c317d36247e502889fc24946c32b36acc3cb23e->leave($__internal_24c54d589777eed5754178a33c317d36247e502889fc24946c32b36acc3cb23e_prof);

    }

    // line 7
    public function block_table($context, array $blocks = array())
    {
        $__internal_d6615e57988eaf8dac87e3879221e1d8d4c55026ec7125cf01db46409f67f63f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6615e57988eaf8dac87e3879221e1d8d4c55026ec7125cf01db46409f67f63f->enter($__internal_d6615e57988eaf8dac87e3879221e1d8d4c55026ec7125cf01db46409f67f63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_de6bb55e78f16ded78527d05c9fcdad84ff238a0b021ee2ab04518034d22c859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6bb55e78f16ded78527d05c9fcdad84ff238a0b021ee2ab04518034d22c859->enter($__internal_de6bb55e78f16ded78527d05c9fcdad84ff238a0b021ee2ab04518034d22c859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 8
        echo "
<div class=\"container bg-warning divtable\" >
<h1>LISTE DES Biens</h1>
<table class=\"table table-responsive table-condensed\" id=\"listebientable\">
<thead>
    <tr>
        <th>nom</th>
        <th>localite</th>
        <th>typebien</th>
        <th>description</th>
        <th>etat</th>
        <th>Modifier etat</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
</thead>
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 25
            echo "  <tbody>
    <tr>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libelletype", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "etat", array()), "html", null, true);
            echo "</td>
         <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeadmin", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default bg-primary\">modifier etat</a></td>
        <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeadmin", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default bg-primary\">modifier</a></td>
        <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeadmin", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default bg-primary\">supprimer</a></td>


    </tr>
    </tbody>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</table>
</div>
";
        
        $__internal_de6bb55e78f16ded78527d05c9fcdad84ff238a0b021ee2ab04518034d22c859->leave($__internal_de6bb55e78f16ded78527d05c9fcdad84ff238a0b021ee2ab04518034d22c859_prof);

        
        $__internal_d6615e57988eaf8dac87e3879221e1d8d4c55026ec7125cf01db46409f67f63f->leave($__internal_d6615e57988eaf8dac87e3879221e1d8d4c55026ec7125cf01db46409f67f63f_prof);

    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3535ce27d6edde8a73c8b9af1d97fce91ed99310d5e72201295204e97866651f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3535ce27d6edde8a73c8b9af1d97fce91ed99310d5e72201295204e97866651f->enter($__internal_3535ce27d6edde8a73c8b9af1d97fce91ed99310d5e72201295204e97866651f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a5f54ef37ca1fab81f76b547fe4f6870afca5f0b05095b50ee6f0bd7abc2819f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f54ef37ca1fab81f76b547fe4f6870afca5f0b05095b50ee6f0bd7abc2819f->enter($__internal_a5f54ef37ca1fab81f76b547fe4f6870afca5f0b05095b50ee6f0bd7abc2819f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 53
        echo "
";
        
        $__internal_a5f54ef37ca1fab81f76b547fe4f6870afca5f0b05095b50ee6f0bd7abc2819f->leave($__internal_a5f54ef37ca1fab81f76b547fe4f6870afca5f0b05095b50ee6f0bd7abc2819f_prof);

        
        $__internal_3535ce27d6edde8a73c8b9af1d97fce91ed99310d5e72201295204e97866651f->leave($__internal_3535ce27d6edde8a73c8b9af1d97fce91ed99310d5e72201295204e97866651f_prof);

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
        return array (  145 => 53,  136 => 52,  124 => 43,  117 => 41,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  89 => 30,  85 => 29,  81 => 28,  77 => 27,  73 => 25,  68 => 24,  50 => 8,  41 => 7,  11 => 2,);
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

<div class=\"container bg-warning divtable\" >
<h1>LISTE DES Biens</h1>
<table class=\"table table-responsive table-condensed\" id=\"listebientable\">
<thead>
    <tr>
        <th>nom</th>
        <th>localite</th>
        <th>typebien</th>
        <th>description</th>
        <th>etat</th>
        <th>Modifier etat</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
</thead>
  {% for bien in biens %}
  <tbody>
    <tr>
        <td>{{bien.nombien}}</td>
        <td>{{bien.libellelocalite}}</td>
        <td>{{bien.libelletype}}</td>
        <td>{{bien.description}}</td>
        <td>{{bien.etat}}</td>
         <td><a href=\"{{path('listeadmin',{id:bien.id})}}\" class=\"btn btn-default bg-primary\">modifier etat</a></td>
        <td><a href=\"{{path('listeadmin',{id:bien.id})}}\" class=\"btn btn-default bg-primary\">modifier</a></td>
        <td><a href=\"{{path('listeadmin',{id:bien.id})}}\" class=\"btn btn-default bg-primary\">supprimer</a></td>


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
