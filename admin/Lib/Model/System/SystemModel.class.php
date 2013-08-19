<?php
class SystemModel extends CommonModel{
	protected $_validate = array(
		
	);
	protected $_scope = array(
		'field'=>array('field'=>'varname,info,groupid,value,lang,type,list'),
		'order'=>array('order' => 'sort asc' ),
	);
	protected $_auto = array (

	);
}