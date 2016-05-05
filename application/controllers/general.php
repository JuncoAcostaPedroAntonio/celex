<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General extends CI_Controller {

	public function __construct(){
		parent::__construct();
			$this->load->model('m_login','',TRUE);
	}

	public function index()
	{
		$this->load->view('login');
	}

	function insertar(){
		$this->load->view('generales/encabezado');
		$this->load->view('interfaces/inser_estud');
		$this->load->view('generales/footer');
	}
	
	function editar_a(){
		$this->load->view('generales/encabezado');
		$this->load->view('administrador/editar_alumno');
		$this->load->view('generales/footer');
		
	}
	
}