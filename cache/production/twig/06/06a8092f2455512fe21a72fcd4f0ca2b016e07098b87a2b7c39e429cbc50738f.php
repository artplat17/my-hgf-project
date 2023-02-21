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

/* @dmzx_topstats/event/index_body_markforums_after.html */
class __TwigTemplate_e96b956c01ee1079d2120afca7cc858f31b73b8850b16aa462ee77c34f29d311 extends \Twig\Template
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
        echo "<div class=\"welcome\"> Welcome to our Horny Forum! </div>

";
        // line 3
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 4
            echo "
";
            // line 5
            if (($context["S_TSRAT_ENABLE"] ?? null)) {
                // line 6
                $location = "recent_active_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("recent_active_body.html", "@dmzx_topstats/event/index_body_markforums_after.html", 6)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
            }
            // line 8
            echo "
";
            // line 9
            if (($context["S_TSMVT_ENABLE"] ?? null)) {
                // line 10
                $location = "top_stats_head.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("top_stats_head.html", "@dmzx_topstats/event/index_body_markforums_after.html", 10)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
            }
            // line 12
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@dmzx_topstats/event/index_body_markforums_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 12,  66 => 10,  64 => 9,  61 => 8,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@dmzx_topstats/event/index_body_markforums_after.html", "");
    }
}
