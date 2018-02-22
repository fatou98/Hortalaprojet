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
        $__internal_a2849e65b99e5c0f4158cc655dbbe22a7df9c78b9eb14fc0a01174d89f38a1fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2849e65b99e5c0f4158cc655dbbe22a7df9c78b9eb14fc0a01174d89f38a1fd->enter($__internal_a2849e65b99e5c0f4158cc655dbbe22a7df9c78b9eb14fc0a01174d89f38a1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listebien.html.twig"));

        $__internal_dd4d893667b9598a7113ec9e6b68a36fb91bc768ffde7b9c3f54ba93af842b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4d893667b9598a7113ec9e6b68a36fb91bc768ffde7b9c3f54ba93af842b50->enter($__internal_dd4d893667b9598a7113ec9e6b68a36fb91bc768ffde7b9c3f54ba93af842b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listebien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2849e65b99e5c0f4158cc655dbbe22a7df9c78b9eb14fc0a01174d89f38a1fd->leave($__internal_a2849e65b99e5c0f4158cc655dbbe22a7df9c78b9eb14fc0a01174d89f38a1fd_prof);

        
        $__internal_dd4d893667b9598a7113ec9e6b68a36fb91bc768ffde7b9c3f54ba93af842b50->leave($__internal_dd4d893667b9598a7113ec9e6b68a36fb91bc768ffde7b9c3f54ba93af842b50_prof);

    }

    // line 6
    public function block_aside($context, array $blocks = array())
    {
        $__internal_035f6e8ba23a29cf7490eb322969b56db786d4832cef1dcd3116efddf4378d72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_035f6e8ba23a29cf7490eb322969b56db786d4832cef1dcd3116efddf4378d72->enter($__internal_035f6e8ba23a29cf7490eb322969b56db786d4832cef1dcd3116efddf4378d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_3cd665f6e1b200c56d827c7368dc10b32bf3a517fe88e6a0c86df2b7c3d06f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd665f6e1b200c56d827c7368dc10b32bf3a517fe88e6a0c86df2b7c3d06f34->enter($__internal_3cd665f6e1b200c56d827c7368dc10b32bf3a517fe88e6a0c86df2b7c3d06f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

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
        
        $__internal_3cd665f6e1b200c56d827c7368dc10b32bf3a517fe88e6a0c86df2b7c3d06f34->leave($__internal_3cd665f6e1b200c56d827c7368dc10b32bf3a517fe88e6a0c86df2b7c3d06f34_prof);

        
        $__internal_035f6e8ba23a29cf7490eb322969b56db786d4832cef1dcd3116efddf4378d72->leave($__internal_035f6e8ba23a29cf7490eb322969b56db786d4832cef1dcd3116efddf4378d72_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ae4177f4e6be5c3f2bf90c91e8e2d9a6cb3cdaaaf8c74b499fc123616d9f4973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4177f4e6be5c3f2bf90c91e8e2d9a6cb3cdaaaf8c74b499fc123616d9f4973->enter($__internal_ae4177f4e6be5c3f2bf90c91e8e2d9a6cb3cdaaaf8c74b499fc123616d9f4973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_8fa7ab7bfda5836af249742158883e25da85dd96a7a73495a0aac5dbc1d81ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa7ab7bfda5836af249742158883e25da85dd96a7a73495a0aac5dbc1d81ad4->enter($__internal_8fa7ab7bfda5836af249742158883e25da85dd96a7a73495a0aac5dbc1d81ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 36
        echo "
";
        
        $__internal_8fa7ab7bfda5836af249742158883e25da85dd96a7a73495a0aac5dbc1d81ad4->leave($__internal_8fa7ab7bfda5836af249742158883e25da85dd96a7a73495a0aac5dbc1d81ad4_prof);

        
        $__internal_ae4177f4e6be5c3f2bf90c91e8e2d9a6cb3cdaaaf8c74b499fc123616d9f4973->leave($__internal_ae4177f4e6be5c3f2bf90c91e8e2d9a6cb3cdaaaf8c74b499fc123616d9f4973_prof);

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
