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

/* @Live/_totalVisitors.twig */
class __TwigTemplate_30c2ef65200d6a702b4e099e5e62b467 extends Template
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
        echo "<div id=\"visitsTotal\">
    <div
        vue-entry=\"Live.TotalVisitors\"
        count-error-today=\"";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("countErrorToday", $context)) ? (_twig_default_filter((isset($context["countErrorToday"]) || array_key_exists("countErrorToday", $context) ? $context["countErrorToday"] : (function () { throw new RuntimeError('Variable "countErrorToday" does not exist.', 4, $this->source); })()), null)) : (null))), "html", null, true);
        echo "\"
        visitors-count-today=\"";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, json_encode(_twig_default_filter(((isset($context["visitorsCountToday"]) || array_key_exists("visitorsCountToday", $context) ? $context["visitorsCountToday"] : (function () { throw new RuntimeError('Variable "visitorsCountToday" does not exist.', 5, $this->source); })()) + 0), null)), "html", null, true);
        echo "\"
        pis-today=\"";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("pisToday", $context)) ? (_twig_default_filter((isset($context["pisToday"]) || array_key_exists("pisToday", $context) ? $context["pisToday"] : (function () { throw new RuntimeError('Variable "pisToday" does not exist.', 6, $this->source); })()), null)) : (null))), "html", null, true);
        echo "\"
        count-error-half-hour=\"";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("countErrorHalfHour", $context)) ? (_twig_default_filter((isset($context["countErrorHalfHour"]) || array_key_exists("countErrorHalfHour", $context) ? $context["countErrorHalfHour"] : (function () { throw new RuntimeError('Variable "countErrorHalfHour" does not exist.', 7, $this->source); })()), null)) : (null))), "html", null, true);
        echo "\"
        visitors-count-half-hour=\"";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, json_encode(_twig_default_filter(((isset($context["visitorsCountHalfHour"]) || array_key_exists("visitorsCountHalfHour", $context) ? $context["visitorsCountHalfHour"] : (function () { throw new RuntimeError('Variable "visitorsCountHalfHour" does not exist.', 8, $this->source); })()) + 0), null)), "html", null, true);
        echo "\"
        pis-halfhour=\"";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("pisHalfhour", $context)) ? (_twig_default_filter((isset($context["pisHalfhour"]) || array_key_exists("pisHalfhour", $context) ? $context["pisHalfhour"] : (function () { throw new RuntimeError('Variable "pisHalfhour" does not exist.', 9, $this->source); })()), null)) : (null))), "html", null, true);
        echo "\"
    ></div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Live/_totalVisitors.twig";
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
        return array (  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"visitsTotal\">
    <div
        vue-entry=\"Live.TotalVisitors\"
        count-error-today=\"{{ countErrorToday|default(null)|json_encode }}\"
        visitors-count-today=\"{{ (visitorsCountToday + 0)|default(null)|json_encode }}\"
        pis-today=\"{{ pisToday|default(null)|json_encode }}\"
        count-error-half-hour=\"{{ countErrorHalfHour|default(null)|json_encode }}\"
        visitors-count-half-hour=\"{{ (visitorsCountHalfHour + 0)|default(null)|json_encode }}\"
        pis-halfhour=\"{{ pisHalfhour|default(null)|json_encode }}\"
    ></div>
</div>
", "@Live/_totalVisitors.twig", "/Users/natanandlacey/source/analytics/src/plugins/Live/templates/_totalVisitors.twig");
    }
}
