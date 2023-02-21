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

/* @ppk_phpbb3fixes/event/overall_footer_body_after.html */
class __TwigTemplate_ac012373d11e209af78d0fc23c0c1ad0d0eef7d3236b8b78c31527829ae3c679 extends \Twig\Template
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
        if (($context["PHPHBB3FIXES_SITE_LOGO"] ?? null)) {
            // line 2
            echo "<script>
\$(document).ready(
\tfunction(\$)
\t{
\t\t\$('span.site_logo').replaceWith('<img src=\"";
            // line 6
            echo ($context["PHPHBB3FIXES_SITE_LOGO"] ?? null);
            echo "\" alt=\"\" />');
\t}
);
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@ppk_phpbb3fixes/event/overall_footer_body_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ppk_phpbb3fixes/event/overall_footer_body_after.html", "");
    }
}
