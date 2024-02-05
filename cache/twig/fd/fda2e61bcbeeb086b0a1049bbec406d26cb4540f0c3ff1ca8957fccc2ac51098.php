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

/* partials/sharemodel.html.twig */
class __TwigTemplate_c826bf331c685a6a08da463f18754ef5b0cc045dc48970bd13e402060ee51ab8 extends \Twig\Template
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

.modalbtn.btn-primary{
    min-width: 426px!important;
}
#loader {
\tdisplay: none;
\tborder: 4px solid #f3f3f3;
\tborder-top: 4px solid #3498db;
\tborder-radius: 50%;
\twidth: 30px;
\theight: 30px;
\tanimation: spin 1s linear infinite;
\tposition: absolute;
\ttop: 50%;
\tleft: 50%;
\tmargin-top: -15px;
\tmargin-left: -15px;
}

@keyframes spin {
\t0% { transform: rotate(0deg); }
\t100% { transform: rotate(360deg); }
}
.error {
\tcolor: red;
}
.success {
\tcolor: green;
} 
</style>

<i type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\"><button class=\"btn btn-primary\">Share </button></i>
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog modal-dialog-centered\">
\t  <div class=\"modal-content\">
\t\t<div class=\"modal-header\">
\t\t  <h5 class=\"modal-title\" id=\"exampleModalLabel\">Share this Job Via Email</h5>
\t\t  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t</div>
\t\t<div class=\"modal-body\">
\t\t\t  <form id=\"myForm\">
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"exampleInputEmail1\" class=\"form-label\">Email address</label>
\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
\t\t\t\t\t<div id=\"emailHelp\" class=\"form-text\">We'll never share your email with anyone else.</div>
\t\t\t\t\t<input type=\"hidden\" name=\"shareurl\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["full_url"] ?? null), "html", null, true);
        echo "\"/>
\t\t\t\t\t<div id=\"emailError\" class=\"error\"></div>
\t\t\t\t</div>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary modalbtn\" onclick=\"validateAndSubmit()\">Share Now</button>
\t\t\t\t <div id=\"loader\"></div>
\t\t\t\t <div id=\"response\"></div>
\t\t\t</form>
\t\t</div>
\t  </div>
\t</div>
</div>
<!-- modal end -->
<script>

function validateAndSubmit() {
\t\tdocument.getElementById('emailError').innerText = '';
\t\t// Validate email
\t\tvar emailInput = document.getElementById('exampleInputEmail1');
\t\tvar email = emailInput.value.trim();

\t\tif (!validateEmail(email)) {
\t\t\tdocument.getElementById('emailError').innerText = 'Invalid email address';
\t\t\treturn;
\t\t}

\t\t// Display loader
\t\tdocument.getElementById('loader').style.display = 'block';

\t\t// Get form data
\t\tvar shareurl = document.getElementsByName('shareurl')[0].value;

\t\t// Create a FormData object to send data
\t\tvar formData = new FormData();
\t\tformData.append('email', email);
\t\tformData.append('shareurl', shareurl);
\t\tformData.append('action', \"shareviaemail\");

\t\t// Create XMLHttpRequest object
\t\tvar xhr = new XMLHttpRequest();

\t\t// Set up the request
\t\txhr.open('POST', 'https://leadforest.net/grav/grav-admin/ajax-endpoint', true);

\t\t// Set up callback functions
\t\txhr.onload = function() {
\t\t\t// Hide loader
\t\t\tdocument.getElementById('loader').style.display = 'none';

\t\t\tif (xhr.status === 200) {
\t\t\t\tconsole.log(xhr.responseText);
\t\t\t\tconsole.log('Success:', xhr.responseText);
\t\t\t\t// Handle success response
\t\t\t\tvar response = JSON.parse(xhr.responseText);
\t\t\t\tif (response.success) {
\t\t\t\t\tdocument.getElementById('response').innerText = response.message;
\t\t\t\t\tdocument.getElementById('response').className = 'success';
\t\t\t\t} else {
\t\t\t\t\tdocument.getElementById('response').innerText = response.message;
\t\t\t\t\tdocument.getElementById('response').className = 'error';
\t\t\t\t}

\t\t\t} else {
\t\t\t\tconsole.log('Error:', xhr.status, xhr.statusText);
\t\t\t\t// Handle error response
\t\t\t}
\t\t\t
\t\t};

\t\txhr.onerror = function() {
\t\t\t// Hide loader
\t\t\tdocument.getElementById('loader').style.display = 'none';

\t\t\tconsole.log('Request failed');
\t\t\t// Handle request failure
\t\t};

\t\t// Send the request with form data
\t\txhr.send(formData);
\t}

\tfunction validateEmail(email) {
\t\t// Simple email validation regex
\t\tvar emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
\t\treturn emailRegex.test(email);
\t}
</script>";
    }

    public function getTemplateName()
    {
        return "partials/sharemodel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 47,  30 => 1,);
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

.modalbtn.btn-primary{
    min-width: 426px!important;
}
#loader {
\tdisplay: none;
\tborder: 4px solid #f3f3f3;
\tborder-top: 4px solid #3498db;
\tborder-radius: 50%;
\twidth: 30px;
\theight: 30px;
\tanimation: spin 1s linear infinite;
\tposition: absolute;
\ttop: 50%;
\tleft: 50%;
\tmargin-top: -15px;
\tmargin-left: -15px;
}

