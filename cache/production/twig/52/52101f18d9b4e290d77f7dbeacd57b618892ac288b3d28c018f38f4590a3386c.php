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

/* viewtopic_body.html */
class __TwigTemplate_dced56de0212e7e3979e15b67ba3a85c6e826cd20a1b2d913ef8d4d70c6c10df extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<div class=\"postprofile_container";
        // line 5
        if (($context["STYLE_SETTINGS_CONFIG_POSTPROFILE_SIDE"] ?? null)) {
            echo " postprofile_";
            echo ($context["STYLE_SETTINGS_CONFIG_POSTPROFILE_SIDE"] ?? null);
        }
        if (($context["STYLE_SETTINGS_CONFIG_POSTPROFILE_ORIENTATION"] ?? null)) {
            echo " postprofile_";
            echo ($context["STYLE_SETTINGS_CONFIG_POSTPROFILE_ORIENTATION"] ?? null);
        }
        echo "\">

<h2 class=\"forum-title viewtopic\">";
        // line 7
        echo "<a href=\"";
        echo ($context["U_VIEW_FORUM"] ?? null);
        echo "\">";
        echo ($context["FORUM_NAME"] ?? null);
        echo "</a>";
        echo "</h2>
";
        // line 8
        // line 9
        echo "<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the topic body -->
";
        // line 10
        if (($context["FORUM_DESC"] ?? null)) {
            echo "<div class=\"fdescr\">";
            echo ($context["FORUM_DESC"] ?? null);
            echo "<br /></div>";
        }
        // line 11
        echo "
";
        // line 12
        if (($context["MODERATORS"] ?? null)) {
            // line 13
            echo "<p>
\t<strong>";
            // line 14
            if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATOR");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATORS");
            }
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo ($context["MODERATORS"] ?? null);
            echo "
</p>
";
        }
        // line 17
        echo "
";
        // line 18
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 19
            echo "\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 22
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 23
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 25
                echo "\t\t\t<strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 26
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 28
            echo "
\t\t</div>
\t</div>
";
        }
        // line 32
        echo "
<div class=\"action-bar bar-top\">
\t";
        // line 34
        // line 35
        echo "
\t";
        // line 36
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 37
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button specialbutton\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_LOCKED");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 38
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 39
                echo "\t\t\t\t<span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_TOPIC_LOCKED");
                echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            } else {
                // line 41
                echo "\t\t\t\t<span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_POST_REPLY");
                echo "</span> <i class=\"icon fa-reply fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            }
            // line 43
            echo "\t\t</a>
\t";
        }
        // line 45
        echo "
\t";
        // line 46
        // line 47
        echo "\t";
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 47)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 48
        echo "\t";
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('ppk_phpbb3fixes', '__main__'));
        $this->env->loadTemplate('@ppk_phpbb3fixes/event/viewtopic_dropdown_top_custom.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 49
        echo "
\t";
        // line 50
        if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
            // line 51
            echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 52
            echo ($context["S_SEARCHBOX_ACTION"] ?? null);
            echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\"  type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
            // line 54
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_TOPIC");
            echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
            // line 55
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 56
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
            // line 58
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"button button-search-end\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 59
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "</span>
\t\t\t\t</a>
\t\t\t\t";
            // line 61
            echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 66
        echo "
\t";
        // line 67
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 67)) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 68
            echo "\t\t<div class=\"pagination\">
\t\t\t<div class=\"pagination-info\">";
            // line 69
            if ((($context["U_VIEW_UNREAD_POST"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_VIEW_UNREAD_POST"] ?? null);
                echo "\" class=\"mark\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_UNREAD_POST");
                echo "</a> &bull; ";
            }
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "</div>
\t\t\t";
            // line 70
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 70))) {
                // line 71
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 71)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 72
                echo "\t\t\t";
            } else {
                // line 73
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 75
            echo "\t\t</div>
\t";
        }
        // line 77
        echo "\t";
        // line 78
        echo "</div>

";
        // line 80
        // line 81
        echo "
";
        // line 82
        if (($context["S_HAS_POLL"] ?? null)) {
            // line 83
            echo "<form method=\"post\" action=\"";
            echo ($context["S_POLL_ACTION"] ?? null);
            echo "\" data-ajax=\"vote_poll\" data-refresh=\"true\" class=\"topic_poll\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"content\">
\t\t\t<h2 class=\"poll-title\">";
            // line 89
            echo ($context["POLL_QUESTION"] ?? null);
            echo "</h2>
\t\t\t<p class=\"author\">";
            // line 90
            echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_LENGTH");
            if ((($context["S_CAN_VOTE"] ?? null) && ($context["L_POLL_LENGTH"] ?? null))) {
                echo "<br />";
            }
            if (($context["S_CAN_VOTE"] ?? null)) {
                echo "<span class=\"poll_max_votes\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MAX_VOTES");
                echo "</span>";
            }
            echo "</p>

\t\t\t<fieldset class=\"polls\">
\t\t\t";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "poll_option", [], "any", false, false, false, 93));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 94
                echo "\t\t\t\t";
                // line 95
                echo "\t\t\t\t<dl class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 95)) {
                    echo "voted";
                }
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_MOST_VOTES", [], "any", false, false, false, 95)) {
                    echo " most-votes";
                }
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 95)) {
                    echo " title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-alt-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_VOTED_OPTION");
                echo "\" data-poll-option-id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 95);
                echo "\">
\t\t\t\t\t<dt>";
                // line 96
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<label for=\"vote_";
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 96);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_CAPTION", [], "any", false, false, false, 96);
                    echo "</label>";
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_CAPTION", [], "any", false, false, false, 96);
                }
                echo "</dt>
