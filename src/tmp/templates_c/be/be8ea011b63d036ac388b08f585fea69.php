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

/* @SitesManager/_integrationsTab.twig */
class __TwigTemplate_bdb0aba13d9fa44ae8932888c3df71c4 extends Template
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
        echo "<h2>";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_CmsAndWebsiteBuilders"), "html", null, true);
        echo "</h2>

";
        // line 3
        if ((isset($context["instruction"]) || array_key_exists("instruction", $context) ? $context["instruction"] : (function () { throw new RuntimeError('Variable "instruction" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    <p>";
            echo (isset($context["instruction"]) || array_key_exists("instruction", $context) ? $context["instruction"] : (function () { throw new RuntimeError('Variable "instruction" does not exist.', 4, $this->source); })());
            echo "</p>

    ";
            // line 6
            if (twig_in_filter("GoogleTagManager", (isset($context["trackers"]) || array_key_exists("trackers", $context) ? $context["trackers"] : (function () { throw new RuntimeError('Variable "trackers" does not exist.', 6, $this->source); })()))) {
                // line 7
                echo "        <p>";
                echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataDetectedGtm", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager"), "</a>");
                echo "</p>
    ";
            }
            // line 9
            echo "
    <p>";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataOtherIntegrations"), "html", null, true);
            echo ": ";
            echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3a", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/integrate/"), "</a>");
            echo "</p>
";
        } else {
            // line 12
            echo "    <p>";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_InstallationGuidesIntro"), "html", null, true);
            echo "</p>

    <p>
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["instructionUrls"]) || array_key_exists("instructionUrls", $context) ? $context["instructionUrls"] : (function () { throw new RuntimeError('Variable "instructionUrls" does not exist.', 15, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["instructionUrl"]) {
                // line 16
                echo "        ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 16)) {
                    echo " | ";
                }
                echo "<a target=\"_blank\" rel=\"noreferrer noopener\" href='";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructionUrl"], "instructionUrl", [], "any", false, false, false, 16), "html", null, true);
                echo "'>";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructionUrl"], "name", [], "any", false, false, false, 16), "html", null, true);
                echo "</a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instructionUrl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </p>

    <p>";
            // line 20
            echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3a", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/integrate/"), "</a>");
            echo "</p>
    <p>";
            // line 21
            echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3b");
            echo "</p>
    <br>
    <p>";
            // line 23
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_ExtraInformationNeeded"), "html", null, true);
            echo "</p>
    <p>Matomo URL: <code vue-directive=\"CoreHome.CopyToClipboard\">";
            // line 24
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["matomoUrl"]) || array_key_exists("matomoUrl", $context) ? $context["matomoUrl"] : (function () { throw new RuntimeError('Variable "matomoUrl" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "</code></p>
    <p>";
            // line 25
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsYourSiteId", (("<code vue-directive=\"CoreHome.CopyToClipboard\">" . (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 25, $this->source); })())) . "</code>"));
            echo "</p>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SitesManager/_integrationsTab.twig";
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
        return array (  137 => 25,  133 => 24,  129 => 23,  124 => 21,  120 => 20,  116 => 18,  93 => 16,  76 => 15,  69 => 12,  62 => 10,  59 => 9,  53 => 7,  51 => 6,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>{{ 'SitesManager_CmsAndWebsiteBuilders'|translate }}</h2>

{% if instruction %}
    <p>{{ instruction|raw }}</p>

    {% if 'GoogleTagManager' in trackers %}
        <p>{{ 'SitesManager_SiteWithoutDataDetectedGtm'|translate(externallink('https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager'),'</a>')|raw }}</p>
    {% endif %}

    <p>{{ 'SitesManager_SiteWithoutDataOtherIntegrations'|translate }}: {{ 'CoreAdminHome_JSTrackingIntro3a'|translate(externallink('https://matomo.org/integrate/'),'</a>')|raw }}</p>
{% else %}
    <p>{{ 'SitesManager_InstallationGuidesIntro'|translate }}</p>

    <p>
    {% for instructionUrl in instructionUrls %}
        {% if not loop.first %} | {% endif %}<a target=\"_blank\" rel=\"noreferrer noopener\" href='{{ instructionUrl.instructionUrl }}'>{{ instructionUrl.name }}</a>
    {% endfor %}
    </p>

    <p>{{ 'CoreAdminHome_JSTrackingIntro3a'|translate(externallink('https://matomo.org/integrate/'),'</a>')|raw }}</p>
    <p>{{ 'CoreAdminHome_JSTrackingIntro3b'|translate|raw }}</p>
    <br>
    <p>{{ 'SitesManager_ExtraInformationNeeded'|translate }}</p>
    <p>Matomo URL: <code vue-directive=\"CoreHome.CopyToClipboard\">{{ matomoUrl }}</code></p>
    <p>{{ 'SitesManager_EmailInstructionsYourSiteId'|translate('<code vue-directive=\"CoreHome.CopyToClipboard\">' ~ idSite ~ '</code>')|raw }}</p>
{% endif %}", "@SitesManager/_integrationsTab.twig", "/Users/natanandlacey/source/analytics/src/plugins/SitesManager/templates/_integrationsTab.twig");
    }
}
