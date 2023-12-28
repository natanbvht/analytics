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

/* @SitesManager/_matomoTabInstructions.twig */
class __TwigTemplate_fec7ac3d26ced02057e5b306821c9742 extends Template
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
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_StepByStepGuide"), "html", null, true);
        echo "</h2>

";
        // line 3
        if ((array_key_exists("notificationMessage", $context) && (isset($context["notificationMessage"]) || array_key_exists("notificationMessage", $context) ? $context["notificationMessage"] : (function () { throw new RuntimeError('Variable "notificationMessage" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "    <p></p><p></p>
    <div class=\"system notification notification-info\">
        ";
            // line 6
            echo (isset($context["notificationMessage"]) || array_key_exists("notificationMessage", $context) ? $context["notificationMessage"] : (function () { throw new RuntimeError('Variable "notificationMessage" does not exist.', 6, $this->source); })());
            echo "
    </div>
";
        }
        // line 9
        echo "
<div
    vue-entry=\"CoreAdminHome.JsTrackingCodeGeneratorSitesWithoutData\"
    default-site=\"";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["defaultSiteDecoded"]) || array_key_exists("defaultSiteDecoded", $context) ? $context["defaultSiteDecoded"] : (function () { throw new RuntimeError('Variable "defaultSiteDecoded" does not exist.', 12, $this->source); })())), "html", null, true);
        echo "\"
    max-custom-variables=\"";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["maxCustomVariables"]) || array_key_exists("maxCustomVariables", $context) ? $context["maxCustomVariables"] : (function () { throw new RuntimeError('Variable "maxCustomVariables" does not exist.', 13, $this->source); })())), "html", null, true);
        echo "\"
    server-side-do-not-track-enabled=\"";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["serverSideDoNotTrackEnabled"]) || array_key_exists("serverSideDoNotTrackEnabled", $context) ? $context["serverSideDoNotTrackEnabled"] : (function () { throw new RuntimeError('Variable "serverSideDoNotTrackEnabled" does not exist.', 14, $this->source); })())), "html", null, true);
        echo "\"
    js-tag=\"";
        // line 15
        echo (isset($context["jsTag"]) || array_key_exists("jsTag", $context) ? $context["jsTag"] : (function () { throw new RuntimeError('Variable "jsTag" does not exist.', 15, $this->source); })());
        echo "\"
    is-js-tracker-install-check-available=\"";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["isJsTrackerInstallCheckAvailable"]) || array_key_exists("isJsTrackerInstallCheckAvailable", $context) ? $context["isJsTrackerInstallCheckAvailable"] : (function () { throw new RuntimeError('Variable "isJsTrackerInstallCheckAvailable" does not exist.', 16, $this->source); })())), "html", null, true);
        echo "\"
></div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SitesManager/_matomoTabInstructions.twig";
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
        return array (  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  55 => 9,  49 => 6,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>{{ 'SitesManager_StepByStepGuide'|translate }}</h2>

{% if notificationMessage is defined and notificationMessage %}
    <p></p><p></p>
    <div class=\"system notification notification-info\">
        {{ notificationMessage|raw }}
    </div>
{% endif %}

<div
    vue-entry=\"CoreAdminHome.JsTrackingCodeGeneratorSitesWithoutData\"
    default-site=\"{{ defaultSiteDecoded|json_encode }}\"
    max-custom-variables=\"{{ maxCustomVariables|json_encode }}\"
    server-side-do-not-track-enabled=\"{{ serverSideDoNotTrackEnabled|json_encode }}\"
    js-tag=\"{{ jsTag|raw }}\"
    is-js-tracker-install-check-available=\"{{ isJsTrackerInstallCheckAvailable|json_encode }}\"
></div>", "@SitesManager/_matomoTabInstructions.twig", "/Users/natanandlacey/source/analytics/src/plugins/SitesManager/templates/_matomoTabInstructions.twig");
    }
}
