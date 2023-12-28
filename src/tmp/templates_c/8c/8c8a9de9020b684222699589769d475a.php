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

/* @SitesManager/_wordpressTabInstructions.twig */
class __TwigTemplate_c7520c1117f2515e5a8795a37311c617 extends Template
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

<p>";
        // line 3
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressIntroductionLine1", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/"), "</a>");
        echo "</p>
<p>";
        // line 4
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressIntroductionLine2", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/how-do-i-manually-insert-the-matomo-tracking-code-on-wordpress/"), "</a>", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/start-tracking-with-a-wordpress-com-site-that-cannot-use-plugins/"), "</a>");
        echo "</p>
<br>
<p class=\"steps-to-start-tracking-header\">";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowStepsIntro"), "html", null, true);
        echo "</p>
<ol class=\"list-style-decimal\">
    <li>";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps1"), "html", null, true);
        echo "</li>
    <li>";
        // line 9
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps2", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/how-do-i-manually-insert-the-matomo-tracking-code-on-wordpress/"), "</a>");
        echo "</li>
    <li>";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps3"), "html", null, true);
        echo "</li>
    <li>";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps4"), "html", null, true);
        echo "</li>
    <li>";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps5"), "html", null, true);
        echo "</li>
    <li>";
        // line 13
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps6");
        echo "</li>
    <li>";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps7"), "html", null, true);
        echo "</li>
    <li>";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps8"), "html", null, true);
        echo "<div><pre style=\"text-indent: 1.2rem;padding-top:2em;padding-bottom:2em\" vue-directive=\"CoreHome.CopyToClipboard\">";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</pre></div></li>
    ";
        // line 16
        if ((isset($context["authLink"]) || array_key_exists("authLink", $context) ? $context["authLink"] : (function () { throw new RuntimeError('Variable "authLink" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "        <li>";
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps9", (("<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"" . (isset($context["authLink"]) || array_key_exists("authLink", $context) ? $context["authLink"] : (function () { throw new RuntimeError('Variable "authLink" does not exist.', 17, $this->source); })())) . "\">"), "</a>", (("<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"" . (isset($context["faqLink"]) || array_key_exists("faqLink", $context) ? $context["faqLink"] : (function () { throw new RuntimeError('Variable "faqLink" does not exist.', 17, $this->source); })())) . "\">"), "</a>");
            echo "</li>
    ";
        } else {
            // line 19
            echo "        <li>";
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps9", "", "", $this->env->getFunction('externallink')->getCallable()((isset($context["faqLink"]) || array_key_exists("faqLink", $context) ? $context["faqLink"] : (function () { throw new RuntimeError('Variable "faqLink" does not exist.', 19, $this->source); })())), "</a>");
            echo "</li>
    ";
        }
        // line 21
        echo "    <li>";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps10"), "html", null, true);
        echo "</li>
    <li>";
        // line 22
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps11"), "html", null, true);
        echo "</li>
    <li>";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps12"), "html", null, true);
        echo "</li>
    <li>";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps13"), "html", null, true);
        echo "</li>
    <li>";
        // line 25
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps14"), "html", null, true);
        echo "</li>
    <li>";
        // line 26
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps15"), "html", null, true);
        echo "</li>
    <li>";
        // line 27
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps16"), "html", null, true);
        echo "</li>
    <li>";
        // line 28
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps17"), "html", null, true);
        echo "</li>
";
        // line 29
        if ((((isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 29, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)) && (isset($context["isJsTrackerInstallCheckAvailable"]) || array_key_exists("isJsTrackerInstallCheckAvailable", $context) ? $context["isJsTrackerInstallCheckAvailable"] : (function () { throw new RuntimeError('Variable "isJsTrackerInstallCheckAvailable" does not exist.', 29, $this->source); })()))) {
            // line 30
            echo "    <li vue-entry=\"JsTrackerInstallCheck.JsTrackerInstallCheck\" site=\"";
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 30, $this->source); })())), "html", null, true);
            echo "\" is-wordpress=\"true\"></li>
</ol>
";
        } else {
            // line 33
            echo "</ol>
<br>
<p>";
            // line 35
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowStepCompleted", "<strong>", "</strong>");
            echo "</p>
<br>
<p>";
            // line 37
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowStepNote", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://wordpress.org/plugins/wp-piwik/\">WP-Matomo Integration (WP-Piwik)</a>");
            echo "</p>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SitesManager/_wordpressTabInstructions.twig";
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
        return array (  156 => 37,  151 => 35,  147 => 33,  140 => 30,  138 => 29,  134 => 28,  130 => 27,  126 => 26,  122 => 25,  118 => 24,  114 => 23,  110 => 22,  105 => 21,  99 => 19,  93 => 17,  91 => 16,  85 => 15,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  52 => 6,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>{{ 'SitesManager_StepByStepGuide'|translate }}</h2>

<p>{{ 'SitesManager_SiteWithoutDataWordpressIntroductionLine1'|translate(externallink('https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/'), '</a>')|raw }}</p>
<p>{{ 'SitesManager_SiteWithoutDataWordpressIntroductionLine2'|translate(externallink('https://matomo.org/faq/new-to-piwik/how-do-i-manually-insert-the-matomo-tracking-code-on-wordpress/'), '</a>', externallink('https://matomo.org/faq/new-to-piwik/start-tracking-with-a-wordpress-com-site-that-cannot-use-plugins/'), '</a>')|raw }}</p>
<br>
<p class=\"steps-to-start-tracking-header\">{{ 'SitesManager_SiteWithoutDataWordpressFollowStepsIntro'|translate }}</p>
<ol class=\"list-style-decimal\">
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps1'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps2'|translate(externallink('https://matomo.org/faq/new-to-piwik/how-do-i-manually-insert-the-matomo-tracking-code-on-wordpress/'),'</a>')|raw }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps3'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps4'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps5'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps6'|translate|raw }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps7'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps8'|translate }}<div><pre style=\"text-indent: 1.2rem;padding-top:2em;padding-bottom:2em\" vue-directive=\"CoreHome.CopyToClipboard\">{{ piwikUrl }}</pre></div></li>
    {% if authLink %}
        <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps9'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"'~authLink~'\">','</a>','<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"'~faqLink~'\">','</a>')|raw }}</li>
    {% else %}
        <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps9'|translate('','',externallink(faqLink),'</a>')|raw }}</li>
    {% endif %}
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps10'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps11'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps12'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps13'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps14'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps15'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps16'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps17'|translate }}</li>
{% if site and site.id and isJsTrackerInstallCheckAvailable %}
    <li vue-entry=\"JsTrackerInstallCheck.JsTrackerInstallCheck\" site=\"{{ site|json_encode }}\" is-wordpress=\"true\"></li>
</ol>
{% else %}
</ol>
<br>
<p>{{ 'SitesManager_SiteWithoutDataWordpressFollowStepCompleted'|translate('<strong>', '</strong>')|raw }}</p>
<br>
<p>{{ 'SitesManager_SiteWithoutDataWordpressFollowStepNote'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://wordpress.org/plugins/wp-piwik/\">WP-Matomo Integration (WP-Piwik)</a>')|raw }}</p>
{% endif %}
", "@SitesManager/_wordpressTabInstructions.twig", "/Users/natanandlacey/source/analytics/src/plugins/SitesManager/templates/_wordpressTabInstructions.twig");
    }
}
