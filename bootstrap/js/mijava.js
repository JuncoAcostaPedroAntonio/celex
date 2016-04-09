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
	function login_js() {
		var correo = $('#i_correo').value;
		var contrasena = $('#i_contrasena').value;
		console.log("correo");
		$.post(CI_ROOT+"gn",{
			correo : correo,
			contrasena : contrasena
		},function(data){
			console.log(data);
		});
	}