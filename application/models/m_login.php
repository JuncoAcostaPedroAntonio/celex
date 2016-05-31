<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function validar($correo, $contrasena)
	{
		$SQL = ("SELECT id_usuario, nombre_usuario, nombre_departamento, id_departamento FROM v_usuario WHERE correo = '".$correo."' AND contrasena = '".$contrasena."';");
		$respuesta = $this->db->query($SQL);
		if ($respuesta->num_rows()>0) {
				return $respuesta->result_array();
			}else{
				return '0';
			}
	}
}
