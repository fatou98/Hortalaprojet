<?php

/* HTLImmobilierBundle:Front:contrat.html.twig */
class __TwigTemplate_d4f2f8f0bc1f7db3c760182e613ec0cb0f36f63879739f126554e5152322c877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base1.html.twig", "HTLImmobilierBundle:Front:contrat.html.twig", 1);
        $this->blocks = array(
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d0d2c4ad3de658855a4be65308ba8630dc08cf56a8d31d4b21006e8a7113f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0d2c4ad3de658855a4be65308ba8630dc08cf56a8d31d4b21006e8a7113f7d->enter($__internal_1d0d2c4ad3de658855a4be65308ba8630dc08cf56a8d31d4b21006e8a7113f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:contrat.html.twig"));

        $__internal_59f1dd378225a91ca558347519ae023967ca156bf28318ebaf4fbd99ea5ce96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f1dd378225a91ca558347519ae023967ca156bf28318ebaf4fbd99ea5ce96d->enter($__internal_59f1dd378225a91ca558347519ae023967ca156bf28318ebaf4fbd99ea5ce96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:contrat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d0d2c4ad3de658855a4be65308ba8630dc08cf56a8d31d4b21006e8a7113f7d->leave($__internal_1d0d2c4ad3de658855a4be65308ba8630dc08cf56a8d31d4b21006e8a7113f7d_prof);

        
        $__internal_59f1dd378225a91ca558347519ae023967ca156bf28318ebaf4fbd99ea5ce96d->leave($__internal_59f1dd378225a91ca558347519ae023967ca156bf28318ebaf4fbd99ea5ce96d_prof);

    }

    // line 2
    public function block_table($context, array $blocks = array())
    {
        $__internal_a713d35e836e3b4748f067afa15eed74fb4530854b249260db598164eee69f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a713d35e836e3b4748f067afa15eed74fb4530854b249260db598164eee69f89->enter($__internal_a713d35e836e3b4748f067afa15eed74fb4530854b249260db598164eee69f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_f20a5fd5d26eab04d4362e9a54d692187a646945114bd673a79de70915455dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f20a5fd5d26eab04d4362e9a54d692187a646945114bd673a79de70915455dad->enter($__internal_f20a5fd5d26eab04d4362e9a54d692187a646945114bd673a79de70915455dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 3
        echo "<style>
div{
\tfont-family:Times New Roman;
}
.panel-title{
\tbackground-color:gray;
\tcolor:white;height:50px;border-radius:5px;text-align:center;

}
.col-md-6{
\tborder:1px solid gray;
\tborder-radius:10px;
  margin-right:20px;
  margin-bottom:10px;
}
.client{
\twidth:450px;
  margin-left:50px;
}
</style>
<div class=\"row\">
                <div class=\"col-md-6 client\">
                    <div class=\"content-box-large\">
                            <div class=\"panel-title\"><h1>CLIENT</h1></div>
                        <div class=\"panel-body\">
                        </div>";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 29
            echo "        <h3>Nom :";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</h3>
    <h3>    CNI :";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "numpiece", array()), "html", null, true);
            echo "</h3>
    <h3>    Tel :";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "tel", array()), "html", null, true);
            echo "</h3>
        <h3>Adresse :";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "adresse", array()), "html", null, true);
            echo "</h3>
      <h3>  Email :";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "email", array()), "html", null, true);
            echo "</h3>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"content-box-header\">
                                <div class=\"panel-title bg-primary\"><h1>BIEN</h1></div>
                            <div class=\"content-box-large box-with-header\">
                                  <h3>Type de bien :";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "typebien", array()), "html", null, true);
            echo "</h3>
                            <h3>      Localite :";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "libellelocalite", array()), "html", null, true);
            echo "</h3>
                           <h3>   Description :";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "description", array()), "html", null, true);
            echo "</h3>
                          <h3> Prix location :";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "</h3>
                        <h3>Images:
                                  ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 48
                echo " <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "image", array()), "html", null, true);
                echo "\" alt=\"Card image cap\" width=\"100px\" height=\"80px\">";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo " </h3>
                            </div>
                        </div>
                    </div>
                </div>   
                 </div> <div class=\"col-md-6 client\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"content-box-header\">
                                <div class=\"panel-title bg-primary\"><h1>MOntant</h1></div>
                            <div class=\"content-box-large box-with-header\">
                                  <h3>Caution :";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "</h3>
                            <h3>      Mensualite :";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "</h3>
                           <h3>    Total:";
            // line 62
            echo twig_escape_filter($this->env, (2 * $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array())), "html", null, true);
            echo "</h3>
                        <div class=\"checkbox\">
      <label> <h3><input type=\"checkbox\" value=\"\">Contrat de 1 an renouvelable</h3></label>
    </div>
 
                            </div>
                        </div>
                    </div>
                </div>   
               </div>
                <div class=\"col-md-6\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"content-box-header\">
                                <div class=\"panel-title bg-primary\"><h1>Contrat</h1></div>
                            <div class=\"content-box-large box-with-header\">
                                  <h3>Terme du contrat</h3>
 <div class=\"form-group\">
  <textarea class=\"form-control\" rows=\"5\" id=\"contrat\"></textarea>
</div>              
<div class=\"radio\">
  <label><input type=\"radio\" name=\"optradio\" id=\"optradio\">Accepter</label>
</div>
<div class=\"radio\">
  <label><input type=\"radio\" name=\"optradio\" id=\"optradio1\">Refuser</label>
</div> 
<div class=\"submit disabled\">
<input type=\"submit\" value=\"enregistrer\" name=\"Enregistrer\" id=\"save\" disabled>
</div> 
 
                            </div>
                        </div>
                    </div>
                </div>   
               </div>
  <div class=\"col-md-2\"><a href=\"";
            // line 97
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
            echo "\" class=\"btn btn-default bg-dark\">RETOUR</a>
</div>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 101
            echo "
  
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo " ";
        
        $__internal_f20a5fd5d26eab04d4362e9a54d692187a646945114bd673a79de70915455dad->leave($__internal_f20a5fd5d26eab04d4362e9a54d692187a646945114bd673a79de70915455dad_prof);

        
        $__internal_a713d35e836e3b4748f067afa15eed74fb4530854b249260db598164eee69f89->leave($__internal_a713d35e836e3b4748f067afa15eed74fb4530854b249260db598164eee69f89_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:contrat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 104,  208 => 101,  199 => 97,  161 => 62,  157 => 61,  153 => 60,  140 => 49,  131 => 48,  127 => 47,  122 => 45,  118 => 44,  114 => 43,  110 => 42,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  81 => 29,  76 => 28,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base1.html.twig\" %}
{% block table %}
<style>
div{
\tfont-family:Times New Roman;
}
.panel-title{
\tbackground-color:gray;
\tcolor:white;height:50px;border-radius:5px;text-align:center;

}
.col-md-6{
\tborder:1px solid gray;
\tborder-radius:10px;
  margin-right:20px;
  margin-bottom:10px;
}
.client{
\twidth:450px;
  margin-left:50px;
}
</style>
<div class=\"row\">
                <div class=\"col-md-6 client\">
                    <div class=\"content-box-large\">
                            <div class=\"panel-title\"><h1>CLIENT</h1></div>
                        <div class=\"panel-body\">
                        </div>{% for reservation in reservations %}
        <h3>Nom :{{reservation.client.nomComplet}}</h3>
    <h3>    CNI :{{reservation.client.numpiece}}</h3>
    <h3>    Tel :{{reservation.client.tel}}</h3>
        <h3>Adresse :{{reservation.client.adresse}}</h3>
      <h3>  Email :{{reservation.client.email}}</h3>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"content-box-header\">
                                <div class=\"panel-title bg-primary\"><h1>BIEN</h1></div>
                            <div class=\"content-box-large box-with-header\">
                                  <h3>Type de bien :{{reservation.bien.typebien}}</h3>
                            <h3>      Localite :{{reservation.bien.libellelocalite}}</h3>
                           <h3>   Description :{{reservation.bien.description}}</h3>
                          <h3> Prix location :{{reservation.bien.prixlocation}}</h3>
                        <h3>Images:
                                  {% for image in reservation.bien.images %}
 <img class=\"card-img-top\" src=\"{{ asset('image/') }}{{image.image}}\" alt=\"Card image cap\" width=\"100px\" height=\"80px\">{% endfor %}
 </h3>
                            </div>
                        </div>
                    </div>
                </div>   
                 </div> <div class=\"col-md-6 client\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"content-box-header\">
                                <div class=\"panel-title bg-primary\"><h1>MOntant</h1></div>
                            <div class=\"content-box-large box-with-header\">
                                  <h3>Caution :{{reservation.bien.prixlocation}}</h3>
                            <h3>      Mensualite :{{reservation.bien.prixlocation}}</h3>
                           <h3>    Total:{{2*reservation.bien.prixlocation}}</h3>
                        <div class=\"checkbox\">
      <label> <h3><input type=\"checkbox\" value=\"\">Contrat de 1 an renouvelable</h3></label>
    </div>
 
                            </div>
                        </div>
                    </div>
                </div>   
               </div>
                <div class=\"col-md-6\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"content-box-header\">
                                <div class=\"panel-title bg-primary\"><h1>Contrat</h1></div>
                            <div class=\"content-box-large box-with-header\">
                                  <h3>Terme du contrat</h3>
 <div class=\"form-group\">
  <textarea class=\"form-control\" rows=\"5\" id=\"contrat\"></textarea>
</div>              
<div class=\"radio\">
  <label><input type=\"radio\" name=\"optradio\" id=\"optradio\">Accepter</label>
</div>
<div class=\"radio\">
  <label><input type=\"radio\" name=\"optradio\" id=\"optradio1\">Refuser</label>
</div> 
<div class=\"submit disabled\">
<input type=\"submit\" value=\"enregistrer\" name=\"Enregistrer\" id=\"save\" disabled>
</div> 
 
                            </div>
                        </div>
                    </div>
                </div>   
               </div>
  <div class=\"col-md-2\"><a href=\"{{path('accueil')}}\" class=\"btn btn-default bg-dark\">RETOUR</a>
</div>

{% else %}

  
  {% endfor %}
 {% endblock %}", "HTLImmobilierBundle:Front:contrat.html.twig", "/var/www/html/testhortala/src/HTL/ImmobilierBundle/Resources/views/Front/contrat.html.twig");
    }
}
