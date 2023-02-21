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

/* sidebar_right.html */
class __TwigTemplate_a0c1a2880041d4eaec27e0b9463f6c68bf95c5b6880107ff6fc580c06dffb4a2 extends \Twig\Template
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
        echo "<div id=\"sidebar_right\"";
        if (($context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"] ?? null)) {
            echo " class=\"sidebar_right_collapse\"";
        }
        echo ">

";
        // line 3
        if ((($context["STYLE_SETTINGS_CONFIG_SEARCH_WIDGET"] ?? null) && ($context["S_DISPLAY_SEARCH"] ?? null))) {
            // line 4
            echo "
    <div class=\"search-box sidebar_widget\" role=\"search\">
        <form method=\"get\" id=\"forum-search\" action=\"";
            // line 6
            echo ($context["U_SEARCH"] ?? null);
            echo "\">
        <fieldset>
            <input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 8
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_KEYWORDS");
            echo "\" class=\"inputbox search sidebar_search\" value=\"";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "\" placeholder=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_MINI");
            echo "\" />
            <button class=\"button button-search\" type=\"submit\" title=\"";
            // line 9
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "\">
                <i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 10
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
            </button>
            <a href=\"";
            // line 12
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"button button-search-end\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "\">
                <i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 13
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "</span>
            </a>
            ";
            // line 15
            echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
            echo "
        </fieldset>
        </form>
    </div>
";
        }
        // line 20
        echo "
