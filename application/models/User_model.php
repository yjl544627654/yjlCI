<?php

class User_model extends CI_model
{
	
	private $table = 'user';

	//添加用户
	function addUser(){
		
		$data['truename'] = $this->input->post('truename');
		$data['phone'] = $this->input->post('phone');
		$data['store_id'] = $this->input->post('store_id');
		$data['regtime'] = time();
		$data['birthday'] = $this->input->post('birthday');

		$ret = $this->db->insert($this->table,$data);
		if($ret){
			return $this->db->insert_id();
		}else{
			return false;
		}


	}
	//获取用户信息
	function getUser($uid){

		$query = $this->db->where('uid',$uid)->get($this->table);
		$ret = $query->first_row('array');;
		return $ret;
	}

	//保存收货地址
	function update_add($uid){

		$data['shipping_address'] = $this->input->post('shipping_address');
		$data['detailed_address'] = $this->input->post('detailed_address');
		$where = ['uid'=>$uid];
		$ret = $this->db->update($this->table,$data,$where);
		return $ret;

	}



}