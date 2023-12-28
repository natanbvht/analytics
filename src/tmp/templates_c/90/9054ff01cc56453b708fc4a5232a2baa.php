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

/* @Marketplace/plugin-list.twig */
class __TwigTemplate_0f948ad266b074d654b0556e805fa8b2 extends Template
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
        if ((twig_length_filter($this->env, (isset($context["pluginsToShow"]) || array_key_exists("pluginsToShow", $context) ? $context["pluginsToShow"] : (function () { throw new RuntimeError('Variable "pluginsToShow" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            echo "    <div class=\"pluginListContainer row\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pluginsToShow"]) || array_key_exists("pluginsToShow", $context) ? $context["pluginsToShow"] : (function () { throw new RuntimeError('Variable "pluginsToShow" does not exist.', 3, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 4
                echo "            <div class=\"col s12 m6 l4\">
                ";
                // line 5
                $this->loadTemplate("@Marketplace/plugin-list.twig", "@Marketplace/plugin-list.twig", 5, "1864387851")->display(twig_array_merge($context, ["title" => ""]));
                // line 150
                echo "            </div>
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "    </div>
";
        }
        // line 154
        echo "
";
        // line 155
        if ((twig_length_filter($this->env, (isset($context["pluginsToShow"]) || array_key_exists("pluginsToShow", $context) ? $context["pluginsToShow"] : (function () { throw new RuntimeError('Variable "pluginsToShow" does not exist.', 155, $this->source); })())) == 0)) {
            // line 156
            echo "    <div vue-entry=\"CoreHome.ContentBlock\">
        ";
            // line 157
            if ((isset($context["showThemes"]) || array_key_exists("showThemes", $context) ? $context["showThemes"] : (function () { throw new RuntimeError('Variable "showThemes" does not exist.', 157, $this->source); })())) {
                // line 158
                echo "            ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_NoThemesFound"), "html", null, true);
                echo "
        ";
            } else {
                // line 160
                echo "            ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_NoPluginsFound"), "html", null, true);
                echo "
        ";
            }
            // line 162
            echo "    </div>
";
        }
        // line 164
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Marketplace/plugin-list.twig";
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
        return array (  109 => 164,  105 => 162,  99 => 160,  93 => 158,  91 => 157,  88 => 156,  86 => 155,  83 => 154,  79 => 152,  64 => 150,  62 => 5,  59 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pluginsToShow|length > 0 %}
    <div class=\"pluginListContainer row\">
        {% for plugin in pluginsToShow %}
            <div class=\"col s12 m6 l4\">
                {% embed 'contentBlock.twig' with {'title': ''} %}
                    {% block content %}
                        {% import '@Marketplace/macros.twig' as marketplaceMacro %}
                        {% import '@CorePluginsAdmin/macros.twig' as pluginsMacro %}
                        <div class=\"plugin\">
                            <h3 class=\"card-title\" title=\"{{ 'General_MoreDetails'|translate }}\">
                                <a href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\">{{ plugin.displayName }}</a>
                            </h3>

                            <p class=\"description\">
                                {{ plugin.description }}
                                <a class=\"more\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\" title=\"{{ 'General_MoreDetails'|translate }}\">
                                    &rsaquo; {{ 'General_MoreLowerCase'|translate }}</a>
                            </p>

                            {% if showThemes %}
                                {# Screenshot for themes #}
                                <a class=\"more\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\">
                                    <img title=\"{{ 'General_MoreDetails'|translate }}\"
                                         class=\"preview\" src=\"{{ plugin.screenshots|first }}?w=250&h=150\"/></a>
                            {% endif %}

                            <ul class=\"metadata\">
                                {% if plugin.isBundle is not defined or not plugin.isBundle %}
                                    <li>
                                        {% if plugin.latestVersion %}
                                            {{ 'CorePluginsAdmin_Version'|translate }}: {{ plugin.latestVersion }}
                                        {% endif %}

                                        {% if plugin.canBeUpdated %}
                                            <a class=\"update-available\"
                                                {% if plugin.changelog is defined and plugin.changelog and plugin.changelog.url is defined and plugin.changelog.url %}
                                                    target=\"_blank\" href=\"{{ plugin.changelog.url }}\"
                                                {% else %}
                                                    href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\"
                                                {% endif %}
                                               title=\"{{ 'Marketplace_PluginUpdateAvailable'|translate(plugin.currentVersion, plugin.latestVersion) }}\">
                                                {{ 'Marketplace_NewVersion'|translate }}</a>
                                        {% endif %}
                                    </li>
                                    {% if plugin.lastUpdated %}
                                        <li>{{ 'Marketplace_Updated'|translate }}: {{ plugin.lastUpdated }}</li>
                                    {% endif %}
                                    {% if plugin.numDownloads %}
                                        <li>{{ 'General_Downloads'|translate }}: {{ plugin.numDownloads }}</li>
                                    {% endif %}
                                    <li>{{ 'Marketplace_Developer'|translate }}: {{ marketplaceMacro.pluginDeveloper(plugin.owner) }}</li>
                                {% endif %}
                            </ul>

                            {% macro moreDetailsLink(plugin) %}
                                {% set canBePurchased = not plugin.isDownloadable and plugin.shop is defined and plugin.shop and plugin.shop.url %}
                                <a class=\"btn btn-block plugin-details {% if canBePurchased %}purchaseable{% endif %}\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\" title=\"{{ 'General_MoreDetails'|translate }}\">

                                    {% if canBePurchased and plugin.shop.variations %}
                                        {% set foundCheapest = 0 %}
                                        {% for variation in plugin.shop.variations %}
                                            {% if not foundCheapest and variation.cheapest is defined and variation.cheapest %}
                                                {% set foundCheapest = 1 %}
                                                {{ 'Marketplace_PriceFromPerPeriod'|translate(variation.prettyPrice, variation.period) }}
                                            {% endif %}
                                        {% endfor %}
                                        {% if not foundCheapest %}
                                            {{ 'Marketplace_PriceFromPerPeriod'|translate(plugin.shop.variations.0.prettyPrice, plugin.shop.variations.0.period) }}
                                        {% endif %}
                                    {% else %}
                                        {{ 'General_MoreDetails'|translate }}
                                    {% endif %}
                                    <span style=\"white-space: nowrap;\">({{ 'Marketplace_FreeTrialLabel'|translate }})</span>
                                </a>
                            {% endmacro %}


                            {% if isSuperUser %}
                                <div class=\"footer\">
                                    {% if plugin.isMissingLicense is defined and plugin.isMissingLicense %}

                                        <div class=\"alert alert-danger\" >
                                            {{ 'Marketplace_LicenseMissing'|translate }}

                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\" title=\"{{ 'General_MoreDetails'|translate }}\">{{ 'General_Help'|translate }}</a>)</span>
                                        </div>

                                    {% elseif plugin.hasExceededLicense is defined and plugin.hasExceededLicense %}
                                        <div class=\"alert alert-danger\">
                                            {{ 'Marketplace_LicenseExceeded'|translate }}

                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\" title=\"{{ 'General_MoreDetails'|translate }}\">{{ 'General_Help'|translate }}</a>)</span>
                                        </div>

                                    {% elseif plugin.canBeUpdated and 0 == plugin.missingRequirements|length and isAutoUpdatePossible %}
                                        <a class=\"btn btn-block\"
                                           href=\"{{ linkTo({'module': 'Marketplace', 'action':'updatePlugin', 'pluginName': plugin.name, 'nonce': updateNonce}) }}\">
                                            {{ 'CoreUpdater_UpdateTitle'|translate }}
                                        </a>
                                    {% elseif plugin.missingRequirements|length > 0 or not isAutoUpdatePossible %}
                                        {% macro downloadButton(showOr, plugin, isAutoUpdatePossible, showBrackets = false) -%}
                                            {%- if plugin.missingRequirements|length == 0 and plugin.isDownloadable and not isAutoUpdatePossible -%}
                                                {% if showBrackets %}({% endif %}<span onclick=\"\$(this).css('display', 'none')\">
                                                {%- if showOr %} {{ 'General_Or'|translate }} {% endif -%}
                                                <a class=\"plugin-details download\"
                                                   href=\"{{ linkTo({'module': 'Marketplace', 'action': 'download', 'pluginName': plugin.name, 'nonce': (plugin.name|nonce)}) }}\"
                                                >{{ 'General_Download'|translate }}</a></span>{% if showBrackets %}){% endif %}
                                            {%- endif -%}
                                        {%- endmacro %}

                                        {% if plugin.canBeUpdated and 0 == plugin.missingRequirements|length %}
                                            {{ 'Marketplace_CannotUpdate'|translate }}
                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\" title=\"{{ 'General_MoreDetails'|translate }}\">{{ 'General_Help'|translate }}</a>{{ _self.downloadButton(true, plugin, isAutoUpdatePossible)|raw }})</span>
                                        {% elseif plugin.isInstalled %}
                                            {{ 'General_Installed'|translate }}
                                            {{ _self.downloadButton(false, plugin, isAutoUpdatePossible, true)|raw }}
                                        {% elseif not plugin.isDownloadable %}
                                            {{ _self.moreDetailsLink(plugin)|raw }}
                                        {% else %}
                                            {{ 'Marketplace_CannotInstall'|translate }}

                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\" title=\"{{ 'General_MoreDetails'|translate }}\">{{ 'General_Help'|translate }}</a>{{ _self.downloadButton(true, plugin, isAutoUpdatePossible)|raw }})</span>
                                        {% endif %}

                                    {% elseif plugin.isInstalled %}
                                        {{ 'General_Installed'|translate }}

                                        {% if not plugin.isInvalid and not isMultiServerEnvironment and isPluginsAdminEnabled %}
                                            ({{ pluginsMacro.pluginActivateDeactivateAction(plugin.name, plugin.isActivated, plugin.missingRequirements, deactivateNonce, activateNonce) }})
                                        {% endif %}

                                    {% elseif plugin.isPaid and not plugin.isDownloadable %}
                                        {{ _self.moreDetailsLink(plugin)|raw }}
                                    {% else %}
                                        <a href=\"{{ linkTo({'module': 'Marketplace', 'action': 'installPlugin', 'pluginName': plugin.name, 'nonce': installNonce}) }}\"
                                           class=\"btn\">
                                            {{ 'Marketplace_ActionInstall'|translate }}
                                        </a>
                                    {% endif %}
                                </div>
                            {% else %}
                                <div class=\"footer\">
                                    {{ _self.moreDetailsLink(plugin)|raw }}
                                </div>
                            {% endif %}

                        </div>
                    {% endblock %}
                {% endembed %}
            </div>
        {% endfor %}
    </div>
{% endif %}

{% if pluginsToShow|length == 0 %}
    <div vue-entry=\"CoreHome.ContentBlock\">
        {% if showThemes %}
            {{ 'Marketplace_NoThemesFound'|translate }}
        {% else %}
            {{ 'Marketplace_NoPluginsFound'|translate }}
        {% endif %}
    </div>
{% endif %}

", "@Marketplace/plugin-list.twig", "/Users/natanandlacey/source/analytics/src/plugins/Marketplace/templates/plugin-list.twig");
    }
}


/* @Marketplace/plugin-list.twig */
class __TwigTemplate_0f948ad266b074d654b0556e805fa8b2___1864387851 extends Template
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
        // line 0
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return "contentBlock.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("contentBlock.twig", "@Marketplace/plugin-list.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                        ";
        $macros["marketplaceMacro"] = $this->loadTemplate("@Marketplace/macros.twig", "@Marketplace/plugin-list.twig", 7)->unwrap();
        // line 8
        echo "                        ";
        $macros["pluginsMacro"] = $this->loadTemplate("@CorePluginsAdmin/macros.twig", "@Marketplace/plugin-list.twig", 8)->unwrap();
        // line 9
        echo "                        <div class=\"plugin\">
                            <h3 class=\"card-title\" title=\"";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_MoreDetails"), "html", null, true);
        echo "\">
                                <a href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, json_encode(["pluginName" => twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 11, $this->source); })()), "displayName", [], "any", false, false, false, 11), "html", null, true);
        echo "</a>
                            </h3>

                            <p class=\"description\">
                                ";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), "html", null, true);
        echo "
                                <a class=\"more\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, json_encode(["pluginName" => twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" title=\"";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_MoreDetails"), "html", null, true);
        echo "\">
                                    &rsaquo; ";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_MoreLowerCase"), "html", null, true);
        echo "</a>
                            </p>

                            ";
        // line 20
        if ((isset($context["showThemes"]) || array_key_exists("showThemes", $context) ? $context["showThemes"] : (function () { throw new RuntimeError('Variable "showThemes" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "                                ";
            // line 22
            echo "                                <a class=\"more\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"";
            echo \Piwik\piwik_escape_filter($this->env, json_encode(["pluginName" => twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">
                                    <img title=\"";
            // line 23
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_MoreDetails"), "html", null, true);
            echo "\"
                                         class=\"preview\" src=\"";
            // line 24
            echo \Piwik\piwik_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 24, $this->source); })()), "screenshots", [], "any", false, false, false, 24)), "html", null, true);
            echo "?w=250&h=150\"/></a>
                            ";
        }
        // line 26
        echo "
                            <ul class=\"metadata\">
                                ";
        // line 28
        if (( !twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "isBundle", [], "any", true, true, false, 28) ||  !twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 28, $this->source); })()), "isBundle", [], "any", false, false, false, 28))) {
            // line 29
            echo "                                    <li>
                                        ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 30, $this->source); })()), "latestVersion", [], "any", false, false, false, 30)) {
                // line 31
                echo "                                            ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CorePluginsAdmin_Version"), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 31, $this->source); })()), "latestVersion", [], "any", false, false, false, 31), "html", null, true);
                echo "
                                        ";
            }
            // line 33
            echo "
                                        ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 34, $this->source); })()), "canBeUpdated", [], "any", false, false, false, 34)) {
                // line 35
                echo "                                            <a class=\"update-available\"
                                                ";
                // line 36
                if ((((twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "changelog", [], "any", true, true, false, 36) && twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 36, $this->source); })()), "changelog", [], "any", false, false, false, 36)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "changelog", [], "any", false, true, false, 36), "url", [], "any", true, true, false, 36)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 36, $this->source); })()), "changelog", [], "any", false, false, false, 36), "url", [], "any", false, false, false, 36))) {
                    // line 37
                    echo "                                                    target=\"_blank\" href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 37, $this->source); })()), "changelog", [], "any", false, false, false, 37), "url", [], "any", false, false, false, 37), "html", null, true);
                    echo "\"
                                                ";
                } else {
                    // line 39
                    echo "                                                    href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"";
                    echo \Piwik\piwik_escape_filter($this->env, json_encode(["pluginName" => twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39)]), "html", null, true);
                    echo "\"
                                                ";
                }
                // line 41
                echo "                                               title=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_PluginUpdateAvailable", twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 41, $this->source); })()), "currentVersion", [], "any", false, false, false, 41), twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 41, $this->source); })()), "latestVersion", [], "any", false, false, false, 41)), "html", null, true);
                echo "\">
                                                ";
                // line 42
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_NewVersion"), "html", null, true);
                echo "</a>
                                        ";
            }
            // line 44
            echo "                                    </li>
                                    ";
            // line 45
            if (twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 45, $this->source); })()), "lastUpdated", [], "any", false, false, false, 45)) {
                // line 46
                echo "                                        <li>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_Updated"), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 46, $this->source); })()), "lastUpdated", [], "any", false, false, false, 46), "html", null, true);
                echo "</li>
                                    ";
            }
            // line 48
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 48, $this->source); })()), "numDownloads", [], "any", false, false, false, 48)) {
                // line 49
                echo "                                        <li>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Downloads"), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 49, $this->source); })()), "numDownloads", [], "any", false, false, false, 49), "html", null, true);
                echo "</li>
                                    ";
            }
            // line 51
            echo "                                    <li>";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_Developer"), "html", null, true);
            echo ": ";
            echo twig_call_macro($macros["marketplaceMacro"], "macro_pluginDeveloper", [twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 51, $this->source); })()), "owner", [], "any", false, false, false, 51)], 51, $context, $this->getSourceContext());
            echo "</li>
                                ";
        }
        // line 53
        echo "                            </ul>

                            ";
        // line 76
        echo "

                            ";
        // line 78
        if ((isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 78, $this->source); })())) {
            // line 79
            echo "                                <div class=\"footer\">
                                    ";
            // line 80
            if ((twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "isMissingLicense", [], "any", true, true, false, 80) && twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 80, $this->source); })()), "isMissingLicense", [], "any", false, false, false, 80))) {
                // line 81
                echo "
                                        <div class=\"alert alert-danger\" >
                                            ";
                // line 83
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_LicenseMissing"), "html", null, true);
                echo "

                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"";
                // line 85
                echo \Piwik\piwik_escape_filter($this->env, json_encode(["pluginName" => twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 85, $this->source); })()), "name", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_MoreDetails"), "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Help"), "html", null, true);
                echo "</a>)</span>
                                        </div>

                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 88
