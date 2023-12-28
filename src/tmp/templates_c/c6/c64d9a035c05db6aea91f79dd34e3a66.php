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

/* contentBlock.twig */
class __TwigTemplate_9fb3097226f4c05939934e69fe4df966 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'helpText' => [$this, 'block_helpText'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"card\">
    <div class=\"card-content\">
        ";
        // line 3
        if ((array_key_exists("title", $context) && (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "            <h2 class=\"card-title\"
                  ";
            // line 5
            if ((array_key_exists("rate", $context) && (isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 5, $this->source); })()))) {
                echo "vue-entry=\"CoreHome.EnrichedHeadline\"";
            }
            // line 6
            echo "            >";
            $this->displayBlock('helpText', $context, $blocks);
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "</h2>
        ";
        }
        // line 8
        echo "
        ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "    </div>
</div>";
    }

    // line 6
    public function block_helpText($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "contentBlock.twig";
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
        return array (  79 => 10,  75 => 9,  69 => 6,  64 => 11,  62 => 9,  59 => 8,  52 => 6,  48 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
    <div class=\"card-content\">
        {% if title is defined and title %}
            <h2 class=\"card-title\"
                  {% if rate is defined and rate %}vue-entry=\"CoreHome.EnrichedHeadline\"{% endif %}
            >{% block helpText %}{% endblock %}{{ title }}</h2>
        {% endif %}

        {% block content %}
        {% endblock %}
    </div>
</div>", "contentBlock.twig", "/Users/natanandlacey/source/analytics/src/plugins/Morpheus/templates/contentBlock.twig");
    }
}
