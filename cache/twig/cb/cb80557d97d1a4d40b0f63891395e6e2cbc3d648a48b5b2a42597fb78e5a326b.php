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

/* partials/sidefilter.html.twig */
class __TwigTemplate_5ca35c2ff64a79f244aecd38fce19f0837e525f0e6ae6da9fb7bc89a4bd38d07 extends \Twig\Template
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
        echo "<style>
\t\tbody, html {
\t\t  margin: 0;
\t\t  padding: 0;
\t\t  height: 100%;
\t\t}
        /* Styles for the loader */
        .loader {
            border: 8px solid #f3f3f3;
            border-top: 8px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            display: none; /* Initially hide the loader */
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -25px; /* Half of the loader's height */
            margin-left: -25px; /* Half of the loader's width */
\t\t\tz-index:999;
\t\t\t
        }

        /* Animation for the loader */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
\t\t
 </style>
 
";
        // line 33
        $context["tagparam"] = $this->getAttribute(($context["uri"] ?? null), "param", [0 => "tag"], "method");
        // line 34
        $context["categoryparam"] = $this->getAttribute(($context["uri"] ?? null), "param", [0 => "category"], "method");
        // line 35
        echo "
<div class=\"row filterdropdown\">\t
   <div id=\"loader\" class=\"loader\"></div>
    <form action=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/jobs\" method=\"post\">
\t    <input type=\"hidden\" name=\"sidebarsearch\" value=\"1\">
        <h4 class=\"apply-filters-heading\"> Apply Filters </h4>
\t\t
\t\t<!-- Select industry -->
        <h3 class=\"sidebar-select-option-heading\">Select industry </h3>
\t
\t\t<div class=\"opt-val\">
\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_tags"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["industry"]) {
            // line 47
            echo "\t\t\t\t";
            if ($context["industry"]) {
                // line 48
                echo "\t\t\t\t\t";
                if (twig_in_filter($context["industry"], ($context["selectedIndustries"] ?? null))) {
                    // line 49
                    echo "\t\t\t\t\t";
                    // line 50
                    echo "\t\t\t\t\t\t<input type=\"checkbox\"  id=\"industry_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                    echo "\"  name=\"industry[]\" value=\"";
                    echo twig_escape_filter($this->env, $context["industry"], "html", null, true);
                    echo "\" class=\"common-class industry-checkbox\" checked>
\t\t\t\t\t\t<label>";
                    // line 51
                    echo twig_escape_filter($this->env, $context["industry"], "html", null, true);
                    echo "</label><br>
\t\t\t\t\t";
                } else {
                    // line 53
                    echo "\t\t\t\t\t\t";
                    // line 54
                    echo "\t\t\t\t\t\t<input type=\"checkbox\" id=\"industry_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                    echo "\" name=\"industry[]\" value=\"";
                    echo twig_escape_filter($this->env, $context["industry"], "html", null, true);
                    echo "\" class=\"common-class industry-checkbox\">
\t\t\t\t\t\t<label for=\"industry_";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["industry"], "html", null, true);
                    echo "</label><br>
\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t";
            }
            // line 58
            echo "\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['industry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t</div>
\t\t<!-- Select industry end -->
\t\t
\t\t<!-- Container to display selected archetype -->
        <h3 class=\"sidebar-select-option-heading\">Select Archtype </h3>
\t\t<div class=\"opt-val\">
\t\t
\t\t\t<div id=\"selectedArchetype\"></div> \t
\t\t</div>\t
\t\t<input type=\"hidden\" value=\"\" id=\"selectedarchtype\" name=\"selectedarchtype\">
\t\t<!-- Container to display selected archetype end  -->
\t\t
\t\t<!-- Enter Location -->
\t\t<h3 class=\"sidebar-select-option-heading\">Enter Location </h3>
\t\t<div class=\"opt-val\">
\t\t\t <input type=\"input\" id=\"Location\" name=\"location\" value=\"";
        // line 74
        if (($context["selectedLocation"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["selectedLocation"] ?? null), "html", null, true);
        }
        echo "\" placeholder=\"Enter City \">
