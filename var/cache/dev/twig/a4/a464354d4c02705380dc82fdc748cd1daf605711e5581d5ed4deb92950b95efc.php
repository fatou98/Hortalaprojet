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
        $__internal_e63f95971238b2b973d63d0779316b1602e89af16b1518889cc723f430ed116a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63f95971238b2b973d63d0779316b1602e89af16b1518889cc723f430ed116a->enter($__internal_e63f95971238b2b973d63d0779316b1602e89af16b1518889cc723f430ed116a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listebien.html.twig"));

        $__internal_92b1af5bfa364f351fd71eb0ae37718a507b0461a48224182fe46f330a020794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b1af5bfa364f351fd71eb0ae37718a507b0461a48224182fe46f330a020794->enter($__internal_92b1af5bfa364f351fd71eb0ae37718a507b0461a48224182fe46f330a020794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listebien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e63f95971238b2b973d63d0779316b1602e89af16b1518889cc723f430ed116a->leave($__internal_e63f95971238b2b973d63d0779316b1602e89af16b1518889cc723f430ed116a_prof);

        
        $__internal_92b1af5bfa364f351fd71eb0ae37718a507b0461a48224182fe46f330a020794->leave($__internal_92b1af5bfa364f351fd71eb0ae37718a507b0461a48224182fe46f330a020794_prof);

    }

    // line 6
    public function block_aside($context, array $blocks = array())
    {
        $__internal_a0187af353707bb1d3ac93d0841f98ebc00471b29d4dcfb3be69e559cd16fec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0187af353707bb1d3ac93d0841f98ebc00471b29d4dcfb3be69e559cd16fec8->enter($__internal_a0187af353707bb1d3ac93d0841f98ebc00471b29d4dcfb3be69e559cd16fec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_b27471b12bb36ab5cbe4ae951ab9bf8c0ee4d34bd8e13606a393fb63707767bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27471b12bb36ab5cbe4ae951ab9bf8c0ee4d34bd8e13606a393fb63707767bb->enter($__internal_b27471b12bb36ab5cbe4ae951ab9bf8c0ee4d34bd8e13606a393fb63707767bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

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
        
        $__internal_b27471b12bb36ab5cbe4ae951ab9bf8c0ee4d34bd8e13606a393fb63707767bb->leave($__internal_b27471b12bb36ab5cbe4ae951ab9bf8c0ee4d34bd8e13606a393fb63707767bb_prof);

        
        $__internal_a0187af353707bb1d3ac93d0841f98ebc00471b29d4dcfb3be69e559cd16fec8->leave($__internal_a0187af353707bb1d3ac93d0841f98ebc00471b29d4dcfb3be69e559cd16fec8_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_bb068369f273702339cfcdd36923b9031840ada5e460ef05781162d1f3693fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb068369f273702339cfcdd36923b9031840ada5e460ef05781162d1f3693fd8->enter($__internal_bb068369f273702339cfcdd36923b9031840ada5e460ef05781162d1f3693fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_02a293009bffbba31823c7de81cdcf486111e0bd77cfa7f4e15f1df0d29b6dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a293009bffbba31823c7de81cdcf486111e0bd77cfa7f4e15f1df0d29b6dc9->enter($__internal_02a293009bffbba31823c7de81cdcf486111e0bd77cfa7f4e15f1df0d29b6dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 36
        echo "
";
        
        $__internal_02a293009bffbba31823c7de81cdcf486111e0bd77cfa7f4e15f1df0d29b6dc9->leave($__internal_02a293009bffbba31823c7de81cdcf486111e0bd77cfa7f4e15f1df0d29b6dc9_prof);

        
        $__internal_bb068369f273702339cfcdd36923b9031840ada5e460ef05781162d1f3693fd8->leave($__internal_bb068369f273702339cfcdd36923b9031840ada5e460ef05781162d1f3693fd8_prof);

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
