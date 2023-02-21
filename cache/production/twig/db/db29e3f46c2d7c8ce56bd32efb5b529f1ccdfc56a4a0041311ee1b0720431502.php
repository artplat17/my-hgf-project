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

/* @vse_similartopics/similar_topics_32x.html */
class __TwigTemplate_ce8d76284c33803c95f9d818b6a39820852a5fc8962bcd0aaba088419d9e55d6 extends \Twig\Template
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
        // line 2
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "similar", [], "any", false, false, false, 2))) {
            // line 3
            echo "<div class=\"smlrtpcs\">
<div class=\"forumbg\">

\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 10
            echo $this->extensions['phpbb\template\twig\extension']->lang("SIMILAR_TOPICS");
            echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
            // line 11
            echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
            echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
            // line 12
            echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
            echo "</span></dd>
\t\t\t\t\t<dd class=\"lastpost\">";
            // line 13
            echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
            echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">

\t\t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "similar", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["similar"]) {
                // line 20
                echo "\t\t\t";
                // line 21
                echo "\t\t\t<li class=\"row";
                if ((twig_get_attribute($this->env, $this->source, $context["similar"], "S_ROW_COUNT", [], "any", false, false, false, 21) % 2 == 0)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
\t\t\t\t<dl class=\"row-item ";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["similar"], "TOPIC_IMG_STYLE", [], "any", false, false, false, 22);
                echo "\">
\t\t\t\t\t<dt";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["similar"], "TOPIC_ICON_IMG", [], "any", false, false, false, 23)) {
                    echo " class=\"topicicon\" style=\"background-image: url(";
                    echo (($context["T_ICONS_PATH"] ?? null) . twig_get_attribute($this->env, $this->source, $context["similar"], "TOPIC_ICON_IMG", [], "any", false, false, false, 23));
                    echo "); background-repeat: no-repeat; background-position: unset; background-size: 27px;\"";
                }
                echo " title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["similar"], "TOPIC_FOLDER_IMG_ALT", [], "any", false, false, false, 23);
                echo "\">
\t\t\t\t\t\t";
                // line 24
                if ((twig_get_attribute($this->env, $this->source, $context["similar"], "S_UNREAD_TOPIC", [], "any", false, false, false, 24) &&  !($context["S_IS_BOT"] ?? null))) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["similar"], "U_NEWEST_POST", [], "any", false, false, false, 24);
                    echo "\" class=\"row-item-link\"></a>";
                }
                // line 25
                echo "\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t";
                // line 26
                // line 27
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["similar"], "S_UNREAD_TOPIC", [], "any", false, false, false, 27) &&  !($context["S_IS_BOT"] ?? null))) {
                    // line 28
                    echo "\t\t\t\t\t\t\t\t<a class=\"unread\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["similar"], "U_NEWEST_POST", [], "any", false, false, false, 28);
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-circle fa-fw icon-red icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 29
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NEW_POST");
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["similar"], "U_VIEW_TOPIC", [], "any", false, false, false, 32);
                echo "\" class=\"topictitle\">";
                echo twig_get_attribute($this->env, $this->source, $context["similar"], "TOPIC_TITLE", [], "any", false, false, false, 32);
                echo "</a>
\t\t\t\t\t\t\t";
                // line 33
                if ((twig_get_attribute($this->env, $this->source, $context["similar"], "S_TOPIC_UNAPPROVED", [], "any", false, false, false, 33) || twig_get_attribute($this->env, $this->source, $context["similar"], "S_POSTS_UNAPPROVED", [], "any", false, false, false, 33))) {
                    // line 34
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["similar"], "U_MCP_QUEUE", [], "any", false, false, false, 34);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED");
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-circle\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 35
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED");
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["similar"], "S_TOPIC_REPORTED", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["similar"], "U_MCP_REPORT", [], "any", false, false, false, 39);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REPORTED");
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 40
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REPORTED");
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<div class=\"postedin\">";
                // line 44
                echo $this->extensions['phpbb\template\twig\extension']->lang("POSTED");
                echo " ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("IN");
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["similar"], "U_VIEW_FORUM", [], "any", false, false, false, 44);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["similar"], "FORUM_TITLE", [], "any", false, false, false, 44);
                echo "</a></div>
\t\t\t\t\t\t\t";
                // line 45
                // line 46
                echo "
\t\t\t\t\t\t\t<div class=\"topic-poster responsive-show left-box\">
\t\t\t\t\t\t\t\t";
                // line 48
                if (twig_get_attribute($this->env, $this->source, $context["similar"], "S_HAS_POLL", [], "any", false, false, false, 48)) {
                    echo "<i class=\"icon fa-bar-chart fa-fw\" aria-hidden=\"true\"></i>";
                }
                // line 49
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["similar"], "ATTACH_ICON_IMG", [], "any", false, false, false, 49)) {
                    echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i>";
                }
                // line 50
                echo "\t\t\t\t\t\t\t\t";
                // line 51
                echo "\t\t\t\t\t\t\t\t";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                echo " ";
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('dark1_memberavatarstatus', '__main__'));
                $this->env->loadTemplate('@dark1_memberavatarstatus/event/search_results_topic_author_username_prepend.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                echo twig_get_attribute($this->env, $this->source, $context["similar"], "TOPIC_AUTHOR_FULL", [], "any", false, false, false, 51);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('dark1_memberavatarstatus', '__main__'));
                $this->env->loadTemplate('@dark1_memberavatarstatus/event/search_results_topic_author_username_append.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                echo "&nbsp;<div class=\"topictime\"> &raquo; <time datetime=\"";
                echo twig_get_attribute($this->env, $this->source, $context["similar"], "FIRST_POST_TIME_RFC3339", [], "any", false, false, false, 51);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["similar"], "FIRST_POST_TIME", [], "any", false, false, false, 51);
                echo "</time></div> <div class=\"topicin\"> &raquo; ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("IN");
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["similar"], "U_VIEW_FORUM", [], "any", false, false, false, 51);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["similar"], "FORUM_TITLE", [], "any", false, false, false, 51);
                echo "</a></div>
