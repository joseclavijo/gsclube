<?php

/* forms/fields/input/imagepicker.html.twig */
class __TwigTemplate_9e29e97adfb2dd6328ddd1cb369ffc2b52638d0e77aff072a5fd8525281d6e49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/fields/input/filepicker.html.twig", "forms/fields/input/imagepicker.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/input/filepicker.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["field"] = twig_array_merge(array("icon" => "fa-file-image-o", "filter" => ".(jpe?g|gif|png|svg)\$"), (isset($context["field"]) ? $context["field"] : null));
        // line 5
        echo "    ";
        $this->displayParentBlock("input", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/input/imagepicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'forms/fields/input/filepicker.html.twig' %}*/
/* */
/* {% block input %}*/
/*     {% set field = {'icon': 'fa-file-image-o', 'filter': '\.(jpe?g|gif|png|svg)$'}|merge(field) %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
