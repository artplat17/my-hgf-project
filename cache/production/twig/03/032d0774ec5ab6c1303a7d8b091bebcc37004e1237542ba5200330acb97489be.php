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

/* overall_footer.html */
class __TwigTemplate_d8377dfdfca1448607daa7dd41291cbddc012516edea8ee38058ab64d847948b extends \Twig\Template
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
        echo "\t\t\t\t\t";
        if (($context["STYLE_SETTINGS_CONFIG_SIDEBARS"] ?? null)) {
            // line 2
            echo "                            \t\t</div>
                                </div>
                            </div>

\t\t\t\t\t\t\t";
            // line 6
            if (((($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] ?? null) == "Left Only") || (($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] ?? null) == "Both"))) {
                // line 7
                echo "                            <div id=\"leftcolumn\">
                            \t<div class=\"innertube\">";
                // line 8
                $location = "sidebar_left.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("sidebar_left.html", "overall_footer.html", 8)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                echo "</div>
                            </div>
                            ";
            }
            // line 11
            echo "
                            ";
            // line 12
            if (((($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] ?? null) == "Right Only") || (($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] ?? null) == "Both"))) {
                // line 13
                echo "                            <div id=\"rightcolumn\">
                                <div class=\"innertube\">";
                // line 14
                $location = "sidebar_right.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("sidebar_right.html", "overall_footer.html", 14)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                echo "</div>
                            </div>
                            ";
            }
            // line 17
            echo "\t\t\t\t\t\t</div><!-- /#maincontainer -->
                    ";
        }
        // line 19
        echo "

                    ";
        // line 21
        // line 22
        echo "                </div>

            ";
        // line 24
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_ads', '__main__'));
        $this->env->loadTemplate('@phpbb_ads/event/overall_footer_page_body_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 25
        echo "
            \t</div><!-- /#inner-wrap -->

                ";
        // line 28
        if ((($context["STYLE_SETTINGS_HTML_3"] ?? null) &&  !($context["STYLE_SETTINGS_CONFIG_HIDE_SOCIAL_BAR"] ?? null))) {
            // line 29
            echo "                \t<div class=\"social_links_footer\">";
            echo ($context["STYLE_SETTINGS_HTML_3"] ?? null);
            echo "</div>
                ";
        }
        // line 31
        echo "

            <div id=\"page-footer\" class=\"page-footer\" role=\"contentinfo\">
                ";
        // line 34
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "overall_footer.html", 34)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 35
        echo "
                <div id=\"darkenwrapper\" class=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 36
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
                    <div id=\"darken\" class=\"darken\">&nbsp;</div>
                </div>

                <div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 40
        echo $this->extensions['phpbb\template\twig\extension']->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
                    <a href=\"#\" class=\"alert_close\">
                        <i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                    <h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
                </div>
                <div id=\"phpbb_confirm\" class=\"phpbb_alert\">
                    <a href=\"#\" class=\"alert_close\">
                        <i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                    <div class=\"alert_text\"></div>
                </div>
            </div>

            <div class=\"copyright_bar\" dir=\"ltr\">
                Powered by <a href=\"http://www.phpBB.com/\">phpBB</a>&trade; <span class=\"planetstyles_credit";
        // line 55
        if (($context["STYLE_SETTINGS_CONFIG_CREDIT_LINE"] ?? null)) {
            echo " planetstyles_credit_hidden";
        }
        echo "\">&bull; Design by <a href=\"http://www.planetstyles.net\">PlanetStyles</a></span>
                ";
        // line 56
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_ads', '__main__'));
        $this->env->loadTemplate('@phpbb_ads/event/overall_footer_copyright_prepend.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 57
        echo "                ";
        if (($context["TRANSLATION_INFO"] ?? null)) {
            echo "<br />";
            echo ($context["TRANSLATION_INFO"] ?? null);
        }
        // line 58
        echo "                ";
        // line 59
        echo "                ";
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            echo "<br />";
            echo ($context["DEBUG_OUTPUT"] ?? null);
        }
        // line 60
        echo "            </div>

            </div> <!-- /#wrap -->

            <div style=\"display: none;\">
                <a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
                ";
        // line 66
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 67
        echo "            </div>

            <script type=\"text/javascript\" src=\"";
        // line 69
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>

            ";
        // line 71
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 72
            echo "            <script>window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery-3.6.0.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>
            ";
        }
        // line 74
        echo "
            <script type=\"text/javascript\" src=\"";
        // line 75
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>

