<?php

//通用型的模型类

class Common_model extends CI_model
{
	


	//查询所有的列表 
	//有分页时候使用
	//$page : 表示第几页
	//$size : 一共显示几页
	//$model : 连接的数据库名，去掉前缀
	function getAll($page=1,$size=10,$model){
		
		$res = $this->db->limit($size,$page)->get($model);
		return $res->result();

	}

}