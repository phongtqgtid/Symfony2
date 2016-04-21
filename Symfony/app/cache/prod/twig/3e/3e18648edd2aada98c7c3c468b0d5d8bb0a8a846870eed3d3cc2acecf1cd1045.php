<?php

/* EnsJobeetBundle:Job:show.html.twig */
class __TwigTemplate_53326de372795c3a6273a194f02feaf30bd7aab7bf4ea69a746151379200c423 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "EnsJobeetBundle:Job:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "   ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company", array()), "html", null, true);
        echo " is looking for ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
";
    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    <div id=\"job\">
        <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company", array()), "html", null, true);
        echo "</h1>
        <h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
        <small>- ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()), "html", null, true);
        echo "</small>
        </h3>
        ";
        // line 17
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array())) {
            // line 18
            echo "            <div class =\"logo\">
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url", array()), "html", null, true);
            echo "\">
                    <img src=\"/uploads/job/";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company", array()), "html", null, true);
            echo "- logo\">
                </a>
            </div>
        ";
        }
        // line 24
        echo "        <div class=\"description\">
            ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "
        </div>
        <h4>How to apply?</h4>
        <div class=\"how_to_apply\">
            <p class=\"how_to_apply\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "howtoapply", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"meta\">
            <small >post on ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdat", array()), "d/m/Y"), "html", null, true);
        echo "</small>
        </div>
        <div style=\"padding: 20px 0\">
            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "token", array()))), "html", null, true);
        echo "\">Edit</a>
        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  113 => 32,  107 => 29,  100 => 25,  97 => 24,  88 => 20,  84 => 19,  81 => 18,  79 => 17,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  59 => 11,  56 => 10,  50 => 7,  45 => 6,  42 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'EnsJobeetBundle::layout.html.twig' %}*/
/* {% block title %}*/
/*    {{ entity.company }} is looking for {{ entity.position }}*/
/* {% endblock %}*/
/* {% block stylesheet %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/ensjobeet/css/job.css') }}" type="text/css" media="all" />*/
/* {%endblock  %}*/
/* */
/* {% block content %}*/
/*     <div id="job">*/
/*         <h1>{{ entity.company }}</h1>*/
/*         <h2>{{ entity.location }}</h2>*/
/*         <h3>{{ entity.position }}*/
/*         <small>- {{ entity.type }}</small>*/
/*         </h3>*/
/*         {% if  entity.logo  %}*/
/*             <div class ="logo">*/
/*                 <a href="{{ entity.url }}">*/
/*                     <img src="/uploads/job/{{ entity.logo }}" alt="{{ entity.company }}- logo">*/
/*                 </a>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="description">*/
/*             {{ entity.description }}*/
/*         </div>*/
/*         <h4>How to apply?</h4>*/
/*         <div class="how_to_apply">*/
/*             <p class="how_to_apply">{{ entity.howtoapply }}</p>*/
/*         </div>*/
/*         <div class="meta">*/
/*             <small >post on {{ entity.createdat | date('d/m/Y') }}</small>*/
/*         </div>*/
/*         <div style="padding: 20px 0">*/
/*             <a href="{{ path('ens_job_edit',{'token':entity.token}) }}">Edit</a>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
