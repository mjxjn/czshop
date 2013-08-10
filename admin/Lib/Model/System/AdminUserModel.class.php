<?php
class AdminUserModel extends CommonModel{
	protected $_scope = array(
	       	 // 默认的命名范围
	        	'default'=>array(
	            		'order'=>'admin_id asc',
	        	),
	        	'list'=>array('field'=>'admin_id,admin_name,last_login,login_count,status'),
	        	'info'=>array('field'=>'admin_id,admin_name,status'),
	);
	protected $_auto = array( 
	    	array('status','0'),  // 新增的时候把status字段设置为0
	    	array('login_count','0'),  // 新增的时候把status字段设置为0
	    	array('password','',2,'ignore'),//更新时密码为空，就忽略
	    	array('password','md5',1,'function') , // 对password字段在任何的时候使md5函数处理
	    	//array('admin_name','getName',1,'callback'), // 对name字段在新增的时候回调getName方法
	    	array('add_time','time',1,'function'), // 对create_time字段在新增的时候写入当前时间戳
	    	//array('salt','getSalt',1,'callback'),
	    	
	);
	protected $_validate = array(
		array('admin_name','require','帐号名称不能为空！'), //默认情况下用正则进行验证
    	             array('admin_name','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
    		//array('value',array(1,2,3),'值的范围不正确！',2,'in'), // 当值不为空的时候判断是否在一个范围内
    		array('repassword','password','确认密码不一致',0,'confirm'), // 验证确认密码是否和密码一致
    		array('admin_name','/^[\x{4e00}-\x{9fa5}A-Za-z0-9]{3,16}$/u','帐号名称格式不正确',0), //
    		array('password','checkPwd','密码格式不正确！',2,'callback') , 
	);
	protected $_link = array(
		'Adminlog'=> array(  
    			'mapping_type'=>HAS_MANY,
    			'class_name'=>'AdminLog',
                    		'foreign_key'=>'admin_id',
                    		'mapping_name'=>'username',
                   	),
	);
	protected function checkPwd($pwd){
		if(!preg_match('/^[\@A-Za-z0-9\!\#\$\%\^\&\*\.\~]{6,22}$/',$pwd)){
			return false;
		}
	}


}