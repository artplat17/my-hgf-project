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

/* @robertheim_topictags/tagcloud.html */
class __TwigTemplate_740eecfa34f1b65c728d0f9750a0fa10f40174293bbc5e7573a4c2d57e0c9f82 extends \Twig\Template
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
        echo "<li class=\"row\"><h3><a href=\"";
        echo ($context["RH_TOPICTAGS_TAGCLOUD_LINK"] ?? null);
        echo "\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("RH_TOPICTAGS_TAGCLOUD");
        echo "</a></h3>
<p style=\"text-align: left; margin-bottom: 0px;\"><strong>";
        // line 2
        echo ($context["RH_TOPICTAGS_TAGCLOUD_TAG_COUNT"] ?? null);
        echo "</strong></p>
";
        // line 3
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "rh_topictags_tags", [], "any", false, false, false, 3))) {
            // line 4
            echo "\t<div class=\"rh_topictags_tagcloud\">
\t\t<ul>
\t\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "rh_topictags_tags", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["rh_topictags_tags"]) {
                // line 7
                echo "\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["rh_topictags_tags"], "LINK", [], "any", false, false, false, 8);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["rh_topictags_tags"], "CSS_CLASS", [], "any", false, false, false, 8);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["rh_topictags_tags"], "NAME", [], "any", false, false, false, 8);
                echo "</a>
\t\t\t\t\t";
                // line 9
                if (($context["RH_TOPICTAGS_TAGCLOUD_SHOW_COUNT"] ?? null)) {
                    // line 10
                    echo "\t\t\t\t\t\t<span class=rh_topictags_count>(";
                    echo twig_get_attribute($this->env, $this->source, $context["rh_topictags_tags"], "COUNT", [], "any", false, false, false, 10);
                    echo ")</span>
\t\t\t\t\t";
                }
                // line 12
                echo "\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rh_topictags_tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t</ul>
\t</div>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "@robertheim_topictags/tagcloud.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  77 => 12,  71 => 10,  69 => 9,  61 => 8,  58 => 7,  54 => 6,  50 => 4,  48 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@robertheim_topictags/tagcloud.html", "");
    }
}
