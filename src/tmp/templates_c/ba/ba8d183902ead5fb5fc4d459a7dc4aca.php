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

/* @ProfessionalServices/pluginAdvertising.twig */
class __TwigTemplate_fee6983e5dca20fc60bf7941755fc6c1 extends Template
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
    class=\"pluginPromo\"
    vue-entry=\"CoreHome.ContentBlock\"
    content-title=\"";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\"
    image-url=\"plugins/ProfessionalServices/images/";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, twig_lower_filter($this->env, ((array_key_exists("imageName", $context)) ? (_twig_default_filter((isset($context["imageName"]) || array_key_exists("imageName", $context) ? $context["imageName"] : (function () { throw new RuntimeError('Variable "imageName" does not exist.', 5, $this->source); })()), (("ad-" . twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5)) . ".png"))) : ((("ad-" . twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5)) . ".png")))), "html", null, true);
        echo "\"
    image-alt-text=\"";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("ProfessionalServices_AltTextPreviewImageFor", twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 6, $this->source); })()), "displayName", [], "any", false, false, false, 6)), "html", null, true);
        echo "\"
>
    <div class=\"promo-content\">
        ";
        // line 9
        if (twig_length_filter($this->env, ((array_key_exists("listOfFeatures", $context)) ? (_twig_default_filter((isset($context["listOfFeatures"]) || array_key_exists("listOfFeatures", $context) ? $context["listOfFeatures"] : (function () { throw new RuntimeError('Variable "listOfFeatures" does not exist.', 9, $this->source); })()), [])) : ([])))) {
            // line 10
            echo "            <div class=\"promo-features\">
                <ul>
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listOfFeatures"]) || array_key_exists("listOfFeatures", $context) ? $context["listOfFeatures"] : (function () { throw new RuntimeError('Variable "listOfFeatures" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 13
                echo "                        <li><span class=\"promo-icon icon-ok\"></span>";
                echo $context["feature"];
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                </ul>
            </div>
        ";
        }
        // line 18
        echo "    </div>
    <div class=\"promo-actions\">
        <a class=\"btn\" target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "shop", [], "any", false, true, false, 20), "url", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "shop", [], "any", false, true, false, 20), "url", [], "any", false, false, false, 20), "")) : ("")), "html_attr");
        echo "\">
            ";
        // line 21
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("ProfessionalServices_CTAStartFreeTrial"), "html", null, true);
        echo "
        </a>
        <a class=\"learn-more\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\" vue-directive-value=\"";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, json_encode(["pluginName" => twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\" aria-label=\"";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("ProfessionalServices_CTALearnMore", twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 23, $this->source); })()), "displayName", [], "any", false, false, false, 23)), "html", null, true);
        echo "\">
            ";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_LearnMore"), "html", null, true);
        echo "
        </a>
    </div>
    ";
        // line 27
        if ((isset($context["userCanDismiss"]) || array_key_exists("userCanDismiss", $context) ? $context["userCanDismiss"] : (function () { throw new RuntimeError('Variable "userCanDismiss" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "        <div class=\"promo-dismiss\">
            ";
            // line 29
            echo $this->env->getFilter('translate')->getCallable()("ProfessionalServices_DismissPromoWidget", (("<a href=\"#\" vue-directive=\"ProfessionalServices.DismissPromoWidget\" vue-directive-value=\"{&quot;widgetName&quot;:&quot;" . (isset($context["widgetName"]) || array_key_exists("widgetName", $context) ? $context["widgetName"] : (function () { throw new RuntimeError('Variable "widgetName" does not exist.', 29, $this->source); })())) . "&quot;}\">"), "</a>");
            echo "
        </div>
    ";
        }
        // line 32
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@ProfessionalServices/pluginAdvertising.twig";
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
        return array (  116 => 32,  110 => 29,  107 => 28,  105 => 27,  99 => 24,  93 => 23,  88 => 21,  84 => 20,  80 => 18,  75 => 15,  66 => 13,  62 => 12,  58 => 10,  56 => 9,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
    class=\"pluginPromo\"
    vue-entry=\"CoreHome.ContentBlock\"
    content-title=\"{{ title }}\"
    image-url=\"plugins/ProfessionalServices/images/{{ imageName|default('ad-' ~ plugin.name ~ '.png')|lower }}\"
    image-alt-text=\"{{ 'ProfessionalServices_AltTextPreviewImageFor'|translate(plugin.displayName) }}\"
>
    <div class=\"promo-content\">
        {% if listOfFeatures|default([])|length %}
            <div class=\"promo-features\">
                <ul>
                    {% for feature in listOfFeatures %}
                        <li><span class=\"promo-icon icon-ok\"></span>{{ feature|raw }}</li>
                    {% endfor %}
                </ul>
            </div>
        {% endif %}
    </div>
    <div class=\"promo-actions\">
        <a class=\"btn\" target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ plugin.shop.url|default('')|e('html_attr') }}\">
            {{ 'ProfessionalServices_CTAStartFreeTrial'|translate }}
        </a>
        <a class=\"learn-more\" href=\"#\" vue-directive=\"CorePluginsAdmin.PluginName\" vue-directive-value=\"{{ { pluginName: plugin.name }|json_encode }}\" aria-label=\"{{ 'ProfessionalServices_CTALearnMore'|translate(plugin.displayName) }}\">
            {{ 'CoreAdminHome_LearnMore'|translate }}
        </a>
    </div>
    {% if userCanDismiss %}
        <div class=\"promo-dismiss\">
            {{ 'ProfessionalServices_DismissPromoWidget'|translate('<a href=\"#\" vue-directive=\"ProfessionalServices.DismissPromoWidget\" vue-directive-value=\"{&quot;widgetName&quot;:&quot;' ~ widgetName ~ '&quot;}\">', '</a>')|raw }}
        </div>
    {% endif %}
</div>
", "@ProfessionalServices/pluginAdvertising.twig", "/Users/natanandlacey/source/analytics/src/plugins/ProfessionalServices/templates/pluginAdvertising.twig");
    }
}
