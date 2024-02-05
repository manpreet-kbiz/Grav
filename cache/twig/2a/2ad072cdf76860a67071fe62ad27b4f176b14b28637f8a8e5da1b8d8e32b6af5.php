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

/* partials/_facebook.html.twig */
class __TwigTemplate_59102f1f9033e8e3bd7a0966bdd0a25d8c8c2fd8372a3045f71e04ab765d3903 extends \Twig\Template
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
        echo "<li class=\"rrssb-facebook\">
    <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 2
        echo twig_escape_filter($this->env, ($context["page_url"] ?? null), "html", null, true);
        echo "\" class=\"popup\">
            <span class=\"rrssb-icon\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid\" width=\"29\" height=\"29\" viewBox=\"0 0 29 29\">
                  <path d=\"M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z\"
                        class=\"cls-2\" fill-rule=\"evenodd\" />
              </svg>
            </span>
        <span class=\"rrssb-text\">";
        // line 9
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</span>
    </a>
</li>";
    }

    public function getTemplateName()
    {
        return "partials/_facebook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"rrssb-facebook\">
    <a href=\"https://www.facebook.com/sharer/sharer.php?u={{ page_url }}\" class=\"popup\">
            <span class=\"rrssb-icon\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid\" width=\"29\" height=\"29\" viewBox=\"0 0 29 29\">
                  <path d=\"M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z\"
                        class=\"cls-2\" fill-rule=\"evenodd\" />
              </svg>
            </span>
        <span class=\"rrssb-text\">{{ label }}</span>
    </a>
</li>", "partials/_facebook.html.twig", "C:\\xampp8.1\\htdocs\\grav-admin\\user\\plugins\\api_blog\\templates\\partials\\_facebook.html.twig");
    }
}
