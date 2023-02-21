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

/* @rmcgirr83_nationalflags/event/viewtopic_body_post_author_before.html */
class __TwigTemplate_98f9abec06d8589f6d0869f1cff21a5b45c993bfee9b5be88f0c1c6482a22d58 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "USER_FLAG", [], "any", false, false, false, 1) && ($context["FLAG_POSITION_BEFORE_USER_NAME"] ?? null))) {
            // line 2
            echo "\t<a>";
            echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "USER_FLAG", [], "any", false, false, false, 2);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "@rmcgirr83_nationalflags/event/viewtopic_body_post_author_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@rmcgirr83_nationalflags/event/viewtopic_body_post_author_before.html", "");
    }
}
