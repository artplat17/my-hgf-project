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

/* @lukewcs_whowashere/who_was_here.html */
class __TwigTemplate_4d3d11010f7ddc5ca1a3d018a322a9123ba4bfd191f3db5ab58c179a1899d4f3 extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"stat-block who-was-here\">
<li class=\"row\">
\t<h3>";
        // line 3
        echo $this->extensions['phpbb\template\twig\extension']->lang("LFWWH_TITLE");
        echo "?</h3>
\t<p>
\t\t";
        // line 5
        if (($context["lfwwh_pos_hint"] ?? null)) {
            // line 6
            echo "\t\t\t<span class=\"lfwwh_debug\">";
            echo ((($this->extensions['phpbb\template\twig\extension']->lang("LFWWH_TEMPLATE_POS") . $this->extensions['phpbb\template\twig\extension']->lang("COLON")) . " ") . ($context["lfwwh_pos_hint"] ?? null));
            echo "</span><br />
\t\t";
        }
        // line 8
        echo "\t\t";
        if (($context["LFWWH_TOTAL"] ?? null)) {
            // line 9
            echo "\t\t\t";
            echo ($context["LFWWH_TOTAL"] ?? null);
            echo " (";
            echo ($context["LFWWH_EXP"] ?? null);
            echo ")<br />
\t\t\t";
            // line 10
            echo ((($context["LFWWH_USERS"] ?? null)) ? ("<br />") : (""));
            echo "
\t\t";
        }
        // line 12
        echo "\t\t";
        if (($context["LFWWH_USERS"] ?? null)) {
            // line 13
            echo "\t\t\t";
            echo ($this->extensions['phpbb\template\twig\extension']->lang("LFWWH_USERS_PREFIX") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo " ";
            echo ((($context["LFWWH_USERS_SHOW_BUTTON"] ?? null)) ? ((twig_call_macro($macros["_self"], "macro_lfwwh_info_button", ["users", ($context["LFWWH_USERS_SHOW_BUTTON"] ?? null)], 13, $context, $this->getSourceContext()) . " ")) : (""));
            echo ($context["LFWWH_USERS"] ?? null);
            echo "<br />
\t\t";
        }
        // line 15
        echo "\t\t";
        if (($context["LFWWH_BOTS"] ?? null)) {
            // line 16
            echo "\t\t\t";
            echo ($this->extensions['phpbb\template\twig\extension']->lang("LFWWH_BOTS_PREFIX") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo " ";
            echo ((($context["LFWWH_BOTS_SHOW_BUTTON"] ?? null)) ? ((twig_call_macro($macros["_self"], "macro_lfwwh_info_button", ["bots", ($context["LFWWH_BOTS_SHOW_BUTTON"] ?? null)], 16, $context, $this->getSourceContext()) . " ")) : (""));
            echo ($context["LFWWH_BOTS"] ?? null);
            echo "<br />
\t\t";
        }
        // line 18
        echo "\t</p>
</li>
</div>

";
    }

    // line 22
    public function macro_lfwwh_info_button($__buttontype__ = null, $__infotype__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "buttontype" => $__buttontype__,
            "infotype" => $__infotype__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 23
            echo "\t";
            if ((($context["infotype"] ?? null) == 2)) {
                // line 24
                echo "\t\t";
                $context["icon"] = "info-circle";
                // line 25
                echo "\t";
            } else {
                // line 26
                echo "\t\t";
                $context["icon"] = "clock-o";
                // line 27
                echo "\t";
            }
            // line 28
            echo "\t";
            ob_start(function () { return ''; });
            // line 29
            echo "\t\t<span class=\"lfwwh_button_";
            echo ($context["buttontype"] ?? null);
            echo " icon fa-";
            echo ($context["icon"] ?? null);
            echo "\" style=\"opacity: 0.5;\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LFWWH_SHOW_INFO_TOOLTIP");
            echo "\" onclick=\"lfwwhIndex.ShowHide('";
            echo ($context["buttontype"] ?? null);
            echo "')\"></span>
\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@lukewcs_whowashere/who_was_here.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 29,  131 => 28,  128 => 27,  125 => 26,  122 => 25,  119 => 24,  116 => 23,  102 => 22,  94 => 18,  85 => 16,  82 => 15,  73 => 13,  70 => 12,  65 => 10,  58 => 9,  55 => 8,  49 => 6,  47 => 5,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@lukewcs_whowashere/who_was_here.html", "");
    }
}
