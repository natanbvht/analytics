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

/* @Marketplace/overview.twig */
class __TwigTemplate_df9e991a8eda5fe17d1b2f06c04954bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((isset($context["inReportingMenu"]) || array_key_exists("inReportingMenu", $context) ? $context["inReportingMenu"] : (function () { throw new RuntimeError('Variable "inReportingMenu" does not exist.', 1, $this->source); })())) ? ("empty.twig") : ("admin.twig")), "@Marketplace/overview.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_Marketplace"), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"marketplace\">
        <div
            vue-entry=\"Marketplace.OverviewIntro\"
            show-themes=\"";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("showThemes", $context)) ? (_twig_default_filter((isset($context["showThemes"]) || array_key_exists("showThemes", $context) ? $context["showThemes"] : (function () { throw new RuntimeError('Variable "showThemes" does not exist.', 10, $this->source); })()), false)) : (false))), "html", null, true);
        echo "\"
            in-reporting-menu=\"";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("inReportingMenu", $context)) ? (_twig_default_filter((isset($context["inReportingMenu"]) || array_key_exists("inReportingMenu", $context) ? $context["inReportingMenu"] : (function () { throw new RuntimeError('Variable "inReportingMenu" does not exist.', 11, $this->source); })()), false)) : (false))), "html", null, true);
        echo "\"
            is-valid-consumer=\"";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isValidConsumer", $context)) ? (_twig_default_filter((isset($context["isValidConsumer"]) || array_key_exists("isValidConsumer", $context) ? $context["isValidConsumer"] : (function () { throw new RuntimeError('Variable "isValidConsumer" does not exist.', 12, $this->source); })()), false)) : (false))), "html", null, true);
        echo "\"
            is-super-user=\"";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isSuperUser", $context)) ? (_twig_default_filter((isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 13, $this->source); })()), false)) : (false))), "html", null, true);
        echo "\"
            is-auto-update-possible=\"";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isAutoUpdatePossible", $context)) ? (_twig_default_filter((isset($context["isAutoUpdatePossible"]) || array_key_exists("isAutoUpdatePossible", $context) ? $context["isAutoUpdatePossible"] : (function () { throw new RuntimeError('Variable "isAutoUpdatePossible" does not exist.', 14, $this->source); })()), false)) : (false))), "html", null, true);
        echo "\"
            is-plugins-admin-enabled=\"";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isPluginsAdminEnabled", $context)) ? (_twig_default_filter((isset($context["isPluginsAdminEnabled"]) || array_key_exists("isPluginsAdminEnabled", $context) ? $context["isPluginsAdminEnabled"] : (function () { throw new RuntimeError('Variable "isPluginsAdminEnabled" does not exist.', 15, $this->source); })()), false)) : (false))), "html", null, true);
        echo "\"
            has-license-key=\"";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("hasLicenseKey", $context)) ? (_twig_default_filter((isset($context["hasLicenseKey"]) || array_key_exists("hasLicenseKey", $context) ? $context["hasLicenseKey"] : (function () { throw new RuntimeError('Variable "hasLicenseKey" does not exist.', 16, $this->source); })()), false)) : (false))), "html", null, true);
        echo "\"
            paid-plugins-to-install-at-once=\"";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("paidPluginsToInstallAtOnce", $context)) ? (_twig_default_filter((isset($context["paidPluginsToInstallAtOnce"]) || array_key_exists("paidPluginsToInstallAtOnce", $context) ? $context["paidPluginsToInstallAtOnce"] : (function () { throw new RuntimeError('Variable "paidPluginsToInstallAtOnce" does not exist.', 17, $this->source); })()), [])) : ([]))), "html", null, true);
        echo "\"
            install-nonce=\"";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("installNonce", $context)) ? (_twig_default_filter((isset($context["installNonce"]) || array_key_exists("installNonce", $context) ? $context["installNonce"] : (function () { throw new RuntimeError('Variable "installNonce" does not exist.', 18, $this->source); })()), null)) : (null))), "html", null, true);
        echo "\"
            is-plugin-upload-enabled=\"";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isPluginUploadEnabled", $context)) ? (_twig_default_filter((isset($context["isPluginUploadEnabled"]) || array_key_exists("isPluginUploadEnabled", $context) ? $context["isPluginUploadEnabled"] : (function () { throw new RuntimeError('Variable "isPluginUploadEnabled" does not exist.', 19, $this->source); })()), null)) : (null))), "html", null, true);
        echo "\"
            upload-limit=\"";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("uploadLimit", $context)) ? (_twig_default_filter((isset($context["uploadLimit"]) || array_key_exists("uploadLimit", $context) ? $context["uploadLimit"] : (function () { throw new RuntimeError('Variable "uploadLimit" does not exist.', 20, $this->source); })()), null)) : (null))), "html", null, true);
        echo "\"
            plugin-type=\"";
        // line 21
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("pluginType", $context)) ? (_twig_default_filter((isset($context["pluginType"]) || array_key_exists("pluginType", $context) ? $context["pluginType"] : (function () { throw new RuntimeError('Variable "pluginType" does not exist.', 21, $this->source); })()), null)) : (null))), "html", null, true);
        echo "\"
            plugin-type-options=\"";
        // line 22
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("pluginTypeOptions", $context)) ? (_twig_default_filter((isset($context["pluginTypeOptions"]) || array_key_exists("pluginTypeOptions", $context) ? $context["pluginTypeOptions"] : (function () { throw new RuntimeError('Variable "pluginTypeOptions" does not exist.', 22, $this->source); })()), null)) : (null))), "html", null, true);
        echo "\"
            sort=\"";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("sort", $context)) ? (_twig_default_filter((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 23, $this->source); })()), null)) : (null))), "html", null, true);
        echo "\"
            plugin-sort-options=\"";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("pluginSortOptions", $context)) ? (_twig_default_filter((isset($context["pluginSortOptions"]) || array_key_exists("pluginSortOptions", $context) ? $context["pluginSortOptions"] : (function () { throw new RuntimeError('Variable "pluginSortOptions" does not exist.', 24, $this->source); })()), null)) : (null))), "html", null, true);
        echo "\"
            plugins-to-show=\"";
        // line 25
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("pluginsToShow", $context)) ? (_twig_default_filter((isset($context["pluginsToShow"]) || array_key_exists("pluginsToShow", $context) ? $context["pluginsToShow"] : (function () { throw new RuntimeError('Variable "pluginsToShow" does not exist.', 25, $this->source); })()), null)) : (null))), "html", null, true);
        echo "\"
            query=\"";
        // line 26
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("query", $context)) ? (_twig_default_filter((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 26, $this->source); })()), null)) : (null))), "html", null, true);
        echo "\"
            num-available-plugins=\"";
        // line 27
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("numAvailablePlugins", $context)) ? (_twig_default_filter((isset($context["numAvailablePlugins"]) || array_key_exists("numAvailablePlugins", $context) ? $context["numAvailablePlugins"] : (function () { throw new RuntimeError('Variable "numAvailablePlugins" does not exist.', 27, $this->source); })()), null)) : (null))), "html", null, true);
        echo "\"
        ></div>

        ";
        // line 30
        $this->loadTemplate("@Marketplace/plugin-list.twig", "@Marketplace/overview.twig", 30)->display($context);
        // line 31
        echo "
        <div class=\"footer-message center\">
            ";
        // line 33
        echo $this->env->getFilter('translate')->getCallable()("Marketplace_DevelopersLearnHowToDevelopPlugins", $this->env->getFunction('externallink')->getCallable()("https://developer.matomo.org/develop"), "</a>");
        echo "
            <br />
            <br />
            <br />
            <a rel=\"noreferrer noopener\" href=\"";
        // line 37
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://shop.matomo.org/faq/"), "html", null, true);
        echo "\" target=\"_blank\">FAQ</a> |
            <a rel=\"noreferrer noopener\" href=\"";
        // line 38
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://shop.matomo.org/terms-conditions/"), "html", null, true);
        echo "\" target=\"_blank\">Terms</a> |
            <a rel=\"noreferrer noopener\" href=\"";
        // line 39
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/privacy-policy/"), "html", null, true);
        echo "\" target=\"_blank\">Privacy</a> |
            <a rel=\"noreferrer noopener\" href=\"";
        // line 40
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/contact/"), "html", null, true);
        echo "\" target=\"_blank\">Contact</a>
        </div>

    </div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Marketplace/overview.twig";
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
        return array (  159 => 40,  155 => 39,  151 => 38,  147 => 37,  140 => 33,  136 => 31,  134 => 30,  128 => 27,  124 => 26,  120 => 25,  116 => 24,  112 => 23,  108 => 22,  104 => 21,  100 => 20,  96 => 19,  92 => 18,  88 => 17,  84 => 16,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  54 => 6,  50 => 5,  46 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends inReportingMenu ? \"empty.twig\" : \"admin.twig\" %}

{% set title %}{{ 'Marketplace_Marketplace'|translate }}{% endset %}

{% block content %}

    <div class=\"marketplace\">
        <div
            vue-entry=\"Marketplace.OverviewIntro\"
            show-themes=\"{{ showThemes|default(false)|json_encode }}\"
            in-reporting-menu=\"{{ inReportingMenu|default(false)|json_encode }}\"
            is-valid-consumer=\"{{ isValidConsumer|default(false)|json_encode }}\"
            is-super-user=\"{{ isSuperUser|default(false)|json_encode }}\"
            is-auto-update-possible=\"{{ isAutoUpdatePossible|default(false)|json_encode }}\"
            is-plugins-admin-enabled=\"{{ isPluginsAdminEnabled|default(false)|json_encode }}\"
            has-license-key=\"{{ hasLicenseKey|default(false)|json_encode }}\"
            paid-plugins-to-install-at-once=\"{{ paidPluginsToInstallAtOnce|default([])|json_encode }}\"
            install-nonce=\"{{ installNonce|default(null)|json_encode }}\"
            is-plugin-upload-enabled=\"{{ isPluginUploadEnabled|default(null)|json_encode }}\"
            upload-limit=\"{{ uploadLimit|default(null)|json_encode }}\"
            plugin-type=\"{{ pluginType|default(null)|json_encode }}\"
            plugin-type-options=\"{{ pluginTypeOptions|default(null)|json_encode }}\"
            sort=\"{{ sort|default(null)|json_encode }}\"
            plugin-sort-options=\"{{ pluginSortOptions|default(null)|json_encode }}\"
            plugins-to-show=\"{{ pluginsToShow|default(null)|json_encode }}\"
            query=\"{{ query|default(null)|json_encode }}\"
            num-available-plugins=\"{{ numAvailablePlugins|default(null)|json_encode }}\"
        ></div>

        {% include '@Marketplace/plugin-list.twig' %}

        <div class=\"footer-message center\">
            {{ 'Marketplace_DevelopersLearnHowToDevelopPlugins'|translate(externallink('https://developer.matomo.org/develop'), '</a>')|raw }}
            <br />
            <br />
            <br />
            <a rel=\"noreferrer noopener\" href=\"{{ 'https://shop.matomo.org/faq/'|trackmatomolink }}\" target=\"_blank\">FAQ</a> |
            <a rel=\"noreferrer noopener\" href=\"{{ 'https://shop.matomo.org/terms-conditions/'|trackmatomolink }}\" target=\"_blank\">Terms</a> |
            <a rel=\"noreferrer noopener\" href=\"{{ 'https://matomo.org/privacy-policy/'|trackmatomolink }}\" target=\"_blank\">Privacy</a> |
            <a rel=\"noreferrer noopener\" href=\"{{ 'https://matomo.org/contact/'|trackmatomolink }}\" target=\"_blank\">Contact</a>
        </div>

    </div>

{% endblock %}
", "@Marketplace/overview.twig", "/Users/natanandlacey/source/analytics/src/plugins/Marketplace/templates/overview.twig");
    }
}
