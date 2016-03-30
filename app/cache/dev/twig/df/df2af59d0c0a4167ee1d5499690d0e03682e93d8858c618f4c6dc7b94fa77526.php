<?php

/* serie/index.html.twig */
class __TwigTemplate_6ff232227101a3cd427b706ba8e6668023071bfa73148f5540e28cb0ee599907 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "serie/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c794d64bc4d585a98bf04076c439c2f9fd02b3aa9fc0cbc12c14648f4dbc7298 = $this->env->getExtension("native_profiler");
        $__internal_c794d64bc4d585a98bf04076c439c2f9fd02b3aa9fc0cbc12c14648f4dbc7298->enter($__internal_c794d64bc4d585a98bf04076c439c2f9fd02b3aa9fc0cbc12c14648f4dbc7298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serie/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c794d64bc4d585a98bf04076c439c2f9fd02b3aa9fc0cbc12c14648f4dbc7298->leave($__internal_c794d64bc4d585a98bf04076c439c2f9fd02b3aa9fc0cbc12c14648f4dbc7298_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7baf2c9800bd0d91516b527fef772177f6343166e9b337298fc1e1cf360269c5 = $this->env->getExtension("native_profiler");
        $__internal_7baf2c9800bd0d91516b527fef772177f6343166e9b337298fc1e1cf360269c5->enter($__internal_7baf2c9800bd0d91516b527fef772177f6343166e9b337298fc1e1cf360269c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Serie list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Poster</th>
                <th>Resume</th>
                <th>Season</th>
                <th>Episode</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["series"]) ? $context["series"] : $this->getContext($context, "series")));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("serie_show", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "poster", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "resume", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "season", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "episode", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("serie_show", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("serie_edit", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("serie_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_7baf2c9800bd0d91516b527fef772177f6343166e9b337298fc1e1cf360269c5->leave($__internal_7baf2c9800bd0d91516b527fef772177f6343166e9b337298fc1e1cf360269c5_prof);

    }

    public function getTemplateName()
    {
        return "serie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 44,  111 => 39,  99 => 33,  93 => 30,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Serie list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Title</th>*/
/*                 <th>Poster</th>*/
/*                 <th>Resume</th>*/
/*                 <th>Season</th>*/
/*                 <th>Episode</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for serie in series %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('serie_show', { 'id': serie.id }) }}">{{ serie.id }}</a></td>*/
/*                 <td>{{ serie.title }}</td>*/
/*                 <td>{{ serie.poster }}</td>*/
/*                 <td>{{ serie.resume }}</td>*/
/*                 <td>{{ serie.season }}</td>*/
/*                 <td>{{ serie.episode }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('serie_show', { 'id': serie.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('serie_edit', { 'id': serie.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('serie_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