\t\t\t\t\t";
                // line 97
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<dd style=\"width: auto;\" class=\"poll_option_select\">";
                    if (($context["S_IS_MULTI_CHOICE"] ?? null)) {
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 97);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 97);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 97)) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 97);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 97);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 97)) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                    echo "</dd>";
                }
                // line 98
                echo "\t\t\t\t\t<dd class=\"resultbar";
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\"><div class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 98) < 20)) {
                    echo "pollbar1";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 98) < 40)) {
                    echo "pollbar2";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 98) < 60)) {
                    echo "pollbar3";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 98) < 80)) {
                    echo "pollbar4";
                } else {
                    echo "pollbar5";
                }
                echo "\" style=\"width:";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PERCENT_REL", [], "any", false, false, false, 98);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_RESULT", [], "any", false, false, false, 98);
                echo "</div></dd>
\t\t\t\t\t<dd class=\"poll_option_percent";
                // line 99
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                if ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_RESULT", [], "any", false, false, false, 99) == 0)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_VOTES");
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PERCENT", [], "any", false, false, false, 99);
                }
                echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 101
                // line 102
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "
\t\t\t\t<dl class=\"poll_total_votes";
            // line 104
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\">";
            // line 106
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOTAL_VOTES");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            echo ($context["TOTAL_VOTES"] ?? null);
            echo "</span></dd>
\t\t\t\t</dl>

\t\t\t";
            // line 109
            if (($context["S_CAN_VOTE"] ?? null)) {
                // line 110
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_vote\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                // line 112
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT_VOTE");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 115
            echo "
\t\t\t";
            // line 116
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                // line 117
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_view_results\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><a href=\"";
                // line 119
                echo ($context["U_VIEW_RESULTS"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_RESULTS");
                echo "</a></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 122
            echo "\t\t\t</fieldset>
\t\t\t<div class=\"vote-submitted hidden\">";
            // line 123
            echo $this->extensions['phpbb\template\twig\extension']->lang("VOTE_SUBMITTED");
            echo "</div>
\t\t</div>

\t\t</div>
\t\t";
            // line 127
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t";
            // line 128
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t</div>

\t</form>
";
        }
        // line 133
        echo "
";
        // line 134
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_ads', '__main__'));
        $this->env->loadTemplate('@phpbb_ads/event/viewtopic_body_poll_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 135
        echo "
<div class=\"viewtopic_wrapper\">

";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "postrow", [], "any", false, false, false, 138));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 139
            echo "
\t\t\t";
            // line 140
            // line 141
            echo "\t\t\t";
            if (($context["STYLE_SETTINGS_CONFIG_SHOW_TOPIC_TITLES"] ?? null)) {
                // line 142
                echo "\t\t\t    ";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_FIRST_ROW", [], "any", false, false, false, 142)) {
                    // line 143
                    echo "\t\t\t        <div class=\"topic-header\">
        \t\t\t        <div class=\"topic-title\" ";
                    // line 144
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG", [], "any", false, false, false, 144)) {
                        echo "style=\"background-image: url(";
                        echo ($context["T_ICONS_PATH"] ?? null);
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG", [], "any", false, false, false, 144);
                        echo "); padding-left: 39px;\"";
                    }
                    echo ">
        \t\t\t            <h3 class=\"first\">
        \t\t\t\t            <a ";
                    // line 146
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_FIRST_UNREAD", [], "any", false, false, false, 146)) {
                        echo "class=\"first-unread\" ";
                    }
                    echo "href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 146);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_SUBJECT", [], "any", false, false, false, 146);
                    echo "</a>
        \t\t\t            </h3>
        \t\t\t        </div>
\t\t\t            ";
                    // line 149
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('robertheim_topictags', '__main__'));
                    $this->env->loadTemplate('@robertheim_topictags/event/viewtopic_body_postrow_post_before.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    // line 150
                    echo "\t\t\t        </div>
\t\t\t    ";
                }
                // line 152
                echo "\t\t\t";
            }
            // line 153
            echo "

\t
\t";
            // line 156
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_FIRST_UNREAD", [], "any", false, false, false, 156)) {
                // line 157
                echo "\t\t<a id=\"unread\" class=\"anchor\"";
                if (($context["S_UNREAD_VIEW"] ?? null)) {
                    echo " data-url=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 157);
                    echo "\"";
                }
                echo "></a>
\t";
            }
            // line 159
            echo "\t<div id=\"p";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 159);
            echo "\" class=\"post has-profile ";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ROW_COUNT", [], "any", false, false, false, 159) % 2 != 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_UNREAD_POST", [], "any", false, false, false, 159)) {
                echo " unreadpost";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_REPORTED", [], "any", false, false, false, 159)) {
                echo " reported";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_DELETED", [], "any", false, false, false, 159)) {
                echo " deleted";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_WARNINGS", [], "any", false, false, false, 159)) {
                echo " warned";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t<dl class=\"postprofile\" id=\"profile";
            // line 162
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 162);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 162)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t<dt class=\"";
            // line 163
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 163) || twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 163))) {
                echo "has-profile-rank";
            } else {
                echo "no-profile-rank";
            }
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 163)) {
                echo "has-avatar";
            } else {
                echo "no-avatar";
            }
            echo "\">
