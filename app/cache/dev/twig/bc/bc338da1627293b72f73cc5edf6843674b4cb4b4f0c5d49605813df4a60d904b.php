<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b89aa19ab8643986c84603f37ddce279529b3ae05e5fe72f2dba2b0d2dd1f3ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dbecef78ff8d2e1bb22f268ead6d8e6a9e23f3f0f6931508899f0c0f46ac131 = $this->env->getExtension("native_profiler");
        $__internal_8dbecef78ff8d2e1bb22f268ead6d8e6a9e23f3f0f6931508899f0c0f46ac131->enter($__internal_8dbecef78ff8d2e1bb22f268ead6d8e6a9e23f3f0f6931508899f0c0f46ac131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dbecef78ff8d2e1bb22f268ead6d8e6a9e23f3f0f6931508899f0c0f46ac131->leave($__internal_8dbecef78ff8d2e1bb22f268ead6d8e6a9e23f3f0f6931508899f0c0f46ac131_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_75c605ecb0d4eecb62d4b4edddeada68ec133da7f66fd888cad849bc6f66c9a8 = $this->env->getExtension("native_profiler");
        $__internal_75c605ecb0d4eecb62d4b4edddeada68ec133da7f66fd888cad849bc6f66c9a8->enter($__internal_75c605ecb0d4eecb62d4b4edddeada68ec133da7f66fd888cad849bc6f66c9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_75c605ecb0d4eecb62d4b4edddeada68ec133da7f66fd888cad849bc6f66c9a8->leave($__internal_75c605ecb0d4eecb62d4b4edddeada68ec133da7f66fd888cad849bc6f66c9a8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a428646f50522715f10660834f0dedac19111b1f9321ac0d4000a1f4fecb07f9 = $this->env->getExtension("native_profiler");
        $__internal_a428646f50522715f10660834f0dedac19111b1f9321ac0d4000a1f4fecb07f9->enter($__internal_a428646f50522715f10660834f0dedac19111b1f9321ac0d4000a1f4fecb07f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a428646f50522715f10660834f0dedac19111b1f9321ac0d4000a1f4fecb07f9->leave($__internal_a428646f50522715f10660834f0dedac19111b1f9321ac0d4000a1f4fecb07f9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2dee31518c4556241958fb83f5ea8f4d0ce6edb4cfc061559d3922b2fd0d45b = $this->env->getExtension("native_profiler");
        $__internal_c2dee31518c4556241958fb83f5ea8f4d0ce6edb4cfc061559d3922b2fd0d45b->enter($__internal_c2dee31518c4556241958fb83f5ea8f4d0ce6edb4cfc061559d3922b2fd0d45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c2dee31518c4556241958fb83f5ea8f4d0ce6edb4cfc061559d3922b2fd0d45b->leave($__internal_c2dee31518c4556241958fb83f5ea8f4d0ce6edb4cfc061559d3922b2fd0d45b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
