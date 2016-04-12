	var CI_ROOT = "https://celex-pedrojunco.c9users.io/";
	/*$(document).ready(function() {

		$('#b_login').click(function(){
			var correo = $('#i_correo').val();
			var contrasena = $('#i_contrasena').val();
			console.log("correo");
			$.post(CI_ROOT+"general/validar_login",{
				correo : correo,
				contrasena : contrasena
			},function(data){
				console.log(data);
			});

		});

	});
*/
	$(document).ready(function(){
		
			$('.eliminar').on('click', function(e){
				var id = $(this).attr('id');
				var name = $(this).attr('name');
				var request;
				
				if(request){
					request.abort();
				}
				
				request = $.ajax({
					url: CI_ROOT+"c_administrador/eliminar_user",
					type: "POST",
					data: "id="+id+"&name="+name
				});
				
				request.done(function (response, textStatus,jqXHR) {
					console.log("response: " + response);
					$('#tr'+response).html("");
					alert("Registro Eliminado Correctamente");
				});
				
				request.fail(function (jqXHR, textStatus, thrown) {
					console.log("Error: "+textstatus );
				});
				
				request.always(function () {
					console.log("Termino la ejecucion de ajax");
				});
				
				e.preventDefault();
				
			});
			/* Metodo que se ejecuta para modificar
			$('.modificar').on('click', function(e){
				var id = $(this).attr('id');
				var name = $(this).attr('name');
				var request;
				
				if(request){
					request.abort();
				}
				
				request = $.ajax({
					url: CI_ROOT+"c_administrador/eliminar_user",
					type: "POST",
					data: "id="+id+"&name="+name
				});
				
				request.done(function (response, textStatus,jqXHR) {
					console.log("response: " + response);
					$('#tr'+response).html("");
					alert("Registro Eliminado Correctamente");
				});
				
				request.fail(function (jqXHR, textStatus, thrown) {
					console.log("Error: "+textstatus );
				});
				
				request.always(function () {
					console.log("Termino la ejecucion de ajax");
				});
				
				e.preventDefault();
				
			});
			*/
			
			$('#b_new_user').click(function(e){
				var correct_pass = 0;
				var correct_depto = 0;
				
				var usuario = $('#usuario').val();
				var email = $('#email').val();
				var telefono = $('#telefono').val();
				var contrasena1 = $('#contrasena1').val();
				var contrasena2 = $('#contrasena2').val();
				var departamento = $('#departamento').val();
				
				console.log(email);
				
				if(contrasena1 != contrasena2){
					alert("Las contraseñas deben coincidir");
				}else{
					correct_pass = 1;
				}
				
				if(departamento == 0){
					alert("Debe escoger un departamento");
				}else{
					correct_depto = 1;
				}
				console.log(correct_depto + " - " + correct_pass );
				
				if(correct_depto == 1 && correct_pass == 1){
					var request;
				
					if(request){
						request.abort();
					}
					
					request = $.ajax({
						url: CI_ROOT+"c_administrador/nuevo_usuario",
						type: "POST",
						data: "usuario="+usuario+"&email="+email+"&telefono="+telefono+"&contrasena="+contrasena1+"&departamento="+departamento
					});
					
					request.done(function (response, textStatus,jqXHR) {
						console.log("response: " + response);
						$('#modal_usuario').modal('hide');
						alert("Usuario Registrado Exitosamente");
						location.reload();
					});
					
					request.fail(function (jqXHR, textStatus, thrown) {
						alert("Error al Registrar usuario");
					});
					
					request.always(function () {
						console.log("Termino la ejecucion de registrar usuario");
					});
					
					e.preventDefault();
				}
			});
			
		});
