<?php
class PaymentModel extends CommonModel{
	protected $_validate = array(
		array('pay_name','require','支付方式不能为空！'),
		array('pay_fee','require','手续费不能为空！'),
		array('pay_desc','require','支付方式描述不能为空！'),
	);
	protected $_scope = array(
		'field'=>array('field'=>'pay_id,pay_code,pay_logo,pay_name,pay_desc,status,pay_fee,is_cod,is_pos,pay_config'),
	);
	protected $_auto = array (

	);
	/**
	 * 根据ID获取单条信息
	 * @param  int $pay_id 支付方式id
	 * @return array 支付方式
	 */
	function getPaymentById($pay_id){
		return $this->scope("field")->where("pay_id = ".$pay_id)->find();
	}
}