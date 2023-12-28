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

/* @Live/index.twig */
class __TwigTemplate_67dd9974e5c720c78cc8e6a8dd5251b0 extends Template
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
        echo "<div
    vue-entry=\"Live.LivePage\"
    disable-link=\"";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, json_encode(_twig_default_filter(((isset($context["disableLink"]) || array_key_exists("disableLink", $context) ? $context["disableLink"] : (function () { throw new RuntimeError('Variable "disableLink" does not exist.', 3, $this->source); })()) == 1), null)), "html", null, true);
        echo "\"
    visitors=\"";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("visitors", $context)) ? (_twig_default_filter((isset($context["visitors"]) || array_key_exists("visitors", $context) ? $context["visitors"] : (function () { throw new RuntimeError('Variable "visitors" does not exist.', 4, $this->source); })()), null)) : (null))), "html", null, true);
        echo "\"
    initial-total-visitors=\"";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("initialTotalVisitors", $context)) ? (_twig_default_filter((isset($context["initialTotalVisitors"]) || array_key_exists("initialTotalVisitors", $context) ? $context["initialTotalVisitors"] : (function () { throw new RuntimeError('Variable "initialTotalVisitors" does not exist.', 5, $this->source); })()), null)) : (null))), "html", null, true);
        echo "\"
    live-refresh-after-ms=\"";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("liveRefreshAfterMs", $context)) ? (_twig_default_filter((isset($context["liveRefreshAfterMs"]) || array_key_exists("liveRefreshAfterMs", $context) ? $context["liveRefreshAfterMs"] : (function () { throw new RuntimeError('Variable "liveRefreshAfterMs" does not exist.', 6, $this->source); })()), null)) : (null))), "html", null, true);
        echo "\"
    is-widgetized=\"";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, json_encode(_twig_default_filter(((isset($context["isWidgetized"]) || array_key_exists("isWidgetized", $context) ? $context["isWidgetized"] : (function () { throw new RuntimeError('Variable "isWidgetized" does not exist.', 7, $this->source); })()) == 1), null)), "html", null, true);
        echo "\"
></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Live/index.twig";
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
        return array (  57 => 7,  53 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
    vue-entry=\"Live.LivePage\"
    disable-link=\"{{ (disableLink == 1)|default(null)|json_encode }}\"
    visitors=\"{{ visitors|default(null)|json_encode }}\"
    initial-total-visitors=\"{{ initialTotalVisitors|default(null)|json_encode }}\"
    live-refresh-after-ms=\"{{ liveRefreshAfterMs|default(null)|json_encode }}\"
    is-widgetized=\"{{ (isWidgetized == 1)|default(null)|json_encode }}\"
></div>
", "@Live/index.twig", "/Users/natanandlacey/source/analytics/src/plugins/Live/templates/index.twig");
    }
}
