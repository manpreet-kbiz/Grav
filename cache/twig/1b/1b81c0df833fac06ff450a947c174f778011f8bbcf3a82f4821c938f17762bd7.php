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

/* forms/fields/text/edit_list.html.twig */
class __TwigTemplate_16815478de3a472e8d24615c31c801a47ced176675411c31a93bc0c6cb23ab08 extends \Twig\Template
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
        $context["value"] = ((($context["iterable"] ?? null)) ? (twig_join_filter(($context["value"] ?? null), ", ")) : ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter(($context["value"] ?? null))));
        // line 2
        echo "
";
        // line 3
        if (($context["link"] ?? null)) {
            // line 4
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["link"] ?? null));
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? null));
            echo "</a>";
        } else {
            // line 6
            echo twig_escape_filter($this->env, ($context["value"] ?? null));
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/text/edit_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set value = iterable ? value|join(', ') : value|string %}

{% if link -%}
    <a href=\"{{ link|e }}\">{{ value|e }}</a>
{%- else -%}
    {{ value|e }}
{%- endif %}
", "forms/fields/text/edit_list.html.twig", "C:\\xampp8.1\\htdocs\\grav-admin\\user\\plugins\\form\\templates\\forms\\fields\\text\\edit_list.html.twig");
    }
}
