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

/* @CoreHome/_singleWidget.twig */
class __TwigTemplate_dbee91acf0950ec9b7174275d650397a extends Template
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
        echo "<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 1, $this->source); })())), "html_attr");
        echo "\" vue-components=\"CoreHome.VueEntryContainer\">
    <vue-entry-container html=\"";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\"></vue-entry-container>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_singleWidget.twig";
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
        return array (  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"{{ title|translate|e('html_attr') }}\" vue-components=\"CoreHome.VueEntryContainer\">
    <vue-entry-container html=\"{{ content }}\"></vue-entry-container>
</div>", "@CoreHome/_singleWidget.twig", "/Users/natanandlacey/source/analytics/src/plugins/CoreHome/templates/_singleWidget.twig");
    }
}
