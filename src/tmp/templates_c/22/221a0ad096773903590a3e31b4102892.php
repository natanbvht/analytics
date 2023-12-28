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

/* @Marketplace/getNewPluginsAdmin.twig */
class __TwigTemplate_b7b1e643435a205552f761be0dfea3de extends Template
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
        echo "<div vue-entry=\"Marketplace.GetNewPluginsAdmin\" plugins=\"";
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 1, $this->source); })())), "html", null, true);
        echo "\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Marketplace/getNewPluginsAdmin.twig";
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
        return new Source("<div vue-entry=\"Marketplace.GetNewPluginsAdmin\" plugins=\"{{ plugins|json_encode }}\"></div>
", "@Marketplace/getNewPluginsAdmin.twig", "/Users/natanandlacey/source/analytics/src/plugins/Marketplace/templates/getNewPluginsAdmin.twig");
    }
}
