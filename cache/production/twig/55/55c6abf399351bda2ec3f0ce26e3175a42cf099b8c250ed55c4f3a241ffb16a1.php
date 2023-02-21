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

/* @alg_addonforthanksforposts/event/overall_footer_after.html */
class __TwigTemplate_27d9d57ae0f84bdc79f254219839b571683a64147796482cd99b30a174f82d05 extends \Twig\Template
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
        if ((($context["S_TOPIC_ID"] ?? null) && ($context["S_FORUM_THANKS"] ?? null))) {
            // line 2
            echo "<script type=\"text/javascript\" >
    var LA_CLEAR_LIST_THANKS = '";
            // line 3
            echo $this->extensions['phpbb\template\twig\extension']->lang("CLEAR_LIST_THANKS");
            echo "';
    var LA_REPUT = '";
            // line 4
            echo $this->extensions['phpbb\template\twig\extension']->lang("REPUT");
            echo "';
    var LA_RECEIVED = '";
            // line 5
            echo $this->extensions['phpbb\template\twig\extension']->lang("RECEIVED");
            echo "';
    var LA_GIVEN = '";
            // line 6
            echo $this->extensions['phpbb\template\twig\extension']->lang("GIVEN");
            echo "';
    var LA_CLEAR_LIST_THANKS_CONFIRM = '";
            // line 7
            echo $this->extensions['phpbb\template\twig\extension']->lang("CLEAR_LIST_THANKS_CONFIRM");
            echo "';
    var LA_YES = '";
            // line 8
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "';
    var LA_NO = '";
            // line 9
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "';
    var U_ADDONFORTHANKSFORPOSTS_PATH = '";
            // line 10
            echo ($context["U_ADDONFORTHANKSFORPOSTS_PATH"] ?? null);
            echo "';
    var forum_id = parseInt('";
            // line 11
            echo ($context["S_FORUM_ID"] ?? null);
            echo "');
    var topic_id = parseInt('";
            // line 12
            echo ($context["S_TOPIC_ID"] ?? null);
            echo "');
</script>
";
            // line 14
            $asset_file = "jquery.noty.js";
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
            $this->env->get_assets_bag()->add_script($asset);            // line 15
            $asset_file = "default.js";
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
            $this->env->get_assets_bag()->add_script($asset);            // line 16
            $asset_file = "topRight.js";
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
            $this->env->get_assets_bag()->add_script($asset);            // line 17
            $asset_file = "topCenter.js";
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
            $this->env->get_assets_bag()->add_script($asset);            // line 18
            $asset_file = "addon_for_thanks_for_posts.js";
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
            $this->env->get_assets_bag()->add_script($asset);        }
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "@alg_addonforthanksforposts/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 20,  139 => 18,  125 => 17,  111 => 16,  97 => 15,  83 => 14,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@alg_addonforthanksforposts/event/overall_footer_after.html", "");
    }
}
