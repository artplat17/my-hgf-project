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

/* index_body.html */
class __TwigTemplate_6b4b241cf67b5fbae4422a3d38d2e388527b0b9e09d9d33ca03d8d6ce35bcb7e extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('lukewcs_whowashere', '__main__'));
        $this->env->loadTemplate('@lukewcs_whowashere/event/index_body_markforums_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 4
        echo "
";
        // line 5
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_topstats', '__main__'));
        $this->env->loadTemplate('@dmzx_topstats/event/index_body_markforums_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 6
        echo "
";
        // line 7
        if (($context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"] ?? null)) {
            echo "<div id=\"forumlist_collapse\">";
        }
        // line 8
        echo "
";
        // line 9
        if ((($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] ?? null) == "Grid")) {
            // line 10
            echo "     ";
            $location = "forumlist_grid.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_grid.html", "index_body.html", 10)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } elseif ((        // line 11
($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] ?? null) == "Grid (Icons)")) {
            // line 12
            echo "    ";
            $location = "forumlist_grid_icons.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_grid_icons.html", "index_body.html", 12)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 14
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "index_body.html", 14)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 16
        echo "
<div class=\"post_forumlist_links\">
\t";
        // line 18
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 19
            echo "    \t<span class=\"current_time\">";
            echo ($context["CURRENT_TIME"] ?? null);
            echo "</span>
    ";
        }
        // line 21
        echo "    ";
        if (($context["U_MARK_FORUMS"] ?? null)) {
            // line 22
            echo "        <br /><a href=\"";
            echo ($context["U_MARK_FORUMS"] ?? null);
            echo "\" class=\"mark-read\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_FORUMS_READ");
            echo "</a>
    ";
        }
        // line 24
        echo "</div>

";
        // line 26
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_topstats', '__main__'));
        $this->env->loadTemplate('@dmzx_topstats/event/index_body_forumlist_body_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('rmcgirr83_nationalflags', '__main__'));
        $this->env->loadTemplate('@rmcgirr83_nationalflags/event/index_body_forumlist_body_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 27
        echo "
<div class=\"forumbg alt_block\">
    <div class=\"inner\">
    <ul class=\"topiclist\">
        <li class=\"header\">
            <dl class=\"row-item\">
                <dt><div class=\"list-inner\"><i class=\"fa fa-line-chart\"></i> &nbsp;";
        // line 33
        echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
        echo "</div></dt>
            </dl>
        </li>
    </ul>
    ";
        // line 37
        if (($context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"] ?? null)) {
            // line 38
            echo "        <div class=\"collapse-trigger open\">
            <span class=\"icon fa-minus tooltip-left\" title=\"Collapse\"></span>
            <span class=\"icon fa-plus tooltip-left\" title=\"Expand\"></span>
        </div>
    ";
        }
        // line 42
        echo "            
    <ul class=\"topiclist forums\">
    \t
        
            ";
        // line 46
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 47
            echo "                <li class=\"row";
            if (((($context["STYLE_SETTINGS_CONFIG_PROFILE_WIDGET"] ?? null) && ($context["STYLE_SETTINGS_CONFIG_SIDEBARS"] ?? null)) && ((($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] ?? null) == "Right Only") || (($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] ?? null) == "Both")))) {
                echo " responsive-hide stat_login_hide";
            }
            echo "\">
                    <form method=\"post\" action=\"";
            // line 48
            echo ($context["S_LOGIN_ACTION"] ?? null);
            echo "\" class=\"headerspace\">
                    <h3><a href=\"";
            // line 49
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
            echo "</h3>
                        <fieldset class=\"quick-login\">
                            <label for=\"username\"><span>";
            // line 51
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo "\" /></label>
                            <label for=\"password\"><span>";
            // line 52
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
                            ";
            // line 53
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                // line 54
                echo "                                <a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORGOT_PASS");
                echo "</a>
                            ";
            }
            // line 56
            echo "                            ";
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 57
                echo "                                <span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
                            ";
            }
            // line 59
            echo "                            <input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
            echo "\" class=\"button2\" />
                            ";
            // line 60
            echo ($context["S_LOGIN_REDIRECT"] ?? null);
            echo "
