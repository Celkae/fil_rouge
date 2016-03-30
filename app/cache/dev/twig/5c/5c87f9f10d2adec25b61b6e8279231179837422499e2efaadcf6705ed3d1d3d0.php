<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0f8fb6b9e3a21ae0bd63e88ef7dbe491a682b4e857175586322c3beed5125e9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a889a718e7993ac78dabebaaf32b764a188b3b7dbc764d16ce695629aa5cd6be = $this->env->getExtension("native_profiler");
        $__internal_a889a718e7993ac78dabebaaf32b764a188b3b7dbc764d16ce695629aa5cd6be->enter($__internal_a889a718e7993ac78dabebaaf32b764a188b3b7dbc764d16ce695629aa5cd6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a889a718e7993ac78dabebaaf32b764a188b3b7dbc764d16ce695629aa5cd6be->leave($__internal_a889a718e7993ac78dabebaaf32b764a188b3b7dbc764d16ce695629aa5cd6be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f5b2fba08e2b72b604f6ae69a3d90ad1bb7009c4bde16de9e223c0f279144bf4 = $this->env->getExtension("native_profiler");
        $__internal_f5b2fba08e2b72b604f6ae69a3d90ad1bb7009c4bde16de9e223c0f279144bf4->enter($__internal_f5b2fba08e2b72b604f6ae69a3d90ad1bb7009c4bde16de9e223c0f279144bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f5b2fba08e2b72b604f6ae69a3d90ad1bb7009c4bde16de9e223c0f279144bf4->leave($__internal_f5b2fba08e2b72b604f6ae69a3d90ad1bb7009c4bde16de9e223c0f279144bf4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_123d3b7335a7df6f047d2bae7c0383e631c8766310700d4be06e44688bf48bab = $this->env->getExtension("native_profiler");
        $__internal_123d3b7335a7df6f047d2bae7c0383e631c8766310700d4be06e44688bf48bab->enter($__internal_123d3b7335a7df6f047d2bae7c0383e631c8766310700d4be06e44688bf48bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_123d3b7335a7df6f047d2bae7c0383e631c8766310700d4be06e44688bf48bab->leave($__internal_123d3b7335a7df6f047d2bae7c0383e631c8766310700d4be06e44688bf48bab_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1581a0515c5c746644a799b02921a12da3851493a0bd47e79f46892318d39a03 = $this->env->getExtension("native_profiler");
        $__internal_1581a0515c5c746644a799b02921a12da3851493a0bd47e79f46892318d39a03->enter($__internal_1581a0515c5c746644a799b02921a12da3851493a0bd47e79f46892318d39a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1581a0515c5c746644a799b02921a12da3851493a0bd47e79f46892318d39a03->leave($__internal_1581a0515c5c746644a799b02921a12da3851493a0bd47e79f46892318d39a03_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
