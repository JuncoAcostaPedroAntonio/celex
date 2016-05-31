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
/*
	global $
	global sweetAlert
	global jQuery
	global textstatus
	global location
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
			sweetAlert({
				title: "¿Estas seguro de eliminar este registro?",   
				text: "No podras recuperar estos datos!",   
				type: "warning",   
				showCancelButton: true,   
				confirmButtonColor: "#DD6B55",   
				confirmButtonText: "Si, deseo borrarlos",   
				closeOnConfirm: false }, 
				function(){ 
				request = $.ajax({
					url: CI_ROOT+"c_administrador/eliminar_user",
					type: "POST",
					data: "id="+id+"&name="+name
				});
				request.done(function (response, textStatus,jqXHR) {
					console.log("response: " + response);
					$('#tr'+response).html("");
					sweetAlert("Eliminado", "Usuario eliminado correctamente.", "success");
					
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
		
		//boton modificar usuarios para administrador 
		$('.modificar').on('click', function(e){
			
			var id = $(this).attr('id');
			var name = $(this).attr('name');
			
			$.ajax({
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
			var correct_tel = 0;
			var num_char = 0;
			var correct_pass = 0;
			var correct_depto = 0;
			var user_val = 0;
			
			var usuario = $('#usuario').val();
			var email = $('#email').val();
			var telefono = $('#telefono').val();
			var contrasena1 = $('#contrasena1').val();
			var contrasena2 = $('#contrasena2').val();
			var departamento = $('#departamento').val();
			
			//validar campos vacios
			if (usuario == "" || email == "" || telefono == "" || contrasena1 == "" || contrasena2 == "" ) {
				//mensaje en caso de que existe un campo vacio
			sweetAlert("Error", "Por favor llene todos los campos.", "error");
			//Si no	
			}else{
				//validar Correo Electronico
				if (validarEmail(email)) {
					//validar Telefono
					if (telefono.length!=10) {
						sweetAlert("Error", "El número de teléfono no es válido, ingrese un número de teléfono válido a 10 dígitos.", "error");
					}else{
						correct_tel =1;
						if(contrasena1.length < 8){
							sweetAlert("Error", "La contraseña debe tener mínimo 8 caracteres.", "error");
						}else{
							num_char = 1;
							if(contrasena1 != contrasena2){
								sweetAlert("Error", "Las contraseñas deben coincidir.", "error");
							}else {
								correct_pass = 1;
								if(departamento == 0){
									sweetAlert("Error", "Por favor seleccione el departamento.", "error");
								}else{
									correct_depto = 1;
									if (usuario.length <= 10){
										sweetAlert("Error", "Debe ingresar el nombre completo del nuevo usuario.", "error");
									}else{
										user_val = 1;
									}
								}
							}	
						}
					}
				}else{
					sweetAlert("Error", "La dirección de correo no es válida.", "error");	
				}
			}
			if(correct_depto == 1 && correct_pass == 1 && correct_tel ==1 && num_char == 1 && user_val == 1){
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
					sweetAlert({
						title: "Usuario Agregado",   
						text: "Usuario agregado exitosamente.",   
						type: "success",  
						confirmButtonColor: "#2E64FE",   
						confirmButtonText: "Aceptar",   
						closeOnConfirm: false }, 
						function(){
							location.reload();
						});
					
				});
				request.fail(function (jqXHR, textStatus, thrown) {
					sweetAlert("Error", "Lo siento ocurrio un error, intente de nuevo.", "error");
				});
				e.preventDefault();
			}
		});
		
		$('#b_login').click(function(){
			var correo = $('#correo').val();
			var contrasena = $('#contrasena').val();
			var request;
			
			if(request){
				request.abort();
			}
			
			if(correo == "" || contrasena == ""){
				sweetAlert("Error", "Favor de llenar todos los campos", "error");
			}else{
				if(!validarEmail(correo)){
					sweetAlert("Error", "Correo invalido", "error");
				}else{
					request = $.ajax({
							url: CI_ROOT+"c_login/validar_login",
							type: "POST",
							data: "correo="+correo+"&contrasena="+contrasena
						});
					request.done(function (response, textStatus,jqXHR) {
						if(response == true){
							location.assign(CI_ROOT+'c_login/inicio');
						}else{
							sweetAlert("Error", "Usuario o contraseña incorrectos", "error");
							document.querySelector('#contrasena').setAttribute('value','');
						}
					});
					request.fail(function (jqXHR, textStatus, thrown) {
						sweetAlert("Error", "A ocurrido un error al inciar sesión, intente de nuevo", "error");
					});
				}	
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
				location.assign(CI_ROOT+'c_administracion/lista_pagos');
				break;
				case '4.1':
				location.assign(CI_ROOT+'c_administrador/proceso');		
				break;
				default:
				alert('Error al cargar la vista, favor de hacer clic de nuevo');
			}
		});
		
		//boton para modificar la informacion del usuario en administrador
		$('.b_editar_user').click(function(e){
			var correct_tel=0;
			var correct_depto=0;
			var user_val = 0;
			var num_char = 0;
			
			var id = $(this).attr('id');
			var usuario = $('#e_usuario').val();
			var email = $('#e_email').val();
			var telefono = $('#e_telefono').val();
			var contrasena = $('#e_contrasena').val();
			var departamento = $('#e_departamento').val();
			
			if (usuario == "" || email == "" || telefono == "" || contrasena == "") {
				sweetAlert("Error", "Por favor llene todos los campos.", "error");
			}else {
				
				if(telefono.length!=10){
					sweetAlert("Error", "El número de teléfono no es válido, ingrese un número de teléfono válido a 10 dígitos.", "error");
				}else{
					correct_tel =1;
					if(departamento == 0){
						sweetAlert("Error", "Por favor seleccione el departamento.", "error");
					}else{
						correct_depto = 1;
						if(usuario.length <= 10){
							sweetAlert("Error", "Debe ingresar el nombre completo del nuevo usuario.", "error");
						}else{
							user_val = 1;
							if(contrasena.length <= 8){
								sweetAlert("Error", "La contraseña debe tener mínimo 8 caracteres.", "error");
							}else{
								num_char = 1;
							}
						}
					}
				}
			}
			if(correct_depto == 1 && correct_tel ==1 && user_val == 1 && user_val == 1 && num_char == 1){
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
					sweetAlert({
						title: "Modificado",   
						text: "Usuario Modificado Exitosamente..",   
						type: "success",  
						confirmButtonColor: "#2E64FE",   
						confirmButtonText: "Aceptar",   
						closeOnConfirm: false }, 
						function(){
							location.reload();
					});
				});
				request.fail(function (jqXHR, textStatus, thrown) {
					sweetAlert("Error", "Error al modificar los datos, intentelo nuevamente.", "error");
					location.reload();
				});
				e.preventDefault();
			}
		});
		
		//traer informacion del alumno para mostrarla modal registro de pagos
		$('.pagar_a').click(function(e){
			
			var id = $(this).attr('id');
			var name = $(this).attr('name');
			var request;
			if(request){
				request.abort();
			}
			
			request = $.ajax({
				url: CI_ROOT+"c_administracion/info_pago",
				type: "POST",
				data: "id="+id+"&name="+name,
				datatype: 'jsondata',
				success: function(dato){
					var obj = jQuery.parseJSON(dato);
					var data = obj[0];
					document.querySelector('.b_guardar_pago').setAttribute('id',id);
					document.querySelector('#p_alumno').setAttribute('value',data.nombre);
					document.querySelector('#p_email').setAttribute('value',data.correo);
					document.querySelector('#p_grupo').setAttribute('value',data.grupo);
					document.querySelector('#p_modulo').setAttribute('value',data.modulo);
					document.querySelector('#p_nivel').setAttribute('value',data.nivel);
					document.querySelector('#p_cuenta').setAttribute('value',"$"+data.cuenta);
					$('#modal_pago').modal('show');
				}
			});
			
			e.preventDefault();
			
		});
		
		//funcion para registrar los pagos en la base de datos
		$('.b_guardar_pago').click(function(){
			var b1=0;
			var b2=0;
			var b3=0;
			
			var id = $(this).attr('id');
			var concepto = $('#p_descripcion').val();
			var cuenta = $('#p_cuenta').val();
			var inversion = $('#p_inversion').val();
			
			if(concepto == "" || inversion == ""){
				sweetAlert("Error", "Por favor llene todos los campos.", "error");
			}else{
				b1 = 1;
				if(inversion <= 0){
					sweetAlert("Error", "La cantidad debe ser mayor a  $0.", "error");
				}else{
					b2 = 1;
					if(parseInt(inversion) > parseInt(cuenta)){
						sweetAlert("Error","La inversión no puede superar la cantidad del adeudo","error");
					}else{
						b3 = 1;
					}			
				}
			}
			
			if(b1== 1 && b2 == 1 && b3 == 1){
				var request;
						if(request){
							request.abort();
						}
						request = $.ajax({
							url: CI_ROOT+"c_administracion/registro_pago",
							type: "POST",
							data: "id="+id+"&concepto="+concepto+"&inversion="+inversion
						});
						request.done(function (response, textStatus,jqXHR) {
							console.log("response: " + response);
							$('#modal_pago').modal('hide');
							sweetAlert({
								title: "Pago registrado",   
								text: "El pago se registró correctamente.",   
								type: "success",  
								confirmButtonColor: "#2E64FE",   
								confirmButtonText: "Aceptar",   
								closeOnConfirm: false }, 
								function(){
									location.reload();
							});
						});
						request.fail(function (jqXHR, textStatus, thrown) {
							sweetAlert("Error", "Error al registrar el pago,intentelo nuevamente.", "error");
								location.reload();
						});
			}
		
		});
		
		//metodo para limpiar informacion del grupo en inscribir alumno
		$('.limpiar').click(function(){
			document.querySelector('#g_modulo').setAttribute('value','');
			document.querySelector('#g_nivel').setAttribute('value','');
			document.querySelector('#g_horario').setAttribute('value','');
		});
		
		//metodo para rigistrar alumno en la base de datos.
		$('.insc_alumno').click(function(){
			var nombre = $('#i_nombre').val();
			var fecha_nac = $('#i_fecha').val();
			var sexo = $('#i_sexo').val();
			var rfc = $('#i_rfc').val();
			var telefono = $('#i_telefono').val();
			var correo = $('#i_correo').val();
			var ultest = $('#i_ultest').val();
			var instegre = $('#i_instegre').val();
			var anioegreso = $('#i_anioegreso').val();
			var entero = $('#i_entero').val();
			var inversion = $('#i_inversion').val();
			var grupo = $('#s_grupo').val();
			
			//validar,telefono,correo,inversion
			var v_telefono = 0;
			var v_correo = 0;
			var v_inversion = 0;
			

			
			if(nombre == "" || fecha_nac == "" || sexo == 0 || rfc == "" || telefono == "" || correo == "" || ultest == "" || instegre == "" || anioegreso == "" || entero == "" || inversion == "" || grupo == 0){
				sweetAlert("Error", "Debe llenar Todos los campos correctamente.", "error");
			}else{
				if(telefono.length!=10){
					sweetAlert("Error", "El número de teléfono no es válido, ingrese un número de teléfono válido a 10 dígitos.", "error");
				}else{
					v_telefono=1;
					if (!validarEmail(correo)) {
						sweetAlert("Error", "La dirección de correo no es válida.", "error");
					}else{
						v_correo = 1;
						if (inversion <= 0) {
							sweetAlert("Error", "La inversión ingresada no es válido.", "error");
						}else{
								v_inversion = 1;
								
						}
					}
				}
			}

				if (v_telefono == 1 && v_correo==1 && v_inversion==1) {
					
					switch(sexo){
						case 1:
							sexo = "F";
							break;
						case 2:
							sexo = "M";
							break;
					}
					var request;
				
					if(request){
						request.abort();
					}
					
					request = $.ajax({
						url: CI_ROOT+"c_controlescolar/inscribir_alumno",
						type: "POST",
						data:"nombre="+nombre+"&fecha_nac="+fecha_nac+"&sexo="+sexo+"&rfc="+rfc+"&telefono="+telefono+"&correo="+correo+"&ultest="+ultest+"&instegre="+instegre+"&anioegreso="+anioegreso+"&entero="+entero+"&inversion="+inversion+"&grupo="+grupo
					});
					request.done(function (response, textStatus,jqXHR) {
						console.log("response: " + response);
						sweetAlert({
							title: "Registrado",
							text: "Alumno registrado exitosamente.",   
							type: "success",  
							confirmButtonColor: "#2E64FE",   
							confirmButtonText: "Aceptar",   
							closeOnConfirm: false }, 
						function(){
							location.reload();
						});
						
					});
					request.fail(function (jqXHR, textStatus, thrown) {
						sweetAlert("Error", "Error al registrar los datos, intentelo de nuevo por favor.", "error");
						location.reload();
					});	
				}
		});
		
		$('.mod_alumno').click(function(){
			var id = $(this).attr('id');
			var nombre = $('#i_nombre').val();
			var fecha_nac = $('#i_fecha').val();
			var sexo = $('#i_sexo').val();
			var rfc = $('#i_rfc').val();
			var telefono = $('#i_telefono').val();
			var correo = $('#i_correo').val();
			var ultest = $('#i_ultest').val();
			var instegre = $('#i_instegre').val();
			var anioegreso = $('#i_anioegreso').val();
			var entero = $('#i_entero').val();
			var inversion = $('#i_inversion').val();
			var grupo = $('#s_grupo').val();
			
			//validar,telefono,correo,inversion
			var v_telefono = 0;
			var v_correo = 0;
			var v_inversion = 0;
			

			
			if(nombre == "" || fecha_nac == "" || sexo == 0 || rfc == "" || telefono == "" || correo == "" || ultest == "" || instegre == "" || anioegreso == "" || entero == "" || inversion == "" || grupo == 0){
				sweetAlert("Error", "Debe llenar Todos los campos correctamente.", "error");
			}else{
				if(telefono.length!=10){
					sweetAlert("Error", "El número de teléfono no es válido, ingrese un número de teléfono válido a 10 dígitos.", "error");
				}else{
					v_telefono=1;
					if (!validarEmail(correo)) {
						sweetAlert("Error", "La dirección de correo no es válida.", "error");
					}else{
						v_correo = 1;
						if (inversion < 0) {
							sweetAlert("Error", "La inversión ingresada no es válido.", "error");
						}else{
								v_inversion = 1;
								
						}
					}
				}
			}

				if (v_telefono == 1 && v_correo==1 && v_inversion==1) {
					
					switch(sexo){
						case "1":
							sexo = "F";
							break;
						case "2":
							sexo = "M";
							break;
					}
					var request;
				
					if(request){
						request.abort();
					}
					
					request = $.ajax({
						url: CI_ROOT+"c_controlescolar/modificar_alumno",
						type: "POST",
						data:"nombre="+nombre+"&fecha_nac="+fecha_nac+"&sexo="+sexo+"&rfc="+rfc+"&telefono="+telefono+"&correo="+correo+"&ultest="+ultest+"&instegre="+instegre+"&anioegreso="+anioegreso+"&entero="+entero+"&inversion="+inversion+"&grupo="+grupo+"&id"+id
					});
					request.done(function (response, textStatus,jqXHR) {
						console.log("response: " + response);
						sweetAlert({
							title: "Actualizado",
							text: "Los datos se modificaron correctamente",   
							type: "success",  
							confirmButtonColor: "#2E64FE",   
							confirmButtonText: "Aceptar",   
							closeOnConfirm: false }, 
						function(){
							location.reload();
						});
						
					});
					request.fail(function (jqXHR, textStatus, thrown) {
						sweetAlert("Error", "Error al registrar los datos, intentelo de nuevo por favor.", "error");
						location.reload();
					});	
				}
		});
		
		//eliminar pagos de lista de pagos en administración
		$('.eliminar_pago').on('click', function(e){
			var id = $(this).attr('id');
			console.log(id);
			var request;
			
			if(request){
				request.abort();
			}
			sweetAlert({
				title: "¿Estas seguro de eliminar este registro?",   
				text: "No podras recuperar estos datos!",   
				type: "warning",   
				showCancelButton: true,   
				confirmButtonColor: "#DD6B55",   
				confirmButtonText: "Si, deseo borrarlos",   
				closeOnConfirm: false }, 
				function(){   
					request = $.ajax({
						url: CI_ROOT+"c_administracion/eliminar_pago",
						type: "POST",
						data: "id="+id
					});
					request.done(function (response, textStatus,jqXHR) {
						console.log("response: " + response);
						$('#tr'+response).html("");
						sweetAlert("Eliminado", "El pago ha sido removido correctamente", "success");
					});
					request.fail(function (jqXHR, textStatus, thrown) {
						console.log("Error: "+textstatus );
					});
					e.preventDefault();
				});
		});
		
		
	});//aqui temina el document.ready para tener en tiempo real
		
	/////////////////////////////////////////////////////////////////////
		
	//boton modificar alumnos para control escolar 
		function modificar_ce(id, correo){
			$.ajax({
				url: CI_ROOT+"c_controlescolar/datos_mod",
				type: "POST",
				data: "id="+id+"&correo="+correo,
				datatype: 'jsondata',
				success: function(dato){
					var obj = jQuery.parseJSON(dato);
					var data = obj[0];
					document.querySelector('.mod_alumno').setAttribute('id',id);
					document.querySelector('#i_nombre').setAttribute('value',data.nombre);
					document.querySelector('#i_fecha').setAttribute('value',data.fecha);
					switch(data.sexo){
						case 'F':
							document.getElementById("i_sexo").selectedIndex = 1;
							break;
						case 'M':
							document.getElementById("i_sexo").selectedIndex = 2;
							break;
					}
					document.querySelector('#i_rfc').setAttribute('value',data.rfc);
					document.querySelector('#i_telefono').setAttribute('value',data.telefono);
					document.querySelector('#i_correo').setAttribute('value',data.correo);
					document.querySelector('#i_ultest').setAttribute('value',data.ultest);
					document.querySelector('#i_instegre').setAttribute('value',data.instegre);
					document.querySelector('#i_anioegreso').setAttribute('value',data.anioegre);
					document.querySelector('#i_entero').setAttribute('value',data.entero);
					document.querySelector('#i_inversion').setAttribute('value',data.inversion);
					 $('#s_grupo > option[value="'+data.grupo+'"]').attr('selected', 'selected');
					//document.getElementById("s_grupo").selectedIndex = data.grupo;
					document.querySelector('#g_modulo').setAttribute('value',data.modulo);
					document.querySelector('#g_nivel').setAttribute('value',data.nivel);
					document.querySelector('#g_horario').setAttribute('value',data.tipo);
					$('#modal_editar').modal('show');
				}
			});
		}	
	
	//metodo para eliminar los alumnos de control escolar	
	function eliminar_ce(id,correo){
		var request;
		if(request){
			request.abort();
		}
		sweetAlert({
			title: "¿Estas seguro de eliminar este registro?",   
			text: "No podras recuperar estos datos!",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonColor: "#DD6B55",   
			confirmButtonText: "Si, deseo borrarlos",   
			closeOnConfirm: false }, 
		function(){   
				request = $.ajax({
					url: CI_ROOT+"c_controlescolar/eliminar_alumno",
					type: "POST",
					data: "id="+id+"&correo="+correo
		    	});
				request.done(function (response, textStatus,jqXHR) {
					console.log("response: " + response);
					$('#tr'+response).html("");
					sweetAlert("Eliminado", "Alumno eliminado correctamente.", "success");
				});
				request.fail(function (jqXHR, textStatus, thrown) {
					console.log("Error: "+textstatus );
				});
		});
    }
    
	//funcion para generar un datatable recargable
	$('#boton_buscar').click(function(){
		var anio = $('#s_anio').val();
		var mes = $('#s_mes').val();
		$.post(CI_ROOT+"prueba/obtenerdatos1",{
			anio : anio,
			mes:mes
		},function(datos){
			//console.log(datos);
			$('#tabla3').DataTable( {
				destroy: true,
				"bProcessing": true,
				"aaData": JSON.parse(datos),
				"aoColumns": [
				{ "mData": "nombre" },
				{ "mData": "monto" },
				],
				//lengthMenu": [ 25, 50, 100 ],
				"scrollY": 400,
				"scrollX": true
			} );
			})
	});
	
		function validarEmail( email ) {
   		var valido = true;
   		var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if ( !expr.test(email) ){
			valido=false;	
		}
		return valido;
	}
	
	function mostrar_info_grupo_insc(){
		var grupo = $('#s_grupo').val();
		if(grupo != 0){
			$.ajax({
				url: CI_ROOT+"c_controlescolar/info_grupo",
				type: "POST",
				data: "grupo="+grupo,
				datatype: 'jsondata',
				success: function(dato){
					var obj = jQuery.parseJSON(dato);
					var data = obj[0];
					document.querySelector('#g_modulo').setAttribute('value',data.modulo);
					document.querySelector('#g_nivel').setAttribute('value',data.nivel);
					document.querySelector('#g_horario').setAttribute('value',data.horario);
				}
			});
		}else{
			document.querySelector('#g_modulo').setAttribute('value','');
			document.querySelector('#g_nivel').setAttribute('value','');
			document.querySelector('#g_horario').setAttribute('value','');
		}
	}//fin mostrar_info_grupo_insc
	
	function tabla_controlescolar(){
		var estado = $('#s_estado').val();
		$.post(CI_ROOT+"c_controlescolar/tablainfo",{
			estado : estado
		},function(datos){
			$('#t_alumnos').DataTable({
				destroy: true,
				"bProcessing": true,
				"aaData": JSON.parse(datos),
				"aoColumns": [
				{ "mData": "id_alumno" },
				{ "mData": "nombre" },
				{ "mData": "id_grupo" },
				{ "mData": "modulo" },
				{ "mData": "nivel" },
				{ "mData": "correo" },
				{ "mData": "Telefono" },
				{ "mData": "modificar" },
				{ "mData": "eliminar" }
				],
				//"lengthMenu": [10,25,50,100],
				//"scrollY": 250
			});
		})
	}

	function tabla_administracion(){
		var estado = $('#s_estado').val();
		$.post(CI_ROOT+"c_administracion/tablainfo",{
			estado : estado
		},function(datos){
			$('#t_alumnos').DataTable({
				destroy: true,
				"bProcessing": true,
				"aaData": jQuery.parseJSON(datos),
				"aoColumns": [
				{ "mData": "id_alumno" },
				{ "mData": "nombre" },
				{ "mData": "id_grupo" },
				{ "mData": "modulo" },
				{ "mData": "nivel" },
				{ "mData": "correo" },
				{ "mData": "Telefono" },
				{ "mData": "cuenta" },
				{ "mData": "pagar" }
				],
				//lengthMenu": [ 25, 50, 100 ],
				//scrollY": 400,
				//"scrollX": true
			});
		})
	}
	
	function pagar_a(id, correo){
			var request;
			if(request){
				request.abort();
			}
			console.log(id+" "+correo);
			request = $.ajax({
				url: CI_ROOT+"c_administracion/info_pago",
				type: "POST",
				data: "id="+id+"&correo="+correo,
				datatype: 'jsondata',
				success: function(dato){
					var obj = jQuery.parseJSON(dato);
					var data = obj[0];
					document.querySelector('.b_guardar_pago').setAttribute('id',id);
					document.querySelector('#p_alumno').setAttribute('value',data.nombre);
					document.querySelector('#p_email').setAttribute('value',data.correo);
					document.querySelector('#p_grupo').setAttribute('value',data.grupo);
					document.querySelector('#p_modulo').setAttribute('value',data.modulo);
					document.querySelector('#p_nivel').setAttribute('value',data.nivel);
					document.querySelector('#p_cuenta').setAttribute('value',data.cuenta);
					
					$('#modal_pago').modal('show');
				}
			});
		}