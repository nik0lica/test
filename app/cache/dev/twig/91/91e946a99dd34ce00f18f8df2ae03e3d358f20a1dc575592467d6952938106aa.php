<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_73510292bebba7ea387d142afc2a7c83032482edd707f1a188306bfa430bbd32 extends Twig_Template
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
        $__internal_8ada09ad17cf7e6e49648599f514a8868a145f5bbb4e9fe8cf2c585252272fcf = $this->env->getExtension("native_profiler");
        $__internal_8ada09ad17cf7e6e49648599f514a8868a145f5bbb4e9fe8cf2c585252272fcf->enter($__internal_8ada09ad17cf7e6e49648599f514a8868a145f5bbb4e9fe8cf2c585252272fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_8ada09ad17cf7e6e49648599f514a8868a145f5bbb4e9fe8cf2c585252272fcf->leave($__internal_8ada09ad17cf7e6e49648599f514a8868a145f5bbb4e9fe8cf2c585252272fcf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
