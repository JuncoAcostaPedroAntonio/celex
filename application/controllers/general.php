<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General extends CI_Controller {

	public function __construct(){
		parent::__construct();
			$this->load->model('m_login','',TRUE);
		$this->session->sess_destroy();
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function prueba(){
		$respuesta = $this->m_login->prueba();
		var_dump($respuesta);
	}
}