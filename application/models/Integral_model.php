<?php

class Integral_model extends CI_model
{
	
	private $table = 'integral';

	public function get_user_integral($uid){

		$day = $id = $this->uri->segment(3,0);
		$where['uid'] = $uid;
		switch ($day) {
			case '7':
				$where['addtime>'] = date('Y-m-d',strtotime('-7 days'));
				break;
			case '60':
				$where['addtime>'] = date('Y-m-d',strtotime('-3 month'));
				break;
			case '365':
				$where['addtime>'] = date('Y-m-d',strtotime('-1 year'));
				break;
			default:break;
		}
		
		$ret = $this->db->where($where)
						->order_by('addtime desc')
						->get($this->table);
		$list = $ret->result();
		return $list;

	}

}