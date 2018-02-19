<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2351a5b935525f17b8ff6d50b069b054ebd428032c01581b18e67a2be136ec09 extends Twig_Template
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
        $__internal_93e6d4fed6337127be183a2f89baf28b017fed4db620902108a18148b2a2de10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93e6d4fed6337127be183a2f89baf28b017fed4db620902108a18148b2a2de10->enter($__internal_93e6d4fed6337127be183a2f89baf28b017fed4db620902108a18148b2a2de10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_ac1476bb58cba1f1fb98e17714b082e1aa9f11ee263d4652f042d2b5207d0920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1476bb58cba1f1fb98e17714b082e1aa9f11ee263d4652f042d2b5207d0920->enter($__internal_ac1476bb58cba1f1fb98e17714b082e1aa9f11ee263d4652f042d2b5207d0920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_93e6d4fed6337127be183a2f89baf28b017fed4db620902108a18148b2a2de10->leave($__internal_93e6d4fed6337127be183a2f89baf28b017fed4db620902108a18148b2a2de10_prof);

        
        $__internal_ac1476bb58cba1f1fb98e17714b082e1aa9f11ee263d4652f042d2b5207d0920->leave($__internal_ac1476bb58cba1f1fb98e17714b082e1aa9f11ee263d4652f042d2b5207d0920_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
