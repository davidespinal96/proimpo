document.getElementById('registerButton').disabled = true;

function confirm_password(){
	password = document.getElementById('inputPassword').value;
	confirmPassword = document.getElementById('inputConfirmPassword').value;

	if(password != "" && confirmPassword != ""){
		if(password == confirmPassword){
		document.getElementById('registerButton').disabled = false;
		}
		else{
			alert('The passwords are different.');
			document.getElementById('registerButton').disabled = true;
		}
	}
}