\t\t\t\t<div class=\"avatar-container\">
\t\t\t\t\t";
            // line 165
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('rmcgirr83_nationalflags', '__main__'));
            $this->env->loadTemplate('@rmcgirr83_nationalflags/event/viewtopic_body_avatar_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 166
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 166)) {
                // line 167
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 167)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 167);
                    echo "\" class=\"avatar cnt-";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "contact", [], "any", false, false, false, 167));
                    foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                        if ((($context["U_ACP"] ?? null) && (twig_get_attribute($this->env, $this->source, $context["contact"], "S_ROW_COUNT", [], "any", false, false, false, 167) > 6))) {
                            echo "a";
                        }
                        if (( !($context["U_ACP"] ?? null) && (twig_get_attribute($this->env, $this->source, $context["contact"], "S_ROW_COUNT", [], "any", false, false, false, 167) > 5))) {
                            echo "a";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 167);
                    echo "</a>";
                } else {
                    echo "<span class=\"avatar\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 167);
                    echo "</span>";
                }
                // line 168
                echo "\t\t\t\t\t";
            }
            // line 169
            echo "\t\t\t\t\t";
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('rmcgirr83_nationalflags', '__main__'));
            $this->env->loadTemplate('@rmcgirr83_nationalflags/event/viewtopic_body_avatar_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 170
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 171
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('rmcgirr83_nationalflags', '__main__'));
            $this->env->loadTemplate('@rmcgirr83_nationalflags/event/viewtopic_body_post_author_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 172
            echo "\t\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 172)) {
                echo "<strong>";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 172);
                echo "</strong>";
            } else {
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 172);
            }
            // line 173
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ONLINE", [], "any", false, false, false, 173) &&  !twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 173))) {
                echo " <i class=\"icon fa-circle online_indicator tooltip\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE");
                echo "\"></i>";
            }
            // line 174
            echo "\t\t\t\t";
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('rmcgirr83_nationalflags', '__main__'));
            $this->env->loadTemplate('@rmcgirr83_nationalflags/event/viewtopic_body_post_author_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 175
            echo "\t\t\t</dt>


\t\t\t";
            // line 178
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('rmcgirr83_nationalflags', '__main__'));
            $this->env->loadTemplate('@rmcgirr83_nationalflags/event/viewtopic_body_postrow_rank_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 179
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 179) || twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 179))) {
                echo "<dd class=\"profile-rank\">";
                if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 179) && twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 179))) {
                }
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 179);
                echo "</dd>";
            }
            // line 180
            echo "\t\t\t";
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('rmcgirr83_nationalflags', '__main__'));
            $this->env->loadTemplate('@rmcgirr83_nationalflags/event/viewtopic_body_postrow_rank_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 181
            echo "
\t\t";
            // line 182
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_POSTS", [], "any", false, false, false, 182) != "")) {
                echo "<dd class=\"profile-posts\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "U_SEARCH", [], "any", false, false, false, 182) !== "")) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_SEARCH", [], "any", false, false, false, 182);
                    echo "\">";
                }
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_POSTS", [], "any", false, false, false, 182);
                if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "U_SEARCH", [], "any", false, false, false, 182) !== "")) {
                    echo "</a>";
                }
                echo "</dd>";
            }
            // line 183
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_JOINED", [], "any", false, false, false, 183)) {
                echo "<dd class=\"profile-joined clutter\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_JOINED", [], "any", false, false, false, 183);
                echo "</dd>";
            }
            // line 184
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_WARNINGS", [], "any", false, false, false, 184)) {
                echo "<dd class=\"profile-warnings\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WARNINGS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_WARNINGS", [], "any", false, false, false, 184);
                echo "</dd>";
            }
            // line 185
            echo "
\t\t";
            // line 186
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_PROFILE_FIELD1", [], "any", false, false, false, 186)) {
                // line 187
                echo "\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dd><strong>";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "PROFILE_FIELD1_NAME", [], "any", false, false, false, 188);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "PROFILE_FIELD1_VALUE", [], "any", false, false, false, 188);
                echo "</dd>
\t\t";
            }
            // line 190
            echo "
\t\t";
            // line 191
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('david63_registrationage', '__main__'));
            $this->env->loadTemplate('@david63_registrationage/event/viewtopic_body_postrow_custom_fields_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('rmcgirr83_nationalflags', '__main__'));
            $this->env->loadTemplate('@rmcgirr83_nationalflags/event/viewtopic_body_postrow_custom_fields_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 192
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "custom_fields", [], "any", false, false, false, 192));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 193
                echo "\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 193)) {
                    // line 194
                    echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_IDENT", [], "any", false, false, false, 194);
                    echo "\"><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 194);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> ";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 194);
                    echo "</dd>
\t\t\t";
                }
                // line 196
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "\t\t";
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('gfksx_thanksforposts', '__main__'));
            $this->env->loadTemplate('@gfksx_thanksforposts/event/viewtopic_body_postrow_custom_fields_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('rmcgirr83_nationalflags', '__main__'));
            $this->env->loadTemplate('@rmcgirr83_nationalflags/event/viewtopic_body_postrow_custom_fields_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 198
            echo "
\t\t";
            // line 199
            // line 200
            echo "\t\t";
            if (($context["U_ACP"] ?? null)) {
                echo "<style type=\"text/css\">dl#profile";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 200);
                echo " dd.profile-contact {display: none;}</style>";
            }
            // line 201
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "THANKS", [], "any", false, false, false, 201) && twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 201))) {
                // line 202
                echo "            <style type=\"text/css\">@media (min-width:766.5px) {div#post_content";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 202);
                echo " .content {min-height: 3.1em;}}</style>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 203
$context["postrow"], "THANKS", [], "any", false, false, false, 203) || twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 203))) {
                // line 204
                echo "            <style type=\"text/css\">@media (min-width:766.5px) {div#post_content";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 204);
                echo " .content {min-height: 6.8em;}}</style>
        ";
            }
            // line 206
            echo "\t\t";
            if (( !($context["S_IS_BOT"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postrow"], "contact", [], "any", false, false, false, 206)))) {
                // line 207
                echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
                // line 208
                echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong>
\t\t\t\t<div class=\"dropdown-container dropdown-left\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger\" title=\"";
                // line 210
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "CONTACT_USER", [], "any", false, false, false, 210);
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-commenting-o fa-fw icon-lg\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 211
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "CONTACT_USER", [], "any", false, false, false, 211);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<div class=\"dropdown-contents contact-icons\">
\t\t\t\t\t\t\t";
                // line 216
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "contact", [], "any", false, false, false, 216));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 217
                    echo "\t\t\t\t\t\t\t    ";
                    if ( !($context["U_ACP"] ?? null)) {
                        // line 218
                        echo "    \t\t\t\t\t\t\t    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["contact"], "S_ROW_COUNT", [], "any", false, false, false, 218) == 1)) {
                            // line 219
                            echo "    \t\t\t\t\t\t\t            <style type=\"text/css\">@media (max-width:766.5px) {div#post_content";
                            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 219);
                            echo " > hr {top: -4px; margin-bottom: 2px;}}</style>
    \t\t\t\t\t\t\t        ";
                            // line 220
                            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "THANKS", [], "any", false, false, false, 220) && twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 220))) {
                                // line 221
                                echo "                                            <style type=\"text/css\">@media (min-width:766.5px) {div#post_content";
                                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 221);
                                echo " .content {min-height: 6em;}}</style>
                                        ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 222
