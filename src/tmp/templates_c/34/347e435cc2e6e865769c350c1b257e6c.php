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

/* @Installation/getSystemCheckWidget.twig */
class __TwigTemplate_7da76e8bfdaaa6ebf4e7654566f55970 extends Template
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
        echo "<div class=\"widgetBody system-check\" vue-directive=\"CoreHome.Tooltips\" vue-directive-value=\"{&quot;show&quot;: {&quot;delay&quot;: 200, &quot;duration&quot;: 100}}\">
    ";
        // line 2
        if (( !(isset($context["numErrors"]) || array_key_exists("numErrors", $context) ? $context["numErrors"] : (function () { throw new RuntimeError('Variable "numErrors" does not exist.', 2, $this->source); })()) &&  !(isset($context["numWarnings"]) || array_key_exists("numWarnings", $context) ? $context["numWarnings"] : (function () { throw new RuntimeError('Variable "numWarnings" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "        <p class=\"system-success\"><span class=\"icon-ok\"></span> ";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_SystemCheckNoErrorsOrWarnings"), "html", null, true);
            echo "</p>
    ";
        }
        // line 5
        echo "
    ";
        // line 6
        if ((isset($context["numErrors"]) || array_key_exists("numErrors", $context) ? $context["numErrors"] : (function () { throw new RuntimeError('Variable "numErrors" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "        <ul>
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["thisResult"]) {
                // line 9
                echo "                ";
                $context["checkItemMessages"] = "";
                // line 10
                echo "                ";
                if ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["thisResult"], "getLongErrorMessage", [], "any", false, false, false, 10)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thisResult"], "getItems", [], "method", false, false, false, 10)) > 1))) {
                    // line 11
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["thisResult"], "getItems", [], "method", false, false, false, 11));
                    foreach ($context['_seq'] as $context["_key"] => $context["checkItem"]) {
                        // line 12
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["checkItem"], "getStatus", [], "any", false, false, false, 12) === "warning")) {
                            // line 13
                            echo "                            ";
                            $context["checkItemMessages"] = (((isset($context["checkItemMessages"]) || array_key_exists("checkItemMessages", $context) ? $context["checkItemMessages"] : (function () { throw new RuntimeError('Variable "checkItemMessages" does not exist.', 13, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["checkItem"], "getComment", [], "method", false, false, false, 13)) . "
");
                            // line 14
                            echo "                        ";
                        }
                        // line 15
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['checkItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "                ";
                }
                // line 17
                echo "                <li title=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_striptags($this->env->getFilter('preg_replace')->getCallable()(_twig_default_filter(((array_key_exists("checkItemMessages", $context)) ? (_twig_default_filter((isset($context["checkItemMessages"]) || array_key_exists("checkItemMessages", $context) ? $context["checkItemMessages"] : (function () { throw new RuntimeError('Variable "checkItemMessages" does not exist.', 17, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["thisResult"], "getLongErrorMessage", [], "any", false, false, false, 17))) : (twig_get_attribute($this->env, $this->source, $context["thisResult"], "getLongErrorMessage", [], "any", false, false, false, 17))), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["thisResult"], "getItems", [], "method", false, false, false, 17), 0, [], "array", false, false, false, 17), "getComment", [], "method", false, false, false, 17)), "/<br.*?>/", "
")), "html", null, true);
                echo "\" class=\"system-check-widget-error\"><span class=\"icon-error\"></span> ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thisResult"], "getLabel", [], "any", false, false, false, 17), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thisResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </ul>
    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if ((isset($context["numWarnings"]) || array_key_exists("numWarnings", $context) ? $context["numWarnings"] : (function () { throw new RuntimeError('Variable "numWarnings" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "        <ul>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["warnings"]) || array_key_exists("warnings", $context) ? $context["warnings"] : (function () { throw new RuntimeError('Variable "warnings" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["thisResult"]) {
                // line 25
                echo "                ";
                $context["checkItemMessages"] = "";
                // line 26
                echo "                ";
                if ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["thisResult"], "getLongErrorMessage", [], "any", false, false, false, 26)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thisResult"], "getItems", [], "method", false, false, false, 26)) > 1))) {
                    // line 27
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["thisResult"], "getItems", [], "method", false, false, false, 27));
                    foreach ($context['_seq'] as $context["_key"] => $context["checkItem"]) {
                        // line 28
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["checkItem"], "getStatus", [], "any", false, false, false, 28) === "warning")) {
                            // line 29
                            echo "                            ";
                            $context["checkItemMessages"] = (((isset($context["checkItemMessages"]) || array_key_exists("checkItemMessages", $context) ? $context["checkItemMessages"] : (function () { throw new RuntimeError('Variable "checkItemMessages" does not exist.', 29, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["checkItem"], "getComment", [], "method", false, false, false, 29)) . "
");
                            // line 30
                            echo "                        ";
                        }
                        // line 31
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['checkItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "                ";
                }
                // line 33
                echo "                <li title=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_striptags($this->env->getFilter('preg_replace')->getCallable()(_twig_default_filter(((array_key_exists("checkItemMessages", $context)) ? (_twig_default_filter((isset($context["checkItemMessages"]) || array_key_exists("checkItemMessages", $context) ? $context["checkItemMessages"] : (function () { throw new RuntimeError('Variable "checkItemMessages" does not exist.', 33, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["thisResult"], "getLongErrorMessage", [], "any", false, false, false, 33))) : (twig_get_attribute($this->env, $this->source, $context["thisResult"], "getLongErrorMessage", [], "any", false, false, false, 33))), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["thisResult"], "getItems", [], "method", false, false, false, 33), 0, [], "array", false, false, false, 33), "getComment", [], "method", false, false, false, 33)), "/<br.*?>/", "
")), "html", null, true);
                echo "\" class=\"system-check-widget-warning\"><span class=\"icon-warning\"></span> ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thisResult"], "getLabel", [], "any", false, false, false, 33), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thisResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </ul>
    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if (((isset($context["numErrors"]) || array_key_exists("numErrors", $context) ? $context["numErrors"] : (function () { throw new RuntimeError('Variable "numErrors" does not exist.', 38, $this->source); })()) || (isset($context["numWarnings"]) || array_key_exists("numWarnings", $context) ? $context["numWarnings"] : (function () { throw new RuntimeError('Variable "numWarnings" does not exist.', 38, $this->source); })()))) {
            // line 39
            echo "        <p>
            <br />
            <a href=\"";
            // line 41
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "Installation", "action" => "systemCheckPage"]), "html", null, true);
            echo "\"
               >";
            // line 42
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_SystemCheckViewFullSystemCheck"), "html", null, true);
            echo "</a>
        </p>
    ";
        }
        // line 45
        echo "</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Installation/getSystemCheckWidget.twig";
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
        return array (  183 => 45,  177 => 42,  173 => 41,  169 => 39,  167 => 38,  164 => 37,  160 => 35,  148 => 33,  145 => 32,  139 => 31,  136 => 30,  132 => 29,  129 => 28,  124 => 27,  121 => 26,  118 => 25,  114 => 24,  111 => 23,  109 => 22,  106 => 21,  102 => 19,  90 => 17,  87 => 16,  81 => 15,  78 => 14,  74 => 13,  71 => 12,  66 => 11,  63 => 10,  60 => 9,  56 => 8,  53 => 7,  51 => 6,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widgetBody system-check\" vue-directive=\"CoreHome.Tooltips\" vue-directive-value=\"{&quot;show&quot;: {&quot;delay&quot;: 200, &quot;duration&quot;: 100}}\">
    {% if not numErrors and not numWarnings %}
        <p class=\"system-success\"><span class=\"icon-ok\"></span> {{ 'Installation_SystemCheckNoErrorsOrWarnings'|translate }}</p>
    {% endif %}

    {% if numErrors %}
        <ul>
            {% for thisResult in errors %}
                {% set checkItemMessages = '' %}
                {% if thisResult.getLongErrorMessage is empty and thisResult.getItems()|length > 1 %}
                    {% for checkItem in thisResult.getItems() %}
                        {% if checkItem.getStatus is same as('warning') %}
                            {% set checkItemMessages = checkItemMessages ~ checkItem.getComment() ~ \"\\n\" %}
                        {% endif %}
                    {% endfor %}
                {% endif %}
                <li title=\"{{ checkItemMessages|default(thisResult.getLongErrorMessage)|default(thisResult.getItems()[0].getComment())|preg_replace('/<br.*?>/', \"\\n\")|striptags }}\" class=\"system-check-widget-error\"><span class=\"icon-error\"></span> {{ thisResult.getLabel }}</li>
            {% endfor %}
        </ul>
    {% endif %}

    {% if numWarnings %}
        <ul>
            {% for thisResult in warnings %}
                {% set checkItemMessages = '' %}
                {% if thisResult.getLongErrorMessage is empty and thisResult.getItems()|length > 1 %}
                    {% for checkItem in thisResult.getItems() %}
                        {% if checkItem.getStatus is same as('warning') %}
                            {% set checkItemMessages = checkItemMessages ~ checkItem.getComment() ~ \"\\n\" %}
                        {% endif %}
                    {% endfor %}
                {% endif %}
                <li title=\"{{ checkItemMessages|default(thisResult.getLongErrorMessage)|default(thisResult.getItems()[0].getComment())|preg_replace('/<br.*?>/', \"\\n\")|striptags }}\" class=\"system-check-widget-warning\"><span class=\"icon-warning\"></span> {{ thisResult.getLabel }}</li>
            {% endfor %}
        </ul>
    {% endif %}

    {% if numErrors or numWarnings %}
        <p>
            <br />
            <a href=\"{{ linkTo({'module': 'Installation', 'action': 'systemCheckPage'}) }}\"
               >{{ 'Installation_SystemCheckViewFullSystemCheck'|translate }}</a>
        </p>
    {% endif %}
</div>", "@Installation/getSystemCheckWidget.twig", "/Users/natanandlacey/source/analytics/src/plugins/Installation/templates/getSystemCheckWidget.twig");
    }
}
