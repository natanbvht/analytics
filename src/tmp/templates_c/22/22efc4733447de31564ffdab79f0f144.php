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

/* @Login/loginLayout.twig */
class __TwigTemplate_75a8699934d0a3cc5da212d4a8269149 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'head' => [$this, 'block_head'],
            'pageDescription' => [$this, 'block_pageDescription'],
            'body' => [$this, 'block_body'],
            'loginContent' => [$this, 'block_loginContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Morpheus/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, ((array_key_exists("pageTitle", $context)) ? (_twig_default_filter((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 12, $this->source); })()), $this->env->getFilter('translate')->getCallable()("Login_LogIn"))) : ($this->env->getFilter('translate')->getCallable()("Login_LogIn"))), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        $context["bodyId"] = "loginPage";
        // line 18
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, ((array_key_exists("colClassOverride", $context)) ? (_twig_default_filter((isset($context["colClassOverride"]) || array_key_exists("colClassOverride", $context) ? $context["colClassOverride"] : (function () { throw new RuntimeError('Variable "colClassOverride" does not exist.', 18, $this->source); })()), "col s12 m6 push-m3 l4 push-l4")) : ("col s12 m6 push-m3 l4 push-l4")), "html", null, true);
        $context["colClass"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("@Morpheus/layout.twig", "@Login/loginLayout.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <meta name=\"robots\" content=\"noindex,nofollow\">
";
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $context["deferjs"] = true;
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block_pageDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_OpenSourceWebAnalytics"), "html", null, true);
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "
    ";
        // line 22
        echo $this->env->getFunction('postEvent')->getCallable()("Template.beforeTopBar", "login");
        echo "
    ";
        // line 23
        echo $this->env->getFunction('postEvent')->getCallable()("Template.beforeContent", "login");
        echo "

    ";
        // line 25
        $this->loadTemplate("_iframeBuster.twig", "@Login/loginLayout.twig", 25)->display($context);
        // line 26
        echo "
    <div id=\"notificationContainer\">
    </div>
    <nav>
        <div class=\"nav-wrapper\">
            ";
        // line 31
        $this->loadTemplate("@CoreHome/_logo.twig", "@Login/loginLayout.twig", 31)->display(twig_array_merge($context, ["logoLink" => "https://matomo.org", "centeredLogo" => (($context["isCenteredLogo"]) ?? (true)), "useLargeLogo" => false]));
        // line 32
        echo "        </div>
    </nav>

    <section class=\"loginSection row\">
        <div class=\"";
        // line 36
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["colClass"]) || array_key_exists("colClass", $context) ? $context["colClass"] : (function () { throw new RuntimeError('Variable "colClass" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\">

        ";
        // line 39
        echo "        ";
        if (((array_key_exists("isValidHost", $context) && array_key_exists("invalidHostMessage", $context)) && ((isset($context["isValidHost"]) || array_key_exists("isValidHost", $context) ? $context["isValidHost"] : (function () { throw new RuntimeError('Variable "isValidHost" does not exist.', 39, $this->source); })()) == false))) {
            // line 40
            echo "            ";
            $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "@Login/loginLayout.twig", 40)->display($context);
            // line 41
            echo "        ";
        } else {
            // line 42
            echo "            ";
            $this->displayBlock('loginContent', $context, $blocks);
            // line 44
            echo "        ";
        }
        // line 45
        echo "
        </div>

        ";
        // line 48
        if ((array_key_exists("showImageDiv", $context) && array_key_exists("imageToShow", $context))) {
            // line 49
            echo "        <div class=\"col l4 hide-on-med-and-down onboardingImage\">
            <img class=\"responsive-img\" src=\"";
            // line 50
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["imageToShow"]) || array_key_exists("imageToShow", $context) ? $context["imageToShow"] : (function () { throw new RuntimeError('Variable "imageToShow" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "\">
        </div>
        ";
        }
        // line 53
        echo "    </section>

";
    }

    // line 42
    public function block_loginContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Login/loginLayout.twig";
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
        return array (  170 => 43,  166 => 42,  160 => 53,  154 => 50,  151 => 49,  149 => 48,  144 => 45,  141 => 44,  138 => 42,  135 => 41,  132 => 40,  129 => 39,  124 => 36,  118 => 32,  116 => 31,  109 => 26,  107 => 25,  102 => 23,  98 => 22,  95 => 21,  91 => 20,  84 => 14,  77 => 9,  74 => 8,  70 => 7,  65 => 4,  61 => 3,  56 => 1,  52 => 18,  50 => 16,  46 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Morpheus/layout.twig' %}

{% block meta %}
    <meta name=\"robots\" content=\"noindex,nofollow\">
{% endblock %}

{% block head %}
    {% set deferjs = true %}
    {{ parent() }}
{% endblock %}

{% set title %}{{ pageTitle|default('Login_LogIn'|translate) }}{% endset %}

{% block pageDescription %}{{ 'General_OpenSourceWebAnalytics'|translate }}{% endblock %}

{% set bodyId = 'loginPage' %}

{% set colClass %}{{ colClassOverride|default('col s12 m6 push-m3 l4 push-l4') }}{% endset %}

{% block body %}

    {{ postEvent(\"Template.beforeTopBar\", \"login\") }}
    {{ postEvent(\"Template.beforeContent\", \"login\") }}

    {% include \"_iframeBuster.twig\" %}

    <div id=\"notificationContainer\">
    </div>
    <nav>
        <div class=\"nav-wrapper\">
            {% include \"@CoreHome/_logo.twig\" with { 'logoLink': 'https://matomo.org', 'centeredLogo': (isCenteredLogo ?? true), 'useLargeLogo': false } %}
        </div>
    </nav>

    <section class=\"loginSection row\">
        <div class=\"{{ colClass }}\">

        {# untrusted host warning #}
        {% if (isValidHost is defined and invalidHostMessage is defined and isValidHost == false) %}
            {% include '@CoreHome/_warningInvalidHost.twig' %}
        {% else %}
            {% block loginContent %}
            {% endblock %}
        {% endif %}

        </div>

        {% if showImageDiv is defined and imageToShow is defined %}
        <div class=\"col l4 hide-on-med-and-down onboardingImage\">
            <img class=\"responsive-img\" src=\"{{ imageToShow }}\">
        </div>
        {% endif %}
    </section>

{% endblock %}
", "@Login/loginLayout.twig", "/Users/natanandlacey/source/analytics/src/plugins/Login/templates/loginLayout.twig");
    }
}
