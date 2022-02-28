function emptyEmail() {
	const checkBox = document.getElementById("checkButton");
	const validEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	const email = document.forms["form"]["emailInput"].value;
	// -------------If the email field is empty.
			if (email == "") {
				document.getElementById("error").innerHTML = "Email address is required";
				return false;
			}
		//---------if the email is valid.
			else if(!email.match(validEmail)){
				document.getElementById("error").innerHTML = "Please provide a valid e-mail address";
				return false;
			}
		//---------If the email ends with .co
			else if(email.endsWith(".co")){
				document.getElementById("error").innerHTML = "We are not accepting subscriptions from Columbia emails";
				return false;
			}
		//---------If the checkbox is checked
			else if(checkBox.checked == false){
				document.getElementById("error").innerHTML = "You must accept the terms and conditions";

				return false;
			}
			else{
				document.forms["form"].submit();
				location.replace("index.php");
				return true;
			}
		}
