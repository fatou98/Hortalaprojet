<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_85c530d3975891c050cb6bdad4c250874f67374c3805621f6bb63732c6fa1725 extends Twig_Template
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
        $__internal_c5677e048e8007ca5b60b56e531f3ddf35e320fcfa0b295a076d96b464a972ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5677e048e8007ca5b60b56e531f3ddf35e320fcfa0b295a076d96b464a972ba->enter($__internal_c5677e048e8007ca5b60b56e531f3ddf35e320fcfa0b295a076d96b464a972ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_d0559b77c4290fc138494bf123c856c113f191b444a1b6df0e0e012da3627d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0559b77c4290fc138494bf123c856c113f191b444a1b6df0e0e012da3627d75->enter($__internal_d0559b77c4290fc138494bf123c856c113f191b444a1b6df0e0e012da3627d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c5677e048e8007ca5b60b56e531f3ddf35e320fcfa0b295a076d96b464a972ba->leave($__internal_c5677e048e8007ca5b60b56e531f3ddf35e320fcfa0b295a076d96b464a972ba_prof);

        
        $__internal_d0559b77c4290fc138494bf123c856c113f191b444a1b6df0e0e012da3627d75->leave($__internal_d0559b77c4290fc138494bf123c856c113f191b444a1b6df0e0e012da3627d75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
