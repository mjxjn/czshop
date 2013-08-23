<?php
return array(
	//站点设置
	'payment_list' => '支付平台列表',
	'payment_logo' => '图标',
	'payment_name' => '名称',
	'payment_status' => '状态',
	'payment_desc' => '描述',


	// Common
	'pay_name' => '支付方式名称',

	'pay_fee' => '手续费设置',

	'is_cod' => '是否开启现金支付方式',
	'tips_cod' => '设置是否开启现金支付方式，默认为开启，现金支付和POS机支付方式必须开启其中一项，不能都关闭',

	'is_pos' => '是否开启POS机支付方式',
	'tips_pos' => '设置是否开启POS机支付方式，默认为开启，现金支付和POS机支付方式必须开启其中一项，不能都关闭',

	'pay_desc' => '支付方式描述',
	'tips_desc' => '您可以在这里编辑支付方式的详细描述，将在用户结算时显示',

	'api_type' => '使用接口类型',

	// 货到付款cash
	'iscash' => '是否开启货到付款支付方式',

	'tips_cash' => '货到付款支付方式，系统将不进行在线支付流程，如不适用此种支付方式请选择关闭',

	'tips_iscash' => '设置是否开启货到付款支付方式，默认为开启',

	'cash_tips_name' => '设置支付方式名称，此处设置将在会员结算时显示，默认为货到付款',

	
	'cash_tips_fee' => '您可以对货到付款设置是否收取手续费，单位为元，默认为0，不收取',

	// 支付宝alipay
	'isalipay' => '是否开启支付宝支付方式',

	'tips_alipay' => '支付宝支付方式是国内领先的支网上支付平台，使用此种方式需先于支付宝公司签订合作协议。 <a href="#">立刻在线申请</a>',

	'tips_isalipay' => '设置是否开启支付宝支付方式，默认为关闭',

	'alipay_tips_name' => '设置支付方式名称，此处设置将在会员结算时显示，默认为支付宝',

	
	'alipay_tips_fee' => '您可以对支付宝支付设置是否收取手续费，单位为%，默认为0，不收取',

	'alipay_parterID' => '合作者身份(parterID)',

	'tips_alipay_parterID' => '填写支付宝提供的合作者身份编码',

	'alipay_key' => '交易安全校验码(key)',

	'tips_alipay_key' => '填写支付宝提供的交易安全校验码',

	'api_type' => '使用接口类型',

	'tips_alipay_api' => '选择您与支付宝签约的接口类型',

	//财付通tenpay

	'istenpay' => '是否开启财付通支付方式',

	'tips_tenpay' => '财付通是腾讯旗下的网上支付平台，使用此种方式需先于腾讯财付通公司签订合作协议。 <a href="#">立刻在线申请</a>',

	'tips_istenpay' => '设置是否开启财付通支付方式，默认为关闭',

	'tenpay_tips_name' => '设置支付方式名称，此处设置将在会员结算时显示，默认为财付通',

	'tenpay_merchant' => '财付通商户号',

	'tips_tenpay_merchant' => '填写财付通签约商户号',

	'tenpay_key' => '财付通密钥',

	'tips_tenpay_key' => '填写财付通密钥',

	'tips_tenpay_api' => '选择您与财付通签约的接口类型',

	'tenpay_tips_fee' => '您可以对财付通支付设置是否收取手续费，单位为%，默认为0，不收取',

	//快钱kuaiqian

	'iskuaiqian' => '是否开启快钱支付方式',

	'tips_kuaiqian' => '快钱是国内领先的独立第三方支付企业，旨在为各类企业及个人提供安全、便捷和保密的支付清算与账务服务，使用此种方式需先于快钱支付公司签订合作协议。 <a href="#">立刻在线申请</a>',

	'tips_iskuaiqian' => '设置是否开启快钱支付方式，默认为关闭',

	'kuaiqian_tips_name' => '设置支付方式名称，此处设置将在会员结算时显示，默认为快钱支付',

	'kuaiqian_merchant' => '快钱支付商户号',

	'tips_kuaiqian_merchant' => '填写快钱支付签约商户号',

	'kuaiqian_key' => '快钱支付密钥',

	'tips_kuaiqian_key' => '填写快钱支付密钥',

	'tips_kuaiqian_api' => '选择您与快钱支付签约的接口类型',

	'kuaiqian_tips_fee' => '您可以对快钱支付设置是否收取手续费，单位为%，默认为0，不收取',

	//网银在线ebank

	'isebank' => '是否开启网银在线支付方式',

	'tips_ebank' => '财付通是腾讯旗下的网上支付平台，使用此种方式需先于腾讯财付通公司签订合作协议。 <a href="#">立刻在线申请</a>',

	'tips_isebank' => '设置是否开启网银在线支付方式，默认为关闭',

	'ebank_tips_name' => '设置支付方式名称，此处设置将在会员结算时显示，默认为网银在线',

	'ebank_merchant' => '网银在线商户号',

	'tips_ebank_merchant' => '填写网银在线签约商户号',

	'ebank_key' => '网银在线密钥',

	'tips_ebank_key' => '填写网银在线密钥',

	'tips_ebank_api' => '选择您与网银在线签约的接口类型',

	'ebank_tips_fee' => '您可以对网银在线支付设置是否收取手续费，单位为%，默认为0，不收取',

	//环迅支付ips

	'isips' => '是否开启环迅支付方式',

	'tips_ips' => '财付通是腾讯旗下的网上支付平台，使用此种方式需先于腾讯财付通公司签订合作协议。 <a href="#">立刻在线申请</a>',

	'tips_isips' => '设置是否开启环迅支付方式，默认为关闭',

	'ips_tips_name' => '设置支付方式名称，此处设置将在会员结算时显示，默认为环迅支付',

	'ips_merchant' => '环迅支付商户号',

	'tips_ips_merchant' => '填写环迅支付签约商户号',

	'ips_key' => '环迅支付密钥',

	'tips_ips_key' => '填写环迅支付密钥',

	'tips_ips_api' => '选择您与环迅支付签约的接口类型',

	'ips_tips_fee' => '您可以对环迅支付设置是否收取手续费，单位为%，默认为0，不收取',

);
?>