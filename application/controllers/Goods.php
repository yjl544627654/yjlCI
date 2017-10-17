<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goods extends MY_Controller {


	public function index(){
		$view_data['title'] = '积分商城';

		$this->load->view('goods/goods_index',$view_data);
	}

}