function mostrarMensaje()
{
	var email = document.getElementById('email').value;
	var nombre = document.getElementById('nombre').value;
	
	if(email.contains("@") & nombre != ""){
		var strResultado = nombre + " Su mensaje a sido enviado a: " + email;	
		alert(strResultado);
		document.getElementById('formularioContacto').reset();
	}
	else{
		var strResultado = email + " : E-mail Invalido o no a ingresado nombre";
		alert(strResultado);
	}
}