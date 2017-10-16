<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function index()
	{	

		$this->load->model('User_model','model'); // 加载user表别名为model ，后面可以$this->model 直接使用
		$pagesize = 20;  //一页显示多少条数据

		//分页
		$this->load->library('pagination'); //分页加载器
		$config['base_url'] = site_url('Welcome/index');
		$config['total_rows'] = $this->model->getrows(); //得到总行数
		$config['per_page'] = $pagesize;

		$offset = $this->uri->segment(3,0);
		$this->pagination->initialize($config);
		$page = $this->pagination->create_links();

		$res = $this->model->getAll($offset,$pagesize);
		$data['list'] = $res;
		$data['page'] = $page;

		$this->load->view('user/index',$data);
	}

	//新增加管理员
	public function add(){
		echo 1;

		$this->load->view('user/add');
	}


}
