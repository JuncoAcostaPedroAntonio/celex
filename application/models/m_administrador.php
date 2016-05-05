<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_administrador extends CI_Model {
    
    public function __construct(){
		parent::__construct();
	}

    public function tabla_usuarios()
	{
		$this->db->select('id_usuario, nombre_usuario, correo, telefono, nombre_departamento');
		$this->db->from('V_Usuarios');
		$consulta = $this->db->get();
		return $consulta->result_array();
	}

    public function eliminar($id,$correo){
        $SQL = ("DELETE FROM Usuarios WHERE id_usuario = '$id' AND correo = '$correo'");
        if($this->db->query($SQL)){
            return $id;
        }else{
            return FALSE;
        }
    }
    
    public function registrar_usuario($a){
        $SQL = ("INSERT INTO Usuarios (nombre_usuario,correo,telefono,contrasena,id_departamento) Values ('".$a[0]."','".$a[1]."','".$a[2]."','".$a[3]."','".$a[4]."')");
        if($this->db->query($SQL)){
            return $a[1];
        }else{
            return FALSE;
        }
    }
    
    public function lista_depto(){
        $SQL = ("Select id_departamento, nombre_departamento FROM Departamento");
        $consulta = $this->db->query($SQL);
        return $consulta->result_array();
    }
    
    public function consulta_edit($id, $correo){
		$this->db->select('id_usuario,nombre_usuario,correo,telefono,contrasena,id_departamento');
		$this->db->from('Usuarios');
		$this->db->where('id_usuario',$id);
		$this->db->where('correo', $correo);
		$consulta = $this->db->get();
		return $consulta->result_array();
		
    }
}