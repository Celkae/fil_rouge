<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_9dda0abfdb1562fe7baaf525b8cd928d3cd3633d85095f60ad9b3049b53b85f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c19f1cf27f7cc44f73895b76e8994958a08642bf8aa9ac4aae16230cc9eb30ab = $this->env->getExtension("native_profiler");
        $__internal_c19f1cf27f7cc44f73895b76e8994958a08642bf8aa9ac4aae16230cc9eb30ab->enter($__internal_c19f1cf27f7cc44f73895b76e8994958a08642bf8aa9ac4aae16230cc9eb30ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        <div>
            ";
        // line 40
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 41
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 46
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 48
        echo "        </div>

        ";
        // line 50
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 52
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 53
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 54
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "        ";
        }
        // line 59
        echo "
        <div>
            ";
        // line 61
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 63
        echo "        </div>
    </body>
</html>
";
        
        $__internal_c19f1cf27f7cc44f73895b76e8994958a08642bf8aa9ac4aae16230cc9eb30ab->leave($__internal_c19f1cf27f7cc44f73895b76e8994958a08642bf8aa9ac4aae16230cc9eb30ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b7a693454e4d256a1000ccf30765bc47717c48c9bd7e67bc928a54e9f8be4ae = $this->env->getExtension("native_profiler");
        $__internal_3b7a693454e4d256a1000ccf30765bc47717c48c9bd7e67bc928a54e9f8be4ae->enter($__internal_3b7a693454e4d256a1000ccf30765bc47717c48c9bd7e67bc928a54e9f8be4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hub Series";
        
        $__internal_3b7a693454e4d256a1000ccf30765bc47717c48c9bd7e67bc928a54e9f8be4ae->leave($__internal_3b7a693454e4d256a1000ccf30765bc47717c48c9bd7e67bc928a54e9f8be4ae_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4694aff1c9391ca06ac20643351c3bc0e8e0dbb227572a7c12bb3e667eb1ec01 = $this->env->getExtension("native_profiler");
        $__internal_4694aff1c9391ca06ac20643351c3bc0e8e0dbb227572a7c12bb3e667eb1ec01->enter($__internal_4694aff1c9391ca06ac20643351c3bc0e8e0dbb227572a7c12bb3e667eb1ec01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4694aff1c9391ca06ac20643351c3bc0e8e0dbb227572a7c12bb3e667eb1ec01->leave($__internal_4694aff1c9391ca06ac20643351c3bc0e8e0dbb227572a7c12bb3e667eb1ec01_prof);

    }

    // line 61
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3a32b576c00f1dc3f74ae765e7f1e3d606562a6275353e0eb0f3e803d76cd5b = $this->env->getExtension("native_profiler");
        $__internal_b3a32b576c00f1dc3f74ae765e7f1e3d606562a6275353e0eb0f3e803d76cd5b->enter($__internal_b3a32b576c00f1dc3f74ae765e7f1e3d606562a6275353e0eb0f3e803d76cd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 62
        echo "            ";
        
        $__internal_b3a32b576c00f1dc3f74ae765e7f1e3d606562a6275353e0eb0f3e803d76cd5b->leave($__internal_b3a32b576c00f1dc3f74ae765e7f1e3d606562a6275353e0eb0f3e803d76cd5b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 62,  198 => 61,  187 => 6,  175 => 5,  165 => 63,  163 => 61,  159 => 59,  156 => 58,  150 => 57,  141 => 54,  136 => 53,  131 => 52,  126 => 51,  124 => 50,  120 => 48,  112 => 46,  106 => 43,  102 => 42,  97 => 41,  95 => 40,  88 => 35,  82 => 33,  76 => 31,  74 => 30,  69 => 28,  63 => 25,  59 => 24,  40 => 8,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
