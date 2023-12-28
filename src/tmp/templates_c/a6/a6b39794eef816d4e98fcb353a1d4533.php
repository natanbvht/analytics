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

/* @SitesManager/_othersTab.twig */
class __TwigTemplate_13cec33d9097a33a5f7d7e16a8a7c74d extends Template
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
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_MoreMethods"), "html", null, true);
        echo "</h2>

<p>";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_OtherWaysTabDescription"), "html", null, true);
        echo "</p>
<p>Matomo URL: <code vue-directive=\"CoreHome.CopyToClipboard\">";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["matomoUrl"]) || array_key_exists("matomoUrl", $context) ? $context["matomoUrl"] : (function () { throw new RuntimeError('Variable "matomoUrl" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</code></p>
<p>";
        // line 5
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsYourSiteId", (("<code vue-directive=\"CoreHome.CopyToClipboard\">" . (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 5, $this->source); })())) . "</code>"));
        echo "</p>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["othersInstructions"]) || array_key_exists("othersInstructions", $context) ? $context["othersInstructions"] : (function () { throw new RuntimeError('Variable "othersInstructions" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["othersInstruction"]) {
            // line 8
            echo "    <h3>";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["othersInstruction"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "</h3>
    <p>";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["othersInstruction"], "othersInstruction", [], "any", false, false, false, 9);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['othersInstruction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SitesManager/_othersTab.twig";
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
        return array (  65 => 9,  60 => 8,  56 => 7,  51 => 5,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>{{ 'SitesManager_MoreMethods'|translate }}</h2>

<p>{{ 'SitesManager_OtherWaysTabDescription'|translate }}</p>
<p>Matomo URL: <code vue-directive=\"CoreHome.CopyToClipboard\">{{ matomoUrl }}</code></p>
<p>{{ 'SitesManager_EmailInstructionsYourSiteId'|translate('<code vue-directive=\"CoreHome.CopyToClipboard\">' ~ idSite ~ '</code>')|raw }}</p>

{% for othersInstruction in othersInstructions %}
    <h3>{{ othersInstruction.name }}</h3>
    <p>{{ othersInstruction.othersInstruction|raw }}</p>
{% endfor %}", "@SitesManager/_othersTab.twig", "/Users/natanandlacey/source/analytics/src/plugins/SitesManager/templates/_othersTab.twig");
    }
}
