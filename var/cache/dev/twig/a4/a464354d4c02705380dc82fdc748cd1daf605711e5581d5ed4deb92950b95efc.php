<?php

/* HTLImmobilierBundle:Front:listebien.html.twig */
class __TwigTemplate_b273c7524c3c59645c6ad33ce7371e9dfc993abc94f36b542af58c6a046a8776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("::base.html.twig", "HTLImmobilierBundle:Front:listebien.html.twig", 4);
        $this->blocks = array(
            'aside' => array($this, 'block_aside'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1b57bc09723f619a4900045a4a7e34ff7b85151a9c98f8af6f2f563e861522e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b57bc09723f619a4900045a4a7e34ff7b85151a9c98f8af6f2f563e861522e->enter($__internal_a1b57bc09723f619a4900045a4a7e34ff7b85151a9c98f8af6f2f563e861522e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listebien.html.twig"));

        $__internal_3a3afc5fd71661acb8a54e63ceb105d9ca4ddcd05b5e3c7b4afd49adddc60426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3afc5fd71661acb8a54e63ceb105d9ca4ddcd05b5e3c7b4afd49adddc60426->enter($__internal_3a3afc5fd71661acb8a54e63ceb105d9ca4ddcd05b5e3c7b4afd49adddc60426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listebien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1b57bc09723f619a4900045a4a7e34ff7b85151a9c98f8af6f2f563e861522e->leave($__internal_a1b57bc09723f619a4900045a4a7e34ff7b85151a9c98f8af6f2f563e861522e_prof);

        
        $__internal_3a3afc5fd71661acb8a54e63ceb105d9ca4ddcd05b5e3c7b4afd49adddc60426->leave($__internal_3a3afc5fd71661acb8a54e63ceb105d9ca4ddcd05b5e3c7b4afd49adddc60426_prof);

    }

    // line 6
    public function block_aside($context, array $blocks = array())
    {
        $__internal_fa37822bf05fc1b32fc6c33e3e83cc62ed480ef7e4a68cfb60c0723e040e14af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa37822bf05fc1b32fc6c33e3e83cc62ed480ef7e4a68cfb60c0723e040e14af->enter($__internal_fa37822bf05fc1b32fc6c33e3e83cc62ed480ef7e4a68cfb60c0723e040e14af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_c85664650f7c2948330eb8fe067989e17a58a1bc61d656ea53ce1825e8fd23e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85664650f7c2948330eb8fe067989e17a58a1bc61d656ea53ce1825e8fd23e4->enter($__internal_c85664650f7c2948330eb8fe067989e17a58a1bc61d656ea53ce1825e8fd23e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 7
        echo "

<div class=\"aside reservations\">
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 11
            echo "
                     <div class=\"col-lg-4 card div1\">
 <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "image", array()), "html", null, true);
            echo "\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libelletype", array()), "html", null, true);
            echo "</h4>
                     <p class=\"card-text\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</p>
                        <a class=\"btn btn-default reserver\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\" >Reserver</a>
                                        </div>
</div>
 
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "    <h1>aucun bien de ces criteres</h1>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
        <div class=\"text-center\">";
        // line 26
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["biens"] ?? $this->getContext($context, "biens")));
        echo "</div>

";
        
        $__internal_c85664650f7c2948330eb8fe067989e17a58a1bc61d656ea53ce1825e8fd23e4->leave($__internal_c85664650f7c2948330eb8fe067989e17a58a1bc61d656ea53ce1825e8fd23e4_prof);

        
        $__internal_fa37822bf05fc1b32fc6c33e3e83cc62ed480ef7e4a68cfb60c0723e040e14af->leave($__internal_fa37822bf05fc1b32fc6c33e3e83cc62ed480ef7e4a68cfb60c0723e040e14af_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d503b33590b3413e8d5d9076943225220fed28645a680c3f851583ba71b80205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d503b33590b3413e8d5d9076943225220fed28645a680c3f851583ba71b80205->enter($__internal_d503b33590b3413e8d5d9076943225220fed28645a680c3f851583ba71b80205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_949e1b8502024e9740174220f38135aba4c4c6ea69d39bb8cc4ca893b094d7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949e1b8502024e9740174220f38135aba4c4c6ea69d39bb8cc4ca893b094d7c7->enter($__internal_949e1b8502024e9740174220f38135aba4c4c6ea69d39bb8cc4ca893b094d7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 36
        echo "
";
        
        $__internal_949e1b8502024e9740174220f38135aba4c4c6ea69d39bb8cc4ca893b094d7c7->leave($__internal_949e1b8502024e9740174220f38135aba4c4c6ea69d39bb8cc4ca893b094d7c7_prof);

        
        $__internal_d503b33590b3413e8d5d9076943225220fed28645a680c3f851583ba71b80205->leave($__internal_d503b33590b3413e8d5d9076943225220fed28645a680c3f851583ba71b80205_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:listebien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 36,  114 => 35,  101 => 26,  98 => 25,  91 => 23,  81 => 18,  75 => 17,  71 => 16,  65 => 14,  60 => 11,  55 => 10,  50 => 7,  41 => 6,  11 => 4,);
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


{% extends \"::base.html.twig\" %}

{% block aside %}


<div class=\"aside reservations\">
  {% for bien in biens %}

                     <div class=\"col-lg-4 card div1\">
 <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"{{ asset('image/') }}{{bien.image}}\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">{{bien.libelletype}}</h4>
                     <p class=\"card-text\">{{bien.libellelocalite}}<br>{{bien.prixlocation}}</p>
                        <a class=\"btn btn-default reserver\" href=\"{{path('reserver',{id:bien.id})}}\" >Reserver</a>
                                        </div>
</div>
 
{% else %}
    <h1>aucun bien de ces criteres</h1>
  {% endfor %}
    </div>
        <div class=\"text-center\">{{ knp_pagination_render(biens) }}</div>

{% endblock %}






{% block footer %}

{% endblock %}











", "HTLImmobilierBundle:Front:listebien.html.twig", "/var/www/html/hortala/src/HTL/ImmobilierBundle/Resources/views/Front/listebien.html.twig");
    }
}
