<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_administracion extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_administracion','',TRUE);
	}

	public function inicio(){
		$respuesta = $this->m_administracion->lista_alumnos();
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
		$this->load->view('administracion/administracion',array('alumnos'=>$alumnos));
		$this->load->view('generales/footer');
	}

}

