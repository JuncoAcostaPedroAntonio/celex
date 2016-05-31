<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_administracion extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_administracion','',TRUE);
		if(!$this->session->userdata('login')){
			redirect('general/index');
		}
		$d =$this->session->userdata('id_depto');
		if(!($d == 6 || $d == 1)){
			redirect('c_login/inicio');
		}
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
			$alumnos[$key]['telefono'] = $value['Telefono'];
			$alumnos[$key]['correo'] = $value['correo'];
			$alumnos[$key]['cuenta'] = $value['cuenta'];
		}
		$estados = $this->m_administracion->s_estados();
		$l_estados = array();
		foreach ($estados as $key => $value) {
			$l_estados[$key]['id'] = $value['id_status'];
			$l_estados[$key]['estado'] = $value['estado'];
		}
		$this->load->view('generales/encabezado');
		if($this->session->userdata('id_depto') == 6){
		$this->load->view('administrador/admin_ventanas');
		}
		if($this->session->userdata('id_depto') == 1){
		$this->load->view('administracion/menu');
		}
		$this->load->view('administracion/administracion',array('alumnos'=>$alumnos,'estados'=>$l_estados));
		$this->load->view('administracion/registro_pago');
		$this->load->view('generales/footer');
	}

	public function lista_pagos(){
		$respuesta = $this->m_administracion->lista_pagos();
		$pagos = array();
		foreach ($respuesta as $key => $value) {
			$pagos[$key]['id'] = $value['id_pago'];
			$pagos[$key]['nombre'] = $value['nombre'];
			$pagos[$key]['descripcion'] = $value['descripcion'];
			$pagos[$key]['fecha'] = $value['fecha'];
			$pagos[$key]['inversion'] = $value['inversion'];
		}
		$this->load->view('generales/encabezado');
		if($this->session->userdata('id_depto') == 6){
		$this->load->view('administrador/admin_ventanas');
		}
		if($this->session->userdata('id_depto') == 1){
		$this->load->view('administracion/menu');
		}
		$this->load->view('administracion/lista_pagos',array('pagos'=>$pagos));
		$this->load->view('generales/footer');
	}
	
	public function info_pago(){
		$id = $this->input->post('id');
		$correo = $this->input->post('correo');
		$respuesta = $this->m_administracion->info_alumno($id, $correo);
		$datos = array();
		foreach($respuesta as $key => $value){
				$datos[$key]['nombre'] = $value['nombre'];
				$datos[$key]['correo'] = $value['correo'];
				$datos[$key]['grupo'] = $value['id_grupo'];
				$datos[$key]['modulo'] = $value['modulo'];
				$datos[$key]['nivel'] = $value['nivel'];
				$datos[$key]['cuenta'] = $value['cuenta'];
			}
		echo json_encode($datos);
	}
	
	public function registro_pago(){
		$id = $this->input->post('id');
		$concepto = $this->input->post('concepto');
		$inversion = $this->input->post('inversion');
		$respuesta = $this->m_administracion->reg_pago($id, $concepto, $inversion);
		if($respuesta == $id){
			return $respuesta;
		}else{
			return FALSE;
		}
	}
	
	public function tablainfo(){
		$estado = $this->input->post("estado");
		$respuesta = $this->m_administracion->tablainfo($estado);
		foreach ($respuesta as $key => $value) {
			$respuesta[$key]['id_alumno'] = $value['id_alumno'];
			$respuesta[$key]['nombre'] = $value['nombre'];
			$respuesta[$key]['grupo'] = $value['id_grupo'];
			$respuesta[$key]['modulo'] = $value['modulo'];
			$respuesta[$key]['nivel'] = $value['nivel'];
			$respuesta[$key]['telefono'] = $value['Telefono'];
			$respuesta[$key]['correo'] = $value['correo'];
			$respuesta[$key]['cuenta'] = $value['cuenta'];
			$respuesta[$key]['pagar'] = "<td><center><button id='".$value['id_alumno']."' name='".$value['correo']."' class='btn btn-success'  onclick='pagar_a(this.id,this.name)'><i class='fa fa-usd'></button></center></td>";
		}
		echo json_encode($respuesta);
	}
	
	public function eliminar_pago(){
		$id = $this->input->post('id');
		$result = $this->m_administracion->eliminar($id);
		if ($result == $id) {
			echo $id;
		} else {
			echo FALSE;
		}
	}
	
}//fin clase

