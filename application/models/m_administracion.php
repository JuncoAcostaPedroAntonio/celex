<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_administracion extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

public function lista_alumnos(){
	$this->db->select('id_alumno, nombre, id_grupo, modulo, nivel, telefono, correo');
	$this->db->from('v_alumnos');
	$consulta = $this->db->get();
	return $consulta->result_array();
}


}