\t\t</div>
\t\t<!-- Enter Location end  -->
\t\t
\t\t
\t\t<!--Job Age  -->
\t\t <h3 class=\"sidebar-select-option-heading\">Job Age  </h3>
\t\t<div class=\"opt-val\">
\t\t\t<select class=\"sidebar-select-option\" id=\"timeFrame\" name=\"timeFrame\">
\t\t\t\t<option value=\"\">Select Job Age</option>
\t\t\t\t";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "This week", 1 => "This month", 2 => "This Quarter"]);
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 85
            echo "\t\t\t\t\t";
            $context["selected"] = (((($context["selectedTimeFrame"] ?? null) == $context["option"])) ? ("selected") : (""));
            // line 86
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["selected"] ?? null), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "\t\t\t</select>
\t\t</div>
\t\t<!--Job Age end -->
\t\t
\t\t<!-- PayRange  -->
\t\t <h3 class=\"sidebar-select-option-heading\">PayRange </h3>
\t\t\t<div class=\"opt-val\">
\t\t\t\t<select class=\"sidebar-select-option\" id=\"payRange\" name=\"payRange\">
\t\t\t\t\t<option value=\"\">Select PayRange</option>
\t\t\t\t\t";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "20000-80000", 1 => "50000-100000", 2 => "100000-150000", 3 => "150000-200000", 4 => "200000-1000000"]);
        foreach ($context['_seq'] as $context["_key"] => $context["PayRangeoption"]) {
            // line 98
            echo "\t\t\t\t\t\t";
            $context["selected"] = (((($context["selectedPayRange"] ?? null) == $context["PayRangeoption"])) ? ("selected") : (""));
            // line 99
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["PayRangeoption"], "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["selected"] ?? null), "html", null, true);
            echo ">\$";
            echo twig_escape_filter($this->env, $context["PayRangeoption"], "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['PayRangeoption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t\t\t</select>
            </div>
\t\t<!-- PayRange end -->
\t\t
\t\t<br>
       \t<button type=\"submit\" class=\"btn btn-primary search-submit-btn-sidefiltr\">Search</button>
    </form>
</div>

<script>

    let selectedinforms = ";
        // line 112
        echo twig_jsonencode_filter(($context["selectedCategoryparams"] ?? null));
        echo ";

\tlet  indAndTags = ";
        // line 114
        echo twig_jsonencode_filter(($context["ind_and_tags"] ?? null));
        echo ";
\t//document.getElementById(\"loader\").style.display = \"block\";
\tdocument.addEventListener('DOMContentLoaded', function () {
\t\tvar selectedArchetypeContainer = document.getElementById('selectedArchetype');
\t\titerateCheckedCheck(indAndTags, selectedArchetypeContainer);
\t\t
\t\tvar checkboxes = document.querySelectorAll('.industry-checkbox');
\t\t//alert(\"dddd\");
\t\tcheckboxes.forEach(function(checkbox) {
\t\t    
\t\t   // iterateCheckedCheck(indAndTags, selectedArchetypeContainer);
\t\t\t
\t\t\tcheckbox.addEventListener('change', function() {
\t\t\t\tdocument.getElementById(\"loader\").style.display = \"block\";
\t\t\t\tselectedArchetypeContainer.innerHTML = \"\";
\t\t\t\t// Get all checked checkboxes
                iterateCheckedCheck(indAndTags, selectedArchetypeContainer);
\t\t\t\t
\t\t\t\tsetTimeout(function() {
\t\t\t\t\tdocument.getElementById(\"loader\").style.display = \"none\";
\t\t\t\t}, 3000);
            });
            
\t\t\t//iterateCheckedCheck(indAndTags, selectedArchetypeContainer);
\t\t});
\t\t
\t\t//Archtype check event
\t});
\t
   function iterateCheckedCheck(indAndTags, selectedArchetypeContainer){
\t\t
\t\t//var checkedValues = ('";
        // line 145
        echo twig_escape_filter($this->env, twig_join_filter(($context["selectedCategoryparams"] ?? null), ", "), "html", null, true);
        echo "').split(\",\");
\t\t
\t\tvar checkedCheckboxes = document.querySelectorAll('.industry-checkbox:checked');
\t\t// Iterate through checked checkboxes
\t\tcheckedCheckboxes.forEach(function(checkedCheckbox) {
\t\t\tconsole.log('Checked Checkbox: ', checkedCheckbox.value);
\t\t\tvar selectedIndustry = checkedCheckbox.value;
\t\t\t if (selectedIndustry && typeof indAndTags[selectedIndustry] === 'object') {
\t\t\t\tfor (const jobTitle in indAndTags[selectedIndustry]) {
\t\t\t\t
\t\t\t\t// Access the corresponding value
\t\t\t\tconst valueToFind = indAndTags[selectedIndustry][jobTitle];
\t\t\t\t\tif (indAndTags[selectedIndustry].hasOwnProperty(jobTitle)) {
\t\t\t\t\t\tvar checkboxw = document.createElement('input');
\t\t\t\t\t\tcheckboxw.type = 'checkbox';
\t\t\t\t\t\tcheckboxw.name = 'categoryparam[]';
\t\t\t\t\t\tcheckboxw.value = indAndTags[selectedIndustry][jobTitle];
\t\t\t\t\t\tcheckboxw.className = 'catclass arctype-checkbox';
\t\t\t\t\t\t
\t\t\t\t\t\tconsole.log('selectedinforms:',selectedinforms);
\t\t\t\t\t\t
\t\t\t\t\t\tif(selectedinforms){
\t\t\t\t\t\t\tif (selectedinforms.includes(valueToFind)) {
\t\t\t\t\t\t\t\tcheckboxw.checked = true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t
\t\t\t\t\t\t//Create label for the checkbox
\t\t\t\t\t\tvar label = document.createElement('label');
\t\t\t\t\t\tlabel.htmlFor = indAndTags[selectedIndustry][jobTitle];
\t\t\t\t\t\tlabel.className = 'catlabel';
\t\t\t\t\t\tlabel.textContent = indAndTags[selectedIndustry][jobTitle];

\t\t\t\t\t\t// Create line break
\t\t\t\t\t\tvar lineBreak = document.createElement('br');
\t\t\t\t\t\t
\t\t\t\t\t\tselectedArchetypeContainer.appendChild(checkboxw);
\t\t\t\t\t\tselectedArchetypeContainer.appendChild(label);
\t\t\t\t\t\tselectedArchetypeContainer.appendChild(lineBreak);
\t\t\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t});
\t\t
\t}
</script>

\t




";
    }

    public function getTemplateName()
    {
        return "partials/sidefilter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 145,  255 => 114,  250 => 112,  237 => 101,  224 => 99,  221 => 98,  217 => 97,  206 => 88,  193 => 86,  190 => 85,  186 => 84,  171 => 74,  154 => 59,  140 => 58,  137 => 57,  130 => 55,  123 => 54,  121 => 53,  116 => 51,  109 => 50,  107 => 49,  104 => 48,  101 => 47,  84 => 46,  73 => 38,  68 => 35,  66 => 34,  64 => 33,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<style>
\t\tbody, html {
\t\t  margin: 0;
\t\t  padding: 0;
\t\t  height: 100%;
\t\t}
        /* Styles for the loader */
        .loader {
            border: 8px solid #f3f3f3;
            border-top: 8px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            display: none; /* Initially hide the loader */
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -25px; /* Half of the loader's height */
            margin-left: -25px; /* Half of the loader's width */
\t\t\tz-index:999;
\t\t\t
        }

        /* Animation for the loader */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
\t\t
 </style>
 
{% set tagparam = uri.param('tag') %}
{% set categoryparam = uri.param('category') %}

<div class=\"row filterdropdown\">\t
   <div id=\"loader\" class=\"loader\"></div>
    <form action=\"{{base_url}}/jobs\" method=\"post\">
\t    <input type=\"hidden\" name=\"sidebarsearch\" value=\"1\">
        <h4 class=\"apply-filters-heading\"> Apply Filters </h4>
\t\t
\t\t<!-- Select industry -->
        <h3 class=\"sidebar-select-option-heading\">Select industry </h3>
\t
\t\t<div class=\"opt-val\">
\t\t\t{% for industry in all_tags %}
\t\t\t\t{% if industry %}
\t\t\t\t\t{% if industry in selectedIndustries %}
\t\t\t\t\t{# Display checkbox for selected industry with additional content #}
\t\t\t\t\t\t<input type=\"checkbox\"  id=\"industry_{{ loop.index }}\"  name=\"industry[]\" value=\"{{ industry }}\" class=\"common-class industry-checkbox\" checked>
\t\t\t\t\t\t<label>{{ industry }}</label><br>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{# Display checkbox for non-selected industry #}
\t\t\t\t\t\t<input type=\"checkbox\" id=\"industry_{{ loop.index }}\" name=\"industry[]\" value=\"{{ industry }}\" class=\"common-class industry-checkbox\">
\t\t\t\t\t\t<label for=\"industry_{{ loop.index }}\">{{ industry }}</label><br>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t</div>
\t\t<!-- Select industry end -->
\t\t
\t\t<!-- Container to display selected archetype -->
        <h3 class=\"sidebar-select-option-heading\">Select Archtype </h3>
\t\t<div class=\"opt-val\">
\t\t
\t\t\t<div id=\"selectedArchetype\"></div> \t
\t\t</div>\t
\t\t<input type=\"hidden\" value=\"\" id=\"selectedarchtype\" name=\"selectedarchtype\">
\t\t<!-- Container to display selected archetype end  -->
\t\t
\t\t<!-- Enter Location -->
\t\t<h3 class=\"sidebar-select-option-heading\">Enter Location </h3>
\t\t<div class=\"opt-val\">
\t\t\t <input type=\"input\" id=\"Location\" name=\"location\" value=\"{% if selectedLocation %}{{ selectedLocation }}{% endif %}\" placeholder=\"Enter City \">
\t\t</div>
\t\t<!-- Enter Location end  -->
\t\t
\t\t
\t\t<!--Job Age  -->
\t\t <h3 class=\"sidebar-select-option-heading\">Job Age  </h3>
\t\t<div class=\"opt-val\">
\t\t\t<select class=\"sidebar-select-option\" id=\"timeFrame\" name=\"timeFrame\">
\t\t\t\t<option value=\"\">Select Job Age</option>
\t\t\t\t{% for option in ['This week', 'This month', 'This Quarter'] %}
\t\t\t\t\t{% set selected = (selectedTimeFrame == option) ? 'selected' : '' %}
\t\t\t\t\t<option value=\"{{ option }}\" {{ selected }}>{{ option }}</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t</div>
\t\t<!--Job Age end -->
\t\t
\t\t<!-- PayRange  -->
\t\t <h3 class=\"sidebar-select-option-heading\">PayRange </h3>
\t\t\t<div class=\"opt-val\">
\t\t\t\t<select class=\"sidebar-select-option\" id=\"payRange\" name=\"payRange\">
\t\t\t\t\t<option value=\"\">Select PayRange</option>
\t\t\t\t\t{% for PayRangeoption in ['20000-80000', '50000-100000', '100000-150000', '150000-200000', '200000-1000000'] %}
\t\t\t\t\t\t{% set selected = (selectedPayRange == PayRangeoption) ? 'selected' : '' %}
\t\t\t\t\t\t<option value=\"{{ PayRangeoption }}\" {{ selected }}>\${{ PayRangeoption }}</option>
\t\t\t\t\t{% endfor %}
\t\t\t\t</select>
            </div>
\t\t<!-- PayRange end -->
\t\t
\t\t<br>
       \t<button type=\"submit\" class=\"btn btn-primary search-submit-btn-sidefiltr\">Search</button>
    </form>
</div>

<script>

    let selectedinforms = {{ selectedCategoryparams|json_encode|raw }};

\tlet  indAndTags = {{ ind_and_tags|json_encode|raw }};
\t//document.getElementById(\"loader\").style.display = \"block\";
\tdocument.addEventListener('DOMContentLoaded', function () {
\t\tvar selectedArchetypeContainer = document.getElementById('selectedArchetype');
\t\titerateCheckedCheck(indAndTags, selectedArchetypeContainer);
\t\t
\t\tvar checkboxes = document.querySelectorAll('.industry-checkbox');
\t\t//alert(\"dddd\");
\t\tcheckboxes.forEach(function(checkbox) {
\t\t    
\t\t   // iterateCheckedCheck(indAndTags, selectedArchetypeContainer);
\t\t\t
\t\t\tcheckbox.addEventListener('change', function() {
\t\t\t\tdocument.getElementById(\"loader\").style.display = \"block\";
\t\t\t\tselectedArchetypeContainer.innerHTML = \"\";
\t\t\t\t// Get all checked checkboxes
                iterateCheckedCheck(indAndTags, selectedArchetypeContainer);
\t\t\t\t
\t\t\t\tsetTimeout(function() {
\t\t\t\t\tdocument.getElementById(\"loader\").style.display = \"none\";
\t\t\t\t}, 3000);
            });
            
\t\t\t//iterateCheckedCheck(indAndTags, selectedArchetypeContainer);
\t\t});
\t\t
\t\t//Archtype check event
\t});
\t
   function iterateCheckedCheck(indAndTags, selectedArchetypeContainer){
\t\t
\t\t//var checkedValues = ('{{selectedCategoryparams|join(\", \") }}').split(\",\");
\t\t
\t\tvar checkedCheckboxes = document.querySelectorAll('.industry-checkbox:checked');
\t\t// Iterate through checked checkboxes
\t\tcheckedCheckboxes.forEach(function(checkedCheckbox) {
\t\t\tconsole.log('Checked Checkbox: ', checkedCheckbox.value);
\t\t\tvar selectedIndustry = checkedCheckbox.value;
\t\t\t if (selectedIndustry && typeof indAndTags[selectedIndustry] === 'object') {
\t\t\t\tfor (const jobTitle in indAndTags[selectedIndustry]) {
\t\t\t\t
\t\t\t\t// Access the corresponding value
\t\t\t\tconst valueToFind = indAndTags[selectedIndustry][jobTitle];
\t\t\t\t\tif (indAndTags[selectedIndustry].hasOwnProperty(jobTitle)) {
\t\t\t\t\t\tvar checkboxw = document.createElement('input');
\t\t\t\t\t\tcheckboxw.type = 'checkbox';
\t\t\t\t\t\tcheckboxw.name = 'categoryparam[]';
\t\t\t\t\t\tcheckboxw.value = indAndTags[selectedIndustry][jobTitle];
\t\t\t\t\t\tcheckboxw.className = 'catclass arctype-checkbox';
\t\t\t\t\t\t
\t\t\t\t\t\tconsole.log('selectedinforms:',selectedinforms);
\t\t\t\t\t\t
\t\t\t\t\t\tif(selectedinforms){
\t\t\t\t\t\t\tif (selectedinforms.includes(valueToFind)) {
\t\t\t\t\t\t\t\tcheckboxw.checked = true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t
\t\t\t\t\t\t//Create label for the checkbox
\t\t\t\t\t\tvar label = document.createElement('label');
\t\t\t\t\t\tlabel.htmlFor = indAndTags[selectedIndustry][jobTitle];
\t\t\t\t\t\tlabel.className = 'catlabel';
\t\t\t\t\t\tlabel.textContent = indAndTags[selectedIndustry][jobTitle];

\t\t\t\t\t\t// Create line break
\t\t\t\t\t\tvar lineBreak = document.createElement('br');
\t\t\t\t\t\t
\t\t\t\t\t\tselectedArchetypeContainer.appendChild(checkboxw);
\t\t\t\t\t\tselectedArchetypeContainer.appendChild(label);
\t\t\t\t\t\tselectedArchetypeContainer.appendChild(lineBreak);
\t\t\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t});
\t\t
\t}
</script>

\t




", "partials/sidefilter.html.twig", "C:\\xampp8.1\\htdocs\\grav-admin\\user\\plugins\\api_blog\\templates\\partials\\sidefilter.html.twig");
    }
}
