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

/* @vse_similartopics/event/viewtopic_body_online_list_before.html */
class __TwigTemplate_b4a0a71b65a159a1d3981cb3ef09bc3fc987b240f4d037b603258a410e2d27e3 extends \Twig\Template
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
            $__internal_compile_0 =             $this->loadTemplate((("@vse_similartopics/similar_topics_" . ($context["S_PST_BRANCH"] ?? null)) . ".html"), "@vse_similartopics/event/viewtopic_body_online_list_before.html", 1);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@vse_similartopics/event/viewtopic_body_online_list_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vse_similartopics/event/viewtopic_body_online_list_before.html", "");
    }
}
