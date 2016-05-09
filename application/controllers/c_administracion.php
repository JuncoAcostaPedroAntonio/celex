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
		$this->load->view('administracion/registro_pago');
		$this->load->view('generales/footer');
	}

	public function lista_pagos(){
		$respuesta = $this->m_administracion->lista_pagos();
		$pagos = array();
		foreach ($respuesta as $key => $value) {
			$pagos[$key]['nombre'] = $value['nombre'];
			$pagos[$key]['descripcion'] = $value['descripcion'];
			$pagos[$key]['fecha'] = $value['fecha'];
			$pagos[$key]['inversion'] = $value['inversion'];
		}
		$this->load->view('generales/encabezado');
		$this->load->view('administrador/admin_ventanas');
		$this->load->view('administracion/lista_pagos',array('pagos'=>$pagos));
		$this->load->view('generales/footer');
	}
	
	public function info_pago(){
		$id = $this->input->post('id');
		$correo = $this->input->post('name');
		$respuesta = $this->m_administracion->info_alumno($id, $correo);
		$datos = array();
		foreach($respuesta as $key => $value){
				$datos[$key]['nombre'] = $value['nombre'];
				$datos[$key]['correo'] = $value['correo'];
				$datos[$key]['grupo'] = $value['id_grupo'];
				$datos[$key]['modulo'] = $value['modulo'];
				$datos[$key]['nivel'] = $value['nivel'];
			}
		echo json_encode($datos);
	}
	
	public function registro_pago(){
		$id = $this->input->post('id');
		$concepto = $this->input->post('concepto');
		$inversion = $this->input->post('inversion');
		$respuesta = $this->m_administracion->reg_pago($id, $concepto, $inversion);
		if($respuesta == $id){
			return $Respuesta;
		}else{
			return FALSE;
		}
	}
}

