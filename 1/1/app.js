function registrar(){
	console.log('diste un click');
	//var Name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;

	firebase.auth().createUserWithEmailAndPassword(email, password).
	catch(function(error) {
	  // Handle Errors here.
	  var errorCode = error.code;
	  var errorMessage = error.message;
	  console.log(errorCode);
	  console.log(ErrorMessage);
	  // ...
	});
		  

}