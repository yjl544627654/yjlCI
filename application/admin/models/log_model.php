<?php
/**
* 
*/
class Log_model extends CI_model
{
	
	// function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->database();
	// }

	function getAll($page=1,$size=10){
		
		$res = $this->db->limit($size,$page)->get('log');
		return $res->result();

	}

	function getrows(){

		$res = $this->db->get('log');
		return $res->num_rows();
	}
}