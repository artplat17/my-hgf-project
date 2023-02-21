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

/* @dmzx_whovisitedthistopic/event/viewtopic_body_qre_before.html */
class __TwigTemplate_9281b088f101c8753f7898a0e8564506b85be0f536e584d973daace452fba4ed extends \Twig\Template
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
        if (($context["PERMISSION_VIEW"] ?? null)) {
            // line 2
            echo "<div class=\"whotop\">
<hr>
<h3>";
            // line 4
            echo ($context["WHOVISITEDTHISTOPIC_TITLE"] ?? null);
            echo "</h3>
<p>
";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "whovisitedthistopic", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["whovisitedthistopic"]) {
                // line 7
                echo "<span class=\"wvtt-member\">
\t";
                // line 8
                if (($context["PERMISSION_SHOW_AVATAR"] ?? null)) {
                    echo "<span class=\"whovisitedthistopic-avatar\">";
                    echo twig_get_attribute($this->env, $this->source, $context["whovisitedthistopic"], "AVATAR", [], "any", false, false, false, 8);
                    echo "</span>";
                }
                echo " <span><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["whovisitedthistopic"], "URL", [], "any", false, false, false, 8);
                echo "\" \"";
                echo twig_get_attribute($this->env, $this->source, $context["whovisitedthistopic"], "DATE", [], "any", false, false, false, 8);
                echo "\" \"";
                echo twig_get_attribute($this->env, $this->source, $context["whovisitedthistopic"], "USERNAME_COLOUR", [], "any", false, false, false, 8);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["whovisitedthistopic"], "USERNAME", [], "any", false, false, false, 8);
                echo "</a></span>";
                if (($context["PERMISSION_COUNT"] ?? null)) {
                    echo " (";
                    echo twig_get_attribute($this->env, $this->source, $context["whovisitedthistopic"], "VISITS", [], "any", false, false, false, 8);
                    echo ")";
                }
                if ( !twig_get_attribute($this->env, $this->source, $context["whovisitedthistopic"], "S_LAST_ROW", [], "any", false, false, false, 8)) {
                    echo ",&ensp;";
                }
                // line 9
                echo "</span>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['whovisitedthistopic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "</p>
";
        }
        // line 13
        echo "<hr>
</div>
";
    }

    public function getTemplateName()
    {
        return "@dmzx_whovisitedthistopic/event/viewtopic_body_qre_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 13,  85 => 11,  78 => 9,  55 => 8,  52 => 7,  48 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@dmzx_whovisitedthistopic/event/viewtopic_body_qre_before.html", "");
    }
}
