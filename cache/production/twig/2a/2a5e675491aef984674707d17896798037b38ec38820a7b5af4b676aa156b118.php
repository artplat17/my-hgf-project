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

/* @dark1_memberavatarstatus/event/viewforum_body_last_post_author_username_append.html */
class __TwigTemplate_b2e367b473d7ae1575bbb3a0f9b10a3b9ff78a0a1aa42773dc5724eac4e46e3f extends \Twig\Template
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
        if ((($context["MAS_VF_LP_AVATAR"] ?? null) || ($context["MAS_VF_LP_ONLINE"] ?? null))) {
            // line 2
            echo "\t\t</div>
\t\t";
            // line 3
            if (($context["MAS_VF_LP_ONLINE"] ?? null)) {
                // line 4
                echo "\t\t\t<div class=\"mas-wrap-status";
                if ((twig_get_attribute($this->env, $this->source, ($context["topicrow"] ?? null), "LAST_POST_AUTHOR_S_ONLINE", [], "any", false, false, false, 4) || twig_get_attribute($this->env, $this->source, ($context["recent_topics"] ?? null), "LAST_POST_AUTHOR_S_ONLINE", [], "any", false, false, false, 4))) {
                    echo " mas-status-online";
                }
                echo "\">
\t\t\t\t<span class=\"mas-status-dot mas-color\" title=\"";
                // line 5
                if ((twig_get_attribute($this->env, $this->source, ($context["topicrow"] ?? null), "LAST_POST_AUTHOR_S_ONLINE", [], "any", false, false, false, 5) || twig_get_attribute($this->env, $this->source, ($context["recent_topics"] ?? null), "LAST_POST_AUTHOR_S_ONLINE", [], "any", false, false, false, 5))) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("OFFLINE");
                }
                echo "\">
\t\t\t\t</span>
\t\t\t</div>
\t\t";
            }
            // line 9
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@dark1_memberavatarstatus/event/viewforum_body_last_post_author_username_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  51 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@dark1_memberavatarstatus/event/viewforum_body_last_post_author_username_append.html", "");
    }
}
