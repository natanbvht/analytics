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

/* @Marketplace/macros.twig */
class __TwigTemplate_13709bad68bc5ac758793d010964e40a extends Template
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
        echo "
";
        // line 5
        echo "
";
        // line 12
        echo "
";
    }

    // line 2
    public function macro_pluginDeveloper($__owner__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "owner" => $__owner__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "    ";
            if ((("piwik" == (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 3, $this->source); })())) || ("matomo-org" == (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 3, $this->source); })())))) {
                echo "<img title=\"Matomo\" alt=\"Matomo\" style=\"padding-bottom:2px;height:12px;\" src=\"plugins/Morpheus/images/logo-dark.svg\"/>";
            } else {
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 3, $this->source); })()), "html", null, true);
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 6
    public function macro_featuredIcon($__align__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "align" => $__align__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 7
            echo "    <img class=\"featuredIcon\"
         title=\"";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_FeaturedPlugin"), "html", null, true);
            echo "\"
         src=\"plugins/Marketplace/images/rating_important.png\"
         align=\"";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["align"]) || array_key_exists("align", $context) ? $context["align"] : (function () { throw new RuntimeError('Variable "align" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\" />
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 13
    public function macro_missingRequirementsPleaseUpdateNotice($__plugin__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "plugin" => $__plugin__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 14
            echo "    <div vue-entry=\"Marketplace.MissingReqsNotice\" plugin=\"";
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 14, $this->source); })())), "html", null, true);
            echo "\"></div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Marketplace/macros.twig";
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
        return array (  120 => 14,  107 => 13,  96 => 10,  91 => 8,  88 => 7,  75 => 6,  61 => 3,  48 => 2,  43 => 12,  40 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% macro pluginDeveloper(owner) %}
    {% if 'piwik' == owner or 'matomo-org' == owner %}<img title=\"Matomo\" alt=\"Matomo\" style=\"padding-bottom:2px;height:12px;\" src=\"plugins/Morpheus/images/logo-dark.svg\"/>{% else %}{{ owner }}{% endif %}
{% endmacro %}

{% macro featuredIcon(align='') %}
    <img class=\"featuredIcon\"
         title=\"{{ 'Marketplace_FeaturedPlugin'|translate }}\"
         src=\"plugins/Marketplace/images/rating_important.png\"
         align=\"{{ align }}\" />
{% endmacro %}

{% macro missingRequirementsPleaseUpdateNotice(plugin) %}
    <div vue-entry=\"Marketplace.MissingReqsNotice\" plugin=\"{{ plugin|json_encode }}\"></div>
{% endmacro %}
", "@Marketplace/macros.twig", "/Users/natanandlacey/source/analytics/src/plugins/Marketplace/templates/macros.twig");
    }
}
