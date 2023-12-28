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

/* @CoreVisualizations/macros.twig */
class __TwigTemplate_e4651812ab22cf08f47a75cff268429a extends Template
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
        echo "
";
        // line 22
        echo "
";
    }

    // line 2
    public function macro_sparklineEvolution($__evolution__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "evolution" => $__evolution__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "    ";
            $context["isLowerValueBetter"] = ((twig_get_attribute($this->env, $this->source, ($context["evolution"] ?? null), "isLowerValueBetter", [], "any", true, true, false, 3)) ? (twig_get_attribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 3, $this->source); })()), "isLowerValueBetter", [], "any", false, false, false, 3)) : (false));
            // line 4
            echo "    ";
            $context["evolutionPretty"] = twig_get_attribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 4, $this->source); })()), "percent", [], "any", false, false, false, 4);
            // line 5
            echo "    ";
            $context["compareValue"] = ((twig_get_attribute($this->env, $this->source, ($context["evolution"] ?? null), "trend", [], "any", true, true, false, 5)) ? (twig_get_attribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 5, $this->source); })()), "trend", [], "any", false, false, false, 5)) : (twig_get_attribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 5, $this->source); })()), "percent", [], "any", false, false, false, 5)));
            // line 6
            echo "    ";
            if (((isset($context["compareValue"]) || array_key_exists("compareValue", $context) ? $context["compareValue"] : (function () { throw new RuntimeError('Variable "compareValue" does not exist.', 6, $this->source); })()) < 0)) {
                // line 7
                echo "        ";
                $context["evolutionClass"] = (((isset($context["isLowerValueBetter"]) || array_key_exists("isLowerValueBetter", $context) ? $context["isLowerValueBetter"] : (function () { throw new RuntimeError('Variable "isLowerValueBetter" does not exist.', 7, $this->source); })())) ? ("positive-evolution") : ("negative-evolution"));
                // line 8
                echo "        ";
                $context["evolutionIcon"] = (((isset($context["isLowerValueBetter"]) || array_key_exists("isLowerValueBetter", $context) ? $context["isLowerValueBetter"] : (function () { throw new RuntimeError('Variable "isLowerValueBetter" does not exist.', 8, $this->source); })())) ? ("arrow_down_green.png") : ("arrow_down.png"));
                // line 9
                echo "    ";
            } elseif ((((isset($context["compareValue"]) || array_key_exists("compareValue", $context) ? $context["compareValue"] : (function () { throw new RuntimeError('Variable "compareValue" does not exist.', 9, $this->source); })()) == 0) || ((isset($context["compareValue"]) || array_key_exists("compareValue", $context) ? $context["compareValue"] : (function () { throw new RuntimeError('Variable "compareValue" does not exist.', 9, $this->source); })()) == "0%"))) {
                // line 10
                echo "        ";
                $context["evolutionClass"] = "neutral-evolution";
                // line 11
                echo "        ";
                $context["evolutionIcon"] = "stop.png";
                // line 12
                echo "    ";
            } else {
                // line 13
                echo "        ";
                $context["evolutionClass"] = (((isset($context["isLowerValueBetter"]) || array_key_exists("isLowerValueBetter", $context) ? $context["isLowerValueBetter"] : (function () { throw new RuntimeError('Variable "isLowerValueBetter" does not exist.', 13, $this->source); })())) ? ("negative-evolution") : ("positive-evolution"));
                // line 14
                echo "        ";
                $context["evolutionIcon"] = (((isset($context["isLowerValueBetter"]) || array_key_exists("isLowerValueBetter", $context) ? $context["isLowerValueBetter"] : (function () { throw new RuntimeError('Variable "isLowerValueBetter" does not exist.', 14, $this->source); })())) ? ("arrow_up_red.png") : ("arrow_up.png"));
                // line 15
                echo "        ";
                $context["evolutionPretty"] = ("+" . twig_get_attribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 15, $this->source); })()), "percent", [], "any", false, false, false, 15));
                // line 16
                echo "    ";
            }
            // line 17
            echo "
    <span class=\"metricEvolution\" title=\"";
            // line 18
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('rawSafeDecoded')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 18, $this->source); })()), "tooltip", [], "any", false, false, false, 18)), "html_attr");
            echo "\">
    <img style=\"padding-right:4px\" src=\"plugins/MultiSites/images/";
            // line 19
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["evolutionIcon"]) || array_key_exists("evolutionIcon", $context) ? $context["evolutionIcon"] : (function () { throw new RuntimeError('Variable "evolutionIcon" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" alt=\"\" />
    <strong class=\"";
            // line 20
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["evolutionClass"]) || array_key_exists("evolutionClass", $context) ? $context["evolutionClass"] : (function () { throw new RuntimeError('Variable "evolutionClass" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\" aria-hidden=\"true\">";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["evolutionPretty"]) || array_key_exists("evolutionPretty", $context) ? $context["evolutionPretty"] : (function () { throw new RuntimeError('Variable "evolutionPretty" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "</strong></span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 23
    public function macro_singleSparkline($__sparkline__ = null, $__allMetricsDocumentation__ = null, $__areSparklinesLinkable__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "sparkline" => $__sparkline__,
            "allMetricsDocumentation" => $__allMetricsDocumentation__,
            "areSparklinesLinkable" => $__areSparklinesLinkable__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 24
            echo "
    <div class=\"sparkline ";
            // line 25
            if ((array_key_exists("areSparklinesLinkable", $context) &&  !(isset($context["areSparklinesLinkable"]) || array_key_exists("areSparklinesLinkable", $context) ? $context["areSparklinesLinkable"] : (function () { throw new RuntimeError('Variable "areSparklinesLinkable" does not exist.', 25, $this->source); })()))) {
                echo "notLinkable";
            }
            echo "\"
         ";
            // line 26
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "seriesIndices", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "seriesIndices", [], "any", false, false, false, 26))) : ("")))) {
                echo "data-series-indices=\"";
                echo \Piwik\piwik_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 26, $this->source); })()), "seriesIndices", [], "any", false, false, false, 26)), "html_attr");
                echo "\"";
            }
            // line 27
            echo "         ";
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "graphParams", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "graphParams", [], "any", false, false, false, 27))) : ("")))) {
                echo "data-graph-params=\"";
                echo \Piwik\piwik_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 27, $this->source); })()), "graphParams", [], "any", false, false, false, 27)), "html_attr");
                echo "\"";
            }
            // line 28
            echo "    >
        <div
            ";
            // line 30
            if (((twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "tooltip", [], "any", true, true, false, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "tooltip", [], "any", false, false, false, 30))) : (""))) {
                echo "title=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 30, $this->source); })()), "tooltip", [], "any", false, false, false, 30), "html_attr");
                echo "\"";
            }
            // line 31
            echo "        >
            ";
            // line 32
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "title", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "title", [], "any", false, false, false, 32))) : ("")))) {
                echo "<h6 class=\"sparkline-title\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('rawSafeDecoded')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32)), "html_attr");
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32), "html", null, true);
                echo "</h6>";
            }
            // line 33
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 33, $this->source); })()), "url", [], "any", false, false, false, 33)) {
                echo $this->env->getFunction('sparkline')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 33, $this->source); })()), "url", [], "any", false, false, false, 33));
            }
            // line 34
            echo "        </div>
