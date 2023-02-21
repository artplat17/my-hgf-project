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

/* @robertheim_topictags/css_includes.html */
class __TwigTemplate_d5fc91e30cdda033e4cc80a092d12623fb6fbf783e0fd3322d5016dc05451f79 extends \Twig\Template
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
        if (($context["S_RH_TOPICTAGS_INCLUDE_NG_TAGS_INPUT"] ?? null)) {
            // line 2
            echo "\t";
            if (($context["S_ALLOW_CDN"] ?? null)) {
                // line 3
                echo "\t\t";
                $asset_file = "//cdnjs.cloudflare.com/ajax/libs/ng-tags-input/2.1.1-1/ng-tags-input.min.css";
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
                $this->env->get_assets_bag()->add_stylesheet($asset);                // line 4
                echo "\t";
            } else {
                // line 5
                echo "\t\t";
                $asset_file = "@robertheim_topictags/../angular/ng-tags-input.min.css";
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
                $this->env->get_assets_bag()->add_stylesheet($asset);                // line 6
                echo "\t";
            }
        }
        // line 8
        echo "
";
        // line 9
        if (0) {
            echo "order matters, because we override some stuff";
        }
        // line 10
        echo "
";
        // line 11
        if (($context["S_RH_TOPICTAGS_INCLUDE_CSS"] ?? null)) {
            // line 12
            echo "\t";
            $asset_file = "@robertheim_topictags/rh_topictags.css";
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
            $this->env->get_assets_bag()->add_stylesheet($asset);        }
        // line 14
        echo "
";
        // line 15
        if (($context["S_RH_TOPICTAGS_INCLUDE_CSS_FROM_ACP"] ?? null)) {
            // line 16
            echo "\t";
            $asset_file = "@robertheim_topictags/rh_topictags.css";
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
            $this->env->get_assets_bag()->add_stylesheet($asset);        }
    }

    public function getTemplateName()
    {
        return "@robertheim_topictags/css_includes.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 16,  110 => 15,  107 => 14,  91 => 12,  89 => 11,  86 => 10,  82 => 9,  79 => 8,  75 => 6,  60 => 5,  57 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@robertheim_topictags/css_includes.html", "");
    }
}