($context["plugin"] ?? null), "hasExceededLicense", [], "any", true, true, false, 88) && twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 88, $this->source); })()), "hasExceededLicense", [], "any", false, false, false, 88))) {
                // line 89
                echo "                                        <div class=\"alert alert-danger\">
                                            ";
                // line 90
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_LicenseExceeded"), "html", null, true);
                echo "

                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"";
                // line 92
                echo \Piwik\piwik_escape_filter($this->env, json_encode(["pluginName" => twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 92, $this->source); })()), "name", [], "any", false, false, false, 92)]), "html", null, true);
                echo "\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_MoreDetails"), "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Help"), "html", null, true);
                echo "</a>)</span>
                                        </div>

                                    ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 95
(isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 95, $this->source); })()), "canBeUpdated", [], "any", false, false, false, 95) && (0 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 95, $this->source); })()), "missingRequirements", [], "any", false, false, false, 95)))) && (isset($context["isAutoUpdatePossible"]) || array_key_exists("isAutoUpdatePossible", $context) ? $context["isAutoUpdatePossible"] : (function () { throw new RuntimeError('Variable "isAutoUpdatePossible" does not exist.', 95, $this->source); })()))) {
                // line 96
                echo "                                        <a class=\"btn btn-block\"
                                           href=\"";
                // line 97
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "Marketplace", "action" => "updatePlugin", "pluginName" => twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 97, $this->source); })()), "name", [], "any", false, false, false, 97), "nonce" => (isset($context["updateNonce"]) || array_key_exists("updateNonce", $context) ? $context["updateNonce"] : (function () { throw new RuntimeError('Variable "updateNonce" does not exist.', 97, $this->source); })())]), "html", null, true);
                echo "\">
                                            ";
                // line 98
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreUpdater_UpdateTitle"), "html", null, true);
                echo "
                                        </a>
                                    ";
            } elseif (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 100
(isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 100, $this->source); })()), "missingRequirements", [], "any", false, false, false, 100)) > 0) ||  !(isset($context["isAutoUpdatePossible"]) || array_key_exists("isAutoUpdatePossible", $context) ? $context["isAutoUpdatePossible"] : (function () { throw new RuntimeError('Variable "isAutoUpdatePossible" does not exist.', 100, $this->source); })()))) {
                // line 101
                echo "                                        ";
                // line 110
                echo "
                                        ";
                // line 111
                if ((twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 111, $this->source); })()), "canBeUpdated", [], "any", false, false, false, 111) && (0 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 111, $this->source); })()), "missingRequirements", [], "any", false, false, false, 111))))) {
                    // line 112
                    echo "                                            ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_CannotUpdate"), "html", null, true);
                    echo "
                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"";
                    // line 113
                    echo \Piwik\piwik_escape_filter($this->env, json_encode(["pluginName" => twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 113, $this->source); })()), "name", [], "any", false, false, false, 113)]), "html", null, true);
                    echo "\" title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_MoreDetails"), "html", null, true);
                    echo "\">";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Help"), "html", null, true);
                    echo "</a>";
                    echo twig_call_macro($macros["_self"], "macro_downloadButton", [true, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 113, $this->source); })()), (isset($context["isAutoUpdatePossible"]) || array_key_exists("isAutoUpdatePossible", $context) ? $context["isAutoUpdatePossible"] : (function () { throw new RuntimeError('Variable "isAutoUpdatePossible" does not exist.', 113, $this->source); })())], 113, $context, $this->getSourceContext());
                    echo ")</span>
                                        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 114
(isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 114, $this->source); })()), "isInstalled", [], "any", false, false, false, 114)) {
                    // line 115
                    echo "                                            ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Installed"), "html", null, true);
                    echo "
                                            ";
                    // line 116
                    echo twig_call_macro($macros["_self"], "macro_downloadButton", [false, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 116, $this->source); })()), (isset($context["isAutoUpdatePossible"]) || array_key_exists("isAutoUpdatePossible", $context) ? $context["isAutoUpdatePossible"] : (function () { throw new RuntimeError('Variable "isAutoUpdatePossible" does not exist.', 116, $this->source); })()), true], 116, $context, $this->getSourceContext());
                    echo "
                                        ";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 117
(isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 117, $this->source); })()), "isDownloadable", [], "any", false, false, false, 117)) {
                    // line 118
                    echo "                                            ";
                    echo twig_call_macro($macros["_self"], "macro_moreDetailsLink", [(isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 118, $this->source); })())], 118, $context, $this->getSourceContext());
                    echo "
                                        ";
                } else {
                    // line 120
                    echo "                                            ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_CannotInstall"), "html", null, true);
                    echo "

                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"";
                    // line 122
                    echo \Piwik\piwik_escape_filter($this->env, json_encode(["pluginName" => twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 122, $this->source); })()), "name", [], "any", false, false, false, 122)]), "html", null, true);
                    echo "\" title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_MoreDetails"), "html", null, true);
                    echo "\">";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Help"), "html", null, true);
                    echo "</a>";
                    echo twig_call_macro($macros["_self"], "macro_downloadButton", [true, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 122, $this->source); })()), (isset($context["isAutoUpdatePossible"]) || array_key_exists("isAutoUpdatePossible", $context) ? $context["isAutoUpdatePossible"] : (function () { throw new RuntimeError('Variable "isAutoUpdatePossible" does not exist.', 122, $this->source); })())], 122, $context, $this->getSourceContext());
                    echo ")</span>
                                        ";
                }
                // line 124
                echo "
                                    ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 125
(isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 125, $this->source); })()), "isInstalled", [], "any", false, false, false, 125)) {
                // line 126
                echo "                                        ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Installed"), "html", null, true);
                echo "

                                        ";
                // line 128
                if ((( !twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 128, $this->source); })()), "isInvalid", [], "any", false, false, false, 128) &&  !(isset($context["isMultiServerEnvironment"]) || array_key_exists("isMultiServerEnvironment", $context) ? $context["isMultiServerEnvironment"] : (function () { throw new RuntimeError('Variable "isMultiServerEnvironment" does not exist.', 128, $this->source); })())) && (isset($context["isPluginsAdminEnabled"]) || array_key_exists("isPluginsAdminEnabled", $context) ? $context["isPluginsAdminEnabled"] : (function () { throw new RuntimeError('Variable "isPluginsAdminEnabled" does not exist.', 128, $this->source); })()))) {
                    // line 129
                    echo "                                            (";
                    echo twig_call_macro($macros["pluginsMacro"], "macro_pluginActivateDeactivateAction", [twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 129, $this->source); })()), "name", [], "any", false, false, false, 129), twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 129, $this->source); })()), "isActivated", [], "any", false, false, false, 129), twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 129, $this->source); })()), "missingRequirements", [], "any", false, false, false, 129), (isset($context["deactivateNonce"]) || array_key_exists("deactivateNonce", $context) ? $context["deactivateNonce"] : (function () { throw new RuntimeError('Variable "deactivateNonce" does not exist.', 129, $this->source); })()), (isset($context["activateNonce"]) || array_key_exists("activateNonce", $context) ? $context["activateNonce"] : (function () { throw new RuntimeError('Variable "activateNonce" does not exist.', 129, $this->source); })())], 129, $context, $this->getSourceContext());
                    echo ")
                                        ";
                }
                // line 131
                echo "
                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 132
(isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 132, $this->source); })()), "isPaid", [], "any", false, false, false, 132) &&  !twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 132, $this->source); })()), "isDownloadable", [], "any", false, false, false, 132))) {
                // line 133
                echo "                                        ";
                echo twig_call_macro($macros["_self"], "macro_moreDetailsLink", [(isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 133, $this->source); })())], 133, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 135
                echo "                                        <a href=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "Marketplace", "action" => "installPlugin", "pluginName" => twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 135, $this->source); })()), "name", [], "any", false, false, false, 135), "nonce" => (isset($context["installNonce"]) || array_key_exists("installNonce", $context) ? $context["installNonce"] : (function () { throw new RuntimeError('Variable "installNonce" does not exist.', 135, $this->source); })())]), "html", null, true);
                echo "\"
                                           class=\"btn\">
                                            ";
                // line 137
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_ActionInstall"), "html", null, true);
                echo "
                                        </a>
                                    ";
            }
            // line 140
            echo "                                </div>
                            ";
        } else {
            // line 142
            echo "                                <div class=\"footer\">
                                    ";
            // line 143
            echo twig_call_macro($macros["_self"], "macro_moreDetailsLink", [(isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 143, $this->source); })())], 143, $context, $this->getSourceContext());
            echo "
                                </div>
                            ";
        }
        // line 146
        echo "
                        </div>
                    ";
    }

    // line 55
    public function macro_moreDetailsLink($__plugin__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "plugin" => $__plugin__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 56
            echo "                                ";
            $context["canBePurchased"] = ((( !twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 56, $this->source); })()), "isDownloadable", [], "any", false, false, false, 56) && twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "shop", [], "any", true, true, false, 56)) && twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 56, $this->source); })()), "shop", [], "any", false, false, false, 56)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 56, $this->source); })()), "shop", [], "any", false, false, false, 56), "url", [], "any", false, false, false, 56));
            // line 57
            echo "                                <a class=\"btn btn-block plugin-details ";
            if ((isset($context["canBePurchased"]) || array_key_exists("canBePurchased", $context) ? $context["canBePurchased"] : (function () { throw new RuntimeError('Variable "canBePurchased" does not exist.', 57, $this->source); })())) {
                echo "purchaseable";
            }
            echo "\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"";
            echo \Piwik\piwik_escape_filter($this->env, json_encode(["pluginName" => twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" title=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_MoreDetails"), "html", null, true);
            echo "\">

                                    ";
            // line 59
            if (((isset($context["canBePurchased"]) || array_key_exists("canBePurchased", $context) ? $context["canBePurchased"] : (function () { throw new RuntimeError('Variable "canBePurchased" does not exist.', 59, $this->source); })()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 59, $this->source); })()), "shop", [], "any", false, false, false, 59), "variations", [], "any", false, false, false, 59))) {
                // line 60
                echo "                                        ";
                $context["foundCheapest"] = 0;
                // line 61
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 61, $this->source); })()), "shop", [], "any", false, false, false, 61), "variations", [], "any", false, false, false, 61));
                foreach ($context['_seq'] as $context["_key"] => $context["variation"]) {
                    // line 62
                    echo "                                            ";
                    if ((( !(isset($context["foundCheapest"]) || array_key_exists("foundCheapest", $context) ? $context["foundCheapest"] : (function () { throw new RuntimeError('Variable "foundCheapest" does not exist.', 62, $this->source); })()) && twig_get_attribute($this->env, $this->source, $context["variation"], "cheapest", [], "any", true, true, false, 62)) && twig_get_attribute($this->env, $this->source, $context["variation"], "cheapest", [], "any", false, false, false, 62))) {
                        // line 63
                        echo "                                                ";
                        $context["foundCheapest"] = 1;
                        // line 64
                        echo "                                                ";
                        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_PriceFromPerPeriod", twig_get_attribute($this->env, $this->source, $context["variation"], "prettyPrice", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, $context["variation"], "period", [], "any", false, false, false, 64)), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 66
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "                                        ";
                if ( !(isset($context["foundCheapest"]) || array_key_exists("foundCheapest", $context) ? $context["foundCheapest"] : (function () { throw new RuntimeError('Variable "foundCheapest" does not exist.', 67, $this->source); })())) {
                    // line 68
                    echo "                                            ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_PriceFromPerPeriod", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 68, $this->source); })()), "shop", [], "any", false, false, false, 68), "variations", [], "any", false, false, false, 68), 0, [], "any", false, false, false, 68), "prettyPrice", [], "any", false, false, false, 68), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 68, $this->source); })()), "shop", [], "any", false, false, false, 68), "variations", [], "any", false, false, false, 68), 0, [], "any", false, false, false, 68), "period", [], "any", false, false, false, 68)), "html", null, true);
                    echo "
                                        ";
                }
                // line 70
                echo "                                    ";
            } else {
                // line 71
                echo "                                        ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_MoreDetails"), "html", null, true);
                echo "
                                    ";
            }
            // line 73
            echo "                                    <span style=\"white-space: nowrap;\">(";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_FreeTrialLabel"), "html", null, true);
            echo ")</span>
                                </a>
                            ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 101
    public function macro_downloadButton($__showOr__ = null, $__plugin__ = null, $__isAutoUpdatePossible__ = null, $__showBrackets__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "showOr" => $__showOr__,
            "plugin" => $__plugin__,
            "isAutoUpdatePossible" => $__isAutoUpdatePossible__,
            "showBrackets" => $__showBrackets__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 102
            if ((((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 102, $this->source); })()), "missingRequirements", [], "any", false, false, false, 102)) == 0) && twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 102, $this->source); })()), "isDownloadable", [], "any", false, false, false, 102)) &&  !(isset($context["isAutoUpdatePossible"]) || array_key_exists("isAutoUpdatePossible", $context) ? $context["isAutoUpdatePossible"] : (function () { throw new RuntimeError('Variable "isAutoUpdatePossible" does not exist.', 102, $this->source); })()))) {
                // line 103
                if ((isset($context["showBrackets"]) || array_key_exists("showBrackets", $context) ? $context["showBrackets"] : (function () { throw new RuntimeError('Variable "showBrackets" does not exist.', 103, $this->source); })())) {
                    echo "(";
                }
                echo "<span onclick=\"\$(this).css('display', 'none')\">";
                // line 104
                if ((isset($context["showOr"]) || array_key_exists("showOr", $context) ? $context["showOr"] : (function () { throw new RuntimeError('Variable "showOr" does not exist.', 104, $this->source); })())) {
                    echo " ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Or"), "html", null, true);
                    echo " ";
                }
                // line 105
                echo "<a class=\"plugin-details download\"
                                                   href=\"";
                // line 106
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "Marketplace", "action" => "download", "pluginName" => twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 106, $this->source); })()), "name", [], "any", false, false, false, 106), "nonce" => Piwik\Nonce::getNonce(twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 106, $this->source); })()), "name", [], "any", false, false, false, 106))]), "html", null, true);
                echo "\"
                                                >";
                // line 107
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Download"), "html", null, true);
                echo "</a></span>";
                if ((isset($context["showBrackets"]) || array_key_exists("showBrackets", $context) ? $context["showBrackets"] : (function () { throw new RuntimeError('Variable "showBrackets" does not exist.', 107, $this->source); })())) {
                    echo ")";
                }
            }

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
        return "@Marketplace/plugin-list.twig";
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
        return array (  796 => 107,  792 => 106,  789 => 105,  783 => 104,  778 => 103,  776 => 102,  760 => 101,  747 => 73,  741 => 71,  738 => 70,  732 => 68,  729 => 67,  723 => 66,  717 => 64,  714 => 63,  711 => 62,  706 => 61,  703 => 60,  701 => 59,  689 => 57,  686 => 56,  673 => 55,  667 => 146,  661 => 143,  658 => 142,  654 => 140,  648 => 137,  642 => 135,  636 => 133,  634 => 132,  631 => 131,  625 => 129,  623 => 128,  617 => 126,  615 => 125,  612 => 124,  601 => 122,  595 => 120,  589 => 118,  587 => 117,  583 => 116,  578 => 115,  576 => 114,  566 => 113,  561 => 112,  559 => 111,  556 => 110,  554 => 101,  552 => 100,  547 => 98,  543 => 97,  540 => 96,  538 => 95,  528 => 92,  523 => 90,  520 => 89,  518 => 88,  508 => 85,  503 => 83,  499 => 81,  497 => 80,  494 => 79,  492 => 78,  488 => 76,  484 => 53,  476 => 51,  468 => 49,  465 => 48,  457 => 46,  455 => 45,  452 => 44,  447 => 42,  442 => 41,  436 => 39,  430 => 37,  428 => 36,  425 => 35,  423 => 34,  420 => 33,  412 => 31,  410 => 30,  407 => 29,  405 => 28,  401 => 26,  396 => 24,  392 => 23,  387 => 22,  385 => 21,  383 => 20,  377 => 17,  371 => 16,  367 => 15,  358 => 11,  354 => 10,  351 => 9,  348 => 8,  345 => 7,  341 => 6,  330 => 5,  324 => 0,  109 => 164,  105 => 162,  99 => 160,  93 => 158,  91 => 157,  88 => 156,  86 => 155,  83 => 154,  79 => 152,  64 => 150,  62 => 5,  59 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pluginsToShow|length > 0 %}
    <div class=\"pluginListContainer row\">
        {% for plugin in pluginsToShow %}
            <div class=\"col s12 m6 l4\">
                {% embed 'contentBlock.twig' with {'title': ''} %}
                    {% block content %}
                        {% import '@Marketplace/macros.twig' as marketplaceMacro %}
                        {% import '@CorePluginsAdmin/macros.twig' as pluginsMacro %}
                        <div class=\"plugin\">
                            <h3 class=\"card-title\" title=\"{{ 'General_MoreDetails'|translate }}\">
                                <a href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\">{{ plugin.displayName }}</a>
                            </h3>

                            <p class=\"description\">
                                {{ plugin.description }}
                                <a class=\"more\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\" title=\"{{ 'General_MoreDetails'|translate }}\">
                                    &rsaquo; {{ 'General_MoreLowerCase'|translate }}</a>
                            </p>

                            {% if showThemes %}
                                {# Screenshot for themes #}
                                <a class=\"more\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\">
                                    <img title=\"{{ 'General_MoreDetails'|translate }}\"
                                         class=\"preview\" src=\"{{ plugin.screenshots|first }}?w=250&h=150\"/></a>
                            {% endif %}

                            <ul class=\"metadata\">
                                {% if plugin.isBundle is not defined or not plugin.isBundle %}
                                    <li>
                                        {% if plugin.latestVersion %}
                                            {{ 'CorePluginsAdmin_Version'|translate }}: {{ plugin.latestVersion }}
                                        {% endif %}

                                        {% if plugin.canBeUpdated %}
                                            <a class=\"update-available\"
                                                {% if plugin.changelog is defined and plugin.changelog and plugin.changelog.url is defined and plugin.changelog.url %}
                                                    target=\"_blank\" href=\"{{ plugin.changelog.url }}\"
                                                {% else %}
                                                    href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\"
                                                {% endif %}
                                               title=\"{{ 'Marketplace_PluginUpdateAvailable'|translate(plugin.currentVersion, plugin.latestVersion) }}\">
                                                {{ 'Marketplace_NewVersion'|translate }}</a>
                                        {% endif %}
                                    </li>
                                    {% if plugin.lastUpdated %}
                                        <li>{{ 'Marketplace_Updated'|translate }}: {{ plugin.lastUpdated }}</li>
                                    {% endif %}
                                    {% if plugin.numDownloads %}
                                        <li>{{ 'General_Downloads'|translate }}: {{ plugin.numDownloads }}</li>
                                    {% endif %}
                                    <li>{{ 'Marketplace_Developer'|translate }}: {{ marketplaceMacro.pluginDeveloper(plugin.owner) }}</li>
                                {% endif %}
                            </ul>

                            {% macro moreDetailsLink(plugin) %}
                                {% set canBePurchased = not plugin.isDownloadable and plugin.shop is defined and plugin.shop and plugin.shop.url %}
                                <a class=\"btn btn-block plugin-details {% if canBePurchased %}purchaseable{% endif %}\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\" title=\"{{ 'General_MoreDetails'|translate }}\">

                                    {% if canBePurchased and plugin.shop.variations %}
                                        {% set foundCheapest = 0 %}
                                        {% for variation in plugin.shop.variations %}
                                            {% if not foundCheapest and variation.cheapest is defined and variation.cheapest %}
                                                {% set foundCheapest = 1 %}
                                                {{ 'Marketplace_PriceFromPerPeriod'|translate(variation.prettyPrice, variation.period) }}
                                            {% endif %}
                                        {% endfor %}
                                        {% if not foundCheapest %}
                                            {{ 'Marketplace_PriceFromPerPeriod'|translate(plugin.shop.variations.0.prettyPrice, plugin.shop.variations.0.period) }}
                                        {% endif %}
                                    {% else %}
                                        {{ 'General_MoreDetails'|translate }}
                                    {% endif %}
                                    <span style=\"white-space: nowrap;\">({{ 'Marketplace_FreeTrialLabel'|translate }})</span>
                                </a>
                            {% endmacro %}


                            {% if isSuperUser %}
                                <div class=\"footer\">
                                    {% if plugin.isMissingLicense is defined and plugin.isMissingLicense %}

                                        <div class=\"alert alert-danger\" >
                                            {{ 'Marketplace_LicenseMissing'|translate }}

                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\" title=\"{{ 'General_MoreDetails'|translate }}\">{{ 'General_Help'|translate }}</a>)</span>
                                        </div>

                                    {% elseif plugin.hasExceededLicense is defined and plugin.hasExceededLicense %}
                                        <div class=\"alert alert-danger\">
                                            {{ 'Marketplace_LicenseExceeded'|translate }}

                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\" title=\"{{ 'General_MoreDetails'|translate }}\">{{ 'General_Help'|translate }}</a>)</span>
                                        </div>

                                    {% elseif plugin.canBeUpdated and 0 == plugin.missingRequirements|length and isAutoUpdatePossible %}
                                        <a class=\"btn btn-block\"
                                           href=\"{{ linkTo({'module': 'Marketplace', 'action':'updatePlugin', 'pluginName': plugin.name, 'nonce': updateNonce}) }}\">
                                            {{ 'CoreUpdater_UpdateTitle'|translate }}
                                        </a>
                                    {% elseif plugin.missingRequirements|length > 0 or not isAutoUpdatePossible %}
                                        {% macro downloadButton(showOr, plugin, isAutoUpdatePossible, showBrackets = false) -%}
                                            {%- if plugin.missingRequirements|length == 0 and plugin.isDownloadable and not isAutoUpdatePossible -%}
                                                {% if showBrackets %}({% endif %}<span onclick=\"\$(this).css('display', 'none')\">
                                                {%- if showOr %} {{ 'General_Or'|translate }} {% endif -%}
                                                <a class=\"plugin-details download\"
                                                   href=\"{{ linkTo({'module': 'Marketplace', 'action': 'download', 'pluginName': plugin.name, 'nonce': (plugin.name|nonce)}) }}\"
                                                >{{ 'General_Download'|translate }}</a></span>{% if showBrackets %}){% endif %}
                                            {%- endif -%}
                                        {%- endmacro %}

                                        {% if plugin.canBeUpdated and 0 == plugin.missingRequirements|length %}
                                            {{ 'Marketplace_CannotUpdate'|translate }}
                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\" title=\"{{ 'General_MoreDetails'|translate }}\">{{ 'General_Help'|translate }}</a>{{ _self.downloadButton(true, plugin, isAutoUpdatePossible)|raw }})</span>
                                        {% elseif plugin.isInstalled %}
                                            {{ 'General_Installed'|translate }}
                                            {{ _self.downloadButton(false, plugin, isAutoUpdatePossible, true)|raw }}
                                        {% elseif not plugin.isDownloadable %}
                                            {{ _self.moreDetailsLink(plugin)|raw }}
                                        {% else %}
                                            {{ 'Marketplace_CannotInstall'|translate }}

                                            <span style=\"white-space:nowrap\">(<a class=\"plugin-details\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\"  vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\" title=\"{{ 'General_MoreDetails'|translate }}\">{{ 'General_Help'|translate }}</a>{{ _self.downloadButton(true, plugin, isAutoUpdatePossible)|raw }})</span>
                                        {% endif %}

                                    {% elseif plugin.isInstalled %}
                                        {{ 'General_Installed'|translate }}

                                        {% if not plugin.isInvalid and not isMultiServerEnvironment and isPluginsAdminEnabled %}
                                            ({{ pluginsMacro.pluginActivateDeactivateAction(plugin.name, plugin.isActivated, plugin.missingRequirements, deactivateNonce, activateNonce) }})
                                        {% endif %}

                                    {% elseif plugin.isPaid and not plugin.isDownloadable %}
                                        {{ _self.moreDetailsLink(plugin)|raw }}
                                    {% else %}
                                        <a href=\"{{ linkTo({'module': 'Marketplace', 'action': 'installPlugin', 'pluginName': plugin.name, 'nonce': installNonce}) }}\"
                                           class=\"btn\">
                                            {{ 'Marketplace_ActionInstall'|translate }}
                                        </a>
                                    {% endif %}
                                </div>
                            {% else %}
                                <div class=\"footer\">
                                    {{ _self.moreDetailsLink(plugin)|raw }}
                                </div>
                            {% endif %}

                        </div>
                    {% endblock %}
                {% endembed %}
            </div>
        {% endfor %}
    </div>
{% endif %}

{% if pluginsToShow|length == 0 %}
    <div vue-entry=\"CoreHome.ContentBlock\">
        {% if showThemes %}
            {{ 'Marketplace_NoThemesFound'|translate }}
        {% else %}
            {{ 'Marketplace_NoPluginsFound'|translate }}
        {% endif %}
    </div>
{% endif %}

", "@Marketplace/plugin-list.twig", "/Users/natanandlacey/source/analytics/src/plugins/Marketplace/templates/plugin-list.twig");
    }
}