\t<div>
        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 36, $this->source); })()), "metrics", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["groupName"] => $context["group"]) {
                // line 37
                echo "            ";
                if ( !twig_test_empty($context["groupName"])) {
                    echo "<span class=\"metric-group-title\">";
                    echo \Piwik\piwik_escape_filter($this->env, $context["groupName"], "html", null, true);
                    echo "</span>";
                }
                // line 38
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["group"]);
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["metric"]) {
                    // line 39
                    echo "                <span class=\"sparkline-metrics\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["allMetricsDocumentation"] ?? null), twig_get_attribute($this->env, $this->source, $context["metric"], "column", [], "any", false, false, false, 39), [], "array", true, true, false, 39) && twig_get_attribute($this->env, $this->source, (isset($context["allMetricsDocumentation"]) || array_key_exists("allMetricsDocumentation", $context) ? $context["allMetricsDocumentation"] : (function () { throw new RuntimeError('Variable "allMetricsDocumentation" does not exist.', 39, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["metric"], "column", [], "any", false, false, false, 39), [], "array", false, false, false, 39))) {
                        echo "title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["allMetricsDocumentation"]) || array_key_exists("allMetricsDocumentation", $context) ? $context["allMetricsDocumentation"] : (function () { throw new RuntimeError('Variable "allMetricsDocumentation" does not exist.', 39, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["metric"], "column", [], "any", false, false, false, 39), [], "array", false, false, false, 39), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                ";
                    // line 40
                    if (twig_in_filter("%s", twig_get_attribute($this->env, $this->source, $context["metric"], "description", [], "any", false, false, false, 40))) {
                        // line 41
                        echo $this->env->getFilter('translate')->getCallable()(twig_get_attribute($this->env, $this->source, $context["metric"], "description", [], "any", false, false, false, 41), (("<strong>" . $this->env->getFilter('number')->getCallable()(twig_get_attribute($this->env, $this->source, $context["metric"], "value", [], "any", false, false, false, 41), 2)) . "</strong>"));
                    } else {
                        // line 43
                        echo "                    <strong>";
                        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('number')->getCallable()(twig_get_attribute($this->env, $this->source, $context["metric"], "value", [], "any", false, false, false, 43), 2), "html", null, true);
                        echo "</strong> ";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metric"], "description", [], "any", false, false, false, 43), "html", null, true);
                    }
                    // line 44
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 44)) {
                        echo ", ";
                    }
                    // line 45
                    echo "                </span>
                ";
                    // line 46
                    if (twig_get_attribute($this->env, $this->source, $context["metric"], "evolution", [], "any", true, true, false, 46)) {
                        // line 47
                        echo "                    ";
                        echo twig_call_macro($macros["_self"], "macro_sparklineEvolution", [twig_get_attribute($this->env, $this->source, $context["metric"], "evolution", [], "any", false, false, false, 47)], 47, $context, $this->getSourceContext());
                        echo "
                ";
                    }
                    // line 49
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metric'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['groupName'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "evolution", [], "any", true, true, false, 51)) {
                // line 52
                echo "            ";
                echo twig_call_macro($macros["_self"], "macro_sparklineEvolution", [twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 52, $this->source); })()), "evolution", [], "any", false, false, false, 52)], 52, $context, $this->getSourceContext());
                echo "
        ";
            }
            // line 54
            echo "\t</div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreVisualizations/macros.twig";
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
        return array (  285 => 54,  279 => 52,  276 => 51,  270 => 50,  256 => 49,  250 => 47,  248 => 46,  245 => 45,  241 => 44,  235 => 43,  232 => 41,  230 => 40,  221 => 39,  203 => 38,  196 => 37,  192 => 36,  188 => 34,  183 => 33,  175 => 32,  172 => 31,  166 => 30,  162 => 28,  155 => 27,  149 => 26,  143 => 25,  140 => 24,  125 => 23,  112 => 20,  108 => 19,  104 => 18,  101 => 17,  98 => 16,  95 => 15,  92 => 14,  89 => 13,  86 => 12,  83 => 11,  80 => 10,  77 => 9,  74 => 8,  71 => 7,  68 => 6,  65 => 5,  62 => 4,  59 => 3,  46 => 2,  41 => 22,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% macro sparklineEvolution(evolution) %}
    {% set isLowerValueBetter = evolution.isLowerValueBetter is defined ? evolution.isLowerValueBetter : false %}
    {% set evolutionPretty = evolution.percent %}
    {% set compareValue = evolution.trend is defined ? evolution.trend : evolution.percent %}
    {% if compareValue < 0 %}
        {% set evolutionClass = isLowerValueBetter ? 'positive-evolution' : 'negative-evolution' %}
        {% set evolutionIcon  = isLowerValueBetter ? 'arrow_down_green.png' : 'arrow_down.png' %}
    {% elseif compareValue == 0 or compareValue == '0%' %}
        {% set evolutionClass = 'neutral-evolution' %}
        {% set evolutionIcon  = 'stop.png' %}
    {% else %}
        {% set evolutionClass = isLowerValueBetter ? 'negative-evolution' : 'positive-evolution' %}
        {% set evolutionIcon  = isLowerValueBetter ? 'arrow_up_red.png' : 'arrow_up.png' %}
        {% set evolutionPretty = '+' ~ evolution.percent %}
    {% endif %}

    <span class=\"metricEvolution\" title=\"{{ evolution.tooltip|rawSafeDecoded|e('html_attr') }}\">
    <img style=\"padding-right:4px\" src=\"plugins/MultiSites/images/{{ evolutionIcon }}\" alt=\"\" />
    <strong class=\"{{ evolutionClass }}\" aria-hidden=\"true\">{{ evolutionPretty }}</strong></span>
{% endmacro %}

