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

/* @dmzx_topstats/top_stats_right_sidebar.html */
class __TwigTemplate_1c641af0af984ccaf069bd82926a03cd6dbcade3bcc934d67194b30bb12d9b1c extends \Twig\Template
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
        if (($context["S_TSMAU_ENABLE"] ?? null)) {
            // line 2
            echo "\t<div class=\"container\">
\t<div class=\"block-left-off\">
\t\t";
            // line 4
            if (($context["TOPSTATS2_IS_COLLAPSIBLE"] ?? null)) {
                // line 5
                echo "\t\t<a class=\"category";
                if (($context["S_TOPSTATS2_HIDDEN"] ?? null)) {
                    echo " hidden-category";
                }
                echo "\" style=\"display: none; height: 0\"></a>
\t\t";
            }
            // line 7
            echo "\t\t<div class=\"forabg\">
\t\t\t<div class=\"inner\">
\t\t\t\t<ul class=\"topiclist\">
\t\t\t\t\t<li class=\"header\">
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt>";
            // line 12
            echo ($context["TSMAU_NUMBER"] ?? null);
            echo " ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MOST_ACTIVE_USERS");
            echo "</dt>
\t\t\t\t\t\t\t <dd>
\t\t\t\t\t\t\t\t<span class=\"stats_info_posts responsive-hide\">";
            // line 14
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
            echo "</span>
\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t\t";
            // line 17
            if (($context["TOPSTATS2_IS_COLLAPSIBLE"] ?? null)) {
                // line 18
                echo "\t\t\t\t\t\t<a href=\"";
                echo ($context["U_TOPSTATS2_COLLAPSE_URL"] ?? null);
                echo "\"
\t\t\t\t\t\t\tclass=\"collapse-btn topstats-collapse\"
\t\t\t\t\t\t\tdata-hidden=\"";
                // line 20
                echo ($context["S_TOPSTATS2_HIDDEN"] ?? null);
                echo "\"
\t\t\t\t\t\t\tdata-ajax=\"phpbb_collapse\"
\t\t\t\t\t\t\tdata-overlay=\"true\"
\t\t\t\t\t\t\tdata-title-alt=\"";
                // line 23
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPSTATS_COLLAPSE_TITLE", ( !($context["S_TOPSTATS2_HIDDEN"] ?? null) * 1));
                echo "\"
\t\t\t\t\t\t\ttitle=\"";
                // line 24
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPSTATS_COLLAPSE_TITLE", (($context["S_TOPSTATS2_HIDDEN"] ?? null) * 1));
                echo "\">
\t\t\t\t\t\t\t<i class=\"fa ";
                // line 25
                if (($context["S_TOPSTATS2_HIDDEN"] ?? null)) {
                    echo "fa-plus-square";
                } else {
                    echo "fa-minus-square";
                }
                echo "\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"topiclist forums";
            // line 30
            if (($context["TOPSTATS2_IS_COLLAPSIBLE"] ?? null)) {
                echo " collapsible";
            }
            echo "\">
\t\t\t\t";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "most_active_users", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["most_active_users"]) {
                // line 32
                echo "\t\t\t\t\t<li class=\"row\">
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt>
\t\t\t\t\t\t\t\t<span class=\"stats_name\">
\t\t\t\t\t\t\t\t\t<a style=\"color: #";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["most_active_users"], "USER_COLOUR", [], "any", false, false, false, 36);
                echo ";\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["most_active_users"], "USER_ID", [], "any", false, false, false, 36);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED_US");
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["most_active_users"], "USER_REG", [], "any", false, false, false, 36);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["most_active_users"], "USERNAME", [], "any", false, false, false, 36);
                echo "</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t<dd style=\"border: none\">
\t\t\t\t\t\t\t\t<span class=\"stats_post_infos_mau\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["most_active_users"], "USER_POST_SEARCH", [], "any", false, false, false, 41);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["most_active_users"], "USER_POSTS", [], "any", false, false, false, 41);
                echo "</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['most_active_users'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t</div>
";
        }
        // line 53
        echo "
