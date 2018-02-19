<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e2058e593fb310591c285313506d0a26e4aaa3ac3b4057def899ffd12e20cf84 extends Twig_Template
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
        $__internal_85dfabe046cc026dd21cf198710caebd99a5e5c1e52e4914d0d6157c8c477242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85dfabe046cc026dd21cf198710caebd99a5e5c1e52e4914d0d6157c8c477242->enter($__internal_85dfabe046cc026dd21cf198710caebd99a5e5c1e52e4914d0d6157c8c477242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_7f2c2d6e24a6ce5327957d8a0698145995aa1526064d0d4aaa4164c418cb1422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2c2d6e24a6ce5327957d8a0698145995aa1526064d0d4aaa4164c418cb1422->enter($__internal_7f2c2d6e24a6ce5327957d8a0698145995aa1526064d0d4aaa4164c418cb1422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_85dfabe046cc026dd21cf198710caebd99a5e5c1e52e4914d0d6157c8c477242->leave($__internal_85dfabe046cc026dd21cf198710caebd99a5e5c1e52e4914d0d6157c8c477242_prof);

        
        $__internal_7f2c2d6e24a6ce5327957d8a0698145995aa1526064d0d4aaa4164c418cb1422->leave($__internal_7f2c2d6e24a6ce5327957d8a0698145995aa1526064d0d4aaa4164c418cb1422_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