";
        // line 21
        if (($context["STYLE_SETTINGS_CONFIG_PROFILE_WIDGET"] ?? null)) {
            // line 22
            echo "\t<div class=\"sidebar_widget profile_widget fancy_panel\">
    \t<div class=\"fancy_panel_padding\">
            <h3>";
            // line 24
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
            } else {
                echo "<a href=\"";
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
                echo "</a>";
                if (($context["S_REGISTER_ENABLED"] ?? null)) {
                    echo "&nbsp; &bull; &nbsp;<a href=\"";
                    echo ($context["U_REGISTER"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                    echo "</a>";
                }
            }
            echo "</h3>
            <div class=\"collapse-trigger open\">
                <span class=\"icon fa-minus tooltip-left\" title=\"Collapse\"></span>
                <span class=\"icon fa-plus tooltip-left\" title=\"Expand\"></span>
            </div>
            <div class=\"sidebar_content\">
            ";
            // line 30
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 31
                echo "                <div class=\"profile_widget_avatar\">
                    ";
                // line 32
                if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                    // line 33
                    echo "                        <a href=\"";
                    echo ($context["U_USER_PROFILE"] ?? null);
                    echo "\">";
                    echo ($context["CURRENT_USER_AVATAR"] ?? null);
                    echo "</a>
                    ";
                } else {
                    // line 35
                    echo "                        <a href=\"ucp.php?i=ucp_profile&amp;mode=avatar\" class=\"no_avatar\"><i class=\"icon fa-pencil-square-o\"></i></a>
                    ";
                }
                // line 37
                echo "                </div>
            ";
            }
            // line 39
            echo "

            ";
            // line 41
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 42
                echo "                <div class=\"profile_widget_info\">

                        <p>Hi, ";
                // line 44
                echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
                echo "!</p>
                        <ul>
                            <li>
                                <a href=\"";
                // line 47
                echo ($context["U_PROFILE"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
                echo "\">
                                    <i class=\"icon fa-sliders fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 48
                echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
                echo "</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
                // line 52
                echo ($context["U_USER_PROFILE"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
                echo "\">
                                    <i class=\"icon fa-user fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 53
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
                echo "</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
                // line 57
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
                echo "\">
                                    <i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 58
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
                echo "</span>
                                </a>
                            </li>
                        </ul>
                </div>
            ";
            }
            // line 64
            echo "
            ";
            // line 65
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 66
                echo "                <div class=\"profile_widget_list\">
                    <ul>
                        ";
                // line 68
                if (($context["S_DISPLAY_SEARCH"] ?? null)) {
                    // line 69
                    echo "                            <li>
                                <a href=\"";
                    // line 70
                    echo ($context["U_SEARCH_SELF"] ?? null);
                    echo "\">
                                    <i class=\"icon fa-fw fa-pencil-square-o\" aria-hidden=\"true\"></i><span>";
                    // line 71
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SELF");
                    echo "</span>
                                </a>
                            </li>
                        ";
                }
                // line 75
                echo "                        ";
                if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                    // line 76
                    echo "                            <li>
                                <a href=\"";
                    // line 77
                    echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                    echo "\">
                                    <i class=\"icon fa-bell fa-fw\" aria-hidden=\"true\"></i><span>";
                    // line 78
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
                    echo " ";
                    if (($context["NOTIFICATIONS_COUNT"] ?? null)) {
                        echo "<strong class=\"badge\">";
                        echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                        echo "</strong>";
                    }
                    echo "</span>
                                </a>
                            </li>
                        ";
                }
                // line 82
                echo "                        ";
                if (($context["S_DISPLAY_PM"] ?? null)) {
                    // line 83
                    echo "                            <li>
                                <a href=\"";
                    // line 84
                    echo ($context["U_PRIVATEMSGS"] ?? null);
                    echo "\">
                                    <i class=\"icon fa-inbox fa-fw\" aria-hidden=\"true\"></i><span>";
                    // line 85
                    echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVATE_MESSAGES");
                    echo " ";
                    if (($context["PRIVATE_MESSAGE_COUNT"] ?? null)) {
                        echo "<strong class=\"badge\">";
                        echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                        echo "</strong>";
                    }
                    echo "</span>
                                </a>
                            </li>
                        ";
                }
                // line 89
                echo "                        <li>
                            <a href=\"ucp.php?i=ucp_main&amp;mode=bookmarks\">
                                <i class=\"icon fa-bookmark fa-fw\" aria-hidden=\"true\"></i>";
                // line 91
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_BOOKMARKS");
                echo "
                            </a>
                        </li>
                    </ul>
                </div>
            ";
            } else {
                // line 97
                echo "                <div class=\"login_form\">
                    <form method=\"post\" action=\"";
                // line 98
                echo ($context["S_LOGIN_ACTION"] ?? null);
                echo "\">
                        <fieldset>
                            <h2 class=\"sidebar-login-title\">";
                // line 100
                echo $this->extensions['phpbb\template\twig\extension']->lang("LLOGIN");
                echo "&nbsp;<img src=\"https://hornygirls.fun/ext/planetstyles/flightdeck/store/150c.png\" width=\"20\" height=\"20\" alt=\"\"></h2>
                            <label for=\"username\"><input type=\"text\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
                // line 101
                echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
                echo "\" value placeholder=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
                echo "\" /></label>
                            <label for=\"password\"><input type=\"password\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
                // line 102
                echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
                echo "\" value placeholder=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
                echo "\" autocomplete=\"off\" /></label>
                            ";
                // line 103
                if (($context["U_SEND_PASSWORD"] ?? null)) {
                    // line 104
                    echo "                    \t        <div class=\"login_form_forgot_link\">
                        \t        <a href=\"";
                    // line 105
                    echo ($context["U_SEND_PASSWORD"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORGOT_PASS");
                    echo "</a>
                                </div>
                            ";
                }
                // line 108
                echo "                            ";
                if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                    // line 109
                    echo "                                <div hidden><br /><input type=\"checkbox\" name=\"autologin\" id=\"autologin2\" checked /><label for=\"autologin2\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                    echo "</label><br /></div>
                            ";
                }
                // line 111
                echo "                            <input type=\"submit\" name=\"login\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
                echo "\" class=\"button2 specialbutton\" />
                            ";
                // line 112
                echo ($context["S_LOGIN_REDIRECT"] ?? null);
                echo "
                            ";
                // line 113
                echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
                echo "
                        </fieldset>
                    </form>
                    
                </div>
            ";
            }
            // line 119
            echo "            </div>
        </div>
</div>
";
        }
        // line 123
        if (($context["STYLE_SETTINGS_HTML_2"] ?? null)) {
            echo ($context["STYLE_SETTINGS_HTML_2"] ?? null);
        }
        // line 124
        echo "
";
        // line 125
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_topstats', '__main__'));
        $this->env->loadTemplate('@dmzx_topstats/event/right_sidebar_content_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 126
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "sidebar_right.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 126,  366 => 125,  363 => 124,  359 => 123,  353 => 119,  344 => 113,  340 => 112,  335 => 111,  329 => 109,  326 => 108,  318 => 105,  315 => 104,  313 => 103,  307 => 102,  301 => 101,  297 => 100,  292 => 98,  289 => 97,  280 => 91,  276 => 89,  263 => 85,  259 => 84,  256 => 83,  253 => 82,  240 => 78,  236 => 77,  233 => 76,  230 => 75,  223 => 71,  219 => 70,  216 => 69,  214 => 68,  210 => 66,  208 => 65,  205 => 64,  196 => 58,  190 => 57,  183 => 53,  177 => 52,  170 => 48,  164 => 47,  158 => 44,  154 => 42,  152 => 41,  148 => 39,  144 => 37,  140 => 35,  132 => 33,  130 => 32,  127 => 31,  125 => 30,  101 => 24,  97 => 22,  95 => 21,  92 => 20,  84 => 15,  79 => 13,  73 => 12,  68 => 10,  64 => 9,  56 => 8,  51 => 6,  47 => 4,  45 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sidebar_right.html", "");
    }
}
