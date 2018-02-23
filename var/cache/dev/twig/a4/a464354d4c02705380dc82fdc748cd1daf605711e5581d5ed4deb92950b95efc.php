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
        $__internal_3adfe2b8e04ee4931231029b62cff8068272a5c0d46afec3f07570776b53fccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3adfe2b8e04ee4931231029b62cff8068272a5c0d46afec3f07570776b53fccd->enter($__internal_3adfe2b8e04ee4931231029b62cff8068272a5c0d46afec3f07570776b53fccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listebien.html.twig"));

        $__internal_6d8e9914982ebfc97f7b99d85c67a20e3d48775525a4af4fdefdf3fc941c2502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8e9914982ebfc97f7b99d85c67a20e3d48775525a4af4fdefdf3fc941c2502->enter($__internal_6d8e9914982ebfc97f7b99d85c67a20e3d48775525a4af4fdefdf3fc941c2502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listebien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3adfe2b8e04ee4931231029b62cff8068272a5c0d46afec3f07570776b53fccd->leave($__internal_3adfe2b8e04ee4931231029b62cff8068272a5c0d46afec3f07570776b53fccd_prof);

        
        $__internal_6d8e9914982ebfc97f7b99d85c67a20e3d48775525a4af4fdefdf3fc941c2502->leave($__internal_6d8e9914982ebfc97f7b99d85c67a20e3d48775525a4af4fdefdf3fc941c2502_prof);

    }

    // line 6
    public function block_aside($context, array $blocks = array())
    {
        $__internal_983f92c989d2e9831c8984ed9d66d806071b1331b5f9a204e0e0acfd2e61a0f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_983f92c989d2e9831c8984ed9d66d806071b1331b5f9a204e0e0acfd2e61a0f7->enter($__internal_983f92c989d2e9831c8984ed9d66d806071b1331b5f9a204e0e0acfd2e61a0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_c354db6a7ed9962a8323e9aaf1355a9e76cc8006fd19d6cba1d101d1ca3a6938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c354db6a7ed9962a8323e9aaf1355a9e76cc8006fd19d6cba1d101d1ca3a6938->enter($__internal_c354db6a7ed9962a8323e9aaf1355a9e76cc8006fd19d6cba1d101d1ca3a6938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "html", null, true);
            echo "\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "typebien", array()), "html", null, true);
            echo "</h4>
                     <p class=\"card-text\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</p>
                        <a class=\"btn btn-default reserver\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver", array("id" => $this->getAttribute($context["bien"], "id", array()), "libelletype" => $this->getAttribute($context["bien"], "typebien", array()))), "html", null, true);
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
        
        $__internal_c354db6a7ed9962a8323e9aaf1355a9e76cc8006fd19d6cba1d101d1ca3a6938->leave($__internal_c354db6a7ed9962a8323e9aaf1355a9e76cc8006fd19d6cba1d101d1ca3a6938_prof);

        
        $__internal_983f92c989d2e9831c8984ed9d66d806071b1331b5f9a204e0e0acfd2e61a0f7->leave($__internal_983f92c989d2e9831c8984ed9d66d806071b1331b5f9a204e0e0acfd2e61a0f7_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7142a16c690804c9d5368721c4c1ea3b11f8b2a902684f3fe37bd6bc69c58f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7142a16c690804c9d5368721c4c1ea3b11f8b2a902684f3fe37bd6bc69c58f3a->enter($__internal_7142a16c690804c9d5368721c4c1ea3b11f8b2a902684f3fe37bd6bc69c58f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_e771e37bec4c30907dcb5f15a9703a05f037e879f114a5608e999da27324a77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e771e37bec4c30907dcb5f15a9703a05f037e879f114a5608e999da27324a77f->enter($__internal_e771e37bec4c30907dcb5f15a9703a05f037e879f114a5608e999da27324a77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 36
        echo "
";
        
        $__internal_e771e37bec4c30907dcb5f15a9703a05f037e879f114a5608e999da27324a77f->leave($__internal_e771e37bec4c30907dcb5f15a9703a05f037e879f114a5608e999da27324a77f_prof);

        
        $__internal_7142a16c690804c9d5368721c4c1ea3b11f8b2a902684f3fe37bd6bc69c58f3a->leave($__internal_7142a16c690804c9d5368721c4c1ea3b11f8b2a902684f3fe37bd6bc69c58f3a_prof);

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
                    <img class=\"card-img-top\" src=\"{{ asset('image/') }}{{bien.images[0]}}\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">{{bien.typebien}}</h4>
                     <p class=\"card-text\">{{bien.libellelocalite}}<br>{{bien.prixlocation}}</p>
                        <a class=\"btn btn-default reserver\" href=\"{{path('reserver',{id:bien.id,libelletype:bien.typebien})}}\" >Reserver</a>
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
