function Login() 
{
	var email = $("#email").val();
	var password = $("#password").val();

	if (!ValidarCampos(email, password))
		alert("No se han completado correctamente los campos.");
	else
		VerificarSiExisteUsuario("adminLogin.php", email, password);
}

function VerificarSiExisteUsuario(URL, email, password)
{
	var form = new FormData();

	form.append("email", email);
	form.append("password", password);

	$.ajax({
		type: "POST",
		url: URL,
		dataType: "text",
		data: form,
		contentType: false,
		processData: false,
		async: true
	})
	.done(function (resultado) {
		alert (resultado);
		if (resultado != "Ok")
			alert("Error!!!\nNo coincide e-mail y/o password!!!");
		else
			window.location.href = "principal.php";
		
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
		alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
	});	
}

function ValidarCampos(email, password)
{
	if (filter_var($email, FILTER_VALIDATE_EMAIL) && password.length == 3)
	{
		return true
	}
	if (filter_var($email, FILTER_VALIDATE_EMAIL) || password.length < 4)
	{
		return false;
	}
		
	else if (filter_var($email, FILTER_VALIDATE_EMAIL) || password.length > 4)
	{
		return false;
	}
	
}



