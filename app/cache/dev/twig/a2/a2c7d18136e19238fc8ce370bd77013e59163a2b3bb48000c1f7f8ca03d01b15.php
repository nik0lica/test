<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_26c5fc146bf795df90babdb417cc206236ddd8d59ff1f9a91bde4d226ac16cdd extends Twig_Template
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
        $__internal_18454b62a6bcf40d98f9061309370b223711d0e5b3a66db6c609fa63d9579797 = $this->env->getExtension("native_profiler");
        $__internal_18454b62a6bcf40d98f9061309370b223711d0e5b3a66db6c609fa63d9579797->enter($__internal_18454b62a6bcf40d98f9061309370b223711d0e5b3a66db6c609fa63d9579797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_18454b62a6bcf40d98f9061309370b223711d0e5b3a66db6c609fa63d9579797->leave($__internal_18454b62a6bcf40d98f9061309370b223711d0e5b3a66db6c609fa63d9579797_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
