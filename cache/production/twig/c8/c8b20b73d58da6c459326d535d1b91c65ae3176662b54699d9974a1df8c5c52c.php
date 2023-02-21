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

/* @dark1_memberavatarstatus/event/viewforum_body_topic_author_username_prepend.html */
class __TwigTemplate_db04e89ced69159a25934b73e63a06f40c4c02dcc27b4380cd84d72ecdf5f395 extends \Twig\Template
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
        if ((($context["MAS_VF_FP_AVATAR"] ?? null) || ($context["MAS_VF_FP_ONLINE"] ?? null))) {
            // line 2
            echo "\t<div class=\"mas-wrap\">
\t\t";
            // line 3
            if (($context["MAS_VF_FP_AVATAR"] ?? null)) {
                // line 4
                echo "\t\t\t<div class=\"mas-avatar\" style=\"width: ";
                echo ($context["MAS_VF_FP_AV_SIZE"] ?? null);
                echo "px; height: ";
                echo ($context["MAS_VF_FP_AV_SIZE"] ?? null);
                echo "px;\">
\t\t\t\t";
                // line 5
                if (twig_get_attribute($this->env, $this->source, ($context["topicrow"] ?? null), "TOPIC_AUTHOR_AVATAR_IMG", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, ($context["topicrow"] ?? null), "TOPIC_AUTHOR_AVATAR_IMG", [], "any", false, false, false, 6);
                    echo "
\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 7
($context["recent_topics"] ?? null), "TOPIC_AUTHOR_AVATAR_IMG", [], "any", false, false, false, 7)) {
                    // line 8
                    echo "\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, ($context["recent_topics"] ?? null), "TOPIC_AUTHOR_AVATAR_IMG", [], "any", false, false, false, 8);
                    echo "
\t\t\t\t";
                } else {
                    // line 10
                    echo "\t\t\t\t\t";
                    echo ($context["MAS_NO_AVATAR_IMG"] ?? null);
                    echo "
\t\t\t\t";
                }
                // line 12
                echo "\t\t\t</div>
\t\t";
            }
            // line 14
            echo "\t\t<div class=\"mas-username\">
";
        }
    }

    public function getTemplateName()
    {
        return "@dark1_memberavatarstatus/event/viewforum_body_topic_author_username_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  72 => 12,  66 => 10,  60 => 8,  58 => 7,  53 => 6,  51 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@dark1_memberavatarstatus/event/viewforum_body_topic_author_username_prepend.html", "");
    }
}
