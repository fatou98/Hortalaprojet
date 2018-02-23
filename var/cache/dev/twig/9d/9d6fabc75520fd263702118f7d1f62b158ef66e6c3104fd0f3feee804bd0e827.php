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
        $__internal_00e5d32b79d098f79a17ca36ec7b77e2deab35e29b36e2b9247ad29d9fc1ebc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e5d32b79d098f79a17ca36ec7b77e2deab35e29b36e2b9247ad29d9fc1ebc1->enter($__internal_00e5d32b79d098f79a17ca36ec7b77e2deab35e29b36e2b9247ad29d9fc1ebc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listereservation.html.twig"));

        $__internal_bf2be9b4371a517e05a829cf455bcbdc48219dd6cccaec5e619bc62af15d66b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2be9b4371a517e05a829cf455bcbdc48219dd6cccaec5e619bc62af15d66b2->enter($__internal_bf2be9b4371a517e05a829cf455bcbdc48219dd6cccaec5e619bc62af15d66b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listereservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00e5d32b79d098f79a17ca36ec7b77e2deab35e29b36e2b9247ad29d9fc1ebc1->leave($__internal_00e5d32b79d098f79a17ca36ec7b77e2deab35e29b36e2b9247ad29d9fc1ebc1_prof);

        
        $__internal_bf2be9b4371a517e05a829cf455bcbdc48219dd6cccaec5e619bc62af15d66b2->leave($__internal_bf2be9b4371a517e05a829cf455bcbdc48219dd6cccaec5e619bc62af15d66b2_prof);

    }

    // line 7
    public function block_table($context, array $blocks = array())
    {
        $__internal_946aad5c500f5ebd84040513a8c0771415e8458f50059516bc52847554bf86d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946aad5c500f5ebd84040513a8c0771415e8458f50059516bc52847554bf86d8->enter($__internal_946aad5c500f5ebd84040513a8c0771415e8458f50059516bc52847554bf86d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_bd29b09a9a3cdceff2fb04a4bdba378de8bc1f74a7e114bf0969329dedec593d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd29b09a9a3cdceff2fb04a4bdba378de8bc1f74a7e114bf0969329dedec593d->enter($__internal_bd29b09a9a3cdceff2fb04a4bdba378de8bc1f74a7e114bf0969329dedec593d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 8
        echo "
<div class=\"container bg-warning divtable\" >
<h1>LISTE DES Biens</h1>
<table class=\"table table-responsive table-condensed\" id=\"listebientable\">
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
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
        
        $__internal_bd29b09a9a3cdceff2fb04a4bdba378de8bc1f74a7e114bf0969329dedec593d->leave($__internal_bd29b09a9a3cdceff2fb04a4bdba378de8bc1f74a7e114bf0969329dedec593d_prof);

        
        $__internal_946aad5c500f5ebd84040513a8c0771415e8458f50059516bc52847554bf86d8->leave($__internal_946aad5c500f5ebd84040513a8c0771415e8458f50059516bc52847554bf86d8_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4bef291ebdfe2a071b769d2e5d0ab2cee82e9444d7f1d8f391f15feae9a1d963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bef291ebdfe2a071b769d2e5d0ab2cee82e9444d7f1d8f391f15feae9a1d963->enter($__internal_4bef291ebdfe2a071b769d2e5d0ab2cee82e9444d7f1d8f391f15feae9a1d963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_c684efdcddb6fed2331540c825bd4661a40acf952761f6366021f2391ea4bd8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c684efdcddb6fed2331540c825bd4661a40acf952761f6366021f2391ea4bd8b->enter($__internal_c684efdcddb6fed2331540c825bd4661a40acf952761f6366021f2391ea4bd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "
";
        
        $__internal_c684efdcddb6fed2331540c825bd4661a40acf952761f6366021f2391ea4bd8b->leave($__internal_c684efdcddb6fed2331540c825bd4661a40acf952761f6366021f2391ea4bd8b_prof);

        
        $__internal_4bef291ebdfe2a071b769d2e5d0ab2cee82e9444d7f1d8f391f15feae9a1d963->leave($__internal_4bef291ebdfe2a071b769d2e5d0ab2cee82e9444d7f1d8f391f15feae9a1d963_prof);

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
<table class=\"table table-responsive table-condensed\" id=\"listebientable\">
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
         <td><a href=\"{{path('details',{id:reservation.id})}}\" class=\"btn btn-default bg-primary\">DETAILS</a></td>


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
