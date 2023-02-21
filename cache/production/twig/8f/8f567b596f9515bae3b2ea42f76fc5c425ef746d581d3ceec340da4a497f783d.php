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

/* @dmzx_topstats/event/index_body_forumlist_body_after.html */
class __TwigTemplate_3d1e793bcf11d9b19e16f185df371bd9bfa2f727f9533abda5c101fe48fc7c68 extends \Twig\Template
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
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 2
            echo "
";
            // line 3
            if (($context["S_TSMRT_ENABLE"] ?? null)) {
                // line 4
                $location = "top_stats_foot.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("top_stats_foot.html", "@dmzx_topstats/event/index_body_forumlist_body_after.html", 4)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
            }
            // line 6
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@dmzx_topstats/event/index_body_forumlist_body_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@dmzx_topstats/event/index_body_forumlist_body_after.html", "");
    }
}
