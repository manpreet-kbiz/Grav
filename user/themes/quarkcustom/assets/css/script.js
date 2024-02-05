function uploadFile() {
	//site Key: 6LctPTEpAAAAABDI3YcfMAlHPJEIqVoL_hAFoas1
	
	//Secret Key : 6LctPTEpAAAAAFYMhz6PrqYRwB7c2KBbmYMUrtsw
    // Get form elements
    var firstName = document.getElementById('first_name').value.trim();
    var lastName = document.getElementById('last_name').value.trim();
    var email = document.getElementById('email').value.trim();
    var phone = document.getElementById('phone').value.trim();
    //var expectedSalary = document.getElementById('expected_salary').value.trim();
    var fileInput = document.getElementById('file');
    var agreementCheckbox = document.getElementById('webdev');
    var notifyCheckbox = document.getElementById('notify');
	
	var recaptchaResponse = grecaptcha.getResponse(); // Get reCAPTCHA response

    // Validate and display errors
    var errorMessages = [];
    if (!firstName) {
        errorMessages.push("First name is required.");
    }
    if (!lastName) {
        errorMessages.push("Last name is required.");
    }
    if (!email) {
        errorMessages.push("Email is required.");
    } else if (!isValidEmail(email)) {
        errorMessages.push("Please enter a valid email address.");
    }
    if (!phone) {
        errorMessages.push("Phone number is required.");
    } else if (!isValidPhone(phone)) {
        errorMessages.push("Please enter a valid phone number.");
    }
    /* if (!expectedSalary) {
        errorMessages.push("Expected salary is required.");
    } */
    if (!fileInput.files.length) {
        errorMessages.push("Please select a file.");
    }
    if (!agreementCheckbox.checked) {
        errorMessages.push("You must agree to the terms and conditions.");
    }
	
    // Validate reCAPTCHA
    if (!recaptchaResponse) {
        errorMessages.push("Please complete the reCAPTCHA.");
    }
	
    // Display errors or submit form
    if (errorMessages.length > 0) {
        //alert("Please correct the following errors:\n" + errorMessages.join("\n"));
		document.getElementById('error').innerHTML = errorMessages.join("<br>");
    } else {
        // Create FormData object and append form data
        var formData = new FormData(document.getElementById('uploadForm'));

        // AJAX request
        var xhr = new XMLHttpRequest();
        //xhr.open('POST', 'https://leadforest.net/grav/grav-admin/api.php', true);
        xhr.open('POST', 'https://leadforest.net/grav/grav-admin/ajax-endpoint', true);
        xhr.onload = function () {
            if (xhr.status == 200) {
				//alert("done");
				console.log(xhr.responseText);
				document.getElementById('error').innerHTML = "";
                document.getElementById('result').innerHTML = "Result: " + xhr.responseText; 
            } else {
				console.log(xhr.statusText);
                /* document.getElementById('error').innerHTML = "Error: " + xhr.statusText;
				document.getElementById('result').innerHTML = " "; */
            } 
        }; 
        xhr.send(formData);
    }
}

function isValidEmail(email) {
    // Implement email validation logic as needed
    // Example: Simple email format validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function isValidPhone(phone) {
    // Implement phone number validation logic as needed
    // Example: Simple phone number format validation
    var phoneRegex = /^\d{10}$/;
    return phoneRegex.test(phone);
}

function myFunction() {
    var x = document.getElementById("soclIcns");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
 }
