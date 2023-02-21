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

/* @david63_registrationage/event/viewtopic_body_postrow_custom_fields_before.html */
class __TwigTemplate_33c3bce9e96cb435d584700b22c634da5801c197eb8f467255cb102a9776dc16 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POSTER_AGE", [], "any", false, false, false, 1) && (($context["U_SHOW_AGE_ON_PROFILE"] ?? null) || ($context["U_IS_ADMIN"] ?? null)))) {
            // line 2
            echo "\t<dd class=\"profile-joined\"><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AGE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "POSTER_AGE", [], "any", false, false, false, 2);
            echo "</strong></dd>
";
        }
    }

    public function getTemplateName()
    {
        return "@david63_registrationage/event/viewtopic_body_postrow_custom_fields_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@david63_registrationage/event/viewtopic_body_postrow_custom_fields_before.html", "");
    }
}
