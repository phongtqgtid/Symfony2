<?php

/* EnsJobeetBundle:JobAdmin:list_image.html.twig */
class __TwigTemplate_163cbc211c65ea9dc9fcfb278e23aded630d2abb169f4ae2f9079bf9a197caa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<tr>
    <th>Logo</th>
    <td><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "webPath", array())), "html", null, true);
        echo "\" /></td>
</tr>";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:JobAdmin:list_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* */
/* <tr>*/
/*     <th>Logo</th>*/
/*     <td><img src="{{ asset(object.webPath) }}" /></td>*/
/* </tr>*/
