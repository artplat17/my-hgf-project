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

/* @rmcgirr83_nationalflags/event/search_results_post_author_username_append.html */
class __TwigTemplate_8dad386eb11d7c2f3124ba1216fbe830a2a3e11cba5a910e94e0d4f51f4bc7db extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["searchresults"] ?? null), "USER_FLAG", [], "any", false, false, false, 1)) {
            // line 2
            echo "\t<a>";
            echo twig_get_attribute($this->env, $this->source, ($context["searchresults"] ?? null), "USER_FLAG", [], "any", false, false, false, 2);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "@rmcgirr83_nationalflags/event/search_results_post_author_username_append.html";
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
        return new Source("", "@rmcgirr83_nationalflags/event/search_results_post_author_username_append.html", "");
    }
}