\t\t\t\t\t\t\t";
            // line 61
            echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
            echo "
                        </fieldset>
                    </form>
                </li>
            ";
        }
        // line 66
        echo "            
            
            ";
        // line 68
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('gfksx_thanksforposts', '__main__'));
        $this->env->loadTemplate('@gfksx_thanksforposts/event/index_body_stat_blocks_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('robertheim_topictags', '__main__'));
        $this->env->loadTemplate('@robertheim_topictags/event/index_body_stat_blocks_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 69
        echo "            
            ";
        // line 70
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 71
            echo "            <li class=\"row\">
                <div class=\"stat-block online-list\">
                    ";
            // line 73
            if (($context["U_VIEWONLINE"] ?? null)) {
                echo "<h3><a href=\"";
                echo ($context["U_VIEWONLINE"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "?</a></h3>";
            } else {
                echo "<h3>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "?</h3>";
            }
            // line 74
            echo "                    <p>
                        ";
            // line 75
            // line 76
            echo "                        ";
            echo ($context["TOTAL_USERS_ONLINE"] ?? null);
            echo " (";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo ($context["RECORD_USERS"] ?? null);
            echo "<br /> 
                        ";
            // line 77
            if (($context["U_VIEWONLINE"] ?? null)) {
                // line 78
                echo "                        \t<br />";
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "
                        ";
            }
            // line 80
            echo "                        ";
            if (($context["LEGEND"] ?? null)) {
                echo "<br /><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LEGEND");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                echo ($context["LEGEND"] ?? null);
                echo "</strong>";
            }
            // line 81
            echo "                        ";
            // line 82
            echo "                    </p>
                </div>
            </li>
            ";
        }
        // line 86
        echo "            
            ";
        // line 87
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('lukewcs_whowashere', '__main__'));
        $this->env->loadTemplate('@lukewcs_whowashere/event/index_body_online_block_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 88
        echo "            
            ";
        // line 89
        if (($context["NEWEST_USER"] ?? null)) {
            // line 90
            echo "            \t<li class=\"row\">
                    <div class=\"stat-block statistics\">
                        <h3>";
            // line 92
            echo $this->extensions['phpbb\template\twig\extension']->lang("STATISTICS");
            echo "</h3>
                        <p>
                            ";
            // line 94
            // line 95
            echo "                            ";
            echo ($context["TOTAL_POSTS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_USERS"] ?? null);
            echo " &bull; ";
            echo ($context["NEWEST_USER"] ?? null);
            echo "
                            ";
            // line 96
            // line 97
            echo "                        </p>
                    </div>
                </li>
            ";
        }
        // line 101
        echo "            ";
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('lukewcs_whowashere', '__main__'));
        $this->env->loadTemplate('@lukewcs_whowashere/event/index_body_birthday_block_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        echo "  
            ";
        // line 102
        if ((($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null) && ($context["BIRTHDAY_LIST"] ?? null))) {
            // line 103
            echo "            <li class=\"row\">
                <div class=\"stat-block birthday-list\">
                    <h3>";
            // line 105
            echo $this->extensions['phpbb\template\twig\extension']->lang("BIRTHDAYS");
            echo "</h3>
                    <p>
                        ";
            // line 107
            // line 108
            echo "                        ";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 108))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("CONGRATULATIONS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 108));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "USERNAME", [], "any", false, false, false, 108);
                    if ((twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 108) !== "")) {
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 108);
                        echo ")";
                    }
                    if ( !twig_get_attribute($this->env, $this->source, $context["birthdays"], "S_LAST_ROW", [], "any", false, false, false, 108)) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_BIRTHDAYS");
            }
            // line 109
            echo "                        ";
            // line 110
            echo "                    </p>
                </div>
            </li>
            ";
        }
        // line 114
        echo "            
            ";
        // line 115
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('lukewcs_whowashere', '__main__'));
        $this->env->loadTemplate('@lukewcs_whowashere/event/index_body_stat_blocks_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 116
        echo "        </li>
    </ul>
    </div>
</div>

";
        // line 121
        if (($context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"] ?? null)) {
            echo "</div>";
        }
        // line 122
        echo "        

";
        // line 124
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 124)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 124,  451 => 122,  447 => 121,  440 => 116,  435 => 115,  432 => 114,  426 => 110,  424 => 109,  398 => 108,  397 => 107,  392 => 105,  388 => 103,  386 => 102,  378 => 101,  372 => 97,  371 => 96,  360 => 95,  359 => 94,  354 => 92,  350 => 90,  348 => 89,  345 => 88,  340 => 87,  337 => 86,  331 => 82,  329 => 81,  319 => 80,  313 => 78,  311 => 77,  302 => 76,  301 => 75,  298 => 74,  286 => 73,  282 => 71,  280 => 70,  277 => 69,  268 => 68,  264 => 66,  256 => 61,  252 => 60,  247 => 59,  241 => 57,  238 => 56,  230 => 54,  228 => 53,  221 => 52,  214 => 51,  199 => 49,  195 => 48,  188 => 47,  186 => 46,  180 => 42,  173 => 38,  171 => 37,  164 => 33,  156 => 27,  147 => 26,  143 => 24,  135 => 22,  132 => 21,  126 => 19,  124 => 18,  120 => 16,  106 => 14,  92 => 12,  90 => 11,  77 => 10,  75 => 9,  72 => 8,  68 => 7,  65 => 6,  60 => 5,  57 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index_body.html", "");
    }
}
