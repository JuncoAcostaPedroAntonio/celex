<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General extends CI_Controller {

	public function __construct(){
		parent::__construct();
			$this->load->model('m_login','',TRUE);
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function validar_login()
	{
		$correo = $this->input->post('correo');
		$contrasena = $this->input->post('contrasena');
		$resultado = $this->m_login->validar($correo,$contrasena);
		if($resultado == 1){
			redirect('general/inicio');
		}else{
			redirect('general/index');
		}
	}
	
	public function inicio()
	{
		$respuesta = $this->m_login->tabla_usuarios();
		$usuarios = array();
		foreach ($respuesta as $key => $value) {
			$usuarios[$key]['id_usuario'] = $value['id_usuario'];
			$usuarios[$key]['nombre'] = $value['nombre_usuario'];
			$usuarios[$key]['correo'] = $value['correo'];
			$usuarios[$key]['departamento'] = $value['nombre_departamento'];
		}
		$this->load->view('generales/encabezado');
		$this->load->view('administrador/usuarios',array('usuarios'=>$usuarios));
	}
	
	function ramon(){
		$this->load->view('generales/encabezado');
		$this->load->view('interfaces/inser_estud');
	}
	
}