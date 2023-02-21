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

/* @robertheim_topictags/js_includes.html */
class __TwigTemplate_4f8ecfefac3ce765b77206164857a2091a46c96c2538d93db5d8b51de919c90b extends \Twig\Template
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
                $asset_file = "//ajax.googleapis.com/ajax/libs/angularjs/1.3.0/angular.min.js";
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
                $this->env->get_assets_bag()->add_script($asset);                // line 4
                echo "\t";
            } else {
                // line 5
                echo "\t\t";
                $asset_file = "@robertheim_topictags/../angular/angular.min.js";
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
                $this->env->get_assets_bag()->add_script($asset);                // line 6
                echo "\t";
            }
            // line 7
            echo "
\t";
            // line 8
            if (0) {
                // line 9
                echo "\t\tThe ng-tags-input has an important bug regarding regex modifiers. We implemented a custom
\t\tworkaround for version 2.1.1-1, shipped with the extension. There exists a PR on GitHub
\t\twhich still is not merged https://github.com/mbenford/ngTagsInput/issues/278 .
\t\tWhen the PR is merged we should update the whole lib and provide CDN, e.g., for 2.1.1-1:
\t\tINCLUDEJS //cdnjs.cloudflare.com/ajax/libs/ng-tags-input/2.1.1-1/ng-tags-input.min.js
\t";
            }
            // line 15
            echo "\t";
            $asset_file = "@robertheim_topictags/../angular/ng-tags-input.2.1.1-1.workaroundissue278.min.js";
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
            echo "
\t";
            // line 17
            $asset_file = "@robertheim_topictags/../angular/taginput.app.js";
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
    }

    public function getTemplateName()
    {
        return "@robertheim_topictags/js_includes.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 17,  106 => 16,  91 => 15,  83 => 9,  81 => 8,  78 => 7,  75 => 6,  60 => 5,  57 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@robertheim_topictags/js_includes.html", "");
    }
}
