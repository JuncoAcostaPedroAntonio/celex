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
			$usuarios[$key]['telefono'] = $value['telefono'];
			$usuarios[$key]['correo'] = $value['correo'];
			$usuarios[$key]['departamento'] = $value['nombre_departamento'];
		}
		$respuesta = $this->m_administrador->lista_depto();
		$lista_depto = array();
		foreach($respuesta as $key => $value){
			$lista_depto[$key]['id_depto'] = $value['id_departamento'];
			$lista_depto[$key]['departamento'] = $value['nombre_departamento'];
		}
		$this->load->view('generales/encabezado');
		$this->load->view('administrador/admin_ventanas');
		$this->load->view('administrador/usuarios',array('usuarios'=>$usuarios, 'departamentos'=>$lista_depto));
		$this->load->view('administrador/nuevo_usuario',array('departamentos'=>$lista_depto));
		$this->load->view('administrador/editar_usuario', array('departamentos'=>$lista_depto));
		$this->load->view('generales/footer');
	}
	
	public function eliminar_user(){
		
		$post = $this->input->post();
		$id = $post['id'];
		$correo = $post['name'];
		$result = $this->m_administrador->eliminar($id, $correo);
		if ($result == $id) {
			echo $id;
		} else {
			echo FALSE;
		}
	}
		
	public function nuevo_usuario(){
		$post = $this->input->post();
		$usuario = $post['usuario'];
		$email = $post['email'];
		$telefono = $post['telefono'];
		$contrasena = $post['contrasena'];
		$departamento = $post['departamento'];
		$datos = array($usuario,$email,$telefono,$contrasena,$departamento);
		$respuesta = $this->m_administrador->registrar_usuario($datos);
		if($respuesta == $email){
			echo $respuesta;
		}else{
			echo FALSE;
		}
	}
	
	public function proceso(){
		$this->load->view('generales/encabezado');
		$this->load->view('administrador/admin_ventanas');
		$this->load->view('administrador/proceso');
		$this->load->view('generales/footer');
	}
	
	public function datos_mod(){
		$id = $this->input->post('id');
		$correo = $this->input->post('name');
		$respuesta = $this->m_administrador->consulta_edit($id, $correo);
		$datos = array();
		foreach($respuesta as $key => $value){
				$datos[$key]['id'] = $value['id_usuario'];
				$datos[$key]['nombre'] = $value['nombre_usuario'];
				$datos[$key]['correo'] = $value['correo'];
				$datos[$key]['telefono'] = $value['telefono'];
				$datos[$key]['contrasena'] = $value['contrasena'];
				$datos[$key]['departamento'] = $value['id_departamento'];
			}
		echo json_encode($datos);
	}

	public function modificar_usuario(){
		$id = $this->input->post('id');
		$usuario = $this->input->post('usuario');
		$email = $this->input->post('email');
		$telefono = $this->input->post('telefono');
		$contrasena = $this->input->post('contrasena');
		$departamento = $this->input->post('departamento');
		$datos = array($id,$usuario,$email,$telefono,$contrasena,$departamento);
		$respuesta = $this->m_administrador->modificar_usuario($datos);
		if($respuesta == $email){
			echo $respuesta;
		}else{
			echo FALSE;
		}
		
		
		
		
	}
	
}