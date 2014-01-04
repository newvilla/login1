<?php if(!defined('BASEPATH')) exit('no direct script acess allowed');

class Login_model extends CI_Model{

		function __construct(){
		parent::__construct();

		$this->load->database();
		}

	function usuarios($data){

		$query = $this->db->get_where('user',array('name'=>$data['usuario'],'password'=>$data['clave']));
			
		if ($query->num_rows()>0) {

			return $query;
		}
		else{
			return false; 
		}
		
	}



}
?>