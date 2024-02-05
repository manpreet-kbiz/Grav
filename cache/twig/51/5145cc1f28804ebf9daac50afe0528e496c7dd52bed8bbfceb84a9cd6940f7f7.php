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
class __TwigTemplate_b24e474ec56f309b866b10f4efd4a2027c21c64f8a8bb106af829c1c78f6bd95 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blocks/base.html.twig", "partials/base.html.twig", 4);
        // line 4
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 4, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'head' => [$this, 'block_head'],
                'stylesheets' => [$this, 'block_stylesheets'],
                'javascripts' => [$this, 'block_javascripts'],
                'assets' => [$this, 'block_assets'],
                'body_classes' => [$this, 'block_body_classes'],
                'header' => [$this, 'block_header'],
                'header_navigation' => [$this, 'block_header_navigation'],
                'hero' => [$this, 'block_hero'],
                'body' => [$this, 'block_body'],
                'messages' => [$this, 'block_messages'],
                'footer' => [$this, 'block_footer'],
                'mobile' => [$this, 'block_mobile'],
                'bottom' => [$this, 'block_bottom'],
            ]
        );
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->bodyClassFunc($context, [0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "production-mode")) ? (".min.css") : (".css"));
        // line 5
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
<head>
";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 22
        echo "
    
";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('assets', $context, $blocks);
        // line 52
        echo "</head>
<body id=\"top\" class=\"";
        // line 53
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">

\t<div class=\"wrapper jobs_listing job_details apply_form\">
\t
   ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 93
        echo "
    ";
        // line 94
        $this->displayBlock('hero', $context, $blocks);
        // line 95
        echo "
        
        ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 107
        echo "       
\t   
\t    ";
        // line 109
        $this->displayBlock('footer', $context, $blocks);
        // line 112
        echo "
    </div>

    

    ";
        // line 117
        $this->displayBlock('mobile', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('bottom', $context, $blocks);
        // line 134
        echo "
</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'head');
    }

    // line 9
    public function block_head_deferred($context, array $blocks = [])
    {
        // line 10
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 11
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 15
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 15)->display($context);
        // line 16
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.png"), "html", null, true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\" />
\t
\t
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        echo " 
    ";
        // line 25
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/bootstrap.min.css"], "method");
        // line 26
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css", 1 => 99], "method");
        // line 27
        echo "\t
\t";
        // line 28
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/job_details.css"], "method");
        // line 29
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/job_apply_form.css"], "method");
        // line 30
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/jobs_listing.css"], "method");
        // line 31
        echo "
\t
";
    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        // line 36
        echo "
    ";
        // line 37
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/jquery.min.js", 1 => ["group" => "bottom"]], "method");
        // line 38
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/bootstrap.bundle.min.js", 1 => ["group" => "bottom"]], "method");
        // line 39
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/script.js", 1 => ["group" => "bottom"]], "method");
        // line 40
        echo "\t   ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://api_blog/assets/js/filterscript.js", 1 => ["group" => "bottom"]], "method");
        // line 41
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://www.google.com/recaptcha/api.js", 1 => ["group" => "bottom"]], "method");
        // line 42
        echo "\t
\t

";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 47
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 48
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 49
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
\t
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 53
    public function block_body_classes($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
    }

    // line 57
    public function block_header($context, array $blocks = [])
    {
        // line 58
        echo "
 <!-- header navbar -->
        <header>
           <div class=\"btmnv show\">
                <div class=\"container\">
                    <div class=\"row\">
                        <nav class=\"navbar navbar-expand-xl\">
                            <div class=\"container-fluid px-3 px-lg-0\">
                              
\t\t\t\t\t\t\t  ";
        // line 67
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 67)->display($context);
        // line 68
        echo "\t\t\t\t\t\t\t  
                              <button class=\"navbar-toggler d-block d-xl-none\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"navbar-toggler-icon\">
                                    <img class=\"toglbtn\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://assets/images/menu.png"), "html", null, true);
        echo "\" alt=\"toggle button\">
                                </span>
                              </button>
                              <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t     ";
        // line 76
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 79
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 80
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t<span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 81)->display($context);
            echo "</span>
\t\t\t\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t\t\t\t     
                                
                              </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
