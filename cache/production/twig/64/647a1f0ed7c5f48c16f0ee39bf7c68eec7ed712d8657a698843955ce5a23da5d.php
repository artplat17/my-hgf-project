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

/* @vse_lightbox/event/overall_header_stylesheets_after.html */
class __TwigTemplate_3a7b2249602b3c554b73a574f2c52a8f0be83423b4633d54906adafaca7d551a extends \Twig\Template
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
        if ((($context["LIGHTBOX_RESIZE_HEIGHT"] ?? null) || ($context["LIGHTBOX_RESIZE_WIDTH"] ?? null))) {
            // line 2
            echo "\t<style>
\t\t@media (min-width: 900px) {
\t\t\t";
            // line 4
            if (($context["S_LIGHTBOX_SIGNATURES"] ?? null)) {
                echo ".signature img.postimage,";
            }
            // line 5
            echo "\t\t\t.content img.postimage,
\t\t\t.attachbox img.postimage {
\t\t\t\t";
            // line 7
            echo ((($context["LIGHTBOX_RESIZE_HEIGHT"] ?? null)) ? ((("max-height: " . ($context["LIGHTBOX_RESIZE_HEIGHT"] ?? null)) . "px !important;")) : (""));
            echo "
\t\t\t\t";
            // line 8
            echo ((($context["LIGHTBOX_RESIZE_WIDTH"] ?? null)) ? ((("max-width: " . ($context["LIGHTBOX_RESIZE_WIDTH"] ?? null)) . "px !important;")) : (""));
            echo "
\t\t\t}
\t\t}
\t</style>
";
        }
    }

    public function getTemplateName()
    {
        return "@vse_lightbox/event/overall_header_stylesheets_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  51 => 7,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vse_lightbox/event/overall_header_stylesheets_after.html", "");
    }
}
