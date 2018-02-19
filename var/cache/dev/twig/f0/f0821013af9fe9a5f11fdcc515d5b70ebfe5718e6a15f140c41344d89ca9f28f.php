<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9c5fd0b37dec71bb257be231602d9ee56c4c8e65c5513840aa200aead2940606 extends Twig_Template
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
        $__internal_dbcf2f2f7b31985937a730cc96622427e26379fcdd37acc27f78edd9a00228fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbcf2f2f7b31985937a730cc96622427e26379fcdd37acc27f78edd9a00228fc->enter($__internal_dbcf2f2f7b31985937a730cc96622427e26379fcdd37acc27f78edd9a00228fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b986a41c3052afb8cf752678fb47b38d9a4a7d972b219ec7bff5061ea00eb12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b986a41c3052afb8cf752678fb47b38d9a4a7d972b219ec7bff5061ea00eb12d->enter($__internal_b986a41c3052afb8cf752678fb47b38d9a4a7d972b219ec7bff5061ea00eb12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_dbcf2f2f7b31985937a730cc96622427e26379fcdd37acc27f78edd9a00228fc->leave($__internal_dbcf2f2f7b31985937a730cc96622427e26379fcdd37acc27f78edd9a00228fc_prof);

        
        $__internal_b986a41c3052afb8cf752678fb47b38d9a4a7d972b219ec7bff5061ea00eb12d->leave($__internal_b986a41c3052afb8cf752678fb47b38d9a4a7d972b219ec7bff5061ea00eb12d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
