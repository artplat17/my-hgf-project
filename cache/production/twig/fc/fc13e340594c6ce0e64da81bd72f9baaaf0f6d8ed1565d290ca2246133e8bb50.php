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

/* @alfredoramos_imgur/imgur_config.html */
class __TwigTemplate_4b1cdceb5d0e3b6b98f60179286346769d65e8a1dc572d2f74283296db1eabcb extends \Twig\Template
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
        if (((($context["IMGUR_UPLOAD_URL"] ?? null) && ($context["SHOW_IMGUR_BUTTON"] ?? null)) &&  !($context["INCLUDED_IMGUR_CONFIG"] ?? null))) {
            // line 2
            echo "<script>
var \$imgur = {
\tconfig: {
\t\ttypes: '";
            // line 5
            echo twig_escape_filter($this->env, ($context["IMGUR_ALLOWED_OUTPUT_TYPES"] ?? null), "js");
            echo "'
\t},
\tlang: {
\t\terror: '";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("ERROR"), "js");
            echo "',
\t\timageTooBig: '";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("IMGUR_IMAGE_TOO_BIG"), "js");
            echo "',
\t\tnoImages: '";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("IMGUR_NO_IMAGES"), "js");
            echo "',
\t\tuploadProgress: '";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("IMGUR_UPLOAD_PROGRESS"), "js");
            echo "'
\t}
};
</script>";
            // line 15
            $context["INCLUDED_IMGUR_CONFIG"] = true;
        }
    }

    public function getTemplateName()
    {
        return "@alfredoramos_imgur/imgur_config.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@alfredoramos_imgur/imgur_config.html", "");
    }
}
