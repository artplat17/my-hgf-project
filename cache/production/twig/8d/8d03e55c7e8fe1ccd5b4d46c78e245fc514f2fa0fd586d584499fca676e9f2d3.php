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

/* @vse_lightbox/event/overall_footer_after.html */
class __TwigTemplate_14a6e3606fc4257ae7303d811f0ce8c38aef5c2c5b7807faf763ecd1936b4a24 extends \Twig\Template
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
        if (((($context["S_LIGHTBOX_ALL_IMAGES"] ?? null) || ($context["LIGHTBOX_RESIZE_WIDTH"] ?? null)) || ($context["LIGHTBOX_RESIZE_HEIGHT"] ?? null))) {
            // line 2
            echo "\t";
            $asset_file = "@vse_lightbox/js/resizer.js";
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
            $this->env->get_assets_bag()->add_script($asset);            // line 3
            echo "\t";
            // line 4
            echo "\t";
            if ( !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "INCLUDED_LIGHTBOXJS", [], "any", false, false, false, 4)) {
                // line 5
                echo "\t\t";
                $asset_file = "@vse_lightbox/lightbox/css/lightbox.min.css";
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
                echo "\t\t";
                $asset_file = "@vse_lightbox/lightbox/js/lightbox.min.js";
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
                $this->env->get_assets_bag()->add_script($asset);                // line 7
                echo "\t\t";
                $value = true;
                $context['definition']->set('INCLUDED_LIGHTBOXJS', $value);
                // line 8
                echo "\t";
            }
            // line 9
            echo "\t<script>
\t\tvar vseLightbox = {};
\t\tvseLightbox.resizeHeight = ";
            // line 11
            echo ($context["LIGHTBOX_RESIZE_HEIGHT"] ?? null);
            echo ";
\t\tvseLightbox.resizeWidth = ";
            // line 12
            echo ($context["LIGHTBOX_RESIZE_WIDTH"] ?? null);
            echo ";
\t\tvseLightbox.lightboxGal = ";
            // line 13
            echo ($context["S_LIGHTBOX_GALLERY"] ?? null);
            echo ";
\t\tvseLightbox.lightboxSig = ";
            // line 14
            echo ($context["S_LIGHTBOX_SIGNATURES"] ?? null);
            echo ";
\t\tvseLightbox.imageTitles = ";
            // line 15
            echo ($context["S_LIGHTBOX_IMG_TITLES"] ?? null);
            echo ";
\t\tvseLightbox.lightboxAll = ";
            // line 16
            echo ($context["S_LIGHTBOX_ALL_IMAGES"] ?? null);
            echo ";
\t\tvseLightbox.downloadFile = 'download/file.";
            // line 17
            echo twig_escape_filter($this->env, ($context["PHP_EXTENSION"] ?? null), "js");
            echo "';
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@vse_lightbox/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 17,  120 => 16,  116 => 15,  112 => 14,  108 => 13,  104 => 12,  100 => 11,  96 => 9,  93 => 8,  89 => 7,  74 => 6,  59 => 5,  56 => 4,  54 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vse_lightbox/event/overall_footer_after.html", "");
    }
}
