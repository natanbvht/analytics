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

/* @SitesManager/_cloudflareTabInstructions.twig */
class __TwigTemplate_8660856fd92c85ff7e95d7ecc94f1753 extends Template
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
        if ((isset($context["wasDetected"]) || array_key_exists("wasDetected", $context) ? $context["wasDetected"] : (function () { throw new RuntimeError('Variable "wasDetected" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "<div class=\"system notification notification-info\">
    ";
            // line 5
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_CloudflareDetected", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/"), "</a>");
            echo "
</div>
";
        }
        // line 8
        echo "
<p>";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareIntro"), "html", null, true);
        echo "</p>
<br>
<p>";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStepsIntro"), "html", null, true);
        echo "</p>
<ol class=\"list-style-decimal\">
    <li>";
        // line 13
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep01", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://dash.cloudflare.com/\">", "</a>");
        echo "</li>
    <li>";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep02"), "html", null, true);
        echo "</li>
    <li>";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep03"), "html", null, true);
        echo "</li>
    <li>";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep04"), "html", null, true);
        echo "</li>
    <li>";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep05"), "html", null, true);
        echo "</li>
    <li>";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep06"), "html", null, true);
        echo "</li>
    <li>";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep07"), "html", null, true);
        echo "<div>Matomo URL: <code vue-directive=\"CoreHome.CopyToClipboard\">";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</code></div><div>";
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsYourSiteId", (("<code vue-directive=\"CoreHome.CopyToClipboard\">" . (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 19, $this->source); })())) . "</code>"));
        echo "</div></li>
    <li>";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep08"), "html", null, true);
        echo "</li>
    <li>";
        // line 21
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep09"), "html", null, true);
        echo "</li>
    <li>";
        // line 22
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep10"), "html", null, true);
        echo "</li>
</ol>
<br>
<p>";
        // line 25
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStepCompleted", "<strong>", "</strong>");
        echo "</p>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SitesManager/_cloudflareTabInstructions.twig";
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
        return array (  113 => 25,  107 => 22,  103 => 21,  99 => 20,  91 => 19,  87 => 18,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  67 => 13,  62 => 11,  57 => 9,  54 => 8,  48 => 5,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>{{ 'SitesManager_StepByStepGuide'|translate }}</h2>

{% if wasDetected %}
<div class=\"system notification notification-info\">
    {{ 'SitesManager_CloudflareDetected'|translate(externallink('https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/'),'</a>')|raw }}
</div>
{% endif %}

<p>{{ 'SitesManager_SiteWithoutDataCloudflareIntro'|translate }}</p>
<br>
<p>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStepsIntro'|translate }}</p>
<ol class=\"list-style-decimal\">
    <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep01'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://dash.cloudflare.com/\">','</a>')|raw }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep02'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep03'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep04'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep05'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep06'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep07'|translate }}<div>Matomo URL: <code vue-directive=\"CoreHome.CopyToClipboard\">{{ piwikUrl }}</code></div><div>{{ 'SitesManager_EmailInstructionsYourSiteId'|translate('<code vue-directive=\"CoreHome.CopyToClipboard\">' ~ idSite ~ '</code>')|raw }}</div></li>
    <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep08'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep09'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep10'|translate }}</li>
</ol>
<br>
<p>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStepCompleted'|translate('<strong>','</strong>')|raw }}</p>
", "@SitesManager/_cloudflareTabInstructions.twig", "/Users/natanandlacey/source/analytics/src/plugins/SitesManager/templates/_cloudflareTabInstructions.twig");
    }
}
