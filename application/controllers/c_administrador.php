<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_administrador extends CI_Controller {

    public function __construct(){
		parent::__construct();
			$this->load->model('m_administrador','',TRUE);
	}
	
	public function inicio()
	{
		$respuesta = $this->m_administrador->tabla_usuarios();
		$usuarios = array();
		foreach ($respuesta as $key => $value) {
			$usuarios[$key]['id_usuario'] = $value['id_usuario'];
			$usuarios[$key]['nombre'] = $value['nombre_usuario'];
			$usuarios[$key]['correo'] = $value['correo'];
			$usuarios[$key]['departamento'] = $value['nombre_departamento'];
		}
		$this->load->view('generales/encabezado');
		$this->load->view('administrador/usuarios',array('usuarios'=>$usuarios));
		$this->load->view('administrador/nuevo_usuario');
		$this->load->view('generales/footer');
	}
	
	public function eliminar_user(){
		
		$post = $this->input->post();
		$id = $post['id'];
		$correo = $post['name'];
		echo $id;
		/*
		$result = $this->m_administrador->eliminar($id, $correo);
		if ($result == $id) {
			echo $id;
		} else {
			echo FALSE;
		}*/
	}
		
		
	
	public function nuevo_usuario(){
			/*
		$this->load->model('m_administrador');
		$nombre = $this->input->post('usuario');
		$correo = $this->input->post('email');
		$contrasena1 = $this->input->post('contraseña1');
		$contrasena2 = $this->input->post('contraseña2'); 
		$departamento = $this->input->post('departamento');
		
		$resultado = $this->m_administrador->nuevo_usuario($nombre,$correo,$contrasena1,$contrasena2,$departamento);
		*/
	}
}