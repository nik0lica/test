<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_760bb384f2669de8eb8dee2f423b70cdf0fb5853725e1d0757326c35c31e6098 extends Twig_Template
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
        $__internal_3680c04c666546c287b4f88ca202cce690261da7d6028cf698b4c558d79a8ba3 = $this->env->getExtension("native_profiler");
        $__internal_3680c04c666546c287b4f88ca202cce690261da7d6028cf698b4c558d79a8ba3->enter($__internal_3680c04c666546c287b4f88ca202cce690261da7d6028cf698b4c558d79a8ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3680c04c666546c287b4f88ca202cce690261da7d6028cf698b4c558d79a8ba3->leave($__internal_3680c04c666546c287b4f88ca202cce690261da7d6028cf698b4c558d79a8ba3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
