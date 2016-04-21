<?php

/* EnsJobeetBundle:Job:edit.html.twig */
class __TwigTemplate_40bbc223d0c98fa22f3ecc528fb4663058fa32f9dd21077d3f1ba914de851d16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "EnsJobeetBundle:Job:edit.html.twig", 1);
        $this->blocks = array(
            'field_errors' => array($this, 'block_field_errors'),
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
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => $this));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_field_errors($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            echo "            <ul>
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            </ul>
        ";
        }
        // line 14
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "    <h1>Job edit</h1>
    <form action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_update", array("token" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "token", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
        <table id=\"job_form\">
            <tfoot>
            <tr>
                <td colspan=\"2\">
                    <input type=\"submit\" value=\"Preview your job\" />
                </td>
            </tr>
            </tfoot>
            <tbody>
            <tr>
                <th>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", array()), 'errors');
        echo "
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'errors');
        echo "
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "company", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "company", array()), 'errors');
        echo "
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "company", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'errors');
        echo "
                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'errors');
        echo "
                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'errors');
        echo "
                    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "location", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "location", array()), 'errors');
        echo "
                    ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "location", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'errors');
        echo "
                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "how_to_apply", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "how_to_apply", array()), 'errors');
        echo "
                    ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "how_to_apply", array()), 'widget');
        echo "
                </td>
            </tr>
            ";
        // line 98
        echo "                ";
        // line 99
        echo "                ";
        // line 100
        echo "                    ";
        // line 101
        echo "                    ";
        // line 102
        echo "                ";
        // line 103
        echo "            ";
        // line 104
        echo "            <tr>
                <th>";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "is_public", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "is_public", array()), 'errors');
        echo "
                    ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "is_public", array()), 'widget');
        echo "
                    <br /> Whether the job can also be published on affiliate websites or not.
                </td>
            </tr>
            <tr>
                <th>";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "
                    ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "
                </td>
            </tr>
            </tbody>
        </table>

        ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
    </form>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 122,  287 => 116,  283 => 115,  278 => 113,  270 => 108,  266 => 107,  261 => 105,  258 => 104,  256 => 103,  254 => 102,  252 => 101,  250 => 100,  248 => 99,  246 => 98,  240 => 94,  236 => 93,  231 => 91,  224 => 87,  220 => 86,  215 => 84,  208 => 80,  204 => 79,  199 => 77,  192 => 73,  188 => 72,  183 => 70,  176 => 66,  172 => 65,  167 => 63,  160 => 59,  156 => 58,  151 => 56,  144 => 52,  140 => 51,  135 => 49,  128 => 45,  124 => 44,  119 => 42,  112 => 38,  108 => 37,  103 => 35,  87 => 24,  84 => 23,  81 => 22,  75 => 19,  70 => 18,  67 => 17,  62 => 14,  58 => 12,  49 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsJobeetBundle::layout.html.twig' %}*/
/*  */
/* {% form_theme edit_form _self %}*/
/*  */
/* {% block field_errors %}*/
/*     {% spaceless %}*/
/*         {% if errors|length > 0 %}*/
/*             <ul>*/
/*                 {% for error in errors %}*/
/*                     <li>{{ error.messageTemplate|trans(error.messageParameters, 'validators') }}</li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock field_errors %}*/
/*  */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/ensjobeet/css/job.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/*  */
/* {% block content %}*/
/*     <h1>Job edit</h1>*/
/*     <form action="{{ path('ens_job_update', { 'token': entity.token }) }}" method="post" {{ form_enctype(edit_form) }}>*/
/*         <table id="job_form">*/
/*             <tfoot>*/
/*             <tr>*/
/*                 <td colspan="2">*/
/*                     <input type="submit" value="Preview your job" />*/
/*                 </td>*/
/*             </tr>*/
/*             </tfoot>*/
/*             <tbody>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.category) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.category) }}*/
/*                     {{ form_widget(edit_form.category) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.type) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.type) }}*/
/*                     {{ form_widget(edit_form.type) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.company) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.company) }}*/
/*                     {{ form_widget(edit_form.company) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.file) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.file) }}*/
/*                     {{ form_widget(edit_form.file) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.url) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.url) }}*/
/*                     {{ form_widget(edit_form.url) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.position) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.position) }}*/
/*                     {{ form_widget(edit_form.position) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.location) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.location) }}*/
/*                     {{ form_widget(edit_form.location) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.description) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.description) }}*/
/*                     {{ form_widget(edit_form.description) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.how_to_apply) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.how_to_apply) }}*/
/*                     {{ form_widget(edit_form.how_to_apply) }}*/
/*                 </td>*/
/*             </tr>*/
/*             {#<tr>#}*/
/*                 {#<th>{{ form_label(edit_form.token) }}</th>#}*/
/*                 {#<td>#}*/
/*                     {#{{ form_errors(edit_form.token) }}#}*/
/*                     {#{{ form_widget(edit_form.token) }}#}*/
/*                 {#</td>#}*/
/*             {#</tr>#}*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.is_public) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.is_public) }}*/
/*                     {{ form_widget(edit_form.is_public) }}*/
/*                     <br /> Whether the job can also be published on affiliate websites or not.*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(edit_form.email) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(edit_form.email) }}*/
/*                     {{ form_widget(edit_form.email) }}*/
/*                 </td>*/
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/* */
/*         {{ form_rest(edit_form) }}*/
/*     </form>*/
/* {% endblock %}*/
