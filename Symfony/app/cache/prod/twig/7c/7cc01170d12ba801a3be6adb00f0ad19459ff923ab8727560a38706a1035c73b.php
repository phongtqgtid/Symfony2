<?php

/* EnsJobeetBundle:Job:index.html.twig */
class __TwigTemplate_e36e7cff9b86394c540d71ad6600125aafee5cdcb26facce963b5a237a8afbbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "EnsJobeetBundle:Job:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div id=\"jobs\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "            <div>
                <div class=\"category\">
                    <div class=\"feed\">
                        <a href=\"\">Feed</a>
                    </div>
                    <h1>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</h1>
                </div>
               ";
            // line 16
            $this->loadTemplate("EnsJobeetBundle:Job:list.html.twig", "EnsJobeetBundle:Job:index.html.twig", 16)->display(array_merge($context, array("jobs" => $this->getAttribute($context["category"], "activejobs", array()))));
            // line 17
            echo "                ";
            if ($this->getAttribute($context["category"], "morejobs", array())) {
                // line 18
                echo "                    <div class=\" more_jobs\">
                        <div class=\"more_jobs\">
                            and <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "morejobs", array()), "html", null, true);
                echo "</a>
                            more...
                        </div>
                    </div>
                ";
            }
            // line 25
            echo "            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 27,  97 => 25,  87 => 20,  83 => 18,  80 => 17,  78 => 16,  73 => 14,  66 => 9,  49 => 8,  46 => 7,  43 => 6,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'EnsJobeetBundle::layout.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/ensjobeet/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div id="jobs">*/
/*         {% for category in categories %}*/
/*             <div>*/
/*                 <div class="category">*/
/*                     <div class="feed">*/
/*                         <a href="">Feed</a>*/
/*                     </div>*/
/*                     <h1>{{ category.name }}</h1>*/
/*                 </div>*/
/*                {% include 'EnsJobeetBundle:Job:list.html.twig' with { 'jobs':category.activejobs } %}*/
/*                 {% if category.morejobs %}*/
/*                     <div class=" more_jobs">*/
/*                         <div class="more_jobs">*/
/*                             and <a href="{{ path('EnsJobeetBundle_category', { 'slug': category.slug }) }}">{{ category.morejobs }}</a>*/
/*                             more...*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
