<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->model('registro');		
	}

	function index(){
		$this->load->view('menus/formulario');

	}

	function recibir(){
		$data = array(
			'area' => $this->input->post('area'), 
			'comida' => $this->input->post('comida'),
			'cantidad' => $this->input->post('cantidad')	
			);
		$this->registro->pedidos($data);
		$this->load->view('menus/formulario');

	}

	function consulta(){
		$data['segmento'] = $this->uri->segment(3);
		if (!$data['segmento']) {
			
			$data['areas'] = $this->registro->consulta_general();
		}
		else{
			$data['areas'] = $this->registro->consultar_pedidos($data['segmento']);
		}
		
		$this->load->view('menus/consulta', $data);
	}

	function actualizar(){
		$data = array(
			'area' => $this->input->post('area'), 
			'comida' => $this->input->post('comida'),
			'cantidad' => $this->input->post('cantidad')
			);
		$this->registro->actualizar_pedidos($data);
		$this->load->view('menus/exitoso');

	}

}

?>