$context["postrow"], "THANKS", [], "any", false, false, false, 222) || twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 222))) {
                                // line 223
                                echo "                                            <style type=\"text/css\">@media (min-width:766.5px) {div#post_content";
                                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 223);
                                echo " .content {min-height: 9.8em}}</style>
                                        ";
                            } elseif (( !twig_get_attribute($this->env, $this->source,                             // line 224
$context["postrow"], "THANKS", [], "any", false, false, false, 224) &&  !twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 224))) {
                                // line 225
                                echo "                                            <style type=\"text/css\">@media (min-width:766.5px) {div#post_content";
                                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 225);
                                echo " .content {min-height: 13.5em;}}</style>
                                        ";
                            }
                            // line 227
                            echo "    \t\t\t\t\t\t\t    ";
                        }
                        // line 228
                        echo "    \t\t\t\t\t\t\t    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["contact"], "S_ROW_COUNT", [], "any", false, false, false, 228) == 6)) {
                            // line 229
                            echo "    \t\t\t\t\t\t\t        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "THANKS", [], "any", false, false, false, 229) && twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 229))) {
                                // line 230
                                echo "                                            <style type=\"text/css\">@media (min-width:766.5px) {div#post_content";
                                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 230);
                                echo " .content {min-height: 8.8em}}</style>
                                        ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 231
$context["postrow"], "THANKS", [], "any", false, false, false, 231) || twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 231))) {
                                // line 232
                                echo "                                            <style type=\"text/css\">@media (min-width:766.5px) {div#post_content";
                                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 232);
                                echo " .content {min-height: 12.5em !important;}}</style>
                                        ";
                            } elseif (( !twig_get_attribute($this->env, $this->source,                             // line 233
$context["postrow"], "THANKS", [], "any", false, false, false, 233) &&  !twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 233))) {
                                // line 234
                                echo "                                            <style type=\"text/css\">@media (min-width:766.5px) {div#post_content";
                                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 234);
                                echo " .content {min-height: 16.3em;}}</style>
                                        ";
                            }
                            // line 236
                            echo "    \t\t\t\t\t\t\t    ";
                        }
                        // line 237
                        echo "    \t\t\t\t\t\t\t";
                    }
                    // line 238
                    echo "    \t\t\t\t\t\t\t";
                    if (($context["U_ACP"] ?? null)) {
                        // line 239
                        echo "    \t\t\t\t\t\t\t    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["contact"], "S_ROW_COUNT", [], "any", false, false, false, 239) == 1)) {
                            // line 240
                            echo "    \t\t\t\t\t\t\t            <style type=\"text/css\">@media (max-width:766.5px) {div#post_content";
                            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 240);
                            echo " > hr {top: -4px; margin-bottom: 2px;}}</style>
    \t\t\t\t\t\t\t            <style type=\"text/css\">dl#profile";
                            // line 241
                            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 241);
                            echo " dd.profile-contact {display: block;}</style>
    \t\t\t\t\t\t\t        ";
                            // line 242
                            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "THANKS", [], "any", false, false, false, 242) && twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 242))) {
                                // line 243
                                echo "                                            <style type=\"text/css\">@media (min-width:766.5px) {div#post_content";
                                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 243);
                                echo " .content {min-height: 6em;}}</style>
                                        ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 244
$context["postrow"], "THANKS", [], "any", false, false, false, 244) || twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 244))) {
                                // line 245
                                echo "                                            <style type=\"text/css\">@media (min-width:766.5px) {div#post_content";
                                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 245);
                                echo " .content {min-height: 9.8em}}</style>
                                        ";
                            } elseif (( !twig_get_attribute($this->env, $this->source,                             // line 246
$context["postrow"], "THANKS", [], "any", false, false, false, 246) &&  !twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 246))) {
                                // line 247
                                echo "                                            <style type=\"text/css\">@media (min-width:766.5px) {div#post_content";
                                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 247);
                                echo " .content {min-height: 13.5em;}}</style>
                                        ";
                            }
                            // line 249
                            echo "    \t\t\t\t\t\t\t    ";
                        }
                        // line 250
                        echo "    \t\t\t\t\t\t\t    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["contact"], "S_ROW_COUNT", [], "any", false, false, false, 250) == 5)) {
                            // line 251
                            echo "    \t\t\t\t\t\t\t        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "THANKS", [], "any", false, false, false, 251) && twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 251))) {
                                // line 252
                                echo "                                            <style type=\"text/css\">@media (min-width:766.5px) {div#post_content";
                                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 252);
                                echo " .content {min-height: 8.8em}}</style>
                                        ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 253