{% macro singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) %}

    <div class=\"sparkline {% if areSparklinesLinkable is defined and not areSparklinesLinkable %}notLinkable{% endif %}\"
         {% if sparkline.seriesIndices|default is not empty %}data-series-indices=\"{{ sparkline.seriesIndices|json_encode|e('html_attr') }}\"{% endif %}
         {% if sparkline.graphParams|default is not empty %}data-graph-params=\"{{ sparkline.graphParams|json_encode|e('html_attr') }}\"{% endif %}
    >
        <div
            {% if sparkline.tooltip|default %}title=\"{{ sparkline.tooltip|e('html_attr') }}\"{% endif %}
        >
            {% if sparkline.title|default is not empty %}<h6 class=\"sparkline-title\" title=\"{{ sparkline.title|rawSafeDecoded|e('html_attr') }}\">{{ sparkline.title }}</h6>{% endif %}
            {% if sparkline.url %}{{ sparkline(sparkline.url)|raw }}{% endif %}
        </div>
\t<div>
        {% for groupName, group in sparkline.metrics %}
            {% if groupName is not empty %}<span class=\"metric-group-title\">{{ groupName }}</span>{% endif %}
            {% for metric in group %}
                <span class=\"sparkline-metrics\" {% if allMetricsDocumentation[metric.column] is defined and allMetricsDocumentation[metric.column] %}title=\"{{ allMetricsDocumentation[metric.column] }}\"{% endif %}>
                {% if '%s' in metric.description -%}
                    {{ metric.description|translate(\"<strong>\"~metric.value|number(2)~\"</strong>\")|raw }}
                {%- else %}
                    <strong>{{ metric.value|number(2) }}</strong> {{ metric.description }}
                {%- endif %}{% if not loop.last %}, {% endif %}
                </span>
                {% if metric.evolution is defined %}
                    {{ _self.sparklineEvolution(metric.evolution) }}
                {% endif %}
            {% endfor %}
        {% endfor %}
        {% if sparkline.evolution is defined %}
            {{ _self.sparklineEvolution(sparkline.evolution) }}
        {% endif %}
\t</div>
    </div>
{% endmacro %}
", "@CoreVisualizations/macros.twig", "/Users/natanandlacey/source/analytics/src/plugins/CoreVisualizations/templates/macros.twig");
    }
}
