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

/* @phpbb_ads/event/overall_header_navbar_before.html */
class __TwigTemplate_e312376e6625ca7fd9b02d8f3b8312bee72e115179f169685659ba0e64b98d2b extends \Twig\Template
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
        // line 2
        $context["PHPBB_ADS_STYLE"] = "margin: 5px 0 10px 0;";
        // line 3
        list($context["PHPBB_ADS_CODE"], $context["PHPBB_ADS_ID"], $context["S_PHPBB_ADS_CENTER"]) =         [($context["AD_BELOW_HEADER"] ?? null), ($context["AD_BELOW_HEADER_ID"] ?? null), ($context["AD_BELOW_HEADER_CENTER"] ?? null)];
        // line 4
        $this->loadTemplate("@phpbb_ads/phpbb_ads_default.html", "@phpbb_ads/event/overall_header_navbar_before.html", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "@phpbb_ads/event/overall_header_navbar_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_ads/event/overall_header_navbar_before.html", "");
    }
}
