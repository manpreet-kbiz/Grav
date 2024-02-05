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

/* job.html.twig */
class __TwigTemplate_8c3eac04333460e5d6c29cd3eb60d978b48dfa6d87328becfe86eb1867399078 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'hero' => [$this, 'block_hero'],
            'content' => [$this, 'block_content'],
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
        $context["full_url"] = (($context["apisocialbtn_domain"] ?? null) . $this->getAttribute(($context["page"] ?? null), "url", []));
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "job.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        echo " 
    ";
        // line 7
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/bootstrap.min.css"], "method");
        // line 8
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css", 1 => 99], "method");
        // line 9
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/jobs_listing.css"], "method");
        // line 10
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/job_details.css"], "method");
        // line 11
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/job_apply_form.css"], "method");
        // line 12
        echo "\t
\t
";
    }

    // line 16
    public function block_hero($context, array $blocks = [])
    {
        // line 17
        echo "\t";
        if (($context["query"] ?? null)) {
            // line 18
            echo "\t
\t\t<section class=\"bannerHero\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"bnrcont d-flex flex-column justify-content-center align-items-center\">
                            <h1>Application</h1>
                            <p>
\t\t\t\t\t\t\tThank you for your interest in our Job Title position.  We are very excited to speak with you about this position.  We have a number of ways you can get in touch with us, from a phone call to the Representative who manages this opening listed on the right, a traditional resume submission option as shown below, and finally, the fastest way to get your qualifications reviewed, a video introduction recorded by you and sent to our hiring manager.  We look forward to hearing from you!</p>
                            <!--<div class=\"aply_refer_btns\">
                                <a href=\"#fill_form\"><button class=\"btn btn-primary\"><i class=\"fa-solid fa-angles-down me-3\"></i>Go to Form<i class=\"fa-solid fa-angles-down ms-3\"></i></button></a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>\t   
\t\t\t\t\t
\t";
        } else {
            // line 37
            echo "
\t\t<section class=\"bannerHero\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"bnrcont d-flex flex-column justify-content-center align-items-center\">
\t\t\t\t\t\t\t<h1>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</h1>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t    ";
            // line 46
            if (($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", []))) {
                // line 47
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                // line 48
                echo Grav\Common\Utils::safeTruncate($this->getAttribute(($context["page"] ?? null), "summary", []), 120);
                echo "
\t\t\t\t\t\t\t";
            } else {
                // line 50
                echo "\t\t\t\t\t\t\t\t";
                echo Grav\Common\Utils::safeTruncate($this->getAttribute(($context["page"] ?? null), "content", []), 120);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 51
            echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"aply_refer_btns\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "?apply=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hash", []), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">Apply Here</button></a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!--<div class=\"or_refer\">
\t\t\t\t\t\t\t\t\t<span class=\"or_line\"></span>
\t\t\t\t\t\t\t\t\t<label class=\"\">Or</label>
\t\t\t\t\t\t\t\t\t<span class=\"or_line\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"refer_link\">Refer Someone</a>-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t";
        }
        // line 71
        echo "

";
    }

    // line 75
    public function block_content($context, array $blocks = [])
    {
        // line 76
        echo "
\t";
        // line 77
        if (($context["query"] ?? null)) {
            // line 78
            echo "\t <!-- Job Apply Form section -->
        <section class=\"job_apply_form pt-60\">
            <div class=\"container\">
                <div class=\"bg-light\" id=\"fill_form\">
                    <div class=\"row\">
                      <div class=\"col-lg-8 col-md-12 p-4 p-md-5 bg-white rounded-3\">
                        <div class=\"d-flex mb-3 flex-column\">
                          <h2 class=\"text-capitalize text-center text-lg-start\">Fill the Form Below</h2>
                          
                        </div>
                        <form class=\"row mb-3\" id=\"uploadForm\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t  <input type=\"hidden\" name=\"jobid\" id=\"jobid\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "jobid", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t  <input type=\"hidden\" name=\"action\" id=\"action\" value=\"jobsubmission\">
\t\t\t\t\t\t  <input type=\"hidden\" name=\"archtype\" id=\"archtype\" value=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "custom_fields", []), "archetype", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t  
                          <div class=\"col-md-6 p-3\">
                            <input required placeholder=\"first name\" name=\"first_name\" type=\"text\" id=\"first_name\" />
                          </div>
                          <div class=\"col-md-6 p-3\">
                            <input required placeholder=\"last name\" name=\"last_name\" type=\"text\" id=\"last_name\" />
                          </div>
                          <div class=\"col-md-6 p-3\">
                            <input required placeholder=\"E-mail\" name=\"email\" type=\"email\"  id=\"email\" />
                          </div>
                          <div class=\"col-md-6 p-3\">
                            <input required placeholder=\"phone\" type=\"tel\" name=\"phone\" id=\"phone\" />
                          </div>
                          <!--<div class=\"col-md-6 p-3\">
                            <input required placeholder=\"expected salary\" type=\"text\" name=\"\" id=\"expected_salary\" />
                          </div>
\t\t\t\t\t\t  
                          <div class=\"col-md-6 p-3\">
                            <select class=\"form-select\" aria-label=\"Default select example\">
                                <option selected>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "currency", []), "html", null, true);
            echo "</option>
                                <option value=\"1\">Currency One</option>
                                <option value=\"2\">Currency Two</option>
                    
                              </select>
                          </div>-->
\t\t\t\t\t\t  
\t\t\t\t\t\t  <div class=\"col-md-12 p-3\">
\t\t\t\t\t\t\t<input type=\"file\" name=\"file\" id=\"file\">
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  
\t\t\t\t\t\t\t
\t\t\t\t\t\t  <div class=\"col-md-12 p-3\">
\t\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"6LctPTEpAAAAABDI3YcfMAlHPJEIqVoL_hAFoas1\"></div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"col-md-12 p-3\">
                            <div class=\"d-flex flex-wrap\">
\t\t\t\t\t\t\t
                                <div class=\"d-flex justify-content-start align-items-center w-100 check_agree\">
                                  <input type=\"checkbox\" name=\"notify\" class=\"form-check-input m-0 me-3\" id=\"notify\" data-archtype=\"\" />
\t\t\t\t\t\t\t\t  <label for=\"notify\"> receive notifications</label>
\t\t\t\t\t\t\t\t 
                                </div>
\t\t\t\t\t\t\t\t
                            </div>
                          </div>
                          <div class=\"col-md-12 p-3\">
                            <div class=\"d-flex flex-wrap\">
\t\t\t\t\t\t\t
                                <div class=\"d-flex justify-content-start align-items-center w-100 check_agree\">
                                 
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t  <input type=\"checkbox\" name=\"webdev\" class=\"form-check-input m-0 me-3\" id=\"webdev\" />
                                  <label for=\"webdev\"> I agree to the <a href=\"https://www.careers-page.com/gentis/terms-and-conditions\">terms and conditions</a>  & <a href=\"https://www.careers-page.com/gentis/privacy-policy\">privacy policy</a></label>
                                </div>
\t\t\t\t\t\t\t\t
                            </div>
                          </div>
\t\t\t\t\t\t  <!-- Add the reCAPTCHA widget -->
\t\t\t\t\t\t
\t\t\t\t\t\t
                          <div class=\"text-start mt-4\">
                            <!--<input class=\"btn px-4 py-3 btn-outline-dark submt_btn\" type=\"submit\" value=\"Apply\" />-->
\t\t\t\t\t\t\t<button class=\"btn px-4 py-3 btn-outline-dark submt_btn\" type=\"button\" onclick=\"uploadFile()\">Apply </button>
                          </div>
                        </form>
\t\t\t\t\t\t<div id=\"error\" style=\"color:red;\"></div>
\t\t\t\t\t\t<div id=\"result\"></div>
                      </div>
\t\t\t\t\t  
\t\t\t\t\t  
                      <div class=\"col-lg-4 col-md-12 text-white aside px-4 py-5\">
                        <div class=\"mb-5\">
                          <h1 class=\"h3\">Contact Information</h1>
                          <p class=\"opacity-50\">
                            <small>
                              Fill out the from and we will get back to you whitin 24 hours
                            </small>
                          </p>
                        </div>
                        <div class=\"d-flex flex-column px-0\">
                          <ul class=\"m-0 p-0\">
                            <li class=\"d-flex justify-content-start align-items-center mb-4\">
                              <span class=\"opacity-50 d-flex align-items-center me-3 fs-2\">
                                <i class=\"fa-solid fa-phone text-white\"></i>
                              </span>
                              <span>(859) 669-2731</span>
                            </li>
                            <li class=\"d-flex justify-content-start align-items-center mb-4\">
                              <span class=\"opacity-50 d-flex align-items-center me-3 fs-2\">
                                <i class=\"fa-solid fa-location-dot text-white\"></i>
                              </span>
                              <span>50 E Rivercenter Blvd, STE 1025 <br />
                                Covington, KY 41011
                              </span>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </section>
\t";
        } else {
            // line 195
            echo "        <!-- Job Details section -->
        <section class=\"job_details_box pt-60\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-1 d-none d-lg-block\"></div>
                    <div class=\"col-lg-10\">
                       <div class=\"job_box\">
                            <div class=\"job_box_head\">
                                <div class=\"job_box_head_top\">
                                    <h2>";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "<span class=\"\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hash", []), "html", null, true);
            echo ")</span> </h2>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!--<i><img src=\"";
            // line 206
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://assets/images/salary_new.png"), "html", null, true);
            echo "\" alt=\"salary\"></i>-->
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!--<span>";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "compensation", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "salary_max", []), "html", null, true);
            echo "</span>-->
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"optn\">
\t\t\t\t\t\t\t\t\t\t<span>    
\t\t\t\t\t\t\t\t\t\tAverage Pay
\t\t\t\t\t\t\t\t\t\t";
            // line 216
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "avg_sal", [])) {
                // line 217
                echo "\t\t\t\t\t\t\t\t\t\t\t \$ ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "avg_sal", []), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 219
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "compensation", []), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 221
            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"job_box_head_inner\">
