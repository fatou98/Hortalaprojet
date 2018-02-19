<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_231b3417c52ce81a851fc8d30c7bb086073645c7240000c8c5810f624871236f extends Twig_Template
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
        $__internal_2229f17ad1ce49557c78a04dd5817f8256b5fd7b6b04b6f8b7af1902f1e29f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2229f17ad1ce49557c78a04dd5817f8256b5fd7b6b04b6f8b7af1902f1e29f44->enter($__internal_2229f17ad1ce49557c78a04dd5817f8256b5fd7b6b04b6f8b7af1902f1e29f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6a71f32bc037dfddd5caf218a164769ab815fead92d4704cd8c06737e96ab3ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a71f32bc037dfddd5caf218a164769ab815fead92d4704cd8c06737e96ab3ed->enter($__internal_6a71f32bc037dfddd5caf218a164769ab815fead92d4704cd8c06737e96ab3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2229f17ad1ce49557c78a04dd5817f8256b5fd7b6b04b6f8b7af1902f1e29f44->leave($__internal_2229f17ad1ce49557c78a04dd5817f8256b5fd7b6b04b6f8b7af1902f1e29f44_prof);

        
        $__internal_6a71f32bc037dfddd5caf218a164769ab815fead92d4704cd8c06737e96ab3ed->leave($__internal_6a71f32bc037dfddd5caf218a164769ab815fead92d4704cd8c06737e96ab3ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
