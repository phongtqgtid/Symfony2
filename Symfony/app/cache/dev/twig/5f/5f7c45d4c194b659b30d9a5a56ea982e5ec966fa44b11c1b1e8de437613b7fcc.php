<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_0c0a236ff629c8a2a9e13a33529d2884158d48664ca004c468551528ced5025b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $context["_list_table"] = trim($this->renderBlock("list_table", $context, $blocks));
        // line 14
        echo "    ";
        $context["_list_filters"] = trim($this->renderBlock("list_filters", $context, $blocks));
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('preview', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        if (((twig_length_filter($this->env, (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) > 0) || (twig_length_filter($this->env, (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) > 0))) {
            // line 22
            echo "        <div class=\"row\">
            <div class=\"sonata-ba-list ";
            // line 23
            if ((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                ";
            // line 24
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
            </div>
            ";
            // line 26
            if ((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) {
                // line 27
                echo "                <div class=\"sonata-ba-filter col-md-2\">
                    ";
                // line 28
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                </div>
            ";
            }
            // line 31
            echo "        </div>
    ";
        }
        // line 33
        echo "
";
    }

    // line 16
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 17
    public function block_form($context, array $blocks = array())
    {
    }

    // line 18
    public function block_list($context, array $blocks = array())
    {
    }

    // line 19
    public function block_show($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 19,  104 => 18,  99 => 17,  94 => 16,  89 => 33,  85 => 31,  79 => 28,  76 => 27,  74 => 26,  69 => 24,  61 => 23,  58 => 22,  56 => 21,  53 => 20,  50 => 19,  47 => 18,  44 => 17,  42 => 16,  39 => 15,  36 => 14,  33 => 13,  27 => 12,  24 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% block content %}*/
/*     {% set _list_table   = block('list_table')|trim %}*/
/*     {% set _list_filters = block('list_filters')|trim %}*/
/* */
/*     {% block preview %}{% endblock %}*/
/*     {% block form %}{% endblock %}*/
/*     {% block list %}{% endblock %}*/
/*     {% block show %}{% endblock %}*/
/* */
/*     {% if _list_table|length > 0 or _list_filters|length > 0 %}*/
/*         <div class="row">*/
/*             <div class="sonata-ba-list {% if _list_filters %}col-md-10{% else %}col-md-12{% endif %}">*/
/*                 {{ _list_table|raw }}*/
/*             </div>*/
/*             {% if _list_filters %}*/
/*                 <div class="sonata-ba-filter col-md-2">*/
/*                     {{ _list_filters|raw }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
