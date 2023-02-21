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

/* @lukewcs_whowashere/event/index_body_online_block_after.html */
class __TwigTemplate_277d997ed49d21f25d7fe3051e9db204258f1795e27c3123fc0188a5451176ce extends \Twig\Template
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
        if ((((($context["LFWWH_TOTAL"] ?? null) || ($context["LFWWH_USERS"] ?? null)) &&  !($context["LFWWH_API_MODE"] ?? null)) && (($context["LFWWH_POS"] ?? null) & 1))) {
            // line 2
            echo "\t";
            if ((($context["LFWWH_POS"] ?? null) == 7)) {
                // line 3
                echo "\t\t";
                $context["lfwwh_pos_hint"] = $this->extensions['phpbb\template\twig\extension']->lang("LFWWH_TEMPLATE_POS_TOP");
                // line 4
                echo "\t";
            }
            // line 5
            echo "\t";
            $location = "@lukewcs_whowashere/who_was_here.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("@lukewcs_whowashere/who_was_here.html", "@lukewcs_whowashere/event/index_body_online_block_after.html", 5)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "@lukewcs_whowashere/event/index_body_online_block_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@lukewcs_whowashere/event/index_body_online_block_after.html", "");
    }
}
