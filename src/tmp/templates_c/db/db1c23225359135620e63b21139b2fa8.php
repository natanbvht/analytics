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

/* @CoreHome/_headerMessage.twig */
class __TwigTemplate_3b3c85d400ea7a5f92c1ea4984964e73 extends Template
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
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, (((((isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 1, $this->source); })()) == "http://demo.matomo.org/") || ((isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 1, $this->source); })()) == "https://demo.matomo.org/")) || ((isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 1, $this->source); })()) == "https://demo.matomo.cloud/")) || ((isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 1, $this->source); })()) == "http://demo.matomo.cloud/")), "html", null, true);
        $context["isPiwikDemo"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "    <span id=\"updateCheckLinkContainer\">
        <span class=\"icon icon-fixed icon-reload\"></span>
        ";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()(((((array_key_exists("lastUpdateCheckFailed", $context)) ? (_twig_default_filter((isset($context["lastUpdateCheckFailed"]) || array_key_exists("lastUpdateCheckFailed", $context) ? $context["lastUpdateCheckFailed"] : (function () { throw new RuntimeError('Variable "lastUpdateCheckFailed" does not exist.', 6, $this->source); })()), false)) : (false))) ? ("General_ErrorTryAgain") : ("CoreHome_CheckForUpdates"))), "html", null, true);
        echo "
    </span>
";
        $context["updateCheck"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "
";
        // line 10
        if ((        // line 11
(isset($context["isAutoUpdateEnabled"]) || array_key_exists("isAutoUpdateEnabled", $context) ? $context["isAutoUpdateEnabled"] : (function () { throw new RuntimeError('Variable "isAutoUpdateEnabled" does not exist.', 11, $this->source); })()) && (((((        // line 12
(isset($context["latest_version_available"]) || array_key_exists("latest_version_available", $context) ? $context["latest_version_available"] : (function () { throw new RuntimeError('Variable "latest_version_available" does not exist.', 12, $this->source); })()) &&  !(isset($context["isPiwikDemo"]) || array_key_exists("isPiwikDemo", $context) ? $context["isPiwikDemo"] : (function () { throw new RuntimeError('Variable "isPiwikDemo" does not exist.', 12, $this->source); })())) && (isset($context["hasSomeViewAccess"]) || array_key_exists("hasSomeViewAccess", $context) ? $context["hasSomeViewAccess"] : (function () { throw new RuntimeError('Variable "hasSomeViewAccess" does not exist.', 12, $this->source); })())) &&  !(isset($context["isUserIsAnonymous"]) || array_key_exists("isUserIsAnonymous", $context) ? $context["isUserIsAnonymous"] : (function () { throw new RuntimeError('Variable "isUserIsAnonymous" does not exist.', 12, $this->source); })())) && (isset($context["showUpdateNotificationToUser"]) || array_key_exists("showUpdateNotificationToUser", $context) ? $context["showUpdateNotificationToUser"] : (function () { throw new RuntimeError('Variable "showUpdateNotificationToUser" does not exist.', 12, $this->source); })())) || (        // line 14
(isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 14, $this->source); })()) && ((((        // line 16
array_key_exists("isManualUpdateCheck", $context) && (isset($context["isManualUpdateCheck"]) || array_key_exists("isManualUpdateCheck", $context) ? $context["isManualUpdateCheck"] : (function () { throw new RuntimeError('Variable "isManualUpdateCheck" does not exist.', 16, $this->source); })())) && array_key_exists("lastUpdateCheckFailed", $context)) && (isset($context["lastUpdateCheckFailed"]) || array_key_exists("lastUpdateCheckFailed", $context) ? $context["lastUpdateCheckFailed"] : (function () { throw new RuntimeError('Variable "lastUpdateCheckFailed" does not exist.', 16, $this->source); })())) || (        // line 17
array_key_exists("isAdminArea", $context) && (isset($context["isAdminArea"]) || array_key_exists("isAdminArea", $context) ? $context["isAdminArea"] : (function () { throw new RuntimeError('Variable "isAdminArea" does not exist.', 17, $this->source); })()))))))) {
            // line 21
            echo "<div
    vue-entry=\"CoreHome.VersionInfoHeaderMessage\"
    last-update-check-failed=\"";
            // line 23
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("lastUpdateCheckFailed", $context)) ? (_twig_default_filter((isset($context["lastUpdateCheckFailed"]) || array_key_exists("lastUpdateCheckFailed", $context) ? $context["lastUpdateCheckFailed"] : (function () { throw new RuntimeError('Variable "lastUpdateCheckFailed" does not exist.', 23, $this->source); })()), false)) : (false))), "html", null, true);
            echo "\"
    latest-version-available=\"";
            // line 24
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("latest_version_available", $context)) ? (_twig_default_filter((isset($context["latest_version_available"]) || array_key_exists("latest_version_available", $context) ? $context["latest_version_available"] : (function () { throw new RuntimeError('Variable "latest_version_available" does not exist.', 24, $this->source); })()), null)) : (null))), "html", null, true);
            echo "\"
    is-multi-server-environment=\"";
            // line 25
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isMultiServerEnvironment", $context)) ? (_twig_default_filter((isset($context["isMultiServerEnvironment"]) || array_key_exists("isMultiServerEnvironment", $context) ? $context["isMultiServerEnvironment"] : (function () { throw new RuntimeError('Variable "isMultiServerEnvironment" does not exist.', 25, $this->source); })()), false)) : (false))), "html", null, true);
            echo "\"
    is-piwik-demo=\"";
            // line 26
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isPiwikDemo", $context)) ? (_twig_default_filter((isset($context["isPiwikDemo"]) || array_key_exists("isPiwikDemo", $context) ? $context["isPiwikDemo"] : (function () { throw new RuntimeError('Variable "isPiwikDemo" does not exist.', 26, $this->source); })()), false)) : (false))), "html", null, true);
            echo "\"
    is-super-user=\"";
            // line 27
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isSuperUser", $context)) ? (_twig_default_filter((isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 27, $this->source); })()), false)) : (false))), "html", null, true);
            echo "\"
    is-admin-area=\"";
            // line 28
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isAdminArea", $context)) ? (_twig_default_filter((isset($context["isAdminArea"]) || array_key_exists("isAdminArea", $context) ? $context["isAdminArea"] : (function () { throw new RuntimeError('Variable "isAdminArea" does not exist.', 28, $this->source); })()), false)) : (false))), "html", null, true);
            echo "\"
    is-internet-enabled=\"";
            // line 29
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isInternetEnabled", $context)) ? (_twig_default_filter((isset($context["isInternetEnabled"]) || array_key_exists("isInternetEnabled", $context) ? $context["isInternetEnabled"] : (function () { throw new RuntimeError('Variable "isInternetEnabled" does not exist.', 29, $this->source); })()), false)) : (false))), "html", null, true);
            echo "\"
    update-check=\"";
            // line 30
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("updateCheck", $context)) ? (_twig_default_filter((isset($context["updateCheck"]) || array_key_exists("updateCheck", $context) ? $context["updateCheck"] : (function () { throw new RuntimeError('Variable "updateCheck" does not exist.', 30, $this->source); })()))) : (""))), "html", null, true);
            echo "\"
    has-some-view-access=\"";
            // line 31
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("hasSomeViewAccess", $context)) ? (_twig_default_filter((isset($context["hasSomeViewAccess"]) || array_key_exists("hasSomeViewAccess", $context) ? $context["hasSomeViewAccess"] : (function () { throw new RuntimeError('Variable "hasSomeViewAccess" does not exist.', 31, $this->source); })()), false)) : (false))), "html", null, true);
            echo "\"
    is-anonymous=\"";
            // line 32
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isUserIsAnonymous", $context)) ? (_twig_default_filter((isset($context["isUserIsAnonymous"]) || array_key_exists("isUserIsAnonymous", $context) ? $context["isUserIsAnonymous"] : (function () { throw new RuntimeError('Variable "isUserIsAnonymous" does not exist.', 32, $this->source); })()), false)) : (false))), "html", null, true);
            echo "\"
    contact-email=\"";
            // line 33
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["contactEmail"]) || array_key_exists("contactEmail", $context) ? $context["contactEmail"] : (function () { throw new RuntimeError('Variable "contactEmail" does not exist.', 33, $this->source); })())), "html", null, true);
            echo "\"
    piwik-version=\"";
            // line 34
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("piwik_version", $context)) ? (_twig_default_filter((isset($context["piwik_version"]) || array_key_exists("piwik_version", $context) ? $context["piwik_version"] : (function () { throw new RuntimeError('Variable "piwik_version" does not exist.', 34, $this->source); })()), null)) : (null))), "html", null, true);
            echo "\"
    class=\"borderedControl piwikTopControl\"
