<?php

/* base.html.twig */
class __TwigTemplate_3bf7c5852377c30c879742e9e537a4c8c9cf205d0983a04d7639a09d4df78929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa65323eb4e52043bd5203430a08985e3ab06741c47bc3be6f8be92aaa0a065c = $this->env->getExtension("native_profiler");
        $__internal_aa65323eb4e52043bd5203430a08985e3ab06741c47bc3be6f8be92aaa0a065c->enter($__internal_aa65323eb4e52043bd5203430a08985e3ab06741c47bc3be6f8be92aaa0a065c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://bootswatch.com/cosmo/bootstrap.min.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("serie.png"), "html", null, true);
        echo "\" />
    </head>
    <body>
      <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
          <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\">Hub Series</a>
          </div>
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Serie</a></li>
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"\">Profile</a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\" >Profile</a></li>
                   <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" >Reset</a></li>
                </ul>
              </li>
              <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
              <li>
                ";
        // line 30
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 31
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout</a>
                ";
        } else {
            // line 33
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a>
                ";
        }
        // line 35
        echo "              </li>
            </ul>
        </div>
      </nav>
      <div class=\"container\">
        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "      </div>
    </body>
</html>
";
        
        $__internal_aa65323eb4e52043bd5203430a08985e3ab06741c47bc3be6f8be92aaa0a065c->leave($__internal_aa65323eb4e52043bd5203430a08985e3ab06741c47bc3be6f8be92aaa0a065c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_027f341629b8e8e52310d8e59b71d4e8b99b5f9cf8bbdbbcbe6f880c79e9b183 = $this->env->getExtension("native_profiler");
        $__internal_027f341629b8e8e52310d8e59b71d4e8b99b5f9cf8bbdbbcbe6f880c79e9b183->enter($__internal_027f341629b8e8e52310d8e59b71d4e8b99b5f9cf8bbdbbcbe6f880c79e9b183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hub Series";
        
        $__internal_027f341629b8e8e52310d8e59b71d4e8b99b5f9cf8bbdbbcbe6f880c79e9b183->leave($__internal_027f341629b8e8e52310d8e59b71d4e8b99b5f9cf8bbdbbcbe6f880c79e9b183_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa8a83258a88c94c24030a0bdc9bba263a4579789fe88550dd50b1035a201743 = $this->env->getExtension("native_profiler");
        $__internal_fa8a83258a88c94c24030a0bdc9bba263a4579789fe88550dd50b1035a201743->enter($__internal_fa8a83258a88c94c24030a0bdc9bba263a4579789fe88550dd50b1035a201743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fa8a83258a88c94c24030a0bdc9bba263a4579789fe88550dd50b1035a201743->leave($__internal_fa8a83258a88c94c24030a0bdc9bba263a4579789fe88550dd50b1035a201743_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ef1063e05a14dbbf4952aa0321dfddfee27569d2483ef5353d6a49080c5f771 = $this->env->getExtension("native_profiler");
        $__internal_1ef1063e05a14dbbf4952aa0321dfddfee27569d2483ef5353d6a49080c5f771->enter($__internal_1ef1063e05a14dbbf4952aa0321dfddfee27569d2483ef5353d6a49080c5f771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1ef1063e05a14dbbf4952aa0321dfddfee27569d2483ef5353d6a49080c5f771->leave($__internal_1ef1063e05a14dbbf4952aa0321dfddfee27569d2483ef5353d6a49080c5f771_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f02b6c5bf0951209eab1d4fdc7f81e55a2d969ceeae9297d52601e1cf129aa1 = $this->env->getExtension("native_profiler");
        $__internal_8f02b6c5bf0951209eab1d4fdc7f81e55a2d969ceeae9297d52601e1cf129aa1->enter($__internal_8f02b6c5bf0951209eab1d4fdc7f81e55a2d969ceeae9297d52601e1cf129aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8f02b6c5bf0951209eab1d4fdc7f81e55a2d969ceeae9297d52601e1cf129aa1->leave($__internal_8f02b6c5bf0951209eab1d4fdc7f81e55a2d969ceeae9297d52601e1cf129aa1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 41,  134 => 40,  123 => 6,  111 => 5,  101 => 42,  98 => 41,  96 => 40,  89 => 35,  83 => 33,  77 => 31,  75 => 30,  70 => 28,  64 => 25,  60 => 24,  41 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Hub Series{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('serie.png') }}" />*/
/*     </head>*/
/*     <body>*/
/*       <nav class="navbar navbar-default">*/
/*         <div class="container-fluid">*/
/*           <div class="navbar-header">*/
/*             <a class="navbar-brand" href="#">Hub Series</a>*/
/*           </div>*/
/*           <ul class="nav navbar-nav">*/
/*             <li class="active"><a href="#">Home</a></li>*/
/*             <li><a href="#">Serie</a></li>*/
/*           </ul>*/
/*           <ul class="nav navbar-nav navbar-right">*/
/*                 <li class="dropdown">*/
/*                 <a class="dropdown-toggle" data-toggle="dropdown" href="">Profile</a>*/
/*                 <ul class="dropdown-menu">*/
/*                     <li><a href="{{ path('fos_user_profile_show')}}" >Profile</a></li>*/
/*                    <li><a href="{{ path('fos_user_resetting_request')}}" >Reset</a></li>*/
/*                 </ul>*/
/*               </li>*/
/*               <li><a href="{{ path('fos_user_registration_register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>*/
/*               <li>*/
/*                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                     <a href="{{ path('fos_user_security_logout')}}"><span class="glyphicon glyphicon-log-out"></span> Logout</a>*/
/*                 {% else %}*/
/*                     <a href="{{ path('fos_user_security_login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a>*/
/*                 {% endif %}*/
/*               </li>*/
/*             </ul>*/
/*         </div>*/
/*       </nav>*/
/*       <div class="container">*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*       </div>*/
/*     </body>*/
/* </html>*/
/* */
