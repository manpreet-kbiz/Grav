document.addEventListener('DOMContentLoaded', function () {
	setTimeout(function(){
		var targetElement = document.querySelector('[name="data[header][custom][optimizedchatgptdescription]"]');
		if (targetElement) {
			var button = document.createElement('button');
			button.innerHTML = 'Generate description';
			button.style.backgroundColor = "green";
			button.style.color = "white";
			// Add a class or any other attributes if needed
			button.classList.add('custom-button');
			// Insert the button after the target element
			targetElement.parentNode.insertBefore(button, targetElement.nextSibling);
			button.addEventListener('click', function (event) {
				event.preventDefault();

				var jobTitle = document.querySelector('[name="data[header][title]"]').value.trim();
				var jobDescription = document.querySelector('[name="data[content]"]').value.trim();

				if (jobTitle === '' && jobDescription === '') {
					alert('Please fill in at least one of the fields (Job Title or Job Description).');
					return; // Prevent AJAX call if both fields are empty
				}

				var xhr = new XMLHttpRequest();
				
				xhr.open('POST', '/grav/grav-admin/ajax-calls?ajax=chatgptdesc', true);
				xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
						
				/* var data = 'jobTitle=' + encodeURIComponent(jobTitle) + '&jobDescription=' + encodeURIComponent(jobDescription) + '&action=optimizeddesc'; */
				
				var data = 'jobTitle='+jobTitle+'&jobDescription='+jobDescription+'&action=optimizeddesc';

				xhr.onload = function () {
					if (xhr.status >= 200 && xhr.status < 300) {
						var response = JSON.parse(xhr.responseText);
						var responseTextArea = document.querySelector('[name="data[header][custom][optimizedchatgptdescription]"]');
						responseTextArea.value = JSON.stringify(response.desc, null, 2);
					} else {
						console.error(xhr.statusText);
					}
				};
				xhr.send(data);
			});
		 }
		 /*Close of  optimized Description*/
		 
		 /*Start of Social Description*/
	 
		var targetElement2 = document.querySelector('[name="data[header][custom][socialdescription]"]');
		if (targetElement2) {
			// Create a button element
			var button = document.createElement('button');
			button.innerHTML = 'Generate Social Desc';
			button.style.backgroundColor = "green";
			button.style.color = "white";
			// Add a class or any other attributes if needed
			button.classList.add('custom-button');

			// Insert the button after the target element
			targetElement2.parentNode.insertBefore(button, targetElement2.nextSibling);
			
			// Add a click event listener to the button if you want to handle clicks
			button.addEventListener('click', function (event) {
				event.preventDefault();
				
				var jobTitle = document.querySelector('[name="data[header][title]"]').value.trim();
				var jobDescription = document.querySelector('[name="data[content]"]').value.trim();

				if (jobTitle === '' && jobDescription === '') {
					alert('Please fill in at least one of the fields (Job Title or Job Description).');
					return; // Prevent AJAX call if both fields are empty
				}
				
				var xhr = new XMLHttpRequest();
				xhr.open('POST', '/grav/grav-admin/ajax-calls?ajax=chatgptdesc', true);
				xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
						
				//var basedesc = document.querySelector('[name="data[content]"]').value;
				//var data = 'param1='+basedesc+'&param2=value2&action=socialdesc';
				
				var data = 'jobTitle='+jobTitle+'&jobDescription='+jobDescription+'&action=socialdesc';

				xhr.onload = function () {
					if (xhr.status >= 200 && xhr.status < 300) {
						var response = JSON.parse(xhr.responseText);
						//console.log(response);
						var responseTextArea =  document.querySelector('[name="data[header][custom][socialdescription]"]');
						
						responseTextArea.value = JSON.stringify(response.desc, null, 2);
					} else {
						console.error(xhr.statusText);
					}
				};
				xhr.send(data);
			 });
		}
		
		/*Close of  Social Description*/
		 
		/*Start of Adding icons*/
		var targetElement3 = document.querySelector('[name="data[button_label]"]');
		if (targetElement3) {
			  // Create an svg element
			  const fbIcon = document.createElementNS("http://www.w3.org/2000/svg", "svg");

			  // Set attributes for the svg element
			  fbIcon.setAttribute("xmlns", "http://www.w3.org/2000/svg");
			  fbIcon.setAttribute("width", "29");
			  fbIcon.setAttribute("height", "29");
			  fbIcon.setAttribute("viewBox", "0 0 29 29");

			  
			  // Create a path element and set its 'd' attribute
			  const path1 = document.createElementNS("http://www.w3.org/2000/svg", "path");
			 // path1.setAttribute("d", "M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z");
			  
			  path1.setAttribute("d", "M14.5 0c8.022 0 14.5 6.478 14.5 14.5s-6.478 14.5-14.5 14.5S0 22.522 0 14.5 6.478 0 14.5 0zm-3.44 22.677c6.536 0 10.116-5.418 10.116-10.116 0-.154 0-.307-.01-.461a7.266 7.266 0 001.783-1.847 7.152 7.152 0 01-2.066.567 3.574 3.574 0 001.575-1.975 7.168 7.168 0 01-2.28.873 3.58 3.58 0 00-6.104 3.266 10.155 10.155 0 01-7.387-3.746 3.58 3.58 0 001.107 4.778 3.546 3.546 0 01-1.62-.448v.045a3.578 3.578 0 002.868 3.51 3.572 3.572 0 01-1.613.061 3.578 3.578 0 003.34 2.488 7.175 7.175 0 01-4.452 1.53 7.278 7.278 0 01-.86-.051 10.142 10.142 0 005.52 1.618");
			  
			  
			  
			   // Create an svg element
			  const lkdIcon = document.createElementNS("http://www.w3.org/2000/svg", "svg");

			  // Set attributes for the svg element
			  lkdIcon.setAttribute("xmlns", "http://www.w3.org/2000/svg");
			  lkdIcon.setAttribute("width", "28");
			  lkdIcon.setAttribute("height", "28");
			  lkdIcon.setAttribute("viewBox", "0 0 28 28"); 
			  
			  // Create a path element and set its 'd' attribute
			  const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
			  path.setAttribute("d", "M25.424 15.887v8.447h-4.896v-7.882c0-1.98-.71-3.33-2.48-3.33-1.354 0-2.158.91-2.514 1.802-.13.315-.162.753-.162 1.194v8.216h-4.9s.067-13.35 0-14.73h4.9v2.087c-.01.017-.023.033-.033.05h.032v-.05c.65-1.002 1.812-2.435 4.414-2.435 3.222 0 5.638 2.106 5.638 6.632zM5.348 2.5c-1.676 0-2.772 1.093-2.772 2.54 0 1.42 1.066 2.538 2.717 2.546h.032c1.71 0 2.77-1.132 2.77-2.546C8.056 3.593 7.02 2.5 5.344 2.5h.005zm-2.48 21.834h4.896V9.604H2.867v14.73z");

			  // Append the path element to the svg element
			  fbIcon.appendChild(path1);
			  //lkdIcon.appendChild(path); 

			// Insert the button after the target element
			//targetElement3.parentNode.insertBefore(lkdIcon, targetElement3.nextSibling);
			targetElement3.parentNode.insertBefore(fbIcon, targetElement3.nextSibling);
			
			
			// Add a click event listener to the button if you want to handle clicks
			fbIcon.addEventListener('click', function (event) {
				event.preventDefault();
				//alert("send call to post on api")
				var xhr = new XMLHttpRequest();
				xhr.open('POST', '/grav/grav-admin/ajax-calls?ajax=twitterpost', true);
				xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
						
				//var twitterdec = document.querySelector('[name="data[header][custom][socialdescription]"]').value;
				var jobTitle = document.querySelector('[name="data[header][title]"]').value.trim();
				var jobDescription = document.querySelector('[name="data[header][custom][socialdescription]"]').value.trim();

				if (jobTitle === '' && jobDescription === '') {
					alert('Please fill in at least one of the fields (Job Title or Job Description).');
					return; // Prevent AJAX call if both fields are empty
				}
				
				//var data = 'param1='+basedesc+'&param2=value2';
				var data = 'jobTitle='+jobTitle+'&jobDescription='+jobDescription+'&action=twitterpost';

				xhr.onload = function () {
					if (xhr.status >= 200 && xhr.status < 300) {
						var response = JSON.parse(xhr.responseText);
						console.log(response);
						//alert("Success");
						console.log(JSON.stringify(response.message, null, 2));
						
						alert(response.message);
						
						/* var responseTextArea =  document.querySelector('[name="data[header][custom][optimizedchatgptdescription]"]');
						responseTextArea.value = JSON.stringify(response.desc, null, 2); */
					} else {
						console.error(xhr.statusText);
					}
				};
				xhr.send(data);
			});
		}
		
	 }, 1500);
});
