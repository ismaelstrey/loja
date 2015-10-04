$("#registrousuario").click(function(){

	var dados = $("#name").val();
	var email = $("#email").val();
	var password = $("#password").val();

	var route = "http://localhost:8000/usuario/";
	var token = $("#token").val();
	$.ajax({
		url: route,
		headers:{'X-CSRF-TOKEN':token},
		type: 'POST',
		dataType: 'json',
		data: {name: dados, email: email, password: password}

	
	});
});
	

function Delete (dado) {
	
	var route = "http://localhost:8000/usuario/"+dado+"";
	var token = $("#token").val();
	$.ajax({
		url: route,
		headers:{'X-CSRF-TOKEN':token},
		type: 'DELETE',
		dataType: 'json',
		
	
	});
	alert('Deletar '+dado+token);
}



