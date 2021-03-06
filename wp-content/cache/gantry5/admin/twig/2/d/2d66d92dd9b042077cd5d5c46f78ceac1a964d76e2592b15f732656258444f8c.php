<?php

/* @gantry-admin/partials/gantry-details.html.twig */
class __TwigTemplate_2d66d92dd9b042077cd5d5c46f78ceac1a964d76e2592b15f732656258444f8c extends Twig_Template
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
        echo "<div class=\"g-grid overview-gantry\">
\t<div class=\"g-block size-35\">
\t\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-assets://images/gantry5-logo-light.png"));
        echo "\" class=\"about-gantry\" alt=\"Gantry 5\" />

\t</div>
\t<div class=\"g-block\">
\t\t";
        // line 7
        echo $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_GANTRY_DETAILS");
        echo "
\t\t<p><a href=\"http://docs.gantry.org/gantry5\" class=\"button button-primary\"><i class=\"fa fa-book\"></i> <span>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_DOCUMENTATION"), "html", null, true);
        echo "</span></a></p>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/gantry-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }
}
// <div class="g-grid overview-gantry">
// 	<div class="g-block size-35">
// 		<img src="{{ (url('gantry-assets://images/gantry5-logo-light.png'))|e }}" class="about-gantry" alt="Gantry 5" />
// 
// 	</div>
// 	<div class="g-block">
// 		{{ 'GANTRY5_PLATFORM_GANTRY_DETAILS'|trans|raw }}
// 		<p><a href="http://docs.gantry.org/gantry5" class="button button-primary"><i class="fa fa-book"></i> <span>{{ 'GANTRY5_PLATFORM_DOCUMENTATION'|trans }}</span></a></p>
// 	</div>
// </div>
// 
