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

/* @dmzx_topstats/event/overall_footer_after.html */
class __TwigTemplate_bfc68dab2c67d8c42f72288ca7393756446218d842008c165acb0495ef521017 extends \Twig\Template
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
        $asset_file = "@dmzx_topstats/topstats.css";
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
        $this->env->get_assets_bag()->add_stylesheet($asset);        // line 2
        echo "
";
        // line 3
        if (((($context["S_TSRAT_ENABLE"] ?? null) && ($context["S_TS_JSSCROLL"] ?? null)) || (($context["S_TSRAT_ENABLE"] ?? null) && ($context["S_TS_TICKER"] ?? null)))) {
            // line 4
            echo "
";
            // line 5
            if (((($context["S_TS_JSSCROLL"] ?? null) &&  !($context["S_TS_TICKER"] ?? null)) && (($context["SCRIPT_NAME"] ?? null) == "index"))) {
                // line 6
                echo "
";
                // line 7
                $asset_file = "jquery.totemticker.min.js";
                $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
                if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                    $asset_path = $asset->get_path();                    $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                    if (!file_exists($local_file)) {
                        $local_file = $this->env->findTemplate($asset_path);
                        $asset->set_path($local_file, true);
                    }
                }
                
                if ($asset->is_relative()) {
                    $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
                }
                $this->env->get_assets_bag()->add_script($asset);                // line 8
                echo "<script type=\"text/javascript\">
\$(document).ready(function() {
\t\$('#vertical-ticker').totemticker({
\t\t\t\trow_height\t:\t'41px',
\t\t\t\tmax_items\t:\t3,
\t\t\t\tspeed\t\t:\t";
                // line 13
                echo ($context["JSSCROLL_SPEED"] ?? null);
                echo ",
\t\t\t\tinterval\t:\t";
                // line 14
                echo ($context["JSSCROLL_INTERVAL"] ?? null);
                echo ",
\t\t\t\t";
                // line 15
                if (($context["TS_JSSCROLL_NAVIGATION"] ?? null)) {
                    // line 16
                    echo "\t\t\t\tnext\t\t:\t'#ticker-next',
\t\t\t\tprevious\t:\t'#ticker-previous',
\t\t\t\tstop\t\t:\t'#stop',
\t\t\t\tstart\t\t:\t'#start',
\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\tmousestop\t:\ttrue,
\t\t\t\tdirection\t:\t'";
                // line 22
                if (($context["TS_JSSCROLL_DIRECTION"] ?? null)) {
                    echo "down";
                } else {
                    echo "up";
                }
                echo "'
\t});
});
</script>
";
            } elseif ((            // line 26
($context["S_TS_TICKER"] ?? null) &&  !($context["S_TS_JSSCROLL"] ?? null))) {
                // line 27
                $asset_file = "jquery.newsticker.js";
                $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
                if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                    $asset_path = $asset->get_path();                    $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                    if (!file_exists($local_file)) {
                        $local_file = $this->env->findTemplate($asset_path);
                        $asset->set_path($local_file, true);
                    }
                }
                
                if ($asset->is_relative()) {
                    $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
                }
                $this->env->get_assets_bag()->add_script($asset);                // line 28
                echo "<script type=\"text/javascript\">
\$(document).ready(function() {
\t\$(\"#news\").newsTicker();
});
</script>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "@dmzx_topstats/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 28,  118 => 27,  116 => 26,  105 => 22,  102 => 21,  95 => 16,  93 => 15,  89 => 14,  85 => 13,  78 => 8,  64 => 7,  61 => 6,  59 => 5,  56 => 4,  54 => 3,  51 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@dmzx_topstats/event/overall_footer_after.html", "");
    }
}