";
        // line 54
        if (($context["S_TSMAF_ENABLE"] ?? null)) {
            // line 55
            echo "    <div class=\"container\">
\t<div class=\"block-right-off\">
\t\t";
            // line 57
            if (($context["TOPSTATS3_IS_COLLAPSIBLE"] ?? null)) {
                // line 58
                echo "\t\t<a class=\"category";
                if (($context["S_TOPSTATS3_HIDDEN"] ?? null)) {
                    echo " hidden-category";
                }
                echo "\" style=\"display: none; height: 0\"></a>
\t\t";
            }
            // line 60
            echo "\t\t<div class=\"forabg\">
\t\t\t<div class=\"inner\">
\t\t\t\t<ul class=\"topiclist\">
\t\t\t\t\t<li class=\"header\">
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt>";
            // line 65
            echo ($context["TSMAF_NUMBER"] ?? null);
            echo " ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MOST_ACTIVE_FORUMS");
            echo "</dt>
\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t<span class=\"stats_info_topics responsive-hide\">";
            // line 67
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
            echo "</span>
\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t\t";
            // line 70
            if (($context["TOPSTATS3_IS_COLLAPSIBLE"] ?? null)) {
                // line 71
                echo "\t\t\t\t\t\t<a href=\"";
                echo ($context["U_TOPSTATS3_COLLAPSE_URL"] ?? null);
                echo "\"
\t\t\t\t\t\t\tclass=\"collapse-btn topstats-collapse\"
\t\t\t\t\t\t\tdata-hidden=\"";
                // line 73
                echo ($context["S_TOPSTATS3_HIDDEN"] ?? null);
                echo "\"
\t\t\t\t\t\t\tdata-ajax=\"phpbb_collapse\"
\t\t\t\t\t\t\tdata-overlay=\"true\"
\t\t\t\t\t\t\tdata-title-alt=\"";
                // line 76
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPSTATS_COLLAPSE_TITLE", ( !($context["S_TOPSTATS3_HIDDEN"] ?? null) * 1));
                echo "\"
\t\t\t\t\t\t\ttitle=\"";
                // line 77
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPSTATS_COLLAPSE_TITLE", (($context["S_TOPSTATS3_HIDDEN"] ?? null) * 1));
                echo "\">
\t\t\t\t\t\t\t<i class=\"fa ";
                // line 78
                if (($context["S_TOPSTATS3_HIDDEN"] ?? null)) {
                    echo "fa-plus-square";
                } else {
                    echo "fa-minus-square";
                }
                echo "\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 81
            echo "\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"topiclist forums";
            // line 83
            if (($context["TOPSTATS3_IS_COLLAPSIBLE"] ?? null)) {
                echo " collapsible";
            }
            echo "\">
\t\t\t\t";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "most_active_forums", [], "any", false, false, false, 84));
            foreach ($context['_seq'] as $context["_key"] => $context["most_active_forums"]) {
                // line 85
                echo "\t\t\t\t\t<li class=\"row\">
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt>
\t\t\t\t\t\t\t\t<span class=\"stats_name\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["most_active_forums"], "FORUM_URL", [], "any", false, false, false, 89);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["most_active_forums"], "FORUM_NAME", [], "any", false, false, false, 89);
                echo "</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t<dd style=\"border: none\">
\t\t\t\t\t\t\t\t<span class=\"stats_post_infos_maf\">";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["most_active_forums"], "FORUM_POSTS", [], "any", false, false, false, 93);
                echo "</span>
\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['most_active_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t</div>
";
        }
        // line 104
        echo "
";
        // line 105
        if ((($context["S_TSLVB_ENABLE"] ?? null) || ($context["S_TSLRU_ENABLE"] ?? null))) {
            // line 106
            echo "<div class=\"container\">
    ";
            // line 107
            if (($context["S_TSLRU_ENABLE"] ?? null)) {
                // line 108
                echo "\t<div class=\"block-right";
                if ( !($context["S_TSLVB_ENABLE"] ?? null)) {
                    echo "-off";
                }
                echo " rsp\">
\t\t";
                // line 109
                if (($context["TOPSTATS5_IS_COLLAPSIBLE"] ?? null)) {
                    // line 110
                    echo "\t\t<a class=\"category";
                    if (($context["S_TOPSTATS5_HIDDEN"] ?? null)) {
                        echo " hidden-category";
                    }
                    echo "\" style=\"display: none; height: 0\"></a>
\t\t";
                }
                // line 112
                echo "\t\t<div class=\"forabg\">
\t\t\t<div class=\"inner\">
\t\t\t\t<ul class=\"topiclist\">
\t\t\t\t\t<li class=\"header\">
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt>";
                // line 117
                echo ($context["TSLRU_NUMBER"] ?? null);
                echo " ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_REGISTERED_USERS");
                echo "</dt>
\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t<span class=\"stats_info responsive-hide\">";
                // line 119
                echo $this->extensions['phpbb\template\twig\extension']->lang("TIME");
                echo "</span>
\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t\t";
                // line 122
                if (($context["TOPSTATS5_IS_COLLAPSIBLE"] ?? null)) {
                    // line 123
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo ($context["U_TOPSTATS5_COLLAPSE_URL"] ?? null);
                    echo "\"
\t\t\t\t\t\t\tclass=\"collapse-btn topstats-collapse\"
\t\t\t\t\t\t\tdata-hidden=\"";
                    // line 125
                    echo ($context["S_TOPSTATS5_HIDDEN"] ?? null);
                    echo "\"
\t\t\t\t\t\t\tdata-ajax=\"phpbb_collapse\"
\t\t\t\t\t\t\tdata-overlay=\"true\"
\t\t\t\t\t\t\tdata-title-alt=\"";
                    // line 128
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPSTATS_COLLAPSE_TITLE", ( !($context["S_TOPSTATS5_HIDDEN"] ?? null) * 1));
                    echo "\"
\t\t\t\t\t\t\ttitle=\"";
                    // line 129
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPSTATS_COLLAPSE_TITLE", (($context["S_TOPSTATS5_HIDDEN"] ?? null) * 1));
                    echo "\">
\t\t\t\t\t\t\t<i class=\"fa ";
                    // line 130
                    if (($context["S_TOPSTATS5_HIDDEN"] ?? null)) {
                        echo "fa-plus-square";
                    } else {
                        echo "fa-minus-square";
                    }
                    echo "\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                }
                // line 133
                echo "\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"topiclist forums";
                // line 135
                if (($context["TOPSTATS5_IS_COLLAPSIBLE"] ?? null)) {
                    echo " collapsible";
                }
                echo "\">
\t\t\t\t";
                // line 136
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "last_registered_user", [], "any", false, false, false, 136));
                foreach ($context['_seq'] as $context["_key"] => $context["last_registered_user"]) {
                    // line 137
                    echo "\t\t\t\t\t<li class=\"row\">
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt>
\t\t\t\t\t\t\t\t<span class=\"stats_name\">
\t\t\t\t\t\t\t\t\t<a style=\"font-weight:bold; color:#";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["last_registered_user"], "USER_COLOUR", [], "any", false, false, false, 141);
                    echo ";\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["last_registered_user"], "USER_URL", [], "any", false, false, false, 141);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["last_registered_user"], "USERNAME", [], "any", false, false, false, 141);
                    echo "</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t<dd style=\"border: none\">
\t\t\t\t\t\t\t\t<span class=\"stats_date";
                    // line 145
                    if ( !($context["S_TSLVB_ENABLE"] ?? null)) {
                        echo "-off";
                    }
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["last_registered_user"], "USER_REGISTERED", [], "any", false, false, false, 145);
                    echo "</span>
\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['last_registered_user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            }
            // line 155
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@dmzx_topstats/top_stats_right_sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 155,  407 => 150,  392 => 145,  381 => 141,  375 => 137,  371 => 136,  365 => 135,  361 => 133,  351 => 130,  347 => 129,  343 => 128,  337 => 125,  331 => 123,  329 => 122,  323 => 119,  316 => 117,  309 => 112,  301 => 110,  299 => 109,  292 => 108,  290 => 107,  287 => 106,  285 => 105,  282 => 104,  274 => 98,  263 => 93,  254 => 89,  248 => 85,  244 => 84,  238 => 83,  234 => 81,  224 => 78,  220 => 77,  216 => 76,  210 => 73,  204 => 71,  202 => 70,  196 => 67,  189 => 65,  182 => 60,  174 => 58,  172 => 57,  168 => 55,  166 => 54,  163 => 53,  155 => 47,  141 => 41,  125 => 36,  119 => 32,  115 => 31,  109 => 30,  105 => 28,  95 => 25,  91 => 24,  87 => 23,  81 => 20,  75 => 18,  73 => 17,  67 => 14,  60 => 12,  53 => 7,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@dmzx_topstats/top_stats_right_sidebar.html", "");
    }
}
