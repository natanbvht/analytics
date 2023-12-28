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

/* @CoreHome/quickLinks.twig */
class __TwigTemplate_cd5a5db0b71e5c3611408b20793f2155 extends Template
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
        echo "<div class=\"widgetBody quickLinks\">
    ";
        // line 2
        if ((isset($context["hasSitesAdmin"]) || array_key_exists("hasSitesAdmin", $context) ? $context["hasSitesAdmin"] : (function () { throw new RuntimeError('Variable "hasSitesAdmin" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "    <div class=\"quickLink\">
        <span class=\"icon icon-open-source\">&nbsp;</span>
        <a href=\"";
            // line 5
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "SitesManager", "action" => "index", "showaddsite" => "1"]), "html", null, true);
            echo "\"
           class=\"itemLabel\">";
            // line 6
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_AddSite"));
            echo "</a>
    </div>
    ";
        }
        // line 9
        echo "    ";
        if ((isset($context["hasUsersAdmin"]) || array_key_exists("hasUsersAdmin", $context) ? $context["hasUsersAdmin"] : (function () { throw new RuntimeError('Variable "hasUsersAdmin" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "    <div class=\"quickLink\">
        <span class=\"icon icon-user-add\">&nbsp;</span>
        <a href=\"";
            // line 12
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "UsersManager", "action" => "index", "showadduser" => "1"]), "html", null, true);
            echo "\"
           class=\"itemLabel\">";
            // line 13
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UsersManager_InviteNewUser"));
            echo "</a>
    </div>
    ";
        }
        // line 16
        echo "    <br />
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/quickLinks.twig";
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
        return array (  73 => 16,  67 => 13,  63 => 12,  59 => 10,  56 => 9,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widgetBody quickLinks\">
    {% if hasSitesAdmin %}
    <div class=\"quickLink\">
        <span class=\"icon icon-open-source\">&nbsp;</span>
        <a href=\"{{ linkTo({'module': 'SitesManager', 'action': 'index', 'showaddsite': '1'}) }}\"
           class=\"itemLabel\">{{ 'SitesManager_AddSite'|translate|e }}</a>
    </div>
    {% endif %}
    {% if hasUsersAdmin %}
    <div class=\"quickLink\">
        <span class=\"icon icon-user-add\">&nbsp;</span>
        <a href=\"{{ linkTo({'module': 'UsersManager', 'action': 'index', 'showadduser': '1'}) }}\"
           class=\"itemLabel\">{{ 'UsersManager_InviteNewUser'|translate|e }}</a>
    </div>
    {% endif %}
    <br />
</div>
", "@CoreHome/quickLinks.twig", "/Users/natanandlacey/source/analytics/src/plugins/CoreHome/templates/quickLinks.twig");
    }
}
