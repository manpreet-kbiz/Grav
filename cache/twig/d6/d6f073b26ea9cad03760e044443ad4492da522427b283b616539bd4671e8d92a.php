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

/* partials/footer.html.twig */
class __TwigTemplate_cadad3f3df36284d80cafe88480c9323013cc06ba272ee5ca6e7f2e4556b7a16 extends \Twig\Template
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
        echo "<footer class=\"footr pt-127\">
            <div class=\"container\">
                <div class=\"row pb-60\">
                    <div class=\"col-lg-3 col-md-6 col-sm-7 mb-4 mb-lg-0\">
\t\t\t\t\t\t 
                        <img class=\"mb-3 footr-logo\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://assets/images/footer-logo.png"), "html", null, true);
        echo "\" alt=\"footer logo\">
                        <p>We Provide job. We help
                            convert you to grow and upskill
                            yourself.</p>
\t\t\t\t\t\t\t
                        <ul class=\"socialLnks d-flex justify-content-start
                            align-items-center py-3 mt-3\">
                                <li class=\"mb-0 mx-2\"><a href=\"#\">
                                    <i class=\"fa-brands fa-facebook-f\"></i>
                                </a></li>
                                <li class=\"mb-0 mx-2\"><a href=\"#\">
                                    <i class=\"fa-brands fa-instagram\"></i>
                                </a></li>
                                <li class=\"mb-0 mx-2\"><a href=\"#\">
                                    <i class=\"fa-brands fa-linkedin-in\"></i>
                                </a></li>
                                <li class=\"mb-0 mx-2\"><a href=\"#\">
                                    <i class=\"fa-brands fa-pinterest-p\"></i>
                                </a></li>
                            </ul>
                    </div>
                    <div class=\"col-lg-2 col-md-5 offset-md-1 col-sm-4  mb-4\">
                        <h6>Quick Links</h6>
                        <ul class=\"links-fotr\">
                            <li>
                                <a href=\"#\">All Jobs</a>
                            </li>
                            <li>
                                <a href=\"#\">Contact Us</a>
                            </li>
                            <li>
                                <a href=\"#\">Hot Jobs</a>
                            </li>
                            <li>
                                <a href=\"#\">Help Center</a>
                            </li>
                            <li>
                                <a href=\"#\">Report Issue</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-lg-2 col-md-6 offset-lg-1 col-sm-7 mb-4 mb-lg-0\">
                        <h6>Employer</h6>
                        <ul class=\"links-fotr\">
                            <li>
                                <a href=\"#\">Sitemap</a>
                            </li>
                            <li>
                                <a href=\"#\">Sitemap</a>
                            </li>
                            <li>
                                <a href=\"#\">Applicants</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-lg-2 col-md-5 offset-md-1 offset-lg-0 col-sm-5 mb-4 mb-lg-0\">
                        <h6>Job</h6>
                        <ul class=\"links-fotr\">
                            <li>
                                <a href=\"#\">Top 10</a>
                            </li>
                            <li>
                                <a href=\"#\">Recommended</a>
                            </li>
                            <li>
                                <a href=\"#\">Top Rated</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"footBlw\">
                <div class=\"container\">
                    <div class=\"row justify-space-between align-items-center\">
                        <div class=\"col-lg-12\">
                            <p class=\"text-center footer-below\">Copyright © 2023 All rights reserved by Kbizsoft</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footr pt-127\">
            <div class=\"container\">
                <div class=\"row pb-60\">
                    <div class=\"col-lg-3 col-md-6 col-sm-7 mb-4 mb-lg-0\">
\t\t\t\t\t\t 
                        <img class=\"mb-3 footr-logo\" src=\"{{ url('theme://assets/images/footer-logo.png') }}\" alt=\"footer logo\">
                        <p>We Provide job. We help
                            convert you to grow and upskill
                            yourself.</p>
\t\t\t\t\t\t\t
                        <ul class=\"socialLnks d-flex justify-content-start
                            align-items-center py-3 mt-3\">
                                <li class=\"mb-0 mx-2\"><a href=\"#\">
                                    <i class=\"fa-brands fa-facebook-f\"></i>
                                </a></li>
                                <li class=\"mb-0 mx-2\"><a href=\"#\">
                                    <i class=\"fa-brands fa-instagram\"></i>
                                </a></li>
                                <li class=\"mb-0 mx-2\"><a href=\"#\">
                                    <i class=\"fa-brands fa-linkedin-in\"></i>
                                </a></li>
                                <li class=\"mb-0 mx-2\"><a href=\"#\">
                                    <i class=\"fa-brands fa-pinterest-p\"></i>
                                </a></li>
                            </ul>
                    </div>
                    <div class=\"col-lg-2 col-md-5 offset-md-1 col-sm-4  mb-4\">
                        <h6>Quick Links</h6>
                        <ul class=\"links-fotr\">
                            <li>
                                <a href=\"#\">All Jobs</a>
                            </li>
                            <li>
                                <a href=\"#\">Contact Us</a>
                            </li>
                            <li>
                                <a href=\"#\">Hot Jobs</a>
                            </li>
                            <li>
                                <a href=\"#\">Help Center</a>
                            </li>
                            <li>
                                <a href=\"#\">Report Issue</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-lg-2 col-md-6 offset-lg-1 col-sm-7 mb-4 mb-lg-0\">
                        <h6>Employer</h6>
                        <ul class=\"links-fotr\">
                            <li>
                                <a href=\"#\">Sitemap</a>
                            </li>
                            <li>
                                <a href=\"#\">Sitemap</a>
                            </li>
                            <li>
                                <a href=\"#\">Applicants</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-lg-2 col-md-5 offset-md-1 offset-lg-0 col-sm-5 mb-4 mb-lg-0\">
                        <h6>Job</h6>
                        <ul class=\"links-fotr\">
                            <li>
                                <a href=\"#\">Top 10</a>
                            </li>
                            <li>
                                <a href=\"#\">Recommended</a>
                            </li>
                            <li>
                                <a href=\"#\">Top Rated</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"footBlw\">
                <div class=\"container\">
                    <div class=\"row justify-space-between align-items-center\">
                        <div class=\"col-lg-12\">
                            <p class=\"text-center footer-below\">Copyright © 2023 All rights reserved by Kbizsoft</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
", "partials/footer.html.twig", "C:\\xampp8.1\\htdocs\\grav-admin\\user\\themes\\quarkcustom\\templates\\partials\\footer.html.twig");
    }
}