$context["postrow"], "THANKS", [], "any", false, false, false, 253) || twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 253))) {
                                // line 254
                                echo "                                            <style type=\"text/css\">@media (min-width:766.5px) {div#post_content";
                                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 254);
                                echo " .content {min-height: 12.5em !important;}}</style>
                                        ";
                            } elseif (( !twig_get_attribute($this->env, $this->source,                             // line 255
$context["postrow"], "THANKS", [], "any", false, false, false, 255) &&  !twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 255))) {
                                // line 256
                                echo "                                            <style type=\"text/css\">@media (min-width:766.5px) {div#post_content";
                                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 256);
                                echo " .content {min-height: 16.3em;}}</style>
                                        ";
                            }
                            // line 258
                            echo "    \t\t\t\t\t\t\t    ";
                        }
                        // line 259
                        echo "    \t\t\t\t\t\t\t";
                    }
                    // line 260
                    echo "    \t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    // line 261
                    $context["REMAINDER"] = (twig_get_attribute($this->env, $this->source, $context["contact"], "S_ROW_COUNT", [], "any", false, false, false, 261) % 5);
                    // line 262
                    echo "\t\t\t\t\t\t\t\t";
                    $value = ((($context["REMAINDER"] ?? null) == 4) || (twig_get_attribute($this->env, $this->source, $context["contact"], "S_LAST_ROW", [], "any", false, false, false, 262) && (twig_get_attribute($this->env, $this->source, $context["contact"], "S_NUM_ROWS", [], "any", false, false, false, 262) < 5)));
                    $context['definition']->set('S_LAST_CELL', $value);
                    // line 263
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["REMAINDER"] ?? null) == 0)) {
                        // line 264
                        echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 266
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["contact"], "U_CONTACT", [], "any", false, false, false, 266)) {
                        echo twig_get_attribute($this->env, $this->source, $context["contact"], "U_CONTACT", [], "any", false, false, false, 266);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 266);
                    }
                    echo "\" class=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "NAME", [], "any", false, false, false, 266);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "NAME", [], "any", false, false, false, 266);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "S_LAST_CELL", [], "any", false, false, false, 266)) {
                        echo " class=\"last-cell\"";
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["contact"], "ID", [], "any", false, false, false, 266) == "jabber")) {
                        echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t";
                    // line 267
                    // line 268
                    echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    // line 269
                    if (((($context["REMAINDER"] ?? null) == 4) || twig_get_attribute($this->env, $this->source, $context["contact"], "S_LAST_ROW", [], "any", false, false, false, 269))) {
                        // line 270
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 272
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 273
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dd>
\t\t";
            }
            // line 278
            echo "\t\t";
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('rmcgirr83_nationalflags', '__main__'));
            $this->env->loadTemplate('@rmcgirr83_nationalflags/event/viewtopic_body_contact_fields_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 279
            echo "
\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t";
            // line 283
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 283)) {
                // line 284
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_DELETED", [], "any", false, false, false, 284)) {
                    // line 285
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 285);
                    echo "\">
\t\t\t\t\t\t";
                    // line 286
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "L_POST_DELETED_MESSAGE", [], "any", false, false, false, 286);
                    echo "<br />
\t\t\t\t\t\t";
                    // line 287
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "L_POST_DISPLAY", [], "any", false, false, false, 287);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 289
$context["postrow"], "S_IGNORE_POST", [], "any", false, false, false, 289)) {
                    // line 290
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 290);
                    echo "\">
\t\t\t\t\t\t";
                    // line 291
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "L_IGNORE_POST", [], "any", false, false, false, 291);
                    echo "<br />
\t\t\t\t\t\t";
                    // line 292
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "L_POST_DISPLAY", [], "any", false, false, false, 292);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 295
                echo "\t\t\t";
            }
            // line 296
            echo "\t\t\t<div id=\"post_content";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 296);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 296)) {
                echo " style=\"display: none;\"";
            }
            echo ">

\t\t";
            // line 298
            $value = (((((twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 298) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 298)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 298)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 298)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 298)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 298));
            $context['definition']->set('SHOW_POST_BUTTONS', $value);
            // line 299
            echo "\t\t";
            // line 300
            echo "\t\t";
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 301
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SHOW_POST_BUTTONS", [], "any", false, false, false, 301)) {
                    // line 302
                    echo "\t\t\t\t<ul class=\"post-buttons\">
\t\t\t\t\t";
                    // line 303
                    // line 304
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 304)) {
                        // line 305
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 306
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 306);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 307
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_EDIT");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 311
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 311)) {
                        // line 312
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 313
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 313);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-times fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 314
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_DELETE");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 318
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 318)) {
                        // line 319
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 320
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 320);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 321
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_REPORT");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 325
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 325)) {
                        // line 326
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 327
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 327);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("WARN_USER");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 328
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_WARN");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 332
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 332)) {
                        // line 333
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 334
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 334);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-info fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 335
                        echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 339
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 339)) {
                        // line 340
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 341
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 341);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REPLY_WITH_QUOTE");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 342
                        echo $this->extensions['phpbb\template\twig\extension']->lang("QUOTE");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 346
                    echo "\t\t\t\t\t";
                    // line 347
                    echo "\t\t\t\t</ul>
\t\t\t";
                }
                // line 349
                echo "\t\t";
            }
            // line 350
            echo "\t\t";
            // line 351
            echo "
\t\t\t";
            // line 352
            // line 353
            echo "\t\t\t<hr><p class=\"author\">
\t\t\t\t<a class=\"unread\" href=\"";
            // line 354
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 354);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MINI_POST", [], "any", false, false, false, 354);
            echo "\">
\t\t\t\t    ";
            // line 355
            if (($context["S_IS_BOT"] ?? null)) {
                // line 356
                echo "    \t\t\t\t\t<span><i class=\"icon post-icon fa-file fa-fw ";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_UNREAD_POST", [], "any", false, false, false, 356)) {
                    echo "icon-red";
                } else {
                    echo "icon-lightgray";
                }
                echo " icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MINI_POST", [], "any", false, false, false, 356);
                echo "</span></span>
    \t\t\t\t";
            } else {
                // line 358
                echo "    \t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_UNREAD_POST", [], "any", false, false, false, 358)) {
                    // line 359
                    echo "                                <i class=\"icon post-icon fa-circle fa-fw icon-red icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MINI_POST", [], "any", false, false, false, 359);
                    echo "</span>
                        ";
                }
                // line 361
                echo "    \t\t\t\t";
            }
            // line 362
            echo "\t\t\t\t    <i class=\"icon fa-clock-o\"></i> <time datetime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_DATE_RFC3339", [], "any", false, false, false, 362);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_DATE", [], "any", false, false, false, 362);
            echo "</time></a>
\t\t\t\t";
            // line 363
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG", [], "any", false, false, false, 363)) {
                // line 364
                echo "\t\t\t\t    <img class=\"topicimg mob\" src=\"";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG", [], "any", false, false, false, 364);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_WIDTH", [], "any", false, false, false, 364);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_HEIGHT", [], "any", false, false, false, 364);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_ALT", [], "any", false, false, false, 364);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_ALT", [], "any", false, false, false, 364);
                echo "\">
