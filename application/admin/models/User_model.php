<?php

class User_model extends CI_model
{
	

	function getAll($page=1,$size=10){
		
		$res = $this->db->limit($size,$page)->get('User');
		return $res->result();

	}

	function getrows(){

		$res = $this->db->get('User');
		return $res->num_rows();
	}

}