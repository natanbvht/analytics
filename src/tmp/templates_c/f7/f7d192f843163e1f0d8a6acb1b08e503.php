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

/* dashboard.twig */
class __TwigTemplate_9614baf358da11ca7f90e5b0e78a872d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'pageDescription' => [$this, 'block_pageDescription'],
            'body' => [$this, 'block_body'],
            'root' => [$this, 'block_root'],
            'topcontrols' => [$this, 'block_topcontrols'],
            'notification' => [$this, 'block_notification'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        ob_start();
        echo (isset($context["siteName"]) || array_key_exists("siteName", $context) ? $context["siteName"] : (function () { throw new RuntimeError('Variable "siteName" does not exist.', 7, $this->source); })());
        echo " - ";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_WebAnalyticsReports"), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        $context["bodyClass"] = $this->env->getFunction('postEvent')->getCallable()("Template.bodyClass", "dashboard");
        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "dashboard.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_pageDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Web Analytics report for ";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["siteName"]) || array_key_exists("siteName", $context) ? $context["siteName"] : (function () { throw new RuntimeError('Variable "siteName" does not exist.', 9, $this->source); })()), "html_attr");
        echo " - Matomo";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        echo $this->env->getFunction('postEvent')->getCallable()("Template.header", "dashboard");
        echo "
    ";
        // line 15
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 16
        echo $this->env->getFunction('postEvent')->getCallable()("Template.footer", "dashboard");
        echo "
";
    }

    // line 19
    public function block_root($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "dashboard.twig", 20)->display($context);
        // line 21
        echo "    ";
        $this->loadTemplate("@CoreHome/_topScreen.twig", "dashboard.twig", 21)->display($context);
        // line 22
        echo "
    <div class=\"top_controls\">
        <div vue-entry=\"CoreHome.QuickAccess\" class=\"piwikTopControl borderedControl\"></div>
        ";
        // line 25
        $this->displayBlock('topcontrols', $context, $blocks);
        // line 27
        echo "
    </div>

    <div class=\"ui-confirm\" id=\"alert\">
        <h2></h2>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 32
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Ok"), "html", null, true);
        echo "\"/>
    </div>

    ";
        // line 35
        echo $this->env->getFunction('postEvent')->getCallable()("Template.beforeContent", "dashboard", (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 35, $this->source); })()), (isset($context["currentAction"]) || array_key_exists("currentAction", $context) ? $context["currentAction"] : (function () { throw new RuntimeError('Variable "currentAction" does not exist.', 35, $this->source); })()));
        echo "

    <div class=\"page\">

        ";
        // line 39
        if ((array_key_exists("showMenu", $context) && (isset($context["showMenu"]) || array_key_exists("showMenu", $context) ? $context["showMenu"] : (function () { throw new RuntimeError('Variable "showMenu" does not exist.', 39, $this->source); })()))) {
            // line 40
            echo "            <div id=\"secondNavBar\" class=\"Menu--dashboard z-depth-1\">
                <div vue-entry=\"CoreHome.ReportingMenu\"></div>
            </div>
        ";
        }
        // line 44
        echo "
        <div class=\"pageWrap\">

            <a name=\"main\"></a>
            ";
        // line 48
        $this->displayBlock('notification', $context, $blocks);
        // line 51
        echo "
            <div vue-entry=\"CoreHome.Comparisons\"></div>

            ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "
            <div class=\"clear\"></div>
        </div>

    </div>

";
        // line 62
        if ((array_key_exists("whatisnewShow", $context) && (isset($context["whatisnewShow"]) || array_key_exists("whatisnewShow", $context) ? $context["whatisnewShow"] : (function () { throw new RuntimeError('Variable "whatisnewShow" does not exist.', 62, $this->source); })()))) {
            // line 63
            echo "    <script>
        document.addEventListener(\"DOMContentLoaded\", function(event) {
            const tooltip = '";
            // line 65
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_WhatIsNewTooltip"), "html", null, true);
            echo "';
            window.Piwik_Popover.createPopupAndLoadUrl('module=CoreAdminHome&action=whatIsNew', tooltip.replace(/&#039;/g,\"'\"), 'what-is-new-popup');
        });
    </script>
";
        }
        // line 70
        echo "
";
    }

    // line 25
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "        ";
    }

    // line 48
    public function block_notification($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "                ";
        $this->loadTemplate("@CoreHome/_notifications.twig", "dashboard.twig", 49)->display($context);
        // line 50
        echo "            ";
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboard.twig";
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
        return array (  210 => 55,  206 => 54,  202 => 50,  199 => 49,  195 => 48,  191 => 26,  187 => 25,  182 => 70,  174 => 65,  170 => 63,  168 => 62,  160 => 56,  158 => 54,  153 => 51,  151 => 48,  145 => 44,  139 => 40,  137 => 39,  130 => 35,  124 => 32,  117 => 27,  115 => 25,  110 => 22,  107 => 21,  104 => 20,  100 => 19,  94 => 16,  90 => 15,  85 => 14,  81 => 13,  72 => 9,  65 => 4,  61 => 3,  56 => 1,  54 => 11,  48 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block head %}
    {{ parent() }}
{% endblock %}

{% set title %}{{ siteName|raw }} - {{ 'CoreHome_WebAnalyticsReports'|translate }}{% endset %}

{% block pageDescription %}Web Analytics report for {{ siteName|escape(\"html_attr\") }} - Matomo{% endblock %}

{% set bodyClass = postEvent('Template.bodyClass', 'dashboard') %}

{% block body %}
    {{ postEvent(\"Template.header\", \"dashboard\") }}
    {{ parent() }}
    {{ postEvent(\"Template.footer\", \"dashboard\") }}
{% endblock %}

{% block root %}
    {% include \"@CoreHome/_warningInvalidHost.twig\" %}
    {% include \"@CoreHome/_topScreen.twig\" %}

    <div class=\"top_controls\">
        <div vue-entry=\"CoreHome.QuickAccess\" class=\"piwikTopControl borderedControl\"></div>
        {% block topcontrols %}
        {% endblock %}

    </div>

    <div class=\"ui-confirm\" id=\"alert\">
        <h2></h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
    </div>

    {{ postEvent(\"Template.beforeContent\", \"dashboard\", currentModule, currentAction) }}

    <div class=\"page\">

        {% if showMenu is defined and showMenu %}
            <div id=\"secondNavBar\" class=\"Menu--dashboard z-depth-1\">
                <div vue-entry=\"CoreHome.ReportingMenu\"></div>
            </div>
        {% endif %}

        <div class=\"pageWrap\">

            <a name=\"main\"></a>
            {% block notification %}
                {% include \"@CoreHome/_notifications.twig\" %}
            {% endblock %}

            <div vue-entry=\"CoreHome.Comparisons\"></div>

            {% block content %}
            {% endblock %}

            <div class=\"clear\"></div>
        </div>

    </div>

{% if whatisnewShow is defined and whatisnewShow %}
    <script>
        document.addEventListener(\"DOMContentLoaded\", function(event) {
            const tooltip = '{{ 'CoreAdminHome_WhatIsNewTooltip'|translate }}';
            window.Piwik_Popover.createPopupAndLoadUrl('module=CoreAdminHome&action=whatIsNew', tooltip.replace(/&#039;/g,\"'\"), 'what-is-new-popup');
        });
    </script>
{% endif %}

{% endblock %}
", "dashboard.twig", "/Users/natanandlacey/source/analytics/src/plugins/Morpheus/templates/dashboard.twig");
    }
}
