<?php

//自定义表单规则集合
//直接使用 $this->form_validation->run('集合名') 


$config = array(
    'reg' => array(
        array(
            'field' => 'truename',
            'label' => '姓名',
            'rules' => 'required'
        ),
        array(
            'field' => 'birthday',
            'label' => '生日',
            'rules' => 'required'
        ),
        array(
            'field' => 'phone',
            'label' => '手机号',
            'rules' => 'required'
        ),
        array(
            'field' => 'store_id',
            'label' => '注册区域门店',
            'rules' => 'required'
        ),
        
    ),
    'email' => array(
        array(
            'field' => 'emailaddress',
            'label' => 'EmailAddress',
            'rules' => 'required|valid_email'
        ),
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required|alpha'
        ),
        array(
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'required'
        ),
        array(
            'field' => 'message',
            'label' => 'MessageBody',
            'rules' => 'required'
        )
    )
);