";
    }

    // line 76
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 77
        echo "\t\t\t\t\t\t\t\t\t";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 77)->display($context);
        // line 78
        echo "\t\t\t\t\t\t\t\t";
    }

    // line 94
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 97
    public function block_body($context, array $blocks = [])
    {
        // line 98
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 99
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 100
        $this->displayBlock('messages', $context, $blocks);
        // line 103
        echo "                    ";
        $this->displayBlock("content_surround", $context, $blocks);
        echo "
                </section>
            </section>
        ";
    }

    // line 100
    public function block_messages($context, array $blocks = [])
    {
        // line 101
        echo "                        ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 101);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 102
        echo "                    ";
    }

    // line 109
    public function block_footer($context, array $blocks = [])
    {
        // line 110
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 110)->display($context);
        // line 111
        echo "\t\t";
    }

    // line 117
    public function block_mobile($context, array $blocks = [])
    {
        // line 118
        echo "    <!--<div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 121
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 121)->display(twig_array_merge($context, ["mobile" => true]));
        // line 122
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 124
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 124)->display(twig_array_merge($context, ["tree" => true]));
        // line 125
        echo "            </nav>
        </div>
    </div>-->
    ";
    }

    // line 130
    public function block_bottom($context, array $blocks = [])
    {
        // line 131
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
\t
\t";
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
        return array (  406 => 131,  403 => 130,  396 => 125,  394 => 124,  390 => 122,  388 => 121,  383 => 118,  380 => 117,  376 => 111,  373 => 110,  370 => 109,  366 => 102,  355 => 101,  352 => 100,  343 => 103,  341 => 100,  337 => 99,  334 => 98,  331 => 97,  326 => 94,  322 => 78,  319 => 77,  316 => 76,  303 => 83,  297 => 81,  295 => 80,  292 => 79,  290 => 76,  282 => 71,  277 => 68,  275 => 67,  264 => 58,  261 => 57,  255 => 53,  247 => 49,  242 => 48,  239 => 47,  227 => 42,  224 => 41,  221 => 40,  218 => 39,  215 => 38,  213 => 37,  210 => 36,  207 => 35,  201 => 31,  198 => 30,  195 => 29,  193 => 28,  190 => 27,  187 => 26,  185 => 25,  180 => 24,  171 => 18,  167 => 17,  164 => 16,  162 => 15,  151 => 11,  148 => 10,  145 => 9,  132 => 134,  130 => 130,  127 => 129,  125 => 117,  118 => 112,  116 => 109,  112 => 107,  110 => 97,  106 => 95,  104 => 94,  101 => 93,  99 => 57,  92 => 53,  89 => 52,  87 => 47,  84 => 46,  82 => 35,  79 => 34,  77 => 24,  73 => 22,  71 => 9,  66 => 7,  62 => 5,  60 => 3,  58 => 2,  56 => 1,  25 => 4,);
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
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
{% use 'blocks/base.html.twig' %}

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
\t
\t
{% endblock head %}

    
{% block stylesheets %} 
    {% do assets.addCss('theme://assets/css/bootstrap.min.css') %}
\t{% do assets.addCss('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', 99) %}
\t
\t{% do assets.addCss('theme://assets/css/job_details.css') %}
\t{% do assets.addCss('theme://assets/css/job_apply_form.css') %}
\t{% do assets.addCss('theme://assets/css/jobs_listing.css') %}

\t
{% endblock %}

{% block javascripts %}

    {% do assets.addJs('theme://assets/js/jquery.min.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://assets/js/bootstrap.bundle.min.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://assets/js/script.js', {group:'bottom'}) %}
\t   {% do assets.addJs('plugin://api_blog/assets/js/filterscript.js', {group:'bottom'}) %}
\t{% do assets.addJs('https://www.google.com/recaptcha/api.js', {group:'bottom'}) %}
\t
\t

{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
\t
{% endblock %}
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">

\t<div class=\"wrapper jobs_listing job_details apply_form\">
\t
   {% block header %}

 <!-- header navbar -->
        <header>
           <div class=\"btmnv show\">
                <div class=\"container\">
                    <div class=\"row\">
                        <nav class=\"navbar navbar-expand-xl\">
                            <div class=\"container-fluid px-3 px-lg-0\">
                              
\t\t\t\t\t\t\t  {% include 'partials/logo.html.twig' %}
\t\t\t\t\t\t\t  
                              <button class=\"navbar-toggler d-block d-xl-none\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"navbar-toggler-icon\">
                                    <img class=\"toglbtn\" src=\"{{ url('theme://assets/images/menu.png')}}\" alt=\"toggle button\">
                                </span>
                              </button>
                              <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t     {% block header_navigation %}
\t\t\t\t\t\t\t\t\t{% include 'partials/navigation.html.twig' %}
\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% if config.plugins.login.enabled and grav.user.username %}
\t\t\t\t\t\t\t\t\t<span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t     
                                
                              </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
{% endblock %}

    {% block hero %}{% endblock %}

        
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {{ block('content_surround') }}
                </section>
            </section>
        {% endblock %}
       
\t   
\t    {% block footer %}
        {% include 'partials/footer.html.twig' %}
\t\t{% endblock %}

    </div>

    

    {% block mobile %}
    <!--<div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>-->
    {% endblock %}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
\t
\t{% endblock %}

</body>
</html>
", "partials/base.html.twig", "C:\\xampp8.1\\htdocs\\grav-admin\\user\\themes\\quarkcustom\\templates\\partials\\base.html.twig");
    }
    private $deferred;
}
