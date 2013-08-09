<?php
class AdminUserModel extends CommonModel{
	protected $_scope = array(
	       	 // 默认的命名范围
	        	'default'=>array(
	            		'where'=>array('status'=>1),
	            		'order'=>'admin_id asc',
	        	),
	        	'slist'=>array('field'=>'admin_id,admin_name,last_login,login_count'),
	        	'sinfo'=>array('field'=>'admin_id,admin_name'),
	);
	protected $_validate = array(
		//array('verify','require','验证码必须！'), //默认情况下用正则进行验证
    	             array('admin_name','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
    		//array('value',array(1,2,3),'值的范围不正确！',2,'in'), // 当值不为空的时候判断是否在一个范围内
    		array('repassword','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
    		array('password','/^[^_][a-zA-Z0-9_\u4e00-\u9fa5]{6,16}$/i','密码格式不正确',0), // 
	);
	protected $_auto = array ( 
	    	array('status','1'),  // 新增的时候把status字段设置为1
	    	array('password','md5',1,'function') , // 对password字段在新增的时候使md5函数处理
	    	array('admin_name','getName',1,'callback'), // 对name字段在新增的时候回调getName方法
	    	array('add_time','time',2,'function'), // 对create_time字段在更新的时候写入当前时间戳
	    	array('salt','getSalt',1,'callback'),
	    	array('password','',2,'ignore'),//更新时密码为空，就忽略
	);

}