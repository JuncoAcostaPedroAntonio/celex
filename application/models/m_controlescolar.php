<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_controlescolar extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	
	public function lista_alumnos(){
	    $this->db->select('id_alumno, nombre, id_grupo, modulo, nivel, telefono, correo');
    	$this->db->from('v_alumnos');
    	$consulta = $this->db->get();
    	return $consulta->result_array();
    }
    
    public function eliminar($id, $correo){
    	return $id;
    	/*
    	$SQL = ("DELETE FROM Alumno WHERE id_alumno = '$id' AND correo = '$correo'");
        if($this->db->query($SQL)){
            return $id;
        }else{
            return FALSE;
        }*/
    }
    
    public function consulta_edit($id, $correo){
		$SQL = ("SELECT ");
		$this->db->select('id_usuario,nombre_usuario,correo,telefono,contrasena,id_departamento');
		$this->db->from('Usuarios');
		$this->db->where('id_usuario',$id);
		$this->db->where('correo', $correo);
		$consulta = $this->db->get();
		return $consulta->result_array();
		
    }
    
}