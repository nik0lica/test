<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_0370230e361817b8ccf85c962ecf37ed1921b7b35debc7a7545ec9cbd569aa81 extends Twig_Template
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
        $__internal_2f45a7a51917ce741711ff9764b61956a38107e0784b16427ba8c4ac0b0dae91 = $this->env->getExtension("native_profiler");
        $__internal_2f45a7a51917ce741711ff9764b61956a38107e0784b16427ba8c4ac0b0dae91->enter($__internal_2f45a7a51917ce741711ff9764b61956a38107e0784b16427ba8c4ac0b0dae91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2f45a7a51917ce741711ff9764b61956a38107e0784b16427ba8c4ac0b0dae91->leave($__internal_2f45a7a51917ce741711ff9764b61956a38107e0784b16427ba8c4ac0b0dae91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
