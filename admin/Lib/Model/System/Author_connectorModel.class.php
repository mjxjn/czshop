<?php
class author_connectorModel extends CommonModel{
	protected $_validate = array(
		
	);
	protected $_scope = array(
		'field'=>array('field'=>'userId,name,infos,logo,openId,source,accessToken,createTime,validate,status'),
	);
	protected $_auto = array (

	);
}