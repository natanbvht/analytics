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

/* @Marketplace/getPremiumFeatures.twig */
class __TwigTemplate_1fa4cf5e706e974186026fd2cfcf5cde extends Template
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
        echo "<div vue-entry=\"Marketplace.GetPremiumFeatures\" plugins=\"";
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 1, $this->source); })())), "html", null, true);
        echo "\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Marketplace/getPremiumFeatures.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div vue-entry=\"Marketplace.GetPremiumFeatures\" plugins=\"{{ plugins|json_encode }}\"></div>
", "@Marketplace/getPremiumFeatures.twig", "/Users/natanandlacey/source/analytics/src/plugins/Marketplace/templates/getPremiumFeatures.twig");
    }
}
