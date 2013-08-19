<?php
class AdminLogModel extends CommonModel{
	protected $_scope = array(
	       	 // 默认的命名范围
	        	'default'=>array(
	            		'order'=>'log_id desc',
	        	),
	        	'list'=>array('field'=>'log_id,add_time,admin_id,log_info,log_ip'),
	);
	protected $_link = array(
		'admin_user'=>array(
		            'mapping_type' =>BELONGS_TO,
		            'class_name' => 'admin_user',
		            'foreign_key'=>'admin_id',
		            'mapping_name' => 'admin_name',
		            'mapping_fields' => 'admin_name',
		            'as_fields'=>'admin_name',
		),	
	);
	public function admin_log($sn = '', $action, $content){
		$data['add_time']=time();
		$data['admin_id']=1;//$_SESSION['admin_id'];
		$data['log_info']=L($action).':'.L($content).'-'.$sn;
		$data['log_ip']=get_client_ip();
		$this->add($data);
	}
}