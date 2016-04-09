<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
		if (isset($_POST['#contraseña'])) {
			$this->load->model('m_model');
			if ($this->m_model->validar($_POST['correo'],$_POST['contraseña'])) {
				redirect('general');
			}else{
				redirect('login');
			}

		}
	}

}