<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Integral extends MY_Controller {


	//会员积分记录
	public function userlog(){

		$view_data['title'] = '会员积分查询';

		//加载session
		$this->load->library('session');
		$this->load->model('integral_model','model');

		$uid = $this->session->userdata('user_id');
		
		$view_data['user'] = $this->session->userdata('userinfo');
		$view_data['log'] = $this->model->get_user_integral($uid);
		$view_data['where_day'] = $id = $this->uri->segment(3,0);

		$this->load->view('user/integral',$view_data);
	}

}