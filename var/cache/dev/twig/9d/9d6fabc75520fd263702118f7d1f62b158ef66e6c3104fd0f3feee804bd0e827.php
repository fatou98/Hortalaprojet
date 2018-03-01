<?php

/* HTLImmobilierBundle:Front:listereservation.html.twig */
class __TwigTemplate_6c4231136b5689985c70e5eabdb6e5f4e58d55cc40bf809b244aa0a6f237bef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base1.html.twig", "HTLImmobilierBundle:Front:listereservation.html.twig", 2);
        $this->blocks = array(
            'table' => array($this, 'block_table'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b27f1ad310e6f3b42e3cc5f8537aff5c32d795c6f433f76134caebf9e456d3b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27f1ad310e6f3b42e3cc5f8537aff5c32d795c6f433f76134caebf9e456d3b2->enter($__internal_b27f1ad310e6f3b42e3cc5f8537aff5c32d795c6f433f76134caebf9e456d3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listereservation.html.twig"));

        $__internal_19569b5b4111c509680715d82d88449198474c936459a8e204a019560be74156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19569b5b4111c509680715d82d88449198474c936459a8e204a019560be74156->enter($__internal_19569b5b4111c509680715d82d88449198474c936459a8e204a019560be74156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listereservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b27f1ad310e6f3b42e3cc5f8537aff5c32d795c6f433f76134caebf9e456d3b2->leave($__internal_b27f1ad310e6f3b42e3cc5f8537aff5c32d795c6f433f76134caebf9e456d3b2_prof);

        
        $__internal_19569b5b4111c509680715d82d88449198474c936459a8e204a019560be74156->leave($__internal_19569b5b4111c509680715d82d88449198474c936459a8e204a019560be74156_prof);

    }

    // line 7
    public function block_table($context, array $blocks = array())
    {
        $__internal_e1171d5966553c7c0091eca6aafb7052769ab9818cf17abffed79149226406d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1171d5966553c7c0091eca6aafb7052769ab9818cf17abffed79149226406d7->enter($__internal_e1171d5966553c7c0091eca6aafb7052769ab9818cf17abffed79149226406d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_cf4fa5740f6b876c0cdeddd5aaab2362ba23dddfb6ff9cff56e687fa2d1881c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4fa5740f6b876c0cdeddd5aaab2362ba23dddfb6ff9cff56e687fa2d1881c8->enter($__internal_cf4fa5740f6b876c0cdeddd5aaab2362ba23dddfb6ff9cff56e687fa2d1881c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 8
        echo "
<div class=\"container divtable\" style=\"margin-left:30px;\">
<table class=\"table table-condensed\" id=\"listebientable\">
<thead>
    <tr>
        <th>nom client</th>
        <th>adresse bien</th>
        <th>type bien</th>
                <th>prix</th>
        <th>image</th>

        <th>details</th>
    </tr>
</thead>
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 23
            echo "  <tbody>
    <tr>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "libellelocalite", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "typebien", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "</td>
        <td><img class=\"card-img-top\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 0, array(), "array"), "html", null, true);
            echo "\" alt=\"Card image cap\" width=\"50px\">
</td>
         <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default bg-primary\" id=\"reservationid\">DETAILS</a></td>


    </tr>
    </tbody>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</table>
        <div class=\"text-center\">";
        // line 41
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["reservations"] ?? $this->getContext($context, "reservations")));
        echo "</div>

</div>
";
        
        $__internal_cf4fa5740f6b876c0cdeddd5aaab2362ba23dddfb6ff9cff56e687fa2d1881c8->leave($__internal_cf4fa5740f6b876c0cdeddd5aaab2362ba23dddfb6ff9cff56e687fa2d1881c8_prof);

        
        $__internal_e1171d5966553c7c0091eca6aafb7052769ab9818cf17abffed79149226406d7->leave($__internal_e1171d5966553c7c0091eca6aafb7052769ab9818cf17abffed79149226406d7_prof);

    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7e21a00188d7269cb9e9cf15488184630e12db9a9f6116e5c75c300a5ba5e793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e21a00188d7269cb9e9cf15488184630e12db9a9f6116e5c75c300a5ba5e793->enter($__internal_7e21a00188d7269cb9e9cf15488184630e12db9a9f6116e5c75c300a5ba5e793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_e50aba3e533cb6030d5065be276f1142dab7c2690bce5f15e59a9721affb4e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50aba3e533cb6030d5065be276f1142dab7c2690bce5f15e59a9721affb4e54->enter($__internal_e50aba3e533cb6030d5065be276f1142dab7c2690bce5f15e59a9721affb4e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 52
        echo "
";
        
        $__internal_e50aba3e533cb6030d5065be276f1142dab7c2690bce5f15e59a9721affb4e54->leave($__internal_e50aba3e533cb6030d5065be276f1142dab7c2690bce5f15e59a9721affb4e54_prof);

        
        $__internal_7e21a00188d7269cb9e9cf15488184630e12db9a9f6116e5c75c300a5ba5e793->leave($__internal_7e21a00188d7269cb9e9cf15488184630e12db9a9f6116e5c75c300a5ba5e793_prof);

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
        return array (  142 => 52,  133 => 51,  119 => 41,  116 => 40,  109 => 38,  97 => 31,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  71 => 23,  66 => 22,  50 => 8,  41 => 7,  11 => 2,);
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
{% extends \"::base1.html.twig\" %}




    {% block table%}

<div class=\"container divtable\" style=\"margin-left:30px;\">
<table class=\"table table-condensed\" id=\"listebientable\">
<thead>
    <tr>
        <th>nom client</th>
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
        <td>{{reservation.bien.libellelocalite}}</td>
        <td>{{reservation.bien.typebien}}</td>
        <td>{{reservation.bien.prixlocation}}</td>
        <td><img class=\"card-img-top\" src=\"{{ asset('image/') }}{{reservation.bien.images[0]}}\" alt=\"Card image cap\" width=\"50px\">
</td>
         <td><a href=\"{{path('details',{id:reservation.id})}}\" class=\"btn btn-default bg-primary\" id=\"reservationid\">DETAILS</a></td>


    </tr>
    </tbody>

{% else %}

  {% endfor %}
</table>
        <div class=\"text-center\">{{ knp_pagination_render(reservations) }}</div>

</div>
{% endblock %}






{% block footer %}

{% endblock %}






", "HTLImmobilierBundle:Front:listereservation.html.twig", "/var/www/html/testhortala/src/HTL/ImmobilierBundle/Resources/views/Front/listereservation.html.twig");
    }
}
