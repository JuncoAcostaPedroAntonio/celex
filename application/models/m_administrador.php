<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_administrador extends CI_Model {
    
    public function __construct(){
		parent::__construct();
	}

    public function tabla_usuarios()
	{
		$this->db->select('id_usuario, nombre_usuario, correo, nombre_departamento');
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

}