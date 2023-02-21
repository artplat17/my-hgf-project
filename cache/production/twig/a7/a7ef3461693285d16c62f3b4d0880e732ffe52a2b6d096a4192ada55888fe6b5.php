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

/* @dark1_memberavatarstatus/event/overall_header_head_append.html */
class __TwigTemplate_80ec7e80e72979b4c2086bd1dbc05f132565eba017775731cb697616d80493d7 extends \Twig\Template
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
        if ((($context["MAS_AVATAR"] ?? null) || ($context["MAS_ONLINE"] ?? null))) {
            // line 2
            echo "\t";
            $asset_file = "@dark1_memberavatarstatus/mas_header.css";
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
            $this->env->get_assets_bag()->add_stylesheet($asset);            // line 3
            echo "\t<meta name=\"MAS\" content=\"";
            echo ($context["MAS_EXT_NAME"] ?? null);
            echo "=";
            echo ($context["MAS_EXT_DEV"] ?? null);
            echo "\" />
";
        }
    }

    public function getTemplateName()
    {
        return "@dark1_memberavatarstatus/event/overall_header_head_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@dark1_memberavatarstatus/event/overall_header_head_append.html", "");
    }
}