\t\t\t\t";
            }
            // line 366
            echo "\t\t\t</p>
\t\t\t";
            // line 367
            // line 368
            echo "
\t\t\t<div class=\"content\"><div class=\"content-msg\">";
            // line 369
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MESSAGE", [], "any", false, false, false, 369);
            echo "</div></div>
            
            ";
            // line 371
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_UNAPPROVED", [], "any", false, false, false, 371)) {
                // line 372
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_CAN_APPROVE", [], "any", false, false, false, 372)) {
                    // line 373
                    echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_APPROVE_ACTION", [], "any", false, false, false, 373);
                    echo "\">
\t\t\t\t<p class=\"post-info unapproved\">
\t\t\t\t\t<input class=\"button2 button_disapprove\" type=\"submit\" value=\"❌\" name=\"action[disapprove]\" />
\t\t\t\t\t<input class=\"button1 button_approve\" type=\"submit\" value=\"✔️\" name=\"action[approve]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                    // line 377
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 377);
                    echo "\" />
\t\t\t\t\t";
                    // line 378
                    echo ($context["S_FORM_TOKEN"] ?? null);
                    echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
                } else {
                    // line 382
                    echo "\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<span><i class=\"icon fa-exclamation icon-red fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t<strong>";
                    // line 384
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_UNAPPROVED_EXPLAIN");
                    echo "</strong>
\t\t\t\t</p>
\t\t\t";
                }
                // line 386
                echo "\t\t\t
\t\t\t";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 387
$context["postrow"], "S_POST_DELETED", [], "any", false, false, false, 387)) {
                // line 388
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_APPROVE_ACTION", [], "any", false, false, false, 388);
                echo "\">
\t\t\t\t<p class=\"post-info deleted\">
\t\t\t\t\t";
                // line 390
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_DELETE_PERMANENT", [], "any", false, false, false, 390)) {
                    // line 391
                    echo "\t\t\t\t\t\t<input class=\"button2 button_disapprove\" type=\"submit\" value=\"🗑️\" name=\"action[delete]\" />
\t\t\t\t\t";
                }
                // line 393
                echo "\t\t\t\t\t<input class=\"button1 button_approve\" type=\"submit\" value=\"♻️\" name=\"action[restore]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 394
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 394);
                echo "\" />
\t\t\t\t\t";
                // line 395
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            }
            // line 399
            echo "
\t\t\t";
            // line 400
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_REPORTED", [], "any", false, false, false, 400)) {
                // line 401
                echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t<a href=\"";
                // line 402
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MCP_REPORT", [], "any", false, false, false, 402);
                echo "\"><i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t</p>
\t\t\t";
            }
            // line 405
            echo "            ";
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('gfksx_thanksforposts', '__main__'));
            $this->env->loadTemplate('@gfksx_thanksforposts/event/viewtopic_body_postrow_content_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 406
            echo "
\t\t\t";
            // line 407
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_HAS_ATTACHMENTS", [], "any", false, false, false, 407)) {
                // line 408
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>
\t\t\t\t\t\t";
                // line 410
                echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
                echo "
\t\t\t\t\t</dt>
\t\t\t\t\t";
                // line 412
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "attachment", [], "any", false, false, false, 412));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 413
                    echo "\t\t\t\t\t\t<dd>";
                    echo twig_get_attribute($this->env, $this->source, $context["attachment"], "DISPLAY_ATTACHMENT", [], "any", false, false, false, 413);
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 415
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 417
            echo "
\t\t    ";
            // line 418
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('gfksx_thanksforposts', '__main__'));
            $this->env->loadTemplate('@gfksx_thanksforposts/event/viewtopic_body_postrow_post_notices_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 419
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_DISPLAY_NOTICE", [], "any", false, false, false, 419)) {
                echo "<div class=\"rules\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 420
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETED_MESSAGE", [], "any", false, false, false, 420) || twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETE_REASON", [], "any", false, false, false, 420))) {
                // line 421
                echo "\t\t\t\t<div class=\"notice post_deleted_msg\">
\t\t\t\t\t";
                // line 422
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETED_MESSAGE", [], "any", false, false, false, 422);
                echo "
\t\t\t\t\t";
                // line 423
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETE_REASON", [], "any", false, false, false, 423)) {
                    echo "<br /><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REASON");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> <em>";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETE_REASON", [], "any", false, false, false, 423);
                    echo "</em>";
                }
                // line 424
                echo "\t\t\t\t</div>
\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 425
$context["postrow"], "EDITED_MESSAGE", [], "any", false, false, false, 425) || twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 425))) {
                // line 426
                echo "\t\t\t\t<div class=\"notice\">
\t\t\t\t\t";
                // line 427
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "EDITED_MESSAGE", [], "any", false, false, false, 427);
                echo "
\t\t\t\t\t";
                // line 428
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 428)) {
                    echo "<br /><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REASON");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> <em>";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 428);
                    echo "</em>";
                }
                // line 429
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 431
            echo "
\t\t\t";
            // line 432
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "BUMPED_MESSAGE", [], "any", false, false, false, 432)) {
                echo "<div class=\"notice\"><br /><br />";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "BUMPED_MESSAGE", [], "any", false, false, false, 432);
                echo "</div>";
            }
            // line 433
            echo "\t\t\t";
            // line 434
            echo "
\t\t\t";
            // line 435
            // line 436
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "SIGNATURE", [], "any", false, false, false, 436)) {
                echo "<div id=\"sig";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 436);
                echo "\" class=\"signature\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "SIGNATURE", [], "any", false, false, false, 436);
                echo "</div>";
            }
            // line 437
            echo "\t\t\t";
            // line 438
            echo "
\t\t\t";
            // line 439
            // line 440
            echo "\t\t\t</div>


\t\t</div>

