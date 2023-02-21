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

/* @alfredoramos_imgur/imgur_progress_bar.html */
class __TwigTemplate_88becabce5e522d46da9f9203c6ed10d82bdbf140addcfc6222487518a37b3f4 extends \Twig\Template
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
        if ((($context["IMGUR_UPLOAD_URL"] ?? null) && ($context["SHOW_IMGUR_BUTTON"] ?? null))) {
            // line 2
            echo "<div id=\"imgur-progress-wrapper\">
\t<div id=\"imgur-progress-label\"><code>";
            // line 3
            echo "</code></div>
\t<progress id=\"imgur-progress\" max=\"100\"></progress>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@alfredoramos_imgur/imgur_progress_bar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@alfredoramos_imgur/imgur_progress_bar.html", "");
    }
}
