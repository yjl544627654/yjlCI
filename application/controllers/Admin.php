<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function index()
	{

		//var_dump(base_url());exit();
		$this->load->view('index/index');
	}


}
