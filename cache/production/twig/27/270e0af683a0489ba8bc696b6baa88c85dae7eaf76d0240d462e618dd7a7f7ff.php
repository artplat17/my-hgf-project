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

/* @rmcgirr83_nationalflags/event/viewtopic_body_avatar_after.html */
class __TwigTemplate_b078d4928900c40d49c71103d819202604adb227c213ff4edfed41456d27a3e5 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "USER_FLAG", [], "any", false, false, false, 1) && ($context["FLAG_POSITION_AFTER_AVATAR"] ?? null))) {
            // line 2
            echo "\t<a class=\"avatarflag\">";
            echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "USER_FLAG", [], "any", false, false, false, 2);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "@rmcgirr83_nationalflags/event/viewtopic_body_avatar_after.html";
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
        return new Source("", "@rmcgirr83_nationalflags/event/viewtopic_body_avatar_after.html", "");
    }
}