\t\t\t\t\t\t\t\t";
                // line 52
                // line 53
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t

\t\t\t\t\t\t\t";
                // line 56
                if ( !($context["S_IS_BOT"] ?? null)) {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t<div class=\"responsive-show clutter\" style=\"display: none;\">
                                    ";
                    // line 58
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                    echo " ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo " ";
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('dark1_memberavatarstatus', '__main__'));
                    $this->env->loadTemplate('@dark1_memberavatarstatus/event/search_results_last_post_author_username_prepend.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    echo twig_get_attribute($this->env, $this->source, $context["similar"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 58);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('dark1_memberavatarstatus', '__main__'));
                    $this->env->loadTemplate('@dark1_memberavatarstatus/event/search_results_last_post_author_username_append.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    echo " &laquo; <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["similar"], "U_LAST_POST", [], "any", false, false, false, 58);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                    echo "\"><time datetime=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["similar"], "LAST_POST_TIME_RS_RFC3339", [], "any", false, false, false, 58);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["similar"], "LAST_POST_TIME_RS", [], "any", false, false, false, 58);
                    echo "</time></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                }
                // line 62
                echo "\t\t\t\t\t\t\t";
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('gfksx_thanksforposts', '__main__'));
                $this->env->loadTemplate('@gfksx_thanksforposts/event/topiclist_row_append.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('robertheim_topictags', '__main__'));
                $this->env->loadTemplate('@robertheim_topictags/event/topiclist_row_append.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                // line 63
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"responsive-show left-box\">";
                // line 64
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES_T");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " <strong>";
                echo twig_get_attribute($this->env, $this->source, $context["similar"], "TOPIC_REPLIES", [], "any", false, false, false, 64);
                echo "</strong></span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 66
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["similar"], "pagination", [], "any", false, false, false, 66))) {
                    // line 67
                    echo "\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t<span><i class=\"icon fa-clone fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                    // line 70
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["similar"], "pagination", [], "any", false, false, false, 70));
                    foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                        // line 71
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_PREV", [], "any", false, false, false, 71)) {
                            // line 72
                            echo "\t\t\t\t\t\t\t\t\t";
                        } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_CURRENT", [], "any", false, false, false, 72)) {
                            echo "<li class=\"active\"><span>";
                            echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 72);
                            echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 73
$context["pagination"], "S_IS_ELLIPSIS", [], "any", false, false, false, 73)) {
                            echo "<li class=\"ellipsis\"><span>";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                            echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 74
$context["pagination"], "S_IS_NEXT", [], "any", false, false, false, 74)) {
                            // line 75
                            echo "\t\t\t\t\t\t\t\t\t";
                        } else {
                            echo "<li><a class=\"button\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 75);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 75);
                            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 77
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 81
                echo "\t\t\t\t\t\t    
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["similar"], "TOPIC_REPLIES", [], "any", false, false, false, 84);
                echo " <dfn>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                echo "</dfn></dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["similar"], "TOPIC_VIEWS", [], "any", false, false, false, 85);
                echo " <dfn>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
                echo "</dfn></dd>
\t\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t\t<span><dfn>";
                // line 87
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo " </dfn>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                echo " ";
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('dark1_memberavatarstatus', '__main__'));
                $this->env->loadTemplate('@dark1_memberavatarstatus/event/search_results_last_post_author_username_prepend.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                echo twig_get_attribute($this->env, $this->source, $context["similar"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 87);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('dark1_memberavatarstatus', '__main__'));
                $this->env->loadTemplate('@dark1_memberavatarstatus/event/search_results_last_post_author_username_append.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                // line 88
                echo "\t\t\t\t\t\t\t";
                if ( !($context["S_IS_BOT"] ?? null)) {
                    // line 89
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["similar"], "U_LAST_POST", [], "any", false, false, false, 89);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 90
                    echo ($context["VIEW_LATEST_POST"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                // line 93
                echo "\t\t\t\t\t\t\t<br /><time datetime=\"";
                echo twig_get_attribute($this->env, $this->source, $context["similar"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 93);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["similar"], "LAST_POST_TIME", [], "any", false, false, false, 93);
                echo "</time>
\t\t\t\t\t\t</span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                // line 98
                // line 99
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['similar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "\t\t</ul>

\t</div>
</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@vse_similartopics/similar_topics_32x.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 100,  383 => 99,  382 => 98,  371 => 93,  365 => 90,  358 => 89,  355 => 88,  341 => 87,  334 => 85,  328 => 84,  323 => 81,  318 => 78,  312 => 77,  302 => 75,  300 => 74,  294 => 73,  287 => 72,  284 => 71,  280 => 70,  275 => 67,  273 => 66,  265 => 64,  262 => 63,  252 => 62,  225 => 58,  222 => 57,  220 => 56,  215 => 53,  214 => 52,  189 => 51,  187 => 50,  182 => 49,  178 => 48,  174 => 46,  173 => 45,  163 => 44,  160 => 43,  154 => 40,  147 => 39,  144 => 38,  138 => 35,  131 => 34,  129 => 33,  122 => 32,  116 => 29,  111 => 28,  108 => 27,  107 => 26,  104 => 25,  98 => 24,  88 => 23,  84 => 22,  75 => 21,  73 => 20,  69 => 19,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vse_similartopics/similar_topics_32x.html", "");
    }
}
