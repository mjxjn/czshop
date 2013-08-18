<?php
class AdminLogModel extends CommonModel{
	protected $_scope = array(
	       	 // 默认的命名范围
	        	'default'=>array(
	            		'order'=>'log_id desc',
	        	),
	        	'list'=>array('field'=>'log_id,add_time,admin_id,log_info,log_ip'),
	);

	public function admin_log($sn = '', $action, $content){
		return L('lan');
	}
}