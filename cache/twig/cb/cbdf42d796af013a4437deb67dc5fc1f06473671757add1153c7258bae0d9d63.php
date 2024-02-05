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

/* partials/job-listplugin-item.html.twig */
class __TwigTemplate_0b0689a8965625251c8984b771c2e476c3fed60781676734c2be6b5111f7a7ce extends \Twig\Template
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
        echo "<div class=\"row\">
\t<!-- <div class=\"col-lg-1 d-none d-lg-block\"></div> -->
\t<div class=\"col-lg-12\">
\t   <div class=\"job_box\">
\t\t\t
\t\t\t <div class=\"job_box_head\">
\t\t\t\t<div class=\"job_box_head_inner\">
\t\t\t\t\t<h2><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo " </a>
\t\t\t\t\t\t<span class=\"job_cat\">(";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hash", []), "html", null, true);
        echo ")</span>
\t\t\t\t\t</h2>
\t\t\t\t\t
\t\t\t\t\t<div class=\"point_box\">
\t\t\t\t\t\t<!--<i><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://assets/images/salary_new.png"), "html", null, true);
        echo "\" alt=\"salary\"></i>-->
\t\t\t\t\t\t
\t\t\t\t\t\t<!--<span>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "compensation", []), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "salary_max", []), "html", null, true);
        echo "</span>-->
\t\t\t\t\t\t<h4 class=\"avrpay\">
\t\t\t\t\t\tAverage Pay : 
\t\t\t\t\t\t<span>    
\t\t\t\t\t\t";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "avg_sal", [])) {
            // line 20
            echo "\t\t\t\t\t\t\t \$ ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "avg_sal", []), "html", null, true);
            echo "
\t\t\t\t\t\t";
        } else {
            // line 22
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "compensation", []), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"job_box_head_inner\">
\t\t\t\t\t<div class=\"job_info\">
\t\t\t\t\t\t<h4>Openings :
\t\t\t\t\t\t\t<span class=\"job_cat\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "headcount", []), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t<span class=\"job_age\">(
\t\t\t\t\t\t\t\t";
        // line 34
        $context["pageDate"] = $this->getAttribute(($context["page"] ?? null), "date", []);
        // line 35
        echo "\t\t\t\t\t\t\t\t";
        $context["currentDate"] = twig_date_format_filter($this->env, "now", "U");
        // line 36
        echo "\t\t\t\t\t\t\t\t";
        $context["secondsDifference"] = (($context["currentDate"] ?? null) - ($context["pageDate"] ?? null));
        // line 37
        echo "\t\t\t\t\t\t\t\t";
        $context["daysDifference"] = (($context["secondsDifference"] ?? null) / ((24 * 60) * 60));
        // line 38
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 39
        if ((twig_round(($context["daysDifference"] ?? null), 0, "floor") == 0)) {
            // line 40
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t Posted ";
            // line 41
            echo "Today";
            echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } elseif ((twig_round(        // line 43
($context["daysDifference"] ?? null), 0, "floor") > 6)) {
            // line 44
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tPosted  1 week+
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t\t\t\t\t\tPosted  ";
            echo twig_escape_filter($this->env, twig_round(($context["daysDifference"] ?? null), 0, "floor"), "html", null, true);
            echo " days ago
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t\t\t)</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"job_info\">
\t\t\t\t\t\t<h4>Job Type :
\t\t\t\t\t\t\t<span class=\"job_cat job_type\">
\t\t\t\t\t\t\t";
        // line 58
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "contract_details", []) == "temporary")) {
            // line 59
            echo "\t\t\t\t\t\t\t\t";
            echo "Contract";
            echo "
\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute(        // line 60
($context["page"] ?? null), "header", []), "contract_details", []) == "full_time")) {
            // line 61
            echo "\t\t\t\t\t\t\t\t";
            echo "Full Time";
            echo "
\t\t\t\t\t\t\t";
        } else {
            // line 63
            echo "\t\t\t\t\t\t\t\t";
            echo "Unknown Contract Type";
            echo "
\t\t\t\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"job_box_body\">
\t\t\t\t
\t\t\t\t<div class=\"job_post_details d-flex justify-content-between align-items-start w-100\">
\t\t\t\t\t<div class=\"job_main_points d-flex justify-content-start align-items-start flex-wrap\">
\t\t\t\t\t\t";
        // line 75
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", [])) {
            // line 76
            echo "\t\t\t\t\t\t\t<div class=\"point_box\">
\t\t\t\t\t\t\t\t<i><img src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://assets/images/loation-pin-dak.png"), "html", null, true);
            echo "\" alt=\"location_pin\"></i>
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 81
            $context["myString"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", []);
            // line 82
            echo "\t\t\t\t\t\t\t\t\t";
            $context["parts"] = twig_split_filter($this->env, ($context["myString"] ?? null), ",");
            // line 83
            echo "\t\t\t\t\t\t\t\t\t";
            $context["lastThree"] = twig_join_filter(twig_slice($this->env, ($context["parts"] ?? null),  -3), " ,");
            // line 84
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 85
            $context["lastThreebutsliceone"] = twig_join_filter(twig_reverse_filter($this->env, twig_slice($this->env, twig_reverse_filter($this->env, twig_slice($this->env, ($context["parts"] ?? null),  -3)), 1)), ", ");
            // line 86
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 87
            echo twig_escape_filter($this->env, ($context["lastThreebutsliceone"] ?? null), "html", null, true);
            echo "
\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 92
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"job_description\">
\t\t\t\t\t<!--<h3>Description </h3>-->
\t\t\t\t\t<p>";
        // line 103
        echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, twig_trim_filter(twig_slice($this->env, twig_first($this->env, twig_split_filter($this->env, strip_tags($this->getAttribute(($context["page"] ?? null), "content", [])), "</p>")), 0, 500)), "."), 0,  -1), "."), "html", null, true);
        echo "
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"footer\">
\t\t\t\t\t<div class=\"featrs-box-outr\">
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"featrs-box post_activity\">
\t\t\t\t\t\t\t<div class=\"featr\">
\t\t\t\t\t\t\t\t<label>Applicants :</label>
\t\t\t\t\t\t\t\t<span id=\"applicants_";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "jobid", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "submitted_at", []), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"featr\">
\t\t\t\t\t\t\t\t<label>Interviewing :</label>
\t\t\t\t\t\t\t\t<span id=\"interviewed_";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "jobid", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "interview_at", []), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"featr\">
\t\t\t\t\t\t\t\t<label>Hired :</label>
\t\t\t\t\t\t\t\t<span id=\"hiring_";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "jobid", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hired_at", []), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"apply_btn\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
        echo "\" class=\"btn btn-primary\">Apply Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<!--<div class=\"visit-time\">
