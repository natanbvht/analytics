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

/* @SitesManager/_gtmTabInstructions.twig */
class __TwigTemplate_3567282a885b0d345a9227dffab9f650 extends Template
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
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_GTMDetected", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/tag-manager/migrating-from-google-tag-manager/"), "</a>");
            echo "
</div>
";
        }
        // line 8
        echo "
<p>";
        // line 9
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGoogleTagManagerIntro", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager/"), "</a>");
        echo "</p>
<br>
<p>";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGoogleTagManagerFollowStepsIntro"), "html", null, true);
        echo "</p>
<ol class=\"list-style-decimal\">
    <li>";
        // line 13
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep1", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://tagmanager.google.com/\">", "</a>");
        echo "</li>
    <li>";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep2"), "html", null, true);
        echo "</li>
    <li>";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep3"), "html", null, true);
        echo "</li>
    <li>";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep4"), "html", null, true);
        echo "</li>
    <li>";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep5"), "html", null, true);
        echo "</li>
    <li>";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep6"), "html", null, true);
        echo "<br><div><pre vue-directive=\"CoreHome.CopyToClipboard\">";
        echo (isset($context["jsTag"]) || array_key_exists("jsTag", $context) ? $context["jsTag"] : (function () { throw new RuntimeError('Variable "jsTag" does not exist.', 18, $this->source); })());
        echo "</pre></div></li>
    <li>";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep7"), "html", null, true);
        echo "</li>
    <li>";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep8"), "html", null, true);
        echo "</li>
    <li>";
        // line 21
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep9"), "html", null, true);
        echo "</li>
    <li>";
        // line 22
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep10"), "html", null, true);
        echo "</li>
    <li>";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep11"), "html", null, true);
        echo "</li>
</ol>
<br>
<p>";
        // line 26
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGoogleTagManagerFollowStepCompleted", "<strong>", "</strong>");
        echo "</p>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SitesManager/_gtmTabInstructions.twig";
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
        return array (  115 => 26,  109 => 23,  105 => 22,  101 => 21,  97 => 20,  93 => 19,  87 => 18,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  67 => 13,  62 => 11,  57 => 9,  54 => 8,  48 => 5,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>{{ 'SitesManager_StepByStepGuide'|translate }}</h2>

{% if wasDetected %}
<div class=\"system notification notification-info\">
    {{ 'SitesManager_GTMDetected'|translate(externallink('https://matomo.org/faq/tag-manager/migrating-from-google-tag-manager/'), '</a>')|raw }}
</div>
{% endif %}

<p>{{ 'SitesManager_SiteWithoutDataGoogleTagManagerIntro'|translate(externallink('https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager/'),'</a>')|raw }}</p>
<br>
<p>{{ 'SitesManager_SiteWithoutDataGoogleTagManagerFollowStepsIntro'|translate }}</p>
<ol class=\"list-style-decimal\">
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep1'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://tagmanager.google.com/\">','</a>')|raw }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep2'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep3'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep4'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep5'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep6'|translate }}<br><div><pre vue-directive=\"CoreHome.CopyToClipboard\">{{ jsTag|raw }}</pre></div></li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep7'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep8'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep9'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep10'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep11'|translate }}</li>
</ol>
<br>
<p>{{ 'SitesManager_SiteWithoutDataGoogleTagManagerFollowStepCompleted'|translate('<strong>','</strong>')|raw }}</p>
", "@SitesManager/_gtmTabInstructions.twig", "/Users/natanandlacey/source/analytics/src/plugins/SitesManager/templates/_gtmTabInstructions.twig");
    }
}
