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
		
			//boton eliminar usuario para administrador
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
					alertify.ok("Eliminado Correctamente");
					// alert("Registro Eliminado Correctamente");
				});
				
				request.fail(function (jqXHR, textStatus, thrown) {
					console.log("Error: "+textstatus );
				});
				
				request.always(function () {
					console.log("Termino la ejecucion de ajax");
				});
				
				e.preventDefault();
				
			});
			
			//boton modificar usuarios para administrador 
			$('.modificar').on('click', function(e){
				
				var id = $(this).attr('id');
				var name = $(this).attr('name');
				var request;
				
				if(request){
					request.abort();
				}
				
				request = $.ajax({
					url: CI_ROOT+"c_administrador/datos_mod",
					type: "POST",
					data: "id="+id+"&name="+name,
					datatype: 'jsondata',
					success: function(dato){
						var obj = jQuery.parseJSON(dato);
						var data = obj[0];
						document.querySelector('.b_editar_user').setAttribute('id',id);
						document.querySelector('#e_usuario').setAttribute('value',data.nombre);
						document.querySelector('#e_email').setAttribute('value',data.correo);
						document.querySelector('#e_telefono').setAttribute('value',data.telefono);
						document.querySelector('#e_contrasena').setAttribute('value',data.contrasena);
						document.getElementById("e_departamento").selectedIndex = data.departamento;
						$('#modal_editar').modal('show');
					}
				});
				
				e.preventDefault();
				
			});
			
			//boton para agregar nuevo usuario del administrador
			$('#b_new_user').click(function(e){
				var correct_tel=0;
				var correct_con1=0;
				var correct_con2=0;
				var correct_pass = 0;
				var correct_depto = 0;
				
				var usuario = $('#usuario').val();
				var email = $('#email').val();
				var telefono = $('#telefono').val();
				var contrasena1 = $('#contrasena1').val();
				var contrasena2 = $('#contrasena2').val();
				var departamento = $('#departamento').val();
				
				console.log(email);
				if (usuario == "" || email == "" || telefono == "" || contrasena1 == "" || contrasena2 == "" ) {
					alertify.error("Favor de llenar todos los Campos.");
				}else {
					
					if(telefono.length!=10){
						alertify.error("Ingrese un numero de telefono valido a 10 digitos");
					}else{
						correct_tel =1;
						if (correct_con1 == correct_con2) {
				        	if(contrasena1 != contrasena2){
								alertify.error("Las contraseñas deben coincidir");
							}else {
								correct_pass = 1;
								if(departamento == 0){
									alertify.error("Seleccione el Departamento");
								}else{
									correct_depto = 1;
								}
							}
						}
						
					}
				}
				
				console.log(correct_depto + " - " + correct_pass );
				
				if(correct_depto == 1 && correct_pass == 1 && correct_tel ==1){
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
						alertify.alert("Usuario Registrado Exitosamente");
						location.reload();
					});
					
					request.fail(function (jqXHR, textStatus, thrown) {
						alertify.error("Seleccione el Departamento");
					});
					
					request.always(function () {
						console.log("Termino la ejecucion de registrar usuario");
					});
					
					e.preventDefault();
				}
			});
			
			//funcion para cargar las paginas de los botones administrador
			$('.cargar').click(function(){
				var id = $(this).attr('id');
				switch(id){
					case '1.1':
					location.assign(CI_ROOT+'c_administrador/inicio');
					break;
					case '2.1':
					location.assign(CI_ROOT+'c_controlescolar/inicio');
					break;
					case '2.2':
					location.assign(CI_ROOT+'c_controlescolar/inscripcion');
					break;
					case '3.1':
					location.assign(CI_ROOT+'c_administracion/inicio');
					break;
					case '3.2':
					location.assign(CI_ROOT+'c_administrador/proceso');
					break;
					case '4.1':
					location.assign(CI_ROOT+'c_administrador/proceso');		
					break;
					default:
					alert('Error al cargar la vista, favor de hacer clic de nuevo');
				}
			});
			
			//metodo para eliminar los alumnos de control escolar
			$('.eliminar_ce').on('click', function(e){
				var id = $(this).attr('id');
				var correo = $(this).attr('name');
				var request;
				
				if(request){
					request.abort();
				}
				request = $.ajax({
					url: CI_ROOT+"c_controlescolar/eliminar_alumno",
					type: "POST",
					data: "id="+id+"&correo="+correo
				});
				
				request.done(function (response, textStatus,jqXHR) {
					console.log("response: " + response);
					$('#tr'+response).html("");
					alertify.ok("Eliminado Correctamente");
					// alert("Registro Eliminado Correctamente");
				});
				
				request.fail(function (jqXHR, textStatus, thrown) {
					console.log("Error: "+textstatus );
				});
				
				request.always(function () {
					console.log("Termino la ejecucion de ajax");
				});
				
				e.preventDefault();
				
			});
			
			//boton para modificar la informacion del usuario en administrador
			$('.b_editar_user').click(function(e){
				var correct_tel=0;
				var correct_depto=0;
				
				var id = $(this).attr('id');
				var usuario = $('#e_usuario').val();
				var email = $('#e_email').val();
				var telefono = $('#e_telefono').val();
				var contrasena = $('#e_contrasena').val();
				var departamento = $('#e_departamento').val();
				
				console.log(email);
				if (usuario == "" || email == "" || telefono == "" || contrasena1 == "") {
					alertify.error("Favor de llenar todos los Campos.");
				}else {
					
					if(telefono.length!=10){
						alertify.error("Ingrese un numero de telefono valido a 10 digitos");
					}else{
						correct_tel =1;
						if(departamento == 0){
							alertify.error("Seleccione el Departamento");
						}else{
							correct_depto = 1;
						}
					}
				}
				console.log(correct_depto + " - " + correct_tel );
				if(correct_depto == 1 && correct_tel ==1){
					var request;
				
					if(request){
						request.abort();
					}
					
					request = $.ajax({
						url: CI_ROOT+"c_administrador/modificar_usuario",
						type: "POST",
						data: "id="+id+"&usuario="+usuario+"&email="+email+"&telefono="+telefono+"&contrasena="+contrasena+"&departamento="+departamento
					});
					
					request.done(function (response, textStatus,jqXHR) {
						console.log("response: " + response);
						$('#modal_editar').modal('hide');
						alertify.alert("Usuario Modificado Exitosamente");
						location.reload();
					});
					
					request.fail(function (jqXHR, textStatus, thrown) {
						alertify.error("Error Al Modificar Datos, Intente De Nuevamente.");
						location.reload();
					});
					
					request.always(function () {
						console.log("Termino la ejecucion de registrar usuario");
					});
					
					e.preventDefault();
				}
			});
			
		});

