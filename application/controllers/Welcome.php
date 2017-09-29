<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	
	public function index()
	{

		$this->load->model('Log_model','model');
		$pagesize = 20;

		//分页
		$this->load->library('pagination'); //加载器
		$config['base_url'] = site_url('Welcome/index');
		$config['total_rows'] = $this->model->getrows();
		$config['per_page'] = $pagesize;
		$offset = $this->uri->segment(3,0);
		$this->pagination->initialize($config);
		$page = $this->pagination->create_links();

		$res = $this->model->getAll($offset,$pagesize);
		$data['list'] = $res;
		$data['page'] = $page;


		$this->load->view('dbtest',$data);
	}


	public function testmodel(){

		//加载模型 Log_model

		$this->load->model('Log_model','model');
		$res = $this->model->getAll();
		//var_dump($res);exit;

	}

	public function dbtest(){

		//加载数据库操作类
		$this->load->database();

		// $ret = $this->db->query('select * from tp_log limit 10 ;');
		// $arr = $ret->result(); //返回的是对象的形式 
		//$ret->result_array();返回的是二维数组
		//$ret->row(); 返回的是一条记录对象形式
		//$ret->row_array(); 放回的是一条数组的记录 
		//$ret->first_row();  返回的是第一条记录 
		//$ret->first_row('array'); //返回数组形式

		// $list = $this->db->get('log');
		// var_dump($list->result_array());

		$table = 'log';
		$res = $this->db->select('operate,admin')
				->where('id=2')
				->order_by('addtime desc')
				->limit(10,0)
				->get('log');

		var_dump($res->result_array());exit;
		var_dump($this->db->last_query());exit;
		

		$data['list'] = $arr;
		$this->load->view('dbtest',$data);

	}

	public function test(){
		$this->load->helper('function');
		echotest();

		//$id = $this->uri->segment(2,0);
		//$name = $this->input->get('user');
		//$server = $this->input->server('HTTP_HOST');
		$ip  =$this->input->ip_address();
		var_dump($ip);

		$data['msg'] = '这是test的数据';
		$this->load->view('welcome_message',$data);
	}


	public function addUser(){
		
		if( IS_POST ){
			$username = $this->input->post('user');
			$pwd = $this->input->post('pwd');

			//文件上传
			$config['upload_path']      = './uploads/images/';
			$config['allowed_types']    = 'gif|jpg|png|jpeg';
			$config['max_size']     = 2048;
			$config['encrypt_name']     = true; //随机文件名

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('img'))
	        {
	            $error = $this->upload->display_errors();
	            echo $error;
	        }
	        echo 'ok';
			
		}else{
			$this->load->view('user/add');
		}
		
	}


	public function sessionTset(){

		$this->load->library('session');
		$this->session->set_userdata('user','xiaoming');
		echo $this->session->user;
		$rest = $this->session->unset_userdata('user');
		var_dump($this->session->user);
	}


	public function captchaTest(){

		$this->load->helper('captcha');
		$vals = array(
			    'img_path'  => './captcha/',  //存储路径
			    'img_url'   => base_url().'./captcha',  //地址
			    'img_width' => '150',         //宽度
			    'img_height'    => 30,  	  //高度
			    'expiration'    => 3600,      //过期时间
			    'word_length'   => 5,	      //验证码长度
			    'colors'    => array(         //自定义颜色
				        'background' => array(255, 255, 255),
				        'border' => array(255, 255, 255),
				        'text' => array(0, 0, 0),
				        'grid' => array(255, 40, 40)
				    )
			);

		$cap = create_captcha($vals);
		echo $cap['image'];                  //验证码输出   $cap['word'] 是验证码
	}

	//表单验证
	public function formTset(){
		$this->load->library('form_validation');  //加载表单验证类

		if( IS_POST ){
			
			// $this->form_validation->set_rules('user','用户名','required');
			// $this->form_validation->set_rules('pwd','密码','required');
			// $this->form_validation->set_rules('email','邮箱','valid_emails|required');

			if ($this->form_validation->run('signup'))
	        {
	            echo 'ok';
	        }
		}
		$this->load->view('form_test');
	}
}
