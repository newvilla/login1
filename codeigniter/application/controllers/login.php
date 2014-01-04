<?php if(!defined('BASEPATH')) exit('no direct script acess allowed');

class Login extends CI_Controller{
		function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->model('login_model');		
	}

		function index(){
		
		$this->load->helper('url');
		$this->load->view('pages/login');
	}

	function verificar(){
		$data = array(
			'usuario' => $this->input->post('usuario'),
			'clave' => $this->input->post('clave')
		 );
		
		$result = $this->login_model->usuarios($data);

		if($result){
		
			foreach ($result->result() as $key ) { //Para interpretar que tipo de usuario es (admin o public) 
				if ($key['lastname'] == admin) {

					$this->load->view('menus/formulario');
				}
				else{
					$this->load->view('menus/user_public');
				}
			}
			
		}
		else{
			$this->load->view('pages/login');
		}
	}

}
?>