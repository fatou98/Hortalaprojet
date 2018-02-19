<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_fc094dc87b6e74b1ebdf7badb1ef3716fde64fca4f1046a401fb2dc7642cbfe9 extends Twig_Template
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
        $__internal_a18a58fab4ae4d4fb85e76fb847745005f88606bc6b08592c20b86bd1ac76650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a18a58fab4ae4d4fb85e76fb847745005f88606bc6b08592c20b86bd1ac76650->enter($__internal_a18a58fab4ae4d4fb85e76fb847745005f88606bc6b08592c20b86bd1ac76650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_da768d9d334a7cb12202b819c86a081949422bc445b95529af957e664f1201da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da768d9d334a7cb12202b819c86a081949422bc445b95529af957e664f1201da->enter($__internal_da768d9d334a7cb12202b819c86a081949422bc445b95529af957e664f1201da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a18a58fab4ae4d4fb85e76fb847745005f88606bc6b08592c20b86bd1ac76650->leave($__internal_a18a58fab4ae4d4fb85e76fb847745005f88606bc6b08592c20b86bd1ac76650_prof);

        
        $__internal_da768d9d334a7cb12202b819c86a081949422bc445b95529af957e664f1201da->leave($__internal_da768d9d334a7cb12202b819c86a081949422bc445b95529af957e664f1201da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
