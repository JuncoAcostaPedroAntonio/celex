<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_login','',TRUE);
	}
         
	public function validar_login()	{
		$correo = $this->input->post('correo');
		$contrasena = $this->input->post('contrasena');
		$respuesta = $this->m_login->validar($correo,$contrasena);
		
		if($respuesta == FALSE){
			echo false;
		}else{
			$data = array(
				'id' => $respuesta[0]['id_usuario'],
				'nombre' => $respuesta[0]['nombre_usuario'],
				'departamento' => $respuesta[0]['nombre_departamento'],
				'id_depto' => $respuesta[0]['id_departamento'],
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			echo true;
		}
	}
		
	function inicio(){
		if(!$this->session->userdata('login')){
			redirect('general/index');
		}
		$this->load->view('generales/encabezado');
		if($this->session->userdata('id_depto') == 6){
		$this->load->view('administrador/admin_ventanas');
		}
		if($this->session->userdata('id_depto') == 1){
		$this->load->view('administracion/menu');
		}
		if($this->session->userdata('id_depto') == 4 || $this->session->userdata('id_depto') == 5){
		$this->load->view('control_escolar/menu');
		}
		$this->load->view('generales/Pag_inicio');
	}
	
	function cerrarsesion(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
			

		
}