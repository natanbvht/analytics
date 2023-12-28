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

/* @Installation/layout.twig */
class __TwigTemplate_9d8d3abd6dfd832a399aa6dcac213bda extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html id=\"ng-app\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <meta name=\"google\" content=\"notranslate\">
    <title>Matomo ";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikVersion"]) || array_key_exists("piwikVersion", $context) ? $context["piwikVersion"] : (function () { throw new RuntimeError('Variable "piwikVersion" does not exist.', 7, $this->source); })()), "html", null, true);
        echo " &rsaquo; ";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_Installation"), "html", null, true);
        echo "</title>

    <script>window.piwik = {installation: true};</script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"index.php?module=Installation&action=getInstallationCss\"/>
    <script>
        ";
        // line 12
        echo (isset($context["javascriptTranslations"]) || array_key_exists("javascriptTranslations", $context) ? $context["javascriptTranslations"] : (function () { throw new RuntimeError('Variable "javascriptTranslations" does not exist.', 12, $this->source); })());
        echo "
    </script>
    <script type=\"text/javascript\" src=\"index.php?module=Installation&action=getInstallationJs\"></script>
    <link rel=\"shortcut icon\" href=\"plugins/CoreHome/images/favicon.png\"/>
</head>
<body id=\"installation\">
<div class=\"container\">

    <div class=\"header\">
        <div class=\"logo\">
            <img title=\"Matomo ";
        // line 22
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikVersion"]) || array_key_exists("piwikVersion", $context) ? $context["piwikVersion"] : (function () { throw new RuntimeError('Variable "piwikVersion" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " - ";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_OpenSourceWebAnalytics"), "html_attr");
        echo "\" src=\"plugins/Morpheus/images/logo.png\"/>
            <p>";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_OpenSourceWebAnalytics"), "html", null, true);
        echo "</p>
        </div>
        <div class=\"language-selector\">
            ";
        // line 26
        echo $this->env->getFunction('postEvent')->getCallable()("Template.topBar");
        echo "
        </div>

        <div class=\"installation-progress\">
            <h4>
                ";
        // line 31
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_InstallationStatus"), "html", null, true);
        echo "
                <small>";
        // line 32
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["percentDone"]) || array_key_exists("percentDone", $context) ? $context["percentDone"] : (function () { throw new RuntimeError('Variable "percentDone" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "%</small>
            </h4>
            <div class=\"progress\">
                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 35
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["percentDone"]) || array_key_exists("percentDone", $context) ? $context["percentDone"] : (function () { throw new RuntimeError('Variable "percentDone" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "%;\"></div>
            </div>
        </div>

        <div class=\"clearfix\"></div>
    </div>

    <div class=\"row\">
        <div class=\"col s3\">
            <ul class=\"list-group\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allStepsTitle"]) || array_key_exists("allStepsTitle", $context) ? $context["allStepsTitle"] : (function () { throw new RuntimeError('Variable "allStepsTitle" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["stepId"] => $context["stepName"]) {
            // line 46
            echo "                    ";
            if (((isset($context["currentStepId"]) || array_key_exists("currentStepId", $context) ? $context["currentStepId"] : (function () { throw new RuntimeError('Variable "currentStepId" does not exist.', 46, $this->source); })()) > $context["stepId"])) {
                // line 47
                echo "                        ";
                $context["stepClass"] = "disabled";
                // line 48
                echo "                    ";
            } elseif (((isset($context["currentStepId"]) || array_key_exists("currentStepId", $context) ? $context["currentStepId"] : (function () { throw new RuntimeError('Variable "currentStepId" does not exist.', 48, $this->source); })()) == $context["stepId"])) {
                // line 49
                echo "                        ";
                $context["stepClass"] = "active";
                // line 50
                echo "                    ";
            } else {
                // line 51
                echo "                        ";
                $context["stepClass"] = "";
                // line 52
                echo "                    ";
            }
            // line 53
            echo "                    <li class=\"list-group-item ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["stepClass"]) || array_key_exists("stepClass", $context) ? $context["stepClass"] : (function () { throw new RuntimeError('Variable "stepClass" does not exist.', 53, $this->source); })()), "html", null, true);
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, ($context["stepId"] + 1), "html", null, true);
            echo ". ";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()($context["stepName"]), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['stepId'], $context['stepName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </ul>
        </div>
        <div class=\"col s9 content\">
            ";
        // line 58
        ob_start();
        // line 59
        echo "                <p class=\"next-step\">
                    <a class=\"btn\" href=\"";
        // line 60
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["action" => (isset($context["nextModuleName"]) || array_key_exists("nextModuleName", $context) ? $context["nextModuleName"] : (function () { throw new RuntimeError('Variable "nextModuleName" does not exist.', 60, $this->source); })()), "token_auth" => null, "method" => null]), "html", null, true);
        echo "\">
                        ";
        // line 61
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Next"), "html", null, true);
        echo " &raquo;</a>
                </p>
            ";
        $context["nextButton"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        echo "            ";
        if ((array_key_exists("showNextStepAtTop", $context) && (isset($context["showNextStepAtTop"]) || array_key_exists("showNextStepAtTop", $context) ? $context["showNextStepAtTop"] : (function () { throw new RuntimeError('Variable "showNextStepAtTop" does not exist.', 64, $this->source); })()))) {
            // line 65
            echo "                ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["nextButton"]) || array_key_exists("nextButton", $context) ? $context["nextButton"] : (function () { throw new RuntimeError('Variable "nextButton" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "
            ";
        }
        // line 67
        echo "
            ";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "
            ";
        // line 70
        if ((isset($context["showNextStep"]) || array_key_exists("showNextStep", $context) ? $context["showNextStep"] : (function () { throw new RuntimeError('Variable "showNextStep" does not exist.', 70, $this->source); })())) {
            // line 71
            echo "                ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["nextButton"]) || array_key_exists("nextButton", $context) ? $context["nextButton"] : (function () { throw new RuntimeError('Variable "nextButton" does not exist.', 71, $this->source); })()), "html", null, true);
            echo "
            ";
        }
        // line 73
        echo "        </div>
    </div>

</div>

<div id=\"should-get-hidden\"
     style=\"color: red;margin-left: 16px;margin-bottom: 16px;font-weight:bold;font-size: 20px\">
    <p class=\"should-get-hidden-by-js\">
        ";
        // line 81
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_JsDidntLoad"), "html", null, true);
        echo "
    </p>
    <p class=\"should-get-hidden-by-css\">
        ";
        // line 84
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_CssDidntLoad"), "html", null, true);
        echo "
    </p>
</div>
";
        // line 87
        $this->loadTemplate("@CoreHome/_adblockDetect.twig", "@Installation/layout.twig", 87)->display($context);
        // line 88
        echo "</body>
</html>
";
    }

    // line 68
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Installation/layout.twig";
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
        return array (  225 => 68,  219 => 88,  217 => 87,  211 => 84,  205 => 81,  195 => 73,  189 => 71,  187 => 70,  184 => 69,  182 => 68,  179 => 67,  173 => 65,  170 => 64,  164 => 61,  160 => 60,  157 => 59,  155 => 58,  150 => 55,  137 => 53,  134 => 52,  131 => 51,  128 => 50,  125 => 49,  122 => 48,  119 => 47,  116 => 46,  112 => 45,  99 => 35,  93 => 32,  89 => 31,  81 => 26,  75 => 23,  69 => 22,  56 => 12,  46 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html id=\"ng-app\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <meta name=\"google\" content=\"notranslate\">
    <title>Matomo {{ piwikVersion }} &rsaquo; {{ 'Installation_Installation'|translate }}</title>

    <script>window.piwik = {installation: true};</script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"index.php?module=Installation&action=getInstallationCss\"/>
    <script>
        {{ javascriptTranslations|raw }}
    </script>
    <script type=\"text/javascript\" src=\"index.php?module=Installation&action=getInstallationJs\"></script>
    <link rel=\"shortcut icon\" href=\"plugins/CoreHome/images/favicon.png\"/>
</head>
<body id=\"installation\">
<div class=\"container\">

    <div class=\"header\">
        <div class=\"logo\">
            <img title=\"Matomo {{ piwikVersion }} - {{ 'General_OpenSourceWebAnalytics'|translate|escape('html_attr') }}\" src=\"plugins/Morpheus/images/logo.png\"/>
            <p>{{ 'General_OpenSourceWebAnalytics'|translate }}</p>
        </div>
        <div class=\"language-selector\">
            {{ postEvent('Template.topBar')|raw }}
        </div>

        <div class=\"installation-progress\">
            <h4>
                {{ 'Installation_InstallationStatus'|translate }}
                <small>{{ percentDone }}%</small>
            </h4>
            <div class=\"progress\">
                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ percentDone }}%;\"></div>
            </div>
        </div>

        <div class=\"clearfix\"></div>
    </div>

    <div class=\"row\">
        <div class=\"col s3\">
            <ul class=\"list-group\">
                {% for stepId,stepName in allStepsTitle %}
                    {% if currentStepId > stepId %}
                        {% set stepClass = 'disabled' %}
                    {% elseif currentStepId == stepId %}
                        {% set stepClass = 'active' %}
                    {% else %}
                        {% set stepClass = '' %}
                    {% endif %}
                    <li class=\"list-group-item {{ stepClass }}\">{{ stepId + 1 }}. {{ stepName|translate }}</li>
                {% endfor %}
            </ul>
        </div>
        <div class=\"col s9 content\">
            {% set nextButton %}
                <p class=\"next-step\">
                    <a class=\"btn\" href=\"{{ linkTo({'action':nextModuleName, 'token_auth':null, 'method':null }) }}\">
                        {{ 'General_Next'|translate }} &raquo;</a>
                </p>
            {% endset %}
            {% if showNextStepAtTop is defined and showNextStepAtTop %}
                {{ nextButton }}
            {% endif %}

            {% block content %}{% endblock %}

            {% if showNextStep %}
                {{ nextButton }}
            {% endif %}
        </div>
    </div>

</div>

<div id=\"should-get-hidden\"
     style=\"color: red;margin-left: 16px;margin-bottom: 16px;font-weight:bold;font-size: 20px\">
    <p class=\"should-get-hidden-by-js\">
        {{ 'CoreHome_JsDidntLoad'|translate }}
    </p>
    <p class=\"should-get-hidden-by-css\">
        {{ 'CoreHome_CssDidntLoad'|translate }}
    </p>
</div>
{% include \"@CoreHome/_adblockDetect.twig\" %}
</body>
</html>
", "@Installation/layout.twig", "/Users/natanandlacey/source/analytics/src/plugins/Installation/templates/layout.twig");
    }
}
