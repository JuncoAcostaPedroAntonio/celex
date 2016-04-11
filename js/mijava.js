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
			
		});
