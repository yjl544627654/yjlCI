<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {


	function __construct()
	{
		parent::__construct();
		//加载user模型
		$this->load->model('user_model','user');
		//加载session
		$this->load->library('session');
	}


	public function reg(){
		$view_data['title'] = '注册';
		
		$this->load->library('form_validation');

		if( IS_POST ){
			//添加注册
			if( $this->form_validation->run('reg') ){

				$uid = $this->user->addUser();
				if( $uid ){
					//设置session
					$this->session->set_userdata('user_id',$uid);

					//保存用户信息到session
					$this->session->set_userdata('userinfo',$this->user->getUser($uid));

					redirect(site_url('user/index'));
				}else{
					echo '注册失败！';
				}
			}
		}

		$this->load->view('user/registered',$view_data);
	}

	//登录
	public function login(){
		$view_data['title'] = '登录';

		$uid = $this->input->get('uid');
		
		$userinfo = $this->user->getUser($uid);

		if($userinfo){
			//存储session
			$this->session->set_userdata('userinfo',$userinfo);
			$this->session->set_userdata('user_id',$uid);
			redirect(site_url('user/index'));

		}else{
			echo "登录失败!";
		}
		

	}

	public function index()
	{	
		
		$view_data['title'] = '个人中心';
		$view_data['user'] = $this->session->userdata('userinfo');

		$this->load->view('user/index',$view_data);

	}


	public function edit(){
		$view_data['title'] = '基本信息编辑';

		$uid = $this->session->userdata('user_id');
		$view_data['user'] = $this->user->getUser($uid);

		if(IS_POST){
			//保存收货详情地址
			if ($this->user->update_add($uid)) {
				redirect('user/index');
			}
		}
		
		$this->load->view('user/edit',$view_data);
	}


	
	


}

