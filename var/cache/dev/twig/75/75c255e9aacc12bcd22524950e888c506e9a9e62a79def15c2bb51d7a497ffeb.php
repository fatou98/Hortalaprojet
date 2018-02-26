<?php

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_acde003bf3e1dbd313a8e5dc7838f5e84f3f4aaac223b8d54615c6288a801a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/events.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3986ba571f683fd19d27402c1784151e89399c545137da62c3751c294cd02a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3986ba571f683fd19d27402c1784151e89399c545137da62c3751c294cd02a8->enter($__internal_a3986ba571f683fd19d27402c1784151e89399c545137da62c3751c294cd02a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        $__internal_9566bbb2628d78572ec5503a9846c4bba32d804b7a4c9a5991f0e6546ce4637a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9566bbb2628d78572ec5503a9846c4bba32d804b7a4c9a5991f0e6546ce4637a->enter($__internal_9566bbb2628d78572ec5503a9846c4bba32d804b7a4c9a5991f0e6546ce4637a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3986ba571f683fd19d27402c1784151e89399c545137da62c3751c294cd02a8->leave($__internal_a3986ba571f683fd19d27402c1784151e89399c545137da62c3751c294cd02a8_prof);

        
        $__internal_9566bbb2628d78572ec5503a9846c4bba32d804b7a4c9a5991f0e6546ce4637a->leave($__internal_9566bbb2628d78572ec5503a9846c4bba32d804b7a4c9a5991f0e6546ce4637a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c2024d81816a4b11a7d98f232bc8adf27199dabcac787e50b0e4ae93c81115a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c2024d81816a4b11a7d98f232bc8adf27199dabcac787e50b0e4ae93c81115a->enter($__internal_2c2024d81816a4b11a7d98f232bc8adf27199dabcac787e50b0e4ae93c81115a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_53907fd208d4e8a13a2bd40ffaad9b41177fe9b05d8e3fe4f1156329ea10063b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53907fd208d4e8a13a2bd40ffaad9b41177fe9b05d8e3fe4f1156329ea10063b->enter($__internal_53907fd208d4e8a13a2bd40ffaad9b41177fe9b05d8e3fe4f1156329ea10063b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "</span>
    <strong>Events</strong>
</span>
";
        
        $__internal_53907fd208d4e8a13a2bd40ffaad9b41177fe9b05d8e3fe4f1156329ea10063b->leave($__internal_53907fd208d4e8a13a2bd40ffaad9b41177fe9b05d8e3fe4f1156329ea10063b_prof);

        
        $__internal_2c2024d81816a4b11a7d98f232bc8adf27199dabcac787e50b0e4ae93c81115a->leave($__internal_2c2024d81816a4b11a7d98f232bc8adf27199dabcac787e50b0e4ae93c81115a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_18448c4b1a2d6fc407d2253657e81477fe63cc8740d335348d88be5b3b5f8a6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18448c4b1a2d6fc407d2253657e81477fe63cc8740d335348d88be5b3b5f8a6a->enter($__internal_18448c4b1a2d6fc407d2253657e81477fe63cc8740d335348d88be5b3b5f8a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e747261c620d9531b71e175056b711e006d396e8da9e389bfc20897dd457df15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e747261c620d9531b71e175056b711e006d396e8da9e389bfc20897dd457df15->enter($__internal_e747261c620d9531b71e175056b711e006d396e8da9e389bfc20897dd457df15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    <h2>Event Dispatcher</h2>

    ";
        // line 15
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledlisteners", array()))) {
            // line 16
            echo "        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 20
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">";
            // line 22
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledlisteners", array())), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 25
            echo $context["helper"]->getrender_table($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledlisteners", array()));
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notcalledlisteners", array())), "html", null, true);
            echo "</span></h3>
                <div class=\"tab-content\">
                    ";
            // line 32
            if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notcalledlisteners", array()))) {
                // line 33
                echo "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 44
                echo "                        ";
                echo $context["helper"]->getrender_table($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notcalledlisteners", array()));
                echo "
                    ";
            }
            // line 46
            echo "                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_e747261c620d9531b71e175056b711e006d396e8da9e389bfc20897dd457df15->leave($__internal_e747261c620d9531b71e175056b711e006d396e8da9e389bfc20897dd457df15_prof);

        
        $__internal_18448c4b1a2d6fc407d2253657e81477fe63cc8740d335348d88be5b3b5f8a6a->leave($__internal_18448c4b1a2d6fc407d2253657e81477fe63cc8740d335348d88be5b3b5f8a6a_prof);

    }

    // line 52
    public function getrender_table($__listeners__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "listeners" => $__listeners__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_87961452ab895c9cdbc0b0cf76e09f78bcb3c551550cfcf0b0e8d11c74ce144f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_87961452ab895c9cdbc0b0cf76e09f78bcb3c551550cfcf0b0e8d11c74ce144f->enter($__internal_87961452ab895c9cdbc0b0cf76e09f78bcb3c551550cfcf0b0e8d11c74ce144f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_c58533df1551e887f89b5ad5a121644d3635beac76d74849cb74f4c736f7f1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c58533df1551e887f89b5ad5a121644d3635beac76d74849cb74f4c736f7f1ae->enter($__internal_c58533df1551e887f89b5ad5a121644d3635beac76d74849cb74f4c736f7f1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 53
            echo "    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        ";
            // line 61
            $context["previous_event"] = $this->getAttribute(twig_first($this->env, ($context["listeners"] ?? $this->getContext($context, "listeners"))), "event", array());
            // line 62
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listeners"] ?? $this->getContext($context, "listeners")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 63
                echo "            ";
                if (($this->getAttribute($context["loop"], "first", array()) || ($this->getAttribute($context["listener"], "event", array()) != ($context["previous_event"] ?? $this->getContext($context, "previous_event"))))) {
                    // line 64
                    echo "                ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 65
                        echo "                    </tbody>
                ";
                    }
                    // line 67
                    echo "
                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "event", array()), "html", null, true);
                    echo "</th>
                    </tr>

                ";
                    // line 73
                    $context["previous_event"] = $this->getAttribute($context["listener"], "event", array());
                    // line 74
                    echo "            ";
                }
                // line 75
                echo "
            <tr>
                <td class=\"text-right\">";
                // line 77
                echo twig_escape_filter($this->env, (($this->getAttribute($context["listener"], "priority", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["listener"], "priority", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
                <td class=\"font-normal\">";
                // line 78
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["listener"], "stub", array())));
                echo "</td>
            </tr>

            ";
                // line 81
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 82
                    echo "                </tbody>
            ";
                }
                // line 84
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "    </table>
";
            
            $__internal_c58533df1551e887f89b5ad5a121644d3635beac76d74849cb74f4c736f7f1ae->leave($__internal_c58533df1551e887f89b5ad5a121644d3635beac76d74849cb74f4c736f7f1ae_prof);

            
            $__internal_87961452ab895c9cdbc0b0cf76e09f78bcb3c551550cfcf0b0e8d11c74ce144f->leave($__internal_87961452ab895c9cdbc0b0cf76e09f78bcb3c551550cfcf0b0e8d11c74ce144f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 85,  243 => 84,  239 => 82,  237 => 81,  231 => 78,  227 => 77,  223 => 75,  220 => 74,  218 => 73,  212 => 70,  207 => 67,  203 => 65,  200 => 64,  197 => 63,  179 => 62,  177 => 61,  167 => 53,  149 => 52,  135 => 46,  129 => 44,  116 => 33,  114 => 32,  109 => 30,  101 => 25,  95 => 22,  91 => 20,  85 => 16,  83 => 15,  79 => 13,  70 => 12,  56 => 7,  53 => 6,  44 => 5,  34 => 1,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/event.svg') }}</span>
    <strong>Events</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Event Dispatcher</h2>

    {% if collector.calledlisteners is empty %}
        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    {% else %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">{{ collector.calledlisteners|length }}</span></h3>

                <div class=\"tab-content\">
                    {{ helper.render_table(collector.calledlisteners) }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">{{ collector.notcalledlisteners|length }}</span></h3>
                <div class=\"tab-content\">
                    {% if collector.notcalledlisteners is empty %}
                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    {% else %}
                        {{ helper.render_table(collector.notcalledlisteners) }}
                    {% endif %}
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% macro render_table(listeners) %}
    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        {% set previous_event = (listeners|first).event %}
        {% for listener in listeners %}
            {% if loop.first or listener.event != previous_event %}
                {% if not loop.first %}
                    </tbody>
                {% endif %}

                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">{{ listener.event }}</th>
                    </tr>

                {% set previous_event = listener.event %}
            {% endif %}

            <tr>
                <td class=\"text-right\">{{ listener.priority|default('-') }}</td>
                <td class=\"font-normal\">{{ profiler_dump(listener.stub) }}</td>
            </tr>

            {% if loop.last %}
                </tbody>
            {% endif %}
        {% endfor %}
    </table>
{% endmacro %}
", "@WebProfiler/Collector/events.html.twig", "/var/www/html/testhortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/events.html.twig");
    }
}
