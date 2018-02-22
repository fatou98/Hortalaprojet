<?php

/* HTLImmobilierBundle:Front:listereservation.html.twig */
class __TwigTemplate_6c4231136b5689985c70e5eabdb6e5f4e58d55cc40bf809b244aa0a6f237bef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base1.html.twig", "HTLImmobilierBundle:Front:listereservation.html.twig", 2);
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
        $__internal_4075dfb051fed0657df7ba6562dde038dbea2574a1cc35d8c75df2a8e9d13edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4075dfb051fed0657df7ba6562dde038dbea2574a1cc35d8c75df2a8e9d13edb->enter($__internal_4075dfb051fed0657df7ba6562dde038dbea2574a1cc35d8c75df2a8e9d13edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listereservation.html.twig"));

        $__internal_af6039217453da0e362108a57bd52878e755c079a1992f16697a8bc8c57567f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6039217453da0e362108a57bd52878e755c079a1992f16697a8bc8c57567f2->enter($__internal_af6039217453da0e362108a57bd52878e755c079a1992f16697a8bc8c57567f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listereservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4075dfb051fed0657df7ba6562dde038dbea2574a1cc35d8c75df2a8e9d13edb->leave($__internal_4075dfb051fed0657df7ba6562dde038dbea2574a1cc35d8c75df2a8e9d13edb_prof);

        
        $__internal_af6039217453da0e362108a57bd52878e755c079a1992f16697a8bc8c57567f2->leave($__internal_af6039217453da0e362108a57bd52878e755c079a1992f16697a8bc8c57567f2_prof);

    }

    // line 7
    public function block_table($context, array $blocks = array())
    {
        $__internal_33bd6e5c23a39de0db294ea1da67b75aedbadacb5f3672c73663658b9e82bf26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33bd6e5c23a39de0db294ea1da67b75aedbadacb5f3672c73663658b9e82bf26->enter($__internal_33bd6e5c23a39de0db294ea1da67b75aedbadacb5f3672c73663658b9e82bf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_8a65f0b746a342344f7cfcfd4ba7c8d14659903d47b2cd393b198e4cb16c2a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a65f0b746a342344f7cfcfd4ba7c8d14659903d47b2cd393b198e4cb16c2a4f->enter($__internal_8a65f0b746a342344f7cfcfd4ba7c8d14659903d47b2cd393b198e4cb16c2a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 8
        echo "
<div class=\"container bg-warning divtable\" >
<h1>LISTE DES Biens</h1>
<table class=\"table table-responsive table-condensed\" id=\"\">
<thead>
    <tr>
        <th>nom client</th>
        <th>adresse client</th>
        <th>bien</th>
        <th>adresse bien</th>
        <th>type bien</th>
                <th>prix</th>
        <th>image</th>

        <th>details</th>
    </tr>
</thead>
  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 26
            echo "  <tbody>
    <tr>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "adresse", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "nombien", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "libellelocalite", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "typebien", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "</td>
        <td><img class=\"card-img-top\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 0, array(), "array"), "html", null, true);
            echo "\" alt=\"Card image cap\" width=\"50px\">
</td>
         <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeadmin", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default bg-primary\">DETAILS</a></td>


    </tr>
    </tbody>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</table>
</div>
";
        
        $__internal_8a65f0b746a342344f7cfcfd4ba7c8d14659903d47b2cd393b198e4cb16c2a4f->leave($__internal_8a65f0b746a342344f7cfcfd4ba7c8d14659903d47b2cd393b198e4cb16c2a4f_prof);

        
        $__internal_33bd6e5c23a39de0db294ea1da67b75aedbadacb5f3672c73663658b9e82bf26->leave($__internal_33bd6e5c23a39de0db294ea1da67b75aedbadacb5f3672c73663658b9e82bf26_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a42a4a20cf07f02031b38140d9d805562339e881b632c96cfe3b0461c8ee62c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42a4a20cf07f02031b38140d9d805562339e881b632c96cfe3b0461c8ee62c0->enter($__internal_a42a4a20cf07f02031b38140d9d805562339e881b632c96cfe3b0461c8ee62c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_5166da1ffbeecffb21e80289693a84755d36fa5932b287c3fc573b292da8f234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5166da1ffbeecffb21e80289693a84755d36fa5932b287c3fc573b292da8f234->enter($__internal_5166da1ffbeecffb21e80289693a84755d36fa5932b287c3fc573b292da8f234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "
";
        
        $__internal_5166da1ffbeecffb21e80289693a84755d36fa5932b287c3fc573b292da8f234->leave($__internal_5166da1ffbeecffb21e80289693a84755d36fa5932b287c3fc573b292da8f234_prof);

        
        $__internal_a42a4a20cf07f02031b38140d9d805562339e881b632c96cfe3b0461c8ee62c0->leave($__internal_a42a4a20cf07f02031b38140d9d805562339e881b632c96cfe3b0461c8ee62c0_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:listereservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 55,  139 => 54,  127 => 45,  120 => 43,  108 => 36,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  78 => 28,  74 => 26,  69 => 25,  50 => 8,  41 => 7,  11 => 2,);
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
<table class=\"table table-responsive table-condensed\" id=\"\">
<thead>
    <tr>
        <th>nom client</th>
        <th>adresse client</th>
        <th>bien</th>
        <th>adresse bien</th>
        <th>type bien</th>
                <th>prix</th>
        <th>image</th>

        <th>details</th>
    </tr>
</thead>
  {% for reservation in reservations %}
  <tbody>
    <tr>
        <td>{{reservation.client.nomComplet}}</td>
        <td>{{reservation.client.adresse}}</td>
        <td>{{reservation.bien.nombien}}</td>
        <td>{{reservation.bien.libellelocalite}}</td>
        <td>{{reservation.bien.typebien}}</td>
        <td>{{reservation.bien.prixlocation}}</td>
        <td><img class=\"card-img-top\" src=\"{{ asset('image/') }}{{reservation.bien.images[0]}}\" alt=\"Card image cap\" width=\"50px\">
</td>
         <td><a href=\"{{path('listeadmin',{id:reservation.id})}}\" class=\"btn btn-default bg-primary\">DETAILS</a></td>


    </tr>
    </tbody>

{% else %}

  {% endfor %}
</table>
</div>
{% endblock %}






{% block footer %}

{% endblock %}






", "HTLImmobilierBundle:Front:listereservation.html.twig", "/var/www/html/hortala/src/HTL/ImmobilierBundle/Resources/views/Front/listereservation.html.twig");
    }
}
