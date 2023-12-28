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

/* @CorePluginsAdmin/macros.twig */
class __TwigTemplate_4253062bd8306b3bfaf25b740d0192e6 extends Template
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
    }

    // line 2
    public function macro_pluginActivateDeactivateAction($__name__ = null, $__isActivated__ = null, $__missingRequirements__ = null, $__deactivateNonce__ = null, $__activateNonce__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "isActivated" => $__isActivated__,
            "missingRequirements" => $__missingRequirements__,
            "deactivateNonce" => $__deactivateNonce__,
            "activateNonce" => $__activateNonce__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            if ((isset($context["isActivated"]) || array_key_exists("isActivated", $context) ? $context["isActivated"] : (function () { throw new RuntimeError('Variable "isActivated" does not exist.', 3, $this->source); })())) {
                // line 4
                echo "<a href='index.php?module=CorePluginsAdmin&action=deactivate&pluginName=";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 4, $this->source); })()), "html", null, true);
                echo "&nonce=";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["deactivateNonce"]) || array_key_exists("deactivateNonce", $context) ? $context["deactivateNonce"] : (function () { throw new RuntimeError('Variable "deactivateNonce" does not exist.', 4, $this->source); })()), "html", null, true);
                echo "&redirectTo=referrer'>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CorePluginsAdmin_Deactivate"), "html", null, true);
                echo "</a>";
            } elseif (            // line 5
(isset($context["missingRequirements"]) || array_key_exists("missingRequirements", $context) ? $context["missingRequirements"] : (function () { throw new RuntimeError('Variable "missingRequirements" does not exist.', 5, $this->source); })())) {
                // line 6
                echo "        -
    ";
            } else {
                // line 8
                echo "<a href='index.php?module=CorePluginsAdmin&action=activate&pluginName=";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 8, $this->source); })()), "html", null, true);
                echo "&nonce=";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["activateNonce"]) || array_key_exists("activateNonce", $context) ? $context["activateNonce"] : (function () { throw new RuntimeError('Variable "activateNonce" does not exist.', 8, $this->source); })()), "html", null, true);
                echo "&redirectTo=referrer'>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CorePluginsAdmin_Activate"), "html", null, true);
                echo "</a>";
            }

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
        return "@CorePluginsAdmin/macros.twig";
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
        return array (  75 => 8,  71 => 6,  69 => 5,  61 => 4,  59 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% macro pluginActivateDeactivateAction(name, isActivated, missingRequirements, deactivateNonce, activateNonce) -%}
    {%- if isActivated -%}
        <a href='index.php?module=CorePluginsAdmin&action=deactivate&pluginName={{ name }}&nonce={{ deactivateNonce }}&redirectTo=referrer'>{{ 'CorePluginsAdmin_Deactivate'|translate }}</a>
    {%- elseif missingRequirements %}
        -
    {% else -%}
        <a href='index.php?module=CorePluginsAdmin&action=activate&pluginName={{ name }}&nonce={{  activateNonce }}&redirectTo=referrer'>{{ 'CorePluginsAdmin_Activate'|translate }}</a>
    {%- endif -%}
{%- endmacro %}
", "@CorePluginsAdmin/macros.twig", "/Users/natanandlacey/source/analytics/src/plugins/CorePluginsAdmin/templates/macros.twig");
    }
}