\t\t\t\t\t\t\t\t\t<div class=\"job_info\">
\t\t\t\t\t\t\t\t\t\t<h4>Openings :
\t\t\t\t\t\t\t\t\t\t\t<span class=\"job_cat\">";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "headcount", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"job_age\">(
\t\t\t\t\t\t\t\t\t\t\t";
            // line 231
            $context["pageDate"] = $this->getAttribute(($context["page"] ?? null), "date", []);
            // line 232
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context["currentDate"] = twig_date_format_filter($this->env, "now", "U");
            // line 233
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context["secondsDifference"] = (($context["currentDate"] ?? null) - ($context["pageDate"] ?? null));
            // line 234
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context["daysDifference"] = (($context["secondsDifference"] ?? null) / ((24 * 60) * 60));
            // line 235
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 236
            if ((twig_round(($context["daysDifference"] ?? null), 0, "floor") == 0)) {
                // line 237
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t Posted ";
                // line 238
                echo "Today";
                echo " 
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((twig_round(            // line 240
($context["daysDifference"] ?? null), 0, "floor") > 6)) {
                // line 241
                echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\tPosted  1 week+
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 245
                echo "\t\t\t\t\t\t\t\t\t\t\t\tPosted  ";
                echo twig_escape_filter($this->env, twig_round(($context["daysDifference"] ?? null), 0, "floor"), "html", null, true);
                echo " days ago
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 248
            echo "\t\t\t\t\t\t\t\t\t\t)</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"job_info\">
\t\t\t\t\t\t\t\t\t\t<h4>Job Type :
\t\t\t\t\t\t\t\t\t\t\t<span class=\"job_cat job_type\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 255
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "contract_details", []) == "temporary")) {
                // line 256
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                echo "Contract";
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute(            // line 257
($context["page"] ?? null), "header", []), "contract_details", []) == "full_time")) {
                // line 258
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                echo "Full Time";
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 260
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                echo "Unknown Contract Type";
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 262
            echo "\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
                               
                            </div>
                            <div class=\"job_box_body\">
\t\t\t\t\t\t\t\t <div class=\"vst_wbst_lnk\">
\t\t\t\t\t\t\t\t\t\t<div class=\"featrs-box post_activity\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"featr\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Applicants :</label>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"applicants_";
            // line 273
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "jobid", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "submitted_at", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"featr\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Interviewed :</label>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"interviewed_";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "jobid", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "interview_at", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"featr\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Hirings :</label>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"hiring_";
            // line 281
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "jobid", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hired_at", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"job_published_date\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 284
            $context["pageDate"] = $this->getAttribute(($context["page"] ?? null), "date", []);
            // line 285
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context["currentDate"] = twig_date_format_filter($this->env, "now", "U");
            // line 286
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context["secondsDifference"] = (($context["currentDate"] ?? null) - ($context["pageDate"] ?? null));
            // line 287
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context["daysDifference"] = (($context["secondsDifference"] ?? null) / ((24 * 60) * 60));
            // line 288
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"featr\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<i onclick=\"myFunction()\" ><img src=\"";
            // line 290
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://assets/images/jd_share.png"), "html", null, true);
            echo "\" alt=\"Job Details\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"soclIcns\" id=\"soclIcns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
            // line 292
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "api_blog", []), "buttons", []), "facebook", []), "enabled", [])) {
                // line 293
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("partials/_facebook.html.twig", "job.html.twig", 293)->display(twig_array_merge($context, ["page_url" => ($context["full_url"] ?? null)]));
                // line 294
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 295
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "api_blog", []), "buttons", []), "linkedin", []), "enabled", [])) {
                // line 296
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("partials/_linkedin.html.twig", "job.html.twig", 296)->display(twig_array_merge($context, ["page_url" => ($context["full_url"] ?? null)]));
                // line 297
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 298
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "api_blog", []), "buttons", []), "email", []), "enabled", [])) {
                // line 299
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("partials/_email.html.twig", "job.html.twig", 299)->display(twig_array_merge($context, ["page_url" => ($context["full_url"] ?? null)]));
                // line 300
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 301
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "api_blog", []), "buttons", []), "twitter", []), "enabled", [])) {
                // line 302
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("partials/_twitter.html.twig", "job.html.twig", 302)->display(twig_array_merge($context, ["page_url" => ($context["full_url"] ?? null)]));
                // line 303
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 304
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t
                        
                                 </div>

                                <div class=\"lctn_apply\"> 
\t\t\t\t\t\t\t\t\t";
            // line 319
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", [])) {
                // line 320
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"location\">
\t\t\t\t\t\t\t\t\t\t\t<i><img src=\"";
                // line 321
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://assets/images/loation-pin-dak.png"), "html", null, true);
                echo "\" alt=\"location_pin\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 323
                $context["myString"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", []);
                // line 324
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["parts"] = twig_split_filter($this->env, ($context["myString"] ?? null), ",");
                // line 325
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["lastThree"] = twig_join_filter(twig_slice($this->env, ($context["parts"] ?? null),  -3), " ,");
                // line 326
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 327
                $context["lastThreebutsliceone"] = twig_join_filter(twig_reverse_filter($this->env, twig_slice($this->env, twig_reverse_filter($this->env, twig_slice($this->env, ($context["parts"] ?? null),  -3)), 1)), ", ");
                // line 328
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 329
                echo twig_escape_filter($this->env, ($context["lastThreebutsliceone"] ?? null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 333
            echo " 
                                    <!--<div class=\"apply_btn\">
                                        <a href=\"";
            // line 335
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "?apply=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hash", []), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">Apply Now</button></a>
                                    </div>-->
                                </div>
                                <div class=\"footer\">
                                    <!--<div class=\"featrs-box-outr\">
                                        <div class=\"featrs-box\">
\t\t\t\t\t\t\t\t\t\t    <div class=\"featr\">
\t\t\t\t\t\t\t\t\t\t\t\t<i><img src=\"";
            // line 342
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://assets/images/easy-apply.png"), "html", null, true);
            echo "\" alt=\"Easy Apply\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Easy Apply</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"featr\">
\t\t\t\t\t\t\t\t\t\t\t\t<i><img src=\"";
            // line 346
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://assets/images/urgently-hiring.png"), "html", null, true);
            echo "\" alt=\"Urgently Hiring\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Urgently Hiring</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"featr\">
\t\t\t\t\t\t\t\t\t\t\t\t<i><img src=\"";
            // line 350
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://assets/images/fast-response.png"), "html", null, true);
            echo "\" alt=\"Fast Response\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Fast Response</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            
                                        </div>
                                    </div>-->
                                </div>
                                <div class=\"job_description\">
                                    <h3>About the job</h3>
\t\t\t\t\t\t\t\t\t ";
            // line 359
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
                                </div>
                                
                               
                                <div class=\"aply_refer_btns\">
                                    <a href=\"";
            // line 364
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "?apply=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hash", []), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">Apply </button></a>
                                    <div class=\"or_refer\">
                                        <span class=\"or_line\"></span>
                                        <label class=\"\">Or</label>
                                        <span class=\"or_line\"></span>
                                    </div>
                                   
\t\t\t\t\t\t\t\t\t";
            // line 371
            $this->loadTemplate("partials/sharemodel.html.twig", "job.html.twig", 371)->display(twig_array_merge($context, ["job" => ($context["page"] ?? null), "full_url" => ($context["full_url"] ?? null)]));
            // line 372
            echo "\t\t\t\t\t\t\t\t\t  
                                </div>
                            </div>
                        </div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
                    </div>
\t\t\t\t\t 
                    <div class=\"col-lg-1 d-none d-lg-block\"></div>
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t
                </div>
            </div>
        </section>
\t";
        }
    }

    // line 393
    public function block_mobile($context, array $blocks = [])
    {
        // line 394
        echo "   
";
    }

    public function getTemplateName()
    {
        return "job.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  664 => 394,  661 => 393,  639 => 372,  637 => 371,  625 => 364,  617 => 359,  605 => 350,  598 => 346,  591 => 342,  579 => 335,  575 => 333,  567 => 329,  564 => 328,  562 => 327,  559 => 326,  556 => 325,  553 => 324,  551 => 323,  546 => 321,  543 => 320,  541 => 319,  524 => 304,  521 => 303,  518 => 302,  515 => 301,  512 => 300,  509 => 299,  506 => 298,  503 => 297,  500 => 296,  497 => 295,  494 => 294,  491 => 293,  489 => 292,  484 => 290,  480 => 288,  477 => 287,  474 => 286,  471 => 285,  469 => 284,  461 => 281,  452 => 277,  443 => 273,  430 => 262,  424 => 260,  418 => 258,  416 => 257,  411 => 256,  409 => 255,  400 => 248,  393 => 245,  387 => 241,  385 => 240,  380 => 238,  377 => 237,  375 => 236,  372 => 235,  369 => 234,  366 => 233,  363 => 232,  361 => 231,  356 => 229,  346 => 221,  340 => 219,  334 => 217,  332 => 216,  319 => 208,  314 => 206,  307 => 204,  296 => 195,  209 => 111,  186 => 91,  181 => 89,  168 => 78,  166 => 77,  163 => 76,  160 => 75,  154 => 71,  133 => 55,  127 => 51,  121 => 50,  116 => 48,  113 => 47,  111 => 46,  105 => 43,  97 => 37,  76 => 18,  73 => 17,  70 => 16,  64 => 12,  61 => 11,  58 => 10,  55 => 9,  52 => 8,  50 => 7,  45 => 6,  40 => 1,  38 => 3,  32 => 1,);
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

{% set full_url = apisocialbtn_domain ~ page.url %}

    
{% block stylesheets %} 
    {% do assets.addCss('theme://assets/css/bootstrap.min.css') %}
\t{% do assets.addCss('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', 99) %}
\t{% do assets.addCss('theme://assets/css/jobs_listing.css') %}
\t{% do assets.addCss('theme://assets/css/job_details.css') %}
\t{% do assets.addCss('theme://assets/css/job_apply_form.css') %}
\t
\t
{% endblock %}

{% block hero %}
\t{% if query %}
\t
\t\t<section class=\"bannerHero\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"bnrcont d-flex flex-column justify-content-center align-items-center\">
                            <h1>Application</h1>
                            <p>
\t\t\t\t\t\t\tThank you for your interest in our Job Title position.  We are very excited to speak with you about this position.  We have a number of ways you can get in touch with us, from a phone call to the Representative who manages this opening listed on the right, a traditional resume submission option as shown below, and finally, the fastest way to get your qualifications reviewed, a video introduction recorded by you and sent to our hiring manager.  We look forward to hearing from you!</p>
                            <!--<div class=\"aply_refer_btns\">
                                <a href=\"#fill_form\"><button class=\"btn btn-primary\"><i class=\"fa-solid fa-angles-down me-3\"></i>Go to Form<i class=\"fa-solid fa-angles-down ms-3\"></i></button></a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>\t   
\t\t\t\t\t
\t{% else %}

\t\t<section class=\"bannerHero\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"bnrcont d-flex flex-column justify-content-center align-items-center\">
\t\t\t\t\t\t\t<h1>{{page.title}}</h1>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t    {% if page.summary != page.content %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{{ page.summary|safe_truncate(120)|raw  }}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{{ page.content|safe_truncate(120)|raw }}
\t\t\t\t\t\t\t{% endif %} 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"aply_refer_btns\">
\t\t\t\t\t\t\t\t<a href=\"{{page.url}}?apply={{page.header.hash}}\"><button class=\"btn btn-primary\">Apply Here</button></a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!--<div class=\"or_refer\">
\t\t\t\t\t\t\t\t\t<span class=\"or_line\"></span>
\t\t\t\t\t\t\t\t\t<label class=\"\">Or</label>
\t\t\t\t\t\t\t\t\t<span class=\"or_line\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"refer_link\">Refer Someone</a>-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t{% endif %}


{% endblock %}

{% block content %}

\t{% if query %}
\t <!-- Job Apply Form section -->
        <section class=\"job_apply_form pt-60\">
            <div class=\"container\">
                <div class=\"bg-light\" id=\"fill_form\">
                    <div class=\"row\">
                      <div class=\"col-lg-8 col-md-12 p-4 p-md-5 bg-white rounded-3\">
                        <div class=\"d-flex mb-3 flex-column\">
                          <h2 class=\"text-capitalize text-center text-lg-start\">Fill the Form Below</h2>
                          
                        </div>
                        <form class=\"row mb-3\" id=\"uploadForm\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t  <input type=\"hidden\" name=\"jobid\" id=\"jobid\" value=\"{{page.header.jobid}}\">
\t\t\t\t\t\t  <input type=\"hidden\" name=\"action\" id=\"action\" value=\"jobsubmission\">
\t\t\t\t\t\t  <input type=\"hidden\" name=\"archtype\" id=\"archtype\" value=\"{{page.header.custom_fields.archetype}}\">
\t\t\t\t\t\t  
                          <div class=\"col-md-6 p-3\">
                            <input required placeholder=\"first name\" name=\"first_name\" type=\"text\" id=\"first_name\" />
                          </div>
                          <div class=\"col-md-6 p-3\">
                            <input required placeholder=\"last name\" name=\"last_name\" type=\"text\" id=\"last_name\" />
                          </div>
                          <div class=\"col-md-6 p-3\">
                            <input required placeholder=\"E-mail\" name=\"email\" type=\"email\"  id=\"email\" />
                          </div>
                          <div class=\"col-md-6 p-3\">
                            <input required placeholder=\"phone\" type=\"tel\" name=\"phone\" id=\"phone\" />
                          </div>
                          <!--<div class=\"col-md-6 p-3\">
                            <input required placeholder=\"expected salary\" type=\"text\" name=\"\" id=\"expected_salary\" />
                          </div>
\t\t\t\t\t\t  
                          <div class=\"col-md-6 p-3\">
                            <select class=\"form-select\" aria-label=\"Default select example\">
                                <option selected>{{page.header.currency}}</option>
                                <option value=\"1\">Currency One</option>
                                <option value=\"2\">Currency Two</option>
                    
                              </select>
                          </div>-->
\t\t\t\t\t\t  
\t\t\t\t\t\t  <div class=\"col-md-12 p-3\">
\t\t\t\t\t\t\t<input type=\"file\" name=\"file\" id=\"file\">
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  
\t\t\t\t\t\t\t
\t\t\t\t\t\t  <div class=\"col-md-12 p-3\">
\t\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"6LctPTEpAAAAABDI3YcfMAlHPJEIqVoL_hAFoas1\"></div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"col-md-12 p-3\">
                            <div class=\"d-flex flex-wrap\">
\t\t\t\t\t\t\t
                                <div class=\"d-flex justify-content-start align-items-center w-100 check_agree\">
                                  <input type=\"checkbox\" name=\"notify\" class=\"form-check-input m-0 me-3\" id=\"notify\" data-archtype=\"\" />
\t\t\t\t\t\t\t\t  <label for=\"notify\"> receive notifications</label>
\t\t\t\t\t\t\t\t 
                                </div>
\t\t\t\t\t\t\t\t
                            </div>
                          </div>
                          <div class=\"col-md-12 p-3\">
                            <div class=\"d-flex flex-wrap\">
\t\t\t\t\t\t\t
                                <div class=\"d-flex justify-content-start align-items-center w-100 check_agree\">
                                 
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t  <input type=\"checkbox\" name=\"webdev\" class=\"form-check-input m-0 me-3\" id=\"webdev\" />
                                  <label for=\"webdev\"> I agree to the <a href=\"https://www.careers-page.com/gentis/terms-and-conditions\">terms and conditions</a>  & <a href=\"https://www.careers-page.com/gentis/privacy-policy\">privacy policy</a></label>
                                </div>
\t\t\t\t\t\t\t\t
                            </div>
                          </div>
\t\t\t\t\t\t  <!-- Add the reCAPTCHA widget -->
\t\t\t\t\t\t
\t\t\t\t\t\t
                          <div class=\"text-start mt-4\">
                            <!--<input class=\"btn px-4 py-3 btn-outline-dark submt_btn\" type=\"submit\" value=\"Apply\" />-->
\t\t\t\t\t\t\t<button class=\"btn px-4 py-3 btn-outline-dark submt_btn\" type=\"button\" onclick=\"uploadFile()\">Apply </button>
                          </div>
                        </form>
\t\t\t\t\t\t<div id=\"error\" style=\"color:red;\"></div>
\t\t\t\t\t\t<div id=\"result\"></div>
                      </div>
\t\t\t\t\t  
\t\t\t\t\t  
                      <div class=\"col-lg-4 col-md-12 text-white aside px-4 py-5\">
                        <div class=\"mb-5\">
                          <h1 class=\"h3\">Contact Information</h1>
                          <p class=\"opacity-50\">
                            <small>
                              Fill out the from and we will get back to you whitin 24 hours
                            </small>
                          </p>
                        </div>
                        <div class=\"d-flex flex-column px-0\">
                          <ul class=\"m-0 p-0\">
                            <li class=\"d-flex justify-content-start align-items-center mb-4\">
                              <span class=\"opacity-50 d-flex align-items-center me-3 fs-2\">
                                <i class=\"fa-solid fa-phone text-white\"></i>
                              </span>
                              <span>(859) 669-2731</span>
                            </li>
                            <li class=\"d-flex justify-content-start align-items-center mb-4\">
                              <span class=\"opacity-50 d-flex align-items-center me-3 fs-2\">
                                <i class=\"fa-solid fa-location-dot text-white\"></i>
                              </span>
                              <span>50 E Rivercenter Blvd, STE 1025 <br />
                                Covington, KY 41011
                              </span>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </section>
\t{% else %}
        <!-- Job Details section -->
        <section class=\"job_details_box pt-60\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-1 d-none d-lg-block\"></div>
                    <div class=\"col-lg-10\">
                       <div class=\"job_box\">
                            <div class=\"job_box_head\">
                                <div class=\"job_box_head_top\">
                                    <h2>{{page.title}}<span class=\"\">({{ page.header.hash}})</span> </h2>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!--<i><img src=\"{{ url('theme://assets/images/salary_new.png') }}\" alt=\"salary\"></i>-->
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!--<span>{{ page.header.compensation}} - {{ page.header.salary_max}}</span>-->
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"optn\">
\t\t\t\t\t\t\t\t\t\t<span>    
\t\t\t\t\t\t\t\t\t\tAverage Pay
\t\t\t\t\t\t\t\t\t\t{% if page.header.avg_sal %}
\t\t\t\t\t\t\t\t\t\t\t \$ {{ page.header.avg_sal}}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t{{ page.header.compensation }}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"job_box_head_inner\">
\t\t\t\t\t\t\t\t\t<div class=\"job_info\">
\t\t\t\t\t\t\t\t\t\t<h4>Openings :
\t\t\t\t\t\t\t\t\t\t\t<span class=\"job_cat\">{{ page.header.headcount }}</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"job_age\">(
\t\t\t\t\t\t\t\t\t\t\t{% set pageDate = page.date %}
\t\t\t\t\t\t\t\t\t\t\t{% set currentDate = \"now\"|date(\"U\") %}
\t\t\t\t\t\t\t\t\t\t\t{% set secondsDifference = currentDate - pageDate %}
\t\t\t\t\t\t\t\t\t\t\t{% set daysDifference = secondsDifference / (24 * 60 * 60) %}
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% if daysDifference|round(0, 'floor') == 0 %}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t Posted {{ \"Today\" }} 
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% elseif daysDifference|round(0, 'floor') > 6 %}
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\tPosted  1 week+
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\tPosted  {{ daysDifference|round(0, 'floor') }} days ago
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t)</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"job_info\">
\t\t\t\t\t\t\t\t\t\t<h4>Job Type :
\t\t\t\t\t\t\t\t\t\t\t<span class=\"job_cat job_type\">
\t\t\t\t\t\t\t\t\t\t\t{% if page.header.contract_details == 'temporary' %}
\t\t\t\t\t\t\t\t\t\t\t\t{{ 'Contract' }}
\t\t\t\t\t\t\t\t\t\t\t{% elseif page.header.contract_details == 'full_time' %}
\t\t\t\t\t\t\t\t\t\t\t\t{{ 'Full Time' }}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t{{ 'Unknown Contract Type' }}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
                               
                            </div>
                            <div class=\"job_box_body\">
\t\t\t\t\t\t\t\t <div class=\"vst_wbst_lnk\">
\t\t\t\t\t\t\t\t\t\t<div class=\"featrs-box post_activity\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"featr\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Applicants :</label>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"applicants_{{ page.header.jobid }}\">{{page.header.submitted_at}}</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"featr\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Interviewed :</label>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"interviewed_{{ page.header.jobid }}\">{{page.header.interview_at}}</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"featr\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>Hirings :</label>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"hiring_{{ page.header.jobid }}\">{{page.header.hired_at}}</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"job_published_date\">
\t\t\t\t\t\t\t\t\t\t\t{% set pageDate = page.date %}
\t\t\t\t\t\t\t\t\t\t\t{% set currentDate = \"now\"|date(\"U\") %}
\t\t\t\t\t\t\t\t\t\t\t{% set secondsDifference = currentDate - pageDate %}
\t\t\t\t\t\t\t\t\t\t\t{% set daysDifference = secondsDifference / (24 * 60 * 60) %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"featr\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<i onclick=\"myFunction()\" ><img src=\"{{ url('theme://assets/images/jd_share.png') }}\" alt=\"Job Details\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"soclIcns\" id=\"soclIcns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t {% if config.plugins.api_blog.buttons.facebook.enabled %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% include 'partials/_facebook.html.twig' with {'page_url': full_url} %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if config.plugins.api_blog.buttons.linkedin.enabled %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% include 'partials/_linkedin.html.twig' with {'page_url':full_url}%}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if config.plugins.api_blog.buttons.email.enabled %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% include 'partials/_email.html.twig' with {'page_url':full_url} %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if config.plugins.api_blog.buttons.twitter.enabled %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% include 'partials/_twitter.html.twig' with {'page_url':full_url}%}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t
                        
                                 </div>

                                <div class=\"lctn_apply\"> 
\t\t\t\t\t\t\t\t\t{% if page.header.address %}
\t\t\t\t\t\t\t\t\t\t<div class=\"location\">
\t\t\t\t\t\t\t\t\t\t\t<i><img src=\"{{ url('theme://assets/images/loation-pin-dak.png') }}\" alt=\"location_pin\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t{% set myString = page.header.address %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set parts = myString|split(',') %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set lastThree = parts|slice(-3)|join(' ,') %}
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{% set lastThreebutsliceone = parts|slice(-3)|reverse|slice(1)|reverse|join(', ') %}

\t\t\t\t\t\t\t\t\t\t\t\t{{ lastThreebutsliceone }}
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %} 
                                    <!--<div class=\"apply_btn\">
                                        <a href=\"{{page.url}}?apply={{page.header.hash}}\"><button class=\"btn btn-primary\">Apply Now</button></a>
                                    </div>-->
                                </div>
                                <div class=\"footer\">
                                    <!--<div class=\"featrs-box-outr\">
                                        <div class=\"featrs-box\">
\t\t\t\t\t\t\t\t\t\t    <div class=\"featr\">
\t\t\t\t\t\t\t\t\t\t\t\t<i><img src=\"{{ url('theme://assets/images/easy-apply.png') }}\" alt=\"Easy Apply\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Easy Apply</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"featr\">
\t\t\t\t\t\t\t\t\t\t\t\t<i><img src=\"{{ url('theme://assets/images/urgently-hiring.png') }}\" alt=\"Urgently Hiring\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Urgently Hiring</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"featr\">
\t\t\t\t\t\t\t\t\t\t\t\t<i><img src=\"{{ url('theme://assets/images/fast-response.png') }}\" alt=\"Fast Response\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Fast Response</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            
                                        </div>
                                    </div>-->
                                </div>
                                <div class=\"job_description\">
                                    <h3>About the job</h3>
\t\t\t\t\t\t\t\t\t {{ page.content|raw }}
                                </div>
                                
                               
                                <div class=\"aply_refer_btns\">
                                    <a href=\"{{page.url}}?apply={{page.header.hash}}\"><button class=\"btn btn-primary\">Apply </button></a>
                                    <div class=\"or_refer\">
                                        <span class=\"or_line\"></span>
                                        <label class=\"\">Or</label>
                                        <span class=\"or_line\"></span>
                                    </div>
                                   
\t\t\t\t\t\t\t\t\t{% include 'partials/sharemodel.html.twig' with {job: page, full_url:full_url} %}
\t\t\t\t\t\t\t\t\t  
                                </div>
                            </div>
                        </div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
                    </div>
\t\t\t\t\t 
                    <div class=\"col-lg-1 d-none d-lg-block\"></div>
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t
                </div>
            </div>
        </section>
\t{% endif %}
{% endblock %}


{% block mobile %}
   
{% endblock %}


", "job.html.twig", "C:\\xampp8.1\\htdocs\\grav-admin\\user\\themes\\quarkcustom\\templates\\job.html.twig");
    }
}
