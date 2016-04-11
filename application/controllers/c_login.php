<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_login extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('m_login','',TRUE);
		}
		
		public function validar_login()
		{
			$correo = $this->input->post('correo');
			$contrasena = $this->input->post('contrasena');
			$resultado = $this->m_login->validar($correo,$contrasena);
			if($resultado == 1){
				redirect('c_administrador/inicio');
			}else{
				redirect('general/index');
			}
		}

}