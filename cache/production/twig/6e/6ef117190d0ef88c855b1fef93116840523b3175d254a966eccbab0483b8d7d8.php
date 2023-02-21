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

/* forumlist_grid_icons.html */
class __TwigTemplate_55a6f6da1b67317723976c4d1435fc1e87819659d3ce110fa24e81f9088da300 extends \Twig\Template
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
        echo "<div class=\"forumlist_grid_icons\">

\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "forumrow", [], "any", false, false, false, 3));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 4
            echo "\t
\t\t";
            // line 5
            if (((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 5) &&  !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FIRST_ROW", [], "any", false, false, false, 5)) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_NO_CAT", [], "any", false, false, false, 5))) {
                // line 6
                echo "\t\t\t\t</ul>
\t
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 11
            echo "\t
\t\t";
            // line 12
            // line 13
            echo "\t\t";
            if (((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 13) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FIRST_ROW", [], "any", false, false, false, 13)) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_NO_CAT", [], "any", false, false, false, 13))) {
                // line 14
                echo "\t
\t\t";
                // line 15
                // line 16
                echo "\t\t<span class=\"grid_cat_title\">
\t\t";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 18);
                    echo "\" class=\"cat_title\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 18);
                    echo "</a>
\t\t";
                }
                // line 20
                echo "\t\t</span>
\t\t";
                // line 21
                // line 22
                echo "\t
\t\t\t<div class=\"forabg\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t<ul class=\"topiclist forums\">
\t\t";
            }
            // line 27
            echo "\t\t";
            // line 28
            echo "\t
\t\t";
            // line 29
            if ( !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 29)) {
                // line 30
                echo "\t\t\t";
                // line 31
                echo "\t\t\t<li class=\"row";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "AVATAR_IMG", [], "any", false, false, false, 31)) {
                    echo " has_last_post_avatar";
                }
                echo "\">
\t\t\t\t";
                // line 32
                // line 33
                echo "\t
\t\t\t\t<div class=\"grid_image_container\">
\t
\t\t\t\t\t\t<a href=\"";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 36);
                echo "\" class=\"tile_inner\">
\t
\t\t\t\t\t\t\t<div class=\"tile_row_1 tile_has_icon\" ";
                // line 38
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 38)) {
                    echo "style=\"background-image: url('";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE_SRC", [], "any", false, false, false, 38);
                    echo "');\"";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"tile_title\">
\t
\t\t\t\t\t\t\t\t\t\t";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 41);
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 42
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_UNREAD_FORUM", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa fa-check tooltip icon-green\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("UNREAD_POSTS");
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 45)) {
                    echo "<span class=\"forum_description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 45);
                    echo "</span> ";
                }
                // line 46
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t\t<div class=\"tile_row_2\">
\t\t\t\t\t\t\t\t";
                // line 50
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "\t\t\t\t\t\t\t\t<div class=\"tile_row_100\">
\t\t\t\t\t\t\t\t\t<span class=\"mini_number\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 53
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 53);
                    echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"mini_label\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 56
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REDIRECTS");
                    echo "
\t\t\t\t\t\t\t\t\t</span>
\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"tile_row_25\">
\t\t\t\t\t\t\t\t\t\t<span class=\"mini_number\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 63
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 63);
                    echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"mini_label\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 66
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                    echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tile_row_25\">
\t\t\t\t\t\t\t\t\t\t<span class=\"mini_number\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 71
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "POSTS", [], "any", false, false, false, 71);
                    echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"mini_label\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 74
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                    echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    // line 77
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 77)) {
                        // line 78
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"tile_row_50\">
\t\t\t\t\t\t\t\t\t\t<span class=\"mini_date\">
\t\t\t\t\t\t\t\t\t\t\t<time datetime=\"";
                        // line 80
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 80);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 80);
                        echo "</time>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"mini_label\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 83
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST_MAIN");
                        echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 87
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 88
                echo "\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t</a>
\t
\t\t\t\t</div>
\t
\t\t\t\t";
                // line 94
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('gfksx_thanksforposts', '__main__'));
                $this->env->loadTemplate('@gfksx_thanksforposts/event/forumlist_body_forum_row_append.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                // line 95
                echo "\t\t\t</li>
\t\t\t";
                // line 96
                // line 97
                echo "\t\t";
            }
            // line 98
            echo "\t
\t\t";
            // line 99
            if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_LAST_ROW", [], "any", false, false, false, 99)) {
                // line 100
                echo "\t\t\t\t</ul>
\t
\t\t\t\t</div>
\t\t\t</div>
\t\t";
                // line 104
                // line 105
                echo "\t\t";
            }
            // line 106
            echo "\t
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 108
            echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
            // line 110
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_FORUMS");
            echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "\t
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "forumlist_grid_icons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 114,  274 => 110,  270 => 108,  264 => 106,  261 => 105,  260 => 104,  254 => 100,  252 => 99,  249 => 98,  246 => 97,  245 => 96,  242 => 95,  237 => 94,  229 => 88,  226 => 87,  219 => 83,  211 => 80,  207 => 78,  205 => 77,  199 => 74,  193 => 71,  185 => 66,  179 => 63,  175 => 61,  167 => 56,  161 => 53,  157 => 51,  155 => 50,  149 => 46,  142 => 45,  136 => 43,  134 => 42,  130 => 41,  120 => 38,  115 => 36,  110 => 33,  109 => 32,  102 => 31,  100 => 30,  98 => 29,  95 => 28,  93 => 27,  86 => 22,  85 => 21,  82 => 20,  74 => 18,  72 => 17,  69 => 16,  68 => 15,  65 => 14,  62 => 13,  61 => 12,  58 => 11,  51 => 6,  49 => 5,  46 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forumlist_grid_icons.html", "");
    }
}
