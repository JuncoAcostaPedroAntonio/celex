<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function validar($correo, $contrasena)
	{
		$this->db->select('Nombre_Usuario');
		$this->db->from('Usuarios');
		$this->db->where('correo',$correo);
		$this->db->where('contrasena',$contrasena);
		$respuesta = $this->db->get();
		if ($respuesta->num_rows()>0) {
			return '1';
		}else{
			return '0';
		}
	}



}
