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
        $__internal_8b7e152c56dd989f4d60f7748b4716099db3241954a66f19be450d3af4cc37ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b7e152c56dd989f4d60f7748b4716099db3241954a66f19be450d3af4cc37ef->enter($__internal_8b7e152c56dd989f4d60f7748b4716099db3241954a66f19be450d3af4cc37ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:formsearch.html.twig"));

        $__internal_ba0f33ce633a638f10929351ad323487e8c14f5956bbc9c88263861c4ab6ee1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0f33ce633a638f10929351ad323487e8c14f5956bbc9c88263861c4ab6ee1e->enter($__internal_ba0f33ce633a638f10929351ad323487e8c14f5956bbc9c88263861c4ab6ee1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:formsearch.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b7e152c56dd989f4d60f7748b4716099db3241954a66f19be450d3af4cc37ef->leave($__internal_8b7e152c56dd989f4d60f7748b4716099db3241954a66f19be450d3af4cc37ef_prof);

        
        $__internal_ba0f33ce633a638f10929351ad323487e8c14f5956bbc9c88263861c4ab6ee1e->leave($__internal_ba0f33ce633a638f10929351ad323487e8c14f5956bbc9c88263861c4ab6ee1e_prof);

    }

    // line 10
    public function block_suggetions($context, array $blocks = array())
    {
        $__internal_f52f9343dfd416bb0b5aad8c1ae157c7f03d595b2093a37b401ab6bd854f17a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52f9343dfd416bb0b5aad8c1ae157c7f03d595b2093a37b401ab6bd854f17a5->enter($__internal_f52f9343dfd416bb0b5aad8c1ae157c7f03d595b2093a37b401ab6bd854f17a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "suggetions"));

        $__internal_d23654d3e1ffe5a58bcf22a2eba15fdad567acbf1036d63abbe6364a40fed41c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23654d3e1ffe5a58bcf22a2eba15fdad567acbf1036d63abbe6364a40fed41c->enter($__internal_d23654d3e1ffe5a58bcf22a2eba15fdad567acbf1036d63abbe6364a40fed41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "suggetions"));

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

               <div class=\"imgpetit\">                         ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["bien"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 19
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "image", array()), "html", null, true);
                echo "\" alt=\"Los Angeles\" class=\"thumbnail\" width=\"100px\" height=\"auto\">
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "  </div>


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
        
        $__internal_d23654d3e1ffe5a58bcf22a2eba15fdad567acbf1036d63abbe6364a40fed41c->leave($__internal_d23654d3e1ffe5a58bcf22a2eba15fdad567acbf1036d63abbe6364a40fed41c_prof);

        
        $__internal_f52f9343dfd416bb0b5aad8c1ae157c7f03d595b2093a37b401ab6bd854f17a5->leave($__internal_f52f9343dfd416bb0b5aad8c1ae157c7f03d595b2093a37b401ab6bd854f17a5_prof);

    }

    // line 37
    public function block_autres($context, array $blocks = array())
    {
        $__internal_4aa50025709219a0ec38b239b5ded9473216d2418c1f3f159b8c3fafc19ca9d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa50025709219a0ec38b239b5ded9473216d2418c1f3f159b8c3fafc19ca9d5->enter($__internal_4aa50025709219a0ec38b239b5ded9473216d2418c1f3f159b8c3fafc19ca9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "autres"));

        $__internal_c9d26bc5a3888ad19ca894be4cd61b9177ae36667568265a2e6dee58f52a860e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d26bc5a3888ad19ca894be4cd61b9177ae36667568265a2e6dee58f52a860e->enter($__internal_c9d26bc5a3888ad19ca894be4cd61b9177ae36667568265a2e6dee58f52a860e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "autres"));

        // line 38
        echo "
  ";
        
        $__internal_c9d26bc5a3888ad19ca894be4cd61b9177ae36667568265a2e6dee58f52a860e->leave($__internal_c9d26bc5a3888ad19ca894be4cd61b9177ae36667568265a2e6dee58f52a860e_prof);

        
        $__internal_4aa50025709219a0ec38b239b5ded9473216d2418c1f3f159b8c3fafc19ca9d5->leave($__internal_4aa50025709219a0ec38b239b5ded9473216d2418c1f3f159b8c3fafc19ca9d5_prof);

    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        $__internal_903e09ea61468c5bf2019e599e3285dc1d6db82cf91a46f051afc9eb4db088f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903e09ea61468c5bf2019e599e3285dc1d6db82cf91a46f051afc9eb4db088f6->enter($__internal_903e09ea61468c5bf2019e599e3285dc1d6db82cf91a46f051afc9eb4db088f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_88f3af827712ebdb7e3175bb925f2d08dd716f9adbee2e4d058714041db34466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f3af827712ebdb7e3175bb925f2d08dd716f9adbee2e4d058714041db34466->enter($__internal_88f3af827712ebdb7e3175bb925f2d08dd716f9adbee2e4d058714041db34466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 41
        echo "

<!--
";
        // line 44
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
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 66
            echo "  <tbody>
    <tr>
        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libelletype", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
     <td><img class=\"card-img-top\" src=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "image", array()), "html", null, true);
            echo "\" alt=\"Card image cap\"></td>

    </tr>
    </tbody>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo "<h1>ce bien n'existe pas</h1>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "</table></div>

-->


";
        
        $__internal_88f3af827712ebdb7e3175bb925f2d08dd716f9adbee2e4d058714041db34466->leave($__internal_88f3af827712ebdb7e3175bb925f2d08dd716f9adbee2e4d058714041db34466_prof);

        
        $__internal_903e09ea61468c5bf2019e599e3285dc1d6db82cf91a46f051afc9eb4db088f6->leave($__internal_903e09ea61468c5bf2019e599e3285dc1d6db82cf91a46f051afc9eb4db088f6_prof);

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
        return array (  235 => 81,  228 => 79,  216 => 73,  212 => 72,  208 => 71,  204 => 70,  200 => 69,  196 => 68,  192 => 66,  187 => 65,  163 => 44,  158 => 41,  149 => 40,  138 => 38,  129 => 37,  119 => 36,  113 => 35,  104 => 31,  97 => 29,  86 => 20,  76 => 19,  72 => 18,  66 => 16,  62 => 15,  57 => 12,  51 => 11,  42 => 10,  11 => 1,);
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

               <div class=\"imgpetit\">                         {% for image in  bien.images %}
<img src=\"{{ asset('image/') }}{{image.image}}\" alt=\"Los Angeles\" class=\"thumbnail\" width=\"100px\" height=\"auto\">
               {% endfor %}  </div>


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
