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
        $__internal_3c690ef2dd186734bde0fc26080cda6a023f868d69c44b86b2ab4971f49491e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c690ef2dd186734bde0fc26080cda6a023f868d69c44b86b2ab4971f49491e5->enter($__internal_3c690ef2dd186734bde0fc26080cda6a023f868d69c44b86b2ab4971f49491e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listeadmin.html.twig"));

        $__internal_d1ab581a0ebf57b9c988a707a7b7f3586a30c58b735ac4464ada77c82b136670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ab581a0ebf57b9c988a707a7b7f3586a30c58b735ac4464ada77c82b136670->enter($__internal_d1ab581a0ebf57b9c988a707a7b7f3586a30c58b735ac4464ada77c82b136670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listeadmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c690ef2dd186734bde0fc26080cda6a023f868d69c44b86b2ab4971f49491e5->leave($__internal_3c690ef2dd186734bde0fc26080cda6a023f868d69c44b86b2ab4971f49491e5_prof);

        
        $__internal_d1ab581a0ebf57b9c988a707a7b7f3586a30c58b735ac4464ada77c82b136670->leave($__internal_d1ab581a0ebf57b9c988a707a7b7f3586a30c58b735ac4464ada77c82b136670_prof);

    }

    // line 7
    public function block_table($context, array $blocks = array())
    {
        $__internal_0472fdf8accdaba0b0d631afe813f0aa15a3ae9c41d7ad062a7d2fa5f392d81c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0472fdf8accdaba0b0d631afe813f0aa15a3ae9c41d7ad062a7d2fa5f392d81c->enter($__internal_0472fdf8accdaba0b0d631afe813f0aa15a3ae9c41d7ad062a7d2fa5f392d81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_377fcec36708ef87bd0fca07586083d34635225bd4a9cb8261df2aa3c785f5db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377fcec36708ef87bd0fca07586083d34635225bd4a9cb8261df2aa3c785f5db->enter($__internal_377fcec36708ef87bd0fca07586083d34635225bd4a9cb8261df2aa3c785f5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 8
        echo "
<div class=\"container divtable\" >
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
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 25
            echo "  <tbody>
    <tr class=\"row\">
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "typebien", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
        <td><img class=\"card-img-top\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "html", null, true);
            echo "\" alt=\"Card image cap\" width=\"50px\">
</td>
         <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeadmin", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default bg-primary\">details</a></td>
        

    </tr>
    </tbody>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</table>        <div class=\"text-center\">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["biens"] ?? $this->getContext($context, "biens")));
        echo "</div>

</div>
";
        
        $__internal_377fcec36708ef87bd0fca07586083d34635225bd4a9cb8261df2aa3c785f5db->leave($__internal_377fcec36708ef87bd0fca07586083d34635225bd4a9cb8261df2aa3c785f5db_prof);

        
        $__internal_0472fdf8accdaba0b0d631afe813f0aa15a3ae9c41d7ad062a7d2fa5f392d81c->leave($__internal_0472fdf8accdaba0b0d631afe813f0aa15a3ae9c41d7ad062a7d2fa5f392d81c_prof);

    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        $__internal_66bc419f7b53dacdbd8adf7028dc5ef26983db1cc085935a5ec2a1c6c386d936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66bc419f7b53dacdbd8adf7028dc5ef26983db1cc085935a5ec2a1c6c386d936->enter($__internal_66bc419f7b53dacdbd8adf7028dc5ef26983db1cc085935a5ec2a1c6c386d936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_862dc96432c235baa1e386a5b64598c4064ba71290261791b7238e65f3c485ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862dc96432c235baa1e386a5b64598c4064ba71290261791b7238e65f3c485ef->enter($__internal_862dc96432c235baa1e386a5b64598c4064ba71290261791b7238e65f3c485ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 52
        echo "
";
        
        $__internal_862dc96432c235baa1e386a5b64598c4064ba71290261791b7238e65f3c485ef->leave($__internal_862dc96432c235baa1e386a5b64598c4064ba71290261791b7238e65f3c485ef_prof);

        
        $__internal_66bc419f7b53dacdbd8adf7028dc5ef26983db1cc085935a5ec2a1c6c386d936->leave($__internal_66bc419f7b53dacdbd8adf7028dc5ef26983db1cc085935a5ec2a1c6c386d936_prof);

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
        return array (  138 => 52,  129 => 51,  114 => 41,  107 => 39,  95 => 32,  89 => 30,  85 => 29,  81 => 28,  77 => 27,  73 => 25,  68 => 24,  50 => 8,  41 => 7,  11 => 2,);
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
</table>        <div class=\"text-center\">{{ knp_pagination_render(biens) }}</div>

</div>
{% endblock %}






{% block footer %}

{% endblock %}






", "HTLImmobilierBundle:Front:listeadmin.html.twig", "/var/www/html/testhortala/src/HTL/ImmobilierBundle/Resources/views/Front/listeadmin.html.twig");
    }
}
