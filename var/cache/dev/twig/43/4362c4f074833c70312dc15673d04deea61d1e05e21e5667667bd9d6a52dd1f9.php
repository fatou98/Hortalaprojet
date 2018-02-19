<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f4bcfba9e20c2bbc690a764569e0c4d6013701f89eda77ef37d6e7c35f9a46c9 extends Twig_Template
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
        $__internal_f64f714401ba03fdfbfe342a445a7c85c313f87bd69c3b95241c37a84419beb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64f714401ba03fdfbfe342a445a7c85c313f87bd69c3b95241c37a84419beb9->enter($__internal_f64f714401ba03fdfbfe342a445a7c85c313f87bd69c3b95241c37a84419beb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_94d0c2525d36fd551b215d423b7a9ab709be3b37f9ae6931f1faee6795c2ee3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d0c2525d36fd551b215d423b7a9ab709be3b37f9ae6931f1faee6795c2ee3a->enter($__internal_94d0c2525d36fd551b215d423b7a9ab709be3b37f9ae6931f1faee6795c2ee3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_f64f714401ba03fdfbfe342a445a7c85c313f87bd69c3b95241c37a84419beb9->leave($__internal_f64f714401ba03fdfbfe342a445a7c85c313f87bd69c3b95241c37a84419beb9_prof);

        
        $__internal_94d0c2525d36fd551b215d423b7a9ab709be3b37f9ae6931f1faee6795c2ee3a->leave($__internal_94d0c2525d36fd551b215d423b7a9ab709be3b37f9ae6931f1faee6795c2ee3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
