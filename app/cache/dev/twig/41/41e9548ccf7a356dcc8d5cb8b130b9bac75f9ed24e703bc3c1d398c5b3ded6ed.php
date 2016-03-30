<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1a27b5e29eb110b937aa91ce0fda41dea3c9d06a856fc8ac9922dae13d00da95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_605f454bc19783d659df7d3bb19094509e67f7c86c6d996822f213d80c400d57 = $this->env->getExtension("native_profiler");
        $__internal_605f454bc19783d659df7d3bb19094509e67f7c86c6d996822f213d80c400d57->enter($__internal_605f454bc19783d659df7d3bb19094509e67f7c86c6d996822f213d80c400d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_605f454bc19783d659df7d3bb19094509e67f7c86c6d996822f213d80c400d57->leave($__internal_605f454bc19783d659df7d3bb19094509e67f7c86c6d996822f213d80c400d57_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4df1ce1cbfed5c44dbae68fadf862be197a540fb1ba2f56b1600d615c04e4b82 = $this->env->getExtension("native_profiler");
        $__internal_4df1ce1cbfed5c44dbae68fadf862be197a540fb1ba2f56b1600d615c04e4b82->enter($__internal_4df1ce1cbfed5c44dbae68fadf862be197a540fb1ba2f56b1600d615c04e4b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_4df1ce1cbfed5c44dbae68fadf862be197a540fb1ba2f56b1600d615c04e4b82->leave($__internal_4df1ce1cbfed5c44dbae68fadf862be197a540fb1ba2f56b1600d615c04e4b82_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
