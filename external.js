function vailidform() {
var name = document.getElementById('name').value;
var error = document.getElementById('name1');
var mobilenumber = document.getElementById('mobilenumber').value;
var email = document.getElementById('email').value;
var password = document.getElementById('password').value;
var validEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
if (name=="") {

	// error.textContent="plz enter your name";
	// name.focus();

	document.getElementById('name1').innerHTML=("Please enter your name !");
	return false;
	}
else if (mobilenumber=="") {

	document.getElementById('mob').innerHTML=("Please enter your mobile number");
	return false;
}
else if (email=="") {

	document.getElementById('email1').innerHTML=("Please enter your email address");
	return false;
}
else if (validEmail.test(email)==false) {

	document.getElementById('email2').innerHTML=("Please enter valid email");
	return false;
}
else if (password=="") {
	document.getElementById('pass').innerHTML=("Please enter your password");
	return false;
}
return true;	
}
