<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_79733b2a24c70c8d8cd405c4fb95780759248e0b82335b12740c68859af6a889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3457d92cf04cf07fa16fbd6bd6b5503d0e17c12a6726cca3a0dda121bb9ee387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3457d92cf04cf07fa16fbd6bd6b5503d0e17c12a6726cca3a0dda121bb9ee387->enter($__internal_3457d92cf04cf07fa16fbd6bd6b5503d0e17c12a6726cca3a0dda121bb9ee387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1b8f2316419b83f5b1df89ad40479a003bb350e3abd96689b0ec1f60bc81f26c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8f2316419b83f5b1df89ad40479a003bb350e3abd96689b0ec1f60bc81f26c->enter($__internal_1b8f2316419b83f5b1df89ad40479a003bb350e3abd96689b0ec1f60bc81f26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3457d92cf04cf07fa16fbd6bd6b5503d0e17c12a6726cca3a0dda121bb9ee387->leave($__internal_3457d92cf04cf07fa16fbd6bd6b5503d0e17c12a6726cca3a0dda121bb9ee387_prof);

        
        $__internal_1b8f2316419b83f5b1df89ad40479a003bb350e3abd96689b0ec1f60bc81f26c->leave($__internal_1b8f2316419b83f5b1df89ad40479a003bb350e3abd96689b0ec1f60bc81f26c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