@keyframes spin {
\t0% { transform: rotate(0deg); }
\t100% { transform: rotate(360deg); }
}
.error {
\tcolor: red;
}
.success {
\tcolor: green;
} 
</style>

<i type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\"><button class=\"btn btn-primary\">Share </button></i>
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog modal-dialog-centered\">
\t  <div class=\"modal-content\">
\t\t<div class=\"modal-header\">
\t\t  <h5 class=\"modal-title\" id=\"exampleModalLabel\">Share this Job Via Email</h5>
\t\t  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t</div>
\t\t<div class=\"modal-body\">
\t\t\t  <form id=\"myForm\">
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"exampleInputEmail1\" class=\"form-label\">Email address</label>
\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
\t\t\t\t\t<div id=\"emailHelp\" class=\"form-text\">We'll never share your email with anyone else.</div>
\t\t\t\t\t<input type=\"hidden\" name=\"shareurl\" value=\"{{ full_url }}\"/>
\t\t\t\t\t<div id=\"emailError\" class=\"error\"></div>
\t\t\t\t</div>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary modalbtn\" onclick=\"validateAndSubmit()\">Share Now</button>
\t\t\t\t <div id=\"loader\"></div>
\t\t\t\t <div id=\"response\"></div>
\t\t\t</form>
\t\t</div>
\t  </div>
\t</div>
</div>
<!-- modal end -->
<script>

function validateAndSubmit() {
\t\tdocument.getElementById('emailError').innerText = '';
\t\t// Validate email
\t\tvar emailInput = document.getElementById('exampleInputEmail1');
\t\tvar email = emailInput.value.trim();

\t\tif (!validateEmail(email)) {
\t\t\tdocument.getElementById('emailError').innerText = 'Invalid email address';
\t\t\treturn;
\t\t}

\t\t// Display loader
\t\tdocument.getElementById('loader').style.display = 'block';

\t\t// Get form data
\t\tvar shareurl = document.getElementsByName('shareurl')[0].value;

\t\t// Create a FormData object to send data
\t\tvar formData = new FormData();
\t\tformData.append('email', email);
\t\tformData.append('shareurl', shareurl);
\t\tformData.append('action', \"shareviaemail\");

\t\t// Create XMLHttpRequest object
\t\tvar xhr = new XMLHttpRequest();

\t\t// Set up the request
\t\txhr.open('POST', 'https://leadforest.net/grav/grav-admin/ajax-endpoint', true);

\t\t// Set up callback functions
\t\txhr.onload = function() {
\t\t\t// Hide loader
\t\t\tdocument.getElementById('loader').style.display = 'none';

\t\t\tif (xhr.status === 200) {
\t\t\t\tconsole.log(xhr.responseText);
\t\t\t\tconsole.log('Success:', xhr.responseText);
\t\t\t\t// Handle success response
\t\t\t\tvar response = JSON.parse(xhr.responseText);
\t\t\t\tif (response.success) {
\t\t\t\t\tdocument.getElementById('response').innerText = response.message;
\t\t\t\t\tdocument.getElementById('response').className = 'success';
\t\t\t\t} else {
\t\t\t\t\tdocument.getElementById('response').innerText = response.message;
\t\t\t\t\tdocument.getElementById('response').className = 'error';
\t\t\t\t}

\t\t\t} else {
\t\t\t\tconsole.log('Error:', xhr.status, xhr.statusText);
\t\t\t\t// Handle error response
\t\t\t}
\t\t\t
\t\t};

\t\txhr.onerror = function() {
\t\t\t// Hide loader
\t\t\tdocument.getElementById('loader').style.display = 'none';

\t\t\tconsole.log('Request failed');
\t\t\t// Handle request failure
\t\t};

\t\t// Send the request with form data
\t\txhr.send(formData);
\t}

\tfunction validateEmail(email) {
\t\t// Simple email validation regex
\t\tvar emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
\t\treturn emailRegex.test(email);
\t}
</script>", "partials/sharemodel.html.twig", "C:\\xampp8.1\\htdocs\\grav-admin\\user\\plugins\\api_blog\\templates\\partials\\sharemodel.html.twig");
    }
}
