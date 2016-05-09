<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_controlescolar extends CI_Controller {

    public function __construct(){
		parent::__construct();
			$this->load->model('m_controlescolar','',TRUE);
	}
	
	public function inicio(){
	    $respuesta = $this->m_controlescolar->lista_alumnos();
		$alumnos = array();
		foreach ($respuesta as $key => $value) {
			$alumnos[$key]['id_alumno'] = $value['id_alumno'];
			$alumnos[$key]['nombre'] = $value['nombre'];
			$alumnos[$key]['grupo'] = $value['id_grupo'];
			$alumnos[$key]['modulo'] = $value['modulo'];
			$alumnos[$key]['nivel'] = $value['nivel'];
			$alumnos[$key]['telefono'] = $value['telefono'];
			$alumnos[$key]['correo'] = $value['correo'];
		}
	    $this->load->view('generales/encabezado');
		$this->load->view('administrador/admin_ventanas');
		$this->load->view('control_escolar/control_escolar',array('alumnos'=>$alumnos));
		$this->load->view('control_escolar/editar_alumno');
		$this->load->view('generales/footer');
	}
	
	public function eliminar_alumno(){
		$id = $this->input->post('id');
		$correo = $this->input->post('correo');
		$result = $this->m_controlescolar->eliminar($id, $correo);
		if($result == $id){
			echo $id;
		}else{
			echo 'Error';
		}
	}
	
	public function datos_alumno(){
		$id = $this->input->post('id');
		$correo = $this->input->post('correo');
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
	
	public function inscripcion(){
		$this->load->view('generales/encabezado');
		$this->load->view('administrador/admin_ventanas');
		$this->load->view('control_escolar/nuevo_alumno');
		$this->load->view('generales/footer');
	}
	
}