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

/* @alfredoramos_imgur/event/overall_footer_after.html */
class __TwigTemplate_f4d9db7fc375913182dc3ebe89a6792a6aebbd1d99e1d90e4ed0d43c3528f0dc extends \Twig\Template
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
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("@alfredoramos_imgur/imgur_config.html", "@alfredoramos_imgur/event/overall_footer_after.html", 1);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 2
        $__internal_compile_1 = null;
        try {
            $__internal_compile_1 =             $this->loadTemplate("@alfredoramos_imgur/imgur_progress_bar.html", "@alfredoramos_imgur/event/overall_footer_after.html", 2);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_1) {
            $__internal_compile_1->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@alfredoramos_imgur/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@alfredoramos_imgur/event/overall_footer_after.html", "");
    }
}
