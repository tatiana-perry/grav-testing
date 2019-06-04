<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_9fcf0741895ebf2797bae5a10b855aee284e89a960f52bcf25766dc856845ca0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body_classes' => [$this, 'block_body_classes'],
            'header' => [$this, 'block_header'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'messages' => [$this, 'block_messages'],
            'content' => [$this, 'block_content'],
            'sidebar' => [$this, 'block_sidebar'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->bodyClassFunc([0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("col-12");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("production-mode")) ? (".min.css") : (".css"));
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('assets', $context, $blocks);
        // line 38
        echo "</head>
<body id=\"top\" class=\"";
        // line 39
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
    <div id=\"page-wrapper\">
    ";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 70
        echo "
    ";
        // line 71
        $this->displayBlock('hero', $context, $blocks);
        // line 72
        echo "
        <section id=\"start\">
        ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 101
        echo "        </section>

    </div>

    ";
        // line 105
        $this->displayBlock('footer', $context, $blocks);
        // line 108
        echo "
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 112
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 112)->display(twig_array_merge($context, ["mobile" => true]));
        // line 113
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 115
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 115)->display(twig_array_merge($context, ["tree" => true]));
        // line 116
        echo "            </nav>
        </div>
    </div>

";
        // line 120
        $this->displayBlock('bottom', $context, $blocks);
        // line 123
        echo "
</body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    public function block_head($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'head');
    }

    // line 7
    public function block_head_deferred($context, array $blocks = array())
    {
        // line 8
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 9
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 13
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 20
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 21
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 22
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 23
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method");
        // line 24
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 25
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css"], "method");
    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        // line 29
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 30
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 31
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 34
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 36
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 39
    public function block_body_classes($context, array $blocks = [])
    {
        echo ($context["body_classes"] ?? null);
    }

    public function block_header($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'header');
    }

    // line 41
    public function block_header_deferred($context, array $blocks = array())
    {
        // line 42
        echo "        <section id=\"header\" class=\"section\">
            <section class=\"container ";
        // line 43
        echo ($context["grid_size"] ?? null);
        echo "\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        ";
        // line 46
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "                    </section>
                    <section class=\"navbar-section desktop-menu\">
                        Add in a topnav partial here
                        ";
        // line 55
        echo "                        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 56
            echo "                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 56)->display($context);
            echo "</span>
                        ";
        }
        // line 58
        echo "                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 71
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 74
    public function block_body($context, array $blocks = [])
    {
        // line 75
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 76
        echo ($context["grid_size"] ?? null);
        echo "\">
                    <div class=\"columns\">
                        <section class=\"col-3\">
                            Left sidebar? Make this a template
                            <nav class=\"dropmenu animated\">
                            ";
        // line 81
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 84
        echo "                            </nav>
                        </section>
                        <section class=\"col-6\">
                            ";
        // line 87
        $this->displayBlock('messages', $context, $blocks);
        // line 90
        echo "                            ";
        $this->displayBlock('content', $context, $blocks);
        // line 91
        echo "                        </section>
                        <section class=\"col-3\">
                            ";
        // line 93
        $this->displayBlock('sidebar', $context, $blocks);
        // line 96
        echo "                        </section>
                    </div>
                </section>
            </section>
        ";
    }

    // line 81
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 82
        echo "                                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 82)->display($context);
        // line 83
        echo "                            ";
    }

    // line 87
    public function block_messages($context, array $blocks = [])
    {
        // line 88
        echo "                                ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 88);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 89
        echo "                            ";
    }

    // line 90
    public function block_content($context, array $blocks = [])
    {
    }

    // line 93
    public function block_sidebar($context, array $blocks = [])
    {
        // line 94
        echo "                                ";
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 94)->display($context);
        // line 95
        echo "                            ";
    }

    // line 105
    public function block_footer($context, array $blocks = [])
    {
        // line 106
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 106)->display($context);
        // line 107
        echo "    ";
    }

    // line 120
    public function block_bottom($context, array $blocks = [])
    {
        // line 121
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 121,  386 => 120,  382 => 107,  379 => 106,  376 => 105,  372 => 95,  369 => 94,  366 => 93,  361 => 90,  357 => 89,  346 => 88,  343 => 87,  339 => 83,  336 => 82,  333 => 81,  325 => 96,  323 => 93,  319 => 91,  316 => 90,  314 => 87,  309 => 84,  307 => 81,  299 => 76,  296 => 75,  293 => 74,  288 => 71,  272 => 58,  266 => 56,  263 => 55,  258 => 47,  256 => 46,  250 => 43,  247 => 42,  244 => 41,  233 => 39,  226 => 36,  221 => 35,  218 => 34,  208 => 31,  205 => 30,  202 => 29,  199 => 28,  194 => 25,  191 => 24,  188 => 23,  183 => 22,  178 => 21,  175 => 20,  172 => 19,  165 => 16,  161 => 15,  158 => 14,  156 => 13,  145 => 9,  142 => 8,  139 => 7,  126 => 123,  124 => 120,  118 => 116,  116 => 115,  112 => 113,  110 => 112,  104 => 108,  102 => 105,  96 => 101,  94 => 74,  90 => 72,  88 => 71,  85 => 70,  83 => 41,  78 => 39,  75 => 38,  73 => 34,  70 => 33,  68 => 28,  65 => 27,  63 => 19,  60 => 18,  58 => 7,  53 => 5,  50 => 4,  48 => 3,  46 => 2,  44 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('col-12') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head deferred %}
    <meta charset=\"utf-8\" />
    <title>{% if page.title %}{{ page.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
    {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}{% endif %}
    {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
    {% do assets.addCss('theme://css-compiled/theme'~compress) %}
    {% do assets.addCss('theme://css/custom.css') %}
    {% do assets.addCss('theme://css/line-awesome.min.css') %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 101) %}
    {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
    <div id=\"page-wrapper\">
    {% block header deferred %}
        <section id=\"header\" class=\"section\">
            <section class=\"container {{ grid_size }}\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        {% include 'partials/logo.html.twig' %}
                    </section>
                    <section class=\"navbar-section desktop-menu\">
                        Add in a topnav partial here
                        {# <nav class=\"dropmenu animated\">
                        {% block header_navigation %}
                            {% include 'partials/navigation.html.twig' %}
                        {% endblock %}
                        </nav> #}
                        {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
                        {% endif %}
                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    {% endblock %}

    {% block hero %}{% endblock %}

        <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    <div class=\"columns\">
                        <section class=\"col-3\">
                            Left sidebar? Make this a template
                            <nav class=\"dropmenu animated\">
                            {% block header_navigation %}
                                {% include 'partials/navigation.html.twig' %}
                            {% endblock %}
                            </nav>
                        </section>
                        <section class=\"col-6\">
                            {% block messages %}
                                {% include 'partials/messages.html.twig' ignore missing %}
                            {% endblock %}
                            {% block content %}{% endblock %}
                        </section>
                        <section class=\"col-3\">
                            {% block sidebar %}
                                {% include 'partials/sidebar.html.twig' %}
                            {% endblock %}
                        </section>
                    </div>
                </section>
            </section>
        {% endblock %}
        </section>

    </div>

    {% block footer %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}

    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/Users/tatiana.perry/Documents/hosting-provider/grav-admin/user/themes/quark/templates/partials/base.html.twig");
    }
}
