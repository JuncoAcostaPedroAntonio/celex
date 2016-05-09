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
	
	public function lista_pagos(){
		$SQL = ("SELECT a.nombre, p.descripcion, p.fecha, p.inversion FROM Alumno AS a JOIN Pago AS p ON a.id_alumno = p.id_alumno;");
		$consulta = $this->db->query($SQL);
		return $consulta->result_array();
	}
	
	public function info_alumno($id, $correo){
		$this->db->select('nombre, correo, id_grupo, modulo, nivel');
		$this->db->from('v_alumnos');
		$this->db->where('id_alumno', $id);
		$this->db->where('correo', $correo);
		$consulta = $this->db->get();
		return $consulta->result_array();
	}

	public function reg_pago($id, $concepto, $inversion){
		$SQL = ("INSERT INTO Pago (id_alumno,descripcion,inversion) Values ('".$id."','".$concepto."','".$inversion."');");
        if($this->db->query($SQL)){
            return $id;
        }else{
            return FALSE;
        }
	}

}