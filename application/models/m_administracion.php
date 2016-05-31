<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_administracion extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function lista_alumnos(){
		$SQL = ("SELECT id_alumno, nombre,id_grupo, modulo, nivel, Telefono, correo, cuenta FROM v_alumnos WHERE cuenta > 0");
		$consulta = $this->db->query($SQL);
		return $consulta->result_array();
	}
	
	public function lista_pagos(){
		$SQL = ("SELECT p.id_pago, a.nombre, p.descripcion, p.fecha, p.inversion FROM Alumno AS a JOIN Pago AS p ON a.id_alumno = p.id_alumno;");
		$consulta = $this->db->query($SQL);
		return $consulta->result_array();
	}
	
	public function info_alumno($id, $correo){
		$this->db->select('nombre, correo, id_grupo, modulo, nivel, cuenta');
		$this->db->from('v_alumnos');
		$this->db->where('id_alumno', $id);
		$this->db->where('correo', $correo);
		$consulta = $this->db->get();
		return $consulta->result_array();
	}

	public function reg_pago($id, $concepto, $inversion){
		if($this->db->query("CALL r_pago('$id','$inversion','$concepto')")){
          return $id;
        }else{
            return FALSE;
        }
	}
	
	public function s_estados(){
        $this->db->select('id_status, estado');
        $this->db->from('Status_alumno');
        $consulta = $this->db->get();
        return $consulta->result_array();
    }

	public function tablainfo($estado){
        if($estado != 0){
            $SQL = ("SELECT id_alumno, nombre,id_grupo, modulo, nivel, Telefono, correo, cuenta FROM v_alumnos WHERE cuenta > 0 AND estatus = '".$estado."';");
			$consulta = $this->db->query($SQL);
			return $consulta->result_array();
        }else{
            $SQL = ("SELECT id_alumno, nombre,id_grupo, modulo, nivel, Telefono, correo, cuenta FROM v_alumnos WHERE cuenta > 0");
			$consulta = $this->db->query($SQL);
			return $consulta->result_array();
        }
    }
    
    public function eliminar($id){
        if($this->db->query("CALL e_pago('$id')")){
            return $id;
        }else{
            return FALSE;
        }
        
    }

}//fin clase