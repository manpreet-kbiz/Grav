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

/* jobslisting.html.twig */
class __TwigTemplate_a5a1cfdb6fdd8558bd4c5215e77313117d8a2ea7541ef7e775496c2bebc86274 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
            'item' => [$this, 'block_item'],
            'mobile' => [$this, 'block_mobile'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "jobslisting.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        echo " 
    ";
        // line 6
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/bootstrap.min.css"], "method");
        // line 7
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css", 1 => 99], "method");
        // line 8
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/job_details.css"], "method");
        // line 9
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/job_apply_form.css"], "method");
        // line 10
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/jobs_listing.css"], "method");
        // line 11
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/test.css"], "method");
        // line 12
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "plugins://api_blog/assets/css/filter.css"], "method");
        // line 13
        echo "\t
";
    }

    // line 16
    public function block_hero($context, array $blocks = [])
    {
        // line 17
        echo "  <section class=\"bannerHero\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"bnrcont d-flex flex-column justify-content-center align-items-center\">
\t\t\t\t\t<h1>Find Your Dream Job Here</h1>
\t\t\t\t\t<!--<p>Gentis website connect job seekers with employers, dddd displaying various job listings.</p>-->
\t\t\t\t\t  <form action=\"\">
\t\t\t\t\t\t<div class=\"backgrnd_inpt\">
\t\t\t\t\t\t  <input type=\"text\" name=\"search\" class=\"form-control search-input\" aria-describedby=\"emailHelp\" placeholder=\"Job title  or keyword\"  value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["query"] ?? null));
        echo "\" required>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary search-submit\">Search</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        // line 38
        echo "    <section class=\"jobs pt-25 pb-60\">
        ";
        // line 39
        $this->displayBlock('item', $context, $blocks);
        // line 82
        echo "    </section>
";
    }

    // line 39
    public function block_item($context, array $blocks = [])
    {
        // line 40
        echo "            <div class=\"container\"> 
                <div class=\"row\">
                    <div class=\"col-lg-3 d-none d-lg-block\">
\t\t\t\t\t";
        // line 43
        $this->loadTemplate("partials/sidefilter.html.twig", "jobslisting.html.twig", 43)->display(twig_array_merge($context, ["all_tags" => ($context["all_tags"] ?? null)]));
        // line 44
        echo "                    </div>
                    <div class=\"col-lg-9 d-none d-lg-block\">
\t\t\t\t\t";
        // line 46
        if (($context["filterused"] ?? null)) {
            // line 47
            echo "\t\t\t\t\t
\t\t\t\t\t\t";
            // line 48
            if (($context["sidebarsearch_result"] ?? null)) {
                // line 49
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["sidebarsearch_result"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 50
                    echo "\t\t\t\t\t\t\t\t";
                    $this->loadTemplate("partials/job-listplugin-item.html.twig", "jobslisting.html.twig", 50)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
                    // line 51
                    echo "\t\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "\t\t\t\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t    <div>NO Job Found! <a style=\"color:green;\" href=\"";
                // line 54
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/jobs\">Reset</a></div>
                        ";
            }
            // line 56
            echo "\t\t\t\t\t\t
\t\t\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t\t\t";
            if (($context["query"] ?? null)) {
                // line 59
                echo "                            ";
                if (($context["search_results"] ?? null)) {
                    // line 60
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["search_results"] ?? null));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 61
                        echo "                                    ";
                        $this->loadTemplate("partials/job-listplugin-item.html.twig", "jobslisting.html.twig", 61)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
                        // line 62
                        echo "                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "                            ";
                } else {
                    // line 64
                    echo "                                <div>NO Job Found! <a style=\"color:green;\" href=\"/grav/grav-admin/jobs\">Reset</a></div>
                            ";
                }
                // line 66
                echo "                        ";
            } else {
                // line 67
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 68
                    echo "                                ";
                    $this->loadTemplate("partials/job-listplugin-item.html.twig", "jobslisting.html.twig", 68)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
                    // line 69
                    echo "                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "                        ";
            }
            // line 71
            echo "
                        ";
            // line 72
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
                // line 73
                echo "                            ";
                $this->loadTemplate("partials/pagination.html.twig", "jobslisting.html.twig", 73)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
                // line 74
                echo "                        ";
            }
            // line 75
            echo "\t\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t\t
                        
                    </div>
                </div>
            </div>
        ";
    }

    // line 85
    public function block_mobile($context, array $blocks = [])
    {
        // line 86
        echo "    <!-- Mobile content here -->
";
    }

    public function getTemplateName()
    {
        return "jobslisting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 86,  300 => 85,  291 => 76,  288 => 75,  285 => 74,  282 => 73,  280 => 72,  277 => 71,  274 => 70,  260 => 69,  257 => 68,  239 => 67,  236 => 66,  232 => 64,  229 => 63,  215 => 62,  212 => 61,  194 => 60,  191 => 59,  188 => 58,  184 => 56,  179 => 54,  176 => 53,  173 => 52,  159 => 51,  156 => 50,  138 => 49,  136 => 48,  133 => 47,  131 => 46,  127 => 44,  125 => 43,  120 => 40,  117 => 39,  112 => 82,  110 => 39,  107 => 38,  104 => 37,  90 => 26,  79 => 17,  76 => 16,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  56 => 8,  53 => 7,  51 => 6,  46 => 5,  41 => 1,  39 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% set collection = page.collection() %}

{% block stylesheets %} 
    {% do assets.addCss('theme://assets/css/bootstrap.min.css') %}
    {% do assets.addCss('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', 99) %}
    {% do assets.addCss('theme://assets/css/job_details.css') %}
    {% do assets.addCss('theme://assets/css/job_apply_form.css') %}
    {% do assets.addCss('theme://assets/css/jobs_listing.css') %}
\t{% do assets.addCss('theme://assets/css/test.css') %}
\t{% do assets.addCss('plugins://api_blog/assets/css/filter.css') %}
\t
{% endblock %}

{% block hero %}
  <section class=\"bannerHero\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"bnrcont d-flex flex-column justify-content-center align-items-center\">
\t\t\t\t\t<h1>Find Your Dream Job Here</h1>
\t\t\t\t\t<!--<p>Gentis website connect job seekers with employers, dddd displaying various job listings.</p>-->
\t\t\t\t\t  <form action=\"\">
\t\t\t\t\t\t<div class=\"backgrnd_inpt\">
\t\t\t\t\t\t  <input type=\"text\" name=\"search\" class=\"form-control search-input\" aria-describedby=\"emailHelp\" placeholder=\"Job title  or keyword\"  value=\"{{ query|e }}\" required>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary search-submit\">Search</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{% endblock %}

{% block body %}
    <section class=\"jobs pt-25 pb-60\">
        {% block item %}
            <div class=\"container\"> 
                <div class=\"row\">
                    <div class=\"col-lg-3 d-none d-lg-block\">
\t\t\t\t\t{% include 'partials/sidefilter.html.twig' with {all_tags: all_tags} %}
                    </div>
                    <div class=\"col-lg-9 d-none d-lg-block\">
\t\t\t\t\t{% if filterused %}
\t\t\t\t\t
\t\t\t\t\t\t{% if sidebarsearch_result %}
\t\t\t\t\t\t\t{% for child in sidebarsearch_result %}
\t\t\t\t\t\t\t\t{% include 'partials/job-listplugin-item.html.twig' with {blog: page, page: child} %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t
\t\t\t\t\t\t    <div>NO Job Found! <a style=\"color:green;\" href=\"{{ base_url }}/jobs\">Reset</a></div>
                        {% endif %}
\t\t\t\t\t\t
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{% if query %}
                            {% if(search_results) %}
                                {% for child in search_results %}
                                    {% include 'partials/job-listplugin-item.html.twig' with {blog: page, page: child} %}
                                {% endfor %}
                            {% else %}
                                <div>NO Job Found! <a style=\"color:green;\" href=\"/grav/grav-admin/jobs\">Reset</a></div>
                            {% endif %}
                        {% else %}
                            {% for child in collection %}
                                {% include 'partials/job-listplugin-item.html.twig' with {blog: page, page: child} %}
                            {% endfor %}
                        {% endif %}

                        {% if config.plugins.pagination.enabled and collection.params.pagination %}
                            {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination': collection.params.pagination} %}
                        {% endif %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t
                        
                    </div>
                </div>
            </div>
        {% endblock %}
    </section>
{% endblock %}

{% block mobile %}
    <!-- Mobile content here -->
{% endblock %}
", "jobslisting.html.twig", "C:\\xampp8.1\\htdocs\\grav-admin\\user\\themes\\quarkcustom\\templates\\jobslisting.html.twig");
    }
}