\t\t";
            // line 445
            // line 446
            echo "\t\t\t";
            // line 447
            echo "\t\t\t";
            // line 448
            echo "\t\t";
            // line 449
            echo "\t\t</div>


\t\t
\t</div>

\t";
            // line 455
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('phpbb_ads', '__main__'));
            $this->env->loadTemplate('@phpbb_ads/event/viewtopic_body_postrow_post_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 456
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 458
        echo "
</div>

";
        // line 461
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_whovisitedthistopic', '__main__'));
        $this->env->loadTemplate('@dmzx_whovisitedthistopic/event/viewtopic_body_qre_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 462
        echo "
";
        // line 463
        if (($context["S_QUICK_REPLY"] ?? null)) {
            // line 464
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 464)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 466
        echo "
";
        // line 467
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_ads', '__main__'));
        $this->env->loadTemplate('@phpbb_ads/event/viewtopic_body_topic_actions_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 468
        echo "\t<div class=\"action-bar bar-bottom\">
\t";
        // line 469
        // line 470
        echo "
\t";
        // line 471
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 472
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button specialbutton\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_LOCKED");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 473
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 474
                echo "\t\t\t\t<span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_TOPIC_LOCKED");
                echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            } else {
                // line 476
                echo "\t\t\t\t<span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_POST_REPLY");
                echo "</span> <i class=\"icon fa-reply fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            }
            // line 478
            echo "\t\t</a>
\t";
        }
        // line 480
        echo "\t";
        // line 481
        echo "
\t";
        // line 482
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 482)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 483
        echo "
\t";
        // line 484
        if ((((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 484))) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 485
            echo "\t\t<form method=\"post\" action=\"";
            echo ($context["S_TOPIC_ACTION"] ?? null);
            echo "\">
\t\t";
            // line 486
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "viewtopic_body.html", 486)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 487
            echo "\t\t</form>
\t";
        }
        // line 489
        echo "
\t";
        // line 490
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "quickmod", [], "any", false, false, false, 490))) {
            // line 491
            echo "\t<div class=\"quickmod dropdown-container dropdown-container-left dropdown-up dropdown-";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo " dropdown-button-control\" id=\"quickmod\">
\t\t<span title=\"";
            // line 492
            echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_MOD");
            echo "\" class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 493
            echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_MOD");
            echo "</span>
\t\t\t<span class=\"caret\"><i class=\"icon fa-sort-down fa-fw\" aria-hidden=\"true\"></i></span>
\t\t</span>
\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 499
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "quickmod", [], "any", false, false, false, 499));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 500
                echo "\t\t\t\t\t";
                $value = twig_in_filter(twig_get_attribute($this->env, $this->source, $context["quickmod"], "VALUE", [], "any", false, false, false, 500), [0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"]);
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 501
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["quickmod"], "LINK", [], "any", false, false, false, 501);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "QUICKMOD_AJAX", [], "any", false, false, false, 501)) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["quickmod"], "TITLE", [], "any", false, false, false, 501);
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 503
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 507
        echo "
\t";
        // line 508
        // line 509
        echo "
\t";
        // line 510
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 510)) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 511
            echo "\t\t<div class=\"pagination\">
\t\t\t<div class=\"pagination-info\">";
            // line 512
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "</div>
\t\t\t";
            // line 513
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 513))) {
                // line 514
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 514)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 515
                echo "\t\t\t";
            } else {
                // line 516
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 518
            echo "\t\t</div>
\t";
        }
        // line 520
        echo "</div>

";
        // line 522
        // line 523
        echo "
";
        // line 524
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewtopic_body.html", 524)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 525
        echo "