\t\t\t\t\t\t\t<span> status : ";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "status", []), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>-->
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!--<div class=\"apply_btn\">
\t\t\t\t\t\t<a href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
        echo "\" class=\"btn btn-primary\">Apply Now</a>
\t\t\t\t\t</div>-->
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t
\t   </div>
\t</div>
\t<!-- <div class=\"col-lg-1 d-none d-lg-block\"></div> -->
</div>
<script> 
\t//var jobIdToSearch = \"1493819\";
\t // Example usage:
\t//var jobId = 1253551;
\t<!-- var jobId = ";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "jobid", []), "html", null, true);
        echo ";
\t/*fetchJobMatches(jobId)
\t  .then(jsonResult => {
\t\tconsole.log(jsonResult.results);
\t\tconsole.log(`Data for job ID \${jobId}:`);
\t\tvar count_submitted_at = jsonResult.results.filter(item => item.submitted_at !== null).length;
\t\tvar count_interview_at = jsonResult.results.filter(item => item.interview_at !== null).length;
\t\tvar count_hired_at = jsonResult.results.filter(item => item.hired_at !== null).length;
\t\tdocument.getElementById(\"applicants_\" + jobId).innerHTML = '<strong>' + count_submitted_at + '</strong>';
\t\tdocument.getElementById(\"interviewed_\" + jobId).innerHTML = '<strong>' + count_interview_at + '</strong>';
\t\tdocument.getElementById(\"hiring_\" + jobId).innerHTML = '<strong>' + count_hired_at + '</strong>';
\t  }) */
  
\t /*var jobIdToSearch = ";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "jobid", []), "html", null, true);
        echo ";
\t fetchDataAndSearch(jobIdToSearch)
\t  .then(result => {
\t\tconsole.log(`Data for job ID \${jobIdToSearch}:`);
\t\t//console.log(result);
\t\t// Count the objects where submitted_at is not empty
\t\tvar count_submitted_at = result.filter(item => item.submitted_at !== null).length;
\t\tvar count_interview_at = result.filter(item => item.interview_at !== null).length;
\t\tvar count_hired_at = result.filter(item => item.hired_at !== null).length;
\t\t console.log(\"count_hired_at : \"+count_submitted_at);
\t\t console.log(\"count_interview_at :\"+count_interview_at);
\t\t console.log(\"count_hired_at : \"+count_hired_at);
\t\t console.log('#applicants_'+jobIdToSearch);
\t\tdocument.getElementById(\"applicants_\"+jobIdToSearch).innerHTML = '<strong>'+count_submitted_at+'</strong>';
\t\tdocument.getElementById(\"interviewed_\"+jobIdToSearch).innerHTML = '<strong>'+count_interview_at+'</strong>';
\t\tdocument.getElementById(\"hiring_\"+jobIdToSearch).innerHTML = '<strong>'+count_hired_at+'</strong>';
\t\t
\t  })
\t  .catch(error => {
\t\tconsole.error(error);
\t  }); */
</script>

                

