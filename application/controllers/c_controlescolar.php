<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_controlescolar extends CI_Controller {

    public function __construct(){
		parent::__construct();
			$this->load->model('m_controlescolar','',TRUE);
			
		if(!$this->session->userdata('login')){
			redirect('general/index');
		}
		$d =$this->session->userdata('id_depto');
		if(!($d == 6 || $d == 4 || $d == 5)){
			redirect('c_login/inicio');
		}
	}
	
	public function inicio(){
		$respuesta = $this->m_controlescolar->traer_grupos();
		$l_grupos = array();
		foreach ($respuesta as $key => $value) {
			$l_grupos[$key]['id'] = $value['id_grupo'];
			$l_grupos[$key]['nombre'] = $value['nombre_grupo'];
		}
	    $respuesta = $this->m_controlescolar->lista_alumnos();
		$alumnos = array();
		foreach ($respuesta as $key => $value) {
			$alumnos[$key]['id_alumno'] = $value['id_alumno'];
			$alumnos[$key]['nombre'] = $value['nombre'];
			$alumnos[$key]['grupo'] = $value['id_grupo'];
			$alumnos[$key]['modulo'] = $value['modulo'];
			$alumnos[$key]['nivel'] = $value['nivel'];
			$alumnos[$key]['telefono'] = $value['Telefono'];
			$alumnos[$key]['correo'] = $value['correo'];
		}
		$estados = $this->m_controlescolar->s_estados();
		$l_estados = array();
		foreach ($estados as $key => $value) {
			$l_estados[$key]['id'] = $value['id_status'];
			$l_estados[$key]['estado'] = $value['estado'];
		}
	    $this->load->view('generales/encabezado');
		if($this->session->userdata('id_depto') == 6){
		$this->load->view('administrador/admin_ventanas');
		}
		if($this->session->userdata('id_depto') == 4 || $this->session->userdata('id_depto') == 5){
		$this->load->view('control_escolar/menu');
		}
		$this->load->view('control_escolar/control_escolar',array('alumnos'=>$alumnos,'estados'=>$l_estados, "l_grupos"=>$l_grupos));
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
				$datos[$key]['telefono'] = $value['Telefono'];
				$datos[$key]['contrasena'] = $value['contrasena'];
				$datos[$key]['departamento'] = $value['id_departamento'];
			}
		echo json_encode($datos);
	}
	
	public function inscripcion(){
		$respuesta = $this->m_controlescolar->traer_grupos();
		$l_grupos = array();
		foreach ($respuesta as $key => $value) {
			$l_grupos[$key]['id'] = $value['id_grupo'];
			$l_grupos[$key]['nombre'] = $value['nombre_grupo'];
		}
		$this->load->view('generales/encabezado');
		if($this->session->userdata('id_depto') == 6){
		$this->load->view('administrador/admin_ventanas');
		}
		if($this->session->userdata('id_depto') == 4 || $this->session->userdata('id_depto') == 5){
		$this->load->view('control_escolar/menu');
		}
		$this->load->view('control_escolar/nuevo_alumno',array("l_grupos"=>$l_grupos));
		$this->load->view('generales/footer');
	}
	
	public function info_grupo(){
		$grupo = $this->input->post('grupo');
		$respuesta = $this->m_controlescolar->info_grupo($grupo);
		$datos = array();
		foreach($respuesta as $key => $value){
				$datos[$key]['modulo'] = $value['modulo'];
				$datos[$key]['nivel'] = $value['nivel'];
				$datos[$key]['horario'] = $value['tipo'];
			}
		echo json_encode($datos);
	}
	
	public function inscribir_alumno(){
		$nombre = $this->input->post('nombre');
		$fecha_nac = $this->input->post('fecha_nac');
		$sexo = $this->input->post('sexo');
		$rfc = $this->input->post('rfc');
		$telefono = $this->input->post('telefono');
		$correo = $this->input->post('correo');
		$ultest = $this->input->post('ultest');
		$instegre = $this->input->post('instegre');
		$anioegreso = $this->input->post('anioegreso');
		$entero = $this->input->post('entero');
		$inversion = $this->input->post('inversion');
		$grupo = $this->input->post('grupo');
		
		$datos = array($nombre, $fecha_nac, $sexo, $rfc, $telefono, $correo, $ultest, $instegre, $anioegreso, $entero, $inversion, $grupo);
		$respuesta = $this->m_controlescolar->r_alumno($datos);
		if($respuesta == $correo){
			echo $correo;
		}else{
			return FALSE;
		}
		
	}	
	
	public function tablainfo(){
		$estado = $this->input->post("estado");
		$respuesta = $this->m_controlescolar->tablainfo($estado);
		foreach ($respuesta as $key => $value) {
			$respuesta[$key]['id_alumno'] = $value['id_alumno'];
			$respuesta[$key]['nombre'] = $value['nombre'];
			$respuesta[$key]['id_grupo'] = $value['id_grupo'];
			$respuesta[$key]['modulo'] = $value['modulo'];
			$respuesta[$key]['nivel'] = $value['nivel'];
			$respuesta[$key]['Telefono'] = $value['Telefono'];
			$respuesta[$key]['correo'] = $value['correo'];
			$respuesta[$key]['modificar'] = "<td><button id='".$value['id_alumno']."' name='".$value['correo']."' type='button' class='btn btn-primary' onclick='modificar_ce(this.id,this.name)'><span class='glyphicon glyphicon-pencil'></button></td>";
			$respuesta[$key]['eliminar'] = "<td><center><button id='".$value['id_alumno']."' name='".$value['correo']."' class='btn btn-danger' onClick='eliminar_ce(this.id,this.name)'><i class='glyphicon glyphicon-remove'></button></center></td>";
		}
		echo json_encode($respuesta);
	}
	
	public function datos_mod(){
		$id = $this->input->post('id');
		$correo = $this->input->post('correo');
		$respuesta = $this->m_controlescolar->consulta_edit($id, $correo);
		$datos = array();
		foreach($respuesta as $key => $value){
				$datos[$key]['id'] = $value['id_alumno'];
				$datos[$key]['nombre'] = $value['nombre'];
				$datos[$key]['fecha'] = $value['fecha_nac'];
				$datos[$key]['sexo'] = $value['sexo'];
				$datos[$key]['rfc'] = $value['RFC'];
				$datos[$key]['telefono'] = $value['Telefono'];
				$datos[$key]['correo'] = $value['correo'];
				$datos[$key]['ultest'] = $value['ult_grado'];
				$datos[$key]['instegre'] = $value['inst_egreso'];
				$datos[$key]['anioegre'] = $value['anio_egreso'];
				$datos[$key]['entero'] = $value['como_entero'];
				$datos[$key]['inversion'] = $value['cuenta'];
				$datos[$key]['grupo'] = $value['id_grupo'];
				$datos[$key]['modulo'] = $value['modulo'];
				$datos[$key]['nivel'] = $value['nivel'];
				$datos[$key]['tipo'] = $value['tipo'];
			}
		echo json_encode($datos);
	}
	
	public function modificar_alumno(){
		$nombre = $this->input->post('nombre');
		$fecha_nac = $this->input->post('fecha_nac');
		$sexo = $this->input->post('sexo');
		$rfc = $this->input->post('rfc');
		$telefono = $this->input->post('telefono');
		$correo = $this->input->post('correo');
		$ultest = $this->input->post('ultest');
		$instegre = $this->input->post('instegre');
		$anioegreso = $this->input->post('anioegreso');
		$entero = $this->input->post('entero');
		$inversion = $this->input->post('inversion');
		$grupo = $this->input->post('grupo');
		$id = $this->input->post('id');
		
		$datos = array($nombre, $fecha_nac, $sexo, $rfc, $telefono, $correo, $ultest, $instegre, $anioegreso, $entero, $inversion, $grupo, $id);
		$respuesta = $this->m_controlescolar->m_alumno($datos);
		if($respuesta == $correo){
			echo $correo;
		}else{
			return FALSE;
		}
	}
	
}