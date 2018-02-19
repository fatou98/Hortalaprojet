<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b77cccddd6ba272ae7e2538ea355c6aacc97b708f0698a147f89dbfd55aee97f extends Twig_Template
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
        $__internal_b715218ae6eed17460400a7ee032f7136c58f967683643665d790ddd9348ab26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b715218ae6eed17460400a7ee032f7136c58f967683643665d790ddd9348ab26->enter($__internal_b715218ae6eed17460400a7ee032f7136c58f967683643665d790ddd9348ab26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_a909713350c6ea3a4be25ef78061c32e1046c7a1e6a8d727ffc1dcee333e3259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a909713350c6ea3a4be25ef78061c32e1046c7a1e6a8d727ffc1dcee333e3259->enter($__internal_a909713350c6ea3a4be25ef78061c32e1046c7a1e6a8d727ffc1dcee333e3259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b715218ae6eed17460400a7ee032f7136c58f967683643665d790ddd9348ab26->leave($__internal_b715218ae6eed17460400a7ee032f7136c58f967683643665d790ddd9348ab26_prof);

        
        $__internal_a909713350c6ea3a4be25ef78061c32e1046c7a1e6a8d727ffc1dcee333e3259->leave($__internal_a909713350c6ea3a4be25ef78061c32e1046c7a1e6a8d727ffc1dcee333e3259_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
