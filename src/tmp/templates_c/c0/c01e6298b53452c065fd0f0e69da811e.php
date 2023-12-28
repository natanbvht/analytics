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

/* @SitesManager/_vueTabInstructions.twig */
class __TwigTemplate_aa718af37fbed7d4b51292254e388706 extends Template
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
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_VueDetected", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/AmazingDreams/vue-matomo\">vue-matomo</a>", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-websites-that-use-vue-js"), "</a>");
            echo "
</div>
";
        }
        // line 8
        echo "
<p>";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataVueIntro"), "html", null, true);
        echo "</p>
<br>
<p>";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStepsIntro"), "html", null, true);
        echo "</p>
<ol class=\"list-style-decimal\">
    <li>";
        // line 13
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataVueFollowStep1", "<strong>vue-matomo</strong>");
        echo "<div><pre style=\"text-indent: 1.2rem; padding-top:2em;padding-bottom:2em\" vue-directive=\"CoreHome.CopyToClipboard\">npm install --save vue-matomo</pre></div></li>
    <li>
        ";
        // line 15
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataVueFollowStep2", "<strong>VueMatomo</strong>", "<strong>main.js</strong>");
        echo "
        <br><br>
        ";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataVueFollowStep2ExampleCode", "Vue.js 3"), "html", null, true);
        echo ":
        <div><pre class=\"codeblock\" vue-directive=\"CoreHome.CopyToClipboard\">";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["vue3Code"]) || array_key_exists("vue3Code", $context) ? $context["vue3Code"] : (function () { throw new RuntimeError('Variable "vue3Code" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</pre></div>
        ";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataVueFollowStep2ExampleCode", "Vue.js 2"), "html", null, true);
        echo ":
        <div><pre class=\"codeblock\" vue-directive=\"CoreHome.CopyToClipboard\">";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["vue2Code"]) || array_key_exists("vue2Code", $context) ? $context["vue2Code"] : (function () { throw new RuntimeError('Variable "vue2Code" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</pre></div>
    </li>
</ol>
<br>

<p>";
        // line 25
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataVueFollowStepCompleted", "<strong>", "</strong>", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/AmazingDreams/vue-matomo\">vue-matomo</a>");
        echo "</p>
<br>
<strong>";
        // line 27
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Note"), "html", null, true);
        echo ":</strong><ol class=\"list-style-decimal\">
    <li>";
        // line 28
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataVueFollowStepNote1", "<code vue-directive=\"CoreHome.CopyToClipboard\">window._paq.push</code>");
        echo "</li>
    <li>";
        // line 29
        echo $this->env->getFilter('translate')->getCallable()((isset($context["SiteWithoutDataVueFollowStepNote2Key"]) || array_key_exists("SiteWithoutDataVueFollowStepNote2Key", $context) ? $context["SiteWithoutDataVueFollowStepNote2Key"] : (function () { throw new RuntimeError('Variable "SiteWithoutDataVueFollowStepNote2Key" does not exist.', 29, $this->source); })()), $this->env->getFunction('externallink')->getCallable()("https://developer.matomo.org/guides/spa-tracking"), "</a>", $this->env->getFunction('externallink')->getCallable()("https://developer.matomo.org/guides/spa-tracking#using-matomo-tag-manager-to-track-single-page-application"), "</a>");
        echo "</li>
</ol>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SitesManager/_vueTabInstructions.twig";
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
        return array (  110 => 29,  106 => 28,  102 => 27,  97 => 25,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  72 => 15,  67 => 13,  62 => 11,  57 => 9,  54 => 8,  48 => 5,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>{{ 'SitesManager_StepByStepGuide'|translate }}</h2>

{% if wasDetected %}
<div class=\"system notification notification-info\">
    {{ 'SitesManager_VueDetected'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/AmazingDreams/vue-matomo\">vue-matomo</a>',externallink('https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-websites-that-use-vue-js'),'</a>')|raw }}
</div>
{% endif %}

<p>{{ 'SitesManager_SiteWithoutDataVueIntro'|translate }}</p>
<br>
<p>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStepsIntro'|translate }}</p>
<ol class=\"list-style-decimal\">
    <li>{{ 'SitesManager_SiteWithoutDataVueFollowStep1'|translate('<strong>vue-matomo</strong>')|raw }}<div><pre style=\"text-indent: 1.2rem; padding-top:2em;padding-bottom:2em\" vue-directive=\"CoreHome.CopyToClipboard\">npm install --save vue-matomo</pre></div></li>
    <li>
        {{ 'SitesManager_SiteWithoutDataVueFollowStep2'|translate('<strong>VueMatomo</strong>', '<strong>main.js</strong>')|raw }}
        <br><br>
        {{ 'SitesManager_SiteWithoutDataVueFollowStep2ExampleCode'|translate('Vue.js 3') }}:
        <div><pre class=\"codeblock\" vue-directive=\"CoreHome.CopyToClipboard\">{{ vue3Code }}</pre></div>
        {{ 'SitesManager_SiteWithoutDataVueFollowStep2ExampleCode'|translate('Vue.js 2') }}:
        <div><pre class=\"codeblock\" vue-directive=\"CoreHome.CopyToClipboard\">{{ vue2Code }}</pre></div>
    </li>
</ol>
<br>

<p>{{ 'SitesManager_SiteWithoutDataVueFollowStepCompleted'|translate('<strong>', '</strong>', '<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/AmazingDreams/vue-matomo\">vue-matomo</a>')|raw }}</p>
<br>
<strong>{{ 'General_Note'|translate }}:</strong><ol class=\"list-style-decimal\">
    <li>{{ 'SitesManager_SiteWithoutDataVueFollowStepNote1'|translate('<code vue-directive=\"CoreHome.CopyToClipboard\">window._paq.push</code>')|raw }}</li>
    <li>{{ SiteWithoutDataVueFollowStepNote2Key|translate(externallink('https://developer.matomo.org/guides/spa-tracking'),'</a>', externallink('https://developer.matomo.org/guides/spa-tracking#using-matomo-tag-manager-to-track-single-page-application'),'</a>')|raw }}</li>
</ol>", "@SitesManager/_vueTabInstructions.twig", "/Users/natanandlacey/source/analytics/src/plugins/SitesManager/templates/_vueTabInstructions.twig");
    }
}
