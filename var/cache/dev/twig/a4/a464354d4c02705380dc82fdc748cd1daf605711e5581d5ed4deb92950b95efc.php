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
        $__internal_952276c99ae5ac483c31a5980ded2902ad16eec2e1cb19368637a183a6c85ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952276c99ae5ac483c31a5980ded2902ad16eec2e1cb19368637a183a6c85ab8->enter($__internal_952276c99ae5ac483c31a5980ded2902ad16eec2e1cb19368637a183a6c85ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listebien.html.twig"));

        $__internal_9d4d0e2d19f68e6652e2daf9252bc52d1b6c9ae4dbd19de5f922ea72ddd6f8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4d0e2d19f68e6652e2daf9252bc52d1b6c9ae4dbd19de5f922ea72ddd6f8c9->enter($__internal_9d4d0e2d19f68e6652e2daf9252bc52d1b6c9ae4dbd19de5f922ea72ddd6f8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listebien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_952276c99ae5ac483c31a5980ded2902ad16eec2e1cb19368637a183a6c85ab8->leave($__internal_952276c99ae5ac483c31a5980ded2902ad16eec2e1cb19368637a183a6c85ab8_prof);

        
        $__internal_9d4d0e2d19f68e6652e2daf9252bc52d1b6c9ae4dbd19de5f922ea72ddd6f8c9->leave($__internal_9d4d0e2d19f68e6652e2daf9252bc52d1b6c9ae4dbd19de5f922ea72ddd6f8c9_prof);

    }

    // line 6
    public function block_aside($context, array $blocks = array())
    {
        $__internal_02c26195de43b9c99da36f52cd4bbc132a1b4ec8989d5bb782794aee085a078c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c26195de43b9c99da36f52cd4bbc132a1b4ec8989d5bb782794aee085a078c->enter($__internal_02c26195de43b9c99da36f52cd4bbc132a1b4ec8989d5bb782794aee085a078c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_75631ec919b8465b5b381a9ca978f49b717ae737bc5d0792144cae8aa4f71d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75631ec919b8465b5b381a9ca978f49b717ae737bc5d0792144cae8aa4f71d32->enter($__internal_75631ec919b8465b5b381a9ca978f49b717ae737bc5d0792144cae8aa4f71d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 7
        echo "

<div class=\"aside reservations\">
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 11
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["bien"]);
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 12
                echo "
                     <div class=\"col-lg-4 card div1\">
 <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "images", array()), $context["val"], array(), "array"), "html", null, true);
                echo "\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libelletype", array()), "html", null, true);
                echo "</h4>
                     <p class=\"card-text\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
                echo "</p>
                        <a class=\"btn btn-default reserver\" href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
                echo "\" >Reserver</a>
                                        </div>
</div>
 
";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 24
                echo "    <h1>aucun bien de ces criteres</h1>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </div>
        <div class=\"text-center\">";
        // line 28
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["biens"] ?? $this->getContext($context, "biens")));
        echo "</div>

";
        
        $__internal_75631ec919b8465b5b381a9ca978f49b717ae737bc5d0792144cae8aa4f71d32->leave($__internal_75631ec919b8465b5b381a9ca978f49b717ae737bc5d0792144cae8aa4f71d32_prof);

        
        $__internal_02c26195de43b9c99da36f52cd4bbc132a1b4ec8989d5bb782794aee085a078c->leave($__internal_02c26195de43b9c99da36f52cd4bbc132a1b4ec8989d5bb782794aee085a078c_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3a496f25b560409c361cd95ba98ba563cbcadf40ed1f4e93b9e7e7ce48e68ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a496f25b560409c361cd95ba98ba563cbcadf40ed1f4e93b9e7e7ce48e68ad5->enter($__internal_3a496f25b560409c361cd95ba98ba563cbcadf40ed1f4e93b9e7e7ce48e68ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_fbd31544b58df1629686c623ae703df2382305fa1a06041cb3bb8e83d58fa501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd31544b58df1629686c623ae703df2382305fa1a06041cb3bb8e83d58fa501->enter($__internal_fbd31544b58df1629686c623ae703df2382305fa1a06041cb3bb8e83d58fa501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "
";
        
        $__internal_fbd31544b58df1629686c623ae703df2382305fa1a06041cb3bb8e83d58fa501->leave($__internal_fbd31544b58df1629686c623ae703df2382305fa1a06041cb3bb8e83d58fa501_prof);

        
        $__internal_3a496f25b560409c361cd95ba98ba563cbcadf40ed1f4e93b9e7e7ce48e68ad5->leave($__internal_3a496f25b560409c361cd95ba98ba563cbcadf40ed1f4e93b9e7e7ce48e68ad5_prof);

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
        return array (  134 => 38,  125 => 37,  112 => 28,  109 => 27,  103 => 26,  96 => 24,  86 => 19,  80 => 18,  76 => 17,  70 => 15,  65 => 12,  59 => 11,  55 => 10,  50 => 7,  41 => 6,  11 => 4,);
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
  {% for key, val in bien %}

                     <div class=\"col-lg-4 card div1\">
 <div class=\"card-header entete\"><h3>A la une</h3></div>
                    <img class=\"card-img-top\" src=\"{{ asset('image/') }}{{bien.images[val]}}\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">{{bien.libelletype}}</h4>
                     <p class=\"card-text\">{{bien.libellelocalite}}<br>{{bien.prixlocation}}</p>
                        <a class=\"btn btn-default reserver\" href=\"{{path('reserver',{id:bien.id})}}\" >Reserver</a>
                                        </div>
</div>
 
{% else %}
    <h1>aucun bien de ces criteres</h1>
  {% endfor %}
  {% endfor %}
    </div>
        <div class=\"text-center\">{{ knp_pagination_render(biens) }}</div>

{% endblock %}






{% block footer %}

{% endblock %}











", "HTLImmobilierBundle:Front:listebien.html.twig", "/var/www/html/hortala/src/HTL/ImmobilierBundle/Resources/views/Front/listebien.html.twig");
    }
}
