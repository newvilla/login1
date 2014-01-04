<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Model {
	function __construct(){
		parent::__construct();

		$this->load->database();
	
	}
	function pedidos($data){
		$this->db->insert('pedidos', array('areapedidos'=>$data['area'], 'comidapedidos'=>$data['comida'], 'cantidadpedidos'=>$data['cantidad']));

	}

	function consulta_general(){
		$query = $this->db->get('pedidos');
		if($query -> num_rows()>0) return $query;
		else return false;

	}

	function consultar_pedidos($id){
		$this->db->where('id',$id);
		$query = $this->db->get('pedidos');
		if($query -> num_rows()>0){ 
			return $query;
		}
		else {
	
 			return NULL;
		}
	}

	function actualizar_pedidos($data){

		$this->db->where('areapedidos',$data['area']);
		$this->db->update('pedidos', array('comidapedidos'=>$data['comida'], 'cantidadpedidos'=>$data['cantidad']));

			}


}

?>