<?php

//自定义表单规则集合
//直接使用 $this->form_validation->run('集合名') 


$config = array(
    'signup' => array(
        array(
            'field' => 'user',
            'label' => '用户名',
            'rules' => 'required'
        ),
        array(
            'field' => 'pwd',
            'label' => '密码',
            'rules' => 'required'
        ),
        // array(
        //     'field' => 'passconf',
        //     'label' => 'Password Confirmation',
        //     'rules' => 'required'
        // ),
        array(
            'field' => 'email',
            'label' => '邮箱',
            'rules' => 'required|valid_emails'
        )
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