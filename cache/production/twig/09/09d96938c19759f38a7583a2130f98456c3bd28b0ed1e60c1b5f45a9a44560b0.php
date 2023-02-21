<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @dark1_memberavatarstatus/event/overall_header_stylesheets_after.html */
class __TwigTemplate_288a3be17aa24f81ffb448e4d9eeb6679099cc96774d33d8f182802b1ff243c2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["MAS_ONLINE"] ?? null)) {
            // line 2
            echo "<style>
\t.mas-status-dot.mas-color {
\t\tbackground-color: #";
            // line 4
            echo ($context["MAS_COLOR_OFFLINE"] ?? null);
            echo ";
\t}
\t.mas-status-dot.mas-color:after {
\t\tbackground-color: #";
            // line 7
            echo ($context["MAS_COLOR_OFFLINE"] ?? null);
            echo ";
\t}
\t.mas-status-online .mas-status-dot.mas-color {
\t\tbackground-color: #";
            // line 10
            echo ($context["MAS_COLOR_ONLINE"] ?? null);
            echo ";
\t}
\t.mas-status-online .mas-status-dot.mas-color:after {
\t\tbackground-color: #";
            // line 13
            echo ($context["MAS_COLOR_ONLINE"] ?? null);
            echo ";
\t}
</style>
";
        }
    }

    public function getTemplateName()
    {
        return "@dark1_memberavatarstatus/event/overall_header_stylesheets_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  55 => 10,  49 => 7,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@dark1_memberavatarstatus/event/overall_header_stylesheets_after.html", "");
    }
}
