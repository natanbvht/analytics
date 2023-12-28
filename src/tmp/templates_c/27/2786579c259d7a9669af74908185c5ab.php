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

/* @SitesManager/siteWithoutData.twig */
class __TwigTemplate_94b7e0054324509cfc50d9c66554d397 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'notification' => [$this, 'block_notification'],
            'topcontrols' => [$this, 'block_topcontrols'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        $context["bodyId"] = "site-without-data";
        // line 1
        $this->parent = $this->loadTemplate("dashboard.twig", "@SitesManager/siteWithoutData.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_notification($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("@CoreHome/_notifications.twig", "@SitesManager/siteWithoutData.twig", 4)->display($context);
    }

    // line 9
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        if ( !(isset($context["isSingleSite"]) || array_key_exists("isSingleSite", $context) ? $context["isSingleSite"] : (function () { throw new RuntimeError('Variable "isSingleSite" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "    ";
            $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@SitesManager/siteWithoutData.twig", 11)->display($context);
            // line 12
            echo "    ";
        }
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        ob_start();
        // line 17
        echo "        <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["inviteUserLink"]) || array_key_exists("inviteUserLink", $context) ? $context["inviteUserLink"] : (function () { throw new RuntimeError('Variable "inviteUserLink" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\">
            <span class=\"icon-user-add\"></span>
            ";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UsersManager_InviteTeamMember"), "html", null, true);
        echo "
        </a>
        ";
        // line 21
        echo $this->env->getFunction('postEvent')->getCallable()("Template.siteWithoutData.additionalCta");
        echo "
    ";
        $context["ctaEventContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        echo "
    <div
        vue-entry=\"SitesManager.SiteWithoutData\"
        cta-content=\"";
        // line 26
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["ctaEventContent"]) || array_key_exists("ctaEventContent", $context) ? $context["ctaEventContent"] : (function () { throw new RuntimeError('Variable "ctaEventContent" does not exist.', 26, $this->source); })())), "html", null, true);
        echo "\"
    ></div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SitesManager/siteWithoutData.twig";
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
        return array (  103 => 26,  98 => 23,  93 => 21,  88 => 19,  82 => 17,  79 => 16,  75 => 15,  70 => 12,  67 => 11,  64 => 10,  60 => 9,  55 => 4,  51 => 3,  46 => 1,  44 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"dashboard.twig\" %}

{% block notification %}
    {% include \"@CoreHome/_notifications.twig\" %}
{% endblock %}

{% set bodyId = 'site-without-data' %}

{% block topcontrols %}
    {% if not isSingleSite %}
    {% include \"@CoreHome/_siteSelectHeader.twig\" %}
    {% endif %}
{% endblock %}

{% block content %}
    {% set ctaEventContent %}
        <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"{{ inviteUserLink }}\">
            <span class=\"icon-user-add\"></span>
            {{ 'UsersManager_InviteTeamMember'|translate }}
        </a>
        {{ postEvent('Template.siteWithoutData.additionalCta') }}
    {% endset %}

    <div
        vue-entry=\"SitesManager.SiteWithoutData\"
        cta-content=\"{{ ctaEventContent|json_encode }}\"
    ></div>

{% endblock %}
", "@SitesManager/siteWithoutData.twig", "/Users/natanandlacey/source/analytics/src/plugins/SitesManager/templates/siteWithoutData.twig");
    }
}
