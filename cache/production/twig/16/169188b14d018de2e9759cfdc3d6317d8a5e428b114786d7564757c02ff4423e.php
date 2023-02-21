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

/* @robertheim_topictags/event/viewtopic_body_postrow_post_before.html */
class __TwigTemplate_50c7e302e8b30ef224098b26bc726d842953875f0f3236a78edffc85cee52709 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "S_FIRST_ROW", [], "any", false, false, false, 1) && ($context["RH_TOPICTAGS_SHOW"] ?? null))) {
            // line 2
            echo "    <div class=\"topic-tags\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "rh_topic_tags", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["rh_topic_tags"]) {
                // line 4
                echo "\t        <div class=\"rh_tag\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["rh_topic_tags"], "LINK", [], "any", false, false, false, 4);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["rh_topic_tags"], "NAME", [], "any", false, false, false, 4);
                echo "</a></div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rh_topic_tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@robertheim_topictags/event/viewtopic_body_postrow_post_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@robertheim_topictags/event/viewtopic_body_postrow_post_before.html", "");
    }
}
