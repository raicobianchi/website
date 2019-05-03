// compilation of scripts to create, retrieve and take action based upon cookies

// function to get cookies
function getCookie(cname) {
	var name = cname + "=";
	var decodedCookie = decodeURIComponent(document.cookie);
	var ca = decodedCookie.split(';');
	
	for(var i = 0; i <ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}

// check if disclaimer is already accepted
function checkDisclaimer() {

	var reponse = getCookie('acceptedDisclaimer');

	if (reponse == 'yes') {
		return 'yes';
		// return '';
	} else {
		return '';
	}
}

// set disclaimer cookie to yes upon clicking
function setDisclaimer(value) {
	document.cookie = "acceptedDisclaimer=" + value;
}