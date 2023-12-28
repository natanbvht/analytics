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

/* @Login/login.twig */
class __TwigTemplate_66542de06853066692bd4fb229ee9ac4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'loginContent' => [$this, 'block_loginContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Login/loginLayout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Login/loginLayout.twig", "@Login/login.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_loginContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"contentForm loginForm\">
        ";
        // line 6
        $this->loadTemplate("@Login/login.twig", "@Login/login.twig", 6, "123573205")->display(twig_array_merge($context, ["title" => $this->env->getFilter('translate')->getCallable()("Login_LogIn")]));
        // line 74
        echo "    </div>
    <div class=\"contentForm resetForm\" style=\"display:none;\">
        ";
        // line 76
        $this->loadTemplate("@Login/login.twig", "@Login/login.twig", 76, "799173249")->display(twig_array_merge($context, ["title" => $this->env->getFilter('translate')->getCallable()("Login_ChangeYourPassword")]));
        // line 131
        echo "    </div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Login/login.twig";
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
        return array (  61 => 131,  59 => 76,  55 => 74,  53 => 6,  50 => 5,  46 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends '@Login/loginLayout.twig' %}

{% block loginContent %}
    <div class=\"contentForm loginForm\">
        {% embed 'contentBlock.twig' with {'title': 'Login_LogIn'|translate} %}
            {% block content %}
                <div class=\"message_container\">

                    {{ include('@Login/_formErrors.twig', {formErrors: form_data.errors } )  }}

                    {% if AccessErrorString %}
                        <div vue-entry=\"CoreHome.Notification\"
                             noclear=\"true\"
                             context=\"error\">
                            <strong>{{ 'General_Error'|translate }}</strong>: {{ AccessErrorString|raw }}<br/>
                        </div>
                    {% endif %}

                    {% if infoMessage %}
                        <div class=\"alert alert-info\">{{ infoMessage|raw }}</div>
                    {% endif %}
                </div>

                <form {{ form_data.attributes|raw }} ng-non-bindable>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"text\" name=\"form_login\" placeholder=\"\" id=\"login_form_login\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"10\" autofocus=\"autofocus\"/>
                            <label for=\"login_form_login\"><i class=\"icon-user icon\"></i> {{ 'Login_LoginOrEmail'|translate }}</label>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"hidden\" name=\"form_nonce\" id=\"login_form_nonce\" value=\"{{ nonce }}\"/>
                            <input type=\"hidden\" name=\"form_redirect\" id=\"login_form_redirect\" value=\"\"/>
                            <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\" spellcheck=\"false\"
                                   tabindex=\"20\" />
                            <label for=\"login_form_password\"><i class=\"icon-locked icon\"></i> {{ 'General_Password'|translate }}</label>
                        </div>
                    </div>

                    <div class=\"row actions\">
                        <div class=\"col s12\">
                            <label>
                                <input name=\"form_rememberme\" type=\"checkbox\" id=\"login_form_rememberme\" value=\"1\" tabindex=\"90\"
                                       {% if form_data.form_rememberme.value %}checked=\"checked\" {% endif %}/>
                                <span>{{ 'Login_RememberMe'|translate }}</span>
                            </label>
                            <input class=\"submit btn\" id=\"login_form_submit\" type=\"submit\" value=\"{{ 'Login_LogIn'|translate }}\"
                                   tabindex=\"100\"/>
                        </div>
                    </div>

                </form>
                <p id=\"nav\">
                    {{ postEvent(\"Template.loginNav\", \"top\") }}
                    <a id=\"login_form_nav\" href=\"#\"
                       title=\"{{ 'Login_LostYourPassword'|translate }}\">{{ 'Login_LostYourPassword'|translate }}</a>
                    {{ postEvent(\"Template.loginNav\", \"bottom\") }}
                </p>

                {% if isCustomLogo %}
                    <p id=\"piwik\">
                        <i><a href=\"{{ 'https://matomo.org/'|trackmatomolink }}\" rel=\"noreferrer noopener\" target=\"_blank\">{{ linkTitle }}</a></i>
                    </p>
                {% endif %}

            {% endblock %}
        {% endembed %}
    </div>
    <div class=\"contentForm resetForm\" style=\"display:none;\">
        {% embed 'contentBlock.twig' with {'title': 'Login_ChangeYourPassword'|translate} %}
            {% block content %}

                <div class=\"message_container\">
                </div>

                <form id=\"reset_form\" method=\"post\" ng-non-bindable>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"hidden\" name=\"form_nonce\" id=\"reset_form_nonce\" value=\"{{ nonce }}\"/>
                            <input type=\"text\" placeholder=\"\" name=\"form_login\" id=\"reset_form_login\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"10\"/>
                            <label for=\"reset_form_login\"><i class=\"icon-user icon\"></i> {{ 'Login_LoginOrEmail'|translate }}</label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"reset_form_password\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\" spellcheck=\"false\"
                                   tabindex=\"20\" autocomplete=\"off\"/>
                            <label for=\"reset_form_password\"><i class=\"icon-locked icon\"></i> {{ 'Login_NewPassword'|translate }}</label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"password\" placeholder=\"\" name=\"form_password_bis\" id=\"reset_form_password_bis\" class=\"input\" value=\"\"
                                   autocorrect=\"off\" autocapitalize=\"none\" spellcheck=\"false\"
                                   size=\"20\" tabindex=\"30\" autocomplete=\"off\"/>
                            <label for=\"reset_form_password_bis\"><i class=\"icon-locked icon\"></i> {{ 'Login_NewPasswordRepeat'|translate }}</label>
                        </div>
                    </div>

                    <div class=\"row actions\">
                        <div class=\"col s12\">
                            <input class=\"submit btn\" id='reset_form_submit' type=\"submit\"
                                   value=\"{{ 'General_ChangePassword'|translate }}\" tabindex=\"100\"/>

                            <span class=\"loadingPiwik\" style=\"display:none;\">
                            <img alt=\"Loading\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                        </span>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"module\" value=\"{{ loginModule }}\"/>
                    <input type=\"hidden\" name=\"action\" value=\"resetPassword\"/>
                </form>
                <p id=\"nav\">
                    <a id=\"reset_form_nav\" href=\"#\"
                       title=\"{{ 'Mobile_NavigationBack'|translate }}\">{{ 'General_Cancel'|translate }}</a>
                    <a id=\"alternate_reset_nav\" href=\"#\" style=\"display:none;\"
                       title=\"{{'Login_LogIn'|translate}}\">{{ 'Login_LogIn'|translate }}</a>
                </p>
            {% endblock %}
        {% endembed %}
    </div>

{% endblock %}", "@Login/login.twig", "/Users/natanandlacey/source/analytics/src/plugins/Login/templates/login.twig");
    }
}


/* @Login/login.twig */
class __TwigTemplate_66542de06853066692bd4fb229ee9ac4___123573205 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return "contentBlock.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("contentBlock.twig", "@Login/login.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                <div class=\"message_container\">

                    ";
        // line 10
        echo twig_include($this->env, $context, "@Login/_formErrors.twig", ["formErrors" => twig_get_attribute($this->env, $this->source, (isset($context["form_data"]) || array_key_exists("form_data", $context) ? $context["form_data"] : (function () { throw new RuntimeError('Variable "form_data" does not exist.', 10, $this->source); })()), "errors", [], "any", false, false, false, 10)]);
        echo "

                    ";
        // line 12
        if ((isset($context["AccessErrorString"]) || array_key_exists("AccessErrorString", $context) ? $context["AccessErrorString"] : (function () { throw new RuntimeError('Variable "AccessErrorString" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "                        <div vue-entry=\"CoreHome.Notification\"
                             noclear=\"true\"
                             context=\"error\">
                            <strong>";
            // line 16
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Error"), "html", null, true);
            echo "</strong>: ";
            echo (isset($context["AccessErrorString"]) || array_key_exists("AccessErrorString", $context) ? $context["AccessErrorString"] : (function () { throw new RuntimeError('Variable "AccessErrorString" does not exist.', 16, $this->source); })());
            echo "<br/>
                        </div>
                    ";
        }
        // line 19
        echo "
                    ";
        // line 20
        if ((isset($context["infoMessage"]) || array_key_exists("infoMessage", $context) ? $context["infoMessage"] : (function () { throw new RuntimeError('Variable "infoMessage" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "                        <div class=\"alert alert-info\">";
            echo (isset($context["infoMessage"]) || array_key_exists("infoMessage", $context) ? $context["infoMessage"] : (function () { throw new RuntimeError('Variable "infoMessage" does not exist.', 21, $this->source); })());
            echo "</div>
                    ";
        }
        // line 23
        echo "                </div>

                <form ";
        // line 25
        echo twig_get_attribute($this->env, $this->source, (isset($context["form_data"]) || array_key_exists("form_data", $context) ? $context["form_data"] : (function () { throw new RuntimeError('Variable "form_data" does not exist.', 25, $this->source); })()), "attributes", [], "any", false, false, false, 25);
        echo " ng-non-bindable>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"text\" name=\"form_login\" placeholder=\"\" id=\"login_form_login\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"10\" autofocus=\"autofocus\"/>
                            <label for=\"login_form_login\"><i class=\"icon-user icon\"></i> ";
        // line 31
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_LoginOrEmail"), "html", null, true);
        echo "</label>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"hidden\" name=\"form_nonce\" id=\"login_form_nonce\" value=\"";
        // line 37
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["nonce"]) || array_key_exists("nonce", $context) ? $context["nonce"] : (function () { throw new RuntimeError('Variable "nonce" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\"/>
                            <input type=\"hidden\" name=\"form_redirect\" id=\"login_form_redirect\" value=\"\"/>
                            <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\" spellcheck=\"false\"
                                   tabindex=\"20\" />
                            <label for=\"login_form_password\"><i class=\"icon-locked icon\"></i> ";
        // line 42
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Password"), "html", null, true);
        echo "</label>
                        </div>
                    </div>

                    <div class=\"row actions\">
                        <div class=\"col s12\">
                            <label>
                                <input name=\"form_rememberme\" type=\"checkbox\" id=\"login_form_rememberme\" value=\"1\" tabindex=\"90\"
                                       ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_data"]) || array_key_exists("form_data", $context) ? $context["form_data"] : (function () { throw new RuntimeError('Variable "form_data" does not exist.', 50, $this->source); })()), "form_rememberme", [], "any", false, false, false, 50), "value", [], "any", false, false, false, 50)) {
            echo "checked=\"checked\" ";
        }
        echo "/>
                                <span>";
        // line 51
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_RememberMe"), "html", null, true);
        echo "</span>
                            </label>
                            <input class=\"submit btn\" id=\"login_form_submit\" type=\"submit\" value=\"";
        // line 53
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_LogIn"), "html", null, true);
        echo "\"
                                   tabindex=\"100\"/>
                        </div>
                    </div>

                </form>
                <p id=\"nav\">
                    ";
        // line 60
        echo $this->env->getFunction('postEvent')->getCallable()("Template.loginNav", "top");
        echo "
                    <a id=\"login_form_nav\" href=\"#\"
                       title=\"";
        // line 62
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_LostYourPassword"), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_LostYourPassword"), "html", null, true);
        echo "</a>
                    ";
        // line 63
        echo $this->env->getFunction('postEvent')->getCallable()("Template.loginNav", "bottom");
        echo "
                </p>

                ";
        // line 66
        if ((isset($context["isCustomLogo"]) || array_key_exists("isCustomLogo", $context) ? $context["isCustomLogo"] : (function () { throw new RuntimeError('Variable "isCustomLogo" does not exist.', 66, $this->source); })())) {
            // line 67
            echo "                    <p id=\"piwik\">
                        <i><a href=\"";
            // line 68
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/"), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\">";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["linkTitle"]) || array_key_exists("linkTitle", $context) ? $context["linkTitle"] : (function () { throw new RuntimeError('Variable "linkTitle" does not exist.', 68, $this->source); })()), "html", null, true);
            echo "</a></i>
                    </p>
                ";
        }
        // line 71
        echo "
            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Login/login.twig";
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
        return array (  391 => 71,  383 => 68,  380 => 67,  378 => 66,  372 => 63,  366 => 62,  361 => 60,  351 => 53,  346 => 51,  340 => 50,  329 => 42,  321 => 37,  312 => 31,  303 => 25,  299 => 23,  293 => 21,  291 => 20,  288 => 19,  280 => 16,  275 => 13,  273 => 12,  268 => 10,  264 => 8,  260 => 7,  249 => 6,  61 => 131,  59 => 76,  55 => 74,  53 => 6,  50 => 5,  46 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends '@Login/loginLayout.twig' %}

{% block loginContent %}
    <div class=\"contentForm loginForm\">
        {% embed 'contentBlock.twig' with {'title': 'Login_LogIn'|translate} %}
            {% block content %}
                <div class=\"message_container\">

                    {{ include('@Login/_formErrors.twig', {formErrors: form_data.errors } )  }}

                    {% if AccessErrorString %}
                        <div vue-entry=\"CoreHome.Notification\"
                             noclear=\"true\"
                             context=\"error\">
                            <strong>{{ 'General_Error'|translate }}</strong>: {{ AccessErrorString|raw }}<br/>
                        </div>
                    {% endif %}

                    {% if infoMessage %}
                        <div class=\"alert alert-info\">{{ infoMessage|raw }}</div>
                    {% endif %}
                </div>

                <form {{ form_data.attributes|raw }} ng-non-bindable>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"text\" name=\"form_login\" placeholder=\"\" id=\"login_form_login\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"10\" autofocus=\"autofocus\"/>
                            <label for=\"login_form_login\"><i class=\"icon-user icon\"></i> {{ 'Login_LoginOrEmail'|translate }}</label>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"hidden\" name=\"form_nonce\" id=\"login_form_nonce\" value=\"{{ nonce }}\"/>
                            <input type=\"hidden\" name=\"form_redirect\" id=\"login_form_redirect\" value=\"\"/>
                            <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\" spellcheck=\"false\"
                                   tabindex=\"20\" />
                            <label for=\"login_form_password\"><i class=\"icon-locked icon\"></i> {{ 'General_Password'|translate }}</label>
                        </div>
                    </div>

                    <div class=\"row actions\">
                        <div class=\"col s12\">
                            <label>
                                <input name=\"form_rememberme\" type=\"checkbox\" id=\"login_form_rememberme\" value=\"1\" tabindex=\"90\"
                                       {% if form_data.form_rememberme.value %}checked=\"checked\" {% endif %}/>
                                <span>{{ 'Login_RememberMe'|translate }}</span>
                            </label>
                            <input class=\"submit btn\" id=\"login_form_submit\" type=\"submit\" value=\"{{ 'Login_LogIn'|translate }}\"
                                   tabindex=\"100\"/>
                        </div>
                    </div>

                </form>
                <p id=\"nav\">
                    {{ postEvent(\"Template.loginNav\", \"top\") }}
                    <a id=\"login_form_nav\" href=\"#\"
                       title=\"{{ 'Login_LostYourPassword'|translate }}\">{{ 'Login_LostYourPassword'|translate }}</a>
                    {{ postEvent(\"Template.loginNav\", \"bottom\") }}
                </p>

                {% if isCustomLogo %}
                    <p id=\"piwik\">
                        <i><a href=\"{{ 'https://matomo.org/'|trackmatomolink }}\" rel=\"noreferrer noopener\" target=\"_blank\">{{ linkTitle }}</a></i>
                    </p>
                {% endif %}

            {% endblock %}
        {% endembed %}
    </div>
    <div class=\"contentForm resetForm\" style=\"display:none;\">
        {% embed 'contentBlock.twig' with {'title': 'Login_ChangeYourPassword'|translate} %}
            {% block content %}

                <div class=\"message_container\">
                </div>

                <form id=\"reset_form\" method=\"post\" ng-non-bindable>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"hidden\" name=\"form_nonce\" id=\"reset_form_nonce\" value=\"{{ nonce }}\"/>
                            <input type=\"text\" placeholder=\"\" name=\"form_login\" id=\"reset_form_login\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"10\"/>
                            <label for=\"reset_form_login\"><i class=\"icon-user icon\"></i> {{ 'Login_LoginOrEmail'|translate }}</label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"reset_form_password\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\" spellcheck=\"false\"
                                   tabindex=\"20\" autocomplete=\"off\"/>
                            <label for=\"reset_form_password\"><i class=\"icon-locked icon\"></i> {{ 'Login_NewPassword'|translate }}</label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"password\" placeholder=\"\" name=\"form_password_bis\" id=\"reset_form_password_bis\" class=\"input\" value=\"\"
                                   autocorrect=\"off\" autocapitalize=\"none\" spellcheck=\"false\"
                                   size=\"20\" tabindex=\"30\" autocomplete=\"off\"/>
                            <label for=\"reset_form_password_bis\"><i class=\"icon-locked icon\"></i> {{ 'Login_NewPasswordRepeat'|translate }}</label>
                        </div>
                    </div>

                    <div class=\"row actions\">
                        <div class=\"col s12\">
                            <input class=\"submit btn\" id='reset_form_submit' type=\"submit\"
                                   value=\"{{ 'General_ChangePassword'|translate }}\" tabindex=\"100\"/>

                            <span class=\"loadingPiwik\" style=\"display:none;\">
                            <img alt=\"Loading\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                        </span>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"module\" value=\"{{ loginModule }}\"/>
                    <input type=\"hidden\" name=\"action\" value=\"resetPassword\"/>
                </form>
                <p id=\"nav\">
                    <a id=\"reset_form_nav\" href=\"#\"
                       title=\"{{ 'Mobile_NavigationBack'|translate }}\">{{ 'General_Cancel'|translate }}</a>
                    <a id=\"alternate_reset_nav\" href=\"#\" style=\"display:none;\"
                       title=\"{{'Login_LogIn'|translate}}\">{{ 'Login_LogIn'|translate }}</a>
                </p>
            {% endblock %}
        {% endembed %}
    </div>

{% endblock %}", "@Login/login.twig", "/Users/natanandlacey/source/analytics/src/plugins/Login/templates/login.twig");
    }
}


/* @Login/login.twig */
class __TwigTemplate_66542de06853066692bd4fb229ee9ac4___799173249 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 76
        return "contentBlock.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("contentBlock.twig", "@Login/login.twig", 76);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 77
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "
                <div class=\"message_container\">
                </div>

                <form id=\"reset_form\" method=\"post\" ng-non-bindable>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"hidden\" name=\"form_nonce\" id=\"reset_form_nonce\" value=\"";
        // line 85
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["nonce"]) || array_key_exists("nonce", $context) ? $context["nonce"] : (function () { throw new RuntimeError('Variable "nonce" does not exist.', 85, $this->source); })()), "html", null, true);
        echo "\"/>
                            <input type=\"text\" placeholder=\"\" name=\"form_login\" id=\"reset_form_login\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"10\"/>
                            <label for=\"reset_form_login\"><i class=\"icon-user icon\"></i> ";
        // line 89
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_LoginOrEmail"), "html", null, true);
        echo "</label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"reset_form_password\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\" spellcheck=\"false\"
                                   tabindex=\"20\" autocomplete=\"off\"/>
                            <label for=\"reset_form_password\"><i class=\"icon-locked icon\"></i> ";
        // line 97
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_NewPassword"), "html", null, true);
        echo "</label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"password\" placeholder=\"\" name=\"form_password_bis\" id=\"reset_form_password_bis\" class=\"input\" value=\"\"
                                   autocorrect=\"off\" autocapitalize=\"none\" spellcheck=\"false\"
                                   size=\"20\" tabindex=\"30\" autocomplete=\"off\"/>
                            <label for=\"reset_form_password_bis\"><i class=\"icon-locked icon\"></i> ";
        // line 105
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_NewPasswordRepeat"), "html", null, true);
        echo "</label>
                        </div>
                    </div>

                    <div class=\"row actions\">
                        <div class=\"col s12\">
                            <input class=\"submit btn\" id='reset_form_submit' type=\"submit\"
                                   value=\"";
        // line 112
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ChangePassword"), "html", null, true);
        echo "\" tabindex=\"100\"/>

                            <span class=\"loadingPiwik\" style=\"display:none;\">
                            <img alt=\"Loading\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                        </span>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"module\" value=\"";
        // line 120
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["loginModule"]) || array_key_exists("loginModule", $context) ? $context["loginModule"] : (function () { throw new RuntimeError('Variable "loginModule" does not exist.', 120, $this->source); })()), "html", null, true);
        echo "\"/>
                    <input type=\"hidden\" name=\"action\" value=\"resetPassword\"/>
                </form>
                <p id=\"nav\">
                    <a id=\"reset_form_nav\" href=\"#\"
                       title=\"";
        // line 125
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Mobile_NavigationBack"), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Cancel"), "html", null, true);
        echo "</a>
                    <a id=\"alternate_reset_nav\" href=\"#\" style=\"display:none;\"
                       title=\"";
        // line 127
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_LogIn"), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_LogIn"), "html", null, true);
        echo "</a>
                </p>
            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Login/login.twig";
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
        return array (  667 => 127,  660 => 125,  652 => 120,  641 => 112,  631 => 105,  620 => 97,  609 => 89,  602 => 85,  593 => 78,  589 => 77,  578 => 76,  391 => 71,  383 => 68,  380 => 67,  378 => 66,  372 => 63,  366 => 62,  361 => 60,  351 => 53,  346 => 51,  340 => 50,  329 => 42,  321 => 37,  312 => 31,  303 => 25,  299 => 23,  293 => 21,  291 => 20,  288 => 19,  280 => 16,  275 => 13,  273 => 12,  268 => 10,  264 => 8,  260 => 7,  249 => 6,  61 => 131,  59 => 76,  55 => 74,  53 => 6,  50 => 5,  46 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends '@Login/loginLayout.twig' %}

{% block loginContent %}
    <div class=\"contentForm loginForm\">
        {% embed 'contentBlock.twig' with {'title': 'Login_LogIn'|translate} %}
            {% block content %}
                <div class=\"message_container\">

                    {{ include('@Login/_formErrors.twig', {formErrors: form_data.errors } )  }}

                    {% if AccessErrorString %}
                        <div vue-entry=\"CoreHome.Notification\"
                             noclear=\"true\"
                             context=\"error\">
                            <strong>{{ 'General_Error'|translate }}</strong>: {{ AccessErrorString|raw }}<br/>
                        </div>
                    {% endif %}

                    {% if infoMessage %}
                        <div class=\"alert alert-info\">{{ infoMessage|raw }}</div>
                    {% endif %}
                </div>

                <form {{ form_data.attributes|raw }} ng-non-bindable>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"text\" name=\"form_login\" placeholder=\"\" id=\"login_form_login\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"10\" autofocus=\"autofocus\"/>
                            <label for=\"login_form_login\"><i class=\"icon-user icon\"></i> {{ 'Login_LoginOrEmail'|translate }}</label>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"hidden\" name=\"form_nonce\" id=\"login_form_nonce\" value=\"{{ nonce }}\"/>
                            <input type=\"hidden\" name=\"form_redirect\" id=\"login_form_redirect\" value=\"\"/>
                            <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\" spellcheck=\"false\"
                                   tabindex=\"20\" />
                            <label for=\"login_form_password\"><i class=\"icon-locked icon\"></i> {{ 'General_Password'|translate }}</label>
                        </div>
                    </div>

                    <div class=\"row actions\">
                        <div class=\"col s12\">
                            <label>
                                <input name=\"form_rememberme\" type=\"checkbox\" id=\"login_form_rememberme\" value=\"1\" tabindex=\"90\"
                                       {% if form_data.form_rememberme.value %}checked=\"checked\" {% endif %}/>
                                <span>{{ 'Login_RememberMe'|translate }}</span>
                            </label>
                            <input class=\"submit btn\" id=\"login_form_submit\" type=\"submit\" value=\"{{ 'Login_LogIn'|translate }}\"
                                   tabindex=\"100\"/>
                        </div>
                    </div>

                </form>
                <p id=\"nav\">
                    {{ postEvent(\"Template.loginNav\", \"top\") }}
                    <a id=\"login_form_nav\" href=\"#\"
                       title=\"{{ 'Login_LostYourPassword'|translate }}\">{{ 'Login_LostYourPassword'|translate }}</a>
                    {{ postEvent(\"Template.loginNav\", \"bottom\") }}
                </p>

                {% if isCustomLogo %}
                    <p id=\"piwik\">
                        <i><a href=\"{{ 'https://matomo.org/'|trackmatomolink }}\" rel=\"noreferrer noopener\" target=\"_blank\">{{ linkTitle }}</a></i>
                    </p>
                {% endif %}

            {% endblock %}
        {% endembed %}
    </div>
    <div class=\"contentForm resetForm\" style=\"display:none;\">
        {% embed 'contentBlock.twig' with {'title': 'Login_ChangeYourPassword'|translate} %}
            {% block content %}

                <div class=\"message_container\">
                </div>

                <form id=\"reset_form\" method=\"post\" ng-non-bindable>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"hidden\" name=\"form_nonce\" id=\"reset_form_nonce\" value=\"{{ nonce }}\"/>
                            <input type=\"text\" placeholder=\"\" name=\"form_login\" id=\"reset_form_login\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\"
                                   tabindex=\"10\"/>
                            <label for=\"reset_form_login\"><i class=\"icon-user icon\"></i> {{ 'Login_LoginOrEmail'|translate }}</label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"password\" placeholder=\"\" name=\"form_password\" id=\"reset_form_password\" class=\"input\" value=\"\" size=\"20\"
                                   autocorrect=\"off\" autocapitalize=\"none\" spellcheck=\"false\"
                                   tabindex=\"20\" autocomplete=\"off\"/>
                            <label for=\"reset_form_password\"><i class=\"icon-locked icon\"></i> {{ 'Login_NewPassword'|translate }}</label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col s12 input-field\">
                            <input type=\"password\" placeholder=\"\" name=\"form_password_bis\" id=\"reset_form_password_bis\" class=\"input\" value=\"\"
                                   autocorrect=\"off\" autocapitalize=\"none\" spellcheck=\"false\"
                                   size=\"20\" tabindex=\"30\" autocomplete=\"off\"/>
                            <label for=\"reset_form_password_bis\"><i class=\"icon-locked icon\"></i> {{ 'Login_NewPasswordRepeat'|translate }}</label>
                        </div>
                    </div>

                    <div class=\"row actions\">
                        <div class=\"col s12\">
                            <input class=\"submit btn\" id='reset_form_submit' type=\"submit\"
                                   value=\"{{ 'General_ChangePassword'|translate }}\" tabindex=\"100\"/>

                            <span class=\"loadingPiwik\" style=\"display:none;\">
                            <img alt=\"Loading\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                        </span>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"module\" value=\"{{ loginModule }}\"/>
                    <input type=\"hidden\" name=\"action\" value=\"resetPassword\"/>
                </form>
                <p id=\"nav\">
                    <a id=\"reset_form_nav\" href=\"#\"
                       title=\"{{ 'Mobile_NavigationBack'|translate }}\">{{ 'General_Cancel'|translate }}</a>
                    <a id=\"alternate_reset_nav\" href=\"#\" style=\"display:none;\"
                       title=\"{{'Login_LogIn'|translate}}\">{{ 'Login_LogIn'|translate }}</a>
                </p>
            {% endblock %}
        {% endembed %}
    </div>

{% endblock %}", "@Login/login.twig", "/Users/natanandlacey/source/analytics/src/plugins/Login/templates/login.twig");
    }
}
