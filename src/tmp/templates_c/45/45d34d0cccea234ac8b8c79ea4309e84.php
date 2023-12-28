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

/* @CoreAdminHome/getTrackingFailures.twig */
class __TwigTemplate_bcdd86060bb680f9dcb48669e0b173cc extends Template
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
        echo "<div class=\"widgetBody system-check\">
    ";
        // line 2
        if (((isset($context["numFailures"]) || array_key_exists("numFailures", $context) ? $context["numFailures"] : (function () { throw new RuntimeError('Variable "numFailures" does not exist.', 2, $this->source); })()) == 0)) {
            // line 3
            echo "        <p class=\"system-success\"><span class=\"icon-ok\"></span> ";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_NoKnownFailures"), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 5
            echo "        <p class=\"system-errors\">
            <span style=\"font-size: 16px;\"><span class=\"icon-error\"></span> ";
            // line 6
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_NTrackingFailures", (isset($context["numFailures"]) || array_key_exists("numFailures", $context) ? $context["numFailures"] : (function () { throw new RuntimeError('Variable "numFailures" does not exist.', 6, $this->source); })())), "html", null, true);
            echo "</span>
        </p>
        <p>
            <a href=\"";
            // line 9
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "CoreAdminHome", "action" => "trackingFailures"]), "html", null, true);
            echo "\"
            >";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_ViewAllTrackingFailures"), "html", null, true);
            echo "</a>
        </p>
    ";
        }
        // line 13
        echo "</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreAdminHome/getTrackingFailures.twig";
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
        return array (  67 => 13,  61 => 10,  57 => 9,  51 => 6,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widgetBody system-check\">
    {% if numFailures == 0 %}
        <p class=\"system-success\"><span class=\"icon-ok\"></span> {{ 'CoreAdminHome_NoKnownFailures'|translate }}</p>
    {% else %}
        <p class=\"system-errors\">
            <span style=\"font-size: 16px;\"><span class=\"icon-error\"></span> {{ 'CoreAdminHome_NTrackingFailures'|translate(numFailures) }}</span>
        </p>
        <p>
            <a href=\"{{ linkTo({'module': 'CoreAdminHome', 'action': 'trackingFailures'}) }}\"
            >{{ 'CoreAdminHome_ViewAllTrackingFailures'|translate }}</a>
        </p>
    {% endif %}
</div>", "@CoreAdminHome/getTrackingFailures.twig", "/Users/natanandlacey/source/analytics/src/plugins/CoreAdminHome/templates/getTrackingFailures.twig");
    }
}