";
    }

    public function getTemplateName()
    {
        return "partials/job-listplugin-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 165,  302 => 152,  285 => 138,  277 => 133,  267 => 126,  259 => 123,  250 => 119,  241 => 115,  226 => 103,  213 => 92,  204 => 87,  201 => 86,  199 => 85,  196 => 84,  193 => 83,  190 => 82,  188 => 81,  181 => 77,  178 => 76,  176 => 75,  164 => 65,  158 => 63,  152 => 61,  150 => 60,  145 => 59,  143 => 58,  134 => 51,  127 => 48,  121 => 44,  119 => 43,  114 => 41,  111 => 40,  109 => 39,  106 => 38,  103 => 37,  100 => 36,  97 => 35,  95 => 34,  90 => 32,  80 => 24,  74 => 22,  68 => 20,  66 => 19,  57 => 15,  52 => 13,  45 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
\t<!-- <div class=\"col-lg-1 d-none d-lg-block\"></div> -->
\t<div class=\"col-lg-12\">
\t   <div class=\"job_box\">
\t\t\t
\t\t\t <div class=\"job_box_head\">
\t\t\t\t<div class=\"job_box_head_inner\">
\t\t\t\t\t<h2><a href=\"{{ page.url }}\"> {{ page.title }} </a>
\t\t\t\t\t\t<span class=\"job_cat\">({{ page.header.hash}})</span>
\t\t\t\t\t</h2>
\t\t\t\t\t
\t\t\t\t\t<div class=\"point_box\">
\t\t\t\t\t\t<!--<i><img src=\"{{ url('theme://assets/images/salary_new.png') }}\" alt=\"salary\"></i>-->
\t\t\t\t\t\t
\t\t\t\t\t\t<!--<span>{{ page.header.compensation}} - {{ page.header.salary_max}}</span>-->
\t\t\t\t\t\t<h4 class=\"avrpay\">
\t\t\t\t\t\tAverage Pay : 
\t\t\t\t\t\t<span>    
\t\t\t\t\t\t{% if page.header.avg_sal %}
\t\t\t\t\t\t\t \$ {{ page.header.avg_sal}}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{{ page.header.compensation }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"job_box_head_inner\">
\t\t\t\t\t<div class=\"job_info\">
\t\t\t\t\t\t<h4>Openings :
\t\t\t\t\t\t\t<span class=\"job_cat\">{{ page.header.headcount }}</span>
\t\t\t\t\t\t\t<span class=\"job_age\">(
\t\t\t\t\t\t\t\t{% set pageDate = page.date %}
\t\t\t\t\t\t\t\t{% set currentDate = \"now\"|date(\"U\") %}
\t\t\t\t\t\t\t\t{% set secondsDifference = currentDate - pageDate %}
\t\t\t\t\t\t\t\t{% set daysDifference = secondsDifference / (24 * 60 * 60) %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% if daysDifference|round(0, 'floor') == 0 %}
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t Posted {{ \"Today\" }} 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% elseif daysDifference|round(0, 'floor') > 6 %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tPosted  1 week+
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tPosted  {{ daysDifference|round(0, 'floor') }} days ago
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t)</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"job_info\">
\t\t\t\t\t\t<h4>Job Type :
\t\t\t\t\t\t\t<span class=\"job_cat job_type\">
\t\t\t\t\t\t\t{% if page.header.contract_details == 'temporary' %}
\t\t\t\t\t\t\t\t{{ 'Contract' }}
\t\t\t\t\t\t\t{% elseif page.header.contract_details == 'full_time' %}
\t\t\t\t\t\t\t\t{{ 'Full Time' }}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{{ 'Unknown Contract Type' }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"job_box_body\">
\t\t\t\t
\t\t\t\t<div class=\"job_post_details d-flex justify-content-between align-items-start w-100\">
\t\t\t\t\t<div class=\"job_main_points d-flex justify-content-start align-items-start flex-wrap\">
\t\t\t\t\t\t{% if page.header.address %}
\t\t\t\t\t\t\t<div class=\"point_box\">
\t\t\t\t\t\t\t\t<i><img src=\"{{ url('theme://assets/images/loation-pin-dak.png') }}\" alt=\"location_pin\"></i>
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% set myString = page.header.address %}
\t\t\t\t\t\t\t\t\t{% set parts = myString|split(',') %}
\t\t\t\t\t\t\t\t\t{% set lastThree = parts|slice(-3)|join(' ,') %}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% set lastThreebutsliceone = parts|slice(-3)|reverse|slice(1)|reverse|join(', ') %}

\t\t\t\t\t\t\t\t\t{{ lastThreebutsliceone }}
\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %} 
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"job_description\">
\t\t\t\t\t<!--<h3>Description </h3>-->
\t\t\t\t\t<p>{{ page.content|striptags|split('</p>')|first|slice(0, 500)|trim|split('.')|slice(0, -1)|join('.') }}
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"footer\">
\t\t\t\t\t<div class=\"featrs-box-outr\">
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"featrs-box post_activity\">
\t\t\t\t\t\t\t<div class=\"featr\">
\t\t\t\t\t\t\t\t<label>Applicants :</label>
\t\t\t\t\t\t\t\t<span id=\"applicants_{{ page.header.jobid }}\">{{page.header.submitted_at}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"featr\">
\t\t\t\t\t\t\t\t<label>Interviewing :</label>
\t\t\t\t\t\t\t\t<span id=\"interviewed_{{ page.header.jobid }}\">{{page.header.interview_at}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"featr\">
\t\t\t\t\t\t\t\t<label>Hired :</label>
\t\t\t\t\t\t\t\t<span id=\"hiring_{{ page.header.jobid }}\">{{page.header.hired_at}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"apply_btn\">
\t\t\t\t\t\t\t\t<a href=\"{{ page.url }}\" class=\"btn btn-primary\">Apply Now</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<!--<div class=\"visit-time\">
\t\t\t\t\t\t\t<span> status : {{ page.header.status }}</span>
\t\t\t\t\t\t</div>-->
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!--<div class=\"apply_btn\">
\t\t\t\t\t\t<a href=\"{{ page.url }}\" class=\"btn btn-primary\">Apply Now</a>
\t\t\t\t\t</div>-->
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t
\t   </div>
\t</div>
\t<!-- <div class=\"col-lg-1 d-none d-lg-block\"></div> -->
</div>
<script> 
\t//var jobIdToSearch = \"1493819\";
\t // Example usage:
\t//var jobId = 1253551;
\t<!-- var jobId = {{ page.header.jobid }};
\t/*fetchJobMatches(jobId)
\t  .then(jsonResult => {
\t\tconsole.log(jsonResult.results);
\t\tconsole.log(`Data for job ID \${jobId}:`);
\t\tvar count_submitted_at = jsonResult.results.filter(item => item.submitted_at !== null).length;
\t\tvar count_interview_at = jsonResult.results.filter(item => item.interview_at !== null).length;
\t\tvar count_hired_at = jsonResult.results.filter(item => item.hired_at !== null).length;
\t\tdocument.getElementById(\"applicants_\" + jobId).innerHTML = '<strong>' + count_submitted_at + '</strong>';
\t\tdocument.getElementById(\"interviewed_\" + jobId).innerHTML = '<strong>' + count_interview_at + '</strong>';
\t\tdocument.getElementById(\"hiring_\" + jobId).innerHTML = '<strong>' + count_hired_at + '</strong>';
\t  }) */
  
\t /*var jobIdToSearch = {{ page.header.jobid }};
\t fetchDataAndSearch(jobIdToSearch)
\t  .then(result => {
\t\tconsole.log(`Data for job ID \${jobIdToSearch}:`);
\t\t//console.log(result);
\t\t// Count the objects where submitted_at is not empty
\t\tvar count_submitted_at = result.filter(item => item.submitted_at !== null).length;
\t\tvar count_interview_at = result.filter(item => item.interview_at !== null).length;
\t\tvar count_hired_at = result.filter(item => item.hired_at !== null).length;
\t\t console.log(\"count_hired_at : \"+count_submitted_at);
\t\t console.log(\"count_interview_at :\"+count_interview_at);
\t\t console.log(\"count_hired_at : \"+count_hired_at);
\t\t console.log('#applicants_'+jobIdToSearch);
\t\tdocument.getElementById(\"applicants_\"+jobIdToSearch).innerHTML = '<strong>'+count_submitted_at+'</strong>';
\t\tdocument.getElementById(\"interviewed_\"+jobIdToSearch).innerHTML = '<strong>'+count_interview_at+'</strong>';
\t\tdocument.getElementById(\"hiring_\"+jobIdToSearch).innerHTML = '<strong>'+count_hired_at+'</strong>';
\t\t
\t  })
\t  .catch(error => {
\t\tconsole.error(error);
\t  }); */
</script>

                

", "partials/job-listplugin-item.html.twig", "C:\\xampp8.1\\htdocs\\grav-admin\\user\\plugins\\api_blog\\templates\\partials\\job-listplugin-item.html.twig");
    }
}
