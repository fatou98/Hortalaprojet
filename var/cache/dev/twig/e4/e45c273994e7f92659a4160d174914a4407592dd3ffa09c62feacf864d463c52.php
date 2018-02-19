<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e86c2ace327979004690ecb661017be1b3d672d82b9a1dd6bc273620b893b479 extends Twig_Template
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
        $__internal_3bf52e20b796f6e3c28c73655f4021913ac289953ddcc9c28487c94075046e60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf52e20b796f6e3c28c73655f4021913ac289953ddcc9c28487c94075046e60->enter($__internal_3bf52e20b796f6e3c28c73655f4021913ac289953ddcc9c28487c94075046e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_b985cfa51e1be3c9a279a4b49cf11d57efe8132fe9f3824ebf1b88772b151b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b985cfa51e1be3c9a279a4b49cf11d57efe8132fe9f3824ebf1b88772b151b95->enter($__internal_b985cfa51e1be3c9a279a4b49cf11d57efe8132fe9f3824ebf1b88772b151b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3bf52e20b796f6e3c28c73655f4021913ac289953ddcc9c28487c94075046e60->leave($__internal_3bf52e20b796f6e3c28c73655f4021913ac289953ddcc9c28487c94075046e60_prof);

        
        $__internal_b985cfa51e1be3c9a279a4b49cf11d57efe8132fe9f3824ebf1b88772b151b95->leave($__internal_b985cfa51e1be3c9a279a4b49cf11d57efe8132fe9f3824ebf1b88772b151b95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
