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

/* overall_header.html */
class __TwigTemplate_2499fe91798ba8fc6b8a958a70d0298800fe98d5b16a5f7d32ab174d10d3f146 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
";
        // line 4
        if (($context["STYLE_SETTINGS_CONFIG_ALLOW_USER_COLOUR"] ?? null)) {
            echo "\t
\t<script> if (localStorage.user_colour_selection === \"dark\") { document.getElementsByTagName('html')[0].classList.add('fd_dark'); }</script>\t
";
        }
        // line 7
        echo "<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 10
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 11
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "(";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo ") ";
        }
        if (( !($context["S_VIEWTOPIC"] ?? null) &&  !($context["S_VIEWFORUM"] ?? null))) {
            echo ($context["SITENAME"] ?? null);
            echo " - ";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo " - ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("UCP");
            echo " - ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        if ((($context["S_VIEWTOPIC"] ?? null) || ($context["S_VIEWFORUM"] ?? null))) {
            echo " - ";
            echo ($context["SITENAME"] ?? null);
        }
        echo "</title>

";
        // line 13
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 14
            echo "\t";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 15
            echo "\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 16
            echo "\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 17
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 18
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 19
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forum", ["forum_id" => ($context["S_FORUM_ID"] ?? null)]);
                echo "\">";
            }
            // line 20
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topic", ["topic_id" => ($context["S_TOPIC_ID"] ?? null)]);
                echo "\">";
            }
            // line 21
            echo "\t";
        }
        // line 23
        echo "
