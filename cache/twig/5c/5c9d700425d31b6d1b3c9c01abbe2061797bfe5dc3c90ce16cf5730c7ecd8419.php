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

/* partials/navigation.html.twig */
class __TwigTemplate_ab140ed839261dbff8a95ebca5bb4c210d3b87e78622a9f9a7b609250688d7a3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/navigation.html.twig", 1)->unwrap();
        // line 2
        echo "
<ul ";
        // line 3
        echo ((($context["tree"] ?? null)) ? ("class=\"tree navbar-nav ms-auto mb-2 mb-lg-0\"") : ("class=\"navbar-nav ms-auto mb-2 mb-lg-0\""));
        echo ">
    ";
        // line 4
        echo $context["macros"]->getnav_loop(($context["pages"] ?? null));
        echo "
\t
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t<button class=\"btn btn-primary\"><i><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://assets/images/globe_blue.png"), "html", null, true);
        echo "\" alt=\"gentis\"></i>Visit Site</button>
\t\t</a>
\t </li>
</ul>

";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  39 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macros/macros.html.twig' as macros %}

<ul {{ tree ? 'class=\"tree navbar-nav ms-auto mb-2 mb-lg-0\"' : 'class=\"navbar-nav ms-auto mb-2 mb-lg-0\"' }}>
    {{ macros.nav_loop(pages) }}
\t
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t<button class=\"btn btn-primary\"><i><img src=\"{{ url('theme://assets/images/globe_blue.png')}}\" alt=\"gentis\"></i>Visit Site</button>
\t\t</a>
\t </li>
</ul>

", "partials/navigation.html.twig", "C:\\xampp8.1\\htdocs\\grav-admin\\user\\themes\\quarkcustom\\templates\\partials\\navigation.html.twig");
    }
}
