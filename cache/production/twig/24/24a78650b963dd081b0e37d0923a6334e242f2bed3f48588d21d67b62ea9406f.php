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

/* @gfksx_thanksforposts/event/index_body_stat_blocks_before.html */
class __TwigTemplate_ddf4c8779f2599350095b30472e4b886d7a80e19d54bf91d422d2e9f3f5e5e68 extends \Twig\Template
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
        if (($context["S_THANKS_LIST"] ?? null)) {
            // line 2
            echo "<div class=\"stat-block thanks-list\">
<li class=\"row\">
\t<h3><a href=\"";
            // line 4
            echo ($context["U_THANKS_LIST"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOP_THANKS_LIST");
            echo "</a></h3>
\t<p>";
            // line 5
            echo ($context["THANKS_LIST"] ?? null);
            echo "</p>
</li>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_thanksforposts/event/index_body_stat_blocks_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@gfksx_thanksforposts/event/index_body_stat_blocks_before.html", "");
    }
}
