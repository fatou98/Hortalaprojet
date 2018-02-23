<?php

/* HTLImmobilierBundle:Front:listetypebien.html.twig */
class __TwigTemplate_0b7a3d010060983ca7341e4e21c88d15aec5d769277b8befec8dbd0061e91c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::pageadmin.html.twig", "HTLImmobilierBundle:Front:listetypebien.html.twig", 2);
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
        $__internal_1a4863c9da9293883a9cecb655fe42548888c962e6764c3a0656ec68e6d161d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4863c9da9293883a9cecb655fe42548888c962e6764c3a0656ec68e6d161d2->enter($__internal_1a4863c9da9293883a9cecb655fe42548888c962e6764c3a0656ec68e6d161d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listetypebien.html.twig"));

        $__internal_b6c8066596d72ec09c103c02a178230f7febf3ee69bc83cd2d0ce5dbc6c070dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c8066596d72ec09c103c02a178230f7febf3ee69bc83cd2d0ce5dbc6c070dd->enter($__internal_b6c8066596d72ec09c103c02a178230f7febf3ee69bc83cd2d0ce5dbc6c070dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listetypebien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a4863c9da9293883a9cecb655fe42548888c962e6764c3a0656ec68e6d161d2->leave($__internal_1a4863c9da9293883a9cecb655fe42548888c962e6764c3a0656ec68e6d161d2_prof);

        
        $__internal_b6c8066596d72ec09c103c02a178230f7febf3ee69bc83cd2d0ce5dbc6c070dd->leave($__internal_b6c8066596d72ec09c103c02a178230f7febf3ee69bc83cd2d0ce5dbc6c070dd_prof);

    }

    // line 3
    public function block_liste($context, array $blocks = array())
    {
        $__internal_113b419df90505d492f0a8f8aba85b98937f2fa94b145eb5390cc26288e2c315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113b419df90505d492f0a8f8aba85b98937f2fa94b145eb5390cc26288e2c315->enter($__internal_113b419df90505d492f0a8f8aba85b98937f2fa94b145eb5390cc26288e2c315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liste"));

        $__internal_a60db93084f9c2c7e55886025ac21a80bc9f1bde2699cc4f189df042da25d7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a60db93084f9c2c7e55886025ac21a80bc9f1bde2699cc4f189df042da25d7fa->enter($__internal_a60db93084f9c2c7e55886025ac21a80bc9f1bde2699cc4f189df042da25d7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liste"));

        // line 4
        echo "

   <div class=\"\" id=\"divtable1\">
<h1>LISTE DES TYPE </h1>
<table class=\"table table-condensed\" border=\"1px\" id=\"listebientable\">
<thead>
    <tr>
        <th>ID</th>
        <th>Type bien</th>
        
    
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libelletype", array()), "html", null, true);
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
        
        $__internal_a60db93084f9c2c7e55886025ac21a80bc9f1bde2699cc4f189df042da25d7fa->leave($__internal_a60db93084f9c2c7e55886025ac21a80bc9f1bde2699cc4f189df042da25d7fa_prof);

        
        $__internal_113b419df90505d492f0a8f8aba85b98937f2fa94b145eb5390cc26288e2c315->leave($__internal_113b419df90505d492f0a8f8aba85b98937f2fa94b145eb5390cc26288e2c315_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:listetypebien.html.twig";
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


   <div class=\"\" id=\"divtable1\">
<h1>LISTE DES TYPE </h1>
<table class=\"table table-condensed\" border=\"1px\" id=\"listebientable\">
<thead>
    <tr>
        <th>ID</th>
        <th>Type bien</th>
        
    
    </tr>
</thead>
  {% for localite in localites %}
  <tbody>
    <tr>
        <td>{{localite.id}}</td>
        <td>{{localite.libelletype}}</td>
    </tr>
    </tbody>

{% else %}
<h1>ce bien n'existe pas</h1>
  {% endfor %}
</table></div>
{% endblock %}







", "HTLImmobilierBundle:Front:listetypebien.html.twig", "/var/www/html/hortala/src/HTL/ImmobilierBundle/Resources/views/Front/listetypebien.html.twig");
    }
}