";
        // line 526
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_similartopics', '__main__'));
        $this->env->loadTemplate('@vse_similartopics/event/viewtopic_body_online_list_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 527
        echo "
";
        // line 528
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
            // line 529
            echo "<div class=\"forumbg alt_block\" id=\"clutter_collapse\">
    <div class=\"inner\">
        <ul class=\"topiclist\">
            <li class=\"header\">
                <dl class=\"row-item\">
                    <dt><div class=\"list-inner\">";
            // line 534
            echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
            echo "</div></dt>
                </dl>
            </li>
        </ul>
        ";
            // line 538
            if (($context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"] ?? null)) {
                // line 539
                echo "            <div class=\"collapse-trigger open\">
                <span class=\"icon fa-minus tooltip-left\" title=\"Collapse\"></span>
                <span class=\"icon fa-plus tooltip-left\" title=\"Expand\"></span>
            </div>
        ";
            }
            // line 544
            echo "        <ul class=\"topiclist forums\">
         \t<li class=\"row\">
                <div class=\"stat-block online-list\">
                    <h3><a href=\"";
            // line 547
            echo ($context["U_VIEWONLINE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
            echo "</a></h3>
                    <p>";
            // line 548
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
                </div>
            </li>
        </ul>
    </div>
</div>
";
        }
        // line 555
        echo "
</div>

";
        // line 558
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 558)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1915 => 558,  1910 => 555,  1900 => 548,  1894 => 547,  1889 => 544,  1882 => 539,  1880 => 538,  1873 => 534,  1866 => 529,  1864 => 528,  1861 => 527,  1856 => 526,  1853 => 525,  1841 => 524,  1838 => 523,  1837 => 522,  1833 => 520,  1829 => 518,  1823 => 516,  1820 => 515,  1807 => 514,  1805 => 513,  1801 => 512,  1798 => 511,  1796 => 510,  1793 => 509,  1792 => 508,  1789 => 507,  1783 => 503,  1768 => 501,  1764 => 500,  1760 => 499,  1751 => 493,  1747 => 492,  1742 => 491,  1740 => 490,  1737 => 489,  1733 => 487,  1721 => 486,  1716 => 485,  1714 => 484,  1711 => 483,  1699 => 482,  1696 => 481,  1694 => 480,  1690 => 478,  1684 => 476,  1678 => 474,  1676 => 473,  1665 => 472,  1663 => 471,  1660 => 470,  1659 => 469,  1656 => 468,  1651 => 467,  1648 => 466,  1635 => 464,  1633 => 463,  1630 => 462,  1625 => 461,  1620 => 458,  1613 => 456,  1608 => 455,  1600 => 449,  1598 => 448,  1596 => 447,  1594 => 446,  1593 => 445,  1586 => 440,  1585 => 439,  1582 => 438,  1580 => 437,  1571 => 436,  1570 => 435,  1567 => 434,  1565 => 433,  1559 => 432,  1556 => 431,  1552 => 429,  1543 => 428,  1539 => 427,  1536 => 426,  1534 => 425,  1531 => 424,  1522 => 423,  1518 => 422,  1515 => 421,  1512 => 420,  1505 => 419,  1500 => 418,  1497 => 417,  1493 => 415,  1484 => 413,  1480 => 412,  1475 => 410,  1471 => 408,  1469 => 407,  1466 => 406,  1460 => 405,  1452 => 402,  1449 => 401,  1447 => 400,  1444 => 399,  1437 => 395,  1433 => 394,  1430 => 393,  1426 => 391,  1424 => 390,  1418 => 388,  1416 => 387,  1413 => 386,  1407 => 384,  1403 => 382,  1396 => 378,  1392 => 377,  1384 => 373,  1381 => 372,  1379 => 371,  1374 => 369,  1371 => 368,  1370 => 367,  1367 => 366,  1352 => 364,  1350 => 363,  1343 => 362,  1340 => 361,  1334 => 359,  1331 => 358,  1319 => 356,  1317 => 355,  1311 => 354,  1308 => 353,  1307 => 352,  1304 => 351,  1302 => 350,  1299 => 349,  1295 => 347,  1293 => 346,  1286 => 342,  1280 => 341,  1277 => 340,  1274 => 339,  1267 => 335,  1261 => 334,  1258 => 333,  1255 => 332,  1248 => 328,  1242 => 327,  1239 => 326,  1236 => 325,  1229 => 321,  1223 => 320,  1220 => 319,  1217 => 318,  1210 => 314,  1204 => 313,  1201 => 312,  1198 => 311,  1191 => 307,  1185 => 306,  1182 => 305,  1179 => 304,  1178 => 303,  1175 => 302,  1172 => 301,  1169 => 300,  1167 => 299,  1164 => 298,  1154 => 296,  1151 => 295,  1145 => 292,  1141 => 291,  1136 => 290,  1134 => 289,  1129 => 287,  1125 => 286,  1120 => 285,  1117 => 284,  1115 => 283,  1109 => 279,  1103 => 278,  1096 => 273,  1090 => 272,  1086 => 270,  1084 => 269,  1081 => 268,  1080 => 267,  1060 => 266,  1056 => 264,  1053 => 263,  1049 => 262,  1047 => 261,  1044 => 260,  1041 => 259,  1038 => 258,  1032 => 256,  1030 => 255,  1025 => 254,  1023 => 253,  1018 => 252,  1015 => 251,  1012 => 250,  1009 => 249,  1003 => 247,  1001 => 246,  996 => 245,  994 => 244,  989 => 243,  987 => 242,  983 => 241,  978 => 240,  975 => 239,  972 => 238,  969 => 237,  966 => 236,  960 => 234,  958 => 233,  953 => 232,  951 => 231,  946 => 230,  943 => 229,  940 => 228,  937 => 227,  931 => 225,  929 => 224,  924 => 223,  922 => 222,  917 => 221,  915 => 220,  910 => 219,  907 => 218,  904 => 217,  900 => 216,  892 => 211,  888 => 210,  882 => 208,  879 => 207,  876 => 206,  870 => 204,  868 => 203,  863 => 202,  860 => 201,  853 => 200,  852 => 199,  849 => 198,  839 => 197,  833 => 196,  822 => 194,  819 => 193,  814 => 192,  805 => 191,  802 => 190,  794 => 188,  791 => 187,  789 => 186,  786 => 185,  776 => 184,  766 => 183,  749 => 182,  746 => 181,  740 => 180,  731 => 179,  726 => 178,  721 => 175,  715 => 174,  708 => 173,  699 => 172,  694 => 171,  691 => 170,  685 => 169,  682 => 168,  655 => 167,  652 => 166,  647 => 165,  632 => 163,  624 => 162,  599 => 159,  589 => 157,  587 => 156,  582 => 153,  579 => 152,  575 => 150,  570 => 149,  558 => 146,  548 => 144,  545 => 143,  542 => 142,  539 => 141,  538 => 140,  535 => 139,  531 => 138,  526 => 135,  521 => 134,  518 => 133,  510 => 128,  506 => 127,  499 => 123,  496 => 122,  488 => 119,  484 => 117,  482 => 116,  479 => 115,  473 => 112,  469 => 110,  467 => 109,  458 => 106,  451 => 104,  448 => 103,  442 => 102,  441 => 101,  428 => 99,  405 => 98,  379 => 97,  367 => 96,  347 => 95,  345 => 94,  341 => 93,  327 => 90,  323 => 89,  313 => 83,  311 => 82,  308 => 81,  307 => 80,  303 => 78,  301 => 77,  297 => 75,  291 => 73,  288 => 72,  275 => 71,  273 => 70,  262 => 69,  259 => 68,  257 => 67,  254 => 66,  246 => 61,  241 => 59,  235 => 58,  230 => 56,  226 => 55,  222 => 54,  217 => 52,  214 => 51,  212 => 50,  209 => 49,  203 => 48,  190 => 47,  189 => 46,  186 => 45,  182 => 43,  176 => 41,  170 => 39,  168 => 38,  157 => 37,  155 => 36,  152 => 35,  151 => 34,  147 => 32,  141 => 28,  136 => 26,  131 => 25,  123 => 23,  121 => 22,  112 => 19,  110 => 18,  107 => 17,  94 => 14,  91 => 13,  89 => 12,  86 => 11,  80 => 10,  77 => 9,  76 => 8,  68 => 7,  56 => 5,  53 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "viewtopic_body.html", "");
    }
}
