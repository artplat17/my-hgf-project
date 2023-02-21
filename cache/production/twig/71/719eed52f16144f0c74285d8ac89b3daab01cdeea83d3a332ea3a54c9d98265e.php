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

/* @gfksx_thanksforposts/event/viewtopic_body_postrow_post_notices_before.html */
class __TwigTemplate_42b5fed8f3410b7377f180cf220949d19757a130727173fbf1fc698af66aad4d extends \Twig\Template
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
        echo "<div id='list_thanks";
        echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POST_ID", [], "any", false, false, false, 1);
        echo "'>
";
        // line 2
        if ((((twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANKS", [], "any", false, false, false, 2) && twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANKS_POSTLIST_VIEW", [], "any", false, false, false, 2)) &&  !twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_POST_ANONYMOUS", [], "any", false, false, false, 2)) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 3
            echo "    <div class=\"notice hotlist\">
\t\t\t";
            // line 4
            if (twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_MOD_THANKS", [], "any", false, false, false, 4)) {
                // line 5
                echo "\t\t\t<ul class=\"post-buttons\" style=\"float: right;position: static;margin-top: 3px;\">
\t\t\t\t<li>
\t\t\t\t\t<a id='clear_list_thanks";
                // line 7
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POST_ID", [], "any", false, false, false, 7);
                echo "' href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "U_CLEAR_LIST_THANKS_POST", [], "any", false, false, false, 7);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("CLEAR_LIST_THANKS");
                echo "\"  class=\"button button-icon-only\" style=\"float:left\">
\t\t\t\t\t\t<i class=\"icon fa-times fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 8
                echo $this->extensions['phpbb\template\twig\extension']->lang("CLEAR_LIST_THANKS");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
            }
            // line 13
            echo "\t\t\t";
            echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANK_TEXT", [], "any", false, false, false, 13);
            echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POST_AUTHOR_FULL", [], "any", false, false, false, 13);
            echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANK_TEXT_2", [], "any", false, false, false, 13);
            echo "<br>
\t\t\t";
            // line 14
            echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "THANKS", [], "any", false, false, false, 14);
            echo "
\t</div>
";
        }
        // line 17
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@gfksx_thanksforposts/event/viewtopic_body_postrow_post_notices_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  76 => 14,  69 => 13,  61 => 8,  53 => 7,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gfksx_thanksforposts/event/viewtopic_body_postrow_post_notices_before.html", "");
    }
}