\t\t\t";
        // line 77
        if (($context["STYLE_SETTINGS_CONFIG_PARALLAX_HEADER"] ?? null)) {
            // line 78
            echo "            \t";
            $asset_file = "parallax.js";
            $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->env->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
            }
            
            if ($asset->is_relative()) {
                $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
            }
            $this->env->get_assets_bag()->add_script($asset);            // line 79
            echo "            ";
        }
        // line 80
        echo "
            ";
        // line 81
        $asset_file = "tooltipster.bundle.min.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 82
        echo "            ";
        if (($context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"] ?? null)) {
            // line 83
            echo "                ";
            $asset_file = "jquery.collapse.js";
            $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->env->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
            }
            
            if ($asset->is_relative()) {
                $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
            }
            $this->env->get_assets_bag()->add_script($asset);            // line 84
            echo "                ";
            $asset_file = "jquery.collapse_storage.js";
            $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->env->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
            }
            
            if ($asset->is_relative()) {
                $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
            }
            $this->env->get_assets_bag()->add_script($asset);            // line 85
            echo "            ";
        }
        // line 86
        echo "
            ";
        // line 87
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 88
        echo "            ";
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 89
        echo "
            <script>                
                // ************************************************
                // clear mechanism (for testing)
                // localStorage.removeItem('user_colour_selection');
                // ************************************************                
                console.log(\"storage value:\" + localStorage.user_colour_selection)
                FDSetClass();
                FDSetSwitch();
                
                localStorage.getItem(\"user_colour_selection\")                

                function FDSetClass() {
                    ";
        // line 102
        if ((($context["STYLE_SETTINGS_CONFIG_BASE_COLOUR"] ?? null) == "Dark")) {
            // line 103
            echo "                        console.log(\"FD Base: Dark\");
                        ";
            // line 104
            if (($context["STYLE_SETTINGS_CONFIG_ALLOW_USER_COLOUR"] ?? null)) {
                // line 105
                echo "                            console.log(\"FD: Override allowed\");
                            if(localStorage.user_colour_selection == 'dark') {
                                console.log(\"FD: User selection: Dark\");
                                \$(\"html\").addClass('fd_dark');
                                localStorage.setItem(\"user_colour_selection\", \"dark\");
                            } else {
                                if (localStorage.user_colour_selection == 'cbu') {
                                    console.log(\"FD: cbu. Removing dark class...\");
                                    \$(\"html\").removeClass('fd_dark');
                                } else {
                                    console.log(\"FD: Value is empty. Setting to dark...\");
                                    \$(\"html\").addClass('fd_dark');
                                    localStorage.setItem(\"user_colour_selection\", \"dark\");                                       
                                }                                                          
                            }
                        ";
            } else {
                // line 121
                echo "                            console.log(\"FD: Override not allowed\");
                            console.log(\"Apply dark\");
                            \$(\"html\").addClass('fd_dark');
                            localStorage.setItem(\"user_colour_selection\", \"dark\");
                        ";
            }
            // line 126
            echo "                    ";
        } else {
            // line 127
            echo "                        console.log(\"FD Base: Light\");
                        ";
            // line 128
            if (($context["STYLE_SETTINGS_CONFIG_ALLOW_USER_COLOUR"] ?? null)) {
                // line 129
                echo "                            console.log(\"FD: Override allowed\");
                            if(localStorage.user_colour_selection == 'dark') {
                                console.log(\"FD: User selection: Dark\");
                                \$(\"html\").addClass('fd_dark');
                                localStorage.setItem(\"user_colour_selection\", \"dark\");
                            } else {
                                console.log(\"FD: User selection: Empty\");
                            }                        
                        ";
            } else {
                // line 138
                echo "                            console.log(\"FD: Override not allowed\");
                            console.log(\"FD: Do nothing\");
                        ";
            }
            // line 141
            echo "                    ";
        }
        // line 142
        echo "                }

                function FDSetSwitch() {
                    if (\$(\"html\").hasClass('fd_dark')) {
                        \$(\"a#dark_toggle_link i\").addClass(\"fa-lightbulb-o\");
                    } else {
                        \$(\"a#dark_toggle_link i\").addClass(\"fa-moon-o\");
                    }
                }

                function FDSwitchLink() {
                    if(localStorage.user_colour_selection == 'dark') {
                        // Dark
                        \$(\"a#dark_toggle_link i\").removeClass(\"fa-lightbulb-o\");
                        \$(\"a#dark_toggle_link i\").addClass(\"fa-moon-o\");
                        \$(\"html\").removeClass('fd_dark');
                        localStorage.setItem(\"user_colour_selection\", \"cbu\");
                        console.log(\"Dark preference CBU (cleared by user)\");
                    } else {
                        // Light
                        \$(\"a#dark_toggle_link i\").removeClass(\"fa-moon-o\");
                        \$(\"a#dark_toggle_link i\").addClass(\"fa-lightbulb-o\");
                        localStorage.setItem(\"user_colour_selection\", \"dark\");
                    }
                }                                    

                ";
        // line 168
        if (($context["STYLE_SETTINGS_CONFIG_ALLOW_USER_COLOUR"] ?? null)) {
            // line 169
            echo "                    \$(\"a#dark_toggle_link\").click(function() {
                        FDSwitchLink();
                        FDSetClass();
                    });
                ";
        }
        // line 174
        echo "            </script>




            ";
        // line 179
        if (((($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] ?? null) == "Grid") || (($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] ?? null) == "Grid (Icons)"))) {
            echo "                
                <script>
                // limit descriptions to 2 lines (~45px)
                \$(function() {
                    var \$grid_desc = \$('.grid_image_container .forum_description');
                    var \$grid_time = \$('span.mini_date time');
                    \$grid_desc.dotdotdot({
                        // Prevents the <a class=\"toggle\" /> from being removed
                        height: 75,
                    });
                    \$grid_time.dotdotdot({
                        // Prevents the <a class=\"toggle\" /> from being removed
                        height: 45,
                    });                    
                });                   
                </script>
                <script src=\"";
            // line 195
            echo ($context["T_TEMPLATE_PATH"] ?? null);
            echo "/jquery.dotdotdot.js\"></script>                             
            ";
        }
        // line 197
        echo "
            
           

            ";
        // line 201
        if (($context["STYLE_SETTINGS_CONFIG_DARK_TOGGLE"] ?? null)) {
            // line 202
            echo "            \t";
            $asset_file = "js.cookie.js";
            $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->env->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
            }
            
            if ($asset->is_relative()) {
                $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
            }
            $this->env->get_assets_bag()->add_script($asset);            // line 203
            echo "            ";
        }
        // line 204
        echo "
            ";
        // line 205
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 206
            echo "                <script type=\"text/javascript\">
                    (function(\$){
                        var \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
                            \$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
                        if (\$span.css('fontFamily') !== 'FontAwesome' ) {
                            \$fa_cdn.after('<link href=\"";
            // line 211
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
                            \$fa_cdn.remove();
                        }
                        \$span.remove();
                    })(jQuery);
                </script>
            ";
        }
        // line 218
        echo "
            ";
        // line 219
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 220
            echo "                <script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
                <script>
\t\t\t\tif (typeof window.cookieconsent === \"object\") {
                    window.addEventListener(\"load\", function(){
                        window.cookieconsent.initialise({
                            \"palette\": {
                                \"popup\": {
                                    \"background\": \"#0F538A\"
                                },
                                \"button\": {
                                    \"background\": \"#E5E5E5\"
                                }
                            },
                            \"theme\": \"classic\",
                            \"content\": {
                                \"message\": \"";
            // line 235
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
                                \"dismiss\": \"";
            // line 236
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
                                \"link\": \"";
            // line 237
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
\t\t\t\t\t\t\t\t\"href\": \"";
            // line 238
            echo ($context["UA_PRIVACY"] ?? null);
            echo "\"
                            }
                        });
\t\t\t\t\t});
\t\t\t\t}
                </script>
            ";
        }
        // line 245
        echo "
            ";
        // line 246
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('alfredoramos_imgur', '__main__'));
        $this->env->loadTemplate('@alfredoramos_imgur/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('alg_addonforthanksforposts', '__main__'));
        $this->env->loadTemplate('@alg_addonforthanksforposts/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_topstats', '__main__'));
        $this->env->loadTemplate('@dmzx_topstats/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_ads', '__main__'));
        $this->env->loadTemplate('@phpbb_ads/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbbmodders_banhammer', '__main__'));
        $this->env->loadTemplate('@phpbbmodders_banhammer/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('rmcgirr83_elonw', '__main__'));
        $this->env->loadTemplate('@rmcgirr83_elonw/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('rmcgirr83_nationalflags', '__main__'));
        $this->env->loadTemplate('@rmcgirr83_nationalflags/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('robertheim_topictags', '__main__'));
        $this->env->loadTemplate('@robertheim_topictags/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_lightbox', '__main__'));
        $this->env->loadTemplate('@vse_lightbox/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 247
        echo "
            ";
        // line 248
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 248)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 249
        echo "            ";
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SCRIPTS", [], "any", false, false, false, 249);
        echo "

            ";
        // line 251
        if (($context["STYLE_SETTINGS_CONFIG_HEADER_PARTICLES"] ?? null)) {
            // line 252
            echo "                <style>
                    img.custom_logo {
                        /* Define height to prevent layout issues with uncached logos in particle header */
                        ";
            // line 255
            if (($context["FORUM_LOGO_HEIGHT"] ?? null)) {
                // line 256
                echo "                            height: ";
                echo ($context["FORUM_LOGO_HEIGHT"] ?? null);
                echo "px;
                        ";
            } else {
                // line 258
                echo "                            height: 100px;
                        ";
            }
            // line 260
            echo "                    }                    
                </style>
                <script type=\"text/javascript\">
\t\t\t\t\t/* Identify the height of headerbar */
\t\t\t\t\tvar headerbar_height = \$('.headerbar').height();
\t\t\t\t\t/* Match particle container height to headerbar. Creates window for canvas */
\t\t\t\t\t\$('.particles_container').css({'height': headerbar_height});

\t\t\t\t\t/* Dynamically apply width to site desc container, maximising clickable area behind it. We only need this to happen when particles are enabled. */
\t\t\t\t\tvar logo_width = \$('.site-description').width();
\t\t\t\t\tvar logo_width_fix = (logo_width+2); /* Caters for retina devices where the width is defined as a decimal. Obvs we can't set a decimal pixel width */
\t\t\t\t\t\$('.site-description').css({'width': logo_width_fix});
\t\t\t\t</script>
\t\t\t\t<script src=\"";
            // line 273
            echo ($context["T_TEMPLATE_PATH"] ?? null);
            echo "/particles.js\"></script>
                <script src=\"";
            // line 274
            echo ($context["T_TEMPLATE_PATH"] ?? null);
            echo "/particles.app.js\"></script>

                <script type=\"text/javascript\">
\t\t\t\t\t/* Reposition the canvas so it aligns with headerbar */
\t\t\t\t\t\$('canvas.particles-js-canvas-el').css({'margin-top': -headerbar_height});
\t\t\t\t</script>
            ";
        }
        // line 281
        echo "
\t\t\t<script type=\"text/javascript\">
            \$(function(\$) {
                var num_cols = 3,
                container = \$('.sub-forumlist'),
                listItem = 'li',
                listClass = 'sub-list';
                container.each(function() {
                    var items_per_col = new Array(),
                    items = \$(this).find(listItem),
                    min_items_per_col = Math.floor(items.length / num_cols),
                    difference = items.length - (min_items_per_col * num_cols);
                    for (var i = 0; i < num_cols; i++) {
                        if (i < difference) {
                            items_per_col[i] = min_items_per_col + 1;
                        } else {
                            items_per_col[i] = min_items_per_col;
                        }
                    }
                    for (var i = 0; i < num_cols; i++) {
                        \$(this).append(\$('<ul ></ul>').addClass(listClass));
                        for (var j = 0; j < items_per_col[i]; j++) {
                            var pointer = 0;
                            for (var k = 0; k < i; k++) {
                                pointer += items_per_col[k];
                            }
                            \$(this).find('.' + listClass).last().append(items[j + pointer]);
                        }
                    }
                });
            });
            </script>

            <script type=\"text/javascript\">
                // Add user icon in front of forumlist mods
            \t\$(\"span.forumlist_mods a\").each(function(i) {
            \t\t\$(this).prepend(\"<i class='icon fa-shield fa-fw'></i>\");
            \t});
            \t// Remove the comma seperator
            \t\$(\"span.forumlist_mods\").each(function() {
            \t\t\$(this).html(\$(this).html().replace(/,/g , ''));
            \t});
            </script>

            ";
        // line 325
        if ( !($context["STYLE_SETTINGS_CONFIG_DISABLE_CSS_ANIMATIONS"] ?? null)) {
            // line 326
            echo "            <script type=\"text/javascript\">
        \t\t// Animate Forumlist and other things
        \t\t// Add a small transition delay to each block for nice effect
        \t\t\$(\"#nav-main, #logo, #site-description h1, #site-description p, #nav-breadcrumbs, #page-body\").each(function(i) {
        \t\t\t\$(this).addClass(\"animated fadeIn\");

        \t\t\tvar transitiondelay = (('0.' + (i+1)))/2 + 's';
        \t\t\t\$(this).css({
        \t\t\t\t\"transform\": 'translateY(0px)',
        \t\t\t\t\"transition-delay\": transitiondelay,
        \t\t\t\t\"animation-delay\": transitiondelay
        \t\t\t});
        \t\t\t console.log(transitiondelay);
                });             
            </script>
            ";
        }
        // line 342
        echo "
            ";
        // line 343
        if ((($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] ?? null) == "Grid")) {
            // line 344
            echo "            <script type=\"text/javascript\">
                // Remove the comma seperator
            \t\$(\".forumlist_grid time\").each(function() {
            \t\tvar last_post_time = \$(this).html();
                    \$(this).html(last_post_time.split(',')[0])
            \t});
            </script>
            ";
        }
        // line 352
        echo "
      ";
        // line 353
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('alfredoramos_imgur', '__main__'));
        $this->env->loadTemplate('@alfredoramos_imgur/event/overall_footer_body_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_ads', '__main__'));
        $this->env->loadTemplate('@phpbb_ads/event/overall_footer_body_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('ppk_phpbb3fixes', '__main__'));
        $this->env->loadTemplate('@ppk_phpbb3fixes/event/overall_footer_body_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_lightbox', '__main__'));
        $this->env->loadTemplate('@vse_lightbox/event/overall_footer_body_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 354
        echo "
\t\t\t";
        // line 355
        if (($context["STYLE_SETTINGS_CONFIG_SCROLL_TO_TOP"] ?? null)) {
            // line 356
            echo "        <a href=\"#\" class=\"scrollToTop\"><span class=\"fa fa-arrow-up\"></span></a>
      ";
        }
        // line 358
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  811 => 358,  807 => 356,  805 => 355,  802 => 354,  785 => 353,  782 => 352,  772 => 344,  770 => 343,  767 => 342,  749 => 326,  747 => 325,  701 => 281,  691 => 274,  687 => 273,  672 => 260,  668 => 258,  662 => 256,  660 => 255,  655 => 252,  653 => 251,  647 => 249,  633 => 248,  630 => 247,  589 => 246,  586 => 245,  576 => 238,  572 => 237,  568 => 236,  564 => 235,  543 => 220,  541 => 219,  538 => 218,  528 => 211,  521 => 206,  519 => 205,  516 => 204,  513 => 203,  498 => 202,  496 => 201,  490 => 197,  485 => 195,  466 => 179,  459 => 174,  452 => 169,  450 => 168,  422 => 142,  419 => 141,  414 => 138,  403 => 129,  401 => 128,  398 => 127,  395 => 126,  388 => 121,  370 => 105,  368 => 104,  365 => 103,  363 => 102,  348 => 89,  333 => 88,  319 => 87,  316 => 86,  313 => 85,  298 => 84,  283 => 83,  280 => 82,  266 => 81,  263 => 80,  260 => 79,  245 => 78,  243 => 77,  236 => 75,  233 => 74,  225 => 72,  223 => 71,  218 => 69,  214 => 67,  210 => 66,  202 => 60,  196 => 59,  194 => 58,  188 => 57,  183 => 56,  177 => 55,  157 => 40,  142 => 36,  139 => 35,  127 => 34,  122 => 31,  116 => 29,  114 => 28,  109 => 25,  104 => 24,  100 => 22,  99 => 21,  95 => 19,  91 => 17,  75 => 14,  72 => 13,  70 => 12,  67 => 11,  51 => 8,  48 => 7,  46 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_footer.html", "");
    }
}
