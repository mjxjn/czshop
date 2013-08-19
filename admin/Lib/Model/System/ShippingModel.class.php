<?php
class ShippingModel extends CommonModel{
	protected $_validate = array(

	);
	protected $_scope = array(
		'field'=>array('field'=>'shipping_id,shipping_code,shipping_name,shipping_desc,status,is_cod,is_gua,sort,pay_type,shipping_config'),
	);
	protected $_auto = array (

	);
	/**
	 * 根据ID获取单条信息
	 * @param  int $pay_id 支付方式id
	 * @return array 支付方式
	 */
	function getShippingById($id){
		return $this->scope("field")->where("shipping_id = ".$id)->find();
	}
}