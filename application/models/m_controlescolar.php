<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_controlescolar extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	
	public function lista_alumnos(){
	    $this->db->select('id_alumno, nombre, id_grupo, modulo, nivel, Telefono, correo');
    	$this->db->from('v_alumnos');
    	$consulta = $this->db->get();
    	return $consulta->result_array();
    }
    
    public function eliminar($id, $correo){
    	$SQL = ("DELETE FROM Alumno WHERE id_alumno = '$id' AND correo = '$correo'");
        if($this->db->query($SQL)){
            return $id;
        }else{
            return FALSE;
        }
    }
    
    public function consulta_edit($id, $correo){
		$this->db->select('id_alumno,nombre,fecha_nac,sexo,RFC,correo,inst_egreso,anio_egreso,ult_grado,como_entero,id_grupo,Telefono,cuenta,modulo,nivel,tipo');
		$this->db->from('v_alumnos2');
		$this->db->where('id_alumno',$id);
		$this->db->where('correo', $correo);
		$consulta = $this->db->get();
		return $consulta->result_array();
		
    }
    
    public function traer_grupos(){
    	$this->db->select('id_grupo, nombre_grupo');
    	$this->db->from('Grupo');
    	$this->db->where('estatus = 1');
    	$consulta = $this->db->get();
    	return $consulta->result_array();
    }
    
    public function info_grupo($grupo){
    	$this->db->select('modulo, nivel, tipo');
    	$this->db->from('Grupo');
    	$this->db->where("id_grupo = '".$grupo."'");
    	$consulta = $this->db->get();
    	return $consulta->result_array();
    }
                                                                                                                                                                //$nombre-0, $fecha_nac-1, $sexo-2, $rfc-3, $telefono-4, $correo-5, $ultest-6, $instegre-7, $anioegreso-8, $entero-9, $inversion-10, $grupo-11
                                                                                                                                                                //nombre-0,fecha_nac-1,sexo-2,RFC-3,correo-5,inst_egreso-7,anio_egreso-8,ult_grado-6,como_entero-9,id_grupo-11,estatus,Telefono-4,cuenta-10                                                                                                                         
    public function r_alumno($a){
        $SQL = ("INSERT INTO Alumno (nombre,fecha_nac,sexo,RFC,correo,inst_egreso,anio_egreso,ult_grado,como_entero,id_grupo,estatus,Telefono,cuenta) Values ('".$a[0]."','".$a[1]."','".$a[2]."','".$a[3]."','".$a[5]."','".$a[7]."','".$a[8]."','".$a[6]."','".$a[9]."','".$a[11]."','2','".$a[4]."','".$a[10]."');");
        if($this->db->query($SQL)){
            return $a[5];
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
            $this->db->select('id_alumno, nombre, id_grupo, modulo, nivel, Telefono, correo');
        	$this->db->from('v_alumnos');
        	$this->db->where('estatus',$estado);
        	$consulta = $this->db->get();
        	return $consulta->result_array();
        }else{
            $this->db->select('id_alumno, nombre, id_grupo, modulo, nivel, Telefono, correo');
        	$this->db->from('v_alumnos');
        	$consulta = $this->db->get();
        	return $consulta->result_array();
        }
    }
    
    public function m_alumno($a){
        $SQL = ("UPDATE Alumno SET nombre='".$a[0]."',fecha_nac='".$a[1]."',sexo='".$a[2]."',RFC='".$a[3]."',correo='".$a[5]."',inst_egreso='".$a[7]."',anio_egreso='".$a[8]."',ult_grado='".$a[6]."',como_entero='".$a[9]."',id_grupo='".$a[11]."',Telefono='".$a[4]."',cuenta='".$a[10]."' WHERE id = '".$a[12]."';");
        if($this->db->query($SQL)){
            return $a[5];
        }else{
            return FALSE;
        }
    }
}//fin Modelo