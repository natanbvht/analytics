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

/* _jsCssIncludes.twig */
class __TwigTemplate_a2c2650daa1de29b1347aa01884681fa extends Template
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
        // line 2
        echo "    ";
        echo $this->env->getFunction('includeAssets')->getCallable()(["type" => "css"]);
        echo "
    ";
        // line 3
        echo $this->env->getFunction('includeAssets')->getCallable()(["type" => "js", "defer" => ((array_key_exists("deferjs", $context)) ? (_twig_default_filter((isset($context["deferjs"]) || array_key_exists("deferjs", $context) ? $context["deferjs"] : (function () { throw new RuntimeError('Variable "deferjs" does not exist.', 3, $this->source); })()), false)) : (false))]);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_jsCssIncludes.twig";
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
        return array (  42 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% autoescape false %}
    {{ includeAssets({\"type\": \"css\"}) }}
    {{ includeAssets({\"type\": \"js\", \"defer\": deferjs|default(false) }) }}
{% endautoescape %}
", "_jsCssIncludes.twig", "/Users/natanandlacey/source/analytics/src/plugins/Morpheus/templates/_jsCssIncludes.twig");
    }
}