";
        // line 24
        if (($context["U_CANONICAL"] ?? null)) {
            // line 25
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 27
        echo "
";
        // line 28
        if (($context["FORUM_FAVICON"] ?? null)) {
            // line 29
            echo "\t<link rel=\"icon\" href=\"";
            echo ($context["FORUM_FAVICON"] ?? null);
            echo "\" />
";
        }
        // line 31
        echo "
<!--
\tphpBB style name: Milk v2
\tBased on style:   Merlin Framework (http://www.planetstyles.net)
-->

";
        // line 37
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 38
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://cdn.jsdelivr.net/npm/webfontloader@1.6.28/webfontloader.min.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 53
        echo "

";
        // line 55
        if ((($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Roboto Slab")) {
            // line 56
            echo "\t<link href=\"https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900\" rel=\"stylesheet\">
    <style type=\"text/css\">@media (max-width:494.5px) {body {font-family: \"Roboto Slab\", Arial, Helvetica, sans-serif; font-size: 12px;}}</style>
    <style type=\"text/css\">@media (min-width:494.5px) {body {font-family: \"Roboto Slab\", Arial, Helvetica, sans-serif; font-size: 14px;}}</style>
";
        } elseif ((        // line 59
($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Bubbler One")) {
            // line 60
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Bubbler+One:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Bubbler One\", Arial, Helvetica, sans-serif; font-size: 18px;}</style>
";
        } elseif ((        // line 62
($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Dosis")) {
            // line 63
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Dosis:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Dosis\", Arial, Helvetica, sans-serif; font-size: 16px;}</style>
";
        } elseif ((        // line 65
($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Exo 2")) {
            // line 66
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Exo+2:300,400,500\" rel=\"stylesheet\">
\t<style type=\"text/css\">body {font-family: \"Exo 2\", Arial, Helvetica, sans-serif; font-size: 15px;}</style>
";
        } elseif ((        // line 68
($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Raleway")) {
            // line 69
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Raleway\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>
";
        } elseif ((        // line 71
($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Rubik")) {
            // line 72
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Rubik:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Rubik\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>
";
        } elseif ((        // line 74
($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Quicksand")) {
            // line 75
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Quicksand:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Quicksand\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>
";
        } else {
            // line 78
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Roboto\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>
";
        }
        // line 81
        echo "

<link href=\"";
        // line 83
        echo ($context["T_FONT_AWESOME_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 84
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 85
        echo ($context["T_STYLESHEET_LANG_LINK"] ?? null);
        echo "?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">

<link href=\"";
        // line 87
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/blank.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\" class=\"colour_switch_link\"  />

";
        // line 89
        if (($context["STYLE_SETTINGS_CONFIG_ROUNDED_CORNERS"] ?? null)) {
            // line 90
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/rounded.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 92
        echo "
";
        // line 93
        if ((($context["STYLE_SETTINGS_CONFIG_COLOUR_PRESET"] ?? null) != "No Custom Colour")) {
            // line 94
            echo "    ";
            if ((($context["STYLE_SETTINGS_CONFIG_COLOUR_PRESET"] ?? null) == "Custom (Use colour picker below)")) {
                // line 95
                echo "        <style type=\"text/css\">
\t\t\t/* Color */
a:hover, .navbar_footer a, .copyright_bar a, .social_links_footer a:hover span, .icon.fa-file.icon-red, a:hover .icon.fa-file.icon-red, .navigation .active-subsection a, .navigation .active-subsection a:hover, .navigation a:hover, .tabs .tab > a:hover, .tabs .activetab > a, .tabs .activetab > a:hover, a.postlink, a.postlink:visited, .navbar_in_header .badge, .button:focus .icon, .button:hover .icon, .dark_base .social_links_footer a span, .dark_base h2, .dark_base h2 a, .dark_base a:link, .dark_base a:visited, .button-secondary:focus, .button-secondary:hover, .notification_unread, .topic_type, .fd_dark a {color: #";
                // line 97
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] ?? null);
                echo ";}
\t\t\t/* Background Solid  */
\t\t\t.pagination li a:hover, .pagination li.active span, .pagination li a:focus, .jumpbox-cat-link, .dropdown-contents > li > a:hover, a.button1:hover, input.button1:hover, a.button2:hover, input.button2:hover, input.button3:hover, a.no_avatar:hover, .jumpbox-cat-link:hover, input.button1:focus, input.button2:focus, input.button3:focus, .specialbutton, input.specialbutton, .panel .specialbutton, a.specialbutton, .scrollToTop, a.specialbutton, .dark_base .social_links_footer a:hover span, .grid_unread, .tile_row_2:before   {background: #";
                // line 99
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] ?? null);
                echo ";}
\t\t\t/* Borders Dark */
\t\t\t.pagination li a:hover, .pagination li.active span, .pagination li a:focus, blockquote, .codebox code, .jumpbox-cat-link, a.postlink, input.button1:focus, input.button2:focus, input.button3:focus, input.specialbutton, .inputbox:hover, .inputbox:focus, .specialbutton, a.specialbutton, .button:hover, .button:focus, .dark_base .social_links_footer a span, a.specialbutton, .dark_base .social_links_footer a:hover span {border-color: #";
                // line 101
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] ?? null);
                echo ";}
\t\t\t/* Background Gradient  */
\t\t\t.headerbar, body.content_block_header_block li.header, body.content_block_header_stripe li.header:before, .scrollToTop, .no_avatar, .social_links_footer, .badge, thead tr, .sidebar_block_stripe:before, .fancy_panel:before {background-color: #";
                // line 103
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] ?? null);
                echo ";}
\t\t\t/* opacity */
\t\t\t.headerbar_overlay_active {background-color: #";
                // line 105
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] ?? null);
                echo "; opacity: 0.7;}
\t\t\t/* Dark overlay */
\t\t\t.grid_colour_overlay:hover {background-color: rgba(0,0,0,0.7);}
\t\t\t/* Colour Hover Light */
\t\t\t.navbar_footer a:hover, .copyright_bar a:hover, a.postlink:hover, .dark_base h2 a:hover  {opacity: 0.7;}
\t\t\t/* Background Hover Light */
\t\t\ta.scrollToTop:hover, input.specialbutton:hover, a.specialbutton:hover {opacity: 0.7;}
\t\t\t/* Border light */
\t\t\t.specialbutton:hover {opacity: 0.7;}

\t\t</style>
\t";
            } else {
                // line 117
                echo "    \t<link href=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/colour-presets/";
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PRESET"] ?? null);
                echo ".css?assets_version=";
                echo ($context["T_ASSETS_VERSION"] ?? null);
                echo "\" rel=\"stylesheet\" class=\"preset_stylesheet\">
    ";
            }
        } else {
            // line 120
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/colour-presets/default.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 122
        echo "
";
        // line 123
        if ( !($context["STYLE_SETTINGS_CONFIG_DISABLE_CSS_ANIMATIONS"] ?? null)) {
            // line 124
            echo "<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/animate.css\" rel=\"stylesheet\" />
<style type=\"text/css\">
\t#nav-main, #logo, #site-description h1, #site-description p, #nav-breadcrumbs, #page-body {
\t\ttransform: translateY(-15px);
\t\ttransition: .75s ease-in-out;
\t}
</style>
";
        }
        // line 132
        echo "

<style type=\"text/css\">
\t";
        // line 135
        if ((($context["STYLE_SETTINGS_CONFIG_CSS_ICON_SHAPE"] ?? null) != "Square")) {
            // line 136
            echo "\t\t.forums .row-item:before, .topics .row-item:before, .pmlist .row-item:before, .cplist .row-item:before {
\t\t\tborder-radius: 50%;
\t\t}
\t";
        } else {
            // line 140
            echo "\t\tdl.row-item:after {
\t\t\ttop: 3px;
\t\t\tleft: 35px;
\t\t}
\t";
        }
        // line 145
        echo "

\t";
        // line 147
        if (($context["FORUM_HEADER"] ?? null)) {
            // line 148
            echo "\t.forum_header {
\t\t";
            // line 149
            if (($context["STYLE_SETTINGS_CONFIG_PARALLAX_HEADER"] ?? null)) {
                // line 150
                echo "\t\t\tbackground-image: none;
\t\t\tbackground-color: transparent;
\t\t";
            } else {
                // line 153
                echo "\t\t\tbackground-image: url('";
                echo ($context["FORUM_HEADER"] ?? null);
                echo "');
\t\t";
            }
            // line 155
            echo "
\t\t";
            // line 156
            if (($context["STYLE_SETTINGS_CONFIG_HEADER_REPEAT"] ?? null)) {
                // line 157
                echo "\t\t\tbackground-repeat: ";
                echo ($context["STYLE_SETTINGS_CONFIG_HEADER_REPEAT"] ?? null);
                echo ";
\t\t";
            } else {
                // line 159
                echo "\t\t\tbackground-repeat: no-repeat;
\t\t";
            }
            // line 161
            echo "
\t\t";
            // line 162
            if (($context["STYLE_SETTINGS_CONFIG_HEADER_POSITION"] ?? null)) {
                // line 163
                echo "\t\t\tbackground-position: ";
                echo ($context["STYLE_SETTINGS_CONFIG_HEADER_POSITION"] ?? null);
                echo ";
\t\t";
            } else {
                // line 165
                echo "\t\t\tbackground-position: center top;
\t\t";
            }
            // line 167
            echo "
\t\t";
            // line 168
            if (($context["STYLE_SETTINGS_CONFIG_HEADER_SIZE"] ?? null)) {
                echo " background-size: cover;";
            }
            echo "\"
\t}

\t\t";
            // line 171
            if (($context["STYLE_SETTINGS_CONFIG_PARALLAX_HEADER"] ?? null)) {
                // line 172
                echo "\t\t/* Opens parallax window */
\t\t.headerbar {
\t\t\tbackground: none;
\t\t}
\t\t";
            }
            // line 177
            echo "\t";
        }
        // line 178
        echo "
</style>




";
        // line 184
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 185
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 187
        echo "
";
        // line 188
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 189
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/plupload.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 191
        echo "
";
        // line 192
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 193
            echo "\t<link href=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 195
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 197
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/tweaks.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 200
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('Sumanai_DisplayContactIcon', '__main__'));
        $this->env->loadTemplate('@Sumanai_DisplayContactIcon/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('alfredoramos_imgur', '__main__'));
        $this->env->loadTemplate('@alfredoramos_imgur/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dark1_memberavatarstatus', '__main__'));
        $this->env->loadTemplate('@dark1_memberavatarstatus/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_topstats', '__main__'));
        $this->env->loadTemplate('@dmzx_topstats/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_whovisitedthistopic', '__main__'));
        $this->env->loadTemplate('@dmzx_whovisitedthistopic/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('gfksx_thanksforposts', '__main__'));
        $this->env->loadTemplate('@gfksx_thanksforposts/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbbmodders_banhammer', '__main__'));
        $this->env->loadTemplate('@phpbbmodders_banhammer/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('rmcgirr83_elonw', '__main__'));
        $this->env->loadTemplate('@rmcgirr83_elonw/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('rmcgirr83_nationalflags', '__main__'));
        $this->env->loadTemplate('@rmcgirr83_nationalflags/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('robertheim_topictags', '__main__'));
        $this->env->loadTemplate('@robertheim_topictags/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 201
        echo "
";
        // line 202
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "STYLESHEETS", [], "any", false, false, false, 202);
        echo "
<link href=\"";
        // line 203
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/extensions.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">



";
        // line 207
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dark1_memberavatarstatus', '__main__'));
        $this->env->loadTemplate('@dark1_memberavatarstatus/event/overall_header_stylesheets_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_ads', '__main__'));
        $this->env->loadTemplate('@phpbb_ads/event/overall_header_stylesheets_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_lightbox', '__main__'));
        $this->env->loadTemplate('@vse_lightbox/event/overall_header_stylesheets_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 208
        echo ($context["STYLE_SETTINGS_HTML_4"] ?? null);
        echo "
</head>
<body onload='fix(\"topictitle\")' id=\"phpbb\" class=\"nojs notouch section-";
        // line 210
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        if ((($context["STYLE_SETTINGS_CONFIG_SIDEBARS"] ?? null) && (($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] ?? null) == "Right Only"))) {
            echo " sidebar-right-only";
        } elseif ((($context["STYLE_SETTINGS_CONFIG_SIDEBARS"] ?? null) && (($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] ?? null) == "Left Only"))) {
            echo " sidebar-left-only";
        } elseif (($context["STYLE_SETTINGS_CONFIG_SIDEBARS"] ?? null)) {
            echo " sidebar-both";
        }
        if (($context["STYLE_SETTINGS_CONFIG_LAYOUT_TYPE"] ?? null)) {
            echo " body-layout-";
            echo ($context["STYLE_SETTINGS_CONFIG_LAYOUT_TYPE"] ?? null);
        }
        echo " content_block_header_";
        if ((($context["STYLE_SETTINGS_CONFIG_CONTENT_BLOCK_HEADER"] ?? null) == "Stripe")) {
            echo "stripe";
        } else {
            echo "block";
        }
        if (($context["STYLE_SETTINGS_CONFIG_HIGH_CONTRAST_LINKS"] ?? null)) {
            echo " high_contrast_links";
        }
        if ((($context["STYLE_SETTINGS_CONFIG_NAVBAR_POSITION"] ?? null) == "Inside Header")) {
            echo " navbar_i_header";
        } else {
            echo " navbar_o_header";
        }
        if (($context["STYLE_SETTINGS_CONFIG_ROUNDED_AVATARS"] ?? null)) {
            echo " force_rounded_avatars";
        }
        if (($context["STYLE_SETTINGS_CONFIG_CSS_IMAGE_REPLACE"] ?? null)) {
            echo " css_icons_disabled";
        } else {
            echo " css_icons_enabled";
        }
        echo "\">

<script>
function fix(topictitle) {
        tegi=document.getElementsByClassName(topictitle);
        for(i=0;i<tegi.length;i++){
          if (tegi[i].innerHTML.length > 85)
             tegi[i].classList.add('topictitlemin');
        }}
</script>

";
        // line 221
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_ads', '__main__'));
        $this->env->loadTemplate('@phpbb_ads/event/overall_header_body_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 222
        echo "    <div id=\"wrap\" class=\"wrap\">
        <a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>

        <div id=\"page-header\">


                ";
        // line 228
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 228)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 229
        echo "
            \t";
        // line 230
        // line 231
        echo "
            <div class=\"headerbar";
        // line 232
        if ((($context["STYLE_SETTINGS_CONFIG_NAVBAR_POSITION"] ?? null) == "Inside Header")) {
            echo " has_navbar";
        }
        echo "\" role=\"banner\"
\t\t\t\t";
        // line 233
        if (($context["STYLE_SETTINGS_CONFIG_PARALLAX_HEADER"] ?? null)) {
            echo " data-parallax=\"scroll\" data-image-src=\"";
            echo ($context["FORUM_HEADER"] ?? null);
            echo "\"";
        }
        echo ">
\t\t\t\t
\t\t\t\t<div class=\"forum_header\">

\t\t\t\t\t<div class=\"headerbar_overlay_container";
        // line 237
        if ((($context["STYLE_SETTINGS_CONFIG_HEADER_EFFECT"] ?? null) == "Colour Overlay")) {
            echo " headerbar_overlay_active";
        } elseif ((($context["STYLE_SETTINGS_CONFIG_HEADER_EFFECT"] ?? null) == "Darken")) {
            echo " headerbar_overlay_darken";
        }
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"particles_container\"";
        // line 239
        if (($context["STYLE_SETTINGS_CONFIG_HEADER_PARTICLES"] ?? null)) {
            echo " id=\"particles-js\"";
        }
        echo ">
\t\t\t\t\t\t\t<!-- Headerbar Elements Start -->



\t\t\t\t\t\t\t\t<div id=\"site-description\" class=\"site-description";
        // line 244
        if ((($context["STYLE_SETTINGS_CONFIG_LOGO_POSITION"] ?? null) == "Left")) {
            echo " logo_left";
        } elseif ((($context["STYLE_SETTINGS_CONFIG_LOGO_POSITION"] ?? null) == "Right")) {
            echo " logo_right";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t";
        // line 245
        if ((($context["STYLE_SETTINGS_CONFIG_HEADER_FORMAT"] ?? null) == "Logo Only")) {
            // line 246
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($context["FORUM_LOGO"] ?? null)) {
                // line 247
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                if (($context["U_SITE_HOME"] ?? null)) {
                    echo ($context["U_SITE_HOME"] ?? null);
                } else {
                    echo ($context["U_INDEX"] ?? null);
                }
                echo "\" title=\"";
                if (($context["U_SITE_HOME"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
                }
                echo "\">";
                echo ($context["FORUM_LOGO"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 249
                echo "\t\t\t\t\t\t\t\t\t\t\t<a id=\"logo\" class=\"logo\" href=\"";
                if (($context["U_SITE_HOME"] ?? null)) {
                    echo ($context["U_SITE_HOME"] ?? null);
                } else {
                    echo ($context["U_INDEX"] ?? null);
                }
                echo "\" title=\"";
                if (($context["U_SITE_HOME"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
                }
                echo "\"><span

\t\tclass=\"site_logo\"></span></a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 253
            echo "\t\t\t\t\t\t\t\t\t";
        } elseif ((($context["STYLE_SETTINGS_CONFIG_HEADER_FORMAT"] ?? null) == "Sitename and Description Only")) {
            // line 254
            echo "\t\t\t\t\t\t\t\t\t\t<h1>";
            echo ($context["SITENAME"] ?? null);
            echo "</h1>
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 255
            echo ($context["SITE_DESCRIPTION"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 256
            echo ($context["SITE_DESCRIPTION"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 258
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($context["FORUM_LOGO"] ?? null)) {
                // line 259
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                if (($context["U_SITE_HOME"] ?? null)) {
                    echo ($context["U_SITE_HOME"] ?? null);
                } else {
                    echo ($context["U_INDEX"] ?? null);
                }
                echo "\" title=\"";
                if (($context["U_SITE_HOME"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
                }
                echo "\">";
                echo ($context["FORUM_LOGO"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 261
                echo "\t\t\t\t\t\t\t\t\t\t\t<a id=\"logo\" class=\"logo\" href=\"";
                if (($context["U_SITE_HOME"] ?? null)) {
                    echo ($context["U_SITE_HOME"] ?? null);
                } else {
                    echo ($context["U_INDEX"] ?? null);
                }
                echo "\" title=\"";
                if (($context["U_SITE_HOME"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
                }
                echo "\"><span

\t\tclass=\"site_logo\"></span></a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 265
            echo "\t\t\t\t\t\t\t\t\t\t<h1>";
            echo ($context["SITENAME"] ?? null);
            echo "</h1>
\t\t\t\t\t\t\t\t\t\t<p class=\"mbdscrptn\">Welcome to our Horny Forum!</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"dpdscrptn\">";
            // line 267
            echo ($context["SITE_DESCRIPTION"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t\t";
        }
        // line 269
        echo "\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t<!-- Headerbar Elements End -->
\t\t\t\t\t\t</div>
\t\t\t\t\t

\t\t\t\t</div><!-- /.forum_header -->

            </div><!-- /.headerbar -->
            ";
        // line 280
        // line 281
        echo "

        </div><!-- /#page-header -->

        <div id=\"inner-wrap\">

        ";
        // line 287
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_ads', '__main__'));
        $this->env->loadTemplate('@phpbb_ads/event/overall_header_navbar_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 288
        echo "


\t<ul id=\"nav-breadcrumbs\" class=\"nav-breadcrumbs linklist navlinks\" role=\"menubar\">
\t\t";
        // line 292
        $context["MICRODATA"] = "itemtype=\"https://schema.org/ListItem\" itemprop=\"itemListElement\" itemscope";
        // line 293
        echo "\t\t";
        $context["navlink_position"] = 1;
        // line 294
        echo "
\t\t";
        // line 295
        // line 296
        echo "
\t\t<li class=\"breadcrumbs\" itemscope itemtype=\"https://schema.org/BreadcrumbList\">

\t\t\t";
        // line 299
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 300
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo ($context["MICRODATA"] ?? null);
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"name\">";
            echo ($context["L_SITE_HOME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t";
        }
        // line 302
        echo "
\t\t\t";
        // line 303
        // line 304
        echo "\t\t\t\t<span class=\"crumb\" ";
        echo ($context["MICRODATA"] ?? null);
        echo "><a itemprop=\"item\" href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !($context["U_SITE_HOME"] ?? null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"name\">";
        echo ($context["L_INDEX"] ?? null);
        echo "</span></a><meta itemprop=\"position\" content=\"";
        echo ($context["navlink_position"] ?? null);
        $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
        echo "\" /></span>

\t\t\t";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navlinks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["navlink"]) {
            // line 307
            echo "\t\t\t\t";
            $context["NAVLINK_NAME"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", true, true, false, 307)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", false, false, false, 307), twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 307))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 307)));
            // line 308
            echo "\t\t\t\t";
            $context["NAVLINK_LINK"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", true, true, false, 308)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", false, false, false, 308), twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 308))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 308)));
            // line 309
            echo "
\t\t\t\t";
            // line 310
            // line 311
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo ($context["MICRODATA"] ?? null);
            if (twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 311)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 311);
            }
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["NAVLINK_LINK"] ?? null);
            echo "\"><span itemprop=\"name\">";
            echo ($context["NAVLINK_NAME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t\t";
            // line 312
            // line 313
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        echo "
\t\t\t";
        // line 315
        // line 316
        echo "\t\t</li>

\t\t";
        // line 318
        // line 319
        echo "
\t\t";
        // line 320
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 321
            echo "\t\t\t<li class=\"rightside responsive-search\">
\t\t\t\t<a href=\"";
            // line 322
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 323
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 327
        echo "\t</ul>


        ";
        // line 330
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_ads', '__main__'));
        $this->env->loadTemplate('@phpbb_ads/event/overall_header_page_body_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 331
        echo "
        <a id=\"start_here\" class=\"anchor\"></a>
        <div id=\"page-body\" class=\"page-body\" role=\"main\">
            ";
        // line 334
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 335
            echo "            <div id=\"information\" class=\"rules\">
                <div class=\"inner\">
                    <strong>";
            // line 337
            echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_DISABLED");
            echo "
                </div>
            </div>
            ";
        }
        // line 341
        echo "
            ";
        // line 342
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_ads', '__main__'));
        $this->env->loadTemplate('@phpbb_ads/event/overall_header_content_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('rmcgirr83_nationalflags', '__main__'));
        $this->env->loadTemplate('@rmcgirr83_nationalflags/event/overall_header_content_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 343
        echo "
            ";
        // line 344
        if (($context["STYLE_SETTINGS_CONFIG_SIDEBARS"] ?? null)) {
            // line 345
            echo "         \t\t<div id=\"maincontainer\">
                    <div id=\"contentwrapper\">
                        <div id=\"contentcolumn\">
                            <div class=\"innertube\">
            ";
        }
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1053 => 345,  1051 => 344,  1048 => 343,  1039 => 342,  1036 => 341,  1026 => 337,  1022 => 335,  1020 => 334,  1015 => 331,  1010 => 330,  1005 => 327,  998 => 323,  992 => 322,  989 => 321,  987 => 320,  984 => 319,  983 => 318,  979 => 316,  978 => 315,  975 => 314,  969 => 313,  968 => 312,  952 => 311,  951 => 310,  948 => 309,  945 => 308,  942 => 307,  938 => 306,  921 => 304,  920 => 303,  917 => 302,  904 => 300,  902 => 299,  897 => 296,  896 => 295,  893 => 294,  890 => 293,  888 => 292,  882 => 288,  877 => 287,  869 => 281,  868 => 280,  855 => 269,  850 => 267,  844 => 265,  826 => 261,  808 => 259,  805 => 258,  800 => 256,  796 => 255,  791 => 254,  788 => 253,  770 => 249,  752 => 247,  749 => 246,  747 => 245,  739 => 244,  729 => 239,  720 => 237,  709 => 233,  703 => 232,  700 => 231,  699 => 230,  696 => 229,  684 => 228,  676 => 222,  671 => 221,  620 => 210,  615 => 208,  602 => 207,  593 => 203,  589 => 202,  586 => 201,  545 => 200,  537 => 197,  533 => 195,  525 => 193,  523 => 192,  520 => 191,  512 => 189,  510 => 188,  507 => 187,  499 => 185,  497 => 184,  489 => 178,  486 => 177,  479 => 172,  477 => 171,  469 => 168,  466 => 167,  462 => 165,  456 => 163,  454 => 162,  451 => 161,  447 => 159,  441 => 157,  439 => 156,  436 => 155,  430 => 153,  425 => 150,  423 => 149,  420 => 148,  418 => 147,  414 => 145,  407 => 140,  401 => 136,  399 => 135,  394 => 132,  382 => 124,  380 => 123,  377 => 122,  369 => 120,  358 => 117,  343 => 105,  338 => 103,  333 => 101,  328 => 99,  323 => 97,  319 => 95,  316 => 94,  314 => 93,  311 => 92,  303 => 90,  301 => 89,  294 => 87,  287 => 85,  283 => 84,  279 => 83,  275 => 81,  270 => 78,  265 => 75,  263 => 74,  259 => 72,  257 => 71,  253 => 69,  251 => 68,  247 => 66,  245 => 65,  241 => 63,  239 => 62,  235 => 60,  233 => 59,  228 => 56,  226 => 55,  222 => 53,  205 => 38,  203 => 37,  195 => 31,  189 => 29,  187 => 28,  184 => 27,  178 => 25,  176 => 24,  173 => 23,  170 => 21,  157 => 20,  144 => 19,  133 => 18,  122 => 17,  111 => 16,  100 => 15,  89 => 14,  87 => 13,  62 => 11,  58 => 10,  53 => 7,  47 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_header.html", "");
    }
}