></div>

<span class=\"icon icon-arrowup\"></span>
<div style=\"clear:right\"></div>
";
        } else {
            // line 41
            echo "<span class=\"icon icon-arrowup\"></span>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_headerMessage.twig";
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
        return array (  124 => 41,  114 => 34,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 21,  64 => 17,  63 => 16,  62 => 14,  61 => 12,  60 => 11,  59 => 10,  56 => 9,  50 => 6,  46 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set isPiwikDemo %}{{ piwikUrl == 'http://demo.matomo.org/' or piwikUrl == 'https://demo.matomo.org/' or piwikUrl == 'https://demo.matomo.cloud/' or piwikUrl == 'http://demo.matomo.cloud/' }}{% endset %}

{% set updateCheck %}
    <span id=\"updateCheckLinkContainer\">
        <span class=\"icon icon-fixed icon-reload\"></span>
        {{ (lastUpdateCheckFailed|default(false) ? 'General_ErrorTryAgain' : 'CoreHome_CheckForUpdates')|translate }}
    </span>
{% endset %}

{% if
    isAutoUpdateEnabled and (
        (latest_version_available and not isPiwikDemo and hasSomeViewAccess and not isUserIsAnonymous and showUpdateNotificationToUser)
        or (
            isSuperUser
            and (
                (isManualUpdateCheck is defined and isManualUpdateCheck and lastUpdateCheckFailed is defined and lastUpdateCheckFailed)
                or (isAdminArea is defined and isAdminArea)
            )
        )
    ) %}
<div
    vue-entry=\"CoreHome.VersionInfoHeaderMessage\"
    last-update-check-failed=\"{{ lastUpdateCheckFailed|default(false)|json_encode }}\"
    latest-version-available=\"{{ latest_version_available|default(null)|json_encode }}\"
    is-multi-server-environment=\"{{ isMultiServerEnvironment|default(false)|json_encode }}\"
    is-piwik-demo=\"{{ isPiwikDemo|default(false)|json_encode }}\"
    is-super-user=\"{{ isSuperUser|default(false)|json_encode }}\"
    is-admin-area=\"{{ isAdminArea|default(false)|json_encode }}\"
    is-internet-enabled=\"{{ isInternetEnabled|default(false)|json_encode }}\"
    update-check=\"{{ updateCheck|default|json_encode }}\"
    has-some-view-access=\"{{ hasSomeViewAccess|default(false)|json_encode }}\"
    is-anonymous=\"{{ isUserIsAnonymous|default(false)|json_encode }}\"
    contact-email=\"{{ contactEmail|json_encode }}\"
    piwik-version=\"{{ piwik_version|default(null)|json_encode }}\"
    class=\"borderedControl piwikTopControl\"
></div>

<span class=\"icon icon-arrowup\"></span>
<div style=\"clear:right\"></div>
{% else %}
<span class=\"icon icon-arrowup\"></span>
{% endif %}
", "@CoreHome/_headerMessage.twig", "/Users/natanandlacey/source/analytics/src/plugins/CoreHome/templates/_headerMessage.twig");
    }
}
