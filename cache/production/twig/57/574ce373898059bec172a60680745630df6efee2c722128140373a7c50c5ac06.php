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

/* @ppk_phpbb3fixes/event/viewtopic_dropdown_top_custom.html */
class __TwigTemplate_8c3b800efba1fa38e41618dd9f75a1460b6f37b7c2e00bfaf4e7180cd50d0765 extends \Twig\Template
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
        if (($context["TOPIC_VIEWS"] ?? null)) {
            echo "<div class=\"pagination\" style=\"float:right;margin: 7px 0px 7px 0px;\">&nbsp;&bull; ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <strong>";
            echo ($context["TOPIC_VIEWS"] ?? null);
            echo "</strong></div>";
        }
    }

    public function getTemplateName()
    {
        return "@ppk_phpbb3fixes/event/viewtopic_dropdown_top_custom.html";
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
        return new Source("", "@ppk_phpbb3fixes/event/viewtopic_dropdown_top_custom.html", "");
    }
}
