//functions to validate form fields and show errors if forms are filled incorrectly
function checkSubscribe(form, field) {
	if (!checkField(form, field)) {
		alert("One or more fields are empty.");
		return;
	};
	if (!validateEmail(document.forms[form][field].value)) {
		alert("Not a valid e-mail address");
		return;
	};
	alert("Thank you for subscribing!");
};

function validateEmail(email) {
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
		return false;
	};
	return true;
}

function checkField(form, field) {
	var x=document.forms[form][field].value;
	if (x==null || x=="") {
 		return false;
  	}
 	return true;
};

function checkContactForm(form) {
	if (!(checkField(form, "email") && checkField(form, "name") && checkField(form, "subject") && checkField(form, "feedback"))) {
		alert("One or more fields are empty.");
		return;
	}
	if (!validateEmail(document.forms[form]["email"].value)) {
		alert("Not a valid e-mail address");
		return;
	};
	alert("Your email has been sent